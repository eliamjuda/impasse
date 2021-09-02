document.addEventListener("DOMContentLoaded", (e) => {
	const  
		d = document,
		$loginBox = d.querySelector(".login"),
		$signupBox = d.querySelector(".signUp"),
		$changeLogin = d.querySelector(".changeLogin"),
		$changeSignup = d.querySelector(".changeSignup"),
		$userLogin = d.getElementById('userLogin'),
		$passLogin = d.getElementById('passLogin'),
		$nameSignup = d.getElementById('nameSignup'),
		$userSignup = d.getElementById('userSignup'),
		$passSignup = d.getElementById('passSignup'),
		$btnLogin = d.getElementById('btnLogin'),
		$btnSignup = d.getElementById('btnSignup'),
		$formSignup = d.getElementById('formSignup');


	$changeSignup.addEventListener("click", () => {
		$signupBox.style.display = "none";
		$loginBox.style.display = "block";
	});
	$changeLogin.addEventListener("click", () => {
		$loginBox.style.display = "none";
		$signupBox.style.display = "block";
	});



	document.addEventListener("keyup", (e) => {
		if (e.target.matches(`#${$userSignup.id}`)) {
			validarUser();
		}

		if (e.target.matches(`#${$nameSignup.id}`)) {
			validarName();
		}

		if (e.target.matches(`#${$passSignup.id}`)) {
			validarPass();
		}
	});

	const validarUser = () => {
		
		let regex = new RegExp(/^[a-z\d]+$/i);

		if ($userSignup.value.length < 6 || $userSignup.value.length > 20 ){
	      	$userSignup.classList.add('invalid');
	    	console.log(invalidUser)
	    }else if (!regex.exec($userSignup.value)) {
			$userSignup.classList.add('invalid');
	    	console.log(invalidUser)
	    }else{
	    	$userSignup.classList.remove('invalid');
	    	$userSignup.classList.add('valid');
	    	console.log(invalidUser)
	    }
	}

	const validarName = () => {
		
		let regex = new RegExp($nameSignup.pattern);

		if ($nameSignup.value.length < 8 || $nameSignup.value.length > 25){
	      	$nameSignup.classList.add('invalid');
	    }else if (!regex.exec($nameSignup.value)) {
			$nameSignup.classList.add('invalid');
	    }else{
	    	$nameSignup.classList.remove('invalid');
	    	$nameSignup.classList.add('valid');
	    }
	}

	const validarPass = () => {
		if ($passSignup.value.length < 8){
	      	$passSignup.classList.add('invalid');
	    }else{
	    	$passSignup.classList.remove('invalid');
	    	$passSignup.classList.add('valid');
	    }
	}


});
