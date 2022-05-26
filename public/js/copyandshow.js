/*****     
     Copy Text to Clipboard js 
*****/


let copyContact = document.getElementById('copyContact')
let copyEmail = document.getElementById('copyEmail')

copyContact.addEventListener('click', ()=> {
    copyToClipboard('#copyContactNumber')
    alert('Contact Number Copied')
})
copyEmail.addEventListener('click', ()=> {
    copyToClipboard('#copyEmailAddress')
    alert('Email Address Copied')

})

function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
}



/*****     
      show Key Features & Facilities js 
*****/

let Keys = document.querySelector('#keys')
let Faci = document.querySelector('#faci')

let KeFeatures = document.querySelector('.Key-Features')
let Facilities = document.querySelector('.Facilities')


Faci.addEventListener('click', function(){
    Facilities.classList.remove('d-none')
    KeFeatures.classList.add('d-none')
    Faci.classList.add('forbdr1')
    Keys.classList.remove('forbdr')
    Keys.classList.remove('activebdr')

})

Keys.addEventListener('click', function(){
    KeFeatures.classList.remove('d-none')
    Facilities.classList.add('d-none')
    Keys.classList.add('forbdr')
    Faci.classList.remove('forbdr1')

})