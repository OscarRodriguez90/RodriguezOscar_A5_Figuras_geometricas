// validacion.js

function validarBase() {
    const valor = document.getElementById("base").value.trim();
    const error = document.getElementById("error-base");
    error.textContent = "";

    if (valor === "") {
        error.textContent = "La base es obligatoria.";
    } else if (isNaN(valor)) {
        error.textContent = "Debe ser un número válido.";
    } else if (parseFloat(valor) <= 0) {
        error.textContent = "Debe ser mayor que 0.";
    }
}

function validarAltura() {
    const valor = document.getElementById("altura").value.trim();
    const error = document.getElementById("error-altura");
    error.textContent = "";

    if (valor === "") {
        error.textContent = "La altura es obligatoria.";
    } else if (isNaN(valor)) {
        error.textContent = "Debe ser un número válido.";
    } else if (parseFloat(valor) <= 0) {
        error.textContent = "Debe ser mayor que 0.";
    }
}

function validarLado() {
    const valor = document.getElementById("lado").value.trim();
    const error = document.getElementById("error-lado");
    error.textContent = "";

    if (valor === "") {
        error.textContent = "El lado es obligatorio.";
    } else if (isNaN(valor)) {
        error.textContent = "Debe ser un número válido.";
    } else if (parseFloat(valor) <= 0) {
        error.textContent = "Debe ser mayor que 0.";
    }
}

// Ejemplo adicional (para círculo)
function validarRadio() {
    const valor = document.getElementById("radio").value.trim();
    const error = document.getElementById("error-radio");
    error.textContent = "";

    if (valor === "") {
        error.textContent = "El radio es obligatorio.";
    } else if (isNaN(valor)) {
        error.textContent = "Debe ser un número válido.";
    } else if (parseFloat(valor) <= 0) {
        error.textContent = "Debe ser mayor que 0.";
    }
}
