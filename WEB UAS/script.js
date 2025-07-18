function hitungTotal() {
  const mieSetan = parseInt(document.getElementById('qty_mie_setan').value) || 0;
  const mieIblis = parseInt(document.getElementById('qty_mie_iblis').value) || 0;
  const esGenderuwo = parseInt(document.getElementById('qty_es_genderuwo').value) || 0;

  if (mieSetan < 0 || mieIblis < 0 || esGenderuwo < 0) {
    alert("Jumlah tidak boleh negatif!");
    return;
  }

  const total = mieSetan * 12000 + mieIblis * 13000 + esGenderuwo * 8000;
  document.getElementById('total').textContent = `Rp${total.toLocaleString()}`;
}

document.getElementById("formPesan").addEventListener("submit", function(e) {
  e.preventDefault();
  alert("Pesanan berhasil dikirim! Terima kasih.");
  window.location.href = "hasil.html";
});
