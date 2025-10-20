<?php

class UserModel {
  private mysqli $db;

  // Constructor: accept a PDO instance
  public function __construct(mysqli $db) {
    $this ->db = $db;
  }

 
  public function CreateAccount(array $data): int {
    // Normalize & validate
    $email  = trim($data['email'] ?? '');
    $pass   = (string)($data['password'] ?? '');
    $first  = trim($data['first_name'] ?? '');
    $last   = trim($data['last_name'] ?? '');
    $school = trim($data['school_name'] ?? '');
    $major  = trim($data['major'] ?? '');

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      throw new InvalidArgumentException('Bad email');
    }
    if (strlen($pass) < 6) {
      throw new InvalidArgumentException('Password too short');
    }

    // Match ENUM casing exactly
    $acad   = (($data['acad_role'] ?? '') === 'Alumni') ? 'Alumni' : 'Student';
    $market = (($data['market_role'] ?? '') === 'Seller') ? 'Seller' : 'Buyer';

    // Hash password before storing
    $hash = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO Accounts
            (email, password, first_name, last_name, school_name, major, acad_role, market_role)
            VALUES (?,?,?,?,?,?,?,?)";

    $stmt = $this->db->prepare($sql);
    $stmt->bind_param(
      "ssssssss",
      $email, $hash, $first, $last, $school, $major, $acad, $market
    );
    $stmt->execute();

    return $stmt->insert_id; // >0 on success
  }

    //Method will verify is the email and passowrd are valid by checking the database
    public function VerifyUser(string $email, string $password){


    }
   //Method will update the password in the database.
    public function ChangePassword(string $password){


    }
 }


?>