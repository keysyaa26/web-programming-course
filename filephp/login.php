<?php
    if(isset($_POST['email']) || isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    }

    if($email == "iniemail@email.com" && $password == "pass") {
        header('Location: ../php-html/home-admin.php');
    } else {
        echo 'Email atau password salah';
    }
?>