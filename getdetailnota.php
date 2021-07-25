<?php
$kodeNota = $_POST['kodeNota'];
$con = mysqli_connect("localhost", 'hasan', 'kopiko', "dbbajawacoffe");
$sql = "SELECT * FROM tb_detail_nota where kodeNota = '$kodeNota'";
$json["STATUS"] = array();
$json["MESSAGE"] = array();
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if ($result) {
    $json["STATUS"] = "SUCCESS";
    $json["MESSAGE"] = "SUCCESS";
    if ($count > 0) {
        $json["PAYLOAD"] = [];
        while ($row = mysqli_fetch_array($result)) {
            $id = $row["id"];
            $kodeMakanan = $row['kodeMakanan'];
            $jumlahItem = $row['jumlahItem'];
            $subTotal = $row['subTotal'];
            $hargaSatuan = $row['hargaSatuan'];
            $array["id"] = $id;
            $array["kodeMakanan"] = $kodeMakanan;
            $array["jumlahItem"] = $jumlahItem;
            $array["subTotal"] = $subTotal;
            $array["hargaSatuan"] = $hargaSatuan;
            $array["kodeNota"] = $row["kodeNota"];
            array_push($json["PAYLOAD"], $array);
        }
    } else {
        $json["PAYLOAD"]["USER_INFO"] = "null";
    }
} else {
    $json["STATUS"] = "FAILED";
    $json["MESSAGE"] = mysqli_error($con);
}
echo json_encode($json);
