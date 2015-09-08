function appsub() {
	if(document.getElementById("agree").checked == true)
	document.getElementById("submit").disabled = false;
	else
	document.getElementById("submit").disabled = true;
	}