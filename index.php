<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="Portfolio Développeur Full-stack Romain Baucheron Front-end Back-end BDD HTML CSS javascript php">
    <meta name="description" content="Portfolio Développeur Full-Stack Romain Baucheron">

    <title>Romain Baucheron</title>
    <link rel="shortcut icon" href="./public/assets/favicon.jpeg" type="image/x-icon">

    <link rel="stylesheet" href="./public/css/contact.css">
    <link rel="stylesheet" href="./public/css/skills.css">
    <link rel="stylesheet" href="./public/css/modal.css">
    <link rel="stylesheet" href="./public/css/sprites.css">
    <link rel="stylesheet" href="./public/css/projects.css">
    <link rel="stylesheet" href="./public/css/about.css">
    <link rel="stylesheet" href="./public/css/navbar.css">
    <link rel="stylesheet" href="./public/css/main.css">

    <!-- Contact form captcha -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            sessionStorage.setItem('contact', 'submit');
            document.getElementById("contactForm").submit();
        }
    </script>
</head>

<body>
    <header>
        <div class="row">
            <a href="/" class="home-button">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" width="130" height="80" viewBox="0 0 2000 1500">
                    <rect width="130" height="80" fill="none"></rect>
                    <g transform="matrix(0.75,0,0,0.75,250,147.375)"><svg viewBox="0 0 448 360" data-background-color="" preserveAspectRatio="xMidYMid meet" height="1607" width="2000" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="tight-bounds" transform="matrix(1,0,0,1,0,0)"><svg viewBox="0 0 448 360" height="360" width="448">
                                    <g><svg></svg></g>
                                    <g><svg viewBox="0 0 448 360" height="360" width="448">
                                            <g>
                                                <path d="M193.855 44.683c1.378 0 2.494 1.116 2.495 2.494 0 1.378-1.116 2.494-2.495 2.495h-23.846l-17.167 17.167c-0.973 0.973-2.551 0.973-3.53 0-0.973-0.973-0.973-2.551 0-3.529l13.644-13.645h-40.378c-11.518 0-19.151 2.688-23.815 8.113-4.739 5.519-6.66 14.056-6.66 25.63 0 0.069 0 0.137-0.006 0.206l0.212 36.692 14.692-14.692c0.973-0.973 2.551-0.973 3.53 0 0.973 0.973 0.973 2.551 0 3.53l-18.178 18.178c0.206 35.832 0.193 71.358-0.013 107.19 25.486 25.2 50.617 50.312 75.811 75.791h25.38c1.378 0 2.494 1.116 2.495 2.495 0 1.378-1.116 2.494-2.495 2.494h-20.448l25.942 26.241 0.006-0.006c8.188 8.188 15.577 12.859 22.824 13.413 7.146 0.543 14.442-2.956 22.586-11.093l28.555-28.555h-20.722c-1.378 0-2.494-1.116-2.495-2.494 0-1.378 1.116-2.494 2.495-2.495h25.711l16.625-16.625c0.973-0.973 2.551-0.973 3.529 0 0.973 0.973 0.973 2.551 0 3.53l-13.101 13.102h40.377c11.518 0 19.151-2.688 23.815-8.113 4.739-5.519 6.66-14.056 6.66-25.63h0.013l-0.212-36.898-16.014 16.014c-0.973 0.973-2.551 0.973-3.53 0-0.973-0.973-0.973-2.551 0-3.53l19.5-19.5c-0.206-35.832-0.193-71.358 0.013-107.19-25.486-25.2-50.617-50.312-75.811-75.791h-26.147c-1.378 0-2.494-1.116-2.495-2.495 0-1.378 1.116-2.494 2.495-2.494h21.215l-25.824-26.123c-0.044-0.037-0.081-0.075-0.124-0.112-8.188-8.188-15.577-12.859-22.824-13.413-7.146-0.543-14.442 2.956-22.586 11.093l-28.555 28.555h18.858zM122.578 44.683h45.367l32.078-32.078c9.248-9.248 17.81-13.195 26.484-12.534 8.568 0.649 16.956 5.824 25.985 14.854 0.05 0.05 0.094 0.094 0.137 0.143l29.278 29.615h43.508c13.071 0 21.919 3.268 27.594 9.871 5.6 6.517 7.864 16.101 7.864 28.867 0 0.081-0.006 0.156-0.012 0.23l-0.225 39.742 28.43 28.112 0.006-0.006c9.03 9.03 14.206 17.411 14.854 25.985 0.661 8.674-3.293 17.236-12.534 26.484l-30.768 30.768 0.237 41.843h0.012c0 12.765-2.27 22.35-7.864 28.867-5.675 6.604-14.524 9.872-27.594 9.871h-45.366l-32.078 32.078c-9.248 9.248-17.81 13.195-26.484 12.534-8.568-0.649-16.956-5.824-25.985-14.854l0.006-0.006-29.421-29.758h-43.509c-13.071 0-21.919-3.268-27.594-9.872-5.6-6.517-7.864-16.101-7.863-28.866h0.012l0.231-39.972-28.293-27.969c-0.05-0.044-0.1-0.087-0.143-0.137-9.03-9.03-14.206-17.411-14.854-25.985-0.661-8.674 3.293-17.236 12.534-26.484l30.768-30.768-0.237-41.607c-0.006-0.075-0.012-0.156-0.012-0.23 0-12.765 2.27-22.35 7.864-28.867 5.675-6.604 14.524-9.872 27.594-9.871zM87.682 179.997l-0.274-47.724-27.276 27.276c-8.138 8.138-11.636 15.44-11.094 22.587 0.549 7.246 5.226 14.642 13.413 22.823 0.037 0.037 0.081 0.081 0.113 0.125l24.837 24.551 0.281-49.644zM92.303 241.483l-0.2 35.09h0.013c0 11.58 1.921 20.117 6.66 25.63 4.664 5.432 12.297 8.113 23.815 8.113h38.576l-33.55-33.936-35.308-34.903zM325.415 49.672h-38.575l33.549 33.936 35.308 34.902 0.2-34.884c-0.006-0.069-0.006-0.137-0.007-0.205 0-11.58-1.921-20.117-6.66-25.63-4.664-5.432-12.297-8.113-23.815-8.113zM360.599 130.352l-0.281 49.645 0.274 47.724 27.276-27.276c8.138-8.138 11.636-15.44 11.094-22.587-0.549-7.252-5.226-14.642-13.413-22.824l0.006-0.006-24.956-24.669z" fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal" data-fill-palette-color="tertiary">
                                                </path>
                                            </g>
                                            <g transform="matrix(1,0,0,1,137.80281690140845,90)"><svg viewBox="0 0 172.3943661971831 180" height="180" width="172.3943661971831">
                                                    <g><svg viewBox="0 0 172.3943661971831 180" height="180" width="172.3943661971831">
                                                            <g><svg viewBox="0 0 172.3943661971831 180" height="180" width="172.3943661971831">
                                                                    <g><svg viewBox="0 0 172.3943661971831 180" height="180" width="172.3943661971831">
                                                                            <g id="textblocktransform"><svg viewBox="0 0 172.3943661971831 180" height="180" width="172.3943661971831" id="textblock">
                                                                                    <g><svg viewBox="0 0 172.3943661971831 180" height="180" width="172.3943661971831">
                                                                                            <g transform="matrix(1,0,0,1,0,0)">
                                                                                                <svg width="172.3943661971831" viewBox="0.75 -35 34 35.5" height="180" data-palette-color="#ffffff">
                                                                                                    <path d="M16.4-17.7L16.4-17.7 13.75-17.7 13.75-0.95 17-0.95 17 0 0.75 0 0.75-0.95 4-0.95 4-34.05 0.75-34.05 0.75-35 15.85-35Q22.35-35 25.08-34.33 27.8-33.65 28.9-32.7L28.9-32.7Q31.3-30.75 31.3-26.5 31.3-22.25 29.2-20.43 27.1-18.6 22.8-18.25L22.8-18.25 22.8-18.1Q26.85-17.55 28.45-15.7 30.05-13.85 30.05-9.5L30.05-9.5 30.05-6.85Q30.05-4.25 30.33-3.35 30.6-2.45 31.5-2.45 32.4-2.45 32.93-3.28 33.45-4.1 33.9-6.75L33.9-6.75 34.75-6.65Q34.2-2.4 32.83-0.95 31.45 0.5 27.35 0.5 23.25 0.5 21.53-1.43 19.8-3.35 19.8-8.65L19.8-8.65 19.8-12.3Q19.8-15.1 19.07-16.4 18.35-17.7 16.4-17.7ZM15.4-34.05L13.75-34.05 13.75-18.65 15.35-18.65Q18.2-18.65 19.58-20.4 20.95-22.15 20.95-26.1L20.95-26.1 20.95-27.55Q20.95-31.5 19.63-32.77 18.3-34.05 15.4-34.05L15.4-34.05Z" opacity="1" transform="matrix(1,0,0,1,0,0)" fill="#ffffff" class="wordmark-text-0" data-fill-palette-color="primary" id="text-0">
                                                                                                    </path>
                                                                                                </svg>
                                                                                            </g>
                                                                                        </svg></g>
                                                                                </svg></g>
                                                                        </svg></g>
                                                                    <g></g>
                                                                </svg></g>
                                                        </svg></g>
                                                </svg></g>
                                        </svg></g>
                                    <defs></defs>
                                </svg>
                                <rect width="100" height="60" fill="none" stroke="none" visibility="hidden"></rect>
                            </g>
                        </svg></g>
                </svg>
            </a>
            <nav class="nav collapse">
                <ul class="collapse">
                    <li class="nav-list"><a href="#about" class="switch-content">À propos</a></li>
                    <li class="nav-list"><a href="#projects" class="switch-content">Projets</a></li>
                    <li class="nav-list"><a href="#skills" class="switch-content">Compétences</a></li>
                    <li class="contact-list">
                        <ul class="contact">
                            <li class="nav-list click-contact">
                                <a href="https://github.com/opertune" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" viewBox="0 0 30 30" width="30px" height="30px">
                                        <path d="M15,3C8.373,3,3,8.373,3,15c0,5.623,3.872,10.328,9.092,11.63C12.036,26.468,12,26.28,12,26.047v-2.051 c-0.487,0-1.303,0-1.508,0c-0.821,0-1.551-0.353-1.905-1.009c-0.393-0.729-0.461-1.844-1.435-2.526 c-0.289-0.227-0.069-0.486,0.264-0.451c0.615,0.174,1.125,0.596,1.605,1.222c0.478,0.627,0.703,0.769,1.596,0.769 c0.433,0,1.081-0.025,1.691-0.121c0.328-0.833,0.895-1.6,1.588-1.962c-3.996-0.411-5.903-2.399-5.903-5.098 c0-1.162,0.495-2.286,1.336-3.233C9.053,10.647,8.706,8.73,9.435,8c1.798,0,2.885,1.166,3.146,1.481C13.477,9.174,14.461,9,15.495,9 c1.036,0,2.024,0.174,2.922,0.483C18.675,9.17,19.763,8,21.565,8c0.732,0.731,0.381,2.656,0.102,3.594 c0.836,0.945,1.328,2.066,1.328,3.226c0,2.697-1.904,4.684-5.894,5.097C18.199,20.49,19,22.1,19,23.313v2.734 c0,0.104-0.023,0.179-0.035,0.268C23.641,24.676,27,20.236,27,15C27,8.373,21.627,3,15,3z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-list click-contact">
                                <a href="https://www.linkedin.com/in/romain-baucheron/" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" viewBox="0 0 30 30" width="30px" height="30px">
                                        <path d="M15,3C8.373,3,3,8.373,3,15c0,6.627,5.373,12,12,12s12-5.373,12-12C27,8.373,21.627,3,15,3z M10.496,8.403 c0.842,0,1.403,0.561,1.403,1.309c0,0.748-0.561,1.309-1.496,1.309C9.561,11.022,9,10.46,9,9.712C9,8.964,9.561,8.403,10.496,8.403z M12,20H9v-8h3V20z M22,20h-2.824v-4.372c0-1.209-0.753-1.488-1.035-1.488s-1.224,0.186-1.224,1.488c0,0.186,0,4.372,0,4.372H14v-8 h2.918v1.116C17.294,12.465,18.047,12,19.459,12C20.871,12,22,13.116,22,15.628V20z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-list click-contact">
                                <a href="#contact" class="switch-content">
                                    <svg width="30px" height="30px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path class="email-stroke" d="M44 24V9H24H4V24V39H24" stroke="#FFFFFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                        <path class="email-stroke" d="M44 34L30 34" stroke="#FFFFFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                        <path class="email-stroke" d="M39 29L44 34L39 39" stroke="#FFFFFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                        <path class="email-stroke" d="M4 9L24 24L44 9" stroke="#FFFFFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- Hamburger button -->
            <div class="hamburger">
                <div class="hamburger-button-container">
                    <input type="checkbox" id="hamburger-checkbox">
                    <div class="hamburger-button-lines">
                        <span class="line line1"></span>
                        <span class="line line2"></span>
                        <span class="line line3"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main content -->
    <main>
        <!-- About -->
        <div class="content" id="about">
            <div class="about-text">
                <p>Bonjour et bienvenue sur mon portfolio ! <br><br> Je m'appelle Romain et je suis développeur
                    full-stack junior, avec une préférence marquée pour le back-end et les bases de données.</p>
                <p>Mon parcours dans la programmation a débuté en septembre 2019, lors de ma première année de <a class="content-link" href="https://www.onisep.fr/ressources/univers-formation/formations/Post-bac/bts-services-informatiques-aux-organisations-option-b-solutions-logicielles-et-applications-metiers" target="_blank">BTS SIO</a>.
                    En juillet 2021, j'ai intégré une formation à l'AFPA de Pompey, où j'ai préparé avec succès un titre
                    professionnel de <a class="content-link" href="https://www.afpa.fr/formation-qualifiante/concepteur-developpeur-informatique" target="_blank">Concepteur Développeur d'Applications</a>, obtenu en juin 2022.</p>
                <p>En dehors de l'informatique, je suis un passionné de musique, de cuisine et de musculation.</p>
            </div>
            <div class="about-picture">
                <img src="./public/assets/about-picture.jpeg" alt="Hands + Computer picture" srcset="">
            </div>
        </div>
        <!-- Projects -->
        <div class="content" id="projects">
            <h1 class="projects-title projects-grid-left">Mes projets</h1>
            <div id="projects-grid">
                <div class="grid-item projects-grid-left" id="CryptoWalletMonitoring">
                    <div class="modal-image-container">
                        <img class="cwm" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAnIAAAJyAQMAAAB64L/WAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAEdJREFUeNrtwYEAAAAAw6D5U5/gBlUBAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADAN8OgAAGBav+zAAAAAElFTkSuQmCC">
                    </div>
                    <div class="bottom-frame">
                        <p>Monitoring portefeuilles crypto</p>
                        <div class="bottom-frame-line"></div>
                        <p>Symfony</p>
                    </div>
                </div>
                <div class="grid-item projects-grid-right" id="SymfonyECF">
                    <div class="modal-image-container">
                        <img class="symfonyecf" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAACWAAAAlqAQMAAACXGL1LAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAtZJREFUeNrtwQENAAAAwqD3T20ON6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACAHwMSRwABP1UpkwAAAABJRU5ErkJggg==">
                    </div>
                    <div class="bottom-frame">
                        <p>Site pour une mairie</p>
                        <div class="bottom-frame-line"></div>
                        <p>Symfony</p>
                    </div>
                </div>
                <div class="grid-item projects-grid-left" id="pacmanJS">
                    <div class="modal-image-container">
                        <img class="pacmanjs" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABQAAAAUAAQMAAAAiKm20AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAN9JREFUeNrtwQENAAAAwqD3T20ON6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA4N8AJS0AAdDHqccAAAAASUVORK5CYII=">
                    </div>
                    <div class="bottom-frame">
                        <p>Pac-man</p>
                        <div class="bottom-frame-line"></div>
                        <p>JavaScript</p>
                    </div>
                </div>
                <div class="grid-item projects-grid-right" id="spaceInvaders">
                    <div class="modal-image-container">
                        <img class="spaceinvaders" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA4QAAAGFAQMAAACfQ6/0AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAEFJREFUeNrtwQENAAAAwqD3T20PBxQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwb606AAGdAICUAAAAAElFTkSuQmCC">
                    </div>
                    <div class="bottom-frame">
                        <p>Space Invader</p>
                        <div class="bottom-frame-line"></div>
                        <p>Java</p>
                    </div>
                </div>
                <div class="grid-item projects-grid-left" id="airdejava">
                    <div class="modal-image-container">
                        <img class="airdejava-img" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAADyAQMAAADN8GrdAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAACBJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAAAAAAAAAeDSTeAAHU6F0HAAAAAElFTkSuQmCC">
                    </div>
                    <div class="bottom-frame">
                        <p>Conception base de données</p>
                        <div class="bottom-frame-line"></div>
                        <p>Java</p>
                    </div>
                </div>
                <div class="grid-item projects-grid-right" id="cplusplus">
                    <div class="modal-image-container">
                        <img class="algorithme" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIAAQMAAADOtka5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfBuCAAABY3VQpAAAAABJRU5ErkJggg==">
                    </div>
                    <div class="bottom-frame">
                        <p>Traduction d'algorithmes</p>
                        <div class="bottom-frame-line"></div>
                        <p>C++</p>
                    </div>
                </div>
                <div class="grid-item projects-grid-left" id="labo">
                    <div class="modal-image-container">
                        <img class="labo-img" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIAAQMAAADOtka5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfBuCAAABY3VQpAAAAABJRU5ErkJggg==">
                    </div>
                    <div class="bottom-frame">
                        <p>Mon laboratoire</p>
                        <div class="bottom-frame-line"></div>
                        <p></p>
                    </div>
                </div>
                <div class="grid-item projects-grid-right" id="python">
                    <div class="modal-image-container">
                        <img class="python-img" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIAAQMAAADOtka5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfBuCAAABY3VQpAAAAABJRU5ErkJggg==">
                    </div>
                    <div class="bottom-frame">
                        <p>Bot Discord</p>
                        <div class="bottom-frame-line"></div>
                        <p>Python</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Skills -->
        <div class="content" id="skills">
            <h1 class="skills-title">Langages & Frameworks</h1>
            <p class="skills-description">
                En tant que débutant, je n'ai pas de spécialités particulières. J'explore différentes technologies à
                divers niveaux en fonction des projets.</p>
            <ul class="languages-list">
                <li>
                    <img src="./public/assets/languages/php.svg" alt="php logo">
                    <div class="progressBackground">
                        <span class="progressBar"></span>
                    </div>
                </li>
                <li>
                    <img src="./public/assets/languages/html.svg" alt="html logo">
                    <div class="progressBackground">
                        <span class="progressBar"></span>
                    </div>
                </li>
                <li>
                    <img src="./public/assets/languages/css.svg" alt="css logo">
                    <div class="progressBackground">
                        <span class="progressBar"></span>
                    </div>
                </li>
                <li>
                    <img src="./public/assets/languages/javascript.svg" alt="javascrip logo">
                    <div class="progressBackground">
                        <span class="progressBar"></span>
                    </div>
                </li>
                <li>
                    <img src="./public/assets/languages/c++.svg" alt="c++ logo">
                    <div class="progressBackground">
                        <span class="progressBar"></span>
                    </div>
                </li>
                <li>
                    <img src="./public/assets/languages/csharp.svg" alt="c# logo">
                    <div class="progressBackground">
                        <span class="progressBar"></span>
                    </div>
                </li>
                <li>
                    <img src="./public/assets/languages/java.svg" alt="java logo">
                    <div class="progressBackground">
                        <span class="progressBar"></span>
                    </div>
                </li>
                <li>
                    <img src="./public/assets/languages/lua.svg" alt="lua logo">
                    <div class="progressBackground">
                        <span class="progressBar"></span>
                    </div>
                </li>
                <li>
                    <img src="./public/assets/languages/sql.svg" alt="sql logo">
                    <div class="progressBackground">
                        <span class="progressBar"></span>
                    </div>
                </li>
                <li>
                    <img src="./public/assets/languages/symfony.svg" alt="symfony logo">
                    <div class="progressBackground">
                        <span class="progressBar"></span>
                    </div>
                </li>
                <li>
                    <img src="./public/assets/languages/bootstrap-5.svg" alt="bootstrap 5 logo">
                    <div class="progressBackground">
                        <span class="progressBar"></span>
                    </div>
                </li>
                <li>
                    <img src="./public/assets/languages/jquery.svg" alt="jquery logo">
                    <div class="progressBackground">
                        <span class="progressBar"></span>
                    </div>
                </li>
                <li>
                    <img src="./public/assets/languages/python.svg" alt="jquery logo">
                    <div class="progressBackground">
                        <span class="progressBar"></span>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Contact -->
        <div class="content" id="contact">
            <form id="contactForm" action="" method="post">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (!empty($_POST["name"]) && !empty($_POST["message"])) {
                        $email = htmlspecialchars($_POST["name"]);
                        $message = htmlspecialchars($_POST["message"]);
                        if (strlen($message) < 10) {
                            echo "<h3 class='error'>Le message doit être supérieur à 10 caractères.</h3>";
                        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            echo "<h3 class='error'>Email invalide.</h3>";
                        } else {
                            mail('r.baucheron@gmail.com', 'Portfolio from : ' . $email, $message);
                            echo "<h3 class='success'>Message envoyé avec succès.</h3>";
                        }
                    } else {
                        echo "<h3 class='error'>Les champs indiqués par une astérisque(*) sont obligatoires.</h3>";
                    }
                }
                ?>
                <h3 class="contact-title">Vous pouvez me contact depuis le formulaire ci-dessous ou via mon profil <a href="https://www.linkedin.com/in/romain-baucheron/" class="content-link" target="_blank">linkedin</a></h3>
                <input type="text" name="name" id="email" placeholder="Vôtre adresse email*">
                <textarea name="message" id="message" placeholder="Vôtre message*"></textarea>
                <input class="g-recaptcha" data-sitekey="6LeZO8IhAAAAAEPOZcXBugonLObS8kKSV-xfx6C2" data-callback='onSubmit' data-action='submit' type="submit" id="contactFormSubmit" name="contactFormButton" value="Envoyer">
            </form>
        </div>
    </main>

    <!-- Modal with projects -->
    <div class="modal">
        <div class="modal-content CryptoWalletMonitoring">
            <div class="modal-header" id="modal-top-cwm">
                <h1><a href="http://CryptoWalletMonitoring.com" target="_blank" class="content-link">CryptoWalletMonitoring</a></h1>
                <span class="closeModal">&times;</span>
            </div>
            <div class="modal-body">
                <p>Crypto Wallet Monitoring est une application web que j'ai développée avec le
                    framework <b><a href="https://symfony.com/" target="_blank" class="content-link">Symfony</a></b>
                    lors de mon stage de fin de formation.</p>
                <p>L'objectif de cette application est de permettre la consultation des portefeuilles de crypto-monnaie
                    hébergés sur les plateformes telles que Binance, Coinbase, FTX, Kucoin et Gate.io, sans avoir à se
                    connecter individuellement à chaque site.</p>
                <p>Les technologies utilisées pour la réalisation de ce projet comprennent PHP, Twig, Bootstrap et
                    jQuery.</p>
                <h4>&rArr; <a href="https://github.com/opertune/cryptowalletmonitoring" target="_blank" class="content-link">Dépôt Github</a></h4>
                <p>Page d'accueil.</p>
                <img class="cwm-home-page" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABgEAAAI+AQMAAACv3TjYAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAINJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIBnA7MLAAEAyw4jAAAAAElFTkSuQmCC">
                <p>Page principale avec les portefeuilles.</p>
                <img class="cwm-wallet" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABUAAAAMZAQMAAAD7mQx9AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAJlJREFUeNrtwTEBAAAAwqD1T20LL6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACAuwELnwABT3bBKAAAAABJRU5ErkJggg==">

                <span class="modal-arrow-go-top"><a href="#modal-top-cwm">&uArr;</a></span>
            </div>
        </div>

        <div class="modal-content SymfonyECF">
            <div class="modal-header" id="modal-top-ecf">
                <h1>Site pour une mairie</h1>
                <span class="closeModal">&times;</span>
            </div>
            <div class="modal-body">
                <p>Pendant ma formation, j'ai été chargé de développer un site fictif destiné à une
                    mairie, en utilisant le framework <b><a href="https://symfony.com/" target="_blank" class="content-link">Symfony.</a></b>.
                </p>
                <p>Le cahier des charges incluait la mise en place d'un système de gestion des actualités et des
                    événements de la ville avec un tableau de bord administratif, une page dédiée à l'histoire, une page
                    de contact comprenant une carte interactive de la ville, ainsi qu'un module dédié à la météo.</p>
                <p>En plus des exigences de base, j'ai ajouté un agenda permettant de planifier des rendez-vous, ainsi
                    qu'une fonction de recherche par mots-clés.</p>
                <p>Les technologies employées pour ce projet étaient PHP, Twig, Bootstrap, et JavaScript. J'ai également
                    intégré l'API de Mapbox pour la carte interactive et l'API d'OpenWeather pour les informations
                    météorologiques.</p>
                <h4>&rArr; <a href="https://github.com/opertune/Symfony_Ecf_City" target="_blank" class="content-link">Dépôt Github</a></h4>
                <p>Page d'accueil.</p>
                <img class="mairie-home-page" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABZgAAAObAQMAAADkJ3YTAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAALdJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAjwaJGgABXMscpQAAAABJRU5ErkJggg==">
                <p>Page des événements.</p>
                <img class="mairie-events" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABPQAAAMxAQMAAABW9X+lAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAJZJREFUeNrtwQENAAAAwqD3T20ON6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADgxwD+rwABh/O4LwAAAABJRU5ErkJggg==">
                <p>Page de contact.</p>
                <img class="mairie-contact" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABIAAAAJ7AQMAAACh43j5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAHBJREFUeNrtwQENAAAAwqD3T20PBxQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwL0BZ7oAAQL4vwMAAAAASUVORK5CYII=">
                <p>Panel d'administration pour ajouter, modifier ou supprimer des événements et des actualités.</p>
                <img class="mairie-panel-admin" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABe4AAALQAQMAAADcmHLXAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAJtJREFUeNrtwQENAAAAwqD3T+3sARQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAANxlOAAEz+5jUAAAAAElFTkSuQmCC">

                <span class="modal-arrow-go-top"><a href="#modal-top-ecf">&uArr;</a></span>
            </div>
        </div>

        <div class="modal-content pacmanJS">
            <div class="modal-header" id="modal-top-pacmanJS">
                <h1>Pac-Man</h1>
                <span class="closeModal">&times;</span>
            </div>
            <div class="modal-body">
                <p>Pour acquérir les fondamentaux de la programmation orientée objet en
                    JavaScript et de la manipulation du DOM, on m'a assigné la réalisation d'un jeu Pac-Man.</p>
                <p>Le joueur peut contrôler Pac-Man à l'aide des touches WASD du clavier, tandis que les fantômes se
                    déplacent de manière autonome selon un mouvement aléatoire. Si le joueur entre en contact avec un
                    fantôme, la partie prend fin.</p>
                <h4>&rArr; <a href="https://github.com/opertune/PacMan" target="_blank" class="content-link">Dépôt
                        Github</a></h4>
                <img class="pacman-win" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA2kAAAOyAQMAAADTvw8JAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAHxJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwLsBmj0AAVbgcEQAAAAASUVORK5CYII=">
                <img class="pacman-lose" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA2cAAAO1AQMAAADQcw8CAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAHxJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAJ4Nl9UAAXCabacAAAAASUVORK5CYII=">

                <span class="modal-arrow-go-top"><a href="#modal-top-pacmanJS">&uArr;</a></span>
            </div>
        </div>

        <div class="modal-content spaceInvaders">
            <div class="modal-header" id="modal-top-spaceInvaders">
                <h1>Space Invaders</h1>
                <span class="closeModal">&times;</span>
            </div>
            <div class="modal-body">
                <p>Pour valider le module sur la programmation orientée objet, j'ai dû
                    programmer un jeu de type Space Invaders en Java.</p>
                <p>Le cahier des charges incluait la mise en place des déplacements du joueur et des vaisseaux ennemis,
                    la destruction des briques et du joueur, ainsi que la gestion du score et des sons.</p>
                <h4>&rArr; <a href="https://github.com/opertune/SpaceInvaders" target="_blank" class="content-link">Dépôt Github</a></h4>
                <img class="spaceinvaders-home" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlYAAAJvAQMAAACDHg05AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAEVJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACABwO49AABCdZ8mAAAAABJRU5ErkJggg==">
                <img class="spaceinvaders-ig" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlYAAAJsAQMAAAAFin+XAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAEVJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADg3wC4EAABlUaskwAAAABJRU5ErkJggg==">
                <img class="spaceinvaders-lose" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAkQAAAJxAQMAAACZmT8HAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAERJREFUeNrtwTEBAAAAwqD1T20IX6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIDfALSqAAHbtzYQAAAAAElFTkSuQmCC">

                <span class="modal-arrow-go-top"><a href="#modal-top-spaceInvaders">&uArr;</a></span>
            </div>
        </div>

        <div class="modal-content airdejava">
            <div class="modal-header" id="modal-top-airdejava">
                <h1>Un air de java</h1>
                <span class="closeModal">&times;</span>
            </div>
            <div class="modal-body">
                <p>Un Air de Java" est un projet qui m'a été confié pendant ma formation afin
                    de valider le module sur la conception des bases de données.</p>
                <p>L'objectif était de créer une application bureautique en Java, comprenant le dictionnaire de données,
                    le modèle conceptuel de données et le modèle physique de données, pour une association. Cette
                    application devait permettre la gestion des groupes de musique affiliés à l'association ainsi que
                    des rencontres culturelles auxquelles les groupes peuvent participer.</p>
                <h4>&rArr; <a href="https://github.com/opertune/AirDeJava" target="_blank" class="content-link">Dépôt
                        Github</a></h4>
                <p>Page principale de l'application.</p>
                <img class="airedejava-home" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAiwAAAH/AQMAAABO+xS2AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADpJREFUeNrtwTEBAAAAwqD1T20ND6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAM4NjbkAAXYbpXIAAAAASUVORK5CYII=">
                <p>Exemple d'une requete SQL.</p>
                <img class="airedejava-sql" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgoAAABXAQMAAABfgP8WAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAB1JREFUeNrtwTEBAAAAwqD1T20ND6AAAAAAAODUABbFAAERFm77AAAAAElFTkSuQmCC">
                <p>Résultat d'une requete.</p>
                <img class="airedejava-result" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAewAAAIGAQMAAACs0y5aAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwTEBAAAAwqD1T20MH6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA4Gl/egABxGFLvgAAAABJRU5ErkJggg==">

                <span class="modal-arrow-go-top"><a href="#modal-top-airdejava">&uArr;</a></span>
            </div>
        </div>

        <div class="modal-content cplusplus">
            <div class="modal-header" id="modal-top-cplusplus">
                <h1>Traduction d'algorithme</h1>
                <span class="closeModal">&times;</span>
            </div>
            <div class="modal-body">
                <p>Quand j'ai commencé à apprendre la programmation, j'ai d'abord acquis les
                    compétences pour écrire des algorithmes, puis je les ai traduits en C++.</p>
                <p>Cryptographie : Saisir, crypter et décrypter un message.</p>
                <h4>&rArr; <a href="https://github.com/opertune/Cryptographie" target="_blank" class="content-link">Dépôt Github</a></h4>
                <img class="cryptographie" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAjMAAADfAQMAAAA5hcBRAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAACZJREFUeNrtwTEBAAAAwqD1T20Hb6AAAAAAAAAAAAAAAAAAAADgNz64AAFCVKWrAAAAAElFTkSuQmCC">

                <p>Inversion de matrice : Saisir une matrice et afficher son inversion.</p>
                <h4>&rArr; <a href="https://github.com/opertune/Inversion-de-matrice" target="_blank" class="content-link">Dépôt Github</a></h4>
                <img class="inversion-matrice" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAjMAAAEfAQMAAACOGtVRAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAACtJREFUeNrtwYEAAAAAw6D5U1/gCFUBAAAAAAAAAAAAAAAAAAAAAAAAAHwDULgAAW/fdSQAAAAASUVORK5CYII=">

                <span class="modal-arrow-go-top"><a href="#modal-top-cplusplus">&uArr;</a></span>
            </div>
        </div>

        <div class="modal-content labo">
            <div class="modal-header" id="modal-top-labo">
                <h1>Mon laboratoire</h1>
                <span class="closeModal">&times;</span>
            </div>
            <div class="modal-body">
                <p>Régulièrement, je me lance dans de petits projets afin de découvrir et
                    d'expérimenter de nouvelles technologies.</p>
                <p>Par exemple, récemment, je me suis intéressé à certains frameworks JavaScript tels que <b><a href="https://threejs.org/examples/#webgl_animation_keyframes" target="_blank" class="content-link">Three.js</a></b> et <b><a href="https://react.dev/" target="_blank" class="content-link">React</a></b></p>
                <p>Avec Three.js, j'ai créé un petit train animé circulant sur des rails.</p>
                <h4>&rArr; <a href="https://github.com/opertune/ThreeJS-Exemple" target="_blank" class="content-link">Dépôt Github</a></h4>
                <img class="threejs-train" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA6oAAAIlAQMAAADmI5fkAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAFZJREFUeNrtwTEBAAAAwqD1T20Hb6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA4Df8zAAHZEn67AAAAAElFTkSuQmCC">

                <p>Avec React, j'ai créé une liste de tâches (ToDoList).</p>
                <h4>&rArr; <a href="https://github.com/opertune/Todolist" target="_blank" class="content-link">Dépôt
                        Github</a></h4>
                <img class="todolist-1" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAATYAAAEKAQMAAACiyus8AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAACFJREFUeNrtwTEBAAAAwqD1T20IX6AAAAAAAAAAAAAAeAwpkAAB8xe7rAAAAABJRU5ErkJggg==">
                <img class="todolist-2" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAATgAAAEEAQMAAACGCbr/AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAACFJREFUeNrtwTEBAAAAwqD1T20JT6AAAAAAAAAAAAAAvgYooAABG4AAEQAAAABJRU5ErkJggg==">

                <span class="modal-arrow-go-top"><a href="#modal-top-labo">&uArr;</a></span>
            </div>
        </div>

        <div class="modal-content python">
            <div class="modal-header" id="modal-top-python">
                <h1>Bot Discord</h1>
                <span class="closeModal">&times;</span>
            </div>
            <div class="modal-body">
                <p>Étant dans le besoin de gérer des événements avec un groupe d'amis, j'ai créé
                    un bot pour Discord qui me permet de voir qui n'est pas inscrit.</p>
                <p>Les commandes du bot ne sont accessibles que pour les personnes ayant un certain rôle (sinon, il
                    envoie un message d'erreur).</p>
                <p>Les personnes qui ne sont pas inscrites sont mentionnées dans le canal où la commande a été envoyée.
                </p>
                <h4>&rArr; <a href="https://github.com/opertune/HavenBot" target="_blank" class="content-link">Dépôt
                        Github</a></h4>
                <p>Exemple de la commande.</p>
                <img class="bot-discord" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAbEAAACJAQMAAACYQJSGAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAB5JREFUeNrtwQENAAAAwqD3T20ON6AAAAAAAAAAeDYd+AABmNgv8QAAAABJRU5ErkJggg==">

                <span class="modal-arrow-go-top"><a href="#modal-top-python">&uArr;</a></span>
            </div>
        </div>
    </div>
</body>

<script src="./public/js/navbar.js" type="text/javascript"></script>
<script src="./public/js/subpage.js" type="text/javascript"></script>
<script src="./public/js/modal.js" type="text/javascript"></script>

</html>