<?php
session_start();
$db = require __DIR__ . '/Database.php';

if (empty($_SESSION['user_id'])) {
    header("Location: LoginPage.php");
    exit;
}

$user = (int) $_SESSION['user_id'];

$first   = $_POST['first_name'] ?? '';
$last    = $_POST['last_name'] ?? '';
$school  = $_POST['school_name'] ?? '';
$major   = $_POST['major'] ?? '';
$city    = $_POST['city_state'] ?? '';
$pay     = $_POST['preferred_pay'] ?? 'Cash';

$newPath = null;

if (!empty($_FILES['profileImage']['name'])) {

    $uploadDir = __DIR__ . "/Uploads/avatars/";
    if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

    $ext = strtolower(pathinfo($_FILES['profileImage']['name'], PATHINFO_EXTENSION));
    $fileName = "avatar_{$user}_" . time() . "." . $ext;
    $fullPath = $uploadDir . $fileName;

    if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $fullPath)) {
        $newPath = "Uploads/avatars/" . $fileName;
    }
}

// update base account
$stmt = $db->prepare("
    UPDATE accounts
    SET first_name=?, last_name=?, school_name=?, major=?, city_state=?
    WHERE id=?
");
$stmt->bind_param("sssssi", $first, $last, $school, $major, $city, $user);
$stmt->execute();
$stmt->close();

// update profile table
if ($newPath !== null) {
    $stmt = $db->prepare("
        INSERT INTO userprofile (user_id, profile_image, preferred_pay)
        VALUES (?, ?, ?)
        ON DUPLICATE KEY UPDATE profile_image = VALUES(profile_image), preferred_pay = VALUES(preferred_pay)
    ");
    $stmt->bind_param("iss", $user, $newPath, $pay);
} else {
    $stmt = $db->prepare("
        INSERT INTO userprofile (user_id, preferred_pay)
        VALUES (?, ?)
        ON DUPLICATE KEY UPDATE preferred_pay = VALUES(preferred_pay)
    ");
    $stmt->bind_param("is", $user, $pay);
}

$stmt->execute();
$stmt->close();

header("Location: EditProfilePage.php?saved=1");
exit;
