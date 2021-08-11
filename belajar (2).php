<?php
$teman = "naya";
if($teman == "naya"){
    echo "Wali is the best";
}elseif($teman == "budi"){
    echo "Budi not my friend";
}else{
    echo "I haven't friend";
}

echo "<br/>";

function tampilkan_nama(){
    echo "Nama saya adalah Waliyyuddin";
}

tampilkan_nama();

echo "<br/>";

$angka = 9;
$x = 6;

switch ($angka) {
    case 1:
        echo "Isi Variable angka adalah satu";
        break;
    case 2:
        echo "Isi Variable angka adalah dua";
        break;
    case 3:
        echo "Isi Variable angka adalah tiga";
        break;
    case 4:
        echo "Isi Variable angka adalah empat";
        break;
    case 5:
        echo "Isi Variable angka adalah lima";
        break;
    case 6:
        echo "Isi Variable angka adalah enam";
        break;
    default:
        echo "Isi Variable angka tidak di temukan";
        break;
}

echo "<br/>";

while($x <= 9){
    echo "Nomer $x <br>";
    $x++;
}

for($x=1;$x<=4;$x++)
    echo $x;

echo "<br/>";

for($kata=1;$kata<=5;$kata++)
    echo "Subscribe my Channel YouTube"."<br/>";

echo "<br/>";

for($kata=1;$kata<=3;$kata++)
    echo "Im unstoppable today ";

echo "<br/>";
$buah = array('mangga','jeruk','anggur','semangka');
echo "<br/>";

for($x=0;$x<count($buah);$x++){
	echo $buah[$x]."<br/>";
}
echo "<br/>";

foreach($buah as $d){
    echo $d. "<br/>";
}

$buah['mangga'] = "Warnanya kuning ke merahan";
$buah['jeruk'] = "Bulat buahnya";
$buah['anggur'] = "Kecil-kecil tpi manis";
$buah['semangka'] = "Buah yang berair";
echo "<br/>";

echo $buah[0];
echo "<br/>";
echo $buah['mangga'];

// atau bisa juga kaya gini

echo "<br/>";
$buah = array(
    'mangga' => "enak banget sumpah ga boong",
    'jeruk' => "kek asem-asem gitu lhoo",
    'anggur' => "banyak banget buletannya",
    'semangka' => "kenyang langsung klo makan sendirian"
);

echo $buah['jeruk'];
echo "<br/>";
echo date('l, d/m/y h:i:sa');
echo "<br/>";
echo date('D/M-Y H:i:sa');
echo "<br/>";
include("indo.php");
echo "dkauedbbqekfu";
echo "<br/>";

$a = 4;
$b = 19;

echo $a + $b;

echo "<br/>";

$kalimat = "Bismillah kunci sukses sedang diraih";
$data = explode(" " , $kalimat);
print_r($data);

echo "<br/>";
echo "<br/>";

echo " Data 1 = " . $data [0];
echo "<br/>";
echo " Data 2 = " . $data [1];
echo "<br/>";
echo " Data 3 = " . $data [2];
echo "<br/>";
echo " Data 4 = " . $data [3];
echo "<br/>";
echo " Data 5 = " . $data [4];
echo "<br/>";

echo "<br/>";
echo "<br/>";
echo "<h3>Menggunakan sistem implode.</h3>";
echo "<br/>";

echo implode(" " , $data);

echo "<br/>";
echo base64_encode(($teman));



?>