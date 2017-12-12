<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="/Users/Theo_1/Desktop/WorkspaceImmo/immobilierGrenoble/WebContent/WEB-INF/htmlV2/cssV2/cssMenu5.css" rel="stylesheet" type="text/css" />
<link href="/Users/Theo_1/Desktop/WorkspaceImmo/immobilierGrenoble/WebContent/WEB-INF/htmlV2/cssV2/cssLogin3.css" rel="stylesheet" type="text/css" />
<link href="/Users/Theo_1/Desktop/WorkspaceImmo/immobilierGrenoble/WebContent/WEB-INF/htmlV2/cssV2/cssInscription3.css" rel="stylesheet" type="text/css" />
<title>Accueil</title>
</head>
<body onload="changerImage()">
	<header>
		<div id="img1"  class="wave-effect"  >
			<div id="img1NoVisible">
			<div class="banderoleBlanc"><div id="marque">MyImmo</div><div id="grenoble">Grenoble</div></div>
			<?php 

			
			// This is a single-line comment
			$stringvariable = "examplestring";
			$intvariable = 300;
			/**
			 * This is a multi-line comment
			 * @author Roger Dudler
			 */
			class Testclass {
			    function test($param = "default") {
			        return true;
			    }
			}

        
    ?>

			<div id="effet" data-sticky>	
				<div class="menuParent">
					<div class="menuParent"><a href="accueilV5.html" class="bouton" id="bouton2">Acheter</a></div>
					<div class="menuParent"><a href="#vendre" class="bouton" id="bouton3">Vendre</a></div>	
					<div class="menuParent"><a href="#tarif" class="bouton" id="bouton4">Contrats</a></div>	
					<div class="menuParent"><div  class="iconeLogo"><div id="triangle"></div><div id="carre"></div><div id="ovale"></div><div id="fenetre1"></div><div id="fenetre2"></div><div id="marqueLogo"></div></div></div>			
					<div class="menuParent"><div class="iconeTelephone" onclick="location.href='contactV6.html';"><div id="rectangle"></div><div id="demiCercleHaut"></div><div id="demiCercleBas"></div></div></div>	
					<div class="menuParent"><div class="iconeEnveloppe" onclick="location.href='contactV6.html';"><div id="rectangleEnveloppe1"></div><div id="traitEnveloppe1"></div><div id="trait2Enveloppe1"></div></div></div> 
					<div class="menuParent"><div class="iconeCompte" onclick="changeClick('formConnectionFlexRow');" ><div id="cercle"></div><div id="corp"></div><div id="tete"></div></div></div>	
				</div>		
				<form id="formConnectionFlexRow">
					<div id="formConnectionFlexColumn">
						<div id="connexionRow">
							<div class="divForm1"><div id="iconeCompteUser"><div id="corp2"></div><div id="tete2"></div><input id="user" type="text" name="user"  placeholder="Username"/></div></div>
							<div class="divForm1"><div id="iconePassword">
													<div class="voirMdp">
														<input type="button" class="voirMdp" id="button" onclick="afficherMdp('password');" value="voir"/>
														<input id="password" type="password" name="password"  placeholder="Password"/>
													</div>
												</div>
											</div>	
							<div class="divForm1"><input id="connexion" type="submit" value="Connexion"/></div>				
						</div>
						<div id="inscritpionRow">
							<div class="divForm2"><a id="mdpOublie" href="/mdpOublie">Mot de passe oublié&nbsp;?</a></div>
							<div class="divForm2"><div id="pasDeCompte">Vous n'avez pas de compte ?</div></div>
							<div class="divForm2"><input id="inscription" type="button" value="Inscription" onclick="location.href='inscriptionV6.html';"/></div>				
						</div>
					</div>
				</form>	
				</div>
				</div>	
		</div>
	</header>
	<footer>
		<div id="piedDePage"></div>
	</footer>
	<script src="/Users/Theo_1/Desktop/WorkspaceImmo/immobilierGrenoble/WebContent/WEB-INF/htmlV2/jsV2/changerImage.js"></script>
	<script src="/Users/Theo_1/Desktop/WorkspaceImmo/immobilierGrenoble/WebContent/WEB-INF/htmlV2/jsV2/changerImage.js"></script>
	<script src="/Users/Theo_1/Desktop/WorkspaceImmo/immobilierGrenoble/WebContent/WEB-INF/htmlV2/jsV2/wave.js"></script>
	<script src="/Users/Theo_1/Desktop/WorkspaceImmo/immobilierGrenoble/WebContent/WEB-INF/htmlV2/jsV2/fixed.js"></script>
	<script src="/Users/Theo_1/Desktop/WorkspaceImmo/immobilierGrenoble/WebContent/WEB-INF/htmlV2/jsV2/voirMdp.js"></script>
</body>
</html>