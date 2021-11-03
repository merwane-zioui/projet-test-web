formMail = document.getElementsByName('email')[0];
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
	pname = formName.value;
	surname = formSurname.value;
	if((mail=="") || (mdp=="") || (mdpconf=="") || (pname=="") || (surname=="")) {
		alert("Veuillez remplir tous les champs !");
	}
	else if(mdp!=mdpconf) {
		alert("Mot de passe différent !");
	}
	else {
		var req = new XMLHttpRequest();
		req.open("POST","./model/inscription.php",true);
		var data = "adressemail=" + mail + "&mdp=" + mdp + "&name=" + pname + "&surname=" + surname;
		req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		req.send(data);
		req.onreadystatechange=function(){
			if (req.readyState==4 && req.status==200){
				reponse = req.responseText;
				alert(reponse);
			}
		}
	}
}