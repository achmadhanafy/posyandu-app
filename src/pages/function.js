

const BASE_URL = 'http://localhost:8080/posyandu-app/';

// Global Function
function navigatePendaftaranIbuHamil(){
  document.location.href = `${BASE_URL}public/pendaftaran/ibuhamil`;
}

function navigatePendaftaranBalita(){
  document.location.href = `${BASE_URL}public/pendaftaran/balita`;
}

function navigatePelayananBalita(){
  document.location.href = `${BASE_URL}public/pelayanan/balita`;
}

function navigatePelayananIbuHamil(){
  document.location.href = `${BASE_URL}public/pelayanan/ibuhamil`;
}

function navigateLogin(props) {
 console.log(props)
  document.location.href = `${BASE_URL}public/landing/login${props?.registered ? '/registered' : '' }`;
}

function navigatePengkinianIbuHamil(){
  document.location.href = `${BASE_URL}public/pengkinian/ibuhamil`;
}

function navigatePengkinianBalita(){
  document.location.href = `${BASE_URL}public/pengkinian/balita`;
}

function navigateLaporanBalita(){
  document.location.href = `${BASE_URL}public/laporan/dataBalita`;
}

function navigateLaporanIbuHamil(){
  document.location.href = `${BASE_URL}public/laporan/dataIbuHamil`;
}

function navigateLaporanPelayananBalita(){
  document.location.href = `${BASE_URL}public/laporan/dataPelayananBalita`;
}

function navigateLaporanPelayananIbuHamil(){
  document.location.href = `${BASE_URL}public/laporan/dataPelayananIbuHamil`;
}

function navigateLaporanImunisasi(){
  document.location.href = `${BASE_URL}public/laporan/dataImunisasi`;
}



