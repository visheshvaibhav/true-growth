<?php

/**
 * Razorpay Production Key Updater
 * 
 * This script adds or updates Razorpay API keys in your production .env file
 * It can be run directly on your production server.
 *
 * Usage: php scripts/update_razorpay_production.php YOUR_KEY YOUR_SECRET
 */

if (count($argv) < 3) {
    echo "Usage: php scripts/update_razorpay_production.php YOUR_KEY YOUR_SECRET\n";
    exit(1);
}

$key = $argv[1];
$secret = $argv[2];

// Validate key format
if (!preg_match('/^rzp_/', $key)) {
    echo "Error: The key should start with 'rzp_'\n";
    exit(1);
}

// Path to your .env file
$envFile = __DIR__ . '/../.env';

if (!file_exists($envFile)) {
    echo "Error: .env file not found at $envFile\n";
    exit(1);
}

// Read current .env content
$envContent = file_get_contents($envFile);

// Update or add Razorpay keys
$newContent = preg_replace('/RAZORPAY_KEY=.*/', "RAZORPAY_KEY=$key", $envContent, -1, $keyCount);
$newContent = preg_replace('/RAZORPAY_SECRET=.*/', "RAZORPAY_SECRET=$secret", $newContent, -1, $secretCount);

// If keys weren't found, add them
if ($keyCount == 0) {
    $newContent .= "\nRAZORPAY_KEY=$key";
}
if ($secretCount == 0) {
    $newContent .= "\nRAZORPAY_SECRET=$secret";
}

// Backup the old .env file
file_put_contents($envFile . '.bak', $envContent);
echo "Backed up original .env to .env.bak\n";

// Write the new content
file_put_contents($envFile, $newContent);
echo "Updated Razorpay keys in .env file\n";

// Clear Laravel cache
echo "Clearing Laravel cache...\n";
passthru('php artisan cache:clear');
passthru('php artisan config:clear');

echo "\nDone! Your Razorpay keys have been updated.\n";
echo "Please run 'php scripts/test_razorpay.php' to verify the connection.\n"; 