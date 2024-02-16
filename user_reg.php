<?php

require_once("process.php");

if($_SERVER['REQUEST_METHOD']=="POST"){
    $fullName = $conn->real_escape_string($_POST['fullName']);
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $state = $conn->real_escape_string($_POST['state']);
    $password = $conn->real_escape_string($_POST['password']);
    $confirmPassword = $conn->real_escape_string($_POST['confirmPassword']);
    $token = substr((rand()*time()),0,6);

    // Register new user
    $success = $auth->registerUser($fullName, $username, $email, $phone, $state, $password, $token, 0);
    if ($success) {
        echo "<script>
            alert('User registered successfully!');
            window.location = 'login.php';
        </script>";
    } else {
        echo "<script>
        alert('Username already exists. please Login');
        window.location = 'login.php';
    </script>";
    }

}



?>