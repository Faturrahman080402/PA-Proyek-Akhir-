function validatePassword() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmpassword").value;
    if (password != confirmPassword) {
        alert("Password tidak sesuai");
        return false;
    }
    return true;
}