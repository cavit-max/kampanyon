<?php
require_once "ortak.php";

if (isset($_SESSION['loggedinKullanici']) && $_SESSION['loggedinKullanici'] === true) {
    // POST verilerini al
    $data = json_decode(file_get_contents("php://input"), true);
    $ilanID = $data['ilanID'];
    $kullaniciID = $_SESSION['kullaniciID'];

    echo $ilanID;

    // Favoriyi veritabanına ekle
    $sql = "INSERT INTO favoriler (kullanici_id, ilan_id) VALUES ('$kullaniciID','$ilanID')";
    if ($conn->query($sql) === true) {
        // Favori ekleme başarılı oldu
        http_response_code(200);
        echo json_encode(array("message" => "Favori ekleme başarılı"));
    } else {
        // Favori ekleme başarısız oldu
        http_response_code(500);
        echo json_encode(array("message" => "basarisiz"));
    }
} else {
    echo "Oturum açık değil.";
}
?>