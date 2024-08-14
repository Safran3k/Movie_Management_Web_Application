<?php
    session_start();

    require "mydbms.php";

    $con = connect('beadandodb', 'root', '');

    $ujFelhasznalonev = $_POST['uj_felhasznalonev'];
    $ujJelszo = md5($_POST['uj_jelszo']);
    $userId = $_SESSION['id'];

    $query = "UPDATE felhasznalok SET felhasznalonev='$ujFelhasznalonev', jelszo='$ujJelszo' WHERE id=$userId";
    $result=mysqli_query($con, $query);

    if(!$result)
    {
        echo ("Hiba: ". mysqli_errno($con));
    }
    else
    {
        $_SESSION['felhasznalonev'] = $ujFelhasznalonev;
        echo "Profil sikeresen frissítve!<br>";
        echo "<a href='index.php?page=10'>Vissza a profilomhoz</a>";
    }
?>