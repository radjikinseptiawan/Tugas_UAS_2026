<?php
session_start();
include("./config/kernel.php");

if(!isset($_SESSION['admin']) || $_SESSION['admin'] == false){
    header("Location: /login");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $dataObj = new DataUsed();

    $isSuccess = $dataObj->update($_POST);

    if ($isSuccess) {
        $_SESSION['msg'] = "Konten berhasil diperbarui!";
        $_SESSION['msg_type'] = "success";
    } else {
        $_SESSION['msg'] = "Gagal memperbarui database.";
        $_SESSION['msg_type'] = "error";
    }

    header("Location: edit");
    exit();
} else {
    header("Location: edit");
    exit();
}