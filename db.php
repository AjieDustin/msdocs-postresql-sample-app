<?php
$host = getenv('AZURE_MYSQL_HOST');
$port = getenv('AZURE_MYSQL_PORT') ?: 3306;
$dbname = getenv('AZURE_MYSQL_DBNAME');
$username = getenv('AZURE_MYSQL_USERNAME');
$password = getenv('AZURE_MYSQL_PASSWORD');

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Connected to Azure MySQL successfully!";
} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}
?>
