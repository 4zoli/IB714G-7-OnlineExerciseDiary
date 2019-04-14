<?php
$page = "workoutlog";
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
        <h1 id="center" class="bt_shadow">Online napló</h1>      
        <div class="rightfloat">
          <img id="img" class="rightfloat" src="images/thor.png" alt="">      
        </div>
      </header>
      <div id="leftpull">
        <aside>
            <h4>A napló használatával kapcsolatos tudnivalók: </h4>
            Használata regisztrációhoz, és bejelentkezéshez kötött!! <br>
            Fontos: A gyakorlatok nevét mindig ugyanúgy add meg, mivel erre a névre fogsz majd rákeresni és megnézni a korábbi eredményeidet. <br>
        </aside>
        <hr>

        <form action="bevitel.php" method="POST">
          <h3>Gyakorlat mentése: </h3>
          <?php
            date_default_timezone_set('Europe/Budapest');
            echo "A mai datum: ";
            echo date('Y F jS');
          ?>
          <label for="edzettem"><b><br> <br> Edzés dátuma?</b></label> <br>
            <input type="text" id="edzettem" name="napon" placeholder="eeee.hh.nn"> <br> <br>
          <label for="gyakorlatbe"><b>Gyakorlat neve:</b></label> <br>
            <input type="text" id="gyakorlatbe" name="gyakorlatbe" size="19"> <br> <br>
          <label for="hasznaltsuly"><b>Használt súly?</b></label> <br>
            <input type="number" id="hasznaltsuly" name="suly" min="1" max="999"> <br> <br>
          <label for="sorozat"><b>Sorozat szám?</b></label> <br>
            <input type="number" id="sorozat" name="sorozat" min="1" max="999"> <br> <br>
          <label for="ismetles"><b>Ismétlés szám?</b></label> <br>
            <input type="number" id="ismetles" name="ismetles" min="1" max="999"> <br> <br>
            <input type="submit" id="rogzites" name="bevitel" value="Rögzítés">
        </form>
        <hr>
        <div style="clear: both;"></div>
        <h3>Naplóm megtekintése</h3>
        <form action="lekeres.php" method="POST">
          <label for="melyiket"><b>Gyakorlat pontos neve.</b></label><br>
            <input type="text" id="gyakorlatki" name="gyakorlatki" size="19" placeholder="Gyakorlat neve"><br>
            <input type="submit" id="lekeres" name="lekeres" value="Lekérés"><br><br><br>
        </form>
      </div>
      <footer class="rightfloat">
        <p class="bt_shadow">Készítette: Horváth Olivér Zoltán, programtervező informatikus hallgató.</p>
      </footer>           
    </main>
  </body>
</html>
