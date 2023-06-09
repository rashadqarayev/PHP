<?php

// Creating cookies

// username -  cookie name,  Rashad - cookie value, time()+ 10 - cookie expiration time
// setcookie("username", "Rashad",time()+ 10 );
// echo $_COOKIE["username"];

$adminlogin = "admin";
$adminpassword = "12345";


if(@$_COOKIE["girish"] == "ugurlu"){
    echo "Admin Panele xos gelmisiniz!";
    // setcookie("girish","ugurlu",time()-3600);
    // cookie silinir
  
}
else{



if($_POST){

$login = $_POST["login"];
$password = $_POST["password"];

   if($login != $adminlogin or $password != $adminpassword){
    echo "Login ve ya parol sehvidr";
    die();
   }

 setcookie("girish","ugurlu",time()+ 3600);


}else{

echo '<form method="post" action="index.php">
Login <br/>
<input type="text" name="login"  /><br/>
Password <br/>
<input type="password" name="password" /><br/>
<input type="submit" value="Login" name="submit" />
</form>';
    
    }    
    }

?>