<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'latihan01');

if ($koneksi == false) {
    echo "Koneksi gagal";
    die();
} 

// var_dump($koneksi);