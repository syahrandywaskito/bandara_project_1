setInterval(function(){
  let waktu = new Date();
  let jam = waktu.getHours();
  let menit = waktu.getMinutes();
  let detik = waktu.getSeconds();

  document.getElementById("clock-arrival").innerHTML = jam + " : " + menit + " : " + detik;
  document.getElementById("clock-departure").innerHTML = jam + " : " + menit + " : " + detik;
}, 500);