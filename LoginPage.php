<?php
include('header.php');

?>

<!-- TODO: Connect this form to a PHP script (e.g., login_process.php) that validates user credentials from the database -->
<!-- Look into "Front Controller", src folder, entity, http for sessions? -->
<!-- Design question: Once successful, will the user be navigated to their account page or the home page?-->
<!-- PHP Session and handling, need to brush up on this-->

<form class="form_box" action="" method="POST">
    <div class="TitleLogin"> Login Here </div>
        <div>Username</div>
        <input type="text"></input>
        <div>Password</div>
        <input type="password"></input>
        <button type="submit" class="button">Login</button> 
        <button class="button">Forgot Password</button>
        <button class="button">Register</button>
</form>


<?php
include('footer.php');
?>