<div id="section">
	<form id="formInscription">
		<label id="labelInscription">Inscription</label>
		<div class="checkBox"> 
			 <input class="checkBox" id="checkbox1" type="radio" name="civi" value="Mme" /> Madame
  			 <input class="checkBox" id="checkbox2" type="radio" name="civi" value="Mr" /> Monsieur
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
		<div id="userPassword"><div class="iconePasswordUser2"><div id="passwordRectangle2"></div><div id="passwordCercle2"></div></div><input  id="passwordInscription" type="password" name="Password" placeholder="Password"/>
							<input id="confPasswordInscription" type="password" name="confPassword" placeholder="Confirmer password"/></div>
		<div id="userCGU"><input id="cgu" class="checkBox" type="checkbox" name="interest"> CGU</div>
		<div id="divValider" ><input id="valider" type="submit" value="Valider" /></div>
	</form>									
</div>