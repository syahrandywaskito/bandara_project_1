// Fungsi untuk menangani scroll halus dengan penundaan menggunakan jQuery
function smoothScroll(target, duration) {
  $('html, body').animate({
    scrollTop: $(target).offset().top
  }, duration);
}

// Tambahkan penanganan klik pada tautan yang sesuai
const section1Link = $('a[href="#about"]');
section1Link.click(function(e) {
  e.preventDefault();
  smoothScroll('#about', 500); // ID dan durasi scroll
});

const section2Link = $('a[href="#report"]');
section2Link.click(function(e) {
  e.preventDefault();
  smoothScroll('#report', 500); // ID dan durasi scroll
});

const section3Link = $('a[href="#navbar"]');
section3Link.click(function(e) {
  e.preventDefault();
  smoothScroll('#navbar', 500); // ID dan durasi scroll
});