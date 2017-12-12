'use strict'
function afficherMdp(fieldId) {
   var field = document.getElementById(fieldId);
   field.type = (field.type == "password") ? "text" : "password"; 
}

function changeClick(valeurId){
	
	var divs = document.getElementById(valeurId);
	
    if (divs.style.visibility == 'hidden' || divs.style.visibility=="")
    {
    	divs.style.opacity = "1";
    	divs.style.visibility = 'visible';
    }
    else                                     
    {
    	divs.style.opacity = "0";
    	divs.style.visibility = 'hidden';
    }
}