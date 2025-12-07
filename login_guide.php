<?php 
include 'config.php';
session_start();

if ($_POST) {
    $e = $_POST['email'];
    $p = md5($_POST['password']);
    $q = mysqli_query($conn,"SELECT * FROM guide WHERE email='$e' AND password='$p'");
    if (mysqli_num_rows($q)) {
        $_SESSION['guide'] = mysqli_fetch_assoc($q);
        header("Location: guide_dashboard.php");
    } else echo "Login salah!";
}
?>

<form method="POST">
    Email: <input name="email">
    Password: <input type="password" name="password">
    <button>Login</button>
</form>
