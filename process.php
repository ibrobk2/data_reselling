<?php
// require_once("db.php");



class UserAuthentication {
    private $conn; // Database connection

    public function __construct($conn) {
        $this->conn = $conn;
    }

    // Register a new user
    public function registerUser($fullName, $username, $email, $phone, $state, $password, $token, $initialWalletAmount = 0) {
        // Check if username already exists
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $stmt->close();
            return false; // Username already exists
        }
        $stmt->close();

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert user details into the database
        $stmt = $this->conn->prepare("INSERT INTO users (fullName, username, phone, email, state, password, token, wallet) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssd", $fullName, $username, $phone, $email, $state, $hashedPassword, $token, $initialWalletAmount);
        $success = $stmt->execute();
        $stmt->close();

        return $success;
    }


     // Login user
     public function login($usernameOrPhone, $password) {
        // Check if the username or phone number exists in the database
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ? OR phone = ?");
        $stmt->bind_param("ss", $usernameOrPhone, $usernameOrPhone);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                // Start session and store logged in user
                session_start();
                $_SESSION['loggedInUser'] = $user['username'];
                return true; // Login successful
            }
        }
        return false; // Invalid username/phone or password
    }
}


// Database connection
include 'db.php'; // Assuming db.php includes code to establish database connection and assigns it to $conn variable

// Example usage:
$auth = new UserAuthentication($conn);


?>






