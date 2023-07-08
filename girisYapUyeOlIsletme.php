<!DOCTYPE html>
<html>

<head>
    <title>Kampanyon</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/girisYapUyeOl.css">
    <link rel="stylesheet" type="text/css" href="css/container.css">
    <link rel="stylesheet" type="text/css" href="css/hakkinda.css">
    <link rel="stylesheet" type="text/css" href="css/reklam.css">
    <link rel="stylesheet" type="text/css" href="css/kampanyaKutu.css">
    <script src="js/container.js"></script>
    <script src="js/girisYapUyeOl.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<?php
require_once "ortak.php";
?>

<body>
    <div class="container">

        <div class=telefonRes>
            <div class=telResUst>

                <div class=telResUstSol>

                    <div class="telResUstSolMenu">
                        <img class="menuFoto" src="img/menu.png" alt="menu" onclick="toggleMenu()">

                        <div class="menu480">
                            <div class="menu480Ust">
                                <p class=logoKampanyon>kampanyon</p>
                                <span class="kapatmaX" onclick="toggleMenu()">X</span>
                            </div>

                            <ul class="menuListesi">
                                <div class="sekmeListe">
                                    <p onclick="setKategoriID(1)">RESTORAN & KAFE</p>
                                    <li class="menuOge" onclick="toggleAltMenu(this)">
                                        <p>Alt Menü -></p>
                                        <ul class="altMenuListesi">
                                            <li class="altMenuOge" onclick="setAltKategoriID(10)">Kahvaltılar</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(11)">Kafeler</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(12)">Fast Foodlar</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(13)">Geleneksel Yemekler</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(14)">Deniz Ürünleri</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(15)">Barlar & Gece Kulübü</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(16)">Pastane & Tatlıcılar</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(17)">Dünya Mutfağı</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(18)">Vejetaryen ve Vegan Yemekler</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(19)">Diğer</li>
                                        </ul>
                                    </li>
                                </div>

                                <div class="sekmeListe">
                                    <p onclick="setKategoriID(2)">SUPERMARKET</p>
                                    <li class="menuOge" onclick="toggleAltMenu(this)">
                                        <p>Alt Menü -></p>
                                        <ul class="altMenuListesi">
                                            <li class="altMenuOge" onclick="setAltKategoriID(20)">Sebze-Meyve</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(21)">Temel Gıda</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(22)">Ekmek & Fırın</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(23)">Su & İçecek</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(24)">Süt & Kahvaltılık</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(25)">Et & Balık</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(26)">Atıştırmalıklar</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(27)">Hazır Gıdalar</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(28)">Temizlik Malzemeleri</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(29)">Kişisel Bakım</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(30)">Ev Gereçleri</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(31)">Petshop</li>
                                        </ul>
                                    </li>
                                </div>
                                <div class="sekmeListe">
                                    <p onclick="setKategoriID(3)">GİYİM & AKSESUAR</p>
                                    <li class="menuOge" onclick="toggleAltMenu(this)">
                                        <p>Alt Menü -></p>
                                        <ul class="altMenuListesi">
                                            <li class="altMenuOge" onclick="setAltKategoriID(32)">Kadın Giyim</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(33)">Erkek Giyim</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(34)">Çocuk Giyim</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(35)">Ayakkabı</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(36)">Çanta</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(37)">Saat & Aksesuar</li>
                                        </ul>
                                    </li>
                                </div>
                                <div class="sekmeListe">
                                    <p onclick="setKategoriID(4)">ELEKTRONİK</p>
                                    <li class="menuOge" onclick="toggleAltMenu(this)">
                                        <p>Alt Menü -></p>
                                        <ul class="altMenuListesi">
                                            <li class="altMenuOge" onclick="setAltKategoriID(38)">Bilgisayar/Tablet</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(39)">Yazıcılar & Projeksiyon</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(40)">Telefon & Telefon Aksesuarları</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(41)">TV, Görüntü & Ses Sistemleri</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(42)">Beyaz Eşya</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(43)">Klima ve Isıtıcılar</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(44)">Elektrikli Ev Aletleri</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(45)">Foto & Kamera</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(46)">Oyun & Oyun Konsolları</li>
                                        </ul>
                                    </li>
                                </div>
                                <div class="sekmeListe">
                                    <p onclick="setKategoriID(5)">EV YAŞAM</p>
                                    <li class="menuOge" onclick="toggleAltMenu(this)">
                                        <p>Alt Menü -></p>
                                        <ul class="altMenuListesi">
                                            <li class="altMenuOge" onclick="setAltKategoriID(47)">Sofra & Mutfak</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(48)">Banyo</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(49)">Ev Tekstili</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(5)">Ev Dekorasyon</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(51)">Mobilya</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(52)">Aydınlatma</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(53)">Ev Gereçleri</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(54)">Hobi Ürünleri</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(55)">Kırtasiye & Ofis</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(56)">Yapı Market</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(57)">Otomobil & Motorsiklet</li>
                                        </ul>
                                    </li>
                                </div>
                                <div class="sekmeListe">
                                    <p onclick="setKategoriID(6)">AKTİVİTE & EĞLENCE</p>
                                    <li class="menuOge" onclick="toggleAltMenu(this)">
                                        <p>Alt Menü -></p>
                                        <ul class="altMenuListesi">
                                            <li class="altMenuOge" onclick="setAltKategoriID(58)">Sinema</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(59)">Tiyatro</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(60)">Konserler</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(61)">Müzeler</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(62)">Eğlence Merkezleri</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(63)">Oyun Salonları</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(64)">Sanat Atölyeleri</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(65)">Gezilecek Yerler</li>

                                        </ul>
                                    </li>
                                </div>
                                <div class="sekmeListe">
                                    <p onclick="setKategoriID(7)">SPOR & OUTDOOR</p>
                                    <li class="menuOge" onclick="toggleAltMenu(this)">
                                        <p>Alt Menü -></p>
                                        <ul class="altMenuListesi">
                                            <li class="altMenuOge" onclick="setAltKategoriID(66)">Online Kurslar</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(67)">Spor Malzemeleri</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(68)">Dil Kursları</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(69)">Kişisel Gelişim Kursları</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(70)">Spor Salonları</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(71)">Doğa Sporları</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(72)">Su Sporları</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(73)">Yoga</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(74)">Diğer Sporlar</li>
                                        </ul>
                                    </li>
                                </div>
                                <div class="sekmeListe">
                                    <p onclick="setKategoriID(8)">SAĞLIK</p>
                                    <li class="menuOge" onclick="toggleAltMenu(this)">
                                        <p>Alt Menü -></p>
                                        <ul class="altMenuListesi">
                                            <li class="altMenuOge" onclick="setAltKategoriID(75)">Hastaneler</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(76)">Veterinerler</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(77)">Psikolog & Ruh Sağlığı</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(78)">Eczaneler</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(79)">Hayvan Sağlığı</li>
                                        </ul>
                                    </li>
                                </div>
                                <div class="sekmeListe">
                                    <p onclick="setKategoriID(9)">HİZMET</p>
                                    <li class="menuOge" onclick="toggleAltMenu(this)">
                                        <p>Alt Menü -></p>
                                        <ul class="altMenuListesi">
                                            <li class="altMenuOge" onclick="setAltKategoriID(80)">Kurye & Nakliyat</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(80)">Danışmanlık</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(82)">Emlak</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(83)">Oto Galeri</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(84)">Konaklama & Otel</li>
                                            <li class="altMenuOge" onclick="setAltKategoriID(85)">Gezi Turları & Rehberlik</li>
                                        </ul>
                                    </li>
                                </div>

                            </ul>
                        </div>
                    </div>

                    <a href="anasayfa.php">kampanyon</a>

                </div>

                <div class=telResUstSag>
                    <div class="hesapAnaDivRes">
                        <div class="isletmeUyeRes">

                            <div class="isletmeDivRes" style="display: <?php echo $isletmeYaziDisplay; ?>">
                                <div class="isletmeYaziRes">
                                    <a href="girisYapUyeOlIsletme.php">Kampanya Yayınla</a>
                                </div>
                            </div>

                            <div class="hesap-container1Res" id="hesapContainer1" style="display: <?php echo $hesapContainer1Display; ?>">
                                <img class="icon1Res" src="img/hesap.png">
                                <span class="hesap-yazi1Res" onclick="toggleHesapMenuRes()">Hesabım</span>
                                <div class="hesap-menu1Res">
                                    <a href="isletmeHesap.php" id="hesapBilgiClick2">işletme Bilgilerim</a>
                                    <a href="isletmeHesap.php" id="favorilerimClick2">Kampanyalarım</a>
                                    <a href="cikis.php">Çıkış Yap</a>
                                </div>
                            </div>

                        </div>
                        <div class="normalUyeRes">
                            <div class="hesapDivRes" style="display: <?php echo $hesapDivDisplay; ?>">
                                <div class="hesapYaziRes">
                                    <a href="girisYapUyeOl.php">Giriş / Üye Ol</a>
                                </div>
                            </div>

                            <div class="hesap-containerRes" id="hesapContainer" style="display: <?php echo $hesapContainerDisplay; ?>">
                                <img class="iconRes" src="img/hesap.png">
                                <span class="hesap-yaziRes" onclick="toggleKullaniciMenuRes()">Hesabım</span>
                                <div class="hesap-menuRes">
                                    <a href="hesap.php" id="hesapBilgiClick2">Hesap Bilgilerim</a>
                                    <a href="hesap.php" id="favorilerimClick2">Favorilerim</a>
                                    <a href="cikis.php">Çıkış Yap</a>
                                </div>
                            </div>

                            <a class="ilanVerRes" href="kampanyaGiris.php" style="display: <?php echo $ilanVerDisplay; ?>">İlan Ver</a>

                        </div>
                    </div>
                </div>

            </div>

            <div class=telResAlt>
                <div class=telResAltArama>
                    <form method="POST" action="aramaSonuclari.php">
                        <input type="text" name="aranan" placeholder="Arama yap...">
                        <button type="submit">
                            <img class="ıcon" src="img/ara.png">
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="ustDiv">
            <div class="logoKonum">
                <div class="logoDiv">
                    <a href="anasayfa.php">kampanyon</a>
                </div>
                <div class="konumDiv">
                    <img src="img/konum">
                    <select>
                        <option>İzmir, Buca</option>
                    </select>
                </div>
            </div>
            <div class="aramaDiv">
                <form method="POST" action="aramaSonuclari.php">
                    <input type="text" name="aranan" placeholder="Aradığınız ürünü veya kategoriyi giriniz...">
                    <button type="submit">
                        <img class="ıcon" src="img/ara.png">
                    </button>
                </form>
            </div>

            <div class="hesapAnaDiv">
                <div class="isletmeUye">

                    <div class="isletmeYazi" style="display: <?php echo $isletmeYaziDisplay; ?>">
                        <a href="girisYapUyeOlIsletme.php">Kampanya Yayınla</a>
                    </div>

                    <div class="hesap-container1" id="hesapContainer1" style="display: <?php echo $hesapContainer1Display; ?>">
                        <img class="icon1" src="img/hesap.png">
                        <span class="hesap-yazi1" onclick="toggleHesapMenu()"><a>Hesabım</a></span>
                        <div class="hesap-menu1">
                            <a href="isletmeHesap.php" id="hesapBilgiClick2">İşletme Bilgilerim</a>
                            <a href="isletmeHesap.php" id="favorilerimClick2">Kampanyalarım</a>
                            <a href="cikis.php">Çıkış Yap</a>
                        </div>
                    </div>

                </div>
                <div class="normalUye">
                    <div class="hesapDiv" style="display: <?php echo $hesapDivDisplay; ?>">
                        <div class="hesapYazi">
                            <a href="girisYapUyeOl.php">Giriş / Üye Ol</a>
                        </div>
                    </div>

                    <div class="hesap-container" id="hesapContainer" style="display: <?php echo $hesapContainerDisplay; ?>">
                        <img class="icon" src="img/hesap.png">
                        <span class="hesap-yazi" onclick="toggleKullaniciMenu()"><a>Hesabım</a></span>
                        <div class="hesap-menu">
                            <a href="hesap.php" id="hesapBilgiClick2">Hesap Bilgilerim</a>
                            <a href="hesap.php" id="favorilerimClick2">Favorilerim</a>
                            <a href="cikis.php">Çıkış Yap</a>
                        </div>
                    </div>

                    <a class="ilanVer" href="kampanyaGiris.php" style="display: <?php echo $ilanVerDisplay; ?>">İlan Ver</a>

                </div>
            </div>
        </div>

        <div class="kategoriDiv" onmouseleave="hidePopupKategori()">
            <div class="anaKategori" onclick="setKategoriID(1)" onmouseenter="showPopupKategori('restoranKafePopup')">RESTORAN & KAFE</div>
            <div id="restoranKafePopup" class="popupKategori">
                <div class="altKategoriGrup">
                    <div class="altKategori" onclick="setAltKategoriID(10)">Kahvaltılar</div>
                    <div class="altKategori" onclick="setAltKategoriID(11)">Kafeler</div>
                    <div class="altKategori" onclick="setAltKategoriID(12)">Fast Foodlar</div>
                    <div class="altKategori" onclick="setAltKategoriID(13)">Geleneksel Yemekler</div>
                    <div class="altKategori" onclick="setAltKategoriID(14)">Deniz Ürünleri</div>
                    <div class="altKategori" onclick="setAltKategoriID(15)">Barlar & Gece Kulübü</div>
                    <div class="altKategori" onclick="setAltKategoriID(16)">Pastane & Tatlıcılar</div>
                    <div class="altKategori" onclick="setAltKategoriID(17)">Dünya Mutfağı</div>
                    <div class="altKategori" onclick="setAltKategoriID(18)">Vejetaryen ve Vegan Yemekler</div>
                    <div class="altKategori" onclick="setAltKategoriID(19)">Diğer</div>
                </div>
            </div>
            <div class="cizgi">|</div>
            <div class="anaKategori" onclick="setKategoriID(2)" onmouseenter="showPopupKategori('marketPopup')">SUPERMARKET</div>
            <div id="marketPopup" class="popupKategori">
                <div class="altKategoriGrup">
                    <div class="altKategori" onclick="setAltKategoriID(20)">Sebze-Meyve</div>
                    <div class="altKategori" onclick="setAltKategoriID(21)">Temel Gıda</div>
                    <div class="altKategori" onclick="setAltKategoriID(22)">Ekmek & Fırın</div>
                    <div class="altKategori" onclick="setAltKategoriID(23)">Su & İçecek</div>
                    <div class="altKategori" onclick="setAltKategoriID(24)">Süt & Kahvaltılık</div>
                    <div class="altKategori" onclick="setAltKategoriID(25)">Et & Balık</div>
                    <div class="altKategori" onclick="setAltKategoriID(26)">Atıştırmalıklar</div>
                    <div class="altKategori" onclick="setAltKategoriID(27)">Hazır Gıdalar</div>
                    <div class="altKategori" onclick="setAltKategoriID(28)">Temizlik Malzemeleri</div>
                    <div class="altKategori" onclick="setAltKategoriID(29)">Kişisel Bakım</div>
                    <div class="altKategori" onclick="setAltKategoriID(30)">Ev Gereçleri</div>
                    <div class="altKategori" onclick="setAltKategoriID(31)">Petshop</div>
                </div>
            </div>
            <div class="cizgi">|</div>
            <div class="anaKategori" onclick="setKategoriID(3)" onmouseenter="showPopupKategori('giyimAksesuarPopup')">GİYİM & AKSESUAR</div>
            <div id="giyimAksesuarPopup" class="popupKategori">
                <div class="altKategoriGrup">
                    <div class="altKategori" onclick="setAltKategoriID(32)">Kadın Giyim</div>
                    <div class="altKategori" onclick="setAltKategoriID(33)">Erkek Giyim </div>
                    <div class="altKategori" onclick="setAltKategoriID(34)">Çocuk Giyim</div>
                    <div class="altKategori" onclick="setAltKategoriID(35)">Ayakkabı</div>
                    <div class="altKategori" onclick="setAltKategoriID(36)">Çanta</div>
                    <div class="altKategori" onclick="setAltKategoriID(37)">Saat & Aksesuar</div>
                </div>
            </div>
            <div class="cizgi">|</div>
            <div class="anaKategori" onclick="setKategoriID(4)" onmouseenter="showPopupKategori('elektronikPopup')">ELEKTRONİK</div>
            <div id="elektronikPopup" class="popupKategori">
                <div class="altKategoriGrup">
                    <div class="altKategori" onclick="setAltKategoriID(38)">Bilgisayar/Tablet</div>
                    <div class="altKategori" onclick="setAltKategoriID(39)">Yazıcılar & Projeksiyon</div>
                    <div class="altKategori" onclick="setAltKategoriID(40)">Telefon & Telefon Aksesuarları</div>
                    <div class="altKategori" onclick="setAltKategoriID(41)">TV, Görüntü & Ses Sistemleri</div>
                    <div class="altKategori" onclick="setAltKategoriID(42)">Beyaz Eşya</div>
                    <div class="altKategori" onclick="setAltKategoriID(43)">Klima ve Isıtıcılar</div>
                    <div class="altKategori" onclick="setAltKategoriID(44)">Elektrikli Ev Aletleri</div>
                    <div class="altKategori" onclick="setAltKategoriID(45)">Foto & Kamera</div>
                    <div class="altKategori" onclick="setAltKategoriID(46)">Oyun & Oyun Konsolları</div>
                </div>
            </div>
            <div class="cizgi">|</div>
            <div class="anaKategori" onclick="setKategoriID(5)" onmouseenter="showPopupKategori('evYasamPopup')">EV YAŞAM</div>
            <div id="evYasamPopup" class="popupKategori">
                <div class="altKategoriGrup">
                    <div class="altKategori" onclick="setAltKategoriID(47)">Sofra & Mutfak</div>
                    <div class="altKategori" onclick="setAltKategoriID(48)">Banyo</div>
                    <div class="altKategori" onclick="setAltKategoriID(49)">Ev Tekstili</div>
                    <div class="altKategori" onclick="setAltKategoriID(50)">Ev Dekorasyon</div>
                    <div class="altKategori" onclick="setAltKategoriID(51)">Mobilya </div>
                    <div class="altKategori" onclick="setAltKategoriID(52)">Aydınlatma</div>
                    <div class="altKategori" onclick="setAltKategoriID(53)">Ev Gereçleri</div>
                    <div class="altKategori" onclick="setAltKategoriID(54)">Hobi Ürünleri</div>
                    <div class="altKategori" onclick="setAltKategoriID(55)">Kırtasiye & Ofis</div>
                    <div class="altKategori" onclick="setAltKategoriID(56)">Yapı Market</div>
                    <div class="altKategori" onclick="setAltKategoriID(57)">Otomobil & Motorsiklet</div>
                </div>
            </div>
            <div class="cizgi">|</div>
            <div class="anaKategori" onclick="setKategoriID(6)" onmouseenter="showPopupKategori('aktiviteEglencePopup')">AKTİVİTE & EĞLENCE</div>
            <div id="aktiviteEglencePopup" class="popupKategori">
                <div class="altKategoriGrup">
                    <div class="altKategori" onclick="setAltKategoriID(58)">Sinema</div>
                    <div class="altKategori" onclick="setAltKategoriID(59)">Tiyatro</div>
                    <div class="altKategori" onclick="setAltKategoriID(60)">Konserler</div>
                    <div class="altKategori" onclick="setAltKategoriID(61)">Müzeler</div>
                    <div class="altKategori" onclick="setAltKategoriID(62)">Eğlence Merkezleri</div>
                    <div class="altKategori" onclick="setAltKategoriID(63)">Oyun Salonları</div>
                    <div class="altKategori" onclick="setAltKategoriID(64)">Sanat Atölyeleri</div>
                    <div class="altKategori" onclick="setAltKategoriID(65)">Gezilecek Yerler</div>
                </div>
            </div>
            <div class="cizgi">|</div>
            <div class="anaKategori" onclick="setKategoriID(7)" onmouseenter="showPopupKategori('sporOutdoorPopup')">SPOR & OUTDOOR</div>
            <div id="sporOutdoorPopup" class="popupKategori">
                <div class="altKategoriGrup">
                    <div class="altKategori" onclick="setAltKategoriID(66)">Online Kurslar</div>
                    <div class="altKategori" onclick="setAltKategoriID(67)">Spor Malzemeleri</div>
                    <div class="altKategori" onclick="setAltKategoriID(68)">Dil Kursları</div>
                    <div class="altKategori" onclick="setAltKategoriID(69)">Kişisel Gelişim Kursları</div>
                    <div class="altKategori" onclick="setAltKategoriID(70)">Spor Salonları</div>
                    <div class="altKategori" onclick="setAltKategoriID(71)">Doğa Sporları</div>
                    <div class="altKategori" onclick="setAltKategoriID(72)">Su Sporları</div>
                    <div class="altKategori" onclick="setAltKategoriID(73)">Yoga</div>
                    <div class="altKategori" onclick="setAltKategoriID(74)">Diğer Sporlar</div>
                </div>
            </div>
            <div class="cizgi">|</div>
            <div class="anaKategori" onclick="setKategoriID(8)" onmouseenter="showPopupKategori('petshopVeterinerPopup')">SAĞLIK</div>
            <div id="petshopVeterinerPopup" class="popupKategori">
                <div class="altKategoriGrup">
                    <div class="altKategori" onclick="setAltKategoriID(75)">Hastaneler</div>
                    <div class="altKategori" onclick="setAltKategoriID(76)">Veterinerler</div>
                    <div class="altKategori" onclick="setAltKategoriID(77)">Psikolog & Ruh Sağlığı</div>
                    <div class="altKategori" onclick="setAltKategoriID(78)">Eczaneler</div>
                    <div class="altKategori" onclick="setAltKategoriID(79)">Hayvan Sağlığı</div>
                </div>
            </div>
            <div class="cizgi">|</div>
            <div class="anaKategori" onclick="setKategoriID(9)" onmouseenter="showPopupKategori('hizmetPopup')">HİZMET</div>
            <div id="hizmetPopup" class="popupKategori">
                <div class="altKategoriGrup">
                    <div class="altKategori" onclick="setAltKategoriID(80)">Kurye & Nakliyat</div>
                    <div class="altKategori" onclick="setAltKategoriID(81)">Danışmanlık</div>
                    <div class="altKategori" onclick="setAltKategoriID(82)">Emlak</div>
                    <div class="altKategori" onclick="setAltKategoriID(83)">Oto Galeri</div>
                    <div class="altKategori" onclick="setAltKategoriID(84)">Konaklama & Otel</div>
                    <div class="altKategori" onclick="setAltKategoriID(85)">Gezi Turları & Rehberlik</div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="girisUye">
            <div class="butonlar">
                <button id="girisUyeClick" onclick="girisYapGoster()">Giriş Yap</button>
                <button id="uyeOlClick" onclick="uyeOlGoster()">Üye Ol</button>
            </div>
            <div class="girisYap">
                <h1>İşletme Hesabına Giriş Yap</h1>
                <form action="girisIsletme.php" method="POST">
                    <label for="eposta">E-posta:</label>
                    <input type="email" id="eposta" name="eposta" required><br><br>

                    <label for="sifre">Şifre:</label>
                    <input type="password" id="sifre" name="sifre" required><br><br>

                    <input type="submit" value="Giriş Yap">
                </form>
            </div>

            <div class="uyeOl">
                <h1>&nbsp;&nbsp;&nbsp;&nbsp;İşletme Hesabı Oluştur&nbsp;&nbsp;&nbsp;&nbsp;</h1>
                <form action="kayitIsletme.php" method="POST">
                    <label for="ad">İşletme Adı:</label>
                    <input type="text" id="ad" name="ad" required><br><br>

                    <label for="tur">İşletme Türü:</label>
                    <input type="text" id="tur" name="tur" required><br><br>

                    <label for="adres">Adres:</label>
                    <select id="il" name="il">
                        <option value="izmir" selected>İzmir</option>
                    </select><br><br>
                    <select id="ilce" name="ilce">
                        <option value="buca" selected>Buca</option>
                    </select><br><br>
                    <input type="text" id="adres" name="adres" required><br><br>

                    <label for="eposta">E-posta:</label>
                    <input type="email" id="eposta" name="eposta" required><br><br>

                    <label for="telefon">Telefon:</label>
                    <input type="tel" id="telefon" name="telefon" required><br><br>

                    <label for="sifre">Şifre:</label>
                    <input type="password" id="sifre" name="sifre" required><br><br>

                    <input type="submit" value="Üye Ol">
                </form>
            </div>
        </div>
    </div>

    <div class="hakkindaDiv">
        <p>© 2023 Örnek Şirketi. Tüm hakları saklıdır.</p>
        <a href="#">Gizlilik Politikası</a>
        <a href="#">Kullanım Koşulları</a>
        <a href="#">İletişim</a>
        <div class="sosyalMedya">
            <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" title="İnstagram"><i class="fab fa-instagram"></i></a>
        </div>
    </div>



</body>

</html>