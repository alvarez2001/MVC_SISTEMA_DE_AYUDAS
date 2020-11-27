document.addEventListener("DOMContentLoaded", function () {
	const btn = document.querySelector("#menu-btn");
	const menu = document.querySelector("#sidemenu");

	btn.addEventListener("click", function () {
		menu.classList.toggle("menu-expanded");
		menu.classList.toggle("menu-collapsed");

		//document
		//	.querySelector("#header-sitio")
		//	.classList.toggle("header-collapsed");
	});
});

function existeValores(valor = []) {
	for (let i = 0; i < valor.length; i++) {
		const element = valor[i];
		if (!element.value || element.value === "") {
			return false;
		}
	}
	return true;
}
