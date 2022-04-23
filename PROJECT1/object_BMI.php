<?php
require_once 'Pasien.php';
require_once 'BMIPasien.php';
require_once 'BMI.php';

$psn1 = new BMIPasien('12-04-2022');
$psn1->kode = 'P001';
$psn1->nama = 'Natasya';
$psn1->gender = 'P';

$psn2 = new BMIPasien('12-04-2022');
$psn2->kode = 'P002';
$psn2->nama = 'Kurnia';
$psn2->gender = 'P';

$psn3 = new BMIPasien('13-04-2022');
$psn3->kode = 'P003';
$psn3->nama = 'Tresno';
$psn3->gender = 'L';

$psn4 = new BMIPasien($_POST['tanggal']);
$psn4->kode = $_POST['kode'];
$psn4->nama = $_POST['nama'];
$psn4->gender = $_POST['gender'];

$bmi1 = new BMI($psn1, 73, 169);
$bmi2 = new BMI($psn2, 55.3, 165);
$bmi3 = new BMI($psn3, 45.2, 171);
$bmi4 = new BMI($psn4, $_POST['berat'], $_POST['tinggi']);

$ar_data = [$bmi1,$bmi2,$bmi3,$bmi4];
?>