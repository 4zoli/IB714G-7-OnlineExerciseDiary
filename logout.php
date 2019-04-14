<?php
$page = "login";
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
                        <?php include("menu.php"); 
                        $_SESSION = array();
                        ?>

                        <main class="gb_shadow">
                                <header id="center">
                                        <h1 class="gt_shadow">Bejelentkezés</h1>
                                        <img id="img" src="images/bpanther.png"  alt="">
                                </header>
                                <div id="leftpull">
                                        <hr>
                                        <h2>Sikeresen kijelentkeztél ! </h2>
                                       
                                </div>
                                <footer class="rightfloat">
                                        <p class="gt_shadow">Készítette: Horváth Olivér Zoltán, programtervező informatikus hallgató.</p>
                                </footer>
                        </main>
                </body>
        </html>
