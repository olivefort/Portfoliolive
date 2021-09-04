//Forcing Scrool to Top au Refresh
window.onload = function(){
    window.scrollTo(0, 0);
}


//Burger Menu
const toggleMenu = document.querySelector('.main-nav button');
const menu = document.querySelector('#main-menu');


//Fermeture Menu via Burger
toggleMenu.addEventListener('click', function() {
  const open = JSON.parse(toggleMenu.getAttribute('aria-expanded'));
  toggleMenu.setAttribute('aria-expanded', !open);
  menu.hidden = !menu.hidden;
});


//Fermeture Menu via éléments du menu
let menunav = document.getElementsByClassName('menunav');
for(let i=0;i<menunav.length;i++){
    menunav[i].addEventListener('click',()=>{
        const open = JSON.parse(toggleMenu.getAttribute('aria-expanded'));
        toggleMenu.setAttribute('aria-expanded', !open);
        menu.hidden = !menu.hidden;
        console.log(i);
    })
}


//Barre de Navigation Scrool to Top
const header = document.querySelector('header');
function scrolled(){
    const windowsHeight = window.innerHeight;
    currentScrool = document.body.scrollTop || document.documentElement.scrollTop;
    header.className = (currentScrool >= windowsHeight - header.offsetHeight) ? "fixed main-header p-3 z-40 bg-gray-200" : "main-header p-3 z-40 bg-gray-200";
}
addEventListener("scroll", scrolled, false);


//Modal Ouverture
const clik = document.getElementsByClassName('trans');
const modal = document.getElementsByClassName('modal');
const mod = document.querySelectorAll('.modal');
const closed = document.getElementsByClassName('closed');
const dark = document.getElementById('dark');
for(let i=0; i<clik.length; i++){
    clik[i].addEventListener('click',function(){
        console.log("indexx : "+i);
        modal[i].style.display = 'block';
        dark.style.display= 'block';
    })
}


//Fermeture Modale en dehors de celle-ci
window.onclick = function(e){
    if(e.target == dark){
        for(let i=0; i<modal.length; i++){
            modal[i].style.display = 'none';
            dark.style.display = 'none';
        }            
    }
}


//Fermeture Modale avec touche Echap
document.addEventListener('keydown',(e)=>{
    const nameTouch = e.key;
    if(nameTouch === 'Escape'){
        console.log('ctrl');
        for(let i=0; i<modal.length; i++){
            modal[i].style.display = 'none';
            dark.style.display = 'none';
        }
    }
})


//Fermeture Modale avec la croix
for(let i=0; i<closed.length; i++){
    closed[i].addEventListener('click',function(){
        console.log("index : "+i);
        modal[i].style.display = 'none';
        dark.style.display = 'none';
    })    
}


//Scroll à la selection via Navigation
document.getElementById('menucomp').addEventListener('click',()=>{
    var elem = document.getElementById('compe');
    var elementPosition = elem.offsetTop - 50;
    window.scrollTo({
        top: elementPosition,
        behavior: 'smooth',
    })
})
document.getElementById('menupres').addEventListener('click',()=>{
    var elem = document.getElementById('pres');
    var elementPosition = elem.offsetTop - 50;
    window.scrollTo({
        top: elementPosition,
        behavior: 'smooth',
    })
})
document.getElementById('menuportfo').addEventListener('click',()=>{
    var elem = document.getElementById('portfo');
    var elementPosition = elem.offsetTop - 50;
    window.scrollTo({
        top: elementPosition,
        behavior: 'smooth',
    })
})
document.getElementById('menucont').addEventListener('click',()=>{
    var elem = document.getElementById('cont');
    var elementPosition = elem.offsetTop - 50;
    window.scrollTo({
        top: elementPosition,
        behavior: 'smooth',
    })
})


//Fleche Scroll to Top
let btn = document.getElementById('arrow');
function goTopArrow(){
    if (window.scrollY > window.innerHeight){
        btn.style.display = 'block';
    }else{
        btn.style.display = 'none';
    }
}
btn.addEventListener('click', ()=>{
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: 'smooth',
    })
});
goTopArrow();
window.addEventListener('scroll', goTopArrow);


//Lancement des animations des barres d'xp au moment ou elles s'affichent
// var anim = document.querySelectorAll('.progress__bar');
// var compe = document.getElementById('compe');

window.onscroll=function(){
    var anim = document.querySelectorAll('.progress__bar');
    var compe = document.getElementById('compe');
    var elementPosition = compe.offsetTop - 60;
    var userPosition = document.querySelector("html").scrollTop;
    // console.log('position de l\'élément compétence : '+ elementPosition);
    // console.log('position de l\'utilisateur :' + userPosition);
    for(let i=0; i<anim.length; i++){
        if(userPosition >= elementPosition){
            anim[i].style.animationPlayState = 'running';
        }
    }
}

//Lancement des animations de la présentation au moment ou elle s'affiche
// var typing = document.querySelectorAll('.animpres');
// var pres = document.getElementById('pres');


// window.onscroll=function(){
//     var typing = document.querySelectorAll('.animpres');
//     var pres = document.getElementById('pres');
//     var elementPosition = pres.offsetTop - 60;
//     var userPosition = document.querySelector("html").scrollTop;
//     // console.log('position de l\'élément compétence : '+ elementPosition);
//     // console.log('position de l\'utilisateur :' + userPosition);
//     for(let i=0; i<typing.length; i++){
//         if(userPosition >= elementPosition){
//             typing[i].style.animationPlayState = 'running';
//             typing[i]
//         }
//     }
// }
