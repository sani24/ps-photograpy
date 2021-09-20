const firstName=document.getElementsByName('first_name').value;
const lastName=document.getElementsByName('last_name').value;
const emailId=document.getElementsByName('email_id').value;
const userName=document.getElementsByName('user_name').value;
const password=document.getElementsByName('password').value;
const password_2=document.getElementsByName('password_2').value;

const form = document.querySelector('#signup');


const checkUsername = () => {

    let valid = false;

    const min = 3,
        max = 25;

    const username = userName.value.trim();

    if (!isRequired(username)) {
        showError(userName, 'Username cannot be blank.');
    } else if (!isBetween(username.length, min, max)) {
        showError(userName, `Username must be between ${min} and ${max} characters.`)
    } else {
        showSuccess(userName);
        valid = true;
    }
    return valid;
};


const checkEmail = () => {
    let valid = false;
    const email = emailId.value.trim();
    if (!isRequired(email)) {
        showError(emailId, 'Email cannot be blank.');
    } else if (!isEmailValid(email)) {
        showError(emailId, 'Email is not valid.')
    } else {
        showSuccess(emailId);
        valid = true;
    }
    return valid;
};

const checkPassword = () => {
    let valid = false;


    const passwordjs = password.value.trim();

    if (!isRequired(passwordjs)) {
        showError(password, 'Password cannot be blank.');
    } else if (!isPasswordSecure(passwordjs)) {
        showError(password, 'Password must has at least 8 characters that include at least 1 lowercase character, 1 uppercase characters, 1 number, and 1 special character in (!@#$%^&*)');
    } else {
        showSuccess(password);
        valid = true;
    }

    return valid;
};

const checkConfirmPassword = () => {
    let valid = false;
    // check confirm password
    const confirmPassword = password_2.value.trim();
    const password = passwordEl.value.trim();

    if (!isRequired(confirmPassword)) {
        showError(password_2, 'Please enter the password again');
    } else if (password !== confirmPassword) {
        showError(password_2, 'The password does not match');
    } else {
        showSuccess(password_2);
        valid = true;
    }

    return valid;
};

const isEmailValid = (email) => {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
};

const isPasswordSecure = (password) => {
    const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    return re.test(password);
};

const isRequired = value => value === '' ? false : true;
const isBetween = (length, min, max) => length < min || length > max ? false : true;


const showError = (input, message) => {
    // get the form-field element
    const formField = input.parentElement;
    // add the error class
    formField.classList.remove('success');
    formField.classList.add('error');

    // show the error message
    const error = formField.querySelector('small');
    error.textContent = message;
};

const showSuccess = (input) => {
    // get the form-field element
    const formField = input.parentElement;

    // remove the error class
    formField.classList.remove('error');
    formField.classList.add('success');

    // hide the error message
    const error = formField.querySelector('small');
    error.textContent = '';
}


const debounce = (fn, delay = 500) => {
    let timeoutId;
    return (...args) => {
        // cancel the previous timer
        if (timeoutId) {
            clearTimeout(timeoutId);
        }
        // setup a new timer
        timeoutId = setTimeout(() => {
            fn.apply(null, args)
        }, delay);
    };
};

form.addEventListener('input', debounce(function (e) {
    switch (e.target.id) {
        case 'username':
            checkUsername();
            break;
        case 'email':
            checkEmail();
            break;
        case 'password':
            checkPassword();
            break;
        case 'confirm-password':
            checkConfirmPassword();
            break;
    }
}));