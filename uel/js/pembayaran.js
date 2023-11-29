document.querySelector("form").addEventListener("submit", function (event) {
  let isValid = true;

  if (namaLengkapInput.value.trim() === "") {
    isValid = false;
    alert("Nama Lengkap tidak boleh kosong");
  }

  if (emailInput.value.trim() === "" || !validateEmail(emailInput.value)) {
    isValid = false;
    alert("Email tidak valid");
  }

  if (
    noTeleponInput.value.trim() === "" ||
    !validatePhoneNumber(noTeleponInput.value)
  ) {
    isValid = false;
    alert("No Telepon tidak valid");
  }

  if (namaKartuInput.value.trim() === "") {
    isValid = false;
    alert("Nama di Kartu tidak boleh kosong");
  }

  if (
    nomorRekeningInput.value.trim() === "" ||
    !validateCardNumber(nomorRekeningInput.value)
  ) {
    isValid = false;
    alert("Nomor Rekening tidak valid");
  }

  if (tipeRuanganInput.value === "") {
    isValid = false;
    alert("Silakan pilih Tipe Ruangan");
  }

  if (isValid) {
  } else {
    alert("Silakan isi formulir dengan benar sebelum melanjutkan.");
  }
});

function validateEmail(email) {
  const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  return emailRegex.test(email);
}

function validatePhoneNumber(phoneNumber) {
  const phoneRegex = /^\d{10,14}$/;
  return phoneRegex.test(phoneNumber);
}

function validateCardNumber(cardNumber) {
  const cardNumberRegex = /^\d{16}$/;
  return cardNumberRegex.test(cardNumber);
}
