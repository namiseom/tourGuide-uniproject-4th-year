<?php 
include 'config.php';
session_start();
if (!isset($_SESSION['guide'])) die("Unauthorized");

$id = $_SESSION['guide']['id'];

if ($_POST) {
    mysqli_query($conn, "UPDATE guide SET bio='$_POST[bio]' WHERE id=$id");
    echo "Profil updated!";
}

$g = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM guide WHERE id=$id"));
?>

<h2>Dashboard Guide</h2>

<form method="POST">
    Bio:<br>
    <textarea name="bio"><?= $g['bio'] ?></textarea><br>
    <button>Update</button>
</form>

<a href="logout.php">Logout</a>
