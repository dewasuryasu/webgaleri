<?php
    include "koneksi.php";
    session_start();

    $albumid=$_GET['albumid'];

    $sql=mysqli_query($con,"delete from album where albumid='$albumid'");

    header("location:album.php");
?>