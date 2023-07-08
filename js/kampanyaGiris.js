//---------------ALT KATEGORİ SELECTLERİ---------------//

function altKategorileriGuncelle() {
    var ilanKategori = document.getElementById("ilanKategori");
    var ilanAltKategori = document.getElementById("ilanAltKategori");

    // Seçilen kategoriyi alın
    var secilenKategori = ilanKategori.value;

    // Alt kategorileri temizleyin
    ilanAltKategori.innerHTML = "";

    // Seçilen kategoriye göre alt kategorileri oluşturun
    switch (secilenKategori) {
        case "1":
            ilanAltKategori.innerHTML += '<option value="10">Kahvaltılar</option>';
            ilanAltKategori.innerHTML += '<option value="11" selected>Kafeler</option>';
            ilanAltKategori.innerHTML += '<option value="12" selected>Fast Food</option>';
            ilanAltKategori.innerHTML += '<option value="13" selected>Geleneksel Yemekler</option>';
            ilanAltKategori.innerHTML += '<option value="14" selected>Deniz Ürünleri</option>';
            ilanAltKategori.innerHTML += '<option value="15" selected>Barlar & Gece Kulüpleri</option>';
            ilanAltKategori.innerHTML += '<option value="16" selected>Pastane & Tatlı </option>';
            ilanAltKategori.innerHTML += '<option value="17" selected>Dünya Mutfağı </option>';
            ilanAltKategori.innerHTML += '<option value="18" selected>Vejetaryen ve Vegan Yemekler</option>';
            ilanAltKategori.innerHTML += '<option value="19" selected>Diğer</option>';
            
            break;

        case "2":
            ilanAltKategori.innerHTML += '<option value="20" selected>Sebze-Meyve</option>';
            ilanAltKategori.innerHTML += '<option value="21" selected>Temel Gıda</option>';
            ilanAltKategori.innerHTML += '<option value="22" selected>Ekmek & Fırın</option>';
            ilanAltKategori.innerHTML += '<option value="23" selected>Su & İçeceki</option>';
            ilanAltKategori.innerHTML += '<option value="24" selected>Süt & Kahvaltılık</option>';
            ilanAltKategori.innerHTML += '<option value="25" selected>Et & Balık</option>';
            ilanAltKategori.innerHTML += '<option value="26" selected>Atıştırmalıklar</option>';
            ilanAltKategori.innerHTML += '<option value="27" selected>Hazır Gıdalar</option>';
            ilanAltKategori.innerHTML += '<option value="28" selected>Temizlik Malzemeleri</option>';
            ilanAltKategori.innerHTML += '<option value="29" selected>Kişisel Bakım</option>';
            ilanAltKategori.innerHTML += '<option value="30" selected>Ev Gereçleri</option>';
            ilanAltKategori.innerHTML += '<option value="31" selected>Petshop</option>';
            break;
        case "3":
            ilanAltKategori.innerHTML += '<option value="32" selected>Kadın Giyim</option>';
            ilanAltKategori.innerHTML += '<option value="33" selected>Erkek Giyim</option>';
            ilanAltKategori.innerHTML += '<option value="34" selected>Çocuk Giyim</option>';
            ilanAltKategori.innerHTML += '<option value="35" selected>Ayakkabı</option>';
            ilanAltKategori.innerHTML += '<option value="36" selected>Çanta</option>';
            ilanAltKategori.innerHTML += '<option value="37" selected>Saat & Aksesuar</option>';
            break;
        case "4":
            ilanAltKategori.innerHTML += '<option value="38" selected>Bilgisayar/Tablet</option>';
            ilanAltKategori.innerHTML += '<option value="39" selected>Yazıcılar & Projeksiyon</option>';
            ilanAltKategori.innerHTML += '<option value="40" selected>Telefon & Telefon Aksesuarları</option>';
            ilanAltKategori.innerHTML += '<option value="41" selected>TV, Görüntü & Ses Sistemleri</option>';
            ilanAltKategori.innerHTML += '<option value="42" selected>Beyaz Eşya</option>';
            ilanAltKategori.innerHTML += '<option value="43" selected>Klima ve Isıtıcılar</option>';
            ilanAltKategori.innerHTML += '<option value="44" selected>Elektrikli Ev Aletleri</option>';
            ilanAltKategori.innerHTML += '<option value="45" selected>Foto & Kamera</option>';
            ilanAltKategori.innerHTML += '<option value="46" selected>Oyun & Oyun Konsolları</option>';
            break;
        case "5":
            ilanAltKategori.innerHTML += '<option value="47" selected>Sofra & Mutfak</option>';
            ilanAltKategori.innerHTML += '<option value="48" selected>Banyo</option>';
            ilanAltKategori.innerHTML += '<option value="49" selected>Ev Tekstili</option>';
            ilanAltKategori.innerHTML += '<option value="50" selected>Ev Dekorasyon</option>';
            ilanAltKategori.innerHTML += '<option value="51" selected>Mobilya</option>';
            ilanAltKategori.innerHTML += '<option value="52" selected>Aydınlatma</option>';
            ilanAltKategori.innerHTML += '<option value="53" selected>Ev Gereçleri</option>';
            ilanAltKategori.innerHTML += '<option value="54" selected>Hobi Ürünleri</option>';
            ilanAltKategori.innerHTML += '<option value="55" selected>Kırtasiye & Ofis</option>';
            ilanAltKategori.innerHTML += '<option value="56" selected>Yapı Market</option>';
            ilanAltKategori.innerHTML += '<option value="57" selected>Otomobil & Motorsiklet</option>';
            break;
        case "6":
            ilanAltKategori.innerHTML += '<option value="58" selected>Sinema</option>';
            ilanAltKategori.innerHTML += '<option value="59" selected>Tiyatro</option>';
            ilanAltKategori.innerHTML += '<option value="60" selected>Konserler</option>';
            ilanAltKategori.innerHTML += '<option value="61" selected>Müzeler</option>';
            ilanAltKategori.innerHTML += '<option value="62" selected>Eğlence Merkezleri</option>';
            ilanAltKategori.innerHTML += '<option value="63" selected>Oyun Salonları</option>';
            ilanAltKategori.innerHTML += '<option value="64" selected>Sanat Atölyeleri</option>';
            ilanAltKategori.innerHTML += '<option value="65" selected>Gezilecek Yerler</option>';
            break;
        case "7":
            ilanAltKategori.innerHTML += '<option value="66" selected>Online Kurslar</option>';
            ilanAltKategori.innerHTML += '<option value="67" selected>Spor Malzemeleri</option>';
            ilanAltKategori.innerHTML += '<option value="68" selected>Dil Kursları</option>';
            ilanAltKategori.innerHTML += '<option value="69" selected>Kişisel Gelişim Kursları</option>';
            ilanAltKategori.innerHTML += '<option value="70" selected>Spor Salonları</option>';
            ilanAltKategori.innerHTML += '<option value="71" selected>Doğa Sporları</option>';
            ilanAltKategori.innerHTML += '<option value="72" selected>Su Sporları</option>';
            ilanAltKategori.innerHTML += '<option value="73" selected>Yoga</option>';
            ilanAltKategori.innerHTML += '<option value="74" selected>Diğer Sporlar</option>';
            break;
        case "8":
            ilanAltKategori.innerHTML += '<option value="75" selected>Hastaneler</option>';
            ilanAltKategori.innerHTML += '<option value="76" selected>Veterinerler</option>';
            ilanAltKategori.innerHTML += '<option value="77" selected>Psikolog & Ruh Sağlığı</option>';
            ilanAltKategori.innerHTML += '<option value="78" selected>Eczaneler</option>';
            ilanAltKategori.innerHTML += '<option value="79" selected>Hayvan Sağlığı</option>';
            break;
        case "9":
            ilanAltKategori.innerHTML += '<option value="80" selected>Kurye & Nakliyat</option>';
            ilanAltKategori.innerHTML += '<option value="81" selected>Danışmanlık</option>';
            ilanAltKategori.innerHTML += '<option value="82" selected>Emlak</option>';
            ilanAltKategori.innerHTML += '<option value="83" selected>Oto Galeri</option>';
            ilanAltKategori.innerHTML += '<option value="84" selected>Konaklama & Otel</option>';
            ilanAltKategori.innerHTML += '<option value="85" selected>Gezi Turları & Rehberlik</option>';
            break;
        default:
            break;
    }
}

//----------------------------------------------------//

