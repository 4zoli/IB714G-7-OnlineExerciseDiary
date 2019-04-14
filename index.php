<?php
$page = "index";
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="A Superhero GYM hivatalos weboldala. Online napló, edzéstervek, edzéselmélet. ">
        <meta name="keywords" content="Kezdőlap, helyszín, nyitvatartás">
        <meta name="author" content="Horváth Olivér Zoltán">
        <link rel="stylesheet" href="mainstyle.css">
        <title>Kezdőlap</title>
        <style>
            a {
                color: lime;
            }

            a:hover {
                color: lightgreen;
            }
            main    {
                border: green;
                border-width: 1px;
                border-style: solid;
            }
            @keyframes villog {
                from,50%,
                to {    opacity: 1;
                }
                25%,75% {   
                    opacity: 0;
                }
            }

            p#anim {
                animation-name: villog;
                animation-duration: 2s;
                animation-iteration-count: infinite;
            }
            div#club {
                margin: auto;
                display: none;
                position: fixed;
            }
    
            a#card:hover + div#club {
                position:fixed;
                left: 0;
                top: 10vh;
                display: block;
            }
            #size    {
                width: 40vw;
                height: 35vh;
            }
            
        </style>
    </head>
    <body>
    <?php include("menu.php"); ?>
   
        <main class="gb_shadow">
            <div id="center">
                <header>
                    <h1 class="gt_shadow">SUPERHERO GYM</h1>
                    <h2 class="gt_shadow"><span style="color: black;">..ahol szuperhősök születnek..</span></h2>
                    <img id="img" src="images/hulk.png" alt="">
                    <aside>
                        (Szeged, Irinyi épület 225)
                    </aside>
                    <p id="anim" class="gt_shadow">A Superhero Gym hivatalos weboldala.</p>
                    
                </header>                
            </div>
            <section id="leftpull">  
            
                <div>
                    <h2>Nyitvatartás:</h2>
                    Hétfő: 8-22hr <br>
                    Kedd: 8-22hr <br>
                    Szerda: 8-22hr <br>
                    Csütörtök: 8-22hr <br>
                    Péntek: 8-22hr <br>
                    Szombat: 10-18hr <br>
                    Vasárnap: 12-16hr <br>
                </div>
                <div>
                    <h2>Bérletárak:</h2>
                    Felnőtt: 9500ft. <br>
                    Diák: 3500ft. <br>
                    Superhero klub kártyával a belépés ingyenes, ennek az éves díja 60000ft. <br>
                    <a id="card">Mutasd a klub kártyát!</a>
                    <div id="club">
                        <img id="size" src="images/clubcard.png" alt="">
                    </div>  <br> <br> <br>

                </div>
                <div>
                    <address>
                        Teremedző:  <br>
                        Horváth Olivér <br>
                        Telefon: 06703020102 <br> <br> <br>
                    </address>

    
                </div>
            </section> 
            <footer class="rightfloat">
                <p class="gt_shadow">Készítette: Horváth Olivér Zoltán, programtervező informatikus hallgató.</p>
            </footer>
        </main>
    </body>
</html>