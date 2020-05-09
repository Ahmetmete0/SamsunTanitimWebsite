<?php
include("sifre.php");
session_start();
ob_start();






$eposta = $_POST["username"];



if (($_POST["username"] != "") or ($_POST["password"] != "")) {


    if (filter_var($eposta, FILTER_VALIDATE_EMAIL)) {



        if (($_POST["username"] == $user) and ($_POST["password"] == $pass) and (filter_var($eposta, FILTER_VALIDATE_EMAIL))) {
            $_SESSION["login"] = "true";
            $_SESSION["user"] = $user;
            $_SESSION["pass"] = $pass;

           echo $message;
            header("Refresh: 1; url=/proje/sehrim.html");
        } else {
            echo '<script language="javascript">';
            echo 'alert("Kullancı Adı veya Şifre Yanlış")';           
            echo '</script>';
           
            header("Refresh: 0; url=index.php");
        }
    } else {
        echo '<script language="javascript">';
        echo 'alert("Email geçersiz")';
        echo '</script>';
        header("Refresh: 0; url=index.php");
    }
} else {

    echo '<script language="javascript">';
        echo 'alert("Boş Bırakmayınız")';
        echo '</script>';
    header("Refresh: 0; url=index.php");
}

ob_end_flush();
