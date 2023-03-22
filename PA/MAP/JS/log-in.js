// Seleksi elemen form
const loginForm = document.querySelector('form');

// Tambahkan event listener pada saat form disubmit
loginForm.addEventListener('submit', function(event) {
    
    // Cegah form untuk langsung mengirim data ke server
    event.preventDefault();

    // Seleksi elemen input username dan password
    const usernameInput = loginForm.querySelector('input[type="email"]');
    const passwordInput = loginForm.querySelector('input[type="password"]');

    // Seleksi elemen pesan error
    const errorText = loginForm.querySelector('.error-text');

    // Validasi input username dan password
    if (usernameInput.value === '' || passwordInput.value === '') {

        // Tampilkan pesan error jika input kosong
        errorText.textContent = 'Please fill in all fields.';
    } else {

        // Submit form jika input sudah valid
        loginForm.submit();
    }
});
