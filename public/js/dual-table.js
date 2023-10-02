 // Mendapatkan elemen tombol dan tabel
 const showNormalTableButton = document.getElementById('showNormalTable');
 const showApiTableButton = document.getElementById('showApiTable');
 const normalTables = document.querySelectorAll('.normal-table');
 const apiTables = document.querySelectorAll('.api-table');
 const tableCaption = document.getElementById('tableCaption');

 // Fungsi untuk menampilkan tabel normal dan menyembunyikan tabel API
 function showNormalTables() {
   normalTables.forEach(table => {
     table.style.display = 'table';
   });
   apiTable.style.display = 'none';
   tableCaption.textContent = 'Jadwal Keberangkatan'
 }

 // Fungsi untuk menampilkan tabel API dan menyembunyikan tabel normal
 function showApiTable() {
   normalTables.forEach(table => {
     table.style.display = 'none';
   });
   apiTable.style.display = 'table';
   tableCaption.textContent = 'Jadwal Penerbangan';
 }

 // Tambahkan event listener pada tombol
 showNormalTableButton.addEventListener('click', showNormalTables);
 showApiTableButton.addEventListener('click', showApiTable);

 // Secara default, tampilkan tabel normal saat halaman dimuat
 showNormalTables();