<?php

$nama = 'Najib';
$nilai_ujian = 80;
$keterangan = '';

if($nilai_ujian > 70){
    $keterangan = 'lulus';
}else {
    $keterangan = 'Remedial';
}

echo "Nama: $nama , Nilai Ujian: $nilai_ujian , Keterangan : $keterangan  ";
?>