<?php

require_once "baglanti.php";
//----------------- KİŞİSEL GİRİŞ -----------------//


// Giriş yapılıp yapılmadığını kontrol et
if (isset($_SESSION['loggedinKullanici']) && $_SESSION['loggedinKullanici'] === true) {
    // Giriş yapıldıysa
    $hesapDivDisplay = "none";
    $hesapContainerDisplay = "block";
} else {
    // Giriş yapılmadıysa
    $hesapDivDisplay = "block";
    $hesapContainerDisplay = "none";
}

//------------------------------------------------//



//----------------- İŞLETME GİRİŞ -----------------//

if (isset($_SESSION['loggedinIsletme']) && $_SESSION['loggedinIsletme'] === true) {
    // Giriş yapıldıysa
    $isletmeYaziDisplay = "none";
    $hesapDivDisplay = "none";
    $hesapContainer1Display = "block";
    $ilanVerDisplay = "block";
} else {
    // Giriş yapılmadıysa
    $isletmeYaziDisplay = "block";
    $hesapContainer1Display = "none";
    $ilanVerDisplay = "none";
    
}

//-----------------------------------------------//


//-----------------------Favoriye Ekleme------------------------//




//--------------------------------------------------------------//


?>




