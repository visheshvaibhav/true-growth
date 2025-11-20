#!/bin/bash

# Razorpay Authentication Fixer Script
# This script automates the process of fixing Razorpay authentication issues
# It can be run directly on your production server

# Text formatting
BOLD='\033[1m'
GREEN='\033[0;32m'
RED='\033[0;31m'
YELLOW='\033[0;33m'
NC='\033[0m' # No Color

echo -e "${BOLD}Razorpay Authentication Fixer${NC}\n"
echo "This script will help fix Razorpay authentication issues in your Laravel application."

# Check if we're in the correct directory
if [ ! -f "artisan" ]; then
    echo -e "${RED}Error: This script must be run from the root of your Laravel project.${NC}"
    echo "Please navigate to your project root directory and try again."
    exit 1
fi

# Function to check if Razorpay keys are configured
check_keys() {
    KEY=$(grep RAZORPAY_KEY .env | cut -d '=' -f2)
    SECRET=$(grep RAZORPAY_SECRET .env | cut -d '=' -f2)
    
    echo -e "\n${BOLD}Current Razorpay Configuration:${NC}"
    
    if [ -z "$KEY" ]; then
        echo -e "${RED}• RAZORPAY_KEY: Not configured${NC}"
    else
        echo -e "${GREEN}• RAZORPAY_KEY: Configured${NC} (${KEY:0:6}...)"
    fi
    
    if [ -z "$SECRET" ]; then
        echo -e "${RED}• RAZORPAY_SECRET: Not configured${NC}"
    else
        echo -e "${GREEN}• RAZORPAY_SECRET: Configured${NC} (${SECRET:0:3}...)"
    fi
}

# Check current configuration
check_keys

# Ask if user wants to update keys
echo -e "\n${BOLD}Would you like to update your Razorpay keys? (y/n)${NC}"
read -r update_keys

if [[ $update_keys == "y" || $update_keys == "Y" ]]; then
    echo -e "\n${BOLD}Enter your Razorpay Key (starts with rzp_):${NC}"
    read -r new_key
    
    echo -e "\n${BOLD}Enter your Razorpay Secret:${NC}"
    read -r new_secret
    
    # Validate key format
    if [[ ! $new_key =~ ^rzp_ ]]; then
        echo -e "${RED}Error: Razorpay key should start with 'rzp_'${NC}"
        exit 1
    fi
    
    # Backup .env file
    cp .env .env.backup
    echo -e "${GREEN}• Created backup of .env file as .env.backup${NC}"
    
    # Update keys in .env file
    if grep -q "RAZORPAY_KEY" .env; then
        sed -i.bak "s/RAZORPAY_KEY=.*/RAZORPAY_KEY=$new_key/" .env
    else
        echo "RAZORPAY_KEY=$new_key" >> .env
    fi
    
    if grep -q "RAZORPAY_SECRET" .env; then
        sed -i.bak "s/RAZORPAY_SECRET=.*/RAZORPAY_SECRET=$new_secret/" .env
    else
        echo "RAZORPAY_SECRET=$new_secret" >> .env
    fi
    
    echo -e "${GREEN}• Updated Razorpay keys in .env file${NC}"
fi

# Clear Laravel cache
echo -e "\n${BOLD}Clearing Laravel cache...${NC}"
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

# Test Razorpay connection
echo -e "\n${BOLD}Testing Razorpay connection...${NC}"
if [ -f "scripts/test_razorpay.php" ]; then
    php scripts/test_razorpay.php
else
    echo -e "${YELLOW}Warning: test_razorpay.php script not found. Please run the test manually.${NC}"
fi

echo -e "\n${BOLD}Fix completed!${NC}"
echo -e "If you're still having issues, please refer to docs/razorpay_troubleshooting.md" 