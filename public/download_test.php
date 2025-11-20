<?php

// Set error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Path to the file relative to this script
$filePath = '../storage/app/products/files/01JZRRHCEGM1YC4XWHTFAZZAG7.pdf';

// Check if file exists
if (!file_exists($filePath)) {
    die("Error: File does not exist at path: $filePath");
}

// Get the file size
$fileSize = filesize($filePath);
if ($fileSize === false) {
    die("Error: Could not determine file size");
}

// Set headers for file download
header('Content-Description: File Transfer');
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="test-product.pdf"');
header('Content-Length: ' . $fileSize);
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Expires: 0');

// Clear output buffer
ob_clean();
flush();

// Read the file and output it
readfile($filePath);
exit; 