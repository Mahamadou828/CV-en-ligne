<?php 
    function russianSite ()
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
                                <a class='nav-link' href='#about'>Кто я</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='#skills'>Навыки</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='#experience'>Опыть</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='#education'>Образование </a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='#portfolio'>Портфолио </a>
                            </li>
                            <li class='nav-item '>
                                <a class='nav-link' href='#contact'>Контакт</a>
                            </li>
                            <li class='nav-item'>
                                    <div class='dropdown'>
                                        <button class='btn buttonChoice dropdown-toggle' type='button' id='buttonSelect' data-toggle='dropdown'>сменит язык</button>
                                        <div class='dropdown-menu' class='dropdownMenu' aria-labelledby='buttonSelect'>
                                            <a class='dropdown-item dropdownSelect' href='index.php?language=" . '"francais"' . "'>Francais</a>
                                            <a class='dropdown-item dropdownSelect' href='index.php?language=" . '"russe"' . "'>Русский</a>
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
            <h1>здравствуйте, Я Махамаду</h1>
            <h3>начинающий программист в сфере веб разработки</h3>
           <!-- <a href='#' class='button1'>Скачать резюме</a><br> -->
        </div>
        
        <button type='button' class='button2 btn'>Обо мне? <span class='glyphicon glyphicon-user'></span></button>
        
    </section>
    
    <section id='informationLabel' class='container-fluid'>
        <div id='information'>
        
            <p>
            Добрый день , меня зовут Махамаду Самаке и я студент Университета РТУ МИРЭА. На данный момент я учусь на веб-разработчика, используя различные онлайн-курсы (openclassromm , udemy , aac… ).
            Я приобрел базовые навыки для создание сайтов. Но, к сожалению мне не хватает именно профессионального опыта в этой области. если вы ищите сотрудника для создания веб-сайта то добро пожаловать            
            </p>
        
        </div>
    </section>
    
    <section id='skills'>
    
        <div class='red-divider'>
        </div>
        
        <div class='heading'><h2>Навыки</h2></div>
        
        <div class='container'>
            <div class='row'>
                <div class='col-md-6 col-lg-4 col-sm-6'>
                    <div class='card'>
                        <img src='image-cv/back-end.png' alt=''>
                        <h2>Back-end разработка </h2>
                        <div class='hide'>
                            <p>Знания языка PHP, а также работа с база данным на SQL</p>
                            <a href='#portfolio' class='button-link'>Посмотреть на портфолио </a>
                        </div>
                    </div>
                </div>

                <div class='col-md-6 col-lg-4 col-sm-6'>
                    <div class='card'>
                        <img src='image-cv/front-end.png' alt=''>
                        <h2>Front-end разработка</h2>
                        <div class='hide'>
                            <p>Владения языка Javscript, и знание фреймворков Jquery, React.js </p>
                            <a href='#portfolio' class='button-link'>Посмотреть на портфолио</a>
                        </div>
                    </div>
                </div>

                <div class='col-md-6 col-lg-4 col-sm-6'>
                    <div class='card'>
                        <img src='image-cv/html-css.png' alt=''>
                        <h2>Создание статического сайта</h2>
                        <div class='hide'>
                            <p>Знания HTML5/CSS3 а также Bootstrap для создание резиновых сайтов (responsive design)</p>
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
                        <h2>Владения языка</h2>
                        <div class='hide'>
                            <p>Владение русским языком на уровне B2, И знание французского языка</p>
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
            
            <div class='heading'><h2>Различные проекты</h2></div>
            
            <ul class='timeline'>
                <li>
                    <div class='timeline-badge'><span class='glyphicon glyphicon-briefcase'></span></div>
                    
                    <div class='timeline-panel-container'>
                        <div class='timeline-panel'>
                            <div class='timeline-heading'>
                                <h3>Участия в проекте 'BurgerCommand'</h3>
                                <h4>Онлайн обучения apprendre-a-coder.com</h4>
                                <p class='text-mute'><small class='glyphicon glyphicon-time'></small> 2019 - 2020</p>
                            </div>
                            <div class='timeline-body'>
                                <p>Создание административной части как проекта при прохождении онлайн-курса по веб-разработке</p>
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
        
        <div class='heading'><h2>Образование</h2></div>
        
        <div class='container'>
            <div class='row'>
                
                <div class='col-sm-6 col-md-4'>
                    <div class='education-block container'>
                        <span class='glyphicon glyphicon-education'></span>
                        <h3>МИРЭА-Российский технологический университет</h3>
                        <h4>Студент вуза МИРЭА</h4>
                        <div class='red-divider'></div>
                        <p></p>
                    </div>
                </div>

                <div class='col-sm-6 col-md-4'>
                    <div class='education-block container'>
                        <span class='glyphicon glyphicon-education'></span>
                        <h3>Openclassroom.com</h3>
                        <h4>Французский онлайн курс по программированию</h4>
                        <div class='red-divider'></div>
                        <p></p>
                    </div>
                </div>
                
                <div class='col-sm-6 col-md-4'>
                    <div class='education-block'>
                        <span class='glyphicon glyphicon-education'></span>
                        <h3>Apprendre-a-coder.com</h3>
                        <h4>Онлайн курс по разработки Front-end</h4>
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
        
        <div class='heading'><h2>Оставить сообщения</h2></div>
        
        <div class='row'>
            
            <div class='col-lg-10 offset-lg-1'>
                
                <form id='contact-form' method='post' action='' role='form'>
                    
                    <div class='row'>
                        
                        <div class='col-md-6'>
                            <label for='firstname'>Имя<span class='white'> *</span></label>
                            <input id= 'firstname' type='text' name='first-name' class='form-control' placeholder='ваша имя'>
                            <p class='comment'></p>
                        </div>
                        
                        <div class='col-md-6'>
                            <label for='name'>Фамилия<span class='white'> *</span></label>
                            <input id='name' type='text' name='name' class='form-control' placeholder='ваша фамилия'>
                            <p class='comment'></p>
                        </div>
                        
                        <div class='col-md-6'>
                            <label for='email'>Email<span class='white'> *</span></label>
                            <input id='email' type='email' name='email' class='form-control' placeholder='ваш Email'>
                            <p class='comment'></p>
                        </div>
                        
                        <div class='col-md-6'>
                            <label for='phone'>Номер телефона</label>
                            <input id='phone' type='tel' name='phone' class='form-control' placeholder='ваш номер телефона(не обязательно)'>
                            <p class='comment'></p>
                        </div>
                        
                        <div class='col-md-12'>
                            <label for='message'>Сообщение</label>
                            <textarea id='message' name='message' class='form-control' placeholder='Сообщение' rows='4'></textarea>
                            <p class='comment'></p>
                        </div>
                        
                        <div class='col-md-12'>
                            <p class='white'><strong>* Эта информация обязательна</strong></p>
                        </div>
                        <div class='col-md-12'>
                            <input type='submit' class='button3' value='Отправить'>
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