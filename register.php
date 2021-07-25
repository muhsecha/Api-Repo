<?php
$username = $_POST['username'];
$password = $_POST['password'];
$roleuser = $_POST['roleuser'];
$json["hasil"] = array();
$con = mysqli_connect("localhost", 'hasan', 'kopiko', "dbbajawacoffe");
$query = "SELECT id FROM tb_user WHERE email = '$email'";
$check = mysqli_num_rows(mysqli_query($con, $query));
if ($check == 0) {
    $sql = "INSERT INTO tb_user(username, password, roleuser) VALUES ('$username', '$password', '$roleuser')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $json["hasil"]["STATUS"] = "SUCCESS";
        $json["hasil"]["MESSAGE"] = "SUCCESS";
    } else {
        $json["hasil"]["STATUS"] = "FAILED";
        $json["hasil"]["MESSAGE"] = mysqli_error($con);
    }
} else {
    $json["hasil"]["STATUS"] = "FAILED";
    $json["hasil"]["MESSAGE"] = "Duplicated Username";
}
echo json_encode($json);
