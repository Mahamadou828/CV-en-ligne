<?php

    $userData = array ("firstname" => " " , "name" => " " , "phone" => " " , "message" => " " , "firstnameERROR" => " " , "nameERROR" => " " , "emailERROR" => " " , "phoneERROR" => " " , "messageERROR" => " " ,"isSuccess"=>false ) ; 

    $emailTo = "opmadou@gamil.com" ; 

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $userData["firstname"] = verifyInput ($_POST["first-name"]) ; 
        $userData["name"] = verifyInput ($_POST["name"]) ;
        $userData["email"] = verifyInput ($_POST["email"]) ;
        $userData["phone"] = verifyInput ($_POST["phone"]) ;
        $userData["message"] = verifyInput ($_POST["message"]) ;
        $userData["isSuccess"] = true ; 
        $emailText = "" ;
        
        if (empty($userData["firstname"]))
        {
            $userData["firstnameERROR"] = "Sans nom pas de discussion)" ; 
            $userData["isSuccess"] = false ;
        } else {$emailText .= "Monsieur : {$userData["message"]} " ;} 
        
        if (empty($userData["name"]))
        {
            $userData["nameERROR"] = "Je veux savoir ton nom" ; 
            $userData["isSuccess"] = false ;
        } else {$emailText .= " {$userData["name"]}\n " ; }
        
        if (empty($userData["message"]))
        {
            $userData["messageERROR"] = "Une demande sans Message, stranger?" ; 
            $userData["isSuccess"] = false ;
        } else {$emailText .= "Vous a contacter au sujet de {$userData["message"]}\n " ; }
        
        if (!isEmail($userData["email"]))
        {
            $userData["emailERROR"] = "faux email" ; 
            $userData["isSuccess"] = false ;
        } else { $emailText .= "Son email est: {$userData["email"]}\n " ;}
        
        if(!isNumberPhone($userData["phone"]))
        {
            $userData["phoneERROR"] = "Donne moi ton vrai num stp...." ; 
            $userData["isSuccess"] = false ;
        } else { $emailText .= "Son numero de telephone: {$userData["phone"]}\n " ;}
        
        if ($userData["isSuccess"])
        {   
            $headers = "From : {$userData["firstname"]} {$userData["name"]} <{$userData["email"]}>\r\n Reply-to: {$userData["email"]}" ; 
            mail ($emailTo , "Demande de commande site cv 1" , $emailText , $headers) ; 
            $emailText = "" ;  
        }
        
        echo json_encode ($userData) ;
    }

    function isEmail ($var)
    {
        return filter_var($var , FILTER_VALIDATE_EMAIL) ; 
    }

    function isNumberPhone ($var)
    {
        return preg_match ("/^[0-9+ ]*$/" , $var) ; 
    }

    function verifyInput ($var)
    {
        $var = trim($var) ; 
        $var = stripslashes ($var) ; 
        $var = htmlspecialchars($var) ; 
        return $var ; 
    }

?>