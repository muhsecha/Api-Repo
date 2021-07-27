<?php
$con = mysqli_connect("localhost", 'hasan', 'kopiko', "dbbajawacoffe");
$sql = "SELECT * FROM tb_makanan";
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
            $namaMakanan = $row['namaMakanan'];
            $jenisMakanan = $row['jenisMakanan'];
            $hargaMakanan = $row['hargaMakanan'];
            $avatar = $row['gambar'];
            $array["id"] = $id;
            $array["kodeMakanan"] = $kodeMakanan;
            $array["namaMakanan"] = $namaMakanan;
            $array["jenisMakanan"] = $jenisMakanan;
            $array["hargaMakanan"] = $hargaMakanan;
            $array["avatar"] = $avatar;
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
