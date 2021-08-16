<?php
// Pengertian Class, Property, Method, dan Object
// Class Manusia
class manusia{
    // property dengan private
    private $nama = "Waliyyudin";
    private $warna = "Putih";

    // Method public
    public function tampilkan_nama(){
        return "Nama saya adalah ". $this->nama . "<br/>";
    }

    public function warna_kulit(){
        return "Warna kulit saya adalah ". $this->warna . "<br/>";
    }
}
// instansiasi class Manusia
$manusia = new manusia();

// memanggil method tampilkan_nama dari class Manusia
echo $manusia->tampilkan_nama();

// memanggil method warna_kulit dari class manusia
echo $manusia->warna_kulit();
?>