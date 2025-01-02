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

let patientInfoDefaultValues = [];

patientInfoDefaultValues['inputFirstName'] =  inputFirstName.defaultValue;
patientInfoDefaultValues['inputMiddleName'] =  inputMiddleName.defaultValue;
patientInfoDefaultValues['inputLastName'] =  inputLastName.defaultValue;

patientInfoDefaultValues['inputEmail'] =  inputEmail.defaultValue;
patientInfoDefaultValues['inputPassword'] =  inputPassword.defaultValue;

const personalInfoContainer = document.getElementById('personal-info-container');

let personalInfoChildren = personalInfoContainer.children;

let editButtonArray = [];
let saveButtonArray = [];

for (let i = 0; i <= personalInfoChildren.length - 1; i++) {
    let editButton = personalInfoChildren[i].lastElementChild.lastElementChild.lastElementChild;
    let saveButton = personalInfoChildren[i].lastElementChild.lastElementChild.firstElementChild;

    saveButtonArray[i] = saveButton;
    editButtonArray[i] = editButton;
}

for (let i = 0; i <= editButtonArray.length - 1; i++) {
    editButtonArray[i].addEventListener('click', function() {
        checkForEdits(editButtonArray[i], saveButtonArray[i], personalInfoChildren[i].lastElementChild.firstElementChild);
    })

    saveButtonArray[i].addEventListener('click', function() {
        saveInputFieldValue(editButtonArray[i], saveButtonArray[i], personalInfoChildren[i].lastElementChild.firstElementChild);
    })
}

function checkForEdits(editBtn, saveBtn, inputFld) {

    if(inputFld.value !== patientInfoDefaultValues[inputFld.id]) {
        inputFld.value = patientInfoDefaultValues[inputFld.id];
    }

    enableInputFields(editBtn, saveBtn, inputFld);
}

function enableInputFields(editBtn, saveBtn, inputFld) {
    editBtn.textContent = editBtn.textContent === 'Edit' ? 'Cancel' : 'Edit';
    saveBtn.classList.toggle('hidden');
    inputFld.toggleAttribute('disabled');
}

function saveInputFieldValue(editBtn, saveBtn, inputFld) {
    
    let newDefaultVal = inputFld.defaultValue = inputFld.value;

    patientInfoDefaultValues[inputFld.id] = newDefaultVal;

    enableInputFields(editBtn, saveBtn, inputFld);
}