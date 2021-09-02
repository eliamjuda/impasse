$(document).ready(function(){


// -------------------------------------------------------------------------
	var item = 0;
	var left = document.querySelector("#anterior");
	var right = document.querySelector("#siguiente");

	left.addEventListener("click",()=>{changeItem(1)});
	right.addEventListener("click",()=>{changeItem(3)});


	function changeItem(n){
    	if (n == 1) {
      		if (item == 0) {

        		item = 6;

       		} else {

        		item--
        	}
    	} else {
        	if (item == 6) {
        		item = 0;
        	} else {
        		item++
        	}
    	}
    	for (let i = 0; i < document.querySelectorAll(".caja-de-info").length; i++) {
    	document.querySelectorAll(".caja-de-info")[i].style.display = "none";
    	}
    	document.querySelectorAll(".caja-de-info")[item].style.display = "block";
	}

// -------------------------------------------------------------------------

	var left2 = document.querySelector("#anterior2");
	var right2 = document.querySelector("#siguiente2");

	left2.addEventListener("click",()=>{changeItem2(1)});
	right2.addEventListener("click",()=>{changeItem2(3)});


	function changeItem2(n){
    	if (n == 1) {
      		if (item == 0) {

        		item = 10;

       		} else {

        		item--
        	}
    	} else {
        	if (item == 10) {
        		item = 0;
        	} else {
        		item++
        	}
    	}
    	for (let i = 0; i < document.querySelectorAll(".caja-de-info2").length; i++) {
    	document.querySelectorAll(".caja-de-info2")[i].style.display = "none";
    	}
    	document.querySelectorAll(".caja-de-info2")[item].style.display = "block";
	}

// -------------------------------------------------------------------------
    

    var left3 = document.querySelector("#anterior3");
    var right3 = document.querySelector("#siguiente3");

    left3.addEventListener("click",()=>{changeItem3(1)});
    right3.addEventListener("click",()=>{changeItem3(3)});


    function changeItem3(n){
        if (n == 1) {
            if (item == 0) {

                item = 4;

            } else {

                item--
            }
        } else {
            if (item == 4) {
                item = 0;
            } else {
                item++
            }
        }
        for (let i = 0; i < document.querySelectorAll(".caja-de-info3").length; i++) {
        document.querySelectorAll(".caja-de-info3")[i].style.display = "none";
        }
        document.querySelectorAll(".caja-de-info3")[item].style.display = "block";
    }


// -------------------------------------------------------------------------
	var left4 = document.querySelector("#anterior4");
	var right4 = document.querySelector("#siguiente4");

	left4.addEventListener("click",()=>{changeItem4(1)});
	right4.addEventListener("click",()=>{changeItem4(3)});


	function changeItem4(n){
    	if (n == 1) {
      		if (item == 0) {

        		item = 4;

       		} else {

        		item--
        	}
    	} else {
        	if (item == 4) {
        		item = 0;
        	} else {
        		item++
        	}
    	}
    for (let i = 0; i < document.querySelectorAll(".caja-de-info4").length; i++) {
    	document.querySelectorAll(".caja-de-info4")[i].style.display = "none";
    }
    document.querySelectorAll(".caja-de-info4")[item].style.display = "block";
	}

});