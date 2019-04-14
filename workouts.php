<?php
$page = "workouts";
?>
<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="A Superhero GYM hivatalos weboldala. Online napló, edzéstervek, edzéselmélet. ">
    <meta name="keywords" content="Edzéstervek, felbontások">
    <meta name="author" content="Horváth Olivér Zoltán">
    <link rel="stylesheet" href="mainstyle.css">
    <title>Edzéstervek</title>
    <style>
      th  {
        background-color: orangered;
        color: black;
      }
      tr  {
        border: 2px solid orange;
      }
      td  {
        border: 1px solid orange;
      }
      main    {
        border: red;
        border-width: 1px;
        border-style: solid;
      }
      div#tran {
        transform: rotate(10deg);
      }
      h2  {
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      }

      @media print { 
        img, aside, .menu, h1, footer {
          display: none;
        }
        main {
          color: black; background-color: white;
          border-radius: 0px 0px;
        }
        @page {  
          margin: 2cm 1.5cm;
        }  
        tr, td, th  {
          border-color: black;
        } 
      }
    </style>
  </head>
  <body>
  <?php include("menu.php"); ?>
    <main class="rb_shadow">
      <header>
        <h1 class="rt_shadow" id="center">Edzéstervek</h1>                 
      </header>
      <div id="leftpull">
        <aside>
          <h4>Tudnivalók:</h4>
          Nem ajánlott 40kg alatt, és 130kg felett a súlyzós edzés, mert sérüléshez vezethet. <br>
          130kg felett ajánlott az edzéseket először sétálással kezdeni, majd fokozatosan hozzászoktatni az izmokat és izületeket a terheléshez. <br>
          40kg alatt érdemesebb saját testsúllyal kezdeni az edzéseket, ezáltal fokozatos és kellő terhelés adva a testnek. <br>
          <p>Továbbá:</p>
          Ajánlott az edzéseket először egy alap, átmozgatóval kezdeni a sérülések elkerülése végett.
        </aside>
        <hr>
        <br>
        <h2>Olivér edzésterve.</h2>
        <h3>Push - Pull - Leg.</h3>
        <div class="leftfloat">
          <table>
            <tr>
              <th>Push nap</th>
              <th>ism.</th>
            </tr>
              <tr>
                <td>Fekvenyomás/ döntött pados nyomás</td>
                <td>3-4x10-12</td>
              </tr>
              <tr>
                <td>Csigás keresztezés</td>
                <td>3-4x10-12</td>
              </tr>
              <tr>
                <td>Mellről nyomás állva</td>
                <td>4x12</td>
              </tr>
              <tr>
                <td>  Döntött törzsű oldalemelés</td>
                <td> 4x15</td>
              </tr>
              <tr>
                <td>Tricepsznyújtás/Húzódzkodás</td>
                <td>3-4x10-12</td>
              </tr>
              <tr>
                <td>Tricepsz letolás csigán</td>
                <td>4x15</td>
              </tr>
            <tr>
              <th>Pull nap</th>
              <th>ism.</th>
            </tr>
              <tr>
                <td>Szűk húzódzkodás/lehúzás mellhez</td>
                <td>3-4x12</td>
              </tr>
              <tr>
                <td>Húzódzkodás/nyakhoz húzás</td>
                <td>3-4x10-12</td>
              </tr>
              <tr>
                <td>Egykezes evezés</td>
                <td>4x6-8</td>
              </tr>
              <tr>
                <td>Bicepsz állva rúddal</td>
                <td>3-4x10-12</td>
              </tr>
              <tr>
                <td>Bicepsz hajlítás gépen</td>
                <td>4x10</td>
              </tr>
            <tr>
              <th>Láb nap</th>
              <th>ism.</th>
            </tr>
              <tr>
                <td>Guggolás/Lábtolás</td>
                <td>12-10-8-6</td>
              </tr>
              <tr>
                <td>Sétálós kitörés</td>
                <td>4x16</td>
              </tr>
              <tr>
                <td>Combfeszítő/Lábhajlítás szuperszett</td>
                <td>4x15</td>
              </tr>
              <tr>
                <td>Vádli állva</td>
                <td>4x30</td>
              </tr>
          </table>
        </div>
        <div id="tran" class="leftfloat" style="margin-left: 3vw">
          <table>
            <tr>
              <th>CORE Minden nap</th>
            </tr>
              <tr>
                <td>Hasprések</td>              
              </tr>
              <tr>
                <td>Lábemelések</td>
              </tr>
              <tr>
                <td>Hiperhajlítás</td>
              </tr>
          </table>
        </div>
        <br>
        <br>
      </div>
      <div id="right">
          <img id="img" src="images/ironman.png" alt=""> 
      </div>
      <div style="clear: both;"></div>
      <footer class="rightfloat">
          <p class="rt_shadow">Készítette: Horváth Olivér Zoltán, programtervező informatikus hallgató.</p>
      </footer>
    </main>    
  </body>
</html>
