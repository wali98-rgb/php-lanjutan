<?php
// Pengertian Class, Property, Method, dan Object
// Class Manusia
class manusia{
    // property
    var $nama;
    var $warna;

    // Method Construct
    function __construct(){
        echo "Ini adalah isi method Construct <br/>";
    }

    // Method Destruct
    function __destruct(){
        echo "Ini adalah isi method Destruct <br/>";
    }

    // Method
    function tampilkan_nama(){
        return "Nama saya adalah Waliyyudin <br/>";
    }

    function warna_kulit(){
        return "Warna kulit saya adalah Putih <br/>";
    }
}
// instansiasi class Manusia
$manusia = new manusia();

// memanggil method tampilkan_nama dari class Manusia
echo $manusia->tampilkan_nama();

// memanggil method warna_kulit dari class manusia
echo $manusia->warna_kulit();
?>