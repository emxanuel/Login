function disableElement(element){
	element.disabled = true;
}

function enableElement(element){
	element.disabled = false;
}

document.getElementById("confirm-password").addEventListener("keyup", function(){
	if (document.getElementById("confirm-password").value != document.getElementById("password").value){
		document.getElementById("message").innerHTML=`
		<p class="small-text">
			Las contraseñas no coinciden
		</p>
	`
		disableElement(document.getElementById("btn-registrarse"))
	}
	else {
		document.getElementById("message").innerHTML=`
			<p class="small-text">
				Las contraseñas coinciden
			</p>
		`
		enableElement(document.getElementById("btn-registrarse"))
	}
})

window.onload = disableElement(document.getElementById("btn-registrarse"))