
function verifier() {
    var prenom = document.getElementById('prenom').value;
    var nom = document.getElementById('nom').value;
    var m = document.getElementById('M').checked;
    var f = document.getElementById('F').checked;
    if(prenom=="")
    {
     alert('Veuillez inscrire votre prenom!');
     document.getElementById('prenom').focus;
     return false;

    }else if(nom==""){
      alert('Veuillez inscrire votre nom!');
      document.getElementById('nom').focus;
      return false;


  } else {
    return true;
  }
}
