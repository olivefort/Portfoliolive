<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/twstyles.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>PortFoliOlive</title>
</head>
<body id="body">
    <div class="dark h-full w-full" id="dark"></div> 
    <main id="main-content" class="container-front grid grid-cols-6">
        <section id="hdp" class="home-hero col-span-6 grid grid-cols-6">
            <div class="cont col-span-6 md:col-start-1 md:col-end-3 md:self-center">
                <div class="hero-content">
                    <h1 class="hero-title" id="hero-title" data-label="Olive Fort">Olivier Fort</h1>               
                </div>
                <h2>Développeur web et web mobile junior</h2>             
            </div>
            <div class="arowdown col-span-6">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </section>
        <section class="nav">
            <header id="head">
                <nav id="navbar" class="main-nav">
                    <button aria-expanded="false" aria-controls="main-menu" class="togle">Menu</button>                    
                    <ul id="main-menu" class="menu" hidden>
                        <li id="menupres" class="menunav text-base lg:text-xl"><a>Présentation</a></li>
                        <li id="menucomp" class="menunav text-base lg:text-xl"><a>Compétences</a></li>
                        <li id="menuportfo" class="menunav text-base lg:text-xl"><a>Portfolio</a></li>
                        <li id="menucont" class="menunav text-base lg:text-xl"><a>Contact</a></li>
                    </ul>                        
                    <div class="myname text-2xl lg:text-4xl">OLIVIER FORT</div>                    
                </nav>
            </header>
        </section>
        <!-- <section id="pres" class="presentation bg-white col-span-6 grid grid-cols-6 py-24 px-4">
            <h2 class="col-span-6 justify-self-center mb-2 text-3xl font-bold z-10 lg:text-4xl">Presentation</h2>
            <div class="border border-black border-solid col-span-6 w-20 justify-self-center my-10"></div>
            <div class="text-5xl text-gray-300 absolute font-bold text-opacity-50 text-center col-span-6 left-0 right-0">PRESENTATION</div>
            <div class="col-span-6 text-center text-xl">Bonjour, moi c'est Olivier, 40 ans de Tours, jeune diplomé en developpement web et web mobile.<br> Je suis passionné par le domaine informatique depuis de nombreuses années. Aujourd'hui mon intérêt se porte sur le développement web.<br> De nature sociable, je suis à l'écoute, autonome et organisé dans la réalisation de mes travaux et projets.</br> Pour télécharger ou voir mon CV c'est <a class="text-gray-500" href="CVOlivierFort2021.pdf" download>ici.</a></div>
        </section> -->
        <section id="pres" class="pres grid-cols-6">   
            <h2 class="col-span-6 text-3xl lg:text-4xl">Presentation</h2>
            <div class="line col-span-6"></div>
            <div class="bgtitle">PRESENTATION</div>         
            <div class="ff ff__1 col-span-6 col-start-2 sm:col-span-2 sm:col-start-2 lg:col-start-auto xl:col-start-2 xl:col-span-1 xl:justify-center">Nom : 
                <div class="ff__1__lab">
                    <span class="ffanim ffanim__n">Fort</span>
                    <div class="ff__1__lab__field w-24"></div>
                </div>
            </div>
            <div class="ff ff__1 col-span-6 col-start-2 sm:col-span-3 sm:col-start-4 lg:col-span-2 xl:justify-center">Prénom : 
                <div class="ff__1__lab">
                    <span class="ffanim ffanim__p">Olivier</span>
                    <div class="ff__1__lab__field w-24"></div>
                </div>
            </div>
            <div class="ff ff__1 col-span-6 col-start-2 sm:col-span-2 sm:col-start-2 lg:col-span-2 lg:col-start-auto xl:justify-center xl:col-span-1">Age : 
                <div class="ff__1__lab">
                    <span class="ffanim ffanim__a">40</span>
                    <div class="ff__1__lab__field w-10"></div>
                </div>
            </div>        
            <div class="ff ff__1 col-span-6 col-start-2 sm:col-span-3 sm:col-start-4 lg:col-span-2 lg:col-start-auto xl:col-start-2 xl:col-span-1 xl:justify-center">Localisation : 
                <div class="ff__1__lab">
                    <span class="ffanim ffanim__l">Tours</span>
                    <div class="ff__1__lab__field w-24"></div>
                </div>
            </div>
            <div class="ff ff__1 col-span-6 col-start-2 md:col-span-2 md:col-start-2 lg:col-start-auto xl:justify-center">Diplome : 
                <div class="ff__1__lab">
                    <span class="ffanim ffanim__d whitespace-nowrap">Développeur Web</span>
                    <div class="ff__1__lab__field w-40"></div>
                </div>
            </div>
            <div class="ff ff__1 col-span-6 col-start-2 md:col-span-3 md:col-start-4 lg:col-span-2 lg:col-start-auto xl:justify-center xl:col-span-1">Année d'obtention : 
                <div class="ff__1__lab">
                    <span class="ffanim ffanim__o">2020</span>
                    <div class="ff__1__lab__field w-14"></div>
                </div>
            </div>            
            <div class="ff ff__2 col-span-3 md:col-span-2 md:justify-center">
                <p class="ff__2__title">Vous êtes :</p>
                <div class="ff__2__lab ml-2 sm:ml-16 md:ml-8 md:mb-2 lg:ml-20 xl:ml-28 2xl:ml-44">
                    <div class="ff__2__lab__select rounded-full">
                        <span class="radio"></span>
                    </div>
                    <span>Développeur Junior</span>
                </div>
                <div class="ff__2__lab ml-2 sm:ml-16 md:ml-8 md:mb-2 lg:ml-20 xl:ml-28 2xl:ml-44">
                    <div class="ff__2__lab__select rounded-full"></div>
                    <span>Développeur Sénior</span>
                </div>
            </div>
            <div class="ff ff__2 col-span-3 mb-4 md:col-span-2 md:justify-center">
                <p class="ff__2__title">Vous êtes plutôt:</p>
                <div class="ff__2__lab ml-4 sm:ml-20 md:ml-14 md:mb-2 lg:ml-24 xl:ml-36 2xl:ml-52">
                    <div class="ff__2__lab__select">
                        <span class="cross cross__fe">X</span>
                    </div>
                    <span>Front-End</span>
                </div>
                <div class="ff__2__lab ml-4 sm:ml-20 md:ml-14 md:mb-2 lg:ml-24 xl:ml-36 2xl:ml-52">
                    <div class="ff__2__lab__select"></div>
                    <span>Back-End</span>
                </div>
                <div class="ff__2__lab ml-4 sm:ml-20 md:ml-14 md:mb-2 lg:ml-24 xl:ml-36 2xl:ml-52">
                    <div class="ff__2__lab__select">
                        <span class="cross cross__fs">X</span>
                    </div>
                    <span>Full-Stack</span>
                </div>
            </div>
            <div class="ff ff__3 col-span-6 mt-4 md:mt-2 md:col-span-2 md:justify-center">
                <p class="ff__3__title">Si vous deviez vous donner 5 qualitées :</p> 
                <div class="ff__3__label">
                    <span class="ffanim ffanim__q1">autonome</span>
                    <div class="ff__3__label__field"></div>
                </div>
                <div class="ff__3__label">
                    <span class="ffanim ffanim__q2">organisé</span>
                    <div class="ff__3__label__field"></div>
                </div>
                <div class="ff__3__label">
                    <span class="ffanim ffanim__q3">sociable</span>
                    <div class="ff__3__label__field"></div>
                </div>
                <div class="ff__3__label">
                    <span class="ffanim ffanim__q4 whitespace-nowrap">à l'écoute</span>
                    <div class="ff__3__label__field"></div>
                </div>
                <div class="ff__3__label">
                    <span class="ffanim ffanim__q5">curieux</span>
                    <div class="ff__3__label__field"></div>
                </div>
            </div> 
            <div class="ff ff__5 col-span-6">
                <p class="ff__5__title">Citer vos interêts en quelques lignes</p>
                <div class="ff__5__area md:mx-4 lg:mx-28 xl:mx-40">
                    <span class="ff__5__area__txt h-40 p-1 sm:p-2">Je suis passionné par le domaine informatique depuis de nombreuses années, je suis une personne très active dans différentes associations culturel et musical. Je suis un fan des chats et tout ce qui se rapproche de la culture japonaise. J'aime aussi les randonnées à pied ou à vélo.</span>
                    <div class="ff__5__area__field h-64 sm:h-36 lg:h-28 2xl:h-24"></div>
                </div>
            </div>
            <div class="ff ff__4 col-span-6">
                <p class="ff__4__title">Joindre votre CV :</p>
                <div class="ff__4__lab">
                    <span class="ffanim ffanim__cvpj">c:\CVOlivierFort2021.pdf</span> 
                    <div class="ff__4__lab__field"></div>
                </div>                               
                <div class="ff__4__title">Cliquez ici pour voir la pièce jointe :</div>
                <button class="ff__4__buton"><a class="" href="CVOlivierFort2021.pdf" download>Votre CV</a></button>                
            </div>
        </section>
        <section id="compe" class="compe grid-cols-6">
            <div class="cont col-span-6">
                <h2 class="col-span-6 text-3xl lg:text-4xl">Compétences</h2>
                <div class="line col-span-6"></div>
                <div class="bgtitle">COMPETENCES</div>
            </div>            
            <p class="compe__text">
                Moi et mon aisance sur certaines technologie :
            </p>           
            <div class="compe__xp grid-cols-6 sm:mx-4 lg:mx-10">
                <div class="compe__xp__part col-span-6 md:col-span-3">
                    <div class="compe__xp__part__tec">
                        <div class="compe__xp__part__tec__high">
                            <img class="imgtec" src="pics/html.png"/>
                            <span class="compe__xp__part__tec__high--text py-1 px-2 uppercase rounded-full text-red-600 bg-red-200">HTML</span>
                            <span class="compe__xp__part__tec__high--text text-red-600">90%</span>                                         
                        </div>
                        <div class="compe__xp__part__tec__progress bg-red-200">                    
                            <div style="width:90%" class="progress__bar progress__bar--html"></div>
                        </div>
                    </div>
                    <div class="compe__xp__part__tec">
                        <div class="compe__xp__part__tec__high">
                            <img class="imgtec" src="pics/css.png"/>  
                            <span class="compe__xp__part__tec__high--text py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200">CSS</span>
                            <span class="compe__xp__part__tec__high--text text-blue-600">85%</span>                                   
                        </div>
                        <div class="compe__xp__part__tec__progress bg-blue-200">                    
                            <div style="width:85%" class="progress__bar progress__bar--css"></div>
                        </div>
                    </div>
                    <div class="compe__xp__part__tec">
                        <div class="compe__xp__part__tec__high">
                            <img class="imgtec" src="pics/js.png"/>  
                            <span class="compe__xp__part__tec__high--text py-1 px-2 uppercase rounded-full text-yellow-500 bg-yellow-200">JS</span>
                            <span class="compe__xp__part__tec__high--text text-yellow-600">70%</span>
                        </div>
                        <div class="compe__xp__part__tec__progress bg-yellow-200">                    
                            <div style="width:70%" class="progress__bar progress__bar--js"></div>
                        </div>
                    </div>
                    <div class="compe__xp__part__tec">
                        <div class="compe__xp__part__tec__high">
                            <img class="w-12 h-8" src="pics/php.png"/>  
                            <span class="compe__xp__part__tec__high--text py-1 px-2 uppercase rounded-full text-purple-600 bg-purple-200">PHP</span>
                            <span class="compe__xp__part__tec__high--text text-purple-600">55%</span>
                        </div>
                        <div class="compe__xp__part__tec__progress bg-purple-200">                    
                            <div style="width:55%" class="progress__bar progress__bar--php"></div>
                        </div>
                    </div>
                    <div class="compe__xp__part__tec">
                        <div class="compe__xp__part__tec__high">
                            <img class="imgtec" src="pics/sass.png"/>  
                            <span class="compe__xp__part__tec__high--text py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200">SASS</span>
                            <span class="compe__xp__part__tec__high--text text-pink-600">60%</span>
                        </div>
                        <div class="compe__xp__part__tec__progress bg-pink-200">                    
                            <div style="width:60%" class="progress__bar progress__bar--sass"></div>
                        </div>
                    </div>                
                    <div class="compe__xp__part__tec">
                        <div class="compe__xp__part__tec__high">
                            <img class="imgtec" src="pics/wp.png"/>  
                            <span class="compe__xp__part__tec__high--text py-1 px-2 uppercase rounded-full text-blue-800 bg-indigo-200">WORDPRESS</span>
                            <span class="compe__xp__part__tec__high--text text-indigo-600">70%</span>
                        </div>
                        <div class="compe__xp__part__tec__progress bg-indigo-200">                    
                            <div style="width:70%" class="progress__bar progress__bar--wp"></div>
                        </div>
                    </div>
                </div>
                <div class="compe__xp__part col-span-6 md:col-span-3">
                    <div class="compe__xp__part__tec">
                        <div class="compe__xp__part__tec__high">
                            <img class="imgtec" src="pics/tw.png"/>  
                            <span class="compe__xp__part__tec__high--text py-1 px-2 uppercase rounded-full text-green-600 bg-green-200">TAILWIND</span>
                            <span class="compe__xp__part__tec__high--text text-green-600">70%</span>
                        </div>
                        <div class="compe__xp__part__tec__progress bg-green-200">                    
                            <div style="width:70%" class="progress__bar progress__bar--tw"></div>
                        </div>
                    </div>
                    <div class="compe__xp__part__tec">
                        <div class="compe__xp__part__tec__high">
                            <img class="w-12 h-8" src="pics/lav.png"/>  
                            <span class="compe__xp__part__tec__high--text py-1 px-2 uppercase rounded-full text-red-600 bg-red-200">LARAVEL</span>
                            <span class="compe__xp__part__tec__high--text text-red-600">55%</span>
                        </div>
                        <div class="compe__xp__part__tec__progress bg-red-200">                    
                            <div style="width:55%" class="progress__bar progress__bar--lav"></div>
                        </div>
                    </div>
                    <div class="compe__xp__part__tec">
                        <div class="compe__xp__part__tec__high">
                            <img class="imgtec" src="pics/rea.png"/>  
                            <span class="compe__xp__part__tec__high--text py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200">REACT</span>
                            <span class="compe__xp__part__tec__high--text text-blue-600">50%</span>
                        </div>
                        <div class="compe__xp__part__tec__progress bg-blue-200">                    
                            <div style="width:50%" class="progress__bar progress__bar--rea"></div>
                        </div>
                    </div>
                    <div class="compe__xp__part__tec">
                        <div class="compe__xp__part__tec__high">
                            <img class="imgtec" src="pics/vue.png"/>  
                            <span class="compe__xp__part__tec__high--text py-1 px-2 uppercase rounded-full text-green-600 bg-green-200">VUE</span>
                            <span class="compe__xp__part__tec__high--text text-green-600">40%</span>
                        </div>
                        <div class="compe__xp__part__tec__progress bg-green-200">                    
                            <div style="width:40%" class="progress__bar progress__bar--vue"></div>
                        </div>
                    </div>
                    <div class="compe__xp__part__tec">
                        <div class="compe__xp__part__tec__high">
                            <img class="w-12 h-8" src="pics/sql.png"/>  
                            <span class="compe__xp__part__tec__high--text py-1 px-2 uppercase rounded-full text-yellow-600 bg-yellow-200">MYSQL</span>
                            <span class="compe__xp__part__tec__high--text text-yellow-600">80%</span>
                        </div>
                        <div class="compe__xp__part__tec__progress bg-yellow-200">                    
                            <div style="width:80%" class="progress__bar progress__bar--sql"></div>
                        </div>
                    </div>
                    <div class="compe__xp__part__tec">
                        <div class="compe__xp__part__tec__high">
                            <img class="imgtec" src="pics/lag.png"/>  
                            <span class="compe__xp__part__tec__high--text py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200">LARAGON</span>
                            <span class="compe__xp__part__tec__high--text text-blue-600">40%</span>
                        </div>
                        <div class="compe__xp__part__tec__progress bg-blue-200">                    
                            <div style="width:40%" class="progress__bar progress__bar--lag"></div>
                        </div>
                    </div>
                </div>
            </div>            
        </section>
        <section class="md1 col-span-6 h-64 xl:h-80 2xl:h-96">
        </section>
        <section id="portfo" class="port col-span-6 grid-cols-12">
            <h2 class="col-span-12 text-3xl lg:text-4xl">Portfolio</h2>
            <div class="line col-span-12"></div>
            <div class="bgtitle">PORTFOLIO</div>
            <div class="port__text col-span-12">
                <p>Voici les principaux travaux que j'ai pu réaliser avant, pendant, et après ma formation en 2020.</p>
                <p>Les informations concernant la réalisation de ce portfolio sont indiqué dans la partie "à propos" en bas de page.</p>                
            </div>                        
            <div class="pf__cv col-span-12 sm:col-span-6 lg:col-span-3 mx-2 my-2 sm:mx-8 sm:my-4">
                <h3 class="pf__cv--title h-14 sm:h-8 lg:text-2xl sm:mb-4">CV</h3>
                <img class="pf__cv--img trans" src="pics/vanilla-cv.png"/>     
            </div>
            <div class="pf__st col-span-12 sm:col-span-6 lg:col-span-3 mx-2 sm:mx-8 my-4">
                <h3 class="pf__cv--title h-14 sm:h-8 lg:text-2xl sm:mb-4">Studiz</h3>
                <img class="pf__st--img trans" src="pics/react-studiz.png"/>                       
            </div>                
            <div class="pf__sss col-span-12 sm:col-span-6 lg:col-span-3 mx-2 sm:mx-8 my-4">
                <h3 class="pf__cv--title h-14 sm:h-8 lg:text-2xl sm:mb-4">Saint Seiya Sanctuary</h3>
                <img class="pf__sss--img trans" src="pics/wp-sss.png"/>                               
            </div>
            <div class="pf__dw col-span-12 sm:col-span-6 lg:col-span-3 mx-2 sm:mx-8 my-4">
                <h3 class="pf__cv--title h-14 sm:h-8 lg:text-2xl sm:mb-4">DWWM 2020-1</h3>
                <img class="pf__dw--img trans" src="pics/wp-dwwm.png"/>                                                       
                </div>
            </div>            
            <div class="text-xl col-span-12 text-center justify-center items-center my-6">
                <p>Vous trouverez dans mon Github d'autres réalisations de type application que j'ai développé</p>
            </div>
            <div class="pf__gt col-span-12 sm:col-start-5 sm:col-span-4 lg:col-start-6 lg:col-span-2 flex flex-col items-center">                
                <a href="https://github.com/olivefort" target="_blank"><img class="pf__gt--img gith" src="pics/gt.png"/></a>                                           
            </div>                       
        </section>
        <section>
            <div class="modal hidden z-30">
                <div class="flex flex-col items-center justify-center bg-white p-2 sm:p-4">
                    <div class="closed cursor-pointer flex flex-row justify-end w-full">
                        <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="30px" height="30px"><path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z"/></svg>
                    </div>
                    <div class="flex flex-col">
                        <div class="modTitle flex flex-row justify-center items-center">
                            <h3 class="text-xl sm:text-2xl text-center font-bold -mt-6 sm:-mt-4 md:-mt-2">Mon CV<h3>                        
                        </div>                    
                        <div class="border-t border-solid border-gray-200 h-1 overflow-visible after m-1 sm:m-2 md:m-3"></div>
                            <div class="flex flex-col justify-center items-center md:flex-row">
                                <div class="flex flex-col justify-between items-center md:w-1/2">                                        
                                    <img class="my-1 sm:my-2 imgmod" src="pics/cv-1.png"/>
                                    <h4 class="text-xl md:text-2xl font-semibold sm:mb-2">Production</h4> 
                                    <div class="flex flex-col items-start justify-center">                                
                                        <ul class="text-xs sm:text-base md:text-lg">
                                            <li class="list-disc">HTML/CSS/JS</li>
                                            <li class="list-disc">Site responsive</li>
                                            <li class="list-disc">Github</li>
                                        </ul>
                                    </div>                        
                                </div>
                                <div class="flex flex-col justify-between items-center md:w-1/2">                                    
                                <img class="my-1 sm:my-2 imgmod" src="pics/cv-2.png"/>
                                <h4 class="text-xl md:text-2xl font-semibold sm:mb-2">Infos</h4>
                                <div class="text-left text-xs sm:text-base sm:px-4 md:text-lg">
                                    Petit projet d'un CV centré sur le développement web en HTML/CSS et quelques lignes de JS réalisé avant ma formation DWWM de 2020 consultable via Github Page.                                    
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center bg-gray-200 mt-2 sm:mt-4 p-1 md:p-2 hover:bg-gray-400 cursor-pointer">
                            <a href="https://olivefort.github.io/CV/" target="_blank" class="text-base md:text-lg">Visiter le site</a>
                        </div>
                    </div>
                </div>            
            </div>
            <div class="modal hidden z-30">
                <div class="flex flex-col items-center justify-center bg-white p-2 sm:p-4">
                    <div class="closed cursor-pointer flex flex-row justify-end w-full">
                        <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="30px" height="30px"><path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z"/></svg>
                    </div>
                    <div class="flex flex-col">
                        <div class="modTitle flex flex-row justify-center items-center">
                            <h3 class="text-xl sm:text-2xl text-center font-bold -mt-6 sm:-mt-4 md:-mt-2">STUDIZ<h3>                        
                        </div>                    
                        <div class="border-t border-solid border-gray-200 h-1 overflow-visible after m-1 sm:m-2 md:m-3"></div>
                            <div class="flex flex-col justify-center items-center md:flex-row">
                                <div class="flex flex-col justify-between items-center md:w-1/2">                                        
                                    <img class="my-1 sm:my-2 imgmod" src="pics/react-1.png"/>
                                    <h4 class="text-xl md:text-2xl font-semibold sm:mb-2">Production</h4> 
                                    <div class="flex flex-col items-start justify-center">                                
                                        <ul class="text-xs sm:text-base md:text-lg">
                                            <li class="list-disc">REACT/BOOTSTRAP</li>
                                            <li class="list-disc">Site responsive</li>
                                            <li class="list-disc">Github</li>
                                        </ul>
                                    </div>                        
                                </div>
                                <div class="flex flex-col justify-between items-center md:w-1/2">                                    
                                <img class="my-1 sm:my-2 imgmod" src="pics/react-2.png"/>
                                <h4 class="text-xl md:text-2xl font-semibold sm:mb-2">Infos</h4>
                                <div class="text-left text-xs sm:text-base sm:px-4 md:text-lg">
                                Studiz est un projet de développement d'une plateforme d'échange pour les étudiants, ma participation bénévole est orienté vers le front-end. Ce projet est encore en cours de réalisation.                               
                                </div>
                            </div>
                        </div>
                        <!-- <div class="flex flex-col justify-center items-center bg-gray-200 mt-2 sm:mt-4 p-1 md:p-2 hover:bg-gray-400 cursor-pointer">
                            <a href="https://olivefort.github.io/CV/" target="_blank" class="text-base md:text-lg">Visiter le site</a>
                        </div> -->
                    </div>
                </div>            
            </div>
            <div class="modal hidden z-30">
                <div class="flex flex-col items-center justify-center bg-white p-2 sm:p-4">
                    <div class="closed cursor-pointer flex flex-row justify-end w-full">
                        <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="30px" height="30px"><path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z"/></svg>
                    </div>
                    <div class="flex flex-col">
                        <div class="modTitle flex flex-row justify-center items-center">
                            <h3 class="text-xl sm:text-2xl text-center font-bold -mt-6 sm:-mt-4 md:-mt-2">SAINT SEIYA SANCTUARY<h3>                        
                        </div>                    
                        <div class="border-t border-solid border-gray-200 h-1 overflow-visible after m-1 sm:m-2 md:m-3"></div>
                            <div class="flex flex-col justify-center items-center md:flex-row">
                                <div class="flex flex-col justify-between items-center md:w-1/2">                                        
                                    <img class="my-1 sm:my-2 imgmod" src="pics/wp-1.png"/>
                                    <h4 class="text-xl md:text-2xl font-semibold sm:mb-2">Production</h4> 
                                    <div class="flex flex-col items-start justify-center">                                
                                        <ul class="text-xs sm:text-base md:text-lg">
                                            <li class="list-disc">WORDPRESS/PHP/CSS/HTML/JS</li>
                                            <li class="list-disc">Site responsive</li>
                                            <li class="list-disc">Github</li>
                                        </ul>
                                    </div>                        
                                </div>
                                <div class="flex flex-col justify-between items-center md:w-1/2">                                    
                                <img class="my-1 sm:my-2 imgmod" src="pics/wp-2.png"/>
                                <h4 class="text-xl md:text-2xl font-semibold sm:mb-2">Infos</h4>
                                <div class="text-left text-xs sm:text-base sm:px-4 md:text-lg">
                                Saint Seiya Sanctuary est mon premier projet personnel à grande échelle. Réalisé sur Wordpress, ce premier site a été réaliser sur plusieurs mois.
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center bg-gray-200 mt-2 sm:mt-4 p-1 md:p-2 hover:bg-gray-400 cursor-pointer">
                            <a href="http://www.saintseiyasanctuary.fr/" target="_blank" class="text-base md:text-lg">Visiter le site</a>
                        </div>
                    </div>
                </div>            
            </div>
            <div class="modal hidden z-30">
                <div class="flex flex-col items-center justify-center bg-white p-2 sm:p-4">
                    <div class="closed cursor-pointer flex flex-row justify-end w-full">
                        <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="30px" height="30px"><path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z"/></svg>
                    </div>
                    <div class="flex flex-col">
                        <div class="modTitle flex flex-row justify-center items-center">
                            <h3 class="text-xl sm:text-2xl text-center font-bold -mt-6 sm:-mt-4 md:-mt-2">DWWM 2020-1<h3>                        
                        </div>                    
                        <div class="border-t border-solid border-gray-200 h-1 overflow-visible after m-1 sm:m-2 md:m-3"></div>
                            <div class="flex flex-col justify-center items-center md:flex-row">
                                <div class="flex flex-col justify-between items-center md:w-1/2">                                        
                                    <img class="my-1 sm:my-2 imgmod" src="pics/wp-3.png"/>
                                    <h4 class="text-xl md:text-2xl font-semibold sm:mb-2">Production</h4> 
                                    <div class="flex flex-col items-start justify-center">                                
                                        <ul class="text-xs sm:text-base md:text-lg">
                                            <li class="list-disc">WORDPRESS/PHP/HTML/CSS/JS</li>
                                            <li class="list-disc">Site responsive</li>
                                            <li class="list-disc">Github</li>
                                        </ul>
                                    </div>                        
                                </div>
                                <div class="flex flex-col justify-between items-center md:w-1/2">                                    
                                <img class="my-1 sm:my-2 imgmod" src="pics/wp-4.png"/>
                                <h4 class="text-xl md:text-2xl font-semibold sm:mb-2">Infos</h4>
                                <div class="text-left text-xs sm:text-base sm:px-4 md:text-lg">
                                Ce petit site a été développé sur Wordpress pendant ma formation pour une évaluation. Ce site n'étant pas en ligne, il est néanmoins stocké dans mon Github.
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center bg-gray-200 mt-2 sm:mt-4 p-1 md:p-2 hover:bg-gray-400 cursor-pointer">
                            <a href="https://github.com/olivefort/Dwwm20201/tree/main/wp-content/themes/dwwm2020"" target="_blank" class="text-base md:text-lg">Visiter le Github</a>
                        </div>
                    </div>
                </div>            
            </div>
            <div class="modal hidden z-30">
                <div class="flex flex-col items-center justify-center bg-white p-2 sm:p-4">
                    <div class="closed cursor-pointer flex flex-row justify-end w-full">
                        <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="30px" height="30px"><path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z"/></svg>
                    </div>
                    <div class="flex flex-col">
                        <div class="modTitle flex flex-row justify-center items-center">
                            <h3 class="text-xl sm:text-2xl text-center font-bold -mt-6 sm:-mt-4 md:-mt-2">A PROPOS<h3>                        
                        </div>                    
                        <div class="border-t border-solid border-gray-200 h-1 overflow-visible after m-2"></div>
                            <div class="flex flex-col justify-center items-center lg:flex-row">
                                <p>Portfolio de Olivier Fort</br>
                                Version 1.1</br>
                                Technologies utilisées : </br>
                                HTML / PHP / SCSS / JS / TAILWIND / GITHUB</p>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>           
        </section>
        <section class="md2 col-span-6 h-64 xl:h-80 2xl:h-96">
        </section>
        <section id="cont" class="contact grid-cols-6">
            <h2 class="col-span-6 text-3xl lg:text-4xl">Contact</h2>
            <div class="line col-span-6"></div>
            <div class="bgtitle">CONTACT</div>
            <?php
                if(isset($_POST['btnsubmit'])){
                    if(!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['sujet']) AND !empty($_POST['message'])){
                        $header="MIMe-version: 1.0\r\n";
                        $header.='From:"donuts.com"<support@donuts.com>'."\n";
                        $header.='Content-Type:text/html; charset="utf-8"'."\n";
                        $header.='Content-Transfer-Encoding: 8bit';
                        $message='
                        <html>
                            <body>
                                <div align="center">
                                    Message reçu du portfolio !                             
                                    <br />
                                    <u>Prenom de l\'expediteur : </u> '.$_POST['prenom'].'<br /> 
                                    <u>Nom de l\'expediteur : </u> '.$_POST['nom'].'<br /> 
                                    <u>E-Mail de l\'expediteur : </u> '.$_POST['mail'].'<br /> 
                                    <u>Sujet de l\'expediteur : </u> '.$_POST['sujet'].'<br /> 
                                    <u>Message de l\'expediteur : </u> '.nl2br($_POST['message']).'<br /> 
                                </div>
                            </body>
                        </html>';
                        mail("homer.simpson@gmail.com", "des donuts !", $message, $header);  
                        $msg="Votre mail a bien été envoyé !";
                        header("location:index.php");
                        exit();
                    }else{
                        $msg="Merci de remplir tout les champs !";
                    }
                }
            ?>
            <form name="contact" method="POST" action="" class="contact__form col-start-2 col-end-6">
                <div class="contact__form">
                    <div class="contact__form__part">
                        <label>Prénom</label>
                        <input name="prenom" id="prenom" type="text" class="contact__form__part__input">
                    </div>
                    <div class="contact__form__part">
                        <label>Nom</label>
                        <input name="nom" id="nom" type="text" class="contact__form__part__input">
                    </div>
                </div>
                <div class="contact__form">
                    <div class="contact__form__part">
                        <label>E-Mail</label>
                        <input name="mail" id="mail" type="email" class="contact__form__part__input">
                    </div>
                    <div class="contact__form__part">
                        <label>Sujet</label>
                        <input name="sujet" id="sujet" type="text" class="contact__form__part__input">
                    </div>
                </div>
                <div class="contact__form__part">
                    <label>Votre message</label>
                    <textarea name="message" id="message" class="contact__form__part__input contact__form__part__input--texta"></textarea>
                </div>
                <div>
                    <button id="submit" name="btnsubmit" type="submit" value="Envoyer" class="contact__form__part__input w-full py-2 my-2 hover:bg-gray-300">Envoyer</button>
                </div>
                <?php if(isset($msg)){echo $msg;}?>
            </form>            
        </section>
    </main>
    <div id="arrow" class="arrow z-40 cursor-pointer">
        <svg width="50px" height="50px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title>ionicons-v5-a</title><polyline points="112 244 256 100 400 244" style="fill:none;stroke:#9ca3af;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/><line x1="256" y1="120" x2="256" y2="412" style="fill:none;stroke:#9ca3af;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/></svg>
    </div>  
    <footer class="foo grid grid-cols-6 bg-gray-100">
        <nav class="footer-nav col-span-6 flex flex-col items-center">
            <ul class="flex flex-row items-center h-8 text-sm">
                <li class="px-4 trans hover:underline" id="app"><p class="cursor-pointer">A Propos</p></li>
                <li class="border-solid border-r-2 border-black h-4"></li>
                <li class="px-4 hover:underline"><a href="https://www.linkedin.com/in/olivier-fort/" target="_blank">Linkedin</a></li>
                <li class="border-solid border-r-2 border-black h-4"></li>
                <li class="px-4 hover:underline"><a href="https://github.com/olivefort" target="_blank">Github</a></li>
                <li class="border-solid border-r-2 border-black h-4"></li>
                <li class="px-4 hover:underline"><a href="mailto:olive.fort@gmail.com" target="_blank">Mail</a></li>
            </ul>
            <p class="cop text-xs"> © 2021 Olivier Fort, Tous droits réservés</p>
        </nav>
    </footer>    
</body>
<script src="script.js"></script>
</html>