<?php

session_start();

if(@$_SESSION["meshul"]){
        
        echo "Sizin sebetinizde ".$_SESSION["meshul"]." mehsul var";

}else{
    
    if($_POST){

        $meshul = $_POST["meshul"];
    
        $_SESSION["meshul"] = $meshul;
    
        }else{
    
            echo '<form method="post" action="session.php">
            Mehsul elave edin <br/>
            <input type="text" name="meshul"/><br/>
            <input type="submit" value="Add to cart" name="submit" />
            </form>';
                
       } 
}

?>


