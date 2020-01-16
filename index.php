<!DOCTYPE html>

<html>

    <head>
        <title>CV: Mahamadou Samake</title>
        <!-- <meta name="viewport" content="width = device-width , initial-scale=1"> -->
        <meta charset="utf-8" /> 
        <script src="javascript/JQuery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="glyphicon/glyphicon.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="javascript/script.js"></script>
    </head>
    
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
        
    <?php 

        if (isset($_GET['language']))
        {

            $language = verifyInput ($_GET['language']) ; 
    
            if (preg_match("/(francais)/" , $language)) 
            {
                require "langue/Francais.php" ;

                echo frenchSite () ; 
            } else if (preg_match("/(russe)/" , $language))
            {
                require "langue/russe.php" ; 

                echo russianSite () ;
            } else
            {
                die() ;
            }
        }
    
        else
        {
            if (preg_match("/(ru)/" , $_SERVER["HTTP_ACCEPT_LANGUAGE"]))
            {
                require "langue/russe.php" ; 

                echo russianSite () ;
            } else if (preg_match("/(fr)/" , $_SERVER["HTTP_ACCEPT_LANGUAGE"]))
            {
                require "langue/Francais.php" ;

                echo frenchSite () ; 
            }
        }
    
        function verifyInput ($information)
        {
            $information = trim ($information) ; 
            $information = strip_tags ($information) ; 
            $information = htmlspecialchars ($information) ; 
            return $information ; 
        }
    
    ?>
  
    </body>

</html>

<!-- Probleme et recommadation 
2-La partie portfolio doit etre un carousel d'image
4-Rediger notre partie experience professionnel
6-Ajouter le cv sous format pdf au bouton telecharger cv
-->