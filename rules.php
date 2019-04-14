<?php
$page = "rules";
?>
<!DOCTYPE html>
<html lang="hu">
        <head>
                <meta charset="utf-8">
                <meta name="description" content="A Superhero GYM hivatalos weboldala. Online napló, edzéstervek, edzéselmélet. ">
                <meta name="keywords" content="Teremszabályzat,oldalszabályzat, etikett">
                <meta name="author" content="Horváth Olivér Zoltán">
                <link rel="stylesheet" href="mainstyle.css">
                <title>Szabályok</title>
                <style>
                        main    {
                                border: blue;
                                border-width: 1px;
                                border-style: solid;
                        }
                </style>
        </head>
        <body>
        <?php include("menu.php"); 
   //     $_SESSION = array();
        ?>
                <main class="bb_shadow">
                        <header>
                                <h1 id="center" class="bt_shadow">Szabályzat</h1>                
                        </header>
                        <div id="leftpull" class="leftfloat">
                                <h2>1. Edzőtermi etikett:</h2>
                                        <ul>                      
                                                <li>Az edzőterem ajtaján belépve köszönj.</li>
                                                <li>A távozásnál is ugyanúgy el kell köszönnöd.</li>
                                                <li>Sportberkekben tegeződni szokás.</li>
                                                <li>Töröld le a gépet használat után.</li>
                                                <li>Ne sajátítsd ki a gépet.</li>
                                                <li>Ne hagyd szét a súlyokat</li>
                                                <li>Ne szégyellj segítséget kérni.</li>
                                                <li>Ne nézegesd magad.</li>
                                                <li>Legyél mindig tiszta és dezodorált.</li>
                                                <li>Másokat ne zavarj.</li>
                                        </ul>    
                                <h2>2. Terem hét szabálya:</h2>
                                        <ol>
                                                <li> A teremben enni tilos.</li>
                                                <li> Súlyokat dobálni tilos!</li>
                                                <li> Váltócipő használata kötelező! </li>
                                                <li> A súlyokat pakold vissza a helyére, ha nem bírod kérd meg a pultos csajt! </li>
                                                <li> Törölköző használata kötelező! </li>
                                                <li> Mobilt nyomkodni, telefonálni az öltözőben!</li>
                                                <li> Póló viselése kötelező!</li>
                                        </ol>
                                <h2>3. Weboldal szabályzat:</h2>
                                        <dl>
                                                <dt>   Jelen weboldal egy projekt keretén belül készült, semmi köze a valósághoz.</dt>
                                                <dd> - Azonban, az itt felsorolt szabályok és etikettek be nem tartása valós probléma. </dd>
                                                <dd> - Betartásukkal jobb környezetté válhatnak az edzőtermek.</dd>
                                        </dl>
                                <br>
                        </div>
                        <div id="right">
                                <img id="img" src="images/captain.png" alt="">
                        </div>
                        <div style="clear: both;"></div>
                        <footer class="rightfloat">
                        
                                <p class="bt_shadow">Készítette: Horváth Olivér Zoltán, programtervező informatikus hallgató.</p>
                                
                        </footer>
                </main>
        </body>
</html>
