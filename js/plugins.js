var scrTop = document.getElementById("scrTop");

window.onscroll = function () {
	'use strict';
	
	if(window.pageYOffset >= 100){
		
		scrTop.style.display="block";
	}	
	else{
		scrTop.style.display="none";
	}
};

scrTop.onclick = function () {
		'use strict';
		window.scrollTo({
		top:0,
		left:0,
		behavior:"smooth",
	});
};
