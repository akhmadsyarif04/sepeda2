<?php
session_start();
include_once('connect.php');

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $hasil = $db->query("SELECT * from login WHERE user='$user'");
    $data = $hasil->fetch_assoc();
    $username = $data['user'];
    $password = $data['pass'];
    $name = $data['nama'];
    $type = $data['type'];
    $verify = password_verify($pass, $password);
    if ($verify) {
        if ($type == 'admin') {
            $_SESSION['name'] = $name;
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;
            echo "<script>location.assign('admin/admin.php')</script>";
        } else {
            echo "<script>window.alert('Maaf, Login Anda Salah')</script>";
            echo "<script>location.assign('../login.html')</script>";

        }
    } else {
            echo "<script>window.alert('Maaf, cek lagi username dan password anda')</script>";
            echo "<script>location.assign('../login.html')</script>";

    }
}
?>
