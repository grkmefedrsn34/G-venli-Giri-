<?php
 $host = 'localhost';  // Doğru ana bilgisayar adı
 $db = 'secure_login'; // Veritabanı adı
 $user = 'root';       // Veritabanı kullanıcı adı
 $pass = '';           // Veritabanı parolası, varsayılan olarak boş

 $conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Bağlantı başarısız: " . $conn->connect_error);
}
?>