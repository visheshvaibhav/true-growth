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
