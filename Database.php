<?php

// -------- SHARED (hosted on my PC at home LAN) --------

$db_server_shared   = '10.0.0.59';
$db_user_shared     = 'campusdev';
$db_password_shared = 'StrongPass123!';
$db_name_shared     = 'campustrade';

// -------- LOCAL (fallback to each developer’s own XAMPP) --------
$db_server_local   = '127.0.0.1';
$db_user_local     = 'root';
$db_password_local = '';
$db_name_local     = 'campustrade';

// Make MySQLi throw exceptions so try/catch works
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // --- Try SHARED (your home machine) ---
    $db = new mysqli($db_server_shared, $db_user_shared, $db_password_shared, $db_name_shared);
    $db->set_charset('utf8mb4');
    return $db;

} catch (mysqli_sql_exception $e1) {

    // --- Fallback to LOCAL ---
    try {
        $db = new mysqli($db_server_local, $db_user_local, $db_password_local, $db_name_local);
        $db->set_charset('utf8mb4');
        return $db;

    } catch (mysqli_sql_exception $e2) {
        // Optional: error_log('DB connect failed. Shared: '.$e1->getMessage().' | Local: '.$e2->getMessage());
        http_response_code(500);
        exit('Database connection failed (shared & local).');
    }
}
