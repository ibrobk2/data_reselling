<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    require_once("process.php");
    
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);
}

// Login with username or phone number and password
$success = $auth->login($username, $password); // or $auth->login('123456789', 'password123');
if ($success) {
    echo "<script>
    alert('Logged In successfully!');
    window.location = 'user_dashboard.php';
</script>";
} else {
    echo "<script>
    alert('Invalid Username or Password!');
    window.location = 'login.php';
</script>";
}


?>