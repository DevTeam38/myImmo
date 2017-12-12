<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="lib/css/cssMenu5.css" rel="stylesheet" type="text/css" />
<link href="lib/css/cssLogin3.css" rel="stylesheet" type="text/css" />
<link href="lib/css/cssAjouterAnnonce.css" rel="stylesheet" type="text/css" />
<title>Ajout Annonce</title>
</head>
<body onload="changerImage()">
	<header>
		<div id="img1">
		<div id="img1NoVisible">
			<?php include ("includes/menu.php"); ?>		
			
			
			
			
		<div id="section">
			<form id="formInscription">
				<label id="labelInscription">Ajouter une annonce</label>
				<div class="checkBox"> 
					 <input class="checkBox" id="checkbox1" type="radio" name="civi" value="Mme" /><div id="labelMadame">Madame</div>
		  			 <input class="checkBox" id="checkbox2" type="radio" name="civi" value="Mr" /><div id="labelMonsieur">Monsieur</div>
		  		</div>
		  		<div id="userName"><div id="iconeCompteUser3"><div id="corp3"></div><div id="tete3"></div></div><input id="nom" onblur="verifPseudo(this)" type="text" name="nom" placeholder="Nom" maxlength="20" />
		  						   <input id="prenom" onblur="verifPseudo(this)" type="text" name="nom" placeholder="Prenom" maxlength="20" /></div>
				<div id="userEmail"><div id="iconeUserEmail">@</div><input id="email" type="email" onblur="verifMail(this)" placeholder="Email" name="email"/>
									<input id="confirmerEmail" onblur="verifMail(this)" type="email" placeholder="Confirmer email" name="email"/></div>
				<div id="userAdressAndCode"><div class="userAdress"><div class="iconeEnveloppe2"><div id="rectangleEnveloppe2"></div><div id="traitEnveloppe2"></div><div id="trait2Enveloppe2"></div></div><input id="adresse" onblur="verifAdresse(this)" type="text" name="Adresse" placeholder="Adresse"/>
									<input id="ville" onblur="verifPseudo(this)" type="text" name="Ville" placeholder="Ville"/></div>
				<div class="userAdress"><input id="codePostal" onblur="codePostalValide(this)" type="text" name="Adresse" placeholder="Code postal"/></div></div>
				<div id="userPhone"><div class="iconeTelephone2"><div id="rectangle2"></div><div id="demiCercleHaut2"></div><div id="demiCercleBas2"></div></div><input id="telephone1" type="tel" name="Telephone" placeholder="Telephone 1"/>
									<input id="telephone2" type="tel" name="Telephone" placeholder="Telephone 2"/></div>
				<div class="checkBoxTypeBien"> 
					 <input class="checkBoxTypeBien" id="checkbox3" type="radio" name="typeBien" value="Maison" /><div id="labelMaison">Maison</div>
		  			 <input class="checkBoxTypeBien" id="checkbox4" type="radio" name="typeBien" value="Appartement" /><div id="labelAppartement">Appartement</div>
		  		</div>
				<div id="surfaceAppart"><input id="surface" type="number" name="Surface" placeholder="Surface"/> m²<input id="prix" type="number" placeholder="Prix"  name="prix"/> €</div>
				
<!-- 				<div id="polaroid"> -->
<!-- 			   		<div class="labelEtCroix"> -->
<!-- 			   			<div class="labelEtCroix" id="labelLogo">Photo 1</div> -->
<!--  			   			<input type="button" class="labelEtCroix" id="cross" onclick="supprImage();" value="x">  -->
<!-- 			   		</div> -->
<!-- 			     	<img id="logoPhoto" src="lib/icones/photo.png"> -->
<!-- 			    	<input id="uploadImage" type="file" name="myPhoto" onchange="loadImageFile('uploadImage');" accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp"> -->
<!-- 			    	<img id="uploadPreview" src="" alt=""> -->
<!-- 				</div> -->
			
			<div id="photoRow1">
				<div id="ajoutImage">
					<div id="labelEtCroix"> 
			   			<div id="labelPhoto">Photo 1</div>
				   		<input id="croix" type="button" onclick="supprImage();" value="x"/> 
					</div>
				<img id="photoDeBase" src="lib/icones/photo.png"/>
				<input id="uploadImage" type="file" name="myPhoto" onchange="loadImageFile('uploadImage');" accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp"/> 
				<img id="uploadPreview" src="" alt=""/>
				</div>
				
				<div id="ajoutImage2">
					<div id="labelEtCroix2"> 
			   			<div id="labelPhoto2">Photo 2</div>
				   		<input id="croix2" type="button" onclick="supprImage2();" value="x"/> 
					</div>
				<img id="photoDeBase2" src="lib/icones/photo.png"/>
				<input id="uploadImage2" type="file" name="myPhoto" onchange="loadImageFile2('uploadImage');" accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp"/> 
				<img id="uploadPreview2" src="" alt=""/>
				</div>
				
				<div id="ajoutImage3">
					<div id="labelEtCroix3"> 
			   			<div id="labelPhoto3">Photo 3</div>
				   		<input id="croix3" type="button" onclick="supprImage3();" value="x"/> 
					</div>
				<img id="photoDeBase3" src="lib/icones/photo.png"/>
				<input id="uploadImage3" type="file" name="myPhoto" onchange="loadImageFile3('uploadImage');" accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp"/> 
				<img id="uploadPreview3" src="" alt=""/>
				</div>
			</div>




			<div id="photoRow2">
				<div id="ajoutImage4">
					<div id="labelEtCroix4"> 
			   			<div id="labelPhoto4">Photo 4</div>
				   		<input id="croix4" type="button" onclick="supprImage4();" value="x"/> 
					</div>
				<img id="photoDeBase4" src="lib/icones/photo.png"/>
				<input id="uploadImage4" type="file" name="myPhoto" onchange="loadImageFile4('uploadImage');" accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp"/> 
				<img id="uploadPreview4" src="" alt=""/>
				</div>
				
				<div id="ajoutImage5">
					<div id="labelEtCroix5"> 
			   			<div id="labelPhoto5">Photo 5</div>
				   		<input id="croix5" type="button" onclick="supprImage5();" value="x"/> 
					</div>
				<img id="photoDeBase5" src="lib/icones/photo.png"/>
				<input id="uploadImage5" type="file" name="myPhoto" onchange="loadImageFile5('uploadImage');" accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp"/> 
				<img id="uploadPreview5" src="" alt=""/>
				</div>
				
				<div id="ajoutImage6">
					<div id="labelEtCroix6"> 
			   			<div id="labelPhoto6">Photo 6</div>
				   		<input id="croix6" type="button" onclick="supprImage6();" value="x"/> 
					</div>
				<img id="photoDeBase6" src="lib/icones/photo.png"/>
				<input id="uploadImage6" type="file" name="myPhoto" onchange="loadImageFile6('uploadImage');" accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp"/> 
				<img id="uploadPreview6" src="" alt=""/>
				</div>
			</div>
			
			
			<div id="photoRow3">
				<div id="ajoutImage7">
					<div id="labelEtCroix7"> 
			   			<div id="labelPhoto7">Photo 7</div>
				   		<input id="croix7" type="button" onclick="supprImage7();" value="x"/> 
					</div>
				<img id="photoDeBase7" src="lib/icones/photo.png"/>
				<input id="uploadImage7" type="file" name="myPhoto" onchange="loadImageFile7('uploadImage');" accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp"/> 
				<img id="uploadPreview7" src="" alt=""/>
				</div>
				
				<div id="ajoutImage8">
					<div id="labelEtCroix8"> 
			   			<div id="labelPhoto8">Photo 8</div>
				   		<input id="croix8" type="button" onclick="supprImage8();" value="x"/> 
					</div>
				<img id="photoDeBase8" src="lib/icones/photo.png"/>
				<input id="uploadImage8" type="file" name="myPhoto" onchange="loadImageFile8('uploadImage');" accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp"/> 
				<img id="uploadPreview8" src="" alt=""/>
				</div>
				
				<div id="ajoutImage9">
					<div id="labelEtCroix9"> 
			   			<div id="labelPhoto9">Photo 9</div>
				   		<input id="croix9" type="button" onclick="supprImage9();" value="x"/> 
					</div>
				<img id="photoDeBase9" src="lib/icones/photo.png"/>
				<input id="uploadImage9" type="file" name="myPhoto" onchange="loadImageFile9('uploadImage');" accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp"/> 
				<img id="uploadPreview9" src="" alt=""/>
				</div>
			</div>
			
			
			
			<div id="photoRow4">
				<div id="ajoutImage10">
					<div id="labelEtCroix10"> 
			   			<div id="labelPhoto10">Photo 10</div>
				   		<input id="croix10" type="button" onclick="supprImage10();" value="x"/> 
					</div>
				<img id="photoDeBase10" src="lib/icones/photo.png"/>
				<input id="uploadImage10" type="file" name="myPhoto" onchange="loadImageFile10('uploadImage');" accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp"/> 
				<img id="uploadPreview10" src="" alt=""/>
				</div>
				
				<div id="ajoutImage11">
					<div id="labelEtCroix11"> 
			   			<div id="labelPhoto11">Photo 11</div>
				   		<input id="croix11" type="button" onclick="supprImage11();" value="x"/> 
					</div>
				<img id="photoDeBase11" src="lib/icones/photo.png"/>
				<input id="uploadImage11" type="file" name="myPhoto" onchange="loadImageFile11('uploadImage');" accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp"/> 
				<img id="uploadPreview11" src="" alt=""/>
				</div>
				
				<div id="ajoutImage12">
					<div id="labelEtCroix12"> 
			   			<div id="labelPhoto12">Photo 12</div>
				   		<input id="croix12" type="button" onclick="supprImage12();" value="x"/> 
					</div>
				<img id="photoDeBase12" src="lib/icones/photo.png"/>
				<input id="uploadImage12" type="file" name="myPhoto" onchange="loadImageFile12('uploadImage');" accept="image/bmp,image/gif,image/jpeg,image/png,image/x-ms-bmp"/> 
				<img id="uploadPreview12" src="" alt=""/>
				</div>
			</div>

				
				
<!-- 				<div  class="iconeMaison"><div id="triangle"></div><div id="carre"></div><div id="fenetre1"></div><div id="fenetre2"></div></div> -->

<!-- 				<div id="divValider" ><input id="valider" type="submit" value="Valider" /></div> -->
			</form>									
		</div>
			
			
							
		</div>
		</div>
	</header>
	<footer>
		<div id="piedDePage"></div>
	</footer>
	<script src="lib/js/scriptAffichageImage2.js"></script>
	<script src="lib/js/changerImage.js"></script>
	<script src="lib/js/wave.js"></script>
	<script src="lib/js/fixed.js"></script>
	<script src="lib/js/voirMdp.js"></script>
</body>
</html>