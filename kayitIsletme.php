<?php
// baglanti.php dosyasını dahil edin
require_once "baglanti.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gönderilen verileri al
    $ad = $_POST["ad"];
    $soyad = $_POST["tur"];
    $dogumTarihi = $_POST["adres"];
    $eposta = $_POST["eposta"];
    $telefon = $_POST["telefon"];
    $uyelikSifre = $_POST["sifre"];

    // Verileri veritabanına kaydet
    $sql = "INSERT INTO isletmeler (ad, tur, adres, eposta, telefon, sifre)
            VALUES ('$ad', '$soyad', '$dogumTarihi', '$eposta', '$telefon', '$uyelikSifre')";
    

    if ($conn->query($sql) === TRUE) {
        echo "Kayıt başarıyla eklendi.";
    } else {
        echo "Kayıt ekleme hatası: " . $conn->error;
    }
}
?>


