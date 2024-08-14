<?php
    switch($_SESSION['jogosultsag']) {
        case 'admin':
            echo "<a href='index.php?page=5' >Új film hozzáadása</a>";
            break;
        case 'user':
            echo "<a href='index.php?page=10'>Profilom</a>";
            break;
    }
    echo "<a class='m-5' href='index.php?page=0'>Filmek megjelenítése</a>";
    echo "<a href='logout.php'>Kijelentkezés</a>";
?>
