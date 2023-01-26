<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once 'lib/koneksi.php';
function login($post){

    $db = new Database();
    $q = "SELECT * FROM account WHERE username = '$post[username]' AND password = '$post[password]'";
    if($db->query($q)){
        $res = $db->fetch();
        if(count($res)>0){
            $_SESSION['username'] = $res[0]->username;
            $_SESSION['password'] = $res[0]->password;
            $_SESSION['name'] = $res[0]->name;
            $_SESSION['role'] = $res[0]->role;
            header( 'Location: index.php');
        }else{
        echo "<script>alert('Username atau Password Salah / Tidak Terdaftar');window.location='index.php';</script>";
    }
    }
}

if(isset($_POST['button'])){
    switch ($_POST['button']){
        case 'login':
            login($_POST);
            break;
        default: echo 'no route available';
    }
}