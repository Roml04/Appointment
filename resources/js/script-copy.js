let patientInfo = ['First Name', 'Middle Name', 'Last Name', 'Email', 'Password'];

const editButton = document.getElementById('editButton');

const cancelButton = document.getElementById('cancelButton');

let patientInfoDefaultValues = [];
let patientInfoForReset = [];

const parentContainer = document.getElementById('parent-container');

let inputFieldsArray = [];

console.log('Adding Input Fields to Array');

for (let i = 0; i <= parentContainer.children.length - 1; i++) {
    for (let j = 0; j <= parentContainer.children[i].lastElementChild.children.length - 1; j++) {
        console.log('');
        console.log('Parent Container: ', i);
        console.log('Input Field: ', j);
        inputFieldsArray.push(parentContainer.children[i].lastElementChild.children[j].lastElementChild.firstElementChild);
        console.log("List Added");
        console.log(inputFieldsArray);
    }
    console.log('===Parent Completed===');
}

console.log('');
console.log('===Input Field Adding Completed===');
console.log(inputFieldsArray);
console.log('');
console.log('');

for(let i = 0; i <= inputFieldsArray.length - 1; i++) {
    console.log(inputFieldsArray[i]);
    console.log(inputFieldsArray[i].defaultValue);
    patientInfoDefaultValues[i] = inputFieldsArray[i].defaultValue;
}

console.log('Default Values and Reset Arrays Defined');
console.log("==patientInfoDefaultValues==");
console.log(patientInfoDefaultValues);

patientInfoForReset = patientInfoDefaultValues;

console.log("==patientInfoForReset==");
console.log(patientInfoForReset);

// Personal Info

const personalInfoContainer = document.getElementById('personal-info-container');

let personalInfoChildren = personalInfoContainer.children;

let editButtonArray = [];
let saveButtonArray = [];

for (let i = 0; i <= personalInfoChildren.length - 1; i++) {
    editButtonArray[i] = personalInfoChildren[i].lastElementChild.lastElementChild.lastElementChild;
    saveButtonArray[i] = personalInfoChildren[i].lastElementChild.lastElementChild.firstElementChild;
}

for (let i = 0; i <= editButtonArray.length - 1; i++) {
    editButtonArray[i].addEventListener('click', function() {

        checkForEdits(editButtonArray[i], saveButtonArray[i], personalInfoChildren[i].lastElementChild.firstElementChild);
    })

    saveButtonArray[i].addEventListener('click', function() {
        
        saveInputFieldValue(editButtonArray[i], saveButtonArray[i], personalInfoChildren[i].lastElementChild.firstElementChild);
    })
}

// Account Info

const accountInfoContainer = document.getElementById('account-info-container');

let accountInfoChildren = accountInfoContainer.children;

let accEditButtonArray = [];
let accSaveButtonArray = [];

for (let i = 0; i <= accountInfoChildren.length - 1; i++) {
    accEditButtonArray[i] = accountInfoChildren[i].lastElementChild.lastElementChild.lastElementChild;
    accSaveButtonArray[i] = accountInfoChildren[i].lastElementChild.lastElementChild.firstElementChild;
}

for (let i = 0; i <= accEditButtonArray.length - 1; i++) {
    accEditButtonArray[i].addEventListener('click', function() {
        checkForEdits(accEditButtonArray[i], accSaveButtonArray[i], accountInfoChildren[i].lastElementChild.firstElementChild);
    })

    accSaveButtonArray[i].addEventListener('click', function() {
        saveInputFieldValue(accEditButtonArray[i], accSaveButtonArray[i], accountInfoChildren[i].lastElementChild.firstElementChild);
    })
}

// Functions

function checkForEdits(editBtn, saveBtn, inputFld) {

    if(inputFld.value !== inputFld.defaultValue) {
        inputFld.value = inputFld.defaultValue;
    }

    enableDisableInputFields(editBtn, saveBtn, inputFld);
}

function enableDisableInputFields(editBtn, saveBtn, inputFld) {

    editBtn.textContent = editBtn.textContent === 'Edit' ? 'Cancel' : 'Edit';
    saveBtn.classList.toggle('hidden');
    inputFld.toggleAttribute('disabled');
}

function saveInputFieldValue(editBtn, saveBtn, inputFld) {
    
    if(patientInfoForReset[inputFld.id] !== inputFld.value) {
        console.log(inputFld.value, " !== ", patientInfoForReset[inputFld.id]);
        console.log(patientInfoForReset[inputFld.id] !== inputFld.value);
        showDiscardButton();
    }
    
    let newDefaultVal = inputFld.defaultValue = inputFld.value;

    patientInfoDefaultValues[inputFld.id] = newDefaultVal;

    enableDisableInputFields(editBtn, saveBtn, inputFld);
}

function showDiscardButton() {
    
    console.log('===Discard Button Shown===');
    const dicardButton = document.getElementById('discard-button');
    dicardButton.classList.remove('hidden');
    
    const saveButton = document.getElementById('save-button');
    saveButton.classList.remove('hidden');
    
}

const discardChangesButton = document.getElementById('discard-button');

discardChangesButton.addEventListener('click', function () {
    discardChanges();
})

function discardChanges() {

    console.log('Discarding Changes...');
    console.log(patientInfoForReset);
    
    for (let i = 0; i <= patientInfoForReset.length - 1; i++) {

        inputFieldsArray[i].value = patientInfoForReset[i];
        inputFieldsArray[i].defaultValue = patientInfoForReset[i];
        
    }
    
    console.log("Default Values");
    console.log(inputFirstName.defaultValue);
    console.log(inputMiddleName.defaultValue);
    console.log(inputLastName.defaultValue);
    console.log(inputEmail.defaultValue);
    console.log(inputPassword.defaultValue);
    
    console.log("Current Values");
    console.log(inputFirstName.value);
    console.log(inputMiddleName.value);
    console.log(inputLastName.value);
    console.log(inputEmail.value);
    console.log(inputPassword.value);
    
    console.log("Changes Discarded");
}