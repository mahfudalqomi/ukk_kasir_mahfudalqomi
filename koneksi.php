<?php
$koneksi = mysqli_connect("localhost","root","","ukk_kasir1");

if (mysqli_connect_error()){
    echo "koneksi database gagal : " . mysqli_connect_error();
}
?>