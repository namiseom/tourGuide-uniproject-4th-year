<?php 
include 'config.php';
$id = $_GET['id'];
$guide = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM guide WHERE id=$id"));

if ($_POST) {
    mysqli_query($conn, "INSERT INTO orders (user_name, user_email, guide_id, date_from, date_to, notes) 
    VALUES ('$_POST[name]', '$_POST[email]', '$id', '$_POST[from]', '$_POST[to]', '$_POST[notes]')");
    echo "Order berhasil!";
}
?>

<h2>Order Guide: <?= $guide['name'] ?></h2>

<form method="POST">
    Nama: <input name="name"><br>
    Email: <input name="email"><br>
    Dari tanggal: <input type="date" name="from"><br>
    Sampai tanggal: <input type="date" name="to"><br>
    Catatan: <textarea name="notes"></textarea><br>
    <button type="submit">Submit</button>
</form>
