import "./bootstrap";

import Toastify from "toastify-js";
import "toastify-js/src/toastify.css";

document.addEventListener("DOMContentLoaded", function () {
    // Menampilkan toast berdasarkan session flash dari Laravel
    const successMessage = document
        .getElementById("toast-message")
        ?.getAttribute("data-message");

    if (successMessage) {
        Toastify({
            text: successMessage,
            duration: 3000,
            close: true,
            gravity: "top",
            position: "right",
            backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
        }).showToast();
    }
});
