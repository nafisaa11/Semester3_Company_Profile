function handleSubmit(event) {
    event.preventDefault(); // Mencegah reload halaman

    // Menyembunyikan form
    var form = document.getElementById("myForm");
    form.style.display = "none";

    // Menampilkan tanda centang
    var checkmarkContainer = document.getElementById("checkmark-container");
    checkmarkContainer.classList.remove("hidden");

    // Opsional: mengarahkan ke halaman lain atau menampilkan pesan sukses setelah beberapa detik
    setTimeout(function() {
        alert("Form telah berhasil dikirim!");
        // window.location.href = "url-halaman-lain"; // Redirect ke halaman lain
    }, 2000);

    return false;
}
