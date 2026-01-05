<?php

session_start();

class Authentication{
    public function login(){
    if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST['username'] ?? null;
    $password = $_POST["password"] ?? null;

    if($username == 'admin' && $password == '123'){
        $_SESSION['admin'] = True;
        $_SESSION['username'] = $username;
        header("Location: /companyProfileCMS/edit");
        exit;
    }
    }        
    }    
}
