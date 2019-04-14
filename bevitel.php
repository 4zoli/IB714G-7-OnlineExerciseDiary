<?php
$page = "bevitel";
?>

<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="A Superhero GYM hivatalos weboldala. Online napló, edzéstervek, edzéselmélet. ">
    <meta name="keywords" content="Online napló, edzés rögzítése">
    <meta name="author" content="Horváth Olivér Zoltán">
    <link rel="stylesheet" href="mainstyle.css">
    <title>Napló</title>
    <style>
      main    {
        border: blue;
        border-width: 1px;
        border-style: solid;
      }
    </style>
  </head>
  <body>
  <?php include("menu.php"); ?>
    <main class="bb_shadow">
      <header>
        <h1 id="center" class="bt_shadow">Gyakorlatok bevitele</h1>      
        <div class="rightfloat">
          <img id="img" class="rightfloat" src="images/thor.png" alt="">      
        </div>
      </header>
      <div id="leftpull">

        <form action="bevitel.php" method="POST">
          <h3>Edzés bevitele:</h3>
          <label for="edzettem"><b>Edzés dátuma?</b></label> <br>
            <input type="text" id="edzettem" name="napon" placeholder="eeee.hh.nn"> <br> <br>
          <label for="gyakorlatbe"><b>Gyakorlat neve:</b></label> <br>
            <input type="text" id="gyakorlatbe" name="gyakorlatbe" size="19"> <br> <br>
          <label for="hasznaltsuly"><b>Használt súly?</b></label> <br>
            <input type="number" id="hasznaltsuly" name="suly" min="1" max="999"> <br> <br>
          <label for="sorozat"><b>Sorozat szám?</b></label> <br>
            <input type="number" id="sorozat" name="sorozat" min="1" max="999"> <br> <br>
          <label for="ismetles"><b>Ismétlés szám?</b></label> <br>
            <input type="number" id="ismetles" name="ismetles" min="1" max="999"> <br> <br>
            <input type="submit" id="rogzites" name="bevitel" value="Rögzítés" >
        </form>

        <?php
          if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            $napon = $gyakorlat = $suly = $sorozat = $ismetles = "";

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              
                  if (file_exists("$email.txt"))  {
                      $napon = ($_POST["napon"]);
                      $gyakorlat = ($_POST["gyakorlatbe"]);
                      $suly = ($_POST["suly"]);
                      $sorozat = ($_POST["sorozat"]);
                      $ismetles = ($_POST["ismetles"]);
                
                      $file = fopen("$email.txt","a");
                      fwrite($file, "$gyakorlat: "); 
                      fwrite($file, "$suly"."kg | "); 
                      fwrite($file, "$sorozat"."x"); 
                      fwrite($file, "$ismetles"." | ");
                      fwrite($file, "$napon " . "\n");
                      fclose($file); 
                      echo "A gyakorlat rogzitese sikeres! Mehet a kovetkezo. ";  
                  }   else {
                      echo("Opps, valami problema van az email címmel, kérlek ellenőrizd helyesen adtad-e meg! ");
                      } 
              }
            } else if (!isset($_SESSION['email']))  {
              echo "A funkcio hasznalatahoz be kell jelentkezned.";
              header( "Refresh:3; url=login.php", true, 303);              
            }

        ?>
        <div style="clear: both;"></div> <br>
      </div>
      <footer class="rightfloat">
        <p class="bt_shadow">Készítette: Horváth Olivér Zoltán, programtervező informatikus hallgató.</p>
      </footer>           
    </main>
  </body>
</html>
