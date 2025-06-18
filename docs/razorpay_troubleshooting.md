# Razorpay Integration Troubleshooting Guide

This guide will help you diagnose and fix common issues with Razorpay integration in your Laravel application.

## Authentication Failed Error

If you're seeing "Authentication failed" errors in your logs or payment failures, follow these steps:

### 1. Verify API Keys

First, check if your API keys are correctly set and working:

```bash
php scripts/test_razorpay.php
```

If this fails, you need to update your API keys.

### 2. Update API Keys in Production

If your keys are working locally but not in production, update them:

```bash
php scripts/update_razorpay_production.php YOUR_KEY YOUR_SECRET
```

Replace `YOUR_KEY` and `YOUR_SECRET` with your actual Razorpay API keys.

### 3. Clear Laravel Cache

After updating the keys, clear all Laravel caches:

```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan optimize:clear
```

### 4. Check Environment Configuration

Ensure your production environment is correctly loading the .env file:

1. Make sure the .env file has proper permissions (644)
2. Verify the web server has read access to the file
3. Check that your deployment process didn't overwrite the file

### 5. Common Issues and Solutions

#### Configuration Cache

If you've cached your configuration, your new environment variables won't be loaded until you clear it:

```bash
php artisan config:clear
```

#### API Key Format

-   Test mode keys start with `rzp_test_`
-   Live mode keys start with `rzp_live_`

Make sure you're using the correct type for your environment.

#### Key Permissions

Ensure the keys you're using have the necessary permissions in the Razorpay dashboard:

1. Go to Razorpay Dashboard > Settings > API Keys
2. Check the permissions for your keys
3. Make sure "Orders" permission is enabled

#### Account Status

Verify your Razorpay account is active and in good standing:

1. Log in to the Razorpay dashboard
2. Check for any account status notifications
3. Ensure you've completed all required KYC procedures

## Advanced Debugging

### Enable Detailed Logging

For more detailed logging, update your `.env` file:

```
LOG_LEVEL=debug
```

### Check Server Requirements

Razorpay requires:

-   PHP 7.3+ with cURL extension
-   OpenSSL PHP extension
-   JSON PHP extension

Verify these are installed and enabled on your server.

### Test with Postman

You can test the Razorpay API directly with Postman to isolate issues:

1. Use Basic Auth with your key as username and secret as password
2. Make a POST request to `https://api.razorpay.com/v1/orders`
3. With JSON body: `{"amount": 100, "currency": "INR", "receipt": "test"}`

## Contact Support

If you've tried all the steps above and still face issues:

1. Collect your server logs
2. Note the exact error messages
3. Contact Razorpay support at support@razorpay.com or your Laravel application developer

# Razorpay Database Schema Fix

This guide provides several options for fixing the NOT NULL constraint issue with the Razorpay payment fields in the orders table.

## The Problem

When creating an order with Razorpay, you're encountering the following error:

```
Integrity constraint violation: 19 NOT NULL constraint failed: orders.razorpay_payment_id
```

This happens because:

1. The database schema requires `razorpay_payment_id` and `razorpay_signature` to be NOT NULL
2. These values aren't available when initially creating the order (they're only provided after payment)

## Solution Options

### Option 1: Direct Database Fix (Recommended for Production)

This is the fastest and safest approach for production environments:

```bash
# On your production server
cd /path/to/your/project
php scripts/fix_database_schema.php
```

This script will:

1. Connect to your database using your `.env` configuration
2. Make a backup of your orders table (for SQLite)
3. Modify the schema to allow NULL values for payment fields
4. Preserve all existing data

### Option 2: Use Laravel Migration

If you prefer using Laravel's standard migration approach:

```bash
# On your production server
cd /path/to/your/project
php artisan migrate --force
```

This will run the migration that makes the razorpay fields nullable.

### Option 3: Code-level Workaround

If you can't modify the database schema, we've implemented a workaround in the code:

1. The `PaymentController` now provides empty strings for `razorpay_payment_id` and `razorpay_signature` when creating an order
2. These fields are updated with real values when the payment is verified

## Fixing "Authentication key was missing during initialization" Error

If you're seeing this error in the Razorpay dialog, it means the frontend JavaScript is not receiving the API key correctly. To fix:

### Step 1: Verify your Razorpay key is correctly set in the environment

```bash
# On your production server
php scripts/verify_razorpay_client.php
```

### Step 2: Make sure config is not cached

```bash
# Clear Laravel config cache
php artisan config:clear
php artisan optimize:clear
```

### Step 3: Check the client-side JavaScript

Look in your browser console for errors. Make sure the key is being output correctly. It should look like:

```
Razorpay key (first 6 chars): rzp_te...
```

### Step 4: Verify in the HTML source

View the page source and check if the Razorpay key is being included in the JavaScript options.
Search for `key:` in the source - it should contain your Razorpay key.

### Step 5: Test direct initialization

Open `/scripts/razorpay_test.html` in your browser to test if Razorpay can be initialized correctly outside your app.

## Verification

After applying any of the fixes above, test the integration:

```bash
# On your production server
php scripts/test_razorpay.php
```

Then try creating a new order through the website interface.

## Common Issues and Solutions

### Migration Fails

If migration fails with error about `customer_phone` already existing:

```
SQLSTATE[HY000]: General error: 1 duplicate column name: customer_phone
```

This means your database schema is out of sync with migrations. Use Option 1 (direct fix) instead.

### Data Loss Concerns

All fixes are designed to preserve existing data. If you're concerned:

1. Make a database backup before applying any fix
2. Run the fix during low-traffic periods
3. Test thoroughly after the fix

### Empty Payment Fields

If you see empty strings in `razorpay_payment_id` or `razorpay_signature` fields after successful payments, clear your application cache:

```bash
php artisan cache:clear
php artisan config:clear
php artisan optimize:clear
```

## Technical Details

### Database Schema Before Fix

```sql
CREATE TABLE orders (
    -- other fields
    razorpay_payment_id VARCHAR(255) NOT NULL, -- Problem: NOT NULL constraint
    razorpay_order_id VARCHAR(255) NOT NULL,
    razorpay_signature VARCHAR(255) NOT NULL, -- Problem: NOT NULL constraint
    -- other fields
);
```

### Database Schema After Fix

```sql
CREATE TABLE orders (
    -- other fields
    razorpay_payment_id VARCHAR(255) NULL, -- Fixed: Now allows NULL
    razorpay_order_id VARCHAR(255) NOT NULL,
    razorpay_signature VARCHAR(255) NULL, -- Fixed: Now allows NULL
    -- other fields
);
```

This allows the initial order record to be created without these values, which are then populated after successful payment.
