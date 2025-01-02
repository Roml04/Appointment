// Constants

let patientInfo = ['First Name', 'Middle Name', 'Last Name', 'Email', 'Password'];

// HTML Elements

const editButton = document.getElementById('editButton');

const cancelButton = document.getElementById('cancelButton');

const inputFirstName = document.getElementById('inputFirstName');
const inputMiddleName = document.getElementById('inputMiddleName');
const inputLastName= document.getElementById('inputLastName');
const inputEmail = document.getElementById('inputEmail');
const inputPassword = document.getElementById('inputPassword');

console.log('inputField FNAME', inputFirstName);

let patientInfoDefaultValues = [];

patientInfoDefaultValues['inputFirstName'] =  inputFirstName.defaultValue;
patientInfoDefaultValues['inputMiddleName'] =  inputMiddleName.defaultValue;
patientInfoDefaultValues['inputLastName'] =  inputLastName.defaultValue;

patientInfoDefaultValues['inputEmail'] =  inputEmail.defaultValue;
patientInfoDefaultValues['inputPassword'] =  inputPassword.defaultValue;

const personalInfoContainer = document.getElementById('personal-info-container');

let personalInfoChildren = personalInfoContainer.children;

let editButtonArray = [];

for (let i = 0; i <= personalInfoChildren.length - 1; i++) {
    let editButton = personalInfoChildren[i].lastElementChild.lastElementChild;
    editButtonArray[i] = editButton;
}

for (let i = 0; i <= editButtonArray.length - 1; i++) {
    editButtonArray[i].addEventListener('click', function() {
        enableInputFields(editButtonArray[i], i, personalInfoChildren[i].lastElementChild.firstElementChild);
    })
}

function enableInputFields(editBtn, i, inputFld) {

    if(inputFld.value !== patientInfoDefaultValues[inputFld.id]) {
        inputFld.value = patientInfoDefaultValues[inputFld.id];
    }

    editBtn.textContent = editBtn.textContent === 'Edit' ? 'Cancel' : 'Edit';
    inputFld.toggleAttribute('disabled');
}