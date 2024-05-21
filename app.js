'use strict'
function openLink(event, linkName){
    var i, x;
    x = document.getElementsByClassName('block');
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
}
    document.getElementById(linkName).style.display = "block";

document.getElementsByClassName('block')[0].click()
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

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}

const subcontainer2 = document.querySelector('.subcontainer2');
const puntos        = document.querySelectorAll('.main-container2-li');

puntos.forEach((eachPoint, i)=>{
    puntos[i].addEventListener('click', ()=>{
        let initialPosition = i;
        let nextPosition    = initialPosition * ( - 100 /6 )

        subcontainer2.style.transform  = `translateX(${nextPosition}%)`

        puntos.forEach((eachPoint, i)=>{
            puntos[i].classList.remove("active")
        })
        puntos[i].classList.add("active")
    })
})