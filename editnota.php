<?php
$id = $_POST['id'];
$statusOrder = $_POST['statusOrder'];
$con = mysqli_connect("localhost", "root", "", "dbbajawacoffe");
$sql = "UPDATE tb_nota SET statusOrder='$statusOrder' WHERE id='$id'";
$json["hasil"] = array();
if ($con->query($sql) === TRUE) {
    $json["hasil"]["respon"] = true;
} else {
    $json["hasil"]["respon"] = false;
}
echo json_encode($json);
