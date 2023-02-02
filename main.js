const disableEnableElement = (element) => {
	if (element.disabled == true){
		element.disabled = false;
	}
	else {
		element.disabled = true;
	}
}

const showHidePasswd = (checkbox, input) => {
	if (checkbox.checked == true){
		input.type = "text";
	}
	else{
		input.type = "password"
	}
}

document.getElementById("check-login").addEventListener("change", function(){
	console.log("le dite cli")
	var checkbox = document.getElementById("check-login");
	var input = document.getElementById("passwd-login");
	showHidePasswd(checkbox, input);
	
})

/*
document.getElementById("confirm-password").addEventListener("keyup", function(){
	if (document.getElementById("confirm-password").value != document.getElementById("password").value){
		document.getElementById("message").innerHTML=`
		<p class="small-text">
			Las contraseñas no coinciden
		</p>
	`
		disableEnableElement(document.getElementById("btn-registrarse"))
	}
	else {
		document.getElementById("message").innerHTML=`
			<p class="small-text">
				Las contraseñas coinciden
			</p>
		`
		disableEnableElement(document.getElementById("btn-registrarse"))
	}
})
*/



window.onload = disableElement(document.getElementById("btn-registrarse"))