<?php
// Skriv alla funktioner här :D


$logins = array(
    array("Martin Myrmarker", "martin@mail.se", 1234),
    array("Anton Petersson", "anton@mail.se", 1234),
    array("Louise", "louise@mail.se", 1234),
    array("André", "Andre", 1234)
);


function login($logins){
    $username = "user";
    $password = "password";

    for( $i = 0; $i < count($logins); $i++){
        $hello = $logins[$i][0];
        if( $_POST["user"] == $logins[$i][1] and  $_POST["password"] == $logins[$i][2] ){
            $_SESSION["loginSingel"] = true;
            header("location: singelsidan.php");
            echo "<script type='text/javascript'>alert('Välkommen $hello');</script>";
           
           
            
        }
    }    
}


