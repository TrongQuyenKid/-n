<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'login';
}
switch ($page) {
    case "home":
    	require_once "home.php";
    	break;
    case "login":
            if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $table = "account";
            $result = $db->checkUser($username, md5($password), $table);
            if ($result == 0) {
                $msg = "Tài khoản không tồn tại!";
            } else {
               	header('Location:index.php?page=home');
            }
        }
    	require_once "login.php";
    	break;
}
?>