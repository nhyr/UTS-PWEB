<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
if($email == "idris@usm.ac.id" && $password == "123"){
    // echo "<b>Login Berhasil</b>";
    $_SESSION['login'] = true;
    header('Location: http://localhost/praktekweb/dashboard.php');
}else{
    header('Location: http://localhost/praktekweb/index.php?error=Login Gagal');
}