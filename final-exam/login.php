<?php

session_start();

if(@$_SESSION["adi"]){
    // print_r($_SESSION);
    echo "Welcome " . $_SESSION["adi"] . "<br/>";
    echo "Your password is " . $_SESSION["parol"] . "<br/>";
    echo "Your email is " . $_SESSION["email"] . "<br/>";
    echo "Your age is " . $_SESSION["yash"] . "<br/>";
    echo "Your university is " . $_SESSION["universiteti"] . "<br/>";
  
    echo '<a href="logout.php">Logout</a>';

}else{


    if($_POST){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];   
        $yash = $_POST["yash"];
        $university = $_POST["university"];
        
        $_SESSION["adi"] = $username;
        $_SESSION["parol"] = $password;
        $_SESSION["email"] = $email;
        $_SESSION["yash"] = $yash;
        $_SESSION["universiteti"] = $university;
    }


    echo '<form method="post" action="login.php">
Username <br/>
<input type="text" name="username"  /><br/>
Password <br/>
<input type="password" name="password" /><br/>
Email <br/>
<input type="email" name="email"  /><br/>
Yash <br/>
<input type="number" name="yash"  /><br/>
University <br/>
<input type="text" name="university"  /><br/>
<input type="submit" value="Login" name="submit" />
</form>';
}


?>

