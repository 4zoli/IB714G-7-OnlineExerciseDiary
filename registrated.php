<?php
$page = registrated;
?>

<html>
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
        
      <?php
        $email = $jelszo = $jelszoujra = $szulnap = $jelensuly = $neme = $cel =  "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = ($_POST["email"]);
        
        if (file_exists("$email.txt"))  {
          echo "Oops, ezzel az email cimmel mar regisztraltak az online naploba! Valassz masikat.";
        } else {
            if ($_POST['jelszo'] == $_POST['jelszoujra'])    {  
              $jelszo =($_POST["jelszo"]);
              $jelszoujra =($_POST["jelszoujra"]);    
              $szulnap =($_POST["szulnap"]);
              $jelensuly =($_POST["jelensuly"]);
              $neme =($_POST["neme"]);
              $cel =($_POST["cel"]);
              $file = fopen("$email.txt","a");
              fwrite($file, 'Email cim: '. $email . " ");
              fwrite($file, 'Jelszo: '. $jelszo . " "); 
              fwrite($file, 'Szuletes: '. $szulnap . " "); 
              fwrite($file, 'Suly: '. $jelensuly. " "); 
              fwrite($file, 'Nem: '. $neme . " ");
              fwrite($file, 'Cel: '. $cel . "\n");
              fclose($file); 
              echo "Sikeres regisztracio! "."<br>"."<br>"."<br>";  
              echo "A kovetkezo adatokkal regisztraltal be az oldalra: "."<br>"."<br>";
              echo "Email cim: ". $_POST["email"]."<br>";
              echo "Jelszo: ". $_POST["jelszo"]."<br>";
              echo "Szulinap: ". $_POST["szulnap"]."<br>";
              echo "Jelenlegi suly: ". $_POST["jelensuly"] ."kg"."<br>";
              echo "Nemed: ". $_POST["neme"]."<br>";
              echo "Kituzott celod: ". $_POST["cel"]."<br>";
            } else {
                echo("Oops! A jelszavak nem egyeznek, próbáld újra!");
              }
          }
        }
      ?>
      </div>
      <div style="clear: both;"></div>
      <footer class="rightfloat">
          <p class="rt_shadow">Készítette: Horváth Olivér Zoltán, programtervező informatikus hallgató.</p>
      </footer>
    </main>

</body>
</html>