<?php
$kodeMakanan = $_POST['kodeMakanan'];
$namaMakanan = $_POST['namaMakanan'];
$jenisMakanan = $_POST['jenisMakanan'];
$hargaMakanan = $_POST['hargaMakanan'];
$avatar = $_POST['avatar'];

$con = mysqli_connect("localhost", 'hasan', 'kopiko', "dbbajawacoffe");
$sql = "INSERT INTO tb_makanan (kodeMakanan , namaMakanan , jenisMakanan , gambar, hargaMakanan) VALUES ('$kodeMakanan', '$namaMakanan', '$jenisMakanan', '$avatar', '$hargaMakanan')  ";
$json["hasil"] = array();
if ($con->query($sql) === TRUE) {
    $json["hasil"]["respon"] = true;
} else {
    $json["hasil"]["respon"] = false;
}
echo json_encode($json);
