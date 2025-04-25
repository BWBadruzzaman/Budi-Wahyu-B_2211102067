// Deklarasi Variabel
var nama = "Febrilia"; // Global scope
let umur = 21;          // Block scope
const kota = "Purwokerto"; // Tidak dapat diubah

// Percabangan
if (umur > 18) {
    console.log("Dewasa");
}else {
    console.log("Anak-anak");
}

// Perulangan
for (let i = 0; i < 5; i++) {
    console.log(i);
}

let j = 0;
while (j < 5) {
    console.log(j);
    j++;
}

// Fungsi
function sapa(nama) {
    return "Halo, " + nama;
  }
   
  console.log(sapa("Febrilia"));

// Seleksi Elemen
$(document).ready(function() {
    $("#judul").text("Belajar jQuery");
    $(".paragraf").css("color", "blue");
});

//Event Handling dengan jQuery
$(document).ready(function() {
    $("#tombol").click(function() {
      alert("Tombol diklik!");
    });
});

// Efek Animasi dengan jQuery
$("#kotak").fadeOut(); // Menghilangkan elemen dengan efek fade out
$("#kotak").fadeIn();  // Menampilkan elemen dengan efek fade in

// Efek Toggle dengan jQuery
// Slide Toggle
$("#toggleButton").click(function() {
    $("#panel").slideToggle();
});

// Fade Toggle
$("#fadeButton").click(function() {
    $("#box").fadeToggle();
});

// AJAX dengan JQuery
$.get("https://jsonplaceholder.typicode.com/posts", function(data) {
    console.log(data);
  });

// Fetch API dengan Async/Await
async function getData() {
    let response = await fetch("https://jsonplaceholder.typicode.com/posts");
    let data = await response.json();
    console.log(data);
}
  getData();

// Menggunakan Fetch API untuk Mengirim Data
async function kirimData() {
    let response = await fetch("https://jsonplaceholder.typicode.com/posts", {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify({
        title: "Belajar JavaScript",
        body: "Ini contoh pengiriman data",
        userId: 1
      })
    });
   
    let data = await response.json();
    console.log(data);
}   
kirimData();