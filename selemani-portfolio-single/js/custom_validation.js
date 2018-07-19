// Set custom validation message for login form
var contactName = document.getElementById('name');
var email = document.getElementById('email');
var tel = document.getElementById('phone');
var msg = document.getElementById('message');
	contactName.oninvalid = function(e) {
		e.target.setCustomValidity("");
		if(!e.target.validity.valid) {
			if(e.target.value.length == 0) {
				e.target.setCustomValidity("Your name is mandatory!");
			} 
		}
	};
	email.oninvalid = function(e) {
		e.target.setCustomValidity("");
		if(!e.target.validity.valid) {
			if(e.target.value.length == 0){
				e.target.setCustomValidity('Your email address is mandatory!');
			} else {
				e.target.setCustomValidity('Invalid email address!');
			}
		}
	};
	tel.oninvalid = function(e) 
	{
		e.target.setCustomValidity("");
		if(!e.target.validity.valid) {
			if(e.target.value.length == 0){
				e.target.setCustomValidity('Your telephone number is mandatory!');
			}else if (e.target.validity.patternMismatch){
				e.target.setCustomValidity("Contact number should be exactly 10 digits starting with 0. Do not include country code!");
			}
		}
	};
	msg.oninvalid = function(e){
		e.target.setCustomValidity("");
		if(!e.target.validity.valid){
			if(e.target.value.length == 0) {
				e.target.setCustomValidity("Please type in your message!");
			}
		}
	};