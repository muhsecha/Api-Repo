<?php
$username = $_POST['username'];
$password = $_POST['password'];
$con = mysqli_connect("localhost", 'hasan', 'kopiko', "dbbajawacoffe");
$sql = "select * from tb_user where username = '$username' and password = '$password' ";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if ($count > 0) {
    $json["PAYLOAD"]["respon"] = true;
} else {
    $json["PAYLOAD"]["respon"] = false;
}
echo json_encode($json);
