<?php
    require 'mydbms.php';

    if(isset($_POST['sajatnev']) && isset($_POST['felhasznalonev']) && isset($_POST['jelszo']) && isset($_POST['email'])) 
    {
        $con = connect('beadandodb', 'root', '');

        $sajatnev = $_POST['sajatnev'];
        $felhasznalonev = $_POST['felhasznalonev'];
        $jelszo = md5($_POST['jelszo']);
        $email = $_POST['email'];
        $neme = $_POST['neme'];
        $jogosultsag = $_POST['jogosultsag'];

        $query =  'INSERT INTO felhasznalok(sajatnev, felhasznalonev, jelszo, email, neme, jogosultsag) 
        VALUES("'.$sajatnev.'", "'.$felhasznalonev.'", "'.$jelszo.'", "'.$email.'", "'.$neme.'", "'.$jogosultsag.'")';

        $results = mysqli_query($con, $query);

        if(!$results)
        {
            die("Hiba:".mysqli_errno($con));
        }
        else 
        {
            echo "Sikeres regisztráció!";
            echo "<br><a href='login_form.php'>Tovább a bejelentkezéshez</a>";
        } 

    }
?>