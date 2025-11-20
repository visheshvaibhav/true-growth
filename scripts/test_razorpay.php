<?php

/**
 * Razorpay API Key Tester
 * 
 * This script tests your Razorpay API keys to ensure they're working properly.
 * It attempts to create a small test order to validate the authentication.
 *
 * Usage: php scripts/test_razorpay.php
 */

require __DIR__ . '/../vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

// Get Razorpay keys from environment
$key = $_ENV['RAZORPAY_KEY'] ?? null;
$secret = $_ENV['RAZORPAY_SECRET'] ?? null;

echo "Testing Razorpay API Connection\n";
echo "-------------------------------\n";

// Check if keys are set
if (empty($key) || empty($secret)) {
    echo "❌ ERROR: Razorpay keys are not set in your .env file.\n";
    echo "Please make sure you have the following in your .env file:\n";
    echo "RAZORPAY_KEY=your_key_here\n";
    echo "RAZORPAY_SECRET=your_secret_here\n";
    exit(1);
}

echo "Key found: " . substr($key, 0, 6) . "...\n";
echo "Secret found: " . substr($secret, 0, 3) . "...\n\n";

// Try to initialize the Razorpay API
try {
    $api = new Razorpay\Api\Api($key, $secret);
    echo "✅ Successfully initialized Razorpay API\n\n";
    
    // Try to create a test order
    echo "Creating a test order (₹1.00)...\n";
    $orderData = [
        'receipt'         => 'TEST_' . time(),
        'amount'          => 100, // ₹1.00 in paisa
        'currency'        => 'INR',
        'notes'           => ['purpose' => 'API Key Testing']
    ];
    
    $order = $api->order->create($orderData);
    
    echo "✅ SUCCESS: Test order created successfully!\n";
    echo "Order ID: " . $order->id . "\n";
    echo "Your Razorpay configuration is working correctly.\n";
    
} catch (Exception $e) {
    echo "❌ ERROR: Failed to connect to Razorpay API\n";
    echo "Error message: " . $e->getMessage() . "\n\n";
    
    // Provide troubleshooting tips
    echo "Troubleshooting Tips:\n";
    echo "1. Verify your API keys in the .env file\n";
    echo "2. Make sure you're using the correct API keys (test/live)\n";
    echo "3. Check if your Razorpay account is active\n";
    echo "4. Ensure you have proper internet connectivity\n";
    echo "5. Try regenerating your API keys in the Razorpay dashboard\n";
    
    exit(1);
} 