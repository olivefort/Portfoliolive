<?php
    // $showJS = false;
    if(isset($_POST['btnsubmit'])){
        if(!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['sujet']) AND !empty($_POST['message'])){
            $header="MIMe-version: 1.0\r\n";
            $header.='From:"ofort.com"<support@d3LTa7.com>'."\n";
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
            mail("olive.fort@gmail.com", "des donuts !", $message, $header);  
            $msg="Votre mail a bien été envoyé !";
            // $showJS = true;
        }else{
            $msg="Merci de remplir tout les champs !";
            // $showJS = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
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
            <?php include 'presentation.php' ?>            
        </section>
        <section id="compe" class="compe grid-cols-6">
            <?php include 'competence.php' ?>                        
        </section>
        <section class="md1 col-span-6 h-64 xl:h-80 2xl:h-96">
        </section>
        <section id="portfo" class="port col-span-6 grid-cols-12">
            <?php include 'portfolio.php' ?> 
        </section>
        <?php include 'modale.php' ?>        
        <section class="md2 col-span-6 h-64 xl:h-80 2xl:h-96">
        </section>
        <a name="formulaire"></a>
        <section id="cont" class="contact grid-cols-6">
            <?php include 'contact.php' ?>           
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
    <script src="script.js"></script> 
</body>
</html>

