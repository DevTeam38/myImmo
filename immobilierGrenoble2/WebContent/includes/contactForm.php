<div id="section">
	<form id="formContact">
		<label id="labelContact">Contact</label>
  		<div id="userName"><div id="iconeCompteUser3"><div id="corp3"></div><div id="tete3"></div></div><input id="nom" onblur="verifPseudo(this)" type="text" name="nom" placeholder="Nom" maxlength="20" />
  						   <input id="prenom" onblur="verifPseudo(this)" type="text" name="nom" placeholder="Prenom" maxlength="20" /></div>
		<div id="userEmail"><div id="iconeUserEmail">@ /<div class="iconeTelephone2"><div id="rectangle2"></div><div id="demiCercleHaut2"></div><div id="demiCercleBas2"></div></div></div><input id="email" type="email" onblur="verifMail(this)" placeholder="Email" name="email"/>
							<input id="telephone2" type="tel" name="Telephone" placeholder="Telephone"/></div>
		<div id="userSujet"><input id="sujet" type="text" name="sujet"  placeholder="Sujet"/></div>
		<div id="userTextArea"><textarea id="idTextArea" name="zoneText" maxlength="1000" spellcheck="true" placeholder="Votre message"></textarea></div>
		<div id="buttonEnvoyer" ><input id="envoyer" type="submit" value="Envoyer" /></div>
	</form>									
</div>