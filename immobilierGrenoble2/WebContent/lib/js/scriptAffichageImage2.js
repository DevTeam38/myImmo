// Photo exterieur 1 ----------------------------------------------

oFReader = new FileReader(), rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;

oFReader.onload = function (oFREvent) {
  var preview = document.getElementById("uploadPreview");
  preview.src = oFREvent.target.result;
  preview.style.display = 'block';
};

function loadImageFile() {
  if (document.getElementById("uploadImage").files.length === 0) { return; }
  var oFile = document.getElementById("uploadImage").files[0];
  if (!rFilter.test(oFile.type)) { alert("You must select a valid image file!"); return; }
  oFReader.readAsDataURL(oFile);
}
function supprImage(){
	  var preview = document.getElementById("uploadPreview");
	  preview.src = "";
	  preview.style.display = 'none';
}

// Photo exterieur 2 ----------------------------------------------

oFReader2 = new FileReader(), rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;

oFReader2.onload = function (oFREvent) {
	  var preview = document.getElementById("uploadPreview2");
	  preview.src = oFREvent.target.result;
	  preview.style.display = 'block';
	};

function loadImageFile2() {
  if (document.getElementById("uploadImage2").files.length === 0) { return; }
  var oFile = document.getElementById("uploadImage2").files[0];
  if (!rFilter.test(oFile.type)) { alert("You must select a valid image file!"); return; }
  oFReader2.readAsDataURL(oFile);
}
function supprImage2(){
	  var preview = document.getElementById("uploadPreview2");
	  preview.src = "";
	  preview.style.display = 'none';	}

//Photo exterieur 3 ----------------------------------------------

oFReader3 = new FileReader(), rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;

oFReader3.onload = function (oFREvent) {
	  var preview = document.getElementById("uploadPreview3");
	  preview.src = oFREvent.target.result;
	  preview.style.display = 'block';
	};

function loadImageFile3() {
  if (document.getElementById("uploadImage3").files.length === 0) { return; }
  var oFile = document.getElementById("uploadImage3").files[0];
  if (!rFilter.test(oFile.type)) { alert("You must select a valid image file!"); return; }
  oFReader3.readAsDataURL(oFile);
}
function supprImage3(){
	  var preview = document.getElementById("uploadPreview3");
	  preview.src = "";
	  preview.style.display = 'none';	}

//Photo exterieur 4 ----------------------------------------------

oFReader4 = new FileReader(), rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;

oFReader4.onload = function (oFREvent) {
  var preview = document.getElementById("uploadPreview4");
  preview.src = oFREvent.target.result;
  preview.style.display = 'block';
};

function loadImageFile4() {
  if (document.getElementById("uploadImage4").files.length === 0) { return; }
  var oFile = document.getElementById("uploadImage4").files[0];
  if (!rFilter.test(oFile.type)) { alert("You must select a valid image file!"); return; }
  oFReader4.readAsDataURL(oFile);
}
function supprImage4(){
	  var preview = document.getElementById("uploadPreview4");
	  preview.src = "";
	  preview.style.display = 'none';
}

// Photo exterieur 5 ----------------------------------------------

oFReader5 = new FileReader(), rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;

oFReader5.onload = function (oFREvent) {
	  var preview = document.getElementById("uploadPreview5");
	  preview.src = oFREvent.target.result;
	  preview.style.display = 'block';
	};

function loadImageFile5() {
  if (document.getElementById("uploadImage5").files.length === 0) { return; }
  var oFile = document.getElementById("uploadImage5").files[0];
  if (!rFilter.test(oFile.type)) { alert("You must select a valid image file!"); return; }
  oFReader5.readAsDataURL(oFile);
}
function supprImage5(){
	  var preview = document.getElementById("uploadPreview5");
	  preview.src = "";
	  preview.style.display = 'none';	}

//Photo exterieur 6 ----------------------------------------------

oFReader6 = new FileReader(), rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;

oFReader6.onload = function (oFREvent) {
	  var preview = document.getElementById("uploadPreview6");
	  preview.src = oFREvent.target.result;
	  preview.style.display = 'block';
	};

function loadImageFile6() {
  if (document.getElementById("uploadImage6").files.length === 0) { return; }
  var oFile = document.getElementById("uploadImage6").files[0];
  if (!rFilter.test(oFile.type)) { alert("You must select a valid image file!"); return; }
  oFReader6.readAsDataURL(oFile);
}
function supprImage6(){
	  var preview = document.getElementById("uploadPreview6");
	  preview.src = "";
	  preview.style.display = 'none';	}

//Photo exterieur 7 ----------------------------------------------

oFReader7 = new FileReader(), rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;

oFReader7.onload = function (oFREvent) {
  var preview = document.getElementById("uploadPreview7");
  preview.src = oFREvent.target.result;
  preview.style.display = 'block';
};

function loadImageFile7() {
  if (document.getElementById("uploadImage7").files.length === 0) { return; }
  var oFile = document.getElementById("uploadImage7").files[0];
  if (!rFilter.test(oFile.type)) { alert("You must select a valid image file!"); return; }
  oFReader7.readAsDataURL(oFile);
}
function supprImage7(){
	  var preview = document.getElementById("uploadPreview7");
	  preview.src = "";
	  preview.style.display = 'none';
}

// Photo exterieur 8 ----------------------------------------------

oFReader8 = new FileReader(), rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;

oFReader8.onload = function (oFREvent) {
	  var preview = document.getElementById("uploadPreview8");
	  preview.src = oFREvent.target.result;
	  preview.style.display = 'block';
	};

function loadImageFile8() {
  if (document.getElementById("uploadImage8").files.length === 0) { return; }
  var oFile = document.getElementById("uploadImage8").files[0];
  if (!rFilter.test(oFile.type)) { alert("You must select a valid image file!"); return; }
  oFReader8.readAsDataURL(oFile);
}
function supprImage8(){
	  var preview = document.getElementById("uploadPreview8");
	  preview.src = "";
	  preview.style.display = 'none';	}

//Photo exterieur 9 ----------------------------------------------

oFReader9 = new FileReader(), rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;

oFReader9.onload = function (oFREvent) {
	  var preview = document.getElementById("uploadPreview9");
	  preview.src = oFREvent.target.result;
	  preview.style.display = 'block';
	};

function loadImageFile9() {
  if (document.getElementById("uploadImage9").files.length === 0) { return; }
  var oFile = document.getElementById("uploadImage9").files[0];
  if (!rFilter.test(oFile.type)) { alert("You must select a valid image file!"); return; }
  oFReader9.readAsDataURL(oFile);
}
function supprImage9(){
	  var preview = document.getElementById("uploadPreview9");
	  preview.src = "";
	  preview.style.display = 'none';	}


//Photo exterieur 10 ----------------------------------------------

oFReader10 = new FileReader(), rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;

oFReader10.onload = function (oFREvent) {
  var preview = document.getElementById("uploadPreview10");
  preview.src = oFREvent.target.result;
  preview.style.display = 'block';
};

function loadImageFile10() {
  if (document.getElementById("uploadImage10").files.length === 0) { return; }
  var oFile = document.getElementById("uploadImage10").files[0];
  if (!rFilter.test(oFile.type)) { alert("You must select a valid image file!"); return; }
  oFReader10.readAsDataURL(oFile);
}
function supprImage10(){
	  var preview = document.getElementById("uploadPreview10");
	  preview.src = "";
	  preview.style.display = 'none';
}

// Photo exterieur 11 ----------------------------------------------

oFReader11 = new FileReader(), rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;

oFReader11.onload = function (oFREvent) {
	  var preview = document.getElementById("uploadPreview11");
	  preview.src = oFREvent.target.result;
	  preview.style.display = 'block';
	};

function loadImageFile11() {
  if (document.getElementById("uploadImage11").files.length === 0) { return; }
  var oFile = document.getElementById("uploadImage11").files[0];
  if (!rFilter.test(oFile.type)) { alert("You must select a valid image file!"); return; }
  oFReader11.readAsDataURL(oFile);
}
function supprImage11(){
	  var preview = document.getElementById("uploadPreview11");
	  preview.src = "";
	  preview.style.display = 'none';	}

//Photo exterieur 12 ----------------------------------------------

oFReader12 = new FileReader(), rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;

oFReader12.onload = function (oFREvent) {
	  var preview = document.getElementById("uploadPreview12");
	  preview.src = oFREvent.target.result;
	  preview.style.display = 'block';
	};

function loadImageFile12() {
  if (document.getElementById("uploadImage12").files.length === 0) { return; }
  var oFile = document.getElementById("uploadImage12").files[0];
  if (!rFilter.test(oFile.type)) { alert("You must select a valid image file!"); return; }
  oFReader12.readAsDataURL(oFile);
}
function supprImage12(){
	  var preview = document.getElementById("uploadPreview12");
	  preview.src = "";
	  preview.style.display = 'none';	}
