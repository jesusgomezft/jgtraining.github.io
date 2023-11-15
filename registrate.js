const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});



document.addEventListener("DOMContentLoaded", function () {
	const menuIcon = document.getElementById("menu-icon");
	const nav = document.querySelector("header nav");

	menuIcon.addEventListener("click", function () {
		menuIcon.classList.toggle("active");
		nav.classList.toggle("active");
	});
});