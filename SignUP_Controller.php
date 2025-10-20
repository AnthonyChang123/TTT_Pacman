<?php
// 1) Get a PDO connection from Database.php (this file must `return $pdo;`)

$db = require __DIR__ . '/Database.php';  

// 2) Load the model class definition
require __DIR__ . '/UserModel.php';

//Create a new instance of the  UserModel class, and Pass in the pdo connection as a parameter, you can perfom sql queries
$userModel = new UserModel($db);  

//Was checking to see if the database stores the SignUp page data, and it works!! Ignore it or use it too.

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $userModel->CreateAccount([
    'email'       => $_POST['email'] ?? '',
    'password'    => $_POST['password'] ?? '',
    'first_name'  => $_POST['firstName'] ?? '',
    'last_name'   => $_POST['lastName'] ?? '',
    'school_name' => $_POST['school'] ?? '',
    'major'       => $_POST['major'] ?? '',
    'acad_role'   => $_POST['role'] ?? 'Student',
    'market_role' => $_POST['market'] ?? 'Buyer',
  ]);

    if ($id > 0) { 
        header('Location: LoginPage.php'); 
        exit; 
    }
}

?>
