/*****     
       dropdown js 
  *****/


let dropdown = document.querySelector('#dropdownMenuButton')
let Showdropdown = document.getElementById('dpm')
let dropdownToggle = document.querySelector('.account-mng .dropdown-toggle')


dropdown.addEventListener('click', function () {
    dropdown.classList.toggle('active-clr')
    dropdownToggle.classList.toggle('toggle-arrow')
    Showdropdown.classList.toggle('showdp')
})


/*****     
     niceSelect js 
*****/


$(document).ready(function () {
    $('select').niceSelect();
});








