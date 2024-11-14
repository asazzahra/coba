<?php

//koneksi ke database
//localhost nama penyimpanan
// root = user
// database

$koneksi = mysqli_connect('localhost', 'root','','web_praktikum');

//function query digunakan untuk menangkap data di mysql

function daftar($daftar)
{
    global $koneksi;
    $nama = htmlspecialchars($daftar["nama_mhs"]);
    $nim = htmlspecialchars($daftar["nim"]);
    $password = htmlspecialchars($daftar["password"]);

    $query = "INSERT INTO tb_user(nama_mhs, nim, password) VALUES ('$nama', '$nim', '$password')";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
    
}


?>