function validateLogin() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    // Validasi alamat email

    if (email == "") {
        alert("Alamat email harus diisi");
        return false;
    } else if (!email_regex.test(email)) {
        alert("Alamat email tidak valid");
        return false;
    }

    // Validasi kata sandi
    if (password == "") {
        alert("Kata sandi harus diisi");
        return false;
    }

    // Jika semua validasi berhasil, maka submit form ke server
    return true;
}