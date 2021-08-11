<?php

$data = "data ini teloah terengkripsi";

// engkripsi (di sembunyikan menjadi sebuah code)
echo base64_encode($data);

// unengkripsi (di tampilkan dari sebuah kode menjadi kalimat semula)
// echo base64_encode(base64_decode($data));

?>