/*****     
      characters count js 
*****/
let headline = document.getElementById('headline')
let textarea = document.getElementById('textarea')

let hedar = document.getElementById('hedar')
let txtar = document.getElementById('txtar')

txtar.addEventListener('keyup', function(){
    textarea.innerHTML = txtar.value.length;
    if(txtar.value.length >= 2000){
        txtar.style.borderColor = '#FF6D6D'
    }else{
        txtar.style.borderColor = ''
    }
})




hedar.addEventListener('keyup', function(){
    headline.innerHTML = hedar.value.length;
    if(hedar.value.length >= 70){
        hedar.style.borderColor = '#FF6D6D'
    }else{
        hedar.style.borderColor = ''
    }
})




/*****     
      view more js

*****/

let vbtn = document.getElementById('v-btn')
let vmr = document.querySelector('.viewmore')

vbtn.addEventListener('click', function(){
vmr.classList.toggle('tgl')

if(vbtn.innerText === 'View More'){
vbtn.innerText = 'View Less'
}else{
vbtn.innerText = 'View More'

}
})


/*****     
     submit js
*****/
// let sub_text = document.getElementById('sub_text')
// let sbtn = document.getElementById('sbtn')

// sbtn.addEventListener('click', function(){

//    sub_text.innerHTML = 'Your listing has been published'
//     sbtn.innerText = 'Back to All Listings'




//     })
//     