formMail = document.getElementsByName('adressemail')[0];
formMdp = document.getElementsByName('mdp')[0];
formMdpConf = document.getElementsByName('mdpconf')[0];
formName = document.getElementsByName('name')[0];
formSurname = document.getElementsByName('surname')[0];
boutonValider = document.getElementsByName('ok')[0];

boutonValider.onclick = inscription;

function inscription() {
	mail = formMail.value;
	mdp = formMdp.value;
	mdpconf = formMdpConf.value;
	name = formName.value;
	surname = formSurname.value;
	if((mail=="") || (mdp=="") || (mdpconf=="") || (name=="") || (surname=="")) {
		alert("Veuillez remplir tous les champs !");
	}
	if(mdp!=mdpconf) {
		alert("Mot de passe différent !");
	}
	else {
		var req = new XMLHttpRequest();
		req.open("POST","php/inscription.php",true);
		var data = "adressemail=" + mail + "&mdp=" + mdp + "&name=" + name + "&surname=" + surname;
		req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		req.send(data);
		req.onreadystatechange=function(){
			if (req.readyState==4 && req.status==200){
				reponse = req.responseText;
				if(reponse=="alreadyused") {
					alert("ERREUR : Adresse mail déjà utilisée.")
				}
				else {
					alert("Inscription réussie.");
				}
			}
		}
	}
}