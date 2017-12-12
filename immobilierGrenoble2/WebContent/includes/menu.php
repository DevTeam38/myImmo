<div id="waveLimite" class="wave-effect"></div>
<div class="banderoleBlanc"><div id="marque">MyImmo</div>
								<div id="listeTest">
								<div>G</div>
								<div>R</div>
								<div>E</div>
								<div>N</div>
								<div>O</div>
								<div>B</div>
								<div>L</div>
								<div>E</div>
								</div>
							</div>
<div id="effet" data-sticky>	
	<div class="menuParent">
		<div class="menuParent"><a href="acheter.php" class="bouton" id="bouton2">Acheter</a></div>
		<div class="menuParent"><a href="#vendre" class="bouton" id="bouton3">Vendre</a></div>	
		<div class="menuParent"><a href="#tarif" class="bouton" id="bouton4">Contrats</a></div>	
		<div class="menuParent"><div  class="iconeLogo" onclick="location.href='accueil.php';"><div id="triangle"></div><div id="carre"></div><div id="ovale"></div><div id="fenetre1"></div><div id="fenetre2"></div><div id="marqueLogo"></div></div></div>			
		<div class="menuParent"><div class="iconeTelephone" onclick="location.href='contact.php';"><div id="rectangle"></div><div id="demiCercleHaut"></div><div id="demiCercleBas"></div></div></div>	
		<div class="menuParent"><div class="iconeEnveloppe" onclick="location.href='contact.php';"><div id="rectangleEnveloppe1"></div><div id="traitEnveloppe1"></div><div id="trait2Enveloppe1"></div></div></div> 
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
				<div class="divForm2"><input id="inscription" type="button" value="Inscription" onclick="location.href='inscription.php';"/></div>				
			</div>
		</div>
	</form>	
</div>