function favoriEkle(ilanID) {
  // İstek göndererek favoriyi kaydedin
  var request = new XMLHttpRequest();
  request.open("POST", "favoriEkle.php", true);
  request.setRequestHeader("Content-Type", "application/json");
  request.onreadystatechange = function () {
    if (request.readyState === XMLHttpRequest.DONE) {
      if (request.status === 200) {
        // Favori ekleme başarılı oldu, isteğe bağlı olarak geri bildirim sağlayabilirsiniz
        var kalp = document.getElementById("kalp_" + ilanID);
        kalp.classList.toggle("kalp-dolu"); // CSS sınıfını ekleyip çıkar
      } else {
        // Favori ekleme başarısız oldu, isteğe bağlı olarak hata mesajı gösterebilirsiniz
        alert("Favori ekleme başarısız!");
      }
    }
  };
  var data = JSON.stringify({ ilanID: ilanID });
  request.send(data);
}


