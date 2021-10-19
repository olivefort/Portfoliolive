//Forcing Scrool to Top au Refresh
// window.onload = function(){
//     window.scrollTo(0, 0);
// }


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
    })
}


//Barre de Navigation Scrool to Top
const header = document.querySelector('header');
function scrolled(){
    const windowsHeight = window.innerHeight;
    currentScrool = document.body.scrollTop || document.documentElement.scrollTop;
    header.className = (currentScrool >= windowsHeight - header.offsetHeight) ? "fix main-header p-3 z-40 bg-gray-200" : "main-header p-3 z-40 bg-gray-200";
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

let infoAnim = document.querySelector('.msgfix');
    let infoSend = document.getElementById('formulaire');
    // var contact = document.getElementById('cont');
    infoSend.addEventListener('submit', (e)=>{
        // infoAnim.style.animationPlayState = 'running'
        // window.scrollTo({
        //     top: 5000,
        //     left: 0,
        // })
        console.log('blah');
        // e.preventDefault();
        // alert('hello!');
    })
// Lancement des animations des barres d'xp au moment ou elles s'affichent
// var anim = document.querySelectorAll('.progress__bar');
// var compe = document.getElementById('compe');

window.onscroll=function(){
    var anim = document.querySelectorAll('.progress__bar');
    var compe = document.getElementById('compe');
    var compePosition = compe.offsetTop - 60;
    var userPosition = document.querySelector("html").scrollTop;
    for(let i=0; i<anim.length; i++){
        if(userPosition >= compePosition){
            anim[i].style.animationPlayState = 'running';
        }
    }
}

const divTexte = document.querySelector('.ff__5__area__txt');
const texte = divTexte.textContent;
let sto = 0;

//timer pour l'affichage de chaque lettre
let timer = 10;

//split du text
let txtSplit = texte.split('');

function createSpan(letter){
    const span = document.createElement('span');
    span.innerText = letter;
    return span;
};

function showLetter(i){
    divTexte.appendChild(createSpan(txtSplit[i]));
    if (i<txtSplit.length-1){
        sto = setTimeout(function(){ showLetter(++i);}, timer )
    };
}

function animateTxt(){
    // let delay = 50;
    // let delStart = 0;
    // let contents;
    // let letters;
    let elem = document.querySelector('.ff__5__area__txt');
    elem.textContent = '';
    elem.style.visibility = 'visible';

    //lancement du message
    showLetter(0);
}

function animform(){
    var animtxt = document.querySelectorAll('.ffanim');
    var cr = document.querySelectorAll('.cr');
    for(let i = 0; i < animtxt.length; i++){            
        animtxt[i].classList.toggle('is-in-viewport');            
    }
    for(let i = 0; i < cr.length; i++){            
            cr[i].style.animationPlayState = 'running';            
    }
    if(!sto){
        animateTxt();
    } 
} 

console.log(screen.height);
clickPres = document.getElementById('menupres').addEventListener('click', animform);

function check(){
    var userPosition = document.querySelector('html').scrollTop;
    console.log(userPosition);
    if((screen.height <=750 && userPosition >= 612) || (screen.height <= 850 && userPosition >= 714 ) || (screen.height > 850 && userPosition >= 816))
    {
        animform();
    }
}

window.addEventListener('wheel', check);






