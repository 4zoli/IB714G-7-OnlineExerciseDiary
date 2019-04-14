<?php
$page = "logged";
?>
<!DOCTYPE html>
<html lang="hu">
        <head>
                <meta charset="utf-8">
                <meta name="description" content="A Superhero GYM hivatalos weboldala. Online napló, edzéstervek, edzéselmélet. ">
                <meta name="keywords" content="Bejelentkezés">
                <meta name="author" content="Horváth Olivér Zoltán">
                <link rel="stylesheet" href="mainstyle.css">
                <title>Bejelentkezés</title>
                <style>
                        #input a  {
                                color: #1aff1a;
                                text-decoration: none;
                        }

                        #input a:hover   {
                                background: #1aff1a;
                                color: black;
                        }
                        main    {
                                border: green;
                                border-width: 1px;
                                border-style: solid;
                        }

                        @media screen and (max-width: 800px) {
                                header {
                                        display: none;
                                }
                        }
                </style>
        </head>
        <body>
                <?php include("menu.php"); ?>

                <main class="gb_shadow">
                        <header id="center">
                                <h1 class="gt_shadow">Bejelentkezés</h1>
                                <img id="img" src="images/bpanther.png"  alt="">
                        </header>
                        <div id="leftpull">
                        
                        <?php

                                $_SESSION['email'] = $_POST['email'];
                                $_SESSION['jelszo'] = $_POST['jelszo'];

                                if (isset($_SESSION['email']))  {
                                $email = $_SESSION['email'];
                                $jelszo = $_SESSION['jelszo'];

                                if (file_exists("$email.txt")) {                          
                                        $file = file_get_contents("$email.txt"); 
                                        
                                        if(!strstr($file, "Email cim: $email Jelszo: $jelszo")) {
                                                echo "Helytelen jelszo, probald ujra.";
                                        }   else {
                                                $_SESSION['login_user']= $email;
                                                echo "Sikeres bejelentkezes! "."<br>";
                                                echo $_SESSION['login_user'];
                                                include("uploadform.php"); // Külön php file neki, így betudom csak erre az egy esetre includeolni ha sikeres a belépés, 
                                                }                               //ezzel az is megoldva h ne legyen ott a menü annak aki csak nézi az oldalt.
                                        }   else if (!file_exists("$email.txt")){
                                                echo "Nincs ilyen email cim regisztralva";
                                                
                                        }
                                }
                        ?>
                        <br> <br> <br>
                        </div>
                        <footer class="rightfloat">
                                <p class="gt_shadow">Készítette: Horváth Olivér Zoltán, programtervező informatikus hallgató.</p>
                        </footer>
                </main>
        </body>
</html>