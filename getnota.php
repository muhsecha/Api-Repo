<?php
$statusOrder = $_POST['statusOrder'];
$con = mysqli_connect("localhost", "root", "", "dbbajawacoffe");
$sql = "SELECT * FROM tb_nota where statusOrder = '$statusOrder'";
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
            $namaCustomer = $row['namaCustomer'];
            $tanggalNota = $row['tanggalNota'];
            $nohpCustomer = $row['nohpCustomer'];
            $note = $row['note'];
            $kodeNota = $row['kodeNota'];
            $totalHarga = $row['totalHarga'];
            $array["id"] = $id;
            $array["namaCustomer"] = $namaCustomer;
            $array["tanggalNota"] = $tanggalNota;
            $array["nohpCustomer"] = $nohpCustomer;
            $array["note"] = $note;
            $array["kodeNota"] = $kodeNota;
            $array["totalHarga"] = $totalHarga;
            $array["statusOrder"] = $row["statusOrder"];
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
