<?php 
    function frenchSite ()
    {
        echo "<section id='barre-navigation'>
            
        <div id='navBar'>
            <nav class='navbar navbar-expand-lg  navbar-light bg-light fixed-top navbar-dark bg-company-red'>
                <div class='container center'>
                    <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#mynavBar' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                        <span class='navbar-toggler-icon'></span>
                    </button>

                    <div class='collapse navbar-collapse' id='mynavBar'>
                        <ul class='navbar-nav mr-auto mx-auto nav-pills'>
                            <li class='nav-item'>
                                <a class='nav-link' href='#about'>Moi</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='#skills'>Competence</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='#experience'>Experience</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='#education'>Eduction </a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='#portfolio'>Portfolio </a>
                            </li>
                            <li class='nav-item '>
                                <a class='nav-link' href='#contact'>Contact</a>
                            </li>
                            <li class='nav-item'>
                                    <div class='dropdown'>
                                        <button class='btn buttonChoice dropdown-toggle' type='button' id='buttonSelect' data-toggle='dropdown'>Langue</button>
                                        <div class='dropdown-menu' class='dropdownMenu' aria-labelledby='buttonSelect'>
                                            <a class='dropdown-item dropdownSelect' href='index.php?language=" . '"francais"' . "'>Francais</a>
                                            <a class='dropdown-item dropdownSelect' href='index.php?language=" . '"russe"' . "'>Русски</a>
                                        </div>
                                    </div>
                                </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
    </section>
    
    <section id ='about' class='container-fluid'>
        
        <div class='col-8 col-md-4 profile-picture'>
           <img src='image-cv/ma photo.png' alt='samake' id='image-cv'>
        </div>
        
        <div class='heading'>
            <h1>Bonjour, moi c'est Mahamadou</h1>
            <h3>Developpeur web junior</h3>
           <!-- <a href='#' class='button1'>Télécharger CV</a><br> -->
        </div>
        
        <button type='button' class='button2 btn'>Plus d'info <span class='glyphicon glyphicon-user'></span></button>
        
    </section>
    
    <section id='informationLabel' class='container-fluid'>
        <div id='information'>
        
            <p>
                Etudiant de seconde annee a l'universite technologique de moscou, je suis un passionner de developpement et plus precisement de web programmation. Etant de nature debrouillard, je me suis former comme autodidacte au metier de developpeur web, a travers des formations en ligne , notamment celle d'openclassrooms , j'ai acquis des competences et des capacites me permettant de developper des projets complexes. Aujourd'hui dans le but d'augmenter mon experience professionnel je suis en quete de stage et de projet serieux au sein d'une entreprise. Donc si vous avez besoins de developper un site web dynamique ou des features pour une applications mobile ou web , je suis a votre disposition) 
            </p>
        
        </div>
    </section>
    
    <section id='skills'>
    
        <div class='red-divider'>
        </div>
        
        <div class='heading'><h2>Competence</h2></div>
        
        <div class='container'>
            <div class='row'>
                <div class='col-md-6 col-lg-4 col-sm-6'>
                    <div class='card'>
                        <img src='image-cv/back-end.png' alt=''>
                        <h2>Developpement Back-end </h2>
                        <div class='hide'>
                            <p>Connaissance du language PHP ainsi que de ces framework Laravel , Symphony. Ainsi que de la manipulation des base de donne en SQL</p>
                            <a href='#portfolio' class='button-link'>Voir portfolio </a>
                        </div>
                    </div>
                </div>

                <div class='col-md-6 col-lg-4 col-sm-6'>
                    <div class='card'>
                        <img src='image-cv/front-end.png' alt=''>
                        <h2>Developpement Front-end</h2>
                        <div class='hide'>
                            <p>Connaissance de Javascript ainsi que des framework Jquery , React.js</p>
                            <a href='#portfolio' class='button-link'>Voir portfolio</a>
                        </div>
                    </div>
                </div>

                <div class='col-md-6 col-lg-4 col-sm-6'>
                    <div class='card'>
                        <img src='image-cv/html-css.png' alt=''>
                        <h2>Creation de site statique</h2>
                        <div class='hide'>
                            <p>HTML5/CSS3 et utilisation des frameworks bootstrap</p>
                            <a href='#portfolio' class='button-link'>Посмотреть на портфолио</a>
                        </div>
                    </div>
                </div>
                <!--
                 <div class='col-md-6 col-lg-4 col-sm-6'>
                    <div class='card'>
                        <img src='image-cv/db.png' alt=''>
                        <h2>Base de donnee</h2>
                        <div class='hide'>
                            <p>Mongodb , SQL</p>
                            <a href='#portfolio' class='button-link'>Посмотреть на портфолио</a>
                        </div>
                    </div>
                </div>

                <div class='col-md-6 col-lg-4 col-sm-6'>
                    <div class='card'>
                        <img src='image-cv/mobile.png' alt=''>
                        <h2>Developpement mobile</h2>
                        <div class='hide'>
                            <p>React Native , Kotlin</p>
                            <a href='#portfolio' class='button-link'>Посмотреть на портфолио</a>
                        </div>
                    </div>
                </div>
                -->
                <div class='col-md-6 col-lg-4 col-sm-6'>
                    <div class='card'>
                        <img src='image-cv/langue.png' alt=''>
                        <h2>Langue</h2>
                        <div class='hide'>
                            <p>Maitrise du russe , de l'anglais et du francais</p>
                            <a href='#portfolio' class='button-link'>Посмотреть на портфолию</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id='experience'>
        
        <div class='container'>
    
            <div class='white-divider'></div>
            
            <div class='heading'><h2>Expérience proféssionelle</h2></div>
            
            <ul class='timeline'>
                <li>
                    <div class='timeline-badge'><span class='glyphicon glyphicon-briefcase'></span></div>
                    
                    <div class='timeline-panel-container'>
                        <div class='timeline-panel'>
                            <div class='timeline-heading'>
                                <h3>Creation du projet 'BurgerCommand'</h3>
                                <h4>Formation en ligne apprendre-a-coder.com</h4>
                                <p class='text-mute'><small class='glyphicon glyphicon-time'></small> 2019 - 2020</p>
                            </div>
                            <div class='timeline-body'>
                                <p>Creation d'un projet qui consistait a coder la partie admin d'un site web , de manipuler la base de donne SQL et de coder le back-end en php</p>
                            </div>
                        </div>
                    </div>
                </li>
                
                <!-- <li>
                    <div class='timeline-badge'><span class='glyphicon glyphicon-briefcase'></span></div>
                    
                    <div class='timeline-panel-container-inverted'>
                        <div class='timeline-panel'>
                            <div class='timeline-heading'>
                                <h3>FACEBOOK</h3>
                                <h4>Développeur Web</h4>
                                <p class='text-mute'><small class='glyphicon glyphicon-time'></small> 2019 - 2020</p>
                            </div>
                            <div class='timeline-body'>
                                <p>Développement du bouton Share pour les applis Web mobile</p>
                                <p>Lancement automatique des vidéos en mode mute depuis la Timeline</p>
                            </div>
                        </div>
                    </div>
                </li>
                
                <li>
                    <div class='timeline-badge'><span class='glyphicon glyphicon-briefcase'></span></div>
                    
                    <div class='timeline-panel-container'>
                        <div class='timeline-panel'>
                            <div class='timeline-heading'>
                                <h3>TWITTER</h3>
                                <h4>Développeur Web Junior </h4>
                                <p class='text-mute'><small class='glyphicon glyphicon-time'></small> 2019 - 2020</p>
                            </div>
                            <div class='timeline-body'>
                                <p>Création et Développement du Retweet pour l'appli Web</p>
                                <p>Intégration des vidéos sur les applis web mobile</p>
                            </div>
                        </div>
                    </div>
                </li> -->
                
            </ul>
        </div>
        
    </section>
    
    <section id='education'>
        <div class='red-divider'>
        </div>
        
        <div class='heading'><h2>Education</h2></div>
        
        <div class='container'>
            <div class='row'>
                
                <div class='col-sm-6 col-md-4'>
                    <div class='education-block container'>
                        <span class='glyphicon glyphicon-education'></span>
                        <h3>МИРЭА-Universite de technologie de moscou</h3>
                        <h4>Etudiant de 2eme annee dans la faculter 'ingenieur en instrumentation'</h4>
                        <div class='red-divider'></div>
                        <p></p>
                    </div>
                </div>

                <div class='col-sm-6 col-md-4'>
                    <div class='education-block container'>
                        <span class='glyphicon glyphicon-education'></span>
                        <h3>Openclassroom.com</h3>
                        <h4>formation de developpeur web</h4>
                        <div class='red-divider'></div>
                        <p></p>
                    </div>
                </div>
                
                <div class='col-sm-6 col-md-4'>
                    <div class='education-block'>
                        <span class='glyphicon glyphicon-education'></span>
                        <h3>Apprendre-a-coder.com</h3>
                        <h4>formation sur les bases de la programmation web</h4>
                        <div class='red-divider'></div>
                        <p></p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    <section id='portfolio'>
    
        <div class='container'>
            
            <div id = 'carousel-Portfolio' class='carousel slide' data-ride='carousel'>
                <ol>
                    <li data-target='#carousel-Portfolio' data-slide-to = '0' class='active'></li>
                    <li data-target='#carousel-Portfolio'  data-slide-to = '1'></li>
                    <li data-target='#carousel-Portfolio'  data-slide-to = '2'></li>
                </ol>

                <div class='carousel-inner image-cut'>
                    <div class='carousel-item active'>
                        <img class='d-block w-100' src='images/travelagencyimg.png' alt='First slide'>
                    </div>
                    <div class='carousel-item'>
                        <img class='d-block w-100' src='images/startop.png' alt='Second slide'>
                    </div>
                    <div class='carousel-item'>
                        <img class='d-block w-100' src='images/burgercommand.png' alt='Third slide'>
                    </div>
                </div>

                <a class='carousel-control-prev' href='#carousel-Portfolio' role='button' data-slide='prev'>
                    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                    <span class='sr-only'>Previous</span>
                </a>

                <a class='carousel-control-next' href='#carousel-Portfolio' role='button' data-slide='next'>
                    <span class='carousel-control-next-icon' aria-hidden='true'></span>
                    <span class='sr-only'>Next</span>
                </a>
            </div>
                
        </div>

        </div>
    </section>
    
    <section id='contact'>
        
        <div class='container'>
        
        <div class='red-divider'>
        </div>
        
        <div class='heading'><h2>Contact</h2></div>
        
        <div class='row'>
            
            <div class='col-lg-10 offset-lg-1'>
                
                <form id='contact-form' method='post' action='' role='form'>
                    
                    <div class='row'>
                        
                        <div class='col-md-6'>
                            <label for='firstname'>Prenom<span class='white'> *</span></label>
                            <input id= 'firstname' type='text' name='first-name' class='form-control' placeholder='Votre prenom'>
                            <p class='comment'></p>
                        </div>
                        
                        <div class='col-md-6'>
                            <label for='name'>Nom<span class='white'> *</span></label>
                            <input id='name' type='text' name='name' class='form-control' placeholder='Votre Nom'>
                            <p class='comment'></p>
                        </div>
                        
                        <div class='col-md-6'>
                            <label for='email'>Email<span class='white'> *</span></label>
                            <input id='email' type='email' name='email' class='form-control' placeholder='Votre Email'>
                            <p class='comment'></p>
                        </div>
                        
                        <div class='col-md-6'>
                            <label for='phone'>Numero de telephone</label>
                            <input id='phone' type='tel' name='phone' class='form-control' placeholder='Votre Phone'>
                            <p class='comment'></p>
                        </div>
                        
                        <div class='col-md-12'>
                            <label for='message'>Contact</label>
                            <textarea id='message' name='message' class='form-control' placeholder='Entrez votre message' rows='4'></textarea>
                            <p class='comment'></p>
                        </div>
                        
                        <div class='col-md-12'>
                            <p class='white'><strong>* Ces informations sont requises</strong></p>
                        </div>
                        <div class='col-md-12'>
                            <input type='submit' class='button3' value='Envoyez'>
                        </div>
                        
                    </div>
                    
                </form>
                
                
            </div>
            
        </div>
        
    </div>
        
    </section>
    
    <footer class='text-center'>
        <a href='#about'>
            <span class='glyphicon glyphicon-chevron-up'></span>
        </a>
        <h5>
            @ 2019 Mahamadou Samaké
        </h5>
    </footer>" ;

    }



?>