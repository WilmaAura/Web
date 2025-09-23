// Event tombol "Klik Saya"
document.getElementById("helloBtn").addEventListener("click", function () {
  alert("Halo, Morn litoralis!");
});

//Event tombol "Submit"
document.getElementById("submitBtn").addEventListener("click", function () {
  let text = document.getElementById("userInput").value;

  if (text.trim() === "") {
    alert("Input tidak boleh kosong!");
  } else {
    document.getElementById("output").textContent = "Kamu menulis:" + text;
  }
});
