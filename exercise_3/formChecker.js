function checkValid() {
	var seeds = document.getElementById("seeds").value;
	var umbrellas = document.getElementById("umbrella").value;
	var bandanas = document.getElementById("bandana").value;
	
	var free = document.getElementById("free").checked;
	var overnight = document.getElementById("overnight").checked;
	var three = document.getElementById("three").checked;
	
	var username = document.getElementById("username").value;
	var pswd = document.getElementById("password").value;
	
	var validItems = seeds!="" && umbrellas!="" && bandanas!="";
	var validShipping = free || overnight || three;
	var validUsername = isEmail(username);
	var validPswd = pswd!="";
	
	if (validItems && validShipping && validUsername && validPswd) {
		document.forms["form"].submit();
	}
	else {
		alert("Invalid Inputs!!!");
	}
}

function isEmail(email) {
	var re = /\S+@\S+\.\S+/;
	return re.test(email);
}