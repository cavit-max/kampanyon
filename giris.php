<?php
require_once "baglanti.php";

// POST verilerini al
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $eposta = $_POST["eposta"];
    $sifre = $_POST["sifre"];

    // Kullanıcı adı ve parola doğrulama
    $sql = "SELECT * FROM kullanicilar WHERE eposta = '$eposta' AND sifre = '$sifre'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['loggedinKullanici'] = true; // Giriş yapıldığında loggedin değişkenini true olarak ayarla
        $_SESSION['kullaniciID'] = $row['id']; // İşletmenin ID'sini oturum değişkenine ata
        $_SESSION['kullaniciAdi'] = $row['ad']; // İşletmenin adını oturum değişkenine ata
        $_SESSION['kullaniciTur'] = $row['soyad']; // İşletmenin turunu oturum değişkenine ata
        $_SESSION['kullaniciAdres'] = $row['dogum_tarihi']; // İşletmenin adresini oturum değişkenine ata
        $_SESSION['kullaniciEposta'] = $row['eposta']; // İşletmenin e-posta adresini oturum değişkenine ata
        $_SESSION['kullaniciTelefon'] = $row['telefon']; // İşletmenin telefonunu oturum değişkenine ata
        $_SESSION['kullaniciSifre'] = $row['sifre']; // İşletmenin şifresini oturum değişkenine ata
        $_SESSION['kullaniciPp'] = $row['kullanici_pp']; // İşletmenin şifresini oturum değişkenine ata
        header("Location: anasayfa.php"); // Kullanıcıyı hesap.php sayfasına yönlendir
        exit();
    } else {
        echo '<script>alert("Kullanıcı adı veya parola hatalı!");</script>';
    }
}
