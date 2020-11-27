document.addEventListener("DOMContentLoaded", function () {
	subirArchivo();

	const formulario = document.querySelector("#formulario-crear-proyecto");

	formulario.addEventListener("submit", function (e) {
		const inputsAvalidar = e.target.getElementsByClassName("validarInput");
		if (!existeValores(inputsAvalidar)) {
			e.preventDefault();
		}
	});
});

function subirArchivo() {
	const inputFile = document.querySelector(
		"#formulario-crear-proyecto #imagen_pro",
	);
	const label = document.querySelector(
		"#formulario-crear-proyecto #imagen_pro_label",
	);
	const img_prev = document.querySelectorAll(".imagenesPresubida");

	console.log(img_prev);
	inputFile.addEventListener("change", function () {
		const file = inputFile.files[0];
		label.textContent = file.name;
		const objUrl = URL.createObjectURL(file);
		img_prev.forEach((element) => {
			element.src = objUrl;
		});
	});
}
