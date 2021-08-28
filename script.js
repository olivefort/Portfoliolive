//Burger Menu

const toggleMenu = document.querySelector('.main-nav button');
const menu = document.querySelector('#main-menu');

toggleMenu.addEventListener('click', function() {
  const open = JSON.parse(toggleMenu.getAttribute('aria-expanded'));
  toggleMenu.setAttribute('aria-expanded', !open);
  menu.hidden = !menu.hidden;
});

// Hero
const title = document.getElementById('hero-title');
const arrayTitle = ['O','L','I','V','I','E','R',' ','F','O','R','T']
// title.textContent = 'Olivier Fort';
// for(i=0;i<arrayTitle.length;i++){

//         title.textContent += arrayTitle[i];

// }

// const txt = title.dataset.label;
// let i = 0;

// function showLetters(){
//     let timeOut;
//     if(i<txt.length){
//         title.textContent += `<span>${txt[i]}</span>`;
//         timeOut = setTimeout(showLetters,200)
//         i++
//     }
//     else{
//         clearTimeout(timeOut);
//     }
// }

// showLetters();

//Nav Scrool to Top
const header = document.querySelector('header');

function scrolled(){
    const windowsHeight = window.innerHeight;
    currentScrool = document.body.scrollTop || document.documentElement.scrollTop;

    header.className = (currentScrool >= windowsHeight - header.offsetHeight) ? "fixed main-header p-3 z-40 bg-gray-200" : "main-header p-3 z-40 bg-gray-200";
}

addEventListener("scroll", scrolled, false);

//Modal
const clik = document.getElementsByClassName('trans');
const modal = document.getElementsByClassName('modal');
// const modalapp = document.getElementById('app');
// const mod = document.getElementById('modap');
const closed = document.getElementsByClassName('closed');
const dark = document.getElementById('dark');



for(let i=0; i<clik.length; i++){
    clik[i].addEventListener('click',function(){
        console.log("indexx : "+i);
        modal[i].style.display = 'block';
        dark.style.display= 'block';
    })    
}


for(let i=0; i<closed.length; i++){
    closed[i].addEventListener('click',function(){
        console.log("index : "+i);
        modal[i].style.display = 'none';
        dark.style.display = 'none';
        menu.hidden;
    })    
}

// modalapp.addEventListener('click',function(){
//     mod.style.display = 'block';
//     dark.style.display= 'block';
// })

// closed.addEventListener('click',function(){
//     mod.style.display = 'none';
//     dark.style.display = 'none';
// })

// fleche haut de page
function hdp(){
	let posY = window.scrollY;
	let btn = document.getElementById('arrow');

    btn.addEventListener('click', ()=> {
        window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth',
        })
    })

	if (posY > 1000){
		btn.style.display = 'block';
	}else{
		btn.style.display = 'none';
	}
}

// function launch(){
//     let posY = window.scrollY;
//     let reper = document.getElementById('compe');
//     if (posY == reper.window){

//     }
// }

document.getElementById('body').addEventListener('scroll', e => {
    console.log(e.target.scrollTop)
})