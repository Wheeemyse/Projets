function verifier() {
  var prenom = document.getElementById('prenom').value;
  var nom = document.getElementById('nom').value;
  var mr = document.getElementsByClassName("mr").checked;
  var mme = document.getElementById("mme").checked;
}

if (nom != "" && prenom != "")
{
  return true;
}
else if (nom == "")
{
     alert('Remplissez le champ nom');
     return false;
}
else
{
     alert('Remplissez le champ prénom');
     return false;
}
