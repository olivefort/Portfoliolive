<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/twstyles.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>PortFoliOlive</title>
</head>
<body id="body" class="bg-gray-200">
    <div class="h-full w-full bg-black bg-opacity-50 z-20 hidden fixed" id="dark"></div> 
    <div class="bg top-80 md:top-20"><img src="pics/mydesk.png"/></div>   
    <main id="main-content" class="container-front grid grid-cols-6">
        <section id="hdp" class="home-hero col-span-6 grid grid-cols-6">
            <div class="cont col-span-6 md:col-start-1 md:col-end-3 md:self-center">
                <div class="hero-content">
                    <h1 class="hero-title" id="hero-title" data-label="Olive Fort">Olivier Fort</h1>               
                </div>
                <h2 class="hero-title">Développeur web et web mobile junior</h2>             
            </div>
            <div class="arowdown col-span-6">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </section>
        <section class="navigation col-span-6">
            <header id="head">
                <nav id="navbar" class="main-nav flex justify-between items-center flex-row">
                    <button aria-expanded="false" aria-controls="main-menu" class="togle">Menu</button>                    
                    <ul id="main-menu" class="menu bg-gray-200 text-center" hidden>
                        <li id="menupres" class="menunav text-base lg:text-xl"><a>Présentation</a></li>
                        <li id="menucomp" class="menunav text-base lg:text-xl"><a>Compétences</a></li>
                        <li id="menuportfo" class="menunav text-base lg:text-xl"><a>Portfolio</a></li>
                        <li id="menucont" class="menunav text-base lg:text-xl"><a>Contact</a></li>
                    </ul>                        
                    <div class="text-2xl lg:text-4xl font-bold">OLIVIER FORT</div>                    
                </nav>
            </header>
        </section>
        <!-- <section id="pres" class="presentation bg-white col-span-6 grid grid-cols-6 py-24 px-4">
            <h2 class="col-span-6 justify-self-center mb-2 text-3xl font-bold z-10 lg:text-4xl">Presentation</h2>
            <div class="border border-black border-solid col-span-6 w-20 justify-self-center my-10"></div>
            <div class="text-5xl text-gray-300 absolute font-bold text-opacity-50 text-center col-span-6 left-0 right-0">PRESENTATION</div>
            <div class="col-span-6 text-center text-xl">Bonjour, moi c'est Olivier, 40 ans de Tours, jeune diplomé en developpement web et web mobile.<br> Je suis passionné par le domaine informatique depuis de nombreuses années. Aujourd'hui mon intérêt se porte sur le développement web.<br> De nature sociable, je suis à l'écoute, autonome et organisé dans la réalisation de mes travaux et projets.</br> Pour télécharger ou voir mon CV c'est <a class="text-gray-500" href="CVOlivierFort2021.pdf" download>ici.</a></div>
        </section> -->
        <section id="pres" class="bg-white col-span-6 grid grid-cols-6 py-24 px-4">   
            <h2 class="col-span-6 justify-self-center mb-2 text-3xl font-bold z-10 lg:text-4xl">Presentation</h2>
            <div class="border border-black border-solid col-span-6 w-20 justify-self-center my-10"></div>
            <div class="text-5xl text-gray-300 absolute font-bold text-opacity-50 text-center col-span-6 left-0 right-0">PRESENTATION</div>         
            <div class="flex flex-row col-span-6 col-start-2 my-1 whitespace-nowrap">Nom : 
                <span class="ff ff__n">Fort</span>
                <div class="cn border border-solid border-gray-300 bg-gray-300 rounded h-6 w-24 relative"></div>
            </div>
            <div class="flex flex-row col-span-6 col-start-2 my-1 whitespace-nowrap">Prénom : 
                <span class="ff ff__p">Olivier</span>
                <div class="cp border border-solid border-gray-300 bg-gray-300 rounded h-6 w-24 relative"></div>
            </div>
            <div class="flex flex-row col-span-6 col-start-2 my-1 whitespace-nowrap">Age : 
                <span class="ff ff__a">40</span>
                <div class="ca border border-solid border-gray-300 bg-gray-300 rounded h-6 w-10 relative"></div>
            </div>        
            <div class="flex flex-row col-span-6 col-start-2 my-1 whitespace-nowrap">Localisation : 
                <span class="ff ff__l">Tours</span>
                <div class="cl border border-solid border-gray-300 bg-gray-300 rounded h-6 w-24 relative"></div>
            </div>
            <div class="flex flex-row col-span-6 col-start-2 my-1 whitespace-nowrap">Diplome : 
                <span class="ff ff__d whitespace-nowrap">Développeur Web</span>
                <div class="cd border border-solid border-gray-300 bg-gray-300 rounded h-6 w-40 relative"></div>
            </div>
            <div class="flex flex-row whitespace-nowrap col-span-6 col-start-2 my-1">Année d'obtention : 
                <span class="ff ff__o">2020</span>
                <div class="co border border-solid border-gray-300 bg-gray-300 rounded h-6 w-20 relative"></div>
            </div>            
            <div class="flex flex-col col-span-3">
                <p class="text-center">Vous êtes :</p>
                <div class="flex flex-row items-center text-center">
                    <div class="border border-solid border-black h-4 w-4 rounded-full flex flex-row items-center justify-center mx-2">
                        <span class="radio"></span>
                    </div>
                    <span>Développeur Junior</span>
                </div>
                <div class="flex flex-row items-center text-center">
                    <div class="border border-solid border-black h-4 w-4 rounded-full flex flex-row items-center justify-center mx-2"></div>
                    <span>Développeur Sénior</span>
                </div>
            </div>
            <div class="flex flex-col col-span-3">
                <p class="text-center">Vous êtes plutôt:</p>
                <div class="flex flex-row items-center text-center">
                    <div class="border border-solid border-black h-4 w-4 flex flex-row items-center justify-center mx-2">
                        <span class="cross cross__fe">X</span>
                    </div>
                    <span>Front-End</span>
                </div>
                <div class="flex flex-row items-center text-center">
                    <div class="border border-solid border-black h-4 w-4 flex flex-row items-center justify-center mx-2"></div>
                    <span>Back-End</span>
                </div>
                <div class="flex flex-row items-center text-center">
                    <div class="border border-solid border-black h-4 w-4 flex flex-row items-center justify-center mx-2">
                        <span class="cross cross__fs">X</span>
                    </div>
                    <span>Full-Stack</span>
                </div>
            </div>
            <div class="col-span-6">
                <p class="text-center">Si vous deviez vous donner 5 qualitées :</p> 
                <div class="flex flex-row m-1 ml-14">
                    <span class="ff ff__q1">autonome</span>
                    <div class="border border-solid border-gray-300 bg-gray-300 rounded h-6 w-28 relative -left-20"></div>
                </div>
                <div class="flex flex-row m-1 ml-14">
                    <span class="ff ff__q2">organisé</span>
                    <div class="border border-solid border-gray-300 bg-gray-300 rounded h-6 w-28 relative -left-20"></div>
                </div>
                <div class="flex flex-row m-1 ml-14">
                    <span class="ff ff__q3">sociable</span>
                    <div class="border border-solid border-gray-300 bg-gray-300 rounded h-6 w-28 relative -left-20"></div>
                </div>
                <div class="flex flex-row m-1 ml-14">
                    <span class="ff ff__q4 whitespace-nowrap">à l'écoute</span>
                    <div class="cq4 border border-solid border-gray-300 bg-gray-300 rounded h-6 w-28 relative"></div>
                </div>
                <div class="flex flex-row m-1 ml-14">
                    <span class="ff ff__q5">curieux</span>
                    <div class="cq5 border border-solid border-gray-300 bg-gray-300 rounded h-6 w-28 relative -left-16"></div>
                </div>
            </div> 
            <!-- <div class="flex flex-col col-span-6">
                <p class="text-center">Citer vos interêts en quelques lignes</p>
                <div class="flex flex-row ml-14">
                    <span class="ff ff__area">Je suis passionné par le domaine informatique depuis de nombreuses années, je suis une personne très active dans différentes associations culturel et musical, je suis un fan des chats et tout ce qui se rapproche de la culture japonaise. J'aime aussi les randonnées à pied ou à vélo</span>
                    <div class="border border-solid border-gray-300 bg-gray-300 rounded h-40 w-40 "></div>
                </div>
            </div> -->
            <div class="flex flex-col items-center col-span-6">
                <p class="text-center mb-1">Joindre votre CV :</p>
                <div class="flex flex-col">
                    <span class="ff ff__cvpj">c:\CVOlivierFort2021.pdf</span> 
                    <div class="cvpj border border-solid border-gray-300 bg-gray-300 rounded h-6 w-64 relative -top-6"></div>
                </div>                               
                <div class="mb-1">Cliquez ici pour voir la pièce jointe :</div>
                <button class="border border-solid border-gray-500 bg-gray-300 rounded h-6 w-36"><a class="" href="CVOlivierFort2021.pdf" download>Votre CV</a></button>                
            </div>
        </section>
        <section id="compe" class="competence grid grid-cols-6 col-span-6 bg-gray-100 py-24 px-4">
            <div class="cont col-span-6">
                <h2 class="col-span-6 justify-self-center mb-2 text-3xl font-bold z-10 lg:text-4xl">Compétences</h2>
                <div class="border border-black border-solid col-span-6 w-20 justify-self-center my-10"></div>
                <div class="text-5xl text-gray-300 absolute font-bold text-opacity-50 text-center col-span-6 left-0 right-0">COMPETENCES</div>
            </div>
            <div class="col-span-6 grid grid-cols-6 sm:mx-4 lg:mx-10">
                <div class="col-span-3">
                    <div class="relative pt-1 mx-4">
                        <div class="flex mb-2 items-center justify-between">
                            <img class="w-8 h-8" src="pics/html.png"/>  
                            <div>
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-red-600 bg-red-200">HTML</span>
                            </div>
                            <div class="text-right">
                                <span class="text-xs font-semibold inline-block text-red-600">90%</span>
                            </div>                    
                        </div>
                        <div class="progress overflow-hidden h-5 mb-4 text-xs flex rounded bg-red-200">                    
                            <div style="width:90%" class="progress__bar progress__bar--html shadow-none flex flex-col text-center whitespace-nowrap justify-center"></div>
                        </div>
                    </div>
                    <div class="relative pt-1 mx-4">
                        <div class="flex mb-2 items-center justify-between">
                            <img class="w-8 h-8" src="pics/css.png"/>  
                            <div>
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200">CSS</span>
                            </div>
                            <div class="text-right">
                                <span class="text-xs font-semibold inline-block text-blue-600">85%</span>
                            </div>                    
                        </div>
                        <div class="progress overflow-hidden h-5 mb-4 text-xs flex rounded bg-blue-200">                    
                            <div style="width:85%" class="progress__bar progress__bar--css shadow-none flex flex-col text-center whitespace-nowrap justify-center"></div>
                        </div>
                    </div>
                    <div class="relative pt-1 mx-4">
                        <div class="flex mb-2 items-center justify-between">
                            <img class="w-8 h-8" src="pics/js.png"/>  
                            <div>
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-yellow-500 bg-yellow-200">JS</span>
                            </div>
                            <div class="text-right">
                                <span class="text-xs font-semibold inline-block text-yellow-600">70%</span>
                            </div>                    
                        </div>
                        <div class="progress overflow-hidden h-5 mb-4 text-xs flex rounded bg-yellow-200">                    
                            <div style="width:70%" class="progress__bar progress__bar--js shadow-none flex flex-col text-center whitespace-nowrap justify-center"></div>
                        </div>
                    </div>
                    <div class="relative pt-1 mx-4">
                        <div class="flex mb-2 items-center justify-between">
                            <img class="w-12 h-8" src="pics/php.png"/>  
                            <div>
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-purple-600 bg-purple-200">PHP</span>
                            </div>
                            <div class="text-right">
                                <span class="text-xs font-semibold inline-block text-purple-600">55%</span>
                            </div>                    
                        </div>
                        <div class="progress overflow-hidden h-5 mb-4 text-xs flex rounded bg-purple-200">                    
                            <div style="width:55%" class="progress__bar progress__bar--php shadow-none flex flex-col text-center whitespace-nowrap justify-center"></div>
                        </div>
                    </div>
                    <div class="relative pt-1 mx-4">
                        <div class="flex mb-2 items-center justify-between">
                            <img class="w-8 h-8" src="pics/sass.png"/>  
                            <div>
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200">SASS</span>
                            </div>
                            <div class="text-right">
                                <span class="text-xs font-semibold inline-block text-pink-600">60%</span>
                            </div>                    
                        </div>
                        <div class="progress overflow-hidden h-5 mb-4 text-xs flex rounded bg-pink-200">                    
                            <div style="width:60%" class="progress__bar progress__bar--sass shadow-none flex flex-col text-center whitespace-nowrap justify-center"></div>
                        </div>
                    </div>                
                    <div class="relative pt-1 mx-4">
                        <div class="flex mb-2 items-center justify-between">
                            <img class="w-8 h-8" src="pics/wp.png"/>  
                            <div>
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-800 bg-indigo-200">WORDPRESS</span>
                            </div>
                            <div class="text-right">
                                <span class="text-xs font-semibold inline-block text-indigo-600">70%</span>
                            </div>                    
                        </div>
                        <div class="progress overflow-hidden h-5 mb-4 text-xs flex rounded bg-indigo-200">                    
                            <div style="width:70%" class="progress__bar progress__bar--wp shadow-none flex flex-col text-center whitespace-nowrap justify-center"></div>
                        </div>
                    </div>
                </div>
                <div class="col-span-3">
                    <div class="relative pt-1 mx-4">
                        <div class="flex mb-2 items-center justify-between">
                            <img class="w-8 h-8" src="pics/tw.png"/>  
                            <div>
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-green-600 bg-green-200">TAILWIND</span>
                            </div>
                            <div class="text-right">
                                <span class="text-xs font-semibold inline-block text-green-600">70%</span>
                            </div>                    
                        </div>
                        <div class="progress overflow-hidden h-5 mb-4 text-xs flex rounded bg-green-200">                    
                            <div style="width:70%" class="progress__bar progress__bar--tw shadow-none flex flex-col text-center whitespace-nowrap justify-center"></div>
                        </div>
                    </div>
                    <div class="relative pt-1 mx-4">
                        <div class="flex mb-2 items-center justify-between">
                            <img class="w-12 h-8" src="pics/lav.png"/>  
                            <div>
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-red-600 bg-red-200">LARAVEL</span>
                            </div>
                            <div class="text-right">
                                <span class="text-xs font-semibold inline-block text-red-600">55%</span>
                            </div>                    
                        </div>
                        <div class="progress overflow-hidden h-5 mb-4 text-xs flex rounded bg-red-200">                    
                            <div style="width:55%" class="progress__bar progress__bar--lav shadow-none flex flex-col text-center whitespace-nowrap justify-center"></div>
                        </div>
                    </div>
                    <div class="relative pt-1 mx-4">
                        <div class="flex mb-2 items-center justify-between">
                            <img class="w-8 h-8" src="pics/rea.png"/>  
                            <div>
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200">REACT</span>
                            </div>
                            <div class="text-right">
                                <span class="text-xs font-semibold inline-block text-blue-600">50%</span>
                            </div>                    
                        </div>
                        <div class="progress overflow-hidden h-5 mb-4 text-xs flex rounded bg-blue-200">                    
                            <div style="width:50%" class="progress__bar progress__bar--rea shadow-none flex flex-col text-center whitespace-nowrap justify-center"></div>
                        </div>
                    </div>
                    <div class="relative pt-1 mx-4">
                        <div class="flex mb-2 items-center justify-between">
                            <img class="w-8 h-8" src="pics/vue.png"/>  
                            <div>
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-green-600 bg-green-200">VUE</span>
                            </div>
                            <div class="text-right">
                                <span class="text-xs font-semibold inline-block text-green-600">40%</span>
                            </div>                    
                        </div>
                        <div class="progress overflow-hidden h-5 mb-4 text-xs flex rounded bg-green-200">                    
                            <div style="width:40%" class="progress__bar progress__bar--vue shadow-none flex flex-col text-center whitespace-nowrap justify-center"></div>
                        </div>
                    </div>
                    <div class="relative pt-1 mx-4">
                        <div class="flex mb-2 items-center justify-between">
                            <img class="w-12 h-8" src="pics/sql.png"/>  
                            <div>
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-yellow-600 bg-yellow-200">MYSQL</span>
                            </div>
                            <div class="text-right">
                                <span class="text-xs font-semibold inline-block text-yellow-600">80%</span>
                            </div>                    
                        </div>
                        <div class="progress overflow-hidden h-5 mb-4 text-xs flex rounded bg-yellow-200">                    
                            <div style="width:80%" class="progress__bar progress__bar--sql shadow-none flex flex-col text-center whitespace-nowrap justify-center"></div>
                        </div>
                    </div>
                    <div class="relative pt-1 mx-4">
                        <div class="flex mb-2 items-center justify-between">
                            <img class="w-8 h-8" src="pics/lag.png"/>  
                            <div>
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200">LARAGON</span>
                            </div>
                            <div class="text-right">
                                <span class="text-xs font-semibold inline-block text-blue-600">40%</span>
                            </div>                    
                        </div>
                        <div class="progress overflow-hidden h-5 mb-4 text-xs flex rounded bg-blue-200">                    
                            <div style="width:40%" class="progress__bar progress__bar--lag shadow-none flex flex-col text-center whitespace-nowrap justify-center"></div>
                        </div>
                    </div>
                </div>
            </div>            
        </section>
        <section class="mydesk col-span-6 grid grid-cols-6 h-48 md:h-56">
            <!-- <img class="col-span-6" src="pics/mydesk.png"/> -->
        </section>
        <section id="portfo" class="portfolio col-span-6 grid grid-cols-6 justify-center bg-gray-100 py-24 px-4">
            <h2 class="col-span-6 justify-self-center mb-2 text-3xl font-bold z-10 lg:text-4xl">Portfolio</h2>
            <div class="border border-black border-solid col-span-6 w-20 justify-self-center my-10"></div>
            <div class="text-5xl text-gray-300 absolute font-bold text-opacity-50 text-center col-span-6 left-0 right-0">PORTFOLIO</div>
            <div class="text-xl col-span-6 text-center">
                <p>Voici les principaux travaux que j'ai pu réaliser avant, pendant, et après ma formation en 2020.</p>
                <p>Les informations concernant la réalisation de ce portfolio sont indiqué dans la partie "à propos" en bas de page.</p>
            </div>                        
            <div class="pf__cv col-span-3 flex flex-col items-center justify-evenly mx-2 my-2 sm:mx-8 sm:my-4">
                <h3 class="font-bold text-xl text-center h-14 flex items-center sm:h-8 lg:text-2xl sm:mb-4">CV</h3>
                <img class="pf__cv--img trans" src="pics/vanilla-cv.png"/>     
            </div>
            <div class="pf__st col-span-3 flex flex-col items-center justify-evenly mx-2 sm:mx-8 my-4">
                <h3 class="font-bold text-xl text-center h-14 flex items-center sm:h-8 lg:text-2xl sm:mb-4">Studiz</h3>
                <img class="pf__st--img trans" src="pics/react-studiz.png"/>                       
            </div>                
            <div class="pf__sss col-span-3 flex flex-col items-center justify-evenly mx-2 sm:mx-8 my-4">
                <h3 class="font-bold text-xl text-center h-14 flex items-center sm:h-8 lg:text-2xl sm:mb-4">Saint Seiya Sanctuary</h3>
                <img class="pf__sss--img trans" src="pics/wp-sss.png"/>                               
            </div>
            <div class="pf__dw col-span-3 flex flex-col items-center justify-evenly mx-2 sm:mx-8 my-4">
                <h3 class="font-bold text-xl text-center h-14 flex items-center sm:h-8 lg:text-2xl sm:mb-4">DWWM 2020-1</h3>
                <img class="pf__dw--img trans" src="pics/wp-dwwm.png"/>                                                       
                </div>
            </div>            
            <div class="text-xl col-span-6 text-center justify-center items-center my-6">
                <p>Vous trouverez dans mon Github d'autres réalisations de type application que j'ai développé</p>
            </div>
            <div class="pf__gt col-start-2 col-span-4 flex flex-col items-center">                
                <a href="https://github.com/olivefort" target="_blank"><img class="pf__gt--img gith" src="pics/gt.png"/></a>                                           
            </div>                       
        </section>
        <div id="scroll"><div></div></div>
        <section>
            <div class="modal h-full w-full hidden z-30 absolute">
                <div class="flex flex-col items-center justify-center bg-white m-14">
                    <div class="closed cursor-pointer flex flex-row justify-end w-full mr-4 mt-2">
                        <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="30px" height="30px"><path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z"/></svg>
                    </div>
                    <div class="modale  flex flex-col lg:m-16 p-6">
                        <div class="modTitle flex flex-row justify-center items-center">
                            <h3 class="text-3xl text-center font-bold">Mon CV<h3>                        
                        </div>                    
                        <div class="border-t border-solid border-gray-200 h-1 overflow-visible after m-2"></div>
                            <div class="flex flex-col justify-center items-center lg:flex-row">
                                <div class="flex flex-col justify-between items-center lg:w-1/2">                                        
                                    <img class="my-4" src="pics/cv-1.png"/>
                                    <h4 class="text-3xl mb-2 font-semibold">Production</h4> 
                                    <div class="flex flex-col items-start justify-center">                                
                                        <ul class="desc text-sm sm:text-base md:text-xl">
                                            <li class="list-disc">HTML/CSS/JS</li>
                                            <li class="list-disc">Site responsive</li>
                                            <li class="list-disc">Github</li>
                                        </ul>
                                    </div>                        
                                </div>
                                <div class="flex flex-col justify-between items-center lg:w-1/2">                                    
                                <img class="my-4" src="pics/cv-2.png"/>
                                <h4 class="text-3xl mb-2 font-semibold">Infos</h4>
                                <div class="desc text-left sm:mx-16 lg:my-0 lg:mx-8 text-sm md:text-xl">
                                    Petit projet d'un CV centré sur le développement web en HTML/CSS et quelques lignes de JS réalisé avant ma formation DWWM de 2020 consultable via Github.
                                    
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center bg-gray-200 mt-4 p-2 hover:bg-gray-400 cursor-pointer">
                            <a href="https://olivefort.github.io/CV/" target="_blank" class="text-xl">Visiter le site</a>
                        </div>
                    </div>
                </div>            
            </div>
            <div class="modal h-full w-full hidden z-30 absolute">
                <div class="flex flex-col items-center justify-center bg-white m-14">
                    <div class="closed cursor-pointer flex flex-row justify-end w-full mr-4 mt-2">
                        <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="30px" height="30px"><path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z"/></svg>
                    </div>
                    <div class="modale flex flex-col lg:m-16 p-6">
                        <div class="modTitle flex flex-row justify-center items-center">
                            <h3 class="text-3xl text-center font-bold">STUDIZ</h3>                        
                        </div>                    
                        <div class="border-t border-solid border-gray-200 h-1 overflow-visible after m-2"></div>
                            <div class="flex flex-col justify-center items-center lg:flex-row">
                                <div class="flex flex-col justify-between items-center lg:w-1/2">                                        
                                    <img class="my-4" src="pics/react-1.png"/>
                                    <h4 class="text-3xl mb-2 font-semibold">Production</h4> 
                                    <div class="flex flex-col items-start justify-center">                                
                                        <ul class="desc text-sm md:text-xl">
                                            <li class="list-disc">REACT/BOOTSTRAP</li>
                                            <li class="list-disc">Site responsive</li>
                                            <li class="list-disc">Github</li>
                                        </ul>
                                    </div>                        
                                </div>
                                <div class="flex flex-col justify-between items-center lg:w-1/2">                                    
                                <img class="my-4" src="pics/react-2.png"/>
                                <h4 class="text-3xl mb-2 font-semibold">Infos</h4>
                                <div class="desc text-left sm:mx-16 lg:my-0 lg:mx-8 text-sm md:text-xl">
                                    Studiz est un projet de développement d'une plateforme d'échange pour les étudiants, ma participation bénévole est orienté vers le front-end. Ce projet est encore en cours de réalisation
                                </div>
                            </div>
                        </div>
                        <!-- <div class="flex flex-col justify-center items-center bg-gray-200 mt-4 p-2 hover:bg-gray-400 cursor-pointer">
                            <a href="#" target="_blank" class="text-xl">Visiter le site</a>
                        </div> -->
                    </div>
                </div>            
            </div>
            <div class="modal h-full w-full hidden z-30 absolute">
                <div class="flex flex-col items-center justify-center bg-white m-14">
                    <div class="closed cursor-pointer flex flex-row justify-end w-full mr-4 mt-2">
                        <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="30px" height="30px"><path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z"/></svg>
                    </div>
                    <div class="modale flex flex-col lg:m-16 p-6">
                        <div class="modTitle flex flex-row justify-center items-center">
                            <h3 class="text-3xl text-center font-bold">SAINT SEIYA SANCTUARY</h3>                        
                        </div>                    
                        <div class="border-t border-solid border-gray-200 h-1 overflow-visible after m-2"></div>
                        <div class="flex flex-col justify-center items-center lg:flex-row">
                            <div class="flex flex-col justify-between items-center lg:w-1/2">                                        
                                <img class="my-4" src="pics/wp-1.png"/>
                                <h4 class="text-3xl mb-2 font-semibold">Production</h4> 
                                <div class="flex flex-col items-start justify-center">                                
                                    <ul class="desc text-sm md:text-xl">
                                        <li class="list-disc">WORDPRESS/PHP/CSS/JS</li>
                                        <li class="list-disc">Site responsive</li>
                                        <li class="list-disc">Github</li>
                                    </ul>
                                </div>                        
                            </div>
                            <div class="flex flex-col justify-between items-center lg:w-1/2">                                    
                                <img class="my-4" src="pics/wp-2.png"/>
                                <h4 class="text-3xl mb-2 font-semibold">Infos</h4>
                                <div class="desc text-left sm:mx-16 lg:my-0 lg:mx-8 text-sm md:text-xl">
                                    Saint Seiya Sanctuary est mon premier projet personnel à grande échelle. Réalisé sur Wordpress, ce premier site a été réaliser sur plusieurs mois.
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center bg-gray-200 mt-4 p-2 hover:bg-gray-400 cursor-pointer">
                            <a href="http://www.saintseiyasanctuary.fr/" target="_blank" class="text-xl">Visiter le site</a>
                        </div>
                    </div>
                </div>            
            </div>
            <div class="modal h-full w-full hidden z-30 absolute">
                <div class="flex flex-col items-center justify-center bg-white m-14">
                    <div class="closed cursor-pointer flex flex-row justify-end w-full mr-4 mt-2">
                        <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="30px" height="30px"><path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z"/></svg>
                    </div>
                    <div class="modale flex flex-col lg:m-16 p-6">
                        <div class="modTitle flex flex-row justify-center items-center">
                            <h3 class="text-3xl text-center font-bold">DWWM 2020-1</h3>                        
                        </div>                    
                        <div class="border-t border-solid border-gray-200 h-1 overflow-visible after m-2"></div>
                            <div class="flex flex-col justify-center items-center lg:flex-row">
                                <div class="flex flex-col justify-between items-center lg:w-1/2">                                        
                                    <img class="my-4" src="pics/wp-3.png"/>
                                    <h4 class="text-3xl mb-2 font-semibold">Production</h4> 
                                    <div class="flex flex-col items-start justify-center">                                
                                        <ul class="desc text-sm md:text-xl">
                                            <li class="list-disc">WORDPRESS/PHP/HTML/CSS/JS</li>
                                            <li class="list-disc">Site responsive</li>
                                            <li class="list-disc">Github</li>
                                        </ul>
                                    </div>                        
                                </div>
                                <div class="flex flex-col justify-between items-center lg:w-1/2">                                    
                                <img class="my-4" src="pics/wp-4.png"/>
                                <h4 class="text-3xl mb-2 font-semibold">Infos</h4>
                                <div class="desc text-left sm:mx-16 lg:my-0 lg:mx-8 text-sm md:text-xl">
                                    Ce petit site a été développé sur Wordpress pendant ma formation pour une évaluation. Ce site n'étant pas en ligne, il est néanmoins stocké dans mon Github.
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center bg-gray-200 mt-4 p-2 hover:bg-gray-400 cursor-pointer">
                            <a href="https://github.com/olivefort/Dwwm20201/tree/main/wp-content/themes/dwwm2020" target="_blank" class="text-xl">Voir le Github</a>
                        </div>
                    </div>
                </div>            
            </div>
            <div class="modal modalapp w-full hidden z-30 absolute">
                <div class="flex flex-col items-center justify-center bg-white m-14">
                    <div class="closed cursor-pointer flex flex-row justify-end w-full mr-4 mt-2">
                        <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="30px" height="30px"><path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z"/></svg>
                    </div>
                    <div class="modale flex flex-col m-10 p-6">
                        <div class="modTitle flex flex-row justify-center items-center">
                            <h3 class="text-3xl text-center font-bold">A PROPOS</h3>                        
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
        <section class="mydesk col-span-6 grid grid-cols-6 h-48 md:h-56">
            <!-- <img class="col-span-6" src="pics/mydesk.png"/> -->
        </section>
        <section id="cont" class="contact bg-white col-span-6 grid grid-cols-6 justify-center py-24 px-4">
            <h2 class="col-span-6 justify-self-center mb-2 text-3xl font-bold z-10 lg:text-4xl">Contact</h2>
            <div class="border border-black border-solid col-span-6 w-20 justify-self-center my-10"></div>
            <div class="text-5xl text-gray-300 absolute font-bold text-opacity-50 text-center left-0 right-0">CONTACT</div>
            <?php
                if(isset($_POST['btnsubmit'])){
                    if(!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['sujet']) AND !empty($_POST['message'])){
                        $header="MIMe-version: 1.0\r\n";
                        $header.='From:"d3LTa7.com"<support@d3LTa7.com>'."\n";
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
                        mail("olive.fort@gmail.com", "Message du Portfolio !", $message, $header);  
                        $msg="Votre mail a bien été envoyé !";
                        
                    }else{
                        $msg="Merci de remplir tout les champs !";
                    }
                }
            ?>
            <form name="contact" method="POST" action="" class="col-start-2 col-end-6 flex flex-col">
                <div class="flex flex-col">
                    <div class="flex flex-col mb-2">
                        <label>Prénom</label>
                        <input name="prenom" id="prenom" type="text" class="bg-gray-100 border-gray-200 border rounded-sm">
                    </div>
                    <div class="flex flex-col mb-2">
                        <label>Nom</label>
                        <input name="nom" id="nom" type="text" class="bg-gray-100 border-gray-200 border rounded-sm">
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="flex flex-col mb-2">
                        <label>E-Mail</label>
                        <input name="mail" id="mail" type="email" class="bg-gray-100 border-gray-200 border rounded-sm">
                    </div>
                    <div class="flex flex-col mb-2">
                        <label>Sujet</label>
                        <input name="sujet" id="sujet" type="text" class="bg-gray-100 border-gray-200 border rounded-sm">
                    </div>
                </div>
                <div class="flex flex-col mb-2">
                    <label>Votre message</label>
                    <textarea name="message" id="message" class="bg-gray-100 border-gray-200 border rounded-sm texta"></textarea>
                </div>
                <div>
                    <button id="submit" name="btnsubmit" type="submit" value="Envoyer" class="bg-gray-100 border-gray-200 border rounded-sm w-full py-2 my-2 hover:bg-gray-300"><a href="#cont">Envoyer</a></button>
                </div>
                <?php if(isset($msg)){echo $msg;}?>
            </form>            
        </section>
    </main>
    <div id="arrow" class="arrow z-40 cursor-pointer">
        <svg width="50px" height="50px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title>ionicons-v5-a</title><polyline points="112 244 256 100 400 244" style="fill:none;stroke:#9ca3af;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/><line x1="256" y1="120" x2="256" y2="412" style="fill:none;stroke:#9ca3af;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/></svg>
    </div>  
    <footer class="footer grid grid-cols-6 bg-gray-100">
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