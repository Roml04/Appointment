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



const infoContainer = document.getElementById('info-container');

// Event Listeners

console.log(editButton.textContent);

editButton.addEventListener('click', () => {
    enableInputFields(editButton, cancelButton, inputFirstName);
});
cancelButton.addEventListener('click', () => {
    disableInputFields(editButton, cancelButton, inputFirstName);
});

// Functions

function enableInputFields(editBtn, cancelBtn, inputFld) {

    // console.log(editBtn);
    // console.log(editBtn.hasAttribute('disabled'));

    if(inputFld.hasAttribute('disabled')) {


        inputFld.toggleAttribute('disabled');
        cancelBtn.classList.toggle('hidden');
        editBtn.classList.toggle('hidden');

        console.log('input field enabled');

    }
}

function disableInputFields(editBtn, cancelBtn, inputFld) {

    if(!inputFld.hasAttribute('disabled')) {

        inputFld.toggleAttribute('disabled');
        cancelBtn.classList.toggle('hidden');
        editBtn.classList.toggle('hidden');

        console.log('input field disabled');

    }   

}