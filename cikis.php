<?php
// Oturumu başlat
session_start();

// Oturumu sonlandır
session_destroy();

// Kullanıcıyı çıkış sayfasına yönlendir
header("Location: anasayfa.php");
exit();
?>