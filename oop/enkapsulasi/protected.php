<?php
// Pengertian Class, Property, Method, dan Object
// Class Manusia
class manusia{
    // property dengan protected
    protected $nama = "Waliyyudin";
    protected $warna = "Putih";

    // method protected
    protected function nama(){
        return "Nama saya adalah ". $this->nama;
    }

    protected function warna(){
        return "Warna kulit saya adalah ". $this->warna;
    }

    // Method public
    public function tampilkan_nama(){
        return $this->tampilkan_nama . "<br/>";
    }

    public function warna_kulit(){
        return $this->warna_kulit . "<br/>";
    }
}
// instansiasi class Manusia
$manusia = new manusia();

// memanggil method tampilkan_nama dari class Manusia
echo $manusia->tampilkan_nama();

// memanggil method warna_kulit dari class manusia
echo $manusia->warna_kulit();
?>