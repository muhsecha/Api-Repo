<?php
$namaCustomer = $_POST['namaCustomer'];
$tanggalNota = $_POST['tanggalNota'];
$nohpCustomer = $_POST['nohpCustomer'];
$note = $_POST['note'];
$kodeNota = $_POST['kodeNota'];
$totalHarga = $_POST['totalHarga'];
$statusOrder = $_POST['statusOrder'];
$con = mysqli_connect("localhost", 'hasan', 'kopiko', "dbbajawacoffe");
$sql = "INSERT INTO tb_nota (namaCustomer , tanggalNota , nohpCustomer, note, kodeNota, totalHarga, statusOrder) VALUES ('$namaCustomer', '$tanggalNota', '$nohpCustomer', '$note', '$kodeNota', '$totalHarga', '$statusOrder')  ";
$json["hasil"] = array();
if ($con->query($sql) === TRUE) {
    $json["hasil"]["respon"] = true;
} else {
    $json["hasil"]["respon"] = false;
}
echo json_encode($json);
