
let subscribeButton = document.getElementById('subscribeButton');
let birthDate = document.getElementById('birthDate');
let postalAddress = document.getElementById('postalAddress');
let postalCode = document.getElementById('postalCode');


// subscribe formular control 
function formControl(){
    if(postalCode.value > 5){
        window.alert('code postale invalide')
    }
}

subscribeButton.addEventListener('click' , () => {
    formControl();
})