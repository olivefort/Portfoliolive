<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/twstyles.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Tailwind CSS Demo</title>
</head>
<body>
    <div class="h-full w-full bg-black bg-opacity-50 z-20 hidden fixed" id="dark"></div>    
    <main id="main-content" class="container-front grid grid-cols-6">
        <section class="home-hero col-span-6 grid grid-cols-6">
            <div class="cont col-span-6">
                <div class="hero-content">
                    <h1 class="hero-title" id="hero-title" data-label="Olive Fort">Olivier Fort</h1>               
                </div>
                <h2 class="hero-title">Développeur web et web mobile junior</h2>             
            </div>
        </section>
        <section class="navigation col-span-6">
            <header id="head">
                <nav id="navbar" class="main-nav flex justify-between items-center flex-row">
                    <button aria-expanded="false" aria-controls="main-menu" class="togle">Menu</button>
                    <div>
                        <div>
                            <ul id="main-menu" class="menu bg-gray-200 text-center" hidden>
                                <li class=""><a href="#pres">Présentation</a></li>
                                <li class=""><a href="#compe">Compétence</a></li>
                                <li class=""><a href="#portfo">Portfolio</a></li>
                                <li class=""><a href="#cont">Contact</a></li>
                                <!-- <li>Présentation</li>
                                <li>Compétence</li>
                                <li>Portfolio</li>
                                <li>Contact</li> -->
                            </ul>
                        </div>
                        <div class="text-4xl font-bold">OLIVIER FORT</div>
                    </div>
                </nav>
            </header>
        </section>
        <section id="pres" class="presentation col-span-6 grid grid-cols-6 py-8 px-4">
            <h2 class="col-span-6 justify-self-center mb-2 text-3xl font-bold z-10">Presentation</h2>
            <div class="border border-black border-solid col-span-6 w-20 justify-self-center my-10"></div>
            <div class="text-5xl text-gray-300 absolute font-bold text-opacity-50 text-center col-span-6 left-0 right-0">PRESENTATION</div>
            <div class="col-span-6 text-center text-xl">Bonjour, moi c'est Olivier, 40 ans de Tours, jeune diplomé en developpement web et web mobile.<br> Je suis passionné par le domaine informatique depuis de nombreuses années. Aujourd'hui mon intérêt se porte sur le développement web.<br> De nature sociable, je suis à l'écoute, autonome et organisé dans la réalisation de mes travaux et projets.</div>
        </section>
        <section id="compe" class="competence grid grid-cols-6 col-span-6 bg-gray-100 py-8 px-4">
            <div class="cont col-span-6">
                <h2 class="col-span-6 justify-self-center mb-2 text-3xl font-bold z-10">Compétence</h2>
                <div class="border border-black border-solid col-span-6 w-20 justify-self-center my-10"></div>
                <div class="text-5xl text-gray-300 absolute font-bold text-opacity-50 text-center col-span-6 left-0 right-0">COMPETENCE</div>
                <div class="grid grid-cols-6">
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
            </div>
        </section>
        <section class="mydesk col-span-6 grid grid-cols-6">
            <img class="col-span-6" src="pics/mydesk.png"/>
        </section>
        <section id="portfo" class="portfolio col-span-6 grid grid-cols-6 justify-center bg-gray-100 py-8 px-4">
            <h2 class="col-span-6 justify-self-center mb-2 text-3xl font-bold z-10">Portfolio</h2>
            <div class="border border-black border-solid col-span-6 w-20 justify-self-center my-10"></div>
            <div class="text-5xl text-gray-300 absolute font-bold text-opacity-50 text-center col-span-6 left-0 right-0">PORTFOLIO</div>
            <div class="pf col-span-3 mx-4 flex flex-col items-center justify-center">            
                <div class="pf__cv">
                    <h3>CV</h3>
                    <img class="pf__cv--img trans" src="pics/vanilla-cv.png"/>     
                </div>
                <div class="pf__st">
                    <h3>Studiz</h3>
                    <img class="pf__st--img trans" src="pics/react-studiz.png"/>                       
                </div> 
            </div>
            <div class="pf col-span-3 mx-4 flex flex-col items-center justify-center">            
                <div class="pf__sss">
                    <h3>Saint Seiya Sanctuary</h3>
                    <img class="pf__sss--img trans" src="pics/wp-sss.png"/>                               
                </div>
                <div class="pf__dw">
                    <h3>DWWM2020-1</h3>
                    <img class="pf__dw--img trans" src="pics/wp-dwwm.png"/>                                                       
                    </div>
                </div>                
            </div>               
        </section>
        <section>
            <div class="modal h-full w-full hidden z-30 absolute">
                <div class="modale bg-white flex flex-col m-10 p-6">
                    <div class="modTitle flex flex-row justify-center items-center">
                        <h3 class="text-5xl font-bold">Mon CV</h3>
                        <div class="closed cursor-pointer">
                            <svg version="1.1" id="closed" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 587.91 587.91" style="enable-background:new 0 0 587.91 587.91;" xml:space="preserve"><g><g><g>
                            <path d="M86.451,501.46c26.937,26.936,58.315,48.088,93.265,62.871c36.207,15.314,74.642,23.078,114.239,23.078
                            c39.596,0,78.032-7.764,114.239-23.078c34.949-14.783,66.328-35.936,93.266-62.871c26.936-26.938,48.09-58.316,62.871-93.266
                            c15.314-36.207,23.08-74.643,23.08-114.238c0-39.598-7.766-78.033-23.08-114.239c-14.781-34.95-35.936-66.328-62.871-93.265
                            c-26.938-26.937-58.316-48.09-93.266-62.872C371.986,8.265,333.551,0.501,293.955,0.501c-39.597,0-78.032,7.765-114.239,23.079
                            c-34.95,14.782-66.328,35.936-93.265,62.872s-48.09,58.315-62.873,93.264C8.265,215.923,0.5,254.358,0.5,293.956
                            c0,39.596,7.765,78.031,23.079,114.238C38.361,443.144,59.515,474.522,86.451,501.46z M293.955,43.341
                            c138.411,0,250.614,112.204,250.614,250.615c0,138.41-112.203,250.613-250.614,250.613S43.34,432.366,43.34,293.956
                            C43.34,155.545,155.544,43.341,293.955,43.341z"/>
                            <path d="M293.955,587.909c-39.667,0-78.167-7.778-114.434-23.117c-35.01-14.809-66.442-35.998-93.423-62.979
                            c-26.983-26.984-48.172-58.417-62.979-93.425C7.778,372.119,0,333.618,0,293.956c0-39.663,7.778-78.165,23.118-114.435
                            c14.807-35.008,35.997-66.44,62.979-93.423c26.982-26.983,58.415-48.172,93.423-62.979c36.27-15.34,74.771-23.118,114.434-23.118
                            c39.666,0,78.167,7.778,114.433,23.119c35.009,14.807,66.441,35.997,93.425,62.979c26.984,26.985,48.173,58.417,62.979,93.423
                            c15.341,36.27,23.119,74.771,23.119,114.434c0,39.662-7.778,78.163-23.119,114.433c-14.806,35.007-35.994,66.439-62.979,93.425
                            c-26.982,26.98-58.415,48.169-93.425,62.979C372.121,580.131,333.62,587.909,293.955,587.909z M293.955,1.001
                            c-39.529,0-77.898,7.751-114.044,23.039c-34.889,14.757-66.215,35.874-93.106,62.765c-26.892,26.892-48.009,58.217-62.766,93.105
                            C8.751,216.057,1,254.427,1,293.956C1,333.483,8.751,371.854,24.039,408c14.757,34.889,35.874,66.214,62.766,93.106
                            c26.89,26.889,58.215,48.006,93.106,62.765c36.142,15.287,74.512,23.038,114.044,23.038s77.901-7.751,114.044-23.039
                            c34.89-14.758,66.216-35.875,93.106-62.764c26.893-26.895,48.009-58.22,62.764-93.106
                            c15.289-36.146,23.041-74.516,23.041-114.044c0-39.529-7.752-77.899-23.041-114.044c-14.754-34.887-35.871-66.212-62.764-93.106
                            c-26.892-26.891-58.218-48.008-93.106-62.765C371.855,8.752,333.485,1.001,293.955,1.001z M293.955,545.069
                            c-67.075,0-130.136-26.12-177.565-73.549c-47.429-47.43-73.55-110.489-73.55-177.564S68.96,163.82,116.39,116.391
                            c47.429-47.429,110.49-73.55,177.565-73.55c67.075,0,130.135,26.121,177.564,73.55c47.43,47.43,73.55,110.49,73.55,177.565
                            s-26.12,130.135-73.55,177.564C424.09,518.949,361.029,545.069,293.955,545.069z M293.955,43.841
                            c-66.808,0-129.617,26.017-176.858,73.257c-47.24,47.241-73.257,110.05-73.257,176.858c0,66.808,26.017,129.617,73.257,176.856
                            c47.24,47.24,110.05,73.257,176.858,73.257s129.617-26.017,176.857-73.257c47.24-47.239,73.257-110.049,73.257-176.856
                            c0-66.808-26.017-129.618-73.257-176.858C423.571,69.857,360.763,43.841,293.955,43.841z"/></g>
                            <g><path d="M184.92,402.989c4.183,4.184,9.664,6.275,15.146,6.275c5.482,0,10.964-2.092,15.146-6.275l78.742-78.742l78.743,78.742
                            c4.182,4.184,9.664,6.275,15.146,6.275s10.963-2.092,15.146-6.275c8.365-8.363,8.365-21.926,0-30.291l-78.744-78.742
                            l78.742-78.743c8.365-8.365,8.365-21.928,0-30.292c-8.363-8.365-21.926-8.365-30.291,0l-78.743,78.743l-78.742-78.743
                            c-8.365-8.365-21.928-8.365-30.292,0c-8.365,8.365-8.365,21.927,0,30.292l78.743,78.743l-78.743,78.742
                            C176.555,381.063,176.555,394.626,184.92,402.989z"/>
                            <path d="M387.844,409.765c-5.856,0-11.36-2.28-15.5-6.422l-78.389-78.389l-78.388,78.389c-4.14,4.142-9.645,6.422-15.5,6.422
                            s-11.36-2.28-15.5-6.422c-4.14-4.14-6.42-9.644-6.42-15.498c0-5.855,2.28-11.359,6.42-15.5l78.389-78.389l-78.389-78.389
                            c-8.546-8.547-8.546-22.453,0-31c4.14-4.14,9.644-6.42,15.5-6.42c5.855,0,11.36,2.28,15.5,6.42l78.389,78.389l78.389-78.389
                            c4.141-4.14,9.645-6.42,15.5-6.42c5.854,0,11.358,2.28,15.498,6.42c4.141,4.14,6.42,9.645,6.42,15.5s-2.279,11.36-6.42,15.5
                            l-78.389,78.389l78.391,78.389c4.141,4.141,6.421,9.645,6.421,15.5c0,5.854-2.28,11.358-6.421,15.498
                            C399.202,407.484,393.698,409.765,387.844,409.765z M293.955,323.54l79.096,79.096c3.95,3.952,9.204,6.129,14.793,6.129
                            c5.587,0,10.841-2.177,14.793-6.129c3.951-3.95,6.128-9.203,6.128-14.791s-2.177-10.842-6.128-14.793l-79.098-79.096
                            l79.096-79.096c3.951-3.951,6.127-9.205,6.127-14.793s-2.176-10.841-6.127-14.792c-3.95-3.951-9.203-6.127-14.791-6.127
                            s-10.842,2.176-14.793,6.127l-79.096,79.096l-79.096-79.096c-3.951-3.951-9.205-6.127-14.793-6.127
                            c-5.588,0-10.841,2.176-14.792,6.127c-8.156,8.157-8.156,21.428,0,29.585l79.096,79.096l-79.096,79.096
                            c-3.951,3.951-6.127,9.205-6.127,14.793s2.176,10.841,6.127,14.791c3.952,3.952,9.205,6.129,14.793,6.129
                            s10.841-2.177,14.793-6.129L293.955,323.54z"/></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                        </div>
                    </div>                    
                    <div class="border-t border-solid border-gray-200 h-1 overflow-visible after m-2"></div>
                        <div class="flex flex-col justify-center items-center lg:flex-row">
                            <div class="flex flex-col justify-between items-center lg:w-1/2">                                        
                                <img class="imgmod my-4" src="pics/cv-1.png"/>
                                <h4 class="text-3xl mb-2 font-semibold">Production</h4> 
                                <div class="flex flex-col items-start justify-center">                                
                                    <ul class="desc text-sm md:text-xl">
                                        <li class="list-disc">HTML/CSS/JS</li>
                                        <li class="list-disc">Site responsive</li>
                                        <li class="list-disc">Github</li>
                                    </ul>
                                </div>                        
                            </div>
                            <div class="flex flex-col justify-between items-center lg:w-1/2">                                    
                            <img class="imgmod my-4" src="pics/cv-2.png"/>
                            <h4 class="text-3xl mb-2 font-semibold">Infos</h4>
                            <div class="desc text-left sm:mx-16 lg:my-0 lg:mx-20 text-sm md:text-xl">
                                Petit projet d'un CV centré sur le développement web en HTML/CSS et quelques lignes de JS réalisé avant ma formation DWWM de 2020 consultable via Github.
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center items-center bg-gray-200 mt-4 p-2 hover:bg-gray-400 cursor-pointer">
                        <a href="https://olivefort.github.io/cv/" target="_blank" class="text-xl">Visiter le site</a>
                    </div>
                </div>            
            </div>
            <div class="modal h-full w-full hidden z-30 absolute">
                <div class="modale bg-white flex flex-col m-10 p-6">
                    <div class="modTitle flex flex-row justify-center items-center">
                        <h3 class="text-5xl font-bold">STUDIZ</h3>
                        <div class="closed cursor-pointer">
                            <svg version="1.1" id="closed" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 587.91 587.91" style="enable-background:new 0 0 587.91 587.91;" xml:space="preserve"><g><g><g>
                            <path d="M86.451,501.46c26.937,26.936,58.315,48.088,93.265,62.871c36.207,15.314,74.642,23.078,114.239,23.078
                            c39.596,0,78.032-7.764,114.239-23.078c34.949-14.783,66.328-35.936,93.266-62.871c26.936-26.938,48.09-58.316,62.871-93.266
                            c15.314-36.207,23.08-74.643,23.08-114.238c0-39.598-7.766-78.033-23.08-114.239c-14.781-34.95-35.936-66.328-62.871-93.265
                            c-26.938-26.937-58.316-48.09-93.266-62.872C371.986,8.265,333.551,0.501,293.955,0.501c-39.597,0-78.032,7.765-114.239,23.079
                            c-34.95,14.782-66.328,35.936-93.265,62.872s-48.09,58.315-62.873,93.264C8.265,215.923,0.5,254.358,0.5,293.956
                            c0,39.596,7.765,78.031,23.079,114.238C38.361,443.144,59.515,474.522,86.451,501.46z M293.955,43.341
                            c138.411,0,250.614,112.204,250.614,250.615c0,138.41-112.203,250.613-250.614,250.613S43.34,432.366,43.34,293.956
                            C43.34,155.545,155.544,43.341,293.955,43.341z"/>
                            <path d="M293.955,587.909c-39.667,0-78.167-7.778-114.434-23.117c-35.01-14.809-66.442-35.998-93.423-62.979
                            c-26.983-26.984-48.172-58.417-62.979-93.425C7.778,372.119,0,333.618,0,293.956c0-39.663,7.778-78.165,23.118-114.435
                            c14.807-35.008,35.997-66.44,62.979-93.423c26.982-26.983,58.415-48.172,93.423-62.979c36.27-15.34,74.771-23.118,114.434-23.118
                            c39.666,0,78.167,7.778,114.433,23.119c35.009,14.807,66.441,35.997,93.425,62.979c26.984,26.985,48.173,58.417,62.979,93.423
                            c15.341,36.27,23.119,74.771,23.119,114.434c0,39.662-7.778,78.163-23.119,114.433c-14.806,35.007-35.994,66.439-62.979,93.425
                            c-26.982,26.98-58.415,48.169-93.425,62.979C372.121,580.131,333.62,587.909,293.955,587.909z M293.955,1.001
                            c-39.529,0-77.898,7.751-114.044,23.039c-34.889,14.757-66.215,35.874-93.106,62.765c-26.892,26.892-48.009,58.217-62.766,93.105
                            C8.751,216.057,1,254.427,1,293.956C1,333.483,8.751,371.854,24.039,408c14.757,34.889,35.874,66.214,62.766,93.106
                            c26.89,26.889,58.215,48.006,93.106,62.765c36.142,15.287,74.512,23.038,114.044,23.038s77.901-7.751,114.044-23.039
                            c34.89-14.758,66.216-35.875,93.106-62.764c26.893-26.895,48.009-58.22,62.764-93.106
                            c15.289-36.146,23.041-74.516,23.041-114.044c0-39.529-7.752-77.899-23.041-114.044c-14.754-34.887-35.871-66.212-62.764-93.106
                            c-26.892-26.891-58.218-48.008-93.106-62.765C371.855,8.752,333.485,1.001,293.955,1.001z M293.955,545.069
                            c-67.075,0-130.136-26.12-177.565-73.549c-47.429-47.43-73.55-110.489-73.55-177.564S68.96,163.82,116.39,116.391
                            c47.429-47.429,110.49-73.55,177.565-73.55c67.075,0,130.135,26.121,177.564,73.55c47.43,47.43,73.55,110.49,73.55,177.565
                            s-26.12,130.135-73.55,177.564C424.09,518.949,361.029,545.069,293.955,545.069z M293.955,43.841
                            c-66.808,0-129.617,26.017-176.858,73.257c-47.24,47.241-73.257,110.05-73.257,176.858c0,66.808,26.017,129.617,73.257,176.856
                            c47.24,47.24,110.05,73.257,176.858,73.257s129.617-26.017,176.857-73.257c47.24-47.239,73.257-110.049,73.257-176.856
                            c0-66.808-26.017-129.618-73.257-176.858C423.571,69.857,360.763,43.841,293.955,43.841z"/></g>
                            <g><path d="M184.92,402.989c4.183,4.184,9.664,6.275,15.146,6.275c5.482,0,10.964-2.092,15.146-6.275l78.742-78.742l78.743,78.742
                            c4.182,4.184,9.664,6.275,15.146,6.275s10.963-2.092,15.146-6.275c8.365-8.363,8.365-21.926,0-30.291l-78.744-78.742
                            l78.742-78.743c8.365-8.365,8.365-21.928,0-30.292c-8.363-8.365-21.926-8.365-30.291,0l-78.743,78.743l-78.742-78.743
                            c-8.365-8.365-21.928-8.365-30.292,0c-8.365,8.365-8.365,21.927,0,30.292l78.743,78.743l-78.743,78.742
                            C176.555,381.063,176.555,394.626,184.92,402.989z"/>
                            <path d="M387.844,409.765c-5.856,0-11.36-2.28-15.5-6.422l-78.389-78.389l-78.388,78.389c-4.14,4.142-9.645,6.422-15.5,6.422
                            s-11.36-2.28-15.5-6.422c-4.14-4.14-6.42-9.644-6.42-15.498c0-5.855,2.28-11.359,6.42-15.5l78.389-78.389l-78.389-78.389
                            c-8.546-8.547-8.546-22.453,0-31c4.14-4.14,9.644-6.42,15.5-6.42c5.855,0,11.36,2.28,15.5,6.42l78.389,78.389l78.389-78.389
                            c4.141-4.14,9.645-6.42,15.5-6.42c5.854,0,11.358,2.28,15.498,6.42c4.141,4.14,6.42,9.645,6.42,15.5s-2.279,11.36-6.42,15.5
                            l-78.389,78.389l78.391,78.389c4.141,4.141,6.421,9.645,6.421,15.5c0,5.854-2.28,11.358-6.421,15.498
                            C399.202,407.484,393.698,409.765,387.844,409.765z M293.955,323.54l79.096,79.096c3.95,3.952,9.204,6.129,14.793,6.129
                            c5.587,0,10.841-2.177,14.793-6.129c3.951-3.95,6.128-9.203,6.128-14.791s-2.177-10.842-6.128-14.793l-79.098-79.096
                            l79.096-79.096c3.951-3.951,6.127-9.205,6.127-14.793s-2.176-10.841-6.127-14.792c-3.95-3.951-9.203-6.127-14.791-6.127
                            s-10.842,2.176-14.793,6.127l-79.096,79.096l-79.096-79.096c-3.951-3.951-9.205-6.127-14.793-6.127
                            c-5.588,0-10.841,2.176-14.792,6.127c-8.156,8.157-8.156,21.428,0,29.585l79.096,79.096l-79.096,79.096
                            c-3.951,3.951-6.127,9.205-6.127,14.793s2.176,10.841,6.127,14.791c3.952,3.952,9.205,6.129,14.793,6.129
                            s10.841-2.177,14.793-6.129L293.955,323.54z"/></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                        </div>
                    </div>                    
                    <div class="border-t border-solid border-gray-200 h-1 overflow-visible after m-2"></div>
                        <div class="flex flex-col justify-center items-center lg:flex-row">
                            <div class="flex flex-col justify-between items-center lg:w-1/2">                                        
                                <img class="imgmod my-4" src="pics/cv-1.png"/>
                                <h4 class="text-3xl mb-2 font-semibold">Production</h4> 
                                <div class="flex flex-col items-start justify-center">                                
                                    <ul class="desc text-sm md:text-xl">
                                        <li class="list-disc">HTML/CSS/JS</li>
                                        <li class="list-disc">Site responsive</li>
                                        <li class="list-disc">Github</li>
                                    </ul>
                                </div>                        
                            </div>
                            <div class="flex flex-col justify-between items-center lg:w-1/2">                                    
                            <img class="imgmod my-4" src="pics/cv-2.png"/>
                            <h4 class="text-3xl mb-2 font-semibold">Infos</h4>
                            <div class="desc text-left sm:mx-16 lg:my-0 lg:mx-20 text-sm md:text-xl">
                                Petit projet d'un CV centré sur le développement web en HTML/CSS et quelques lignes de JS réalisé avant ma formation DWWM de 2020 consultable via Github.
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center items-center bg-gray-200 mt-4 p-2 hover:bg-gray-400 cursor-pointer">
                        <a href="https://olivefort.github.io/cv/" target="_blank" class="text-xl">Visiter le site</a>
                    </div>
                </div>            
            </div>
            <div class="modal h-full w-full hidden z-30 absolute">
                <div class="modale bg-white flex flex-col m-10 p-6">
                    <div class="modTitle flex flex-row justify-center items-center">
                        <h3 class="text-5xl font-bold">SAINT SEIYA SANCTUARY</h3>
                        <div class="closed cursor-pointer">
                            <svg version="1.1" id="closed" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 587.91 587.91" style="enable-background:new 0 0 587.91 587.91;" xml:space="preserve"><g><g><g>
                            <path d="M86.451,501.46c26.937,26.936,58.315,48.088,93.265,62.871c36.207,15.314,74.642,23.078,114.239,23.078
                            c39.596,0,78.032-7.764,114.239-23.078c34.949-14.783,66.328-35.936,93.266-62.871c26.936-26.938,48.09-58.316,62.871-93.266
                            c15.314-36.207,23.08-74.643,23.08-114.238c0-39.598-7.766-78.033-23.08-114.239c-14.781-34.95-35.936-66.328-62.871-93.265
                            c-26.938-26.937-58.316-48.09-93.266-62.872C371.986,8.265,333.551,0.501,293.955,0.501c-39.597,0-78.032,7.765-114.239,23.079
                            c-34.95,14.782-66.328,35.936-93.265,62.872s-48.09,58.315-62.873,93.264C8.265,215.923,0.5,254.358,0.5,293.956
                            c0,39.596,7.765,78.031,23.079,114.238C38.361,443.144,59.515,474.522,86.451,501.46z M293.955,43.341
                            c138.411,0,250.614,112.204,250.614,250.615c0,138.41-112.203,250.613-250.614,250.613S43.34,432.366,43.34,293.956
                            C43.34,155.545,155.544,43.341,293.955,43.341z"/>
                            <path d="M293.955,587.909c-39.667,0-78.167-7.778-114.434-23.117c-35.01-14.809-66.442-35.998-93.423-62.979
                            c-26.983-26.984-48.172-58.417-62.979-93.425C7.778,372.119,0,333.618,0,293.956c0-39.663,7.778-78.165,23.118-114.435
                            c14.807-35.008,35.997-66.44,62.979-93.423c26.982-26.983,58.415-48.172,93.423-62.979c36.27-15.34,74.771-23.118,114.434-23.118
                            c39.666,0,78.167,7.778,114.433,23.119c35.009,14.807,66.441,35.997,93.425,62.979c26.984,26.985,48.173,58.417,62.979,93.423
                            c15.341,36.27,23.119,74.771,23.119,114.434c0,39.662-7.778,78.163-23.119,114.433c-14.806,35.007-35.994,66.439-62.979,93.425
                            c-26.982,26.98-58.415,48.169-93.425,62.979C372.121,580.131,333.62,587.909,293.955,587.909z M293.955,1.001
                            c-39.529,0-77.898,7.751-114.044,23.039c-34.889,14.757-66.215,35.874-93.106,62.765c-26.892,26.892-48.009,58.217-62.766,93.105
                            C8.751,216.057,1,254.427,1,293.956C1,333.483,8.751,371.854,24.039,408c14.757,34.889,35.874,66.214,62.766,93.106
                            c26.89,26.889,58.215,48.006,93.106,62.765c36.142,15.287,74.512,23.038,114.044,23.038s77.901-7.751,114.044-23.039
                            c34.89-14.758,66.216-35.875,93.106-62.764c26.893-26.895,48.009-58.22,62.764-93.106
                            c15.289-36.146,23.041-74.516,23.041-114.044c0-39.529-7.752-77.899-23.041-114.044c-14.754-34.887-35.871-66.212-62.764-93.106
                            c-26.892-26.891-58.218-48.008-93.106-62.765C371.855,8.752,333.485,1.001,293.955,1.001z M293.955,545.069
                            c-67.075,0-130.136-26.12-177.565-73.549c-47.429-47.43-73.55-110.489-73.55-177.564S68.96,163.82,116.39,116.391
                            c47.429-47.429,110.49-73.55,177.565-73.55c67.075,0,130.135,26.121,177.564,73.55c47.43,47.43,73.55,110.49,73.55,177.565
                            s-26.12,130.135-73.55,177.564C424.09,518.949,361.029,545.069,293.955,545.069z M293.955,43.841
                            c-66.808,0-129.617,26.017-176.858,73.257c-47.24,47.241-73.257,110.05-73.257,176.858c0,66.808,26.017,129.617,73.257,176.856
                            c47.24,47.24,110.05,73.257,176.858,73.257s129.617-26.017,176.857-73.257c47.24-47.239,73.257-110.049,73.257-176.856
                            c0-66.808-26.017-129.618-73.257-176.858C423.571,69.857,360.763,43.841,293.955,43.841z"/></g>
                            <g><path d="M184.92,402.989c4.183,4.184,9.664,6.275,15.146,6.275c5.482,0,10.964-2.092,15.146-6.275l78.742-78.742l78.743,78.742
                            c4.182,4.184,9.664,6.275,15.146,6.275s10.963-2.092,15.146-6.275c8.365-8.363,8.365-21.926,0-30.291l-78.744-78.742
                            l78.742-78.743c8.365-8.365,8.365-21.928,0-30.292c-8.363-8.365-21.926-8.365-30.291,0l-78.743,78.743l-78.742-78.743
                            c-8.365-8.365-21.928-8.365-30.292,0c-8.365,8.365-8.365,21.927,0,30.292l78.743,78.743l-78.743,78.742
                            C176.555,381.063,176.555,394.626,184.92,402.989z"/>
                            <path d="M387.844,409.765c-5.856,0-11.36-2.28-15.5-6.422l-78.389-78.389l-78.388,78.389c-4.14,4.142-9.645,6.422-15.5,6.422
                            s-11.36-2.28-15.5-6.422c-4.14-4.14-6.42-9.644-6.42-15.498c0-5.855,2.28-11.359,6.42-15.5l78.389-78.389l-78.389-78.389
                            c-8.546-8.547-8.546-22.453,0-31c4.14-4.14,9.644-6.42,15.5-6.42c5.855,0,11.36,2.28,15.5,6.42l78.389,78.389l78.389-78.389
                            c4.141-4.14,9.645-6.42,15.5-6.42c5.854,0,11.358,2.28,15.498,6.42c4.141,4.14,6.42,9.645,6.42,15.5s-2.279,11.36-6.42,15.5
                            l-78.389,78.389l78.391,78.389c4.141,4.141,6.421,9.645,6.421,15.5c0,5.854-2.28,11.358-6.421,15.498
                            C399.202,407.484,393.698,409.765,387.844,409.765z M293.955,323.54l79.096,79.096c3.95,3.952,9.204,6.129,14.793,6.129
                            c5.587,0,10.841-2.177,14.793-6.129c3.951-3.95,6.128-9.203,6.128-14.791s-2.177-10.842-6.128-14.793l-79.098-79.096
                            l79.096-79.096c3.951-3.951,6.127-9.205,6.127-14.793s-2.176-10.841-6.127-14.792c-3.95-3.951-9.203-6.127-14.791-6.127
                            s-10.842,2.176-14.793,6.127l-79.096,79.096l-79.096-79.096c-3.951-3.951-9.205-6.127-14.793-6.127
                            c-5.588,0-10.841,2.176-14.792,6.127c-8.156,8.157-8.156,21.428,0,29.585l79.096,79.096l-79.096,79.096
                            c-3.951,3.951-6.127,9.205-6.127,14.793s2.176,10.841,6.127,14.791c3.952,3.952,9.205,6.129,14.793,6.129
                            s10.841-2.177,14.793-6.129L293.955,323.54z"/></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                        </div>
                    </div>                    
                    <div class="border-t border-solid border-gray-200 h-1 overflow-visible after m-2"></div>
                        <div class="flex flex-col justify-center items-center lg:flex-row">
                            <div class="flex flex-col justify-between items-center lg:w-1/2">                                        
                                <img class="imgmod my-4" src="pics/cv-1.png"/>
                                <h4 class="text-3xl mb-2 font-semibold">Production</h4> 
                                <div class="flex flex-col items-start justify-center">                                
                                    <ul class="desc text-sm md:text-xl">
                                        <li class="list-disc">HTML/CSS/JS</li>
                                        <li class="list-disc">Site responsive</li>
                                        <li class="list-disc">Github</li>
                                    </ul>
                                </div>                        
                            </div>
                            <div class="flex flex-col justify-between items-center lg:w-1/2">                                    
                            <img class="imgmod my-4" src="pics/cv-2.png"/>
                            <h4 class="text-3xl mb-2 font-semibold">Infos</h4>
                            <div class="desc text-left sm:mx-16 lg:my-0 lg:mx-20 text-sm md:text-xl">
                                Petit projet d'un CV centré sur le développement web en HTML/CSS et quelques lignes de JS réalisé avant ma formation DWWM de 2020 consultable via Github.
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center items-center bg-gray-200 mt-4 p-2 hover:bg-gray-400 cursor-pointer">
                        <a href="https://olivefort.github.io/cv/" target="_blank" class="text-xl">Visiter le site</a>
                    </div>
                </div>            
            </div>
            <div class="modal h-full w-full hidden z-30 absolute">
                <div class="modale bg-white flex flex-col m-10 p-6">
                    <div class="modTitle flex flex-row justify-center items-center">
                        <h3 class="text-5xl font-bold">DWWM2020-1</h3>
                        <div class="closed cursor-pointer">
                            <svg version="1.1" id="closed" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 587.91 587.91" style="enable-background:new 0 0 587.91 587.91;" xml:space="preserve"><g><g><g>
                            <path d="M86.451,501.46c26.937,26.936,58.315,48.088,93.265,62.871c36.207,15.314,74.642,23.078,114.239,23.078
                            c39.596,0,78.032-7.764,114.239-23.078c34.949-14.783,66.328-35.936,93.266-62.871c26.936-26.938,48.09-58.316,62.871-93.266
                            c15.314-36.207,23.08-74.643,23.08-114.238c0-39.598-7.766-78.033-23.08-114.239c-14.781-34.95-35.936-66.328-62.871-93.265
                            c-26.938-26.937-58.316-48.09-93.266-62.872C371.986,8.265,333.551,0.501,293.955,0.501c-39.597,0-78.032,7.765-114.239,23.079
                            c-34.95,14.782-66.328,35.936-93.265,62.872s-48.09,58.315-62.873,93.264C8.265,215.923,0.5,254.358,0.5,293.956
                            c0,39.596,7.765,78.031,23.079,114.238C38.361,443.144,59.515,474.522,86.451,501.46z M293.955,43.341
                            c138.411,0,250.614,112.204,250.614,250.615c0,138.41-112.203,250.613-250.614,250.613S43.34,432.366,43.34,293.956
                            C43.34,155.545,155.544,43.341,293.955,43.341z"/>
                            <path d="M293.955,587.909c-39.667,0-78.167-7.778-114.434-23.117c-35.01-14.809-66.442-35.998-93.423-62.979
                            c-26.983-26.984-48.172-58.417-62.979-93.425C7.778,372.119,0,333.618,0,293.956c0-39.663,7.778-78.165,23.118-114.435
                            c14.807-35.008,35.997-66.44,62.979-93.423c26.982-26.983,58.415-48.172,93.423-62.979c36.27-15.34,74.771-23.118,114.434-23.118
                            c39.666,0,78.167,7.778,114.433,23.119c35.009,14.807,66.441,35.997,93.425,62.979c26.984,26.985,48.173,58.417,62.979,93.423
                            c15.341,36.27,23.119,74.771,23.119,114.434c0,39.662-7.778,78.163-23.119,114.433c-14.806,35.007-35.994,66.439-62.979,93.425
                            c-26.982,26.98-58.415,48.169-93.425,62.979C372.121,580.131,333.62,587.909,293.955,587.909z M293.955,1.001
                            c-39.529,0-77.898,7.751-114.044,23.039c-34.889,14.757-66.215,35.874-93.106,62.765c-26.892,26.892-48.009,58.217-62.766,93.105
                            C8.751,216.057,1,254.427,1,293.956C1,333.483,8.751,371.854,24.039,408c14.757,34.889,35.874,66.214,62.766,93.106
                            c26.89,26.889,58.215,48.006,93.106,62.765c36.142,15.287,74.512,23.038,114.044,23.038s77.901-7.751,114.044-23.039
                            c34.89-14.758,66.216-35.875,93.106-62.764c26.893-26.895,48.009-58.22,62.764-93.106
                            c15.289-36.146,23.041-74.516,23.041-114.044c0-39.529-7.752-77.899-23.041-114.044c-14.754-34.887-35.871-66.212-62.764-93.106
                            c-26.892-26.891-58.218-48.008-93.106-62.765C371.855,8.752,333.485,1.001,293.955,1.001z M293.955,545.069
                            c-67.075,0-130.136-26.12-177.565-73.549c-47.429-47.43-73.55-110.489-73.55-177.564S68.96,163.82,116.39,116.391
                            c47.429-47.429,110.49-73.55,177.565-73.55c67.075,0,130.135,26.121,177.564,73.55c47.43,47.43,73.55,110.49,73.55,177.565
                            s-26.12,130.135-73.55,177.564C424.09,518.949,361.029,545.069,293.955,545.069z M293.955,43.841
                            c-66.808,0-129.617,26.017-176.858,73.257c-47.24,47.241-73.257,110.05-73.257,176.858c0,66.808,26.017,129.617,73.257,176.856
                            c47.24,47.24,110.05,73.257,176.858,73.257s129.617-26.017,176.857-73.257c47.24-47.239,73.257-110.049,73.257-176.856
                            c0-66.808-26.017-129.618-73.257-176.858C423.571,69.857,360.763,43.841,293.955,43.841z"/></g>
                            <g><path d="M184.92,402.989c4.183,4.184,9.664,6.275,15.146,6.275c5.482,0,10.964-2.092,15.146-6.275l78.742-78.742l78.743,78.742
                            c4.182,4.184,9.664,6.275,15.146,6.275s10.963-2.092,15.146-6.275c8.365-8.363,8.365-21.926,0-30.291l-78.744-78.742
                            l78.742-78.743c8.365-8.365,8.365-21.928,0-30.292c-8.363-8.365-21.926-8.365-30.291,0l-78.743,78.743l-78.742-78.743
                            c-8.365-8.365-21.928-8.365-30.292,0c-8.365,8.365-8.365,21.927,0,30.292l78.743,78.743l-78.743,78.742
                            C176.555,381.063,176.555,394.626,184.92,402.989z"/>
                            <path d="M387.844,409.765c-5.856,0-11.36-2.28-15.5-6.422l-78.389-78.389l-78.388,78.389c-4.14,4.142-9.645,6.422-15.5,6.422
                            s-11.36-2.28-15.5-6.422c-4.14-4.14-6.42-9.644-6.42-15.498c0-5.855,2.28-11.359,6.42-15.5l78.389-78.389l-78.389-78.389
                            c-8.546-8.547-8.546-22.453,0-31c4.14-4.14,9.644-6.42,15.5-6.42c5.855,0,11.36,2.28,15.5,6.42l78.389,78.389l78.389-78.389
                            c4.141-4.14,9.645-6.42,15.5-6.42c5.854,0,11.358,2.28,15.498,6.42c4.141,4.14,6.42,9.645,6.42,15.5s-2.279,11.36-6.42,15.5
                            l-78.389,78.389l78.391,78.389c4.141,4.141,6.421,9.645,6.421,15.5c0,5.854-2.28,11.358-6.421,15.498
                            C399.202,407.484,393.698,409.765,387.844,409.765z M293.955,323.54l79.096,79.096c3.95,3.952,9.204,6.129,14.793,6.129
                            c5.587,0,10.841-2.177,14.793-6.129c3.951-3.95,6.128-9.203,6.128-14.791s-2.177-10.842-6.128-14.793l-79.098-79.096
                            l79.096-79.096c3.951-3.951,6.127-9.205,6.127-14.793s-2.176-10.841-6.127-14.792c-3.95-3.951-9.203-6.127-14.791-6.127
                            s-10.842,2.176-14.793,6.127l-79.096,79.096l-79.096-79.096c-3.951-3.951-9.205-6.127-14.793-6.127
                            c-5.588,0-10.841,2.176-14.792,6.127c-8.156,8.157-8.156,21.428,0,29.585l79.096,79.096l-79.096,79.096
                            c-3.951,3.951-6.127,9.205-6.127,14.793s2.176,10.841,6.127,14.791c3.952,3.952,9.205,6.129,14.793,6.129
                            s10.841-2.177,14.793-6.129L293.955,323.54z"/></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                        </div>
                    </div>                    
                    <div class="border-t border-solid border-gray-200 h-1 overflow-visible after m-2"></div>
                        <div class="flex flex-col justify-center items-center lg:flex-row">
                            <div class="flex flex-col justify-between items-center lg:w-1/2">                                        
                                <img class="imgmod my-4" src="pics/cv-1.png"/>
                                <h4 class="text-3xl mb-2 font-semibold">Production</h4> 
                                <div class="flex flex-col items-start justify-center">                                
                                    <ul class="desc text-sm md:text-xl">
                                        <li class="list-disc">HTML/CSS/JS</li>
                                        <li class="list-disc">Site responsive</li>
                                        <li class="list-disc">Github</li>
                                    </ul>
                                </div>                        
                            </div>
                            <div class="flex flex-col justify-between items-center lg:w-1/2">                                    
                            <img class="imgmod my-4" src="pics/cv-2.png"/>
                            <h4 class="text-3xl mb-2 font-semibold">Infos</h4>
                            <div class="desc text-left sm:mx-16 lg:my-0 lg:mx-20 text-sm md:text-xl">
                                Petit projet d'un CV centré sur le développement web en HTML/CSS et quelques lignes de JS réalisé avant ma formation DWWM de 2020 consultable via Github.
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center items-center bg-gray-200 mt-4 p-2 hover:bg-gray-400 cursor-pointer">
                        <a href="https://olivefort.github.io/cv/" target="_blank" class="text-xl">Visiter le site</a>
                    </div>
                </div>            
            </div>
        </section>
        <section id="cont" class="contact col-span-6 grid grid-cols-6 justify-center py-8 px-4">
            <h2 class="col-span-6 justify-self-center mb-2 text-3xl font-bold z-10">Contact</h2>
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
                    <button id="submit" name="btnsubmit" type="submit" value="Envoyer" class="bg-gray-100 border-gray-200 border rounded-sm">Envoyer</button>
                </div>
                <?php if(isset($msg)){echo $msg;}?>
            </form>            
        </section>
    </main>
    <footer class="footer">
        <nav class="footer-nav">
            <p class="cop"> @copyright d3LTa7 2021 Version α 1.1</p>
        </nav>
    </footer>    
    <script src="script.js"></script>
</body>
</html>