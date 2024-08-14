<?php
    require "mydbms.php";

    $con = connect('beadandodb', 'root', '');
    $felhasznalonev = $_POST['felhasznalonev_login'];
    $jelszo = md5($_POST['jelszo_login']);

    $query = "SELECT * FROM felhasznalok WHERE felhasznalonev='$felhasznalonev' AND jelszo='$jelszo'";
    $results=mysqli_query($con, $query);
    $data=mysqli_fetch_row($results);

    if($data == NULL)
    {
        echo "Helytelen felhasználónév és jelszó páros, próbálja újra";
        echo "<br>Vissza a bejelentkezéshez <a href='login_form.php'>Vissza</a>";
    }
    else 
    {
        session_start();
        $_SESSION['id']=$data[0];
        $_SESSION['felhasznalonev']=$data[2];
        $_SESSION['jogosultsag']=$data[6];

        header("Location: index.php");
    }
        
?>