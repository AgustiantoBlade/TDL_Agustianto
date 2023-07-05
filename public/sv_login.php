<?php
session_start();
include "../config/connection.php";

if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        
        $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'");

        if (mysqli_num_rows($query) > 0) {
            $row = mysqli_fetch_assoc($query);

            $status = $row['status'];
            $id = $row['id'];
            $username = $row['username'];

            $_SESSION['id'] = $id;
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $username;

            if ($status == 1) {
            // User is an admin (status = 1) // kalau status yang dimasukkan 1 maka pindah ke laman admin
            ?>
                <script>
                    alert("Hello Admin");
                    location.href = "../admin/admin.php";
                </script>
            <?php
                exit();
                } else if ($status == 0) {
                // User is not an admin (status = 0) kalau status yang dimasukkan 0 maka masuk ke laman user
            ?>
                <script>
                    location.href = "home.php";
                </script>
            <?php
            }

        } else {
            ?>
            <script>
                alert("email atau password salah");
                location.href = "login.php";
            </script>
            <?php
        }
    }
}
?>