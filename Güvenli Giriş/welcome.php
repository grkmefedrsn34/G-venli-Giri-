<?php
session_start();

if (!isset($_SESSION['userid'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hoş Geldiniz</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Hoş Geldiniz!</h2>
        <p>Başarılı bir şekilde giriş yaptınız.</p>
    </div>
</body>
</html>
