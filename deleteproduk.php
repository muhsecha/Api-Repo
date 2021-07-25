<?php
$kodeMakanan = $_POST['kodeMakanan'];

$con = mysqli_connect("localhost", 'hasan', 'kopiko', "dbbajawacoffe");
$sql = "DELETE FROM `tb_makanan` WHERE kodeMakanan = $kodeMakanan";
$json["hasil"] = array();
if ($con->query($sql) === TRUE) {
    $json["hasil"]["respon"] = true;
} else {
    $json["hasil"]["respon"] = false;
}
echo json_encode($json);
