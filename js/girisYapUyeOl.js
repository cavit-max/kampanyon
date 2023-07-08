function girisYapGoster() {
    var girisYap = document.querySelector('.girisYap');
    var uyeOl = document.querySelector('.uyeOl');
    var girisUyeClick = document.getElementById('girisUyeClick');
    var uyeOlClick = document.getElementById('uyeOlClick');
    
    if (girisYap.style.display === 'none') {
        girisYap.style.display = 'block';
        uyeOl.style.display = 'none';
        girisUyeClick.style.backgroundColor = '#428bca';
        uyeOlClick.style.backgroundColor = 'white';
    } else {
        girisYap.style.display = 'none';
        girisUyeClick.style.backgroundColor = 'white';
    }
}

function uyeOlGoster() {
    var girisYap = document.querySelector('.girisYap');
    var uyeOl = document.querySelector('.uyeOl');
    var girisUyeClick = document.getElementById('girisUyeClick');
    var uyeOlClick = document.getElementById('uyeOlClick');
    
    if (uyeOl.style.display === 'none') {
        uyeOl.style.display = 'block';
        girisYap.style.display = 'none';
        uyeOlClick.style.backgroundColor = '#428bca';
        girisUyeClick.style.backgroundColor = 'white';
    } else {
        uyeOl.style.display = 'none';
        uyeOlClick.style.backgroundColor = 'white';
    }
}

// Sayfa yüklendiğinde girisYapGoster fonksiyonunu çağır
window.onload = uyeOlGoster;