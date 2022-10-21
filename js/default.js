let contactForm = document.getElementById('contactForm');
let subject = document.getElementById('subject');
let firstName = document.getElementById('name');
let surName = document.getElementById('surname');
let mailAddress = document.getElementById('mailAddress');
let labelEmail = document.getElementById('labelEmail');
let message = document.getElementById('message');

let submitButton = document.getElementById('submitButton');


function mailControl(){
    if(mailAddress.value != ''){
        let addMessage = document.createElement('p');
        addMessage.textContent = 'Message complet';
        labelEmail.appendChild(addMessage);
    }
}

mailAddress.addEventListener('change', () =>{
    mailControl();
})

function submitGestion(){

    if(subject.value === '' && firstName.value === '' && surName.value === '' && mailAddress.value === '' && message.value === ''){
        console.log(' formular is not complite');
        submitButton.disabled = true;
        submitButton.value = "Champs manquant";
    }

    if(subject.value != '' && firstName.value != '' && surName.value != '' && mailAddress.value != '' && message.value != ''){
        console.log(' formular is complite');
        submitButton.disabled = false;
        submitButton.value = "Envoyer";
    }
}
submitGestion();

contactForm.addEventListener('change' , () =>{
    submitGestion();
})