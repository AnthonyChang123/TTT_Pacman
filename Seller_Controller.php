
<?php

session_start();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


require_once __DIR__ . '/Database.php';
require_once __DIR__ . '/UserModel.php';

$db = require __DIR__ . '/Database.php';
$userModel = new UserModel($db);

// Must be logged in
if (empty($_SESSION['user_id'])) {
  header('Location: LoginPage.php');
  exit;
}

// HTML escaper (controller-only)
function h($v){ return htmlspecialchars($v ?? '', ENT_QUOTES, 'UTF-8'); }

$title = $_POST['titleAuthor'] ?? '';
$ISBN = $_POST['isbn'] ?? '';
$Price = $_POST['price'] ?? '';
$cond = $_POST['condition'] ?? 'New';
$course_dept = $_POST['courseDept'] ?? '';
$contacts = $_POST['contact'] ?? '';


// -------- POST: handle actions, then redirect (PRG) --------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Example routing by submit button name:
  if (isset($_POST['edit_profile'])) {
    // TODO: update DB with posted fields, then redirect
    // ...
    header('Location: Seller_Controller.php'); // PRG
    exit;
  }

  if (isset($_POST['post_book'])) {
    // TODO: handle post book

    $Book_data = [
      'title' => $title,
      'ISBN'  => $ISBN,
      'Price' => $Price,
      'cond'  => $cond,
      'course_dept' => $course_dept,
      'contacts' => $contacts
    ];
    try{
      $userModel -> PostBooks($Book_data);

    }catch(InvalidArgumentException $e ){

    }catch(RuntimeException $e){

    }
    header('Location: Seller_Controller.php');
    exit;
  }

  if (isset($_POST['delete_book'])) {
    // TODO: handle delete
    header('Location: Seller_Controller.php');
    exit;
  }

  if (isset($_POST['save_book'])) {
    // TODO: handle save
    header('Location: Seller_Controller.php');
    exit;
  }

  if (isset($_POST['edit_book'])) {
    // TODO: handle edit
    header('Location: Seller_Controller.php');
    exit;
  }

  // Fallback if no recognized action:
  header('Location: Seller_Controller.php');
  exit;
}

// -------- GET: load data and render the view --------
try {
  $profile = $userModel->ProfileExtraction(); // uses $_SESSION['user_id']
} catch (RuntimeException $e) {
  $profile = [];
}

// Prepare variables for the view
$imgSrc      = $profile['profile_image'] ?? '/TTT_Pacman-1/Images/ProfileIcon.png';
$vImgSrc     = h($imgSrc);
$vFirstName  = h($profile['first_name']   ?? '');
$vAcad       = h($profile['acad_role']    ?? '');
$vSchool     = h($profile['school_name']  ?? '');
$vMajor      = h($profile['major']        ?? '');
$vCityState  = h($profile['city_state']   ?? '');
$vEmail      = h($profile['email']        ?? '');
$vPay        = h($profile['preferred_pay']?? '');

// Render the view (ensure filename/case is correct)
include __DIR__ . '/sellerpage.php';

?>

