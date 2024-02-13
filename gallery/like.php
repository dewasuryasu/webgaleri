<?php
    include "koneksi.php";
    session_start();

    if(!isset($_SESSION['userid'])){
        //Untuk bisa like harus login dulu
        header("location:login.php");
    }else{
        $fotoid=$_GET['fotoid'];
        $userid=$_SESSION['userid'];
        //Cek Apakah User Sudah Pernah Like Foto ini apa belum 

        $sql=mysqli_query($con,"select * from likefoto where fotoid='$fotoid' and userid='$userid'");

        if(mysqli_num_rows($sql)==1){
            //User sudah like foto ini 
            header('location:index.php');
         }else{
            $tanggallike=date("y/m/d");
            mysqli_query($con, "insert into likefoto values('','$fotoid','$userid','$tanggallike')");
            header('location:index.php');
         }
    }
?>