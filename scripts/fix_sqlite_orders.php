<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

echo "SQLite Orders Table Fixer\n";
echo "========================\n\n";

try {
    // Get the database path from Laravel's config
    $databasePath = config('database.connections.sqlite.database');
    
    if (empty($databasePath)) {
        throw new Exception("SQLite database path not configured in .env or config/database.php");
    }
    
    // Create PDO connection
    $pdo = new PDO("sqlite:" . $databasePath);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected to SQLite database at: " . $databasePath . "\n";
    
    // Start transaction
    $pdo->beginTransaction();
    
    // Drop orders_new table if it exists from a previous failed attempt
    try {
        $pdo->exec("DROP TABLE IF EXISTS orders_new");
    } catch (Exception $e) {
        // Ignore any errors here
    }
    
    // Create new table with correct schema
    $pdo->exec("
        CREATE TABLE orders_new (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            digital_product_id INTEGER NOT NULL,
            order_number VARCHAR(255) NOT NULL UNIQUE,
            customer_name VARCHAR(255) NOT NULL,
            customer_email VARCHAR(255) NOT NULL,
            customer_phone VARCHAR(255) NULL,
            amount DECIMAL(10,2) NOT NULL,
            original_amount DECIMAL(10,2) NOT NULL,
            discount_amount DECIMAL(10,2) NOT NULL DEFAULT 0,
            coupon_code VARCHAR(255) NULL,
            razorpay_payment_id VARCHAR(255) NULL,
            razorpay_order_id VARCHAR(255) NOT NULL UNIQUE,
            razorpay_signature VARCHAR(255) NULL,
            status VARCHAR(255) NOT NULL DEFAULT 'pending',
            downloaded_at TIMESTAMP NULL,
            created_at TIMESTAMP NULL,
            updated_at TIMESTAMP NULL,
            FOREIGN KEY (digital_product_id) REFERENCES digital_products(id) ON DELETE RESTRICT
        )
    ");
    
    // Copy existing data if the orders table exists
    try {
        $pdo->exec("
            INSERT INTO orders_new 
            SELECT 
                id, 
                digital_product_id, 
                order_number, 
                customer_name, 
                customer_email, 
                customer_phone, 
                amount, 
                original_amount, 
                discount_amount, 
                coupon_code, 
                razorpay_payment_id, 
                razorpay_order_id, 
                razorpay_signature, 
                status, 
                downloaded_at, 
                created_at, 
                updated_at 
            FROM orders
        ");
        echo "Existing data copied successfully\n";
    } catch (Exception $e) {
        echo "No existing data to copy\n";
    }
    
    // Drop old table
    $pdo->exec("DROP TABLE IF EXISTS orders");
    
    // Rename new table to orders
    $pdo->exec("ALTER TABLE orders_new RENAME TO orders");
    
    // Commit transaction
    $pdo->commit();
    
    echo "\n✅ Success: Orders table schema has been fixed!\n";
    echo "razorpay_payment_id and razorpay_signature columns are now nullable.\n";
    
} catch (Exception $e) {
    if (isset($pdo)) {
        $pdo->rollBack();
    }
    echo "\n❌ Error: " . $e->getMessage() . "\n";
    exit(1);
} 