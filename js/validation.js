const firstName=document.getElementsByName('first_name').value;
const lastName=document.getElementsByName('last_name').value;
const emailId=document.getElementsByName('email_id').value;
const userName=document.getElementsByName('user_name').value;
const password=document.getElementsByName('password').value;
const password_2=document.getElementsByName('password_2').value;

const form = document.getElementById('#sign_up').addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});

function checkInputs() {
	// trim to remove the whitespaces
	const firstNameValue = firstName.value.trim();
	const lastNameValue = lastName.value.trim();
	const usernameValue = userName.value.trim();
	const emailValue = emailId.value.trim();
	const passwordValue = password.value.trim();
	const password_2Value = password_2.value.trim();
	
	if(firstNameValue === '') {
		setErrorFor(firstName, 'First Name cannot be blank');
	} else {
		setSuccessFor(firstName);
	}
    if(lastNameValue === '') {
		setErrorFor(lastName, 'Last Name cannot be blank');
	} else {
		setSuccessFor(lastName);
	}
    if(usernameValue === '') {
		setErrorFor(userName, 'Username cannot be blank');
	} else {
		setSuccessFor(userName);
	}
	
	if(emailValue === '') {
		setErrorFor(emailId, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(emailId, 'Not a valid email');
	} else {
		setSuccessFor(email);
	}
	
	if(passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
	} else {
		setSuccessFor(password);
	}
	
	if(password_2Value === '') {
		setErrorFor(password_2, 'Password2 cannot be blank');
	} else if(passwordValue !== password_2Value) {
		setErrorFor(password_2, 'Passwords does not match');
	} else{
		setSuccessFor(password_2);
	}
}

function setErrorFor(input, message) {

    // get the form-field element
    const form_Field = input.parentElement;
    // add the error class
    form_Field.classList.remove('success');
    form_Field.classList.add('error');

    // show the error message
    const error = form_Field.querySelector('small');
    error.textContent = message;
}

const setSuccessFor = (input) => {
    // get the form-field element
    const form_Field = input.parentElement;

    // remove the error class
    form_Field.classList.remove('error');
    form_Field.classList.add('success');

    // hide the error message
    const error = form_Field.querySelector('small');
    error.textContent = '';
}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

