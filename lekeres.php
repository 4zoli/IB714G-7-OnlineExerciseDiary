<?php
$page = "lekeres";
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
        <h1 id="center" class="bt_shadow">Napló megtekintése</h1>      
        <div class="rightfloat">
          <img id="img" class="rightfloat" src="images/thor.png" alt="">      
        </div>
      </header>
      <div id="leftpull">
        <form action="lekeres.php" method="POST">
          <label for="melyiket"><b>Gyakorlat pontos neve.</b></label><br>
            <input type="text" id="gyakorlatki" name="gyakorlatki" size="19" placeholder="Gyakorlat neve"><br>
            <input type="submit" id="lekeres" name="lekeres" value="Lekérés"><br>
        </form>
        <?php
          if (isset($_SESSION['email'])) {

            $_SESSION['gyakorlatki'] = $_POST['gyakorlatki'];

            if (!empty($_SESSION['gyakorlatki']))  {
              $email = $_SESSION['email'];
              $gyakorlat = $_SESSION['gyakorlatki'];

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  if (file_exists("$email.txt"))  {
                  $file = fopen("$email.txt","r");

                    while(! feof($file))  { 
                      $sor = fgets($file). "<br />";
                      if (strpos($sor, $gyakorlat) !== false) {
                        echo $sor;
                      }
                    }                
                    fclose($file);
                  } 
              } 
            } else echo "Oops, elfelejtetted megadni a gyakorlat nevet.";

          } 
          else  { echo "A funkcio hasznalatahoz be kell jelentkezned.";
                  header( "Refresh:3; url=login.php", true, 303); 
          }  
        ?>
    <br><br>

      </div>
      <div style="clear: both;"></div>
      <footer class="rightfloat">
        <p class="bt_shadow">Készítette: Horváth Olivér Zoltán, programtervező informatikus hallgató.</p>
      </footer>           
    </main>
  </body>
</html>
