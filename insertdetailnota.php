<?php
$kodeNota = $_POST['kodeNota'];
$kodeMakanan = $_POST['kodeMakanan'];
$jumlahItem = $_POST['jumlahItem'];
$subTotal = $_POST['subTotal'];
$hargaSatuan = $_POST['hargaSatuan'];
$con = mysqli_connect("localhost", 'root',  '', "dbbajawacoffe");
$sql = "INSERT INTO tb_detail_nota (kodeNota , kodeMakanan , jumlahItem , subTotal, hargaSatuan) VALUES ('$kodeNota', '$kodeMakanan', '$jumlahItem', '$subTotal', '$hargaSatuan')  ";
$json["hasil"] = array();
if ($con->query($sql) === TRUE) {
    $json["hasil"]["respon"] = true;
} else {
    $json["hasil"]["respon"] = false;
}
echo json_encode($json);
