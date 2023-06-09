<?php

if(@$_COOKIE["meshul"]){
        
        echo "Sizin sebetinizde ".$_COOKIE["meshul"]." mehsul var";

}else{
    
    if($_POST){

        $meshul = $_POST["meshul"];
    
            setcookie("meshul",$meshul,time()+ 3600);
    
        }else{
    
            echo '<form method="post" action="index.php">
            Mehsul elave edin <br/>
            <input type="text" name="meshul"/><br/>
            <input type="submit" value="Add to cart" name="submit" />
            </form>';
                
       } 
}

?>


