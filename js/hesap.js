$(document).ready(function () {
  $("#hesapBilgiClick").click(function () {
    $("#favorilerim").hide(); // favorilerim div'ini gizle
    $("#hesapBilgilerim").show(); // hesapBilgilerim div'ini aç/kapat
  });

  $("#favorilerimClick").click(function () {
    $("#hesapBilgilerim").hide(); // hesapBilgilerim div'ini gizle
    $("#favorilerim").show(); // favorilerim div'ini aç/kapat
  });
});


$(document).ready(function () {
  $("#hesapBilgiClick2").click(function () {
    $("#favorilerim").hide(); // favorilerim div'ini gizle
    $("#hesapBilgilerim").show(); // hesapBilgilerim div'ini aç/kapat
  });

  $("#favorilerimClick2").click(function () {
    $("#hesapBilgilerim").hide(); // hesapBilgilerim div'ini gizle
    $("#favorilerim").show(); // favorilerim div'ini aç/kapat
  });
});


/*---------------------------------PP DEĞİİŞİM---------------------------------------*/
function selectFile() {
  var fileInput = document.getElementById("fileInput");
  fileInput.click();
}

// Dosya seçildiğinde tetiklenecek olay
document.getElementById("fileInput").addEventListener("change", function (event) {
  var file = event.target.files[0];
  if (file) {
    var reader = new FileReader();
    reader.onload = function (e) {
      var fileData = e.target.result;
      saveFile(file, fileData);
    };
    reader.readAsDataURL(file);
  }
});

function saveFile(file, fileData) {
  var formData = new FormData();
  formData.append("file", file);

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "isletmeHesap.php", true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        console.log(xhr.responseText);
        // Kaydetme işlemi başarılı oldu
      } else {
        console.error(xhr.status);
        // Kaydetme işlemi sırasında hata oluştu
      }
    }
  };

  xhr.send(formData);
}

/*------------------------------------------------------------------------------------*/