<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Welcome | CodeMontor</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <div class="container_top" id="particles-js">
        <div class="container_header">
            <header>
                <div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" alt=""></a></div>
                <div class="header_links">
                    <a href="{{ url('/login') }}">Se connecter</a>
                    <a href="{{ url('/account-type') }}">S'inscrire</a>
                    <a href="#" class="menu_icon">?</a>
                </div>
            </header>
        </div>
        <div class="header_content">
            <a href="#1sectionw">Commencer</a>
            <h2>Apprenez la programmation autrement...</h2>
        </div>
    </div>
    <section class="problem_section">
        <div class="content" id="1section">
            <div class="content_text">
                <p>La première plateforme qui combine cours interactifs et génération de code pédagogique.</p>
                <p>Comprenez “pourquoi” le code fonctionne, pas seulement “comment”</p>
            </div>
            <div class="content_steps">
                <div class="two_steps">
                    <div class="step">
                        <i class="fa-solid fa-person-chalkboard"></i>
                        <h4>Cours Interactifs</h4>
                    </div>
                    <div class="step">
                        <i class="fa-solid fa-cube"></i>
                        <h4>Exercices Pratiques </h4>
                    </div>
                </div>
                <div class="two_steps">
                    <div class="step">
                        <i class="fa-solid fa-laptop-code"></i>
                        <h4>Code Générateur</h4>
                    </div>
                    <div class="step">
                        <i class="fa-solid fa-robot"></i>
                        <h4>Formateurs Pro</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="design">
            <div class="img"><img src="{{ asset('img/background2.jpg') }}" alt=""></div>
            <div class="rectongle"></div>
        </div>
    </section>
    <section class="nightmare_section">
        <div class="title">
            <h1>Le cauchemar de tout apprenant en code</h1>
            <div class="title_ligne"></div>
        </div>
        <div class="content_container">
            <div class="content">
                <div class="step">
                    <span>1</span>
                    <p>J'ai passé 3 heures sur un exercice simple.</p>
                </div>
                <div class="step">
                    <p> J'ai trouvé la solution sur un site</p>
                    <span>2</span>
                </div>
                <div class="step">
                    <span>3</span>
                    <p>Mais je n'ai toujours pas compris pourquoi ça marche</p>
                </div>
            </div>
            <div class="design">
                <div class="img"><img src="{{ asset('img/background3.jpg') }}" alt=""></div>
            </div>
        </div>
    </section>
    <section class="infos_section">
        <div class="infos">
            <div class="img"><img src="{{ asset('img/background4.jpg') }}" alt=""></div>
            <div class="steps">
                <div class="step">
                    <span>1</span>
                    <h4>Choisissez votre parcours</h4>
                    <p> - Python <br>- JavaScript <br>- Data Science <br>- Algorithmes</p>
                    <a href="#">Voir Plus</a>
                    <h4> Du débutant à l'expert, on a le programme qu'il vous faut.</h4>
                </div>
                <div class="step">
                    <span>2</span>
                    <h4>Apprenez en pratiquant</h4>
                    <p> Théorie interactive <br> + exercices corrigés <br> instantanément.</p>
                    <a href="#">Savoir plus</a>
                    <h4> Tapez du code, exécutez-le, voyez le résultat en directTapez du code, exécutez-le, voyez le
                        résultat en direct</h4>
                </div>
                <div class="step">
                    <span>3</span>
                    <h4> Débloquez-vous avec l'IA</h4>
                    <p> Bloqué sur <br> un concept ?</p>
                    <a href="#">Savoir Plus</a>
                    <h4>Demandez à notre IA. Elle génèr du code et vous l'explique comme si c'était un vrai prof.</h4>
                </div>
                <div class="step">
                    <span>4</span>
                    <h4>Partagez et grandissez avec la communauté</h4>
                    <p> Rejoignez des milliers d'apprenants, <br> échangez vos solutions, <br> participez aux défis,
                        <br> et faites-vous mentor par les plus expérimentés
                    </p>
                    <a href="#">Savoir Plus</a>
                    <h4>L'apprentissage ne se fait pas seul</h4>
                </div>
            </div>
        </div>
        <div class="back_blue"></div>
    </section>
    <section class="promos_section">
        <div class="rec_white"></div>
        <div class="content">
            <h3>Du <span>"Hello World"</span> à votre premier job de développeur</h3>
            <p>Un parcours structuré, des projets concrets, et un assistant IA qui vous guide à chaque étape. Rejoignez
                les 85% de nos apprenants qui changent de carrière.</p>
        </div>
        <div class="img"><img src="{{ asset('img/background5.jpg') }}" alt=""></div>
    </section>
    <section class="obj_section">
        <div class="title">
            <h1>Des parcours pour tous les objectifs</h1>
            <div class="title_ligne"></div>
        </div>
        <div class="obj_div">
            <div class="rectongle"></div>
            <div class="img">
                <img src="{{ asset('img/backgroung6.jpg') }}" alt="">
                <div class="design_img"></div>
            </div>
            <div class="cours">
                <h3>Python</h3>
                <ul>
                    <li>54 Heures</li>
                    <li>12 Modules</li>
                    <li>150 Exercices</li>
                </ul>
                <p>4.8 / 5</p>
                <a href="#">Découvrir</a>
                <button class="flech_left"><i class="fa-solid fa-circle-chevron-left"></i></button>
                <button class="flech_right"><i class="fa-solid fa-circle-chevron-right"></i></button>
            </div>

        </div>
    </section>
    <section class="generator_section">
        <h1>GÉNÉRATEUR DE CODE - DÉMO EN DIRECT</h1>
        <div class="generator_input">
            <input type="text" placeholder="Décrivez ce que vous voulez comprendre...">
            <i class="fa-solid fa-magnifying-glass-arrow-right"></i>
        </div>
        <h2>Pour tester tous les langages et des requêtes plus complexes</h2>
        <p>créez votre compte gratuit !</p>
    </section>
    <footer class="footer_section">
        <h2><span>CodeMentor :</span> L'anti-école du code traditionnelle</h2>
        <div class="footer_top">
            <div class="footer_links">
                <ul class="social_medias">
                    <li><a href="#"><i class="fa-regular fa-paper-plane"></i><span>hello@bytesLab.com</span></a></li>
                    <li><a href="#"><i class="fa-brands fa-whatsapp"></i><span>+212618733244</span></a></li>
                </ul>
                <ul>
                    <li>Company</li>
                    <li>Features</li>
                    <li>About Us</li>
                    <li>Contact</li>
                </ul>
                <ul>
                    <li>Help</li>
                    <li>FAQ</li>
                    <li>Help Center</li>
                    <li>Support</li>
                </ul>
            </div>
            <div class="footer_adds">
                <h3>Newsletter</h3>
                <p>Recevez nos astuces et nouveaux cours</p>
                <div class="subscribe">
                    <input type="text" placeholder="Votre Email">
                    <input type="submit" value="S'abonner" class="submit">
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <p>© 2026 CodeMentor Interactive (DevLearn Solutions) - CGV - Confidentialité - Mentions légales</p>
        </div>
    </footer>
    <script src="{{ asset('js/particles.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>