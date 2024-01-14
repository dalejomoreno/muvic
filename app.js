'use strict'
function openLink(event, linkName){
    var i, x;
    x = document.getElementsByClassName('block');
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
}
    document.getElementById(linkName).style.display = "block";

document.getElementsByClassName("baritem")[0].click()
}

const licor = document.querySelectorAll('.licor')
const block = document.querySelectorAll('.block')
licor.forEach( (cadaLi , i )=>{
    licor[i].addEventListener('click', ()=>{

        licor.forEach( ( cadaLi , i )=>{
            licor[i].classList.remove('active')
            block[i].classList.remove('active')
        })
        licor[i].classList.add('active')
        block[i].classList.add('active')
    })
})



