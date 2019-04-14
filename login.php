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
                <?php include("menu.php"); ?>

                <main class="gb_shadow">
                        <header id="center">
                                <h1 class="gt_shadow">Bejelentkezés</h1>
                                <img id="img" src="images/bpanther.png"  alt="">
                        </header>
                        <div id="leftpull">
                                <hr>
                                <h2>Kerlek írd be az adataidat: </h2>
                                <div id="input">
                                        <form action="logged.php" method="POST">
                                                <label for="email"><b>Email cím</b></label>
                                                        <input type="text" placeholder="hulk@strongest.peace" id="email" name="email" required>
                                                <label for="jelszo"><b>Jelszó</b></label>
                                                        <input type="password" placeholder="********" id="jelszo" name="jelszo" required>
                                                <button type="submit">Bejelentkezés</button> <br>
                                                <span  class="psw">Elfelejtett <a href="mailto:h.oliver91@live.com?Subject=Elfelejtett%20jelszo">jelszó?</a></span> <br><br><br>
                                        </form>
                                        
                                </div>
                        </div>
                        <footer class="rightfloat">
                                <p class="gt_shadow">Készítette: Horváth Olivér Zoltán, programtervező informatikus hallgató.</p>
                        </footer>
                </main>
        </body>
</html>