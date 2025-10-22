<?php
    $db = require __DIR__ . '/Database.php';  

    require __DIR__ . '/UserModel.php';

    $userModel = new UserModel($db);  



?>
