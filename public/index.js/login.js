
function togglePasswordVisibility() {
    let passwordField = document.getElementById("password");
    let toggleButton = document.querySelector(".toggle-password i");

    if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleButton.classList.remove("bx-hide");
        toggleButton.classList.add("bx-show");
    } else {
        passwordField.type = "password";
        toggleButton.classList.remove("bx-show");
        toggleButton.classList.add("bx-hide");
    }
}
