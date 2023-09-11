function hideAlert() {

  // Cari elemen alert berdasarkan ID
  var alertElement = document.getElementById("alert-box");

  // Jika elemen alert ditemukan
  if (alertElement) {
    // Tampilkan alert
    alertElement.style.display = "block";

    // Setelah 3 detik, hilangkan alert
    setTimeout(function() {
      alertElement.style.display = "none";
    }, 3000); // 3000 milidetik (3 detik)
  }
}

hideAlert();