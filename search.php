<?php 
include 'config.php';
$q = $_GET['q'];
$data = mysqli_query($conn, "SELECT * FROM guide WHERE name LIKE '%$q%'");
?>

<h2>Hasil Pencarian</h2>

<?php while ($g = mysqli_fetch_assoc($data)) { ?>
    <div>
        <img src="uploads/<?= $g['photo'] ?>" width="100">
        <h3><?= $g['name'] ?></h3>
        <p><?= $g['bio'] ?></p>
        <a href="order.php?id=<?= $g['id'] ?>">Order</a>
    </div>
<?php } ?>
