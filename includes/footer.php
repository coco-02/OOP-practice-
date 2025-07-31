<?php

require_once 'includes/config.php';

/**
 * Returns an active database connection.
 * 
 * @return PDO
 */
function f1_get_db_connection()
{
    try {
        global $db_host, $db_user, $db_pass, $db_name;
        $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        exit("Connection failed: " . $e->getMessage());
    }

}

function sanitize_input ($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}
