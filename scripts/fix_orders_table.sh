#!/bin/bash

# Orders Table Schema Fixer
# This script fixes the orders table schema issue with NOT NULL constraint on razorpay_payment_id

# Text formatting
BOLD='\033[1m'
GREEN='\033[0;32m'
RED='\033[0;31m'
YELLOW='\033[0;33m'
NC='\033[0m' # No Color

echo -e "${BOLD}Orders Table Schema Fixer${NC}\n"
echo "This script will fix the NOT NULL constraint issue on razorpay_payment_id in the orders table."

# Check if we're in the correct directory
if [ ! -f "artisan" ]; then
    echo -e "${RED}Error: This script must be run from the root of your Laravel project.${NC}"
    echo "Please navigate to your project root directory and try again."
    exit 1
fi

# Check if migration exists
MIGRATION_FILE=$(find database/migrations -name "*_modify_orders_table_for_razorpay_nullable_fields.php" | head -n 1)
if [ -z "$MIGRATION_FILE" ]; then
    echo -e "${RED}Error: Migration file not found.${NC}"
    echo "Please make sure the migration file has been created."
    echo "You can create it with: php artisan make:migration modify_orders_table_for_razorpay_nullable_fields"
    exit 1
fi

echo -e "${YELLOW}Found migration file: ${MIGRATION_FILE}${NC}"

# Check if the migration file contains the necessary changes
if ! grep -q "razorpay_payment_id.*nullable" "$MIGRATION_FILE"; then
    echo -e "${RED}Error: Migration file does not contain the necessary changes.${NC}"
    echo "Please make sure the migration file modifies the razorpay_payment_id column to be nullable."
    exit 1
fi

echo -e "${GREEN}Migration file looks good.${NC}"

# Backup the database
echo -e "\n${BOLD}Creating database backup...${NC}"
php artisan db:backup 2>/dev/null || echo -e "${YELLOW}Warning: Could not create database backup. Continuing anyway...${NC}"

# Run the migration
echo -e "\n${BOLD}Running migration...${NC}"
php artisan migrate --force
if [ $? -ne 0 ]; then
    echo -e "${RED}Error: Migration failed.${NC}"
    echo "Please check the error message above and fix the issue."
    exit 1
fi

echo -e "${GREEN}Migration completed successfully.${NC}"

# Clear Laravel cache
echo -e "\n${BOLD}Clearing Laravel cache...${NC}"
php artisan cache:clear
php artisan config:clear
php artisan view:clear
php artisan optimize:clear

echo -e "\n${GREEN}${BOLD}Fix completed!${NC}"
echo "The orders table should now allow NULL values for razorpay_payment_id and razorpay_signature columns."
echo "Payments should now work correctly. Try creating a new order to verify." 