<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Welcome | CodeMontor</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Space+Grotesk:wght@600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            corePlugins: {
                preflight: false,
            },
            theme: {
                extend: {
                    "colors": {
                        "outline": "#747779",
                        "tertiary-dim": "#004e9d",
                        "primary-fixed": "#3adffa",
                        "on-primary-fixed": "#00363e",
                        "secondary-dim": "#455064",
                        "on-primary": "#daf8ff",
                        "error-dim": "#9f0519",
                        "on-secondary-fixed": "#354053",
                        "tertiary": "#005ab3",
                        "inverse-on-surface": "#9a9d9f",
                        "on-tertiary": "#eff2ff",
                        "inverse-primary": "#3adffa",
                        "on-secondary-fixed-variant": "#515c70",
                        "on-tertiary-fixed": "#001737",
                        "outline-variant": "#abadaf",
                        "secondary-fixed": "#d8e3fb",
                        "primary-fixed-dim": "#1ad0eb",
                        "primary": "#006573",
                        "primary-dim": "#005865",
                        "surface-bright": "#f5f7f9",
                        "surface-tint": "#006573",
                        "surface-container": "#e5e9eb",
                        "on-background": "#2c2f31",
                        "tertiary-container": "#84b1ff",
                        "background": "#f5f7f9",
                        "inverse-surface": "#0b0f10",
                        "on-surface": "#2c2f31",
                        "error": "#b31b25",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary-container": "#475266",
                        "secondary-container": "#d8e3fb",
                        "on-error": "#ffefee",
                        "on-tertiary-fixed-variant": "#003874",
                        "on-error-container": "#570008",
                        "surface-variant": "#d9dde0",
                        "secondary": "#515c70",
                        "on-primary-container": "#004b56",
                        "error-container": "#fb5151",
                        "surface-dim": "#d0d5d8",
                        "on-surface-variant": "#595c5e",
                        "tertiary-fixed-dim": "#6aa3ff",
                        "primary-container": "#3adffa",
                        "tertiary-fixed": "#84b1ff",
                        "on-primary-fixed-variant": "#005561",
                        "on-secondary": "#eff2ff",
                        "surface-container-highest": "#d9dde0",
                        "surface": "#f5f7f9",
                        "secondary-fixed-dim": "#cad5ed",
                        "surface-container-low": "#eef1f3",
                        "surface-container-high": "#dfe3e6",
                        "on-tertiary-container": "#003064"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "3xl": "1.5rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Space Grotesk"],
                        "display": ["Space Grotesk"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            overflow-x: hidden;
        }

        .tour-modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(13, 27, 42, 0.7);
            align-items: center;
            justify-content: center;
        }

        .tour-modal.show {
            display: flex;
        }

        .tour-modal-content {
            background-color: #D0E3E6;
            padding: 50px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 15px 3px #30D4ED;
            max-width: 600px;
            height: 50vh;
            width: 90%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: column;
        }

        .tour-modal-content p {
            font-size: 1.7rem;
            margin-bottom: 20px;
            color: #333;
            width: 60%;
            font-weight: 600;
        }

        .tour-modal-buttons {
            display: flex;
            gap: 55px;
            justify-content: center;
        }

        .tour-modal-buttons button {
            padding: 15px 35px;
            border: none;
            border-radius: 9px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-tour-ok {
            background-color: linear-gradient(to right, rgba(51, 170, 234, 1), rgba(153, 224, 240, 0.56));
            color: black;
        }

        .btn-tour-ok:hover {
            background-color: #0056b3;
        }

        .btn-tour-own {
            background-color: #6c757d;
            color: white;
        }

        .btn-tour-own:hover {
            background-color: #5a6268;
        }

        /* problem_section scroll animations */
        .ps-rectangle {
            opacity: 0;
            transform: translateX(120px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }

        .ps-img {
            opacity: 0;
            transform: translate(-80px, -60px);
            transition: opacity 0.7s ease 0.45s, transform 0.7s ease 0.45s;
        }

        .ps-content-text {
            opacity: 0;
            transform: translateY(-60px);
            transition: opacity 0.6s ease 0.9s, transform 0.6s ease 0.9s;
        }

        .ps-step {
            opacity: 0;
            transform: scale(0.85);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .ps-rectangle.ps-visible {
            opacity: 1;
            transform: translateX(0);
        }

        .ps-img.ps-visible {
            opacity: 1;
            transform: translate(0, 0);
        }

        .ps-content-text.ps-visible {
            opacity: 1;
            transform: translateY(0);
        }

        .ps-step.ps-visible {
            opacity: 1;
            transform: scale(1);
        }

        /* nightmare_section scroll animations */
        .ns-title-h1 {
            opacity: 0;
            transform: translateX(-90px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }

        .ns-title-ligne {
            opacity: 0;
            transform: translateX(90px);
            transition: opacity 0.6s ease 0.5s, transform 0.6s ease 0.5s;
        }

        .ns-design {
            opacity: 0;
            transform: translateY(70px);
            transition: opacity 0.7s ease 0.9s, transform 0.7s ease 0.9s;
        }

        .ns-step {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .ns-title-h1.ns-visible {
            opacity: 1;
            transform: translateX(0);
        }

        .ns-title-ligne.ns-visible {
            opacity: 1;
            transform: translateX(0);
        }

        .ns-design.ns-visible {
            opacity: 1;
            transform: translateY(0);
        }

        .ns-step.ns-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* infos_section scroll animations */
        .is-img {
            opacity: 0;
            transform: scale(0.95);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .is-step {
            opacity: 0;
            transform: translateY(60px);
            transition: opacity 0.55s ease, transform 0.55s ease;
        }

        .is-img.is-visible {
            opacity: 1;
            transform: scale(1);
        }

        .is-step.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* promos_section scroll animations */
        .prs-rec-white {
            opacity: 0;
            transform: translate(-60px, -60px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }

        .prs-content {
            opacity: 0;
            transform: translateX(80px);
            transition: opacity 0.7s ease 0.5s, transform 0.7s ease 0.5s;
        }

        .prs-img {
            opacity: 0;
            transform: scale(0.95);
            transition: opacity 0.8s ease 1s, transform 0.8s ease 1s;
        }

        .prs-rec-white.prs-visible {
            opacity: 1;
            transform: translate(0, 0);
        }

        .prs-content.prs-visible {
            opacity: 1;
            transform: translateX(0);
        }

        .prs-img.prs-visible {
            opacity: 1;
            transform: scale(1);
        }

        /* obj_section scroll animations */
        .os-title-h1 {
            opacity: 0;
            transform: translateX(-90px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }

        .os-title-ligne {
            opacity: 0;
            transform: translateX(90px);
            transition: opacity 0.6s ease 0.5s, transform 0.6s ease 0.5s;
        }

        .os-rectongle {
            opacity: 0;
            transform: translate(60px, -60px);
            transition: opacity 0.7s ease 0.8s, transform 0.7s ease 0.8s;
        }

        .os-img {
            opacity: 0;
            transform: translateY(-60px);
            transition: opacity 0.7s ease 1s, transform 0.7s ease 1s;
        }

        .os-cours {
            opacity: 0;
            transform: scale(0.95);
            transition: opacity 0.7s ease 1.3s, transform 0.7s ease 1.3s;
        }

        .os-title-h1.os-visible {
            opacity: 1;
            transform: translateX(0);
        }

        .os-title-ligne.os-visible {
            opacity: 1;
            transform: translateX(0);
        }

        .os-rectongle.os-visible {
            opacity: 1;
            transform: translate(0, 0);
        }

        .os-img.os-visible {
            opacity: 1;
            transform: translateY(0);
        }

        .os-cours.os-visible {
            opacity: 1;
            transform: scale(1);
        }

        /* generator_section scroll animations */
        .gs-section {
            opacity: 0;
            transform: scale(0.95);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .gs-h1 {
            opacity: 0;
            transform: translateY(-60px);
            transition: opacity 0.7s ease 0.4s, transform 0.7s ease 0.4s;
        }

        .gs-input {
            opacity: 0;
            transform: translateY(60px);
            transition: opacity 0.7s ease 0.8s, transform 0.7s ease 0.8s;
        }

        .gs-h2 {
            opacity: 0;
            transform: scale(0.95);
            transition: opacity 0.7s ease 1.2s, transform 0.7s ease 1.2s;
        }

        .gs-p {
            opacity: 0;
            transform: scale(0.95);
            transition: opacity 0.7s ease 1.5s, transform 0.7s ease 1.5s;
        }

        .gs-section.gs-visible {
            opacity: 1;
            transform: scale(1);
        }

        .gs-h1.gs-visible {
            opacity: 1;
            transform: translateY(0);
        }

        .gs-input.gs-visible {
            opacity: 1;
            transform: translateY(0);
        }

        .gs-h2.gs-visible {
            opacity: 1;
            transform: scale(1);
        }

        .gs-p.gs-visible {
            opacity: 1;
            transform: scale(1);
        }

        /* footer_section scroll animations */
        .fs-h2 {
            opacity: 0;
            transform: scale(0.95);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .fs-social-li {
            opacity: 0;
            transform: translateX(-40px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .fs-tag {
            opacity: 0;
            transform: scale(0.95);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }

        .fs-h2.fs-visible {
            opacity: 1;
            transform: scale(1);
        }

        .fs-social-li.fs-visible {
            opacity: 1;
            transform: translateX(0);
        }

        .fs-tag.fs-visible {
            opacity: 1;
            transform: scale(1);
        }
    </style>
</head>

<body>
    <div class="container_top" id="particles-js">
        <div class="container_header">
            <header>
                <div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" alt=""></a></div>
                <div class="header_links">
                    <a href="{{ url('/login') }}">Se connecter</a>
                    <a href="{{ url('/account-type') }}">S'inscrire</a>
                    <a href="{{ url('/help') }}" class="menu_icon">?</a>
                </div>
            </header>
        </div>
        <div class="header_content">
            <a href="#1sectionw">Commencer</a>
            <h2>Apprenez la programmation autrement...</h2>
        </div>
    </div>
    <section class="problem_section" id="problem-section-anchor">
        <div class="content" id="1section">
            <div class="content_text ps-content-text">
                <p>La première plateforme qui combine cours interactifs et génération de code pédagogique.</p>
                <p>Comprenez “pourquoi” le code fonctionne, pas seulement “comment”</p>
            </div>
            <div class="content_steps">
                <div class="two_steps">
                    <div class="step ps-step">
                        <i class="fa-solid fa-person-chalkboard"></i>
                        <h4>Cours Interactifs</h4>
                    </div>
                    <div class="step ps-step">
                        <i class="fa-solid fa-cube"></i>
                        <h4>Exercices Pratiques </h4>
                    </div>
                </div>
                <div class="two_steps">
                    <div class="step ps-step">
                        <i class="fa-solid fa-laptop-code"></i>
                        <h4>Code Générateur</h4>
                    </div>
                    <div class="step ps-step">
                        <i class="fa-solid fa-robot"></i>
                        <h4>Formateurs Pro</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="design">
            <div class="img ps-img"><img src="{{ asset('img/background2.jpg') }}" alt=""></div>
            <div class="rectongle ps-rectangle"></div>
        </div>
    </section>
    <section class="nightmare_section" id="nightmare-section-anchor">
        <div class="title title1">
            <h1 class="ns-title-h1">Le cauchemar de tout apprenant en code</h1>
            <div class="title_ligne title_ligne1 ns-title-ligne"></div>
        </div>
        <div class="content_container">
            <div class="content">
                <div class="step ns-step">
                    <span>1</span>
                    <p>J'ai passé 3 heures sur un exercice simple.</p>
                </div>
                <div class="step ns-step">
                    <p> J'ai trouvé la solution sur un site</p>
                    <span>2</span>
                </div>
                <div class="step ns-step">
                    <span>3</span>
                    <p>Mais je n'ai toujours pas compris pourquoi ça marche</p>
                </div>
            </div>
            <div class="design ns-design">
                <div class="img"><img src="{{ asset('img/background3.jpg') }}" alt=""></div>
            </div>
        </div>
    </section>
    <section class="infos_section" id="infos-section-anchor">
        <div class="infos">
            <div class="img is-img"><img src="{{ asset('img/background4.jpg') }}" alt=""></div>
            <div class="steps">
                <div class="step is-step">
                    <span>1</span>
                    <h4>Choisissez votre parcours</h4>
                    <p> - Python <br>- JavaScript <br>- Data Science <br>- Algorithmes</p>
                    <a href="#">Voir Plus</a>
                    <h4> Du débutant à l'expert, on a le programme qu'il vous faut.</h4>
                </div>
                <div class="step is-step">
                    <span>2</span>
                    <h4>Apprenez en pratiquant</h4>
                    <p> Théorie interactive <br> + exercices corrigés <br> instantanément.</p>
                    <a href="#">Savoir plus</a>
                    <h4> Tapez du code, exécutez-le, voyez le résultat en directTapez du code, exécutez-le, voyez le
                        résultat en direct</h4>
                </div>
                <div class="step is-step">
                    <span>3</span>
                    <h4> Débloquez-vous avec l'IA</h4>
                    <p> Bloqué sur <br> un concept ?</p>
                    <a href="#">Savoir Plus</a>
                    <h4>Demandez à notre IA. Elle génèr du code et vous l'explique comme si c'était un vrai prof.</h4>
                </div>
                <div class="step is-step">
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
    <section class="promos_section" id="promos-section-anchor">
        <div class="rec_white prs-rec-white"></div>
        <div class="content prs-content">
            <h3>Du <span>"Hello World"</span> à votre premier job de développeur</h3>
            <p>Un parcours structuré, des projets concrets, et un assistant IA qui vous guide à chaque étape. Rejoignez
                les 85% de nos apprenants qui changent de carrière.</p>
        </div>
        <div class="img prs-img"><img src="{{ asset('img/background5.jpg') }}" alt=""></div>
    </section>
    <section class="obj_section" id="obj-section-anchor">
        <div class="title title2">
            <h1 class="os-title-h1">Des parcours pour tous les objectifs</h1>
            <div class="title_ligne title_ligne2 os-title-ligne"></div>
        </div>
        <div class="obj_div">
            <div class="rectongle os-rectongle"></div>
            <div class="img os-img">
                <img src="{{ asset('img/backgroung6.jpg') }}" alt="">
                <div class="design_img"></div>
            </div>
            <div class="cours os-cours">
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
    <section class="generator_section gs-section" id="generator-section-anchor" style="padding-bottom: 150px">
        <h1 class="gs-h1">GÉNÉRATEUR DE CODE - DÉMO EN DIRECT</h1>
        <div class="generator_input gs-input">
            <input type="text" placeholder="Décrivez ce que vous voulez comprendre...">
            <i class="fa-solid fa-magnifying-glass-arrow-right"></i>
        </div>
        <h2 class="gs-h2">Pour tester tous les langages et des requêtes plus complexes</h2>
        <p class="gs-p">créez votre compte gratuit !</p>
    </section>
    <footer class="footer_section" id="footer-section-anchor">
        <h2 class="fs-h2"><span>CodeMentor :</span> L'anti-école du code traditionnelle</h2>
        <div class="footer_top">
            <div class="footer_links">
                <ul class="social_medias">
                    <li class="fs-social-li"><a href="#"><i
                                class="fa-regular fa-paper-plane"></i><span>hello@bytesLab.com</span></a></li>
                    <li class="fs-social-li"><a href="#"><i
                                class="fa-brands fa-whatsapp"></i><span>+212618733244</span></a></li>
                </ul>
                <ul class="fs-tag">
                    <li>Company</li>
                    <li>Features</li>
                    <li>About Us</li>
                    <li>Contact</li>
                </ul>
                <ul class="fs-tag">
                    <li>Help</li>
                    <li>FAQ</li>
                    <li>Help Center</li>
                    <li>Support</li>
                </ul>
            </div>
            <div class="footer_adds fs-tag">
                <h3>Newsletter</h3>
                <p>Recevez nos astuces et nouveaux cours</p>
                <div class="subscribe">
                    <input type="text" placeholder="Votre Email">
                    <input type="submit" value="S'abonner" class="submit">
                </div>
            </div>
        </div>
        <div class="footer_bottom fs-tag">
            <p>© 2026 CodeMentor Interactive (DevLearn Solutions) - CGV - Confidentialité - Mentions légales</p>
        </div>
    </footer>
    <script src="{{ asset('js/particles.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Modal Overlay -->
    <div class="fixed inset-0 z-[100] hidden items-center justify-center p-4" id="tourModal">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-on-surface/40 backdrop-blur-md"></div>
        <!-- Modal Container -->
        <div
            class="relative w-full max-w-xl bg-[#D0E3E6] rounded-3xl shadow-[0px_10px_40px_rgba(0,101,115,0.12)] overflow-hidden">
            <!-- Subtle Grid Background -->
            <div class="absolute inset-0 grid-pattern pointer-events-none"></div>
            <div class="relative p-10 md:p-14 space-y-8">
                <!-- Icon Header -->
                <div class=" flex items-center justify-center mb-6">
                    <img class="w-[210px] h-[150px]" src="{{ asset('img/logo.png') }}" alt="">
                </div>
                <!-- Text Content -->
                <div class="space-y-4">
                    <h2 class="font-display text-center text-4xl md:text-5xl font-bold tracking-tight text-on-surface">
                        Ready for a <span class="text-primary">ride?</span>
                    </h2>
                    <p class="text-on-surface-variant text-lg leading-relaxed max-w-md">
                        We've prepared a guided sequence to help you navigate the DEVRAK lab environment. Would you like
                        a tour of our core features?
                    </p>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <button id="btnTourOk"
                        class="flex-1 bg-gradient-to-br from-primary to-primary-container text-on-primary font-headline font-bold uppercase tracking-tight px-8 py-4 rounded-xl shadow-lg hover:scale-[0.98] transition-transform flex items-center justify-center gap-2 group">
                        Yes, let's go!
                        <span class="material-symbols-outlined text-xl transition-transform group-hover:translate-x-1"
                            data-icon="arrow_forward">arrow_forward</span>
                    </button>
                    <button id="btnTourOwn"
                        class="flex-1 border-2 border-outline-variant/30 text-secondary font-headline font-bold uppercase tracking-tight px-8 py-4 rounded-xl hover:bg-surface-container-high transition-colors text-center">
                        I'll take control
                    </button>
                </div>

            </div>


        </div>
    </div>

    <!-- Tour Toast Message -->
    <div id="tourToast" class="fixed bottom-10 left-1/2 transform -translate-x-1/2 bg-[#0D1B2A] text-[#D0E3E6] border-2 border-[#30D4ED] px-8 py-4 rounded-full shadow-[0px_7px_19px_-3px_#30D4ED] text-lg font-bold opacity-0 transition-opacity duration-500 pointer-events-none z-[200] max-w-4xl text-center hidden">
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {

            /* ── Tour modal: show after 5s ── */
            setTimeout(function () {
                var modal = document.getElementById('tourModal');
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            }, 5000);

            document.getElementById('btnTourOk').addEventListener('click', async function () {
                var modal = document.getElementById('tourModal');
                modal.classList.remove('flex');
                modal.classList.add('hidden');

                var toast = document.getElementById('tourToast');
                toast.classList.remove('hidden');

                function showToast(message, duration) {
                    return new Promise(resolve => {
                        toast.innerText = message;
                        toast.classList.remove('opacity-0');
                        toast.classList.add('opacity-100');
                        setTimeout(() => {
                            toast.classList.remove('opacity-100');
                            toast.classList.add('opacity-0');
                            setTimeout(resolve, 500); // Wait for fade out
                        }, duration);
                    });
                }

                function scrollToElement(selector) {
                    var element = document.querySelector(selector);
                    if (element) {
                        element.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                }

                function delay(ms) {
                    return new Promise(resolve => setTimeout(resolve, ms));
                }

                await delay(2000);
                scrollToElement('.problem_section');
                await showToast("CodeMentor est L'anti-école du code traditionnelle", 3000);

                scrollToElement('.nightmare_section');
                await showToast("nous traitons un problème majeure qui est l'apprenstissage de vraie coding", 3000);

                scrollToElement('.infos_section');
                await showToast("des parcours intéressants, des projets pratiques, Débloquage avec l'IA, Partager et grandir avec la communauté", 3000);

                scrollToElement('.promos_section');
                await showToast("De la première ligne de code à la maîtrise professionnelle", 3000);

                scrollToElement('.obj_section');
                await showToast("nous offrons des parcours pour des objectifs différents", 2000);

                scrollToElement('.generator_section');
                await showToast("générez des explications de code magnifiques et simples à comprendre pour vous", 2000);

                scrollToElement('.footer_section');
                await delay(2000);
                await showToast("the tour is ended, now the controll is yours", 3000);
                
                toast.classList.add('hidden');
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });

            document.getElementById('btnTourOwn').addEventListener('click', function () {
                var modal = document.getElementById('tourModal');
                modal.classList.remove('flex');
                modal.classList.add('hidden');
            });

            /* ── problem_section scroll animations ── */
            var section = document.getElementById('problem-section-anchor');
            if (section) {
                var rectangle = section.querySelector('.ps-rectangle');
                var img = section.querySelector('.ps-img');
                var contentText = section.querySelector('.ps-content-text');
                var steps = section.querySelectorAll('.ps-step');

                var observer = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {

                            /* 1. rectangle slides in from right (immediately) */
                            if (rectangle) rectangle.classList.add('ps-visible');

                            /* 2. image from top-left (delay built into CSS: 0.45s) */
                            if (img) img.classList.add('ps-visible');

                            /* 3. content_text drops from top (delay built into CSS: 0.9s) */
                            if (contentText) contentText.classList.add('ps-visible');

                            /* 4. step cards one by one (staggered via JS) */
                            steps.forEach(function (step, index) {
                                setTimeout(function () {
                                    step.classList.add('ps-visible');
                                }, 1300 + index * 200);
                            });

                            /* Stop watching after first trigger */
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.2 });

                observer.observe(section);
            }

            /* ── nightmare_section scroll animations ── */
            var nsSection = document.getElementById('nightmare-section-anchor');
            if (nsSection) {
                var nsTitleH1 = nsSection.querySelector('.ns-title-h1');
                var nsTitleLine = nsSection.querySelector('.ns-title-ligne');
                var nsDesign = nsSection.querySelector('.ns-design');
                var nsSteps = nsSection.querySelectorAll('.ns-step');

                var nsObserver = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {

                            /* 1. h1 slides in from left */
                            if (nsTitleH1) nsTitleH1.classList.add('ns-visible');

                            /* 2. title_ligne slides in from right (delay 0.5s in CSS) */
                            if (nsTitleLine) nsTitleLine.classList.add('ns-visible');

                            /* 3. design rises from bottom (delay 0.9s in CSS) */
                            if (nsDesign) nsDesign.classList.add('ns-visible');

                            /* 4. each step one by one (staggered via JS) */
                            nsSteps.forEach(function (step, index) {
                                setTimeout(function () {
                                    step.classList.add('ns-visible');
                                }, 1400 + index * 220);
                            });

                            nsObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.2 });

                nsObserver.observe(nsSection);
            }

            /* ── infos_section scroll animations ── */
            var isSection = document.getElementById('infos-section-anchor');
            if (isSection) {
                var isImg = isSection.querySelector('.is-img');
                var isSteps = isSection.querySelectorAll('.is-step');

                var isObserver = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {

                            /* 1. background image fades in with scale flow */
                            if (isImg) isImg.classList.add('is-visible');

                            /* 2. each step card rises from bottom one by one */
                            isSteps.forEach(function (step, index) {
                                setTimeout(function () {
                                    step.classList.add('is-visible');
                                }, 400 + index * 200);
                            });

                            isObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.15 });

                isObserver.observe(isSection);
            }

            /* ── promos_section scroll animations ── */
            var prsSection = document.getElementById('promos-section-anchor');
            if (prsSection) {
                var prsRecWhite = prsSection.querySelector('.prs-rec-white');
                var prsContent = prsSection.querySelector('.prs-content');
                var prsImg = prsSection.querySelector('.prs-img');

                var prsObserver = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {

                            /* 1. rec_white slides in from top-left */
                            if (prsRecWhite) prsRecWhite.classList.add('prs-visible');

                            /* 2. content slides in from right (delay built in CSS: 0.5s) */
                            if (prsContent) prsContent.classList.add('prs-visible');

                            /* 3. image fades and scales in (delay built in CSS: 1s) */
                            if (prsImg) prsImg.classList.add('prs-visible');

                            prsObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.25 });

                prsObserver.observe(prsSection);
            }

            /* ── obj_section scroll animations ── */
            var osSection = document.getElementById('obj-section-anchor');
            if (osSection) {
                var osTitleH1 = osSection.querySelector('.os-title-h1');
                var osTitleLine = osSection.querySelector('.os-title-ligne');
                var osRectongle = osSection.querySelector('.os-rectongle');
                var osImg = osSection.querySelector('.os-img');
                var osCours = osSection.querySelector('.os-cours');

                var osObserver = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {

                            /* 1. title h1 slides in from left */
                            if (osTitleH1) osTitleH1.classList.add('os-visible');

                            /* 2. title_ligne slides in from right (delay built in CSS: 0.5s) */
                            if (osTitleLine) osTitleLine.classList.add('os-visible');

                            /* 3. rectongle slides in from top-right (delay built in CSS: 0.8s) */
                            if (osRectongle) osRectongle.classList.add('os-visible');

                            /* 4. img slides in from top (delay built in CSS: 1s) */
                            if (osImg) osImg.classList.add('os-visible');

                            /* 5. cours flows in (delay built in CSS: 1.3s) */
                            if (osCours) osCours.classList.add('os-visible');

                            osObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.25 });

                osObserver.observe(osSection);
            }

            /* ── generator_section scroll animations ── */
            var gsSection = document.getElementById('generator-section-anchor');
            if (gsSection) {
                var gsH1 = gsSection.querySelector('.gs-h1');
                var gsInput = gsSection.querySelector('.gs-input');
                var gsH2 = gsSection.querySelector('.gs-h2');
                var gsP = gsSection.querySelector('.gs-p');

                var gsObserver = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {

                            /* 1. section itself flows in */
                            gsSection.classList.add('gs-visible');

                            /* 2. h1 slides in from top (delay built in CSS: 0.4s) */
                            if (gsH1) gsH1.classList.add('gs-visible');

                            /* 3. input slides in from bottom (delay built in CSS: 0.8s) */
                            if (gsInput) gsInput.classList.add('gs-visible');

                            /* 4. h2 flows in (delay built in CSS: 1.2s) */
                            if (gsH2) gsH2.classList.add('gs-visible');

                            /* 5. p flows in (delay built in CSS: 1.5s) */
                            if (gsP) gsP.classList.add('gs-visible');

                            gsObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.25 });

                gsObserver.observe(gsSection);
            }

            /* ── footer_section scroll animations ── */
            var fsSection = document.getElementById('footer-section-anchor');
            if (fsSection) {
                var fsH2 = fsSection.querySelector('.fs-h2');
                var fsSocialLis = fsSection.querySelectorAll('.fs-social-li');
                var fsTags = fsSection.querySelectorAll('.fs-tag');

                var fsObserver = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {

                            /* 1. h2 flows in */
                            if (fsH2) fsH2.classList.add('fs-visible');

                            /* 2. social media li elements slide in from left sequentially */
                            fsSocialLis.forEach(function (li, index) {
                                setTimeout(function () {
                                    li.classList.add('fs-visible');
                                }, 500 + index * 200);
                            });

                            /* 3. tags (lists, newsletter, bottom) flow in sequentially */
                            fsTags.forEach(function (tag, index) {
                                setTimeout(function () {
                                    tag.classList.add('fs-visible');
                                }, 900 + index * 200);
                            });

                            fsObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.25 });

                fsObserver.observe(fsSection);
            }

        });
    </script>
</body>

</html>