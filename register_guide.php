<?php 
include 'config.php';

if ($_POST) {
    $file = time().".jpg";
    move_uploaded_file($_FILES['photo']['tmp_name'], "uploads/".$file);

    mysqli_query($conn, "INSERT INTO guide (name, email, password, kimlik, license, photo) 
    VALUES ('$_POST[name]', '$_POST[email]', MD5('$_POST[password]'), '$_POST[kimlik]', '$_POST[license]', '$file')");
    echo "Registrasi berhasil! Silakan login.";
}
?>

<h2>Registrasi Guide</h2>

<form method="POST" enctype="multipart/form-data">
    Nama: <input name="name"><br>
    Email: <input name="email"><br>
    Password: <input type="password" name="password"><br>
    Kimlik: <input name="kimlik"><br>
    License: <input name="license"><br>
    Foto: <input type="file" name="photo"><br>
    <button>Register</button>
</form>
