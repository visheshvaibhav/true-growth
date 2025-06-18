#!/bin/bash

# Razorpay Complete Integration Fixer
# This script fixes all common Razorpay integration issues

# Text formatting
BOLD='\033[1m'
GREEN='\033[0;32m'
RED='\033[0;31m'
YELLOW='\033[0;33m'
NC='\033[0m' # No Color

echo -e "${BOLD}Razorpay Complete Integration Fixer${NC}\n"
echo "This script will fix common issues with Razorpay integration."

# Check if we're in the correct directory
if [ ! -f "artisan" ]; then
    echo -e "${RED}Error: This script must be run from the root of your Laravel project.${NC}"
    echo "Please navigate to your project root directory and try again."
    exit 1
fi

# Part 1: Check Razorpay API keys
echo -e "\n${BOLD}Step 1: Checking Razorpay API Keys${NC}"
KEY=$(grep RAZORPAY_KEY .env | cut -d '=' -f2)
SECRET=$(grep RAZORPAY_SECRET .env | cut -d '=' -f2)

if [ -z "$KEY" ]; then
    echo -e "${RED}• RAZORPAY_KEY: Not configured${NC}"
    echo -e "Would you like to set it now? (y/n)"
    read -r set_key
    if [[ $set_key == "y" || $set_key == "Y" ]]; then
        echo -e "Enter your Razorpay Key (starts with rzp_):"
        read -r new_key
        if grep -q "RAZORPAY_KEY" .env; then
            sed -i.bak "s/RAZORPAY_KEY=.*/RAZORPAY_KEY=$new_key/" .env
        else
            echo "RAZORPAY_KEY=$new_key" >> .env
        fi
        echo -e "${GREEN}• RAZORPAY_KEY updated in .env file${NC}"
    fi
else
    echo -e "${GREEN}• RAZORPAY_KEY: Configured${NC} (${KEY:0:6}...)"
fi

if [ -z "$SECRET" ]; then
    echo -e "${RED}• RAZORPAY_SECRET: Not configured${NC}"
    echo -e "Would you like to set it now? (y/n)"
    read -r set_secret
    if [[ $set_secret == "y" || $set_secret == "Y" ]]; then
        echo -e "Enter your Razorpay Secret:"
        read -r new_secret
        if grep -q "RAZORPAY_SECRET" .env; then
            sed -i.bak "s/RAZORPAY_SECRET=.*/RAZORPAY_SECRET=$new_secret/" .env
        else
            echo "RAZORPAY_SECRET=$new_secret" >> .env
        fi
        echo -e "${GREEN}• RAZORPAY_SECRET updated in .env file${NC}"
    fi
else
    echo -e "${GREEN}• RAZORPAY_SECRET: Configured${NC} (${SECRET:0:3}...)"
fi

# Part 2: Update services config if needed
echo -e "\n${BOLD}Step 2: Checking config/services.php${NC}"
if [ ! -f "config/services.php" ]; then
    echo -e "${RED}• config/services.php not found${NC}"
else
    if grep -q "razorpay" config/services.php; then
        echo -e "${GREEN}• Razorpay configuration found in services.php${NC}"
    else
        echo -e "${YELLOW}• Razorpay configuration not found in services.php${NC}"
        echo -e "Would you like to add it? (y/n)"
        read -r add_config
        if [[ $add_config == "y" || $add_config == "Y" ]]; then
            # Create a backup
            cp config/services.php config/services.php.bak
            # Add Razorpay config
            awk -v key="$KEY" -v secret="$SECRET" '
            /return \[/ {
                print;
                in_array = 1;
                next;
            }
            /];/ {
                if (in_array) {
                    print "    \"razorpay\" => [";
                    print "        \"key\" => env(\"RAZORPAY_KEY\", \"" key "\"),";
                    print "        \"secret\" => env(\"RAZORPAY_SECRET\", \"" secret "\"),";
                    print "        \"webhook_secret\" => env(\"RAZORPAY_WEBHOOK_SECRET\"),";
                    print "    ],";
                }
                in_array = 0;
                print;
                next;
            }
            { print }' config/services.php.bak > config/services.php.new
            
            mv config/services.php.new config/services.php
            echo -e "${GREEN}• Razorpay configuration added to services.php${NC}"
        fi
    fi
fi

# Part 3: Fix database schema
echo -e "\n${BOLD}Step 3: Fixing Database Schema${NC}"
echo -e "Would you like to fix the orders table schema (make razorpay fields nullable)? (y/n)"
read -r fix_schema
if [[ $fix_schema == "y" || $fix_schema == "Y" ]]; then
    if [ -f "scripts/fix_database_schema.php" ]; then
        php scripts/fix_database_schema.php
    else
        echo -e "${YELLOW}• scripts/fix_database_schema.php not found${NC}"
        echo -e "Would you like to try the migration instead? (y/n)"
        read -r run_migration
        if [[ $run_migration == "y" || $run_migration == "Y" ]]; then
            php artisan migrate --force
        fi
    fi
fi

# Part 4: Clear Laravel caches
echo -e "\n${BOLD}Step 4: Clearing Laravel Cache${NC}"
php artisan cache:clear
echo -e "${GREEN}• Application cache cleared${NC}"

php artisan config:clear
echo -e "${GREEN}• Configuration cache cleared${NC}"

php artisan route:clear
echo -e "${GREEN}• Route cache cleared${NC}"

php artisan view:clear
echo -e "${GREEN}• View cache cleared${NC}"

php artisan optimize:clear
echo -e "${GREEN}• All caches optimized and cleared${NC}"

# Part 5: Verify Razorpay API connection
echo -e "\n${BOLD}Step 5: Testing Razorpay Connection${NC}"
if [ -f "scripts/test_razorpay.php" ]; then
    php scripts/test_razorpay.php
else
    echo -e "${YELLOW}Warning: test_razorpay.php script not found. Please run the test manually.${NC}"
fi

# Part 6: Verify client-side integration
echo -e "\n${BOLD}Step 6: Verifying Client-Side Integration${NC}"
if [ -f "scripts/verify_razorpay_client.php" ]; then
    php scripts/verify_razorpay_client.php
else
    echo -e "${YELLOW}Warning: verify_razorpay_client.php script not found. Please check client-side integration manually.${NC}"
fi

echo -e "\n${BOLD}Fix completed!${NC}"
echo -e "If you're still having issues, please refer to docs/razorpay_troubleshooting.md"
echo -e "Or try to manually verify the integration by opening: scripts/razorpay_test.html in your browser." 