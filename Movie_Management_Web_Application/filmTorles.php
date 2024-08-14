<?php
    require 'mydbms.php';

    $con = connect('beadandodb','root','');
    session_start();

    $query="DELETE FROM filmek WHERE id=".$_POST['filmId'];
    $result = mysqli_query($con, $query);
    
    header('Location: index.php');
?>