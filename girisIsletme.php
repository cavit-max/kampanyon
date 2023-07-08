<?php
require_once "baglanti.php";

// POST verilerini al
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $eposta = $_POST["eposta"];
    $sifre = $_POST["sifre"];

    // Kullanıcı adı ve parola doğrulama
    $sql = "SELECT * FROM isletmeler WHERE eposta = '$eposta' AND sifre = '$sifre'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['loggedinIsletme'] = true; // Giriş yapıldığında loggedin değişkenini true olarak ayarla
        $_SESSION['isletmeID'] = $row['id']; // İşletmenin ID'sini oturum değişkenine ata
        $_SESSION['isletmeAdi'] = $row['ad']; // İşletmenin adını oturum değişkenine ata
        $_SESSION['isletmeTur'] = $row['tur']; // İşletmenin turunu oturum değişkenine ata
        $_SESSION['isletmeAdres'] = $row['adres']; // İşletmenin adresini oturum değişkenine ata
        $_SESSION['isletmeEposta'] = $row['eposta']; // İşletmenin e-posta adresini oturum değişkenine ata
        $_SESSION['isletmeTelefon'] = $row['telefon']; // İşletmenin telefonunu oturum değişkenine ata
        $_SESSION['isletmeSifre'] = $row['sifre']; // İşletmenin şifresini oturum değişkenine ata
        header("Location: anasayfa.php"); // İşletmenin anasayfa.php sayfasına yönlendir
        exit();
    } else {
        echo '<script>alert("Kullanıcı adı veya parola hatalı!");</script>';
    }
}


