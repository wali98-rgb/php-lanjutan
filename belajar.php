<?php
echo "<h1>Hallo, Selamat datang di duniaku</h1>";
$nama = "Waliyyuddin";
$umur = "20th";
$alamat = "Jl. Tamansari no. 96A/56";
$teman = "brandon";
$rumah = "apartement";
$anggota = array('Aku','Kamu','Kita');
$heh = "Terima kasih";
// $heh = "Nuhun";
"$nama";
"<br/>";
"$umur";
"<br/>";
"$alamat";
"<br/>";
"$heh";
echo "Halo guys, perkenalkan nama saya ".$nama." saya berumur ".$umur." saya beralamat tinggal di ".$alamat;
echo "<br/>";
echo "Aku mau kita termasuk dalam sebuah kelompok, yaitu $anggota[2]";
echo "<br/>";
echo "$heh";
echo "<br/>";
echo strlen($nama);
echo "<br/>";
echo str_word_count($nama);
echo "<br/>";
echo strrev($nama);
echo "<br/>";
echo str_replace("Jl","Jalan",$alamat);
echo "<br/>";

if($teman == "charless"){
    echo "Charless bukan teman Wali";
}elseif($teman == "brandon"){
    echo "Brandon adalah teman Wali";
}else{
    echo "dia bukan teman saya";
}
echo "<br/>";
if($rumah == "apartement"){
    echo "Apartement adalah rumah kedua Waliyyuddin";
}elseif($rumah == "monas"){
    echo "Monas adalah rumah Wali";
}else{
    echo "Rumah Wali belum jadi";
}

echo "<br/>";

function tampilkan_nama(){
    echo "Waliyyuddin adalah nama saya";
}

Tampilkan_nama();

echo "<br/>";
echo "<br/>";

$x = 5;

while($x >= 1){
    echo "dugul $x <br/>";
    $x--;
}
while($x <= 5){
    echo "pasti $x <br/>";
    $x++;
}

echo "<br/>";
for($x=3;$x<=8;$x++)
    echo $x;

echo "<br/>";
echo date('l, d/m/y h:i:sa');
echo "<br/>";

include('header.php');
echo "don't forget to Subscribe my channel!!!";
echo "<br/>";

?>