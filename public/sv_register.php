<?php
include "../config/connection.php";

$username = $_POST['username'];
$_SESSION['name'] = $username;
$fullname= $_POST ['fullname'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql_select = "select * from tb_user where username = '$username' AND password='$password'";
$query_check = mysqli_query($conn, $sql_select); //cek koneksi database dan isi database
$num = mysqli_num_rows($query_check); //mengambil data
$result = mysqli_fetch_array($query_check); //mengambil data

if($num == 0){
    $sql = "insert into tb_user (username, fullname, email, password, status, pet_id) values('$username','$fullname','$email','$password', '0', '1')";
    $query = mysqli_query($conn, $sql);
?>
<script>
    alert ("data user berhasil disimpan");
    location.href = "login.php";
</script>
<?php
} else {
?>
<script>
    alert ("data sudah ada");
    location.href = "register.php";
</script>
<?php
}
?>