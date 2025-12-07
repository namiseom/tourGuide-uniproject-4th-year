<?php 
include 'config.php';
session_start();
if (!isset($_SESSION['admin'])) die("Unauthorized");
?>

<h2>Dashboard Admin</h2>

<h3>List Tour Guide</h3>
<?php 
$data = mysqli_query($conn,"SELECT * FROM guide");
while ($g = mysqli_fetch_assoc($data)) {
    echo $g['name']." - ".$g['email']."<br>";
}
?>

<h3>Transaksi Order</h3>
<?php 
$ord = mysqli_query($conn,"SELECT orders.*, guide.name AS guide_name FROM orders 
LEFT JOIN guide ON guide.id = orders.guide_id");
while ($o = mysqli_fetch_assoc($ord)) {
    echo $o['user_name']." pesan ".$o['guide_name']."<br>";
}
?>

<a href="logout.php">Logout</a>
