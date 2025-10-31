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

    // Match ENUM casing exactly
    $acad   = (($data['acad_role'] ?? '') === 'Alumni') ? 'Alumni' : 'Student';
    $market = (($data['market_role'] ?? '') === 'Seller') ? 'Seller' : 'Buyer';

    //Verify whether the email is valid, and a minnstate.edu email.
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      throw new InvalidArgumentException('Bad email');
    }

    $domain= "go.minnstate.edu";
    if(!(str_ends_with($email, $domain))){
        throw new InvalidArgumentException('Must be a minnstate.edu email');
    }
    //Ensure that thepassword isn't too long
    if (strlen($pass) < 6) {
      throw new InvalidArgumentException('Password too short');
    }

    //Check is user already exists
    $stmt = $this->db->prepare("SELECT 1 FROM Accounts WHERE email = ? LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $exists = $stmt->get_result()->fetch_row();

    if ($exists) {
        throw new InvalidArgumentException('Email already exists. Please log in.');
    }

    
    //Hash password before storing
    $hash = password_hash($pass, PASSWORD_DEFAULT);

    $sql_user = "INSERT INTO Accounts
            (email, password, first_name, last_name, school_name, major, acad_role, market_role)
            VALUES (?,?,?,?,?,?,?,?)";

    $stmt = $this->db->prepare($sql_user);
    $stmt->bind_param(
      "ssssssss",
      $email, $hash, $first, $last, $school, $major, $acad, $market
    );
    $stmt->execute();

    return $stmt->insert_id; // >0 on success
  }


    //This will verify is the email and passowrd are valid by checking the database before login the user into the website.
    public function VerifyUser(string $email, string $password){
    
        $Email = trim($email);
        $pass = trim($password);
        
    
       // $password_hash = password_hash($pass, PASSWORD_DEFAULT);
       //
    
        $sql_verify = "SELECT * FROM Accounts WHERE email = ? LIMIT 1";
    
        $stmt = $this->db->prepare($sql_verify);
        if (!$stmt) {
            throw new RuntimeException('Failed to prepare statement: ' . $this->db->error);
        }
        $stmt->bind_param("s", $Email);
        $stmt->execute();
    
        $Existing_email = $stmt->get_result()->fetch_assoc();
    
        if (!($Existing_email)) {
            throw new InvalidArgumentException('Invalid Email');
        }
    
        if (!password_verify($pass, $Existing_email['password'])) {
            throw new InvalidArgumentException('Invalid password');
        }
    
        return $Existing_email['id'];
    }
    public function ChangePassword(string $password){
    
    
    }
    
    }


?>