function validationOfReview() {
    let nameValidation = document.forms["addReview"]["name"].value;
    if (nameValidation === "") {
        let warning = document.getElementById("name-input");
        warning.hidden = false;
        warning.style = "color:red";
        warning.innerText = "Meno musí byť vyplnené.";

        return false;
    }

    let textValidation = document.forms["addReview"]["text"].value;
    if (textValidation === "") {
        let warning = document.getElementById("text-input");
        warning.hidden = false;
        warning.style = "color:red";
        warning.innerText = "Text recenzie musí byť vyplnený.";

        return false;
    }
}

function validationOfRegistration() {
    let firstNameValidation = document.forms["registration"]["firstName"].value;
    if (firstNameValidation === "") {
        let warning = document.getElementById("firstName-input");
        warning.hidden = false;
        warning.style = "color:red";
        warning.innerText = "Meno musí byť vyplnené.";

        return false;
    }

    let lastNameValidation = document.forms["registration"]["lastName"].value;
    if (lastNameValidation === "") {
        let warning = document.getElementById("lastName-input");
        warning.hidden = false;
        warning.style = "color:red";
        warning.innerText = "Priezvisko musí byť vyplnené.";

        return false;
    }

    let emailValidation = document.forms["registration"]["email"].value;
    if (emailValidation === "") {
        let warning = document.getElementById("email-input");
        warning.hidden = false;
        warning.style = "color:red";
        warning.innerText = "Email musí byť vyplnené.";

        return false;
    }

    let phoneNumberValidation = document.forms["registration"]["phoneNumber"].value;
    if (phoneNumberValidation === "") {
        let warning = document.getElementById("phone-number-input");
        warning.hidden = false;
        warning.style = "color:red";
        warning.innerText = "Telefónne číslo musí byť vyplnené.";

        return false;
    }
}