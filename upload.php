<?php
$page = "logged";
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>Feltoltes</title>
    </head>
    <body>
        <?php
            $cel_konyvtar = "profilkepek/";
            $cel_fajl = $cel_konyvtar . basename($_FILES["feltoltes"]["name"]);
            $sikerultE = 1;
            $keptipus = strtolower(pathinfo($cel_fajl,PATHINFO_EXTENSION));

            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["feltoltes"]["tmp_name"]);
                if($check !== false) {
                    echo "Kép - " . $check["mime"] . ". ";
                    $sikerultE = 1;
                } else {
                    echo "Nem képet próbáltál meg feltölteni.";
                    $sikerultE = 0;
                }
            }

            if($keptipus != "jpg" && $keptipus != "png" && $keptipus != "jpeg" && $keptipus != "gif" ) {
                echo "Sajnalom, csak JPG, JPEG, PNG & GIF fajlok engedelyezettek.";
                $sikerultE = 0;
            }

            if ($sikerultE == 0) {
                echo "Nem sikerült a feltoltes.";

            } else {
                if (move_uploaded_file($_FILES["feltoltes"]["tmp_name"], $cel_fajl)) {
                    echo "A kep ". basename( $_FILES["feltoltes"]["name"]). " sikeresen feltoltodott.";
                } else {
                    echo "Sajnálom, valami hiba történt feltöltéskor. Próbáld újra.";
                }
            }
        ?>
    </body>
</html>