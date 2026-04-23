<?php
    //Lokasi Pangkalan Data
    $host="127.0.0.1";

    //Penggunaan myPHP admin mySQL
    $port=3306;

    //Port yang disediakan sekiranya tiada IP dalam port yang tidak digunakan
    $socket="";

    //Username dan Password untuk Pangkalan Data Xampp
    $user="root";
    $password="";

    //Nama Pangkalan Data
    $dbname="db_teaching_strategy";

    //Koleksi mysqli membawa semua definisi pemboleh ubah di atas ke phpAdmin dalam Xampp
    //die-php menghapuskan fungsi pada masa itu jika tidak dapat membuat hubungan ke pangkalan data
    $con=new mysqli($host,$user,$password,$dbname,$port,$socket)
    or die('Could not connect to database server'.mysqli_connect_error());
?>