const d = document;

export default function Menu(){
	const
		$menu = d.querySelector(".menu"),
		$hamburger = d.querySelector(".hamburger"),
		$hamburgerMenu = d.querySelector(".hamburger-menu");

	let prevScrollpos = window.pageYOffset;


	// -------------------- menuDesktop() -----------------------

	window.onscroll = function() {

		let currentScrollpos = window.pageYOffset;
		if (currentScrollpos === 0) {
			$menu.style.background = "transparent";
		}

		if (currentScrollpos >= 300) {
			$menu.style.background = "#101117"
		}

		if (prevScrollpos > currentScrollpos) {
		    $menu.style.top = "0";

		} else if (prevScrollpos > 500) {
		    $menu.style.top = "-150px";
		}
		
		prevScrollpos = currentScrollpos;

	}

	$hamburger.addEventListener("click", () => {
		$hamburger.classList.toggle("is-active");
		$hamburgerMenu.classList.toggle("active");
	});
}
	