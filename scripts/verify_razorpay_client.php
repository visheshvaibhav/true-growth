<?php

/**
 * Razorpay Client-Side Integration Verifier
 * 
 * This script verifies that the Razorpay API key is correctly configured
 * for client-side usage in your checkout page.
 * 
 * Usage: php scripts/verify_razorpay_client.php
 */

require __DIR__ . '/../vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

// Get Razorpay key from environment
$key = $_ENV['RAZORPAY_KEY'] ?? null;

echo "Razorpay Client-Side Integration Verifier\n";
echo "=======================================\n\n";

// Check if key is set
if (empty($key)) {
    echo "❌ ERROR: Razorpay key is not set in your .env file.\n";
    echo "Please make sure you have RAZORPAY_KEY set in your .env file.\n";
    exit(1);
}

// Check key format
if (!preg_match('/^rzp_/', $key)) {
    echo "❌ ERROR: Invalid Razorpay key format. Keys should start with 'rzp_'.\n";
    echo "Current key: " . substr($key, 0, 6) . "...\n";
    exit(1);
}

echo "✅ Razorpay key found: " . substr($key, 0, 6) . "...\n\n";

// Create HTML test file
$testFile = __DIR__ . '/razorpay_test.html';
$html = <<<HTML
<!DOCTYPE html>
<html>
<head>
    <title>Razorpay Test</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
    <h1>Razorpay Integration Test</h1>
    <button id="pay-button">Test Razorpay Integration</button>
    
    <script>
        document.getElementById('pay-button').addEventListener('click', function() {
            var options = {
                "key": "$key",
                "amount": "100", // 1 INR in paise
                "currency": "INR",
                "name": "Test Company",
                "description": "Test Transaction",
                "handler": function (response){
                    alert('Success: ' + response.razorpay_payment_id);
                },
                "prefill": {
                    "name": "Test User",
                    "email": "test@example.com",
                    "contact": "9999999999"
                },
                "theme": {
                    "color": "#3399cc"
                }
            };
            
            try {
                var rzp = new Razorpay(options);
                rzp.open();
                document.body.innerHTML += '<p>✅ Razorpay initialized successfully!</p>';
            } catch (e) {
                document.body.innerHTML += '<p>❌ Razorpay initialization failed: ' + e.message + '</p>';
            }
        });
        
        // Check if Razorpay is loaded
        if (typeof Razorpay !== 'undefined') {
            document.body.innerHTML += '<p>✅ Razorpay script loaded successfully!</p>';
        } else {
            document.body.innerHTML += '<p>❌ Razorpay script failed to load!</p>';
        }
    </script>
</body>
</html>
HTML;

file_put_contents($testFile, $html);

echo "Test file created at: $testFile\n";
echo "To test the client-side integration:\n";
echo "1. Open this file in a web browser\n";
echo "2. Click the 'Test Razorpay Integration' button\n";
echo "3. Check if the Razorpay payment popup appears\n\n";

// Check for Laravel cache
echo "Checking Laravel configuration cache...\n";
if (file_exists(__DIR__ . '/../bootstrap/cache/config.php')) {
    echo "⚠️ WARNING: Configuration cache detected!\n";
    echo "When you update your .env file, you need to clear the config cache with:\n";
    echo "    php artisan config:clear\n\n";
    
    // Try to clear the cache automatically
    echo "Attempting to clear config cache automatically...\n";
    system('cd ' . __DIR__ . '/../ && php artisan config:clear', $result);
    
    if ($result === 0) {
        echo "✅ Config cache cleared successfully!\n";
    } else {
        echo "❌ Failed to clear config cache. Please run manually.\n";
    }
} else {
    echo "✅ No configuration cache detected.\n";
}

echo "\nRecommendations for production:\n";
echo "1. Make sure you have the same Razorpay key in both .env and config/services.php\n";
echo "2. Always clear config cache after updating keys: php artisan config:clear\n";
echo "3. Verify Razorpay is initialized correctly in browser console (no errors)\n";
echo "4. Check that the key used in checkout.blade.php matches your account\n"; 