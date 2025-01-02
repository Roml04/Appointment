let patientInfo = ['First Name', 'Middle Name', 'Last Name', 'Email', 'Password'];

const editButton = document.getElementById('editButton');

const cancelButton = document.getElementById('cancelButton');

let patientInfoDefaultValues = [];
let patientInfoForReset = [];

const parentContainer = document.getElementById('parent-container');

let inputFieldsArray = [];

for (let i = 0; i <= parentContainer.children.length - 1; i++) {
    for (let j = 0; j <= parentContainer.children[i].lastElementChild.children.length - 1; j++) {
        inputFieldsArray.push(parentContainer.children[i].lastElementChild.children[j].lastElementChild.firstElementChild);
    }
}

for(let i = 0; i <= inputFieldsArray.length - 1; i++) {
    patientInfoDefaultValues[i] = inputFieldsArray[i].defaultValue;
}

patientInfoForReset = patientInfoDefaultValues;

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
        showDiscardButton(discardButton, saveButton);
    }
    
    let newDefaultVal = inputFld.defaultValue = inputFld.value;

    patientInfoDefaultValues[inputFld.id] = newDefaultVal;

    enableDisableInputFields(editBtn, saveBtn, inputFld);
}

function showDiscardButton(dicardButton, saveButton) {
    dicardButton.classList.remove('hidden');
    
    saveButton.classList.remove('hidden');   
}

// Discarding Changes

const discardButton = document.getElementById('discard-button');
const saveButton = document.getElementById('save-button');

discardButton.addEventListener('click', function () {
    discardChanges();
    discardButton.classList.add('hidden');
    saveButton.classList.add('hidden');
})

function discardChanges() {
   
    for (let i = 0; i <= patientInfoForReset.length - 1; i++) {

        inputFieldsArray[i].value = patientInfoForReset[i];
        inputFieldsArray[i].defaultValue = patientInfoForReset[i];
        
    }

}