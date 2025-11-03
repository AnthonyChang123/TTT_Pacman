<?php
$db = require __DIR__ . '/Database.php';  
require __DIR__ . '/UserModel.php';

$userModel = new UserModel($db);  

session_start();



if (isset($_POST['edit_profile'])) {
  // Handle profile edit
  echo "Editing profile...";
}

if (isset($_POST['delete_book'])) {
  // Handle book deletion
  echo "Deleting book...";
}

if (isset($_POST['save_book'])) {
  // Handle book save
  echo "Saving book...";
}

if (isset($_POST['edit_book'])) {
  // Handle book edit
  echo "Editing book...";
}

if (isset($_POST['post_book'])) {
  // Handle book posting
  echo "Posting book...";
}
?>
