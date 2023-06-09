<?php 


// setcookie("salam","reshad",time()+ 60*60*24);

// print_r($_COOKIE);

// Sessionlar


// $_SESSION["login"] = "Admin";

// print_r($_SESSION);

session_start();
$adminlogin = "Rashad";
$adminpassword = "12345";

if(@$_SESSION["girish"] == true){

    if($_SESSION["login"] != $adminlogin or $_SESSION["password"] != $adminpassword){
        $_SESSION["girish"] = false;    
    }

    echo "Admin Panele xos gelmisiniz! <br/>";

    echo '<a href="logout.php">Logout</a>';

}else{


if($_POST){

    $login = $_POST["login"];
    $password = $_POST["password"];

    if($login != $adminlogin or $password != $adminpassword){
        echo "Login ve ya parol sehvidir";
        die();
    }

    $_SESSION["login"] = $login;
    $_SESSION["password"] = $password;
    $_SESSION["girish"] = true;

}

echo '<form method="post" action="index.php">
Login <br/>
<input type="text" name="login"  /><br/>
Password <br/>
<input type="password" name="password" /><br/>
<input type="submit" value="Login" name="submit" />
</form>';
}

// difference between session and cookie