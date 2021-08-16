<?php
// class parents
class manusia{
    // property class manusia
    public $nama_saya;
    public $warna_saya;

    // method class manusia
    function namaan($saya){
        $this->nama_saya=$saya;
    }

    function warnaan($saya){
        $this->warna_saya=$saya;
    }
}

// class turunan atau inheritance
class teman extends manusia{
    // property class teman
    public $nama_teman;
    public $warna_teman;

    // method class teman
    function namaanteman($teman){
        $this->nama_teman=$teman;
    }

    function warnaanteman($teman){
        $this->warna_teman=$teman;
    }
}

// instansiasi Class
$wali = new teman;

// method namaan adalah method class manusia, tpi kita jga dapat mengaksesnya karena sudah menghubungkan class teman dengan class manusia
$wali->namaan("Waliyyuddin");
$wali->namaanteman("Sung Kyung");

$wali->warnaan("Putih");
$wali->warnaanteman("Putih");

// Menampilkan isi dari Property
echo "Nama saya adalah ". $wali->nama_saya . "<br/>";
echo "Nama teman adalah ". $wali->nama_teman . "<br/>";
echo "Warna kulit saya adalah ". $wali->warna_saya . "<br/>";
echo "Warna kulit teman saya adalah ". $wali->warna_teman . "<br/>";
?>