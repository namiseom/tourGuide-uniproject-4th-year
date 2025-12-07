<?php 
include 'config.php';
session_start();

if ($_POST) {
    $u = $_POST['username'];
    $p = md5($_POST['password']);
    $q = mysqli_query($conn, "SELECT * FROM admin WHERE username='$u' AND password='$p'");
    if (mysqli_num_rows($q)) {
        $_SESSION['admin'] = $u;
        header("Location: admin_dashboard.php");
    } else echo "Login salah!";
}
?>

<form method="POST">
    Username: <input name="username">
    Password: <input type="password" name="password">
    <button>Login</button>
</form>
