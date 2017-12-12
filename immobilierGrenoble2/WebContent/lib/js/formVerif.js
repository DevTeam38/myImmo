function codePostalValide(champ) {
  strlen=champ.value.length;
  if(strlen!==5) {
	  surligne(champ, true);
    return false;
  }
// au cas où il a été entré en minuscules
entry=entry.toUpperCase();
// valeurs permises
s1='ABCEGHJKLMNPRSTVXY';
s2=s1+'WZ';
d3='0123456789';

// compare, une par une, les valeurs entrées à celles permises
if(s1.indexOf(entry.charAt(0))<0){
	surligne(champ, true);
  return false;
  }
if(d3.indexOf(entry.charAt(1))<0){
	surligne(champ, true);
  return false;
  }
if(s2.indexOf(entry.charAt(2))<0){
	surligne(champ, true);
  return false;
  }
if(d3.indexOf(entry.charAt(3))<0){
	surligne(champ, true);
  return false;
  }
if(s2.indexOf(entry.charAt(4))<0){
	surligne(champ, true);
  return false;
  }
if(d3.indexOf(entry.charAt(5))<0){
	surligne(champ, true);
  return false;
  }

// le code postal est valide !
surligne(champ, false);
return true;
}


function verifPseudo(champ)
{
   if(champ.value.length < 2 || champ.value.length > 13)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifAdresse(champ)
{
   if(champ.value.length < 2 || champ.value.length > 50)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}
