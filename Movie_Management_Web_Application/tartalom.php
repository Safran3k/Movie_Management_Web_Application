<?php
    if(!isset($_GET['page']) || empty($_GET['page']))
    {
        $d = 0;
    }
    else {
        $d = $_GET['page'];
    }

    switch($d) {
        case 0:
            include 'filmekListaz.php';
            break;
        case 5:
            include 'filmHozzaadas_form.php';
            break;
        case 10:
            include 'profilom.php';
            break;
    }
?>