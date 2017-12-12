
var imagediaporama = 0;	

function changerImage(){

imagediaporama++;
document.getElementById('img1').style.backgroundImage = 'url("lib/images/img'+imagediaporama+'.jpg" )';
document.getElementById('img1NoVisible').style.backgroundColor = "rgba(255,255,255,0)";

 if (imagediaporama > 2 ) {
 	imagediaporama = 0;
 }
 setTimeout("fondue()", 14600)
 setTimeout("changerImage()", 14600)
}


function fondue(){
document.getElementById('img1NoVisible').style.backgroundColor = "rgba(255,255,255,1)";
}
