<?php

require_once 'DatabaseConnection.php';

// Get database connection instance
$db = DatabaseConnection::getInstance();

// Create table if not exists
try {
    $sql = "CREATE TABLE IF NOT EXISTS pelanggan (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        alamat VARCHAR(255) NOT NULL,
        telepon VARCHAR(20) NOT NULL
    )";
    $db->exec($sql);
    echo "Table created successfully<br>";
} catch (PDOException $e) {
    echo "Error creating table: " . $e->getMessage() . "<br>";
}

// Insert data
try {
    $sql = "INSERT INTO pelanggan (nama, email, alamat, telepon) VALUES 
            ('John Doe', 'john@example.com', 'Jalan Raya No. 123', '081234567890'),
            ('Jane Smith', 'jane@example.com', 'Jalan Baru No. 456', '085678901234'),
            ('Michael Johnson', 'michael@example.com', 'Jalan Lama No. 789', '089012345678')";
    $db->exec($sql);
    echo "New records created successfully<br>";
} catch (PDOException $e) {
    echo "Error inserting records: " . $e->getMessage() . "<br>";
}

// Update data
try {
    $sql = "UPDATE pelanggan SET telepon = '081234567891' WHERE nama = 'John Doe'";
    $db->exec($sql);
    echo "Record updated successfully<br>";
} catch (PDOException $e) {
    echo "Error updating record: " . $e->getMessage() . "<br>";
}

// Delete data
try {
    $sql = "DELETE FROM pelanggan WHERE nama = 'Jane Smith'";
    $db->exec($sql);
    echo "Record deleted successfully<br>";
} catch (PDOException $e) {
    echo "Error deleting record: " . $e->getMessage() . "<br>";
}
