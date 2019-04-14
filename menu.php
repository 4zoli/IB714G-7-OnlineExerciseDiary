<?php
session_start();
?>

<div class="menu" >
    <div id="logged" >

        <?php 
            if (isset($_SESSION['email'])) {
                echo "Bejelentkezve mint: ". $_SESSION['email'];
            } else echo "Nincs bejelentkezve";
        ?>
    </div>


    <?php
        if( $page == "index")   {
            echo  '<a id="active" href="index.php"><b>Kezdőlap</b></a>
            <a href="workoutlog.php"><b>Online Napló</b></a>
            <a href="workouts.php"><b>Edzéstervek</b></a>
            <a href="login.php"><b>Bejelentkezés</b></a>
            <a href="registrate.php"><b>Regisztráció</b></a>   
            <a href="rules.php"><b>Szabályzat</b></a>';
        }
        if( $page == "login")   {
            echo  '<a href="index.php"><b>Kezdőlap</b></a>
            <a href="workoutlog.php"><b>Online Napló</b></a>
            <a href="workouts.php"><b>Edzéstervek</b></a>
            <a id="active" href="login.php"><b>Bejelentkezés</b></a>
            <a href="registrate.php"><b>Regisztráció</b></a>   
            <a href="rules.php"><b>Szabályzat</b></a>';
        }
        if( $page == "registrate")   {
            echo  '<a href="index.php"><b>Kezdőlap</b></a>
            <a href="workoutlog.php"><b>Online Napló</b></a>
            <a href="workouts.php"><b>Edzéstervek</b></a>
            <a href="login.php"><b>Bejelentkezés</b></a>
            <a id="active"  href="registrate.php"><b>Regisztráció</b></a>   
            <a href="rules.php"><b>Szabályzat</b></a>';
        }
        if( $page == "rules")   {
            echo  '<a href="index.php"><b>Kezdőlap</b></a>
            <a href="workoutlog.php"><b>Online Napló</b></a>
            <a href="workouts.php"><b>Edzéstervek</b></a>
            <a href="login.php"><b>Bejelentkezés</b></a>
            <a href="registrate.php"><b>Regisztráció</b></a>   
            <a id="active" href="rules.php"><b>Szabályzat</b></a>';
        }
        if( $page == "workoutlog")   {
            echo  '<a href="index.php"><b>Kezdőlap</b></a>
            <a id="active" href="workoutlog.php"><b>Online Napló</b></a>
            <a href="workouts.php"><b>Edzéstervek</b></a>
            <a href="login.php"><b>Bejelentkezés</b></a>
            <a href="registrate.php"><b>Regisztráció</b></a>   
            <a href="rules.php"><b>Szabályzat</b></a>';
        }
        if( $page == "workouts")   {
            echo  '<a href="index.php"><b>Kezdőlap</b></a>
            <a href="workoutlog.php"><b>Online Napló</b></a>
            <a id="active" href="workouts.php"><b>Edzéstervek</b></a>
            <a href="login.php"><b>Bejelentkezés</b></a>
            <a href="registrate.php"><b>Regisztráció</b></a>   
            <a href="rules.php"><b>Szabályzat</b></a>';
        }
        if( $page == "logged")   {
            echo  '<a href="index.php"><b>Kezdőlap</b></a>
            <a href="workoutlog.php"><b>Online Napló</b></a>
            <a href="workouts.php"><b>Edzéstervek</b></a>
            <a href="login.php"><b>Bejelentkezés</b></a>
            <a href="registrate.php"><b>Regisztráció</b></a>   
            <a href="rules.php"><b>Szabályzat</b></a>';
        }
        if( $page == "registrated")   {
            echo  '<a href="index.php"><b>Kezdőlap</b></a>
            <a href="workoutlog.php"><b>Online Napló</b></a>
            <a href="workouts.php"><b>Edzéstervek</b></a>
            <a href="login.php"><b>Bejelentkezés</b></a>
            <a href="registrate.php"><b>Regisztráció</b></a>   
            <a href="rules.php"><b>Szabályzat</b></a>';
        }
        if( $page == "lekeres")   {
            echo  '<a href="index.php"><b>Kezdőlap</b></a>
            <a href="workoutlog.php"><b>Online Napló</b></a>
            <a href="workouts.php"><b>Edzéstervek</b></a>
            <a href="login.php"><b>Bejelentkezés</b></a>
            <a href="registrate.php"><b>Regisztráció</b></a>   
            <a href="rules.php"><b>Szabályzat</b></a>';
        }
        if( $page == "bevitel")   {
            echo  '<a href="index.php"><b>Kezdőlap</b></a>
            <a href="workoutlog.php"><b>Online Napló</b></a>
            <a href="workouts.php"><b>Edzéstervek</b></a>
            <a href="login.php"><b>Bejelentkezés</b></a>
            <a href="registrate.php"><b>Regisztráció</b></a>   
            <a href="rules.php"><b>Szabályzat</b></a>';
        }

    ?>
    <div id="logout" >
        <a href="logout.php">Kijelentkezés</a>
    </div>
</div>