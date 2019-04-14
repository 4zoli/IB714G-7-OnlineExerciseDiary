<?php
$page = "registrate";
?>
<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="A Superhero GYM hivatalos weboldala. Online napló, edzéstervek, edzéselmélet. ">
    <meta name="keywords" content="Regisztráció">
    <meta name="author" content="Horváth Olivér Zoltán">
    <link rel="stylesheet" href="mainstyle.css">
    <title>Regisztráció</title>
    <style>
      a  {
        color: red;
        text-decoration: none;
      }

      a:hover   {
        color: black;
        background: red;
      }
      main    {
                border: red;
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
    <main class="rb_shadow">
      <header>
        <h1 id="center" class="rt_shadow"> Regisztráció</h1>
        <div class="rightfloat">
          <img id="img" src="images/spidey2.png" alt="">
        </div>
      </header>
      <div id="leftpull"> 
        <h1>Kérlek írd be az adataidat:</h1>
          <p>Felhasználói fiókod létrehozásához kérlek add meg az adataidat..</p>
        <form action="registrated.php" method="POST">
          <table>
            <tr>
              <td><label for="email"><b>Email cím</b></label></td>
              <td><input type="text" placeholder="stark@avengers.war" id="email" name="email" required> <br></td>
            </tr>
            <tr>
              <td> <label for="jelszo"><b>Jelszó</b></label></td>
              <td><input type="password" placeholder="********" id="jelszo" name="jelszo" required> <br></td>
            </tr>
            <tr>
              <td><label for="jelszo-ujra"><b>Jelszó újra</b></label></td>
              <td><input type="password" placeholder="********" id="jelszo-ujra" name="jelszoujra" required> <br></td>
            </tr>
            <tr>
              <td> <label for="szulnap"><b>Mikor születtél ?</b></label> </td>
              <td><input type="text" placeholder="eeee.hh.nn" id="szulnap" name="szulnap" required> <br></td>
            </tr>
            <tr>
              <td> <label for="jelensuly"> <b>Jelenlegi súly ?</b> </label> </td>
              <td><input type="number" id="jelensuly" name="jelensuly" min="40" max="130" required> <br></td>
            </tr>
            <tr>
              <td>Nemed ?</td>
              <td><input type="radio" id="ferfi" name="neme" value="Ferfi" checked> Férfi
                  <input type="radio" id="no" name="neme" value="No"> Nő <br></td>
            </tr>
            <tr>
              <td>Mi a célod ?</td>
              <td><input type="radio" id="fogyas" name="cel" value="Fogyás" checked> Fogyás
                  <input type="radio" id="izmosodas" name="cel" value="Izmosodás"> Izmosodás <br></td>
            </tr>
          </table> 

          <p>A felhasználói fiók létrehozásával elfogadod a <a href="rules.html">felhasználói feltételeket.</a>.</p>              
            <button type="submit" class="signupbtn">Regisztráció</button>
            <button type="reset" class="cancelbtn">Törlés</button> <br> <br> <br>
        </form>
        <aside>
          <hr>
          <h3><u>Regisztrációval kapcsolatos tudnivalók:</u></h3> 
          <p>
            VIGYÁZAT! : A jelszavak tárolása nem titkosított, kérem olyan jelszót válasszon melyet máshol nem használ.
          </p>
          
          
        </aside>  <br> <br>        
      </div>
      <div style="clear: both;"></div>
      <footer class="rightfloat">
          <p class="rt_shadow">Készítette: Horváth Olivér Zoltán, programtervező informatikus hallgató.</p>
      </footer>
    </main>
  </body>
</html>
