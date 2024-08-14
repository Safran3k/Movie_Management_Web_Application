<?php
    if(!isset($_POST['filmcime']) && !isset($_POST['kategoria']) && !isset($_POST['premierdatuma']))
    {
        echo "Minden adat megadása kötelező!";
        echo "<a href='index.php?page=5'>Vissza</a>";
    }
    else
    { 
        $filmcime = $_POST['filmcime'];
        $kategoria = $_POST['kategoria'];
        $premierdatuma = $_POST['premierdatuma'];

        require 'mydbms.php';

        $con = connect('beadandodb', 'root', '');
        $query = "INSERT INTO filmek(filmcime, kategoria, premierdatuma) VALUES ('$filmcime', '$kategoria', '$premierdatuma')";
        
        $result = mysqli_query($con, $query);

        header('Location: index.php');
    }
?>