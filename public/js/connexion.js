formMail = document.getElementsByName('adressemail')[0];
formMdp = document.getElementsByName('mdp')[0];
boutonValider = document.getElementsByName('ok')[0];

boutonValider.onclick = connexion;

function connexion() {
	mail = formMail.value;
	mdp = formMdp.value;
	if((mail=="") || (mdp=="")) {
		alert("Veuillez remplir tous les champs !");
	}
	else {
		var req = new XMLHttpRequest();
		req.open("POST","./model/connexion.php",true);
		var data = "adressemail=" + mail + "&mdp=" + mdp;
		req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		req.send(data);
		req.onreadystatechange=function(){
			if (req.readyState==4 && req.status==200){
				reponse = req.responseText;
				if(reponse=="true") {
					window.location.replace("./index.php");
				}
				else {
					alert("Erreur de connexion : identifiants incorrects");
				}
			}
		}
	}
}
