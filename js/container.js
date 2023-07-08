///KATEGORİLER///

function showPopupKategori(popupID) {
  var popup = document.getElementById(popupID);
  popup.style.display = "block";
}

function hidePopupKategori() {
  var popups = document.getElementsByClassName("popupKategori");
  for (var i = 0; i < popups.length; i++) {
    popups[i].style.display = "none";
  }
}

/*HESAP MENÜLERİ*/

function toggleKullaniciMenu() {
  var hesapMenu = document.querySelector('.hesap-menu');
  hesapMenu.style.display = hesapMenu.style.display === 'block' ? 'none' : 'block';
}

function toggleHesapMenu() {
  var hesapMenu1 = document.querySelector('.hesap-menu1');
  hesapMenu1.style.display = hesapMenu1.style.display === 'block' ? 'none' : 'block';
}

/*HESAP MENÜLERİ RES*/

function toggleKullaniciMenuRes() {
  var hesapMenu3 = document.querySelector('.hesap-menuRes');
  hesapMenu3.style.display = hesapMenu3.style.display === 'block' ? 'none' : 'block';
}

function toggleHesapMenuRes() {
  var hesapMenu4 = document.querySelector('.hesap-menu1Res');
  hesapMenu4.style.display = hesapMenu4.style.display === 'block' ? 'none' : 'block';
}



/*KATEGORİ VE ÜRÜN TIKLAMALARI*/

/*kategori click $kategori dğeişken atama*/
function setKategoriID(kategoriID) {
  window.location.href = 'kampanyalar.php?kategoriID=' + kategoriID;
}

function setAltKategoriID(altKategoriID) {
  window.location.href = 'kampanyalar.php?altKategoriID=' + altKategoriID;
}

function kampanyaDetay(ilanID) {
  window.location.href = 'kampanyaGosterim.php?ilanID=' + ilanID;
}




/*max480responsive*/
function toggleMenu() {
  var menu480 = document.querySelector('.menu480');
  menu480.classList.toggle('active');
}


function toggleAltMenu(menu) {
  const altMenu = menu.querySelector('.altMenuListesi');
  altMenu.classList.toggle('goster'); // altMenuListesi sınıfını ekleyip kaldırarak açılıp kapanmasını sağlar
}
