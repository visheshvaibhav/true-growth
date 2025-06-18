<?php

/**
 * Database Schema Fixer for Razorpay Integration
 * 
 * This script directly modifies the database schema to make razorpay_payment_id
 * and razorpay_signature columns nullable to solve the constraint error.
 * 
 * WARNING: Make a backup of your database before running this script!
 * 
 * Usage: php scripts/fix_database_schema.php
 */

require __DIR__ . '/../vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

// Get database connection from Laravel config
$dbConnection = env('DB_CONNECTION', 'mysql');
$dbHost = env('DB_HOST', '127.0.0.1');
$dbPort = env('DB_PORT', '3306');
$dbName = env('DB_DATABASE', 'laravel');
$dbUsername = env('DB_USERNAME', 'root');
$dbPassword = env('DB_PASSWORD', '');

echo "Database Schema Fixer for Razorpay Integration\n";
echo "=============================================\n\n";
echo "This script will fix the NOT NULL constraint issue on razorpay_payment_id and razorpay_signature columns.\n\n";

// Warning for production
echo "⚠️  WARNING: Make sure you have a backup of your database before proceeding!\n";
echo "Do you want to continue? (y/n): ";
$handle = fopen("php://stdin", "r");
$line = fgets($handle);
if (trim($line) != 'y') {
    echo "Aborted!\n";
    exit;
}

try {
    // Create PDO connection
    if ($dbConnection == 'sqlite') {
        $pdo = new PDO("sqlite:" . $dbName);
        echo "Connected to SQLite database: $dbName\n";
    } else {
        $dsn = "{$dbConnection}:host={$dbHost};port={$dbPort};dbname={$dbName}";
        $pdo = new PDO($dsn, $dbUsername, $dbPassword);
        echo "Connected to {$dbConnection} database on {$dbHost}:{$dbPort}\n";
    }

    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Start transaction
    $pdo->beginTransaction();

    // Fix for SQLite
    if ($dbConnection == 'sqlite') {
        // For SQLite, we need to create a new table and copy data
        echo "Creating temporary table for SQLite migration...\n";
        
        // 1. Create new table with correct schema
        $pdo->exec("
            CREATE TABLE orders_new (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                digital_product_id INTEGER NOT NULL,
                order_number VARCHAR(255) NOT NULL,
                customer_name VARCHAR(255) NOT NULL,
                customer_email VARCHAR(255) NOT NULL,
                customer_phone VARCHAR(255) NULL,
                amount DECIMAL(10,2) NOT NULL,
                original_amount DECIMAL(10,2) NOT NULL,
                discount_amount DECIMAL(10,2) NOT NULL DEFAULT 0,
                coupon_code VARCHAR(255) NULL,
                razorpay_payment_id VARCHAR(255) NULL,
                razorpay_order_id VARCHAR(255) NOT NULL,
                razorpay_signature VARCHAR(255) NULL,
                status VARCHAR(255) NOT NULL DEFAULT 'pending',
                downloaded_at TIMESTAMP NULL,
                created_at TIMESTAMP NULL,
                updated_at TIMESTAMP NULL,
                FOREIGN KEY (digital_product_id) REFERENCES digital_products(id) ON DELETE RESTRICT
            )
        ");
        
        // 2. Copy data from old table to new table
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
        
        // 3. Drop old table
        $pdo->exec("DROP TABLE orders");
        
        // 4. Rename new table to old table name
        $pdo->exec("ALTER TABLE orders_new RENAME TO orders");
        
        // 5. Create indexes
        $pdo->exec("CREATE UNIQUE INDEX orders_order_number_unique ON orders (order_number)");
        $pdo->exec("CREATE UNIQUE INDEX orders_razorpay_order_id_unique ON orders (razorpay_order_id)");
        
    } else {
        // For MySQL/PostgreSQL/etc.
        echo "Modifying table schema...\n";
        
        // Modify columns to be nullable
        $pdo->exec("ALTER TABLE orders MODIFY razorpay_payment_id VARCHAR(255) NULL");
        $pdo->exec("ALTER TABLE orders MODIFY razorpay_signature VARCHAR(255) NULL");
    }

    // Commit transaction
    $pdo->commit();
    
    echo "\n✅ Success: Database schema has been fixed!\n";
    echo "razorpay_payment_id and razorpay_signature columns are now nullable.\n";
    
} catch (PDOException $e) {
    // Roll back transaction on error
    if (isset($pdo)) {
        $pdo->rollBack();
    }
    
    echo "\n❌ Error: " . $e->getMessage() . "\n";
    
    // Provide more specific guidance based on the error
    if (strpos($e->getMessage(), 'table orders_new already exists') !== false) {
        echo "A previous attempt may have failed. Try dropping the orders_new table first.\n";
    } elseif (strpos($e->getMessage(), 'no such table: orders') !== false) {
        echo "The orders table doesn't exist. Check your database configuration.\n";
    }
    
    exit(1);
} 