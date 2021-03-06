<!-- Sergio Pacheco - Portfolio Site HTML Markup -->

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Sergio Pacheco | Dev Portfolio</title>
        <link rel = "shortcut icon" type = "image/jpg" href = "images/png/site-favicon.ico"/>
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <!-- Bootstrap JS-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <!-- Custom Site CSS -->
        <link rel = "stylesheet" href = "css/portfolio-styling.min.css">

        <!-- Custom PHP for Sending Messages -->
        <?php
            include("message-retrieval.php")
        ?>

        <!-- AOS CSS Animations Includes-->
        <link href = "https://unpkg.com/aos@2.3.1/dist/aos.css" rel = "stylesheet">
        <script src = "https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <!-- Font Awesome script for Icons -->
        <script src = "https://kit.fontawesome.com/b8159c5824.js" crossorigin = "anonymous"></script>
    </head>

    <body>
        <button onclick = "topFunction()" id = "scrollToTopBtn">
            <i class="fas fa-chevron-up"></i>
            <span class = "sr-only">Back to Top</span>
        </button>

        <!-- Site Header -->
        <header>
            <!-- Header Navigation -->
            <nav class = "navbar navbar-expand-lg">
                <div class = "container-fluid">
                    <!--
                    <picture>
                        <source media = "(min-width: 992px)" srcset = "images/png/placeholder-logo-2.png"> 
                        <source media = "" srcset = "images/png/placeholder-logo-2-m.png"> 
                        <img src = "images/png/placeholder-logo-2.png" alt = "Developer Logo" id = "siteLogo"> 
                    </picture>
                    -->
                    <img src = "images/png/placeholder-logo-2.png" alt = "Developer Logo" id = "siteLogo">

                    <button class = "hamburger navbar-toggler" type = "button" data-bs-toggle = "collapse" data-bs-target = "#mobileNav" aria-controls = "mobileNav" aria-expanded = "false" aria-label = "Toggle mobile navigation">
                        <div class = "bar1"></div>
                        <div class = "bar2"></div>
                        <div class = "bar3"></div>
                    </button>

                    <!-- Header Navigation for Mobile Devices -->
                    <div class = "collapse" id = "mobileNav">
                        <ul class = "navbar-nav">
                            <li class = "nav-item">
                                <a class = "nav-link" href = "#projectsAnch"> Projects </a>
                            </li>
                            <li class = "nav-item">
                                <a class = "nav-link" href = "#aboutAnch"> About Me </a>
                            </li>
                            <li class = "nav-item">
                                <a class = "nav-link" href = "#contactAnch"> Contact </a>
                            </li>
                        </ul>
                        <div class = "social-line">
                            <span>
                                <a target = "_blank" href = "https://www.linkedin.com/in/sergio-pacheco-1584b216a/" rel = "noopener norferrer">
                                    <i class = "fab fa-linkedin-in"></i>
                                    <span class = "sr-only">Sergio Pacheco's LinkedIn</span>
                                </a>
                            </span>
                            <span>
                                <a target = "_blank" href = "https://github.com/SPacheco64" rel = "noopener norferrer">
                                    <i class = "fab fa-github"></i>
                                    <span class = "sr-only">Sergio Pacheco's Github</span>
                                </a>
                            </span>
                            <span>
                                <a target = "_blank" href = "mailto:sergiomiguelpacheco64@gmail.com" rel = "noopener norferrer">
                                    <i class = "far fa-envelope"></i>
                                    <span class = "sr-only">Sergio Pacheco's Email</span>
                                </a>
                            </span>
                        </div>
                    </div>

                    <!-- Header Navigation for Desktop Devices -->
                    <div class = "" id = "desktopNav">
                        <ul class = "navbar-nav align-items-center">
                            <li class = "nav-item">
                                <a class = "nav-link" href = "#projectsAnch"> Projects </a>
                            </li>
                            <li class = "nav-item">
                                <a class = "nav-link" href = "#aboutAnch"> About Me </a>
                            </li>
                            <li class = "nav-item">
                                <a class = "nav-link" href = "#contactAnch"> Contact </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div id = "pageContent" class = "">
            <!-- Overlay for Mobile Dropdown -->
            <div id = "screenOverlay">&nbsp;</div>

            <div id = "welcomeSection" class = "container-fluid justify-content-center">
                <div class = "row align-items-center">
                    <div class = "col-md-7 d-flex left-content order-2 order-md-1">
                        <div class = "welcome-text" data-aos = "fade-up" data-aos-once = "true">
                            <h1 class = "welcome-header">Hiya! My name is Sergio.</h1>
                            I am a passionate Front-End Developer <i>(and occasional designer)</i> who enjoys developing creative, fully functional experiences for users.<br>
                            <a target = "_blank" class = "resume-btn" href = "images/pdf/Sergio Pacheco - Resume.pdf">
                                Check out my R&eacute;sum&eacute; <i class="fas fa-file-download"></i>
                            </a>
                        </div>
                    </div>
                    <div class = "col-md-5 d-flex right-content order-1 order-md-2" data-aos = "fade-up" data-aos-once = "true">
                        <img class = "welcome-img" alt = "Sergio Pacheco Picture" src = "images/jpg/me-1.jpg">
                    </div>
                </div>
            </div>

            <span class = "anchor" id = "projectsAnch">&nbsp;</span>
            <div id = "projectsSection" class = "container-fluid">
                <h2 class = "section-header">Personal/Freelance Project Showcase</h2>
                <span class = "header-subtxt">(Click on a project for details)</span>
                <div class = "row proj-row">
                    <div class = "proj-one col-md-6 d-flex left-content" data-aos = "flip-right" data-aos-once = "true">
                        <div class = "video-container">
                            <video autoplay loop muted>
                                <source src = "images/mp4/exalted-dawn-vid.mp4" type = "video/mp4">
                                Unable to play video in your browser.
                            </video>
                        </div>
                        <div id = "projContainerOne">
                            &nbsp;
                        </div>
                        <div id = "overlayOne">
                            <i class = "close-overlay-one far fa-times-circle">
                                &nbsp;
                            </i>
                            <div class = "details-container m-auto">
                                <h2>Exalted_Dawn <br>Characters Page</h2>
                                <p>
                                    A character bio website commissioned by the digital artist Exalted_Dawn.
                                    It contains character info and reference image galleries.
                                </p>
                                <div class = "toolkits-used">
                                    <span class = "tool">
                                        HTML5
                                    </span>
                                    <span class = "tool">
                                        SCSS
                                    </span>
                                    <span class = "tool">
                                        Bootstrap
                                    </span>
                                    <span class = "tool">
                                        JavaScript
                                    </span>
                                    <span class = "tool">
                                        jQuery
                                    </span>
                                </div>
                                <div class = "project-links">
                                    <a target = "_blank" class = "project-btn" href = "https://exalted-dawn.github.io" rel = "noopener norferrer">View Live</a>
                                    <a target = "_blank" class = "project-btn" href = "https://github.com/SPacheco64/exalted-dawn.github.io" rel = "noopener norferrer">GitHub</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class = "proj-two col-md-6 d-flex right-content" data-aos = "flip-left" data-aos-once = "true">
                        <div class = "video-container">
                            <video autoplay loop muted>
                                <source src = "images/mp4/teenie-robo-vid.mp4" type = "video/mp4">
                                Unable to play video in your browser.
                            </video>
                        </div>
                        <div id = "projContainerTwo">
                            &nbsp;
                        </div>
                        <div id = "overlayTwo">
                            <i class = "close-overlay-two far fa-times-circle">
                                &nbsp;
                            </i>
                            <div class = "details-container m-auto">
                                <h2>TEENIE-ROBO</h2>
                                <p>
                                    A simple JavaScript game where the player attempts to catch as many
                                    falling batteries as they can before they run out of time.
                                </p>
                                <div class = "toolkits-used">
                                    <span class = "tool">
                                        HTML5
                                    </span>
                                    <span class = "tool">
                                        SCSS
                                    </span>
                                    <span class = "tool">
                                        JavaScript
                                    </span>
                                    <span class = "tool">
                                        jQuery
                                    </span>
                                </div>
                                <div class = "project-links">
                                    <a target = "_blank" class = "project-btn" href = "https://spacheco64.github.io/Teenie-Robo" rel = "noopener norferrer">View Live</a>
                                    <a target = "_blank" class = "project-btn" href = "https://github.com/SPacheco64/Teenie-Robo" rel = "noopener norferrer">GitHub</a>
                                </div>   
                            </div>
              
                        </div>
                    </div>
                </div>

                <div class = "row proj-row">
                    <div class = "proj-three col-md-6 d-flex left-content" data-aos = "flip-right" data-aos-once = "true">
                        <div id = "projContainerThree">
                            &nbsp;
                        </div>
                        <div id = "overlayThree">
                            <i class = "close-overlay-three far fa-times-circle">
                                &nbsp;
                            </i>
                            <div class = "details-container m-auto">
                                <h2>Portfolio</h2>
                                <p>
                                    The very same Responsive Portfolio Website that you are on right now.
                                </p>
                                <div class = "toolkits-used">
                                    <span class = "tool">
                                        HTML5
                                    </span>
                                    <span class = "tool">
                                        SCSS
                                    </span>
                                    <span class = "tool">
                                        Bootstrap
                                    </span>
                                    <span class = "tool">
                                        JavaScript
                                    </span>
                                    <span class = "tool">
                                        PHP
                                    </span>
                                </div>
                                <div class = "project-links">
                                    <a target = "_blank" class = "project-btn" href = "https://github.com/SPacheco64/SPacheco64.github.io" rel = "noopener norferrer">GitHub</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class = "proj-four col-md-6 d-flex right-content" data-aos = "flip-left" data-aos-once = "true">
                            Uploading More Projects Here Soon...
                    </div>
                </div>
            </div>

            <span class = "anchor" id = "aboutAnch">&nbsp;</span>
            <div id = "aboutSection" class = "container-fluid">
                <div class = "row align-items-center">
                    <div class = "col-md-7 d-flex left-content">
                        <div data-aos = "fade-up" data-aos-once = "true">
                            <h2 class = "section-header">About Me</h2> 
                            I am a graduate of the <a target = "_blank" href = "https://www.ucf.edu" rel = "noopener norferrer">University of Central Florida</a>, still looking to learn and grow as a developer each day.
                            When I am not coding things up, or spoiling my cat, I like to spend my time playing games with my friends, drinking copious amounts of tea and
                            practicing digital/sprite art <img class = "mini-icon" alt = "" src = "images/gif/blob-sprite.gif">.
                        </div>
                    </div>
                    <div class = "col-md-5 d-flex right-content" data-aos = "fade-down" data-aos-once = "true">
                        <img class = "about-img" alt = "" src = "images/jpg/me-4.jpg">
                    </div>
                </div>
            </div>
    

            <div id = "clientsSection" class = "container-fluid text-center text-uppercase">
                <h2 class = "section-header">
                    Companies & Partners that I have worked with:
                </h2> 
                <div class = "row align-items-center mt-4">
                    <div class = "col-12 col-md-6 col-lg-4 col-xxl-3 mt-3 mt-lg-5 d-flex justify-content-center" data-aos = "flip-down" data-aos-once = "true">
                        <span class = "company-logo justify-content-center">
                            <img alt = "Darden Restaurants, Inc." src = "images/png/darden-logo.png">
                        </span>
                    </div>
                    <div class = "col-12 col-md-6 col-lg-4 col-xxl-3 mt-3 mt-lg-5 d-flex justify-content-center" data-aos = "flip-down" data-aos-once = "true">
                        <span class = "company-logo justify-content-center">
                            <img alt = "University of Central Florida" src = "images/png/ucf-logo.png">
                        </span>
                    </div>
                    <div class = "col-12 col-md-6 col-lg-4 col-xxl-3 mt-3 mt-lg-5 d-flex justify-content-center" data-aos = "flip-down" data-aos-once = "true">
                        <span class = "company-logo justify-content-center">
                            <img alt = "Willow's Reef, LLC. Coral Feast." src = "images/png/coral-feast-logo.png">
                        </span>
                    </div>
                    <div class = "col-12 col-md-6 col-lg-4 col-xxl-3 mt-3 mt-lg-5 d-flex justify-content-center" data-aos = "flip-down" data-aos-once = "true">
                        <span class = "company-logo justify-content-center">
                            <img alt = "Euphyllia Life" src = "images/png/euphyllia-life-logo.png">
                        </span>
                    </div>
                    <div class = "col-12 col-md-6 col-lg-4 col-xxl-3 mt-3 mt-lg-5 d-flex justify-content-center" data-aos = "flip-down" data-aos-once = "true">
                        <span class = "company-logo justify-content-center">
                            <img alt = "M Fitness and Wellness" src = "images/png/mfitandwell-logo.png">
                        </span>
                    </div>
                    <div class = "col-12 col-md-6 col-lg-4 col-xxl-3 mt-3 mt-lg-5 d-flex justify-content-center" data-aos = "flip-down" data-aos-once = "true">
                        <span class = "company-logo justify-content-center">
                            <img alt = "Skavnes Logo" src = "images/png/skavnes-logo.png">
                        </span>
                    </div>
                </div>
            </div>

            <div id = "toolkitSection" class = "container-fluid">
                <h2 class = "section-header">My Tech Stack</h2> 
    
                <div class = "row align-items-center">
                    <div class = "col-6 col-md-3 text-center justify-content-center toolkit-col" data-aos = "flip-up" data-aos-once = "true">
                        <i class="fab fa-html5"></i><br>
                        <div class = "toolkit-name">
                            HTML5
                        </div>
                    </div>
                    <div class = "col-6 col-md-3 text-center justify-content-center toolkit-col" data-aos = "flip-up" data-aos-once = "true">
                        <i class="fab fa-css3-alt"></i><br>
                        <div class = "toolkit-name">
                            CSS3
                        </div>
                    </div>
                    <div class = "col-6 col-md-3 text-center justify-content-center toolkit-col" data-aos = "flip-up" data-aos-once = "true">
                        <i class="fab fa-sass"></i><br>
                        <div class = "toolkit-name">
                            SASS/SCSS
                        </div>
                    </div>
                    <div class = "col-6 col-md-3 text-center justify-content-center toolkit-col" data-aos = "flip-up" data-aos-once = "true">
                        <i class="fab fa-bootstrap"></i><br>
                        <div class = "toolkit-name">
                            Bootstrap
                        </div>
                    </div>
                    <div class = "col-6 col-md-3 text-center justify-content-center toolkit-col" data-aos = "flip-up" data-aos-once = "true">
                        <i class="fab fa-js-square"></i><br>
                        <div class = "toolkit-name">
                            JavaScript
                        </div>
                    </div>
                    <div class = "col-6 col-md-3 text-center justify-content-center toolkit-col" data-aos = "flip-up" data-aos-once = "true">
                        <img class = "toolkit-icon" alt = "" src = "images/png/jquery-icon.png"><br>
                        <div class = "toolkit-name">
                            jQuery
                        </div>
                    </div>
                    <div class = "col-6 col-md-3 text-center justify-content-center toolkit-col" data-aos = "flip-up" data-aos-once = "true">
                        <i class="fab fa-php"></i><br>
                        <div class = "toolkit-name">
                            PHP
                        </div>
                    </div>
                    <div class = "col-6 col-md-3 text-center justify-content-center toolkit-col" data-aos = "flip-up" data-aos-once = "true">
                        <img class = "toolkit-icon" alt = "" src = "images/png/photoshop-icon.png"><br>
                        <div class = "toolkit-name">
                            Photoshop
                        </div>
                    </div>
                    <div class = "col-6 col-md-3 text-center justify-content-center toolkit-col" data-aos = "flip-up" data-aos-once = "true">
                        <img class = "toolkit-icon" alt = "" src = "images/png/visualstudio-icon.png"><br>
                        <div class = "toolkit-name">
                            Visual Studio
                        </div>
                    </div>
                    <div class = "col-6 col-md-3 text-center justify-content-center toolkit-col" data-aos = "flip-up" data-aos-once = "true">
                        <i class="fab fa-wordpress"></i><br>
                        <div class = "toolkit-name">
                            WordPress                    
                        </div>
                    </div>
                    <div class = "col-6 col-md-3 text-center justify-content-center toolkit-col" data-aos = "flip-up" data-aos-once = "true">
                        <i class="fab fa-shopify"></i><br>           
                        <div class = "toolkit-name">
                            Shopify
                        </div>
                    </div>
                    <div class = "col-6 col-md-3 text-center justify-content-center toolkit-col" data-aos = "flip-up" data-aos-once = "true">
                        <i class="fab fa-github"></i><br>
                        <div class = "toolkit-name">
                            GitHub
                        </div>
                    </div>
                    <div class = "col-6 col-md-3 text-center justify-content-center toolkit-col" data-aos = "flip-up" data-aos-once = "true">
                        <i class="fas fa-plus"></i>        
                        <br>           
                        <div class = "toolkit-name">
                            And more!
                        </div>
                    </div>
                </div>
            </div>

            <span class = "anchor" id = "contactAnch">&nbsp;</span>
            <div id = "contactSection" class = "container-fluid">
                <section class = "contact aos-init aos-animate" data-aos = "fade-up" data-aos-once = "true" id = "contact">
                    <div class = "contactContainer wrapper justify-content-center">
                        <div class = "row">
                            <div class = "contactInformation col-md-5">
                                <h2 class = "section-header">Contact Me</h2>
                                <p>
                                    If you'd like to have a chat, please feel free to contact me using any of the links below, or just drop a message here on this site and I will
                                    get back to you ASAP!
                                </p>
                                <div class = "socialIcons">
                                    <span>
                                        <a target = "_blank" href = "https://www.linkedin.com/in/sergio-pacheco-1584b216a/" rel = "noopener norferrer">
                                            <i class = "fab fa-linkedin"></i>
                                            <span class = "sr-only">Sergio Pacheco's LinkedIn</span>
                                        </a>
                                    </span>
                                    <span>
                                        <a target = "_blank" href = "mailto:sergiomiguelpacheco64@gmail.com" rel = "noopener norferrer">
                                            <i class = "fas fa-envelope-square"></i>
                                            <span class = "sr-only">Sergio Pacheco's Email</span>
                                        </a>
                                    </span>
                                </div>
                            </div>
    
                            <div class = "contactForm col-md-6">
                                <form name = "contact" method = "POST" action = "message-retrieval.php">
                                    <input type = "hidden" name = "form-name" value = "contact">
                                    <input type = "text" name = "name" id = "name" placeholder = "Name" autocomplete = "off" required = "true">
                                    <input type = "email" name = "email" id = "email" placeholder = "E-mail" required = "true">
                                    <textarea name = "message" id = "message" placeholder = "Message" required = "true"></textarea>
                                    <div class = "submit-container">
                                        <button name = "send" type = "submit" value = "Submit"> Send Message </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- Site Footer -->
        <footer>
            <div>
                <span>
                    <a target = "_blank" href = "https://www.linkedin.com/in/sergio-pacheco-1584b216a/" rel = "noopener norferrer">
                        <i class="fab fa-linkedin-in"></i>
                        <span class = "sr-only">Sergio Pacheco's LinkedIn</span>
                    </a>
                </span>
                <span>
                    <a target = "_blank" href = "https://github.com/SPacheco64" rel = "noopener norferrer">
                        <i class = "fab fa-github"></i>
                        <span class = "sr-only">Sergio Pacheco's Github</span>
                    </a>
                </span>
                <span>
                    <a target = "_blank" href = "mailto:sergiomiguelpacheco64@gmail.com" rel = "noopener norferrer">
                        <i class = "far fa-envelope"></i>
                        <span class = "sr-only">Sergio Pacheco's Email</span>
                    </a>
                </span>
            </div>
            <div>
                Developed & Designed by 
                <!-- Force next columns to break to new line -->
                <div class = "w-100"></div>
                Sergio Pacheco
            </div>
        </footer>

    </body>

    <!-- Custom Site JS -->
    <script src = "js/portfolio-js.min.js"></script>
</html>