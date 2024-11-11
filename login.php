<?php
session_start();

// Gantikan dengan validasi username dan password yang sesuai
$correct_username = 'user';
$correct_password = 'password';

if ($_POST['username'] == $correct_username && $_POST['password'] == $correct_password) {
    // Simpan status login dalam sesi
    $_SESSION['loggedin'] = true;
    // Kirim status login ke frontend
    echo "<script>
        localStorage.setItem('loggedIn', 'true');
        window.location.href = 'index.html'; // Arahkan kembali ke halaman utama setelah login
    </script>";
} else {
    echo 'Login gagal. Silakan coba lagi.';
}
?>
