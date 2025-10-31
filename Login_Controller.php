<?php
    session_start();
    $db = require __DIR__ . '/Database.php'; 
    require __DIR__ . '/UserModel.php';

    $userModel = new UserModel($db);

    //write your code here

    if($_SERVER['REQUEST_METHOD']=== 'POST'){

        if(empty($_POST['email']) || empty($_POST['password'])){
            $msg = "Email and password fields can't be empty";
            $_SESSION['flash_errors'] = [$msg];
            $_SESSION['old'] = $_POST;
            header('Location: LoginPage.php');
        }

        try{

            $User_email = $_POST['email'];    
            $User_password = $_POST['password'];

            $user = $userModel->VerifyUser($User_email,$User_password);

            header('Location: buyerpage.php');
            exit;

        }catch(InvalidArgumentException $e){
            $_SESSION['flash_errors'] = [$e ->getmessage()];
            $_SESSION['old'] = $_POST;

            header('Location: LoginPage.php');
            exit;
        }catch(RuntimeException $e){
            $_SESSION['flash_errors'] = ['Server error'];
            header('Location: LoginPage.php');
        }

    }


?>