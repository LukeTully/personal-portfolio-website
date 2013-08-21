addMenuButton();

function addMenuButton() {
	// Menu Button
	var menuButton = document.body.querySelector(".header-link");
	// Menu Container
	var menuContainer = document.body.querySelector(".nav.main.external");
	// Toggle Menu Button text
	var menuExp = "close";
	var menuOG = "menu";
	var initialMenuHeight = window.getComputedStyle(menuContainer, null).getPropertyValue("height");
	var initialMenuPadding = window.getComputedStyle(menuContainer, null).getPropertyValue("padding");

	if (window.getComputedStyle(menuContainer, null).getPropertyValue("border-bottom-width") == "1px" && window.getComputedStyle(menuContainer, null).getPropertyValue("display") != "table") {
	menuContainer.style.padding = "0";
		menuContainer.style.height = "0";
		menuButton.style.display = "block";
		
	}
	menuButton.onclick = function() {
		menuContainer.classList.toggle("expanded");
		menuContainer.style.height = initialMenuHeight;
		menuContainer.style.padding = initialMenuPadding;
		menuButton.classList.toggle("expanded");
		if (menuButton.classList.contains("expanded")) {
			menuButton.innerText = menuExp;
		} else {
			menuButton.innerText = menuOG;
			menuContainer.style.height = "0";
			menuContainer.style.padding = "0";
		}
	};
}