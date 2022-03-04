<?php 

include('../config/db.php');

// {'username':username, 'password':password}
$username = $_POST['username'];
$password = $_POST['password'];

$status = "";

$qCekUser = $link -> query("SELECT * FROM tbl_user WHERE username='$username' AND kata_sandi='$password';");

$tUser = mysqli_num_rows($qCekUser);

if($tUser < 1){
    $status = "DENIED";
}else{
    $status = "SUCCESS";
}

$dr = [
    'nama' => $username,
    'status' => $status
];

echo json_encode($dr);

?>