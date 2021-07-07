<!-- Sergio Pacheco - Portfolio Site HTML Markup -->

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Sergio Pacheco | Dev Portfolio</title>
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        
        <!-- Bootstrap CSS -->
        <link rel = "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <!-- Bootstrap JS-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Custom Site CSS -->
        <link rel = "stylesheet" href = "css/portfolio-styling.css">

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
        <!-- Site Header -->
        <header>
            <!-- Header Navigation -->
            <nav class = "navbar navbar-expand-lg">
                <div class = "container-fluid">
                   
                    <picture>
                        <source media = "(min-width: 992px)" srcset = "images/png/placeholder-logo-2.png"> <!-- Desktop Logo -->
                        <source media = "" srcset = "images/png/placeholder-logo-2-m.png"> <!-- Mobile Logo -->
                        <img src = "images/png/placeholder-logo-2.png" alt = "" id = "siteLogo"> 
                    </picture>

                    <button class = "hamburger navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#mobileNav" aria-controls = "mobileNav" aria-expanded = "false" aria-label = "Toggle mobile navigation">
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

            <div id = "welcomeSection" class = "container-fluid">
                <div class = "row align-items-center">
                    <div class = "col-md-7 d-flex left-content">
                        <div class = "welcome-text">
                            <h1>Hiya! My name is Sergio.</h1>
                            I am a passionate Front-End Developer <i>(and occasional designer)</i> who enjoys developing creative, fully functional experiences for users.<br>
                            <a target = "_blank" class = "resume-btn" href = "images/pdf/Sergio Pacheco - Resume.pdf">
                                Check out my Resum&eacute; <i class="fas fa-file-download"></i>
                            </a>
                        </div>
                    </div>
                    <div class = "col-md-5 d-flex right-content">
                        <img class = "welcome-img" alt = "" src = "images/jpg/me-1.jpg">
                    </div>
                </div>
            </div>

            <span id = "projectsAnch">&nbsp;</span>
            <div id = "projectsSection" class = "container-fluid">
                <h2 class = "section-header">Project Showcase</h2>
                <span class = "header-subtxt">(Click on a project for details)</span>
                <div class = "row proj-row">
                    <div class = "proj-one col-md-6 d-flex left-content" data-aos = "flip-right" data-aos-once = "true">
                        <div id = "projContainerOne">
                            &nbsp;
                        </div>
                        <div id = "overlayOne">
                            <i class = "close-overlay-one fas fa-times-circle">
                                &nbsp;
                            </i>
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
                                    Sass
                                </span>
                                <span class = "tool">
                                    JavaScript
                                </span>
                                <span class = "tool">
                                    jQuery
                                </span>
                            </div>
                            <div class = "project-links">
                                <a target = "_blank" class = "project-btn" href = "https://spacheco64.github.io/Teenie-Robo">View Live</a>
                                <a target = "_blank" class = "project-btn" href = "https://github.com/SPacheco64/Teenie-Robo">GitHub</a>
                            </div>
                        </div>
                    </div>

                    <div class = "proj-two col-md-6 d-flex right-content" data-aos = "flip-left" data-aos-once = "true">
                        <div id = "projContainerTwo">
                            &nbsp;
                        </div>
                        <div id = "overlayTwo">
                            <i class = "close-overlay-two fas fa-times-circle">
                                &nbsp;
                            </i>
                            <h2>Portfolio</h2>
                            <p>
                                The very same Responsive Portfolio Website that you are on right now.
                            </p>
                            <div class = "toolkits-used">
                                <span class = "tool">
                                    HTML5
                                </span>
                                <span class = "tool">
                                    Sass
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
                                <a target = "_blank" class = "project-btn" href = "https://github.com/SPacheco64/SPacheco64.github.io">GitHub</a>
                            </div>                 
                        </div>
                    </div>
                </div>

                <div class = "row">
                    <div class = "coming-soon col" data-aos = "fade-up" data-aos-once = "true">
                        Uploading More Projects Here Soon...
                    </div>
    
                </div>
            </div>

            <span id = "aboutAnch">&nbsp;</span>
            <div id = "aboutSection" class = "container-fluid">
                <div class = "row align-items-center">
                    <div class = "col-md-7 d-flex left-content">
                        <div>
                            <h2 class = "section-header">About Me</h2> 
                            I am a graduate of the <a href = "https://www.ucf.edu">University of Central Florida</a>, still looking to learn and grow as a developer each day.
                            When I am not coding things up, or spoiling my cat, I like to spend my time playing games with my friends, drinking copious amounts of tea and
                            practicing digital/sprite art <img class = "mini-icon" alt = "" src = "images/gif/blob-sprite.gif">.
                        </div>
                    </div>
                    <div class = "col-md-5 d-flex right-content">
                        <img class = "about-img" alt = "" src = "images/jpg/me-3.jpg">
                    </div>
                </div>
            </div>
    

            <div id = "clientsSection" class = "container-fluid text-center text-uppercase">
                <h2 class = "section-header">Companies & Partners that I have been<br> lucky enough to work with:</h2> 
                <div class = "row align-items-center">
                    <div class = "col d-flex justify-content-center">
                        <img alt = "Darden Restaurants, Inc." src = "images/png/darden-logo.png" class = "company-logo">
                    </div>
                    <div class = "col d-flex justify-content-center">
                        <img alt = "University of Central Florida" src = "images/png/ucf-logo.png" class = "company-logo">
                    </div>

                    <!-- Force next columns to break to new line -->
                    <div class = "w-100"></div>

                    <div class = "col d-flex justify-content-center">
                        <img alt = "M Fitness and Wellness" src = "images/png/mfitandwell-logo.png" class = "company-logo">
                    </div>
                    <div class = "col d-flex justify-content-center">
                        <img alt = "Willow's Reef, LLC. Coral Feast." src = "images/png/coral-feast-logo.png" class = "company-logo">
                    </div>
                </div>
            </div>

            <div id = "toolkitSection" class = "container-fluid">
                <h2 class = "section-header">My Toolkit</h2> 
    
                <div class = "row align-items-center" data-aos = "flip-up" data-aos-once = "true">
                    <div class = "col-3 d-flex justify-content-center mx-auto toolkit-col">
                        <i class="fab fa-html5"></i>
                        <div class = "toolkit-name">
                            HTML5
                        </div>
                    </div>
                    <div class = "col-3 d-flex justify-content-center mx-auto toolkit-col">
                        <i class="fab fa-css3-alt"></i>
                        <div class = "toolkit-name">
                            CSS3
                        </div>
                    </div>
    
                    <!-- Force next columns to break to new line -->
                    <div class = "w-100"></div>
    
                    <div class = "col-3 d-flex justify-content-center mx-auto toolkit-col">
                        <i class="fab fa-sass"></i>
                        <div class = "toolkit-name">
                            Sass/Scss
                        </div>
                    </div>
                    <div class = "col-3 d-flex justify-content-center mx-auto toolkit-col">
                        <i class="fab fa-bootstrap"></i>
                        <div class = "toolkit-name">
                            Bootstrap
                        </div>
                    </div>
                </div>
                <div class = "row align-items-center" data-aos = "flip-up" data-aos-once = "true">
                    <div class = "col-3 d-flex justify-content-center mx-auto toolkit-col">
                        <i class="fab fa-js-square"></i>
                        <div class = "toolkit-name">
                            JavaScript
                        </div>
                    </div>
                    <div class = "col-3 d-flex justify-content-center mx-auto toolkit-col">
                        <img class = "toolkit-icon" alt = "" src = "images/png/jquery-icon.png">
                        <div class = "toolkit-name">
                            jQuery
                        </div>
                    </div>
    
                    <!-- Force next columns to break to new line -->
                    <div class = "w-100"></div>
    
                    <div class = "col-3 d-flex justify-content-center mx-auto toolkit-col">
                        <i class="fab fa-php"></i>
                        <div class = "toolkit-name">
                            PHP
                        </div>
                    </div>
                    <div class = "col-3 d-flex justify-content-center mx-auto toolkit-col">
                        <img class = "toolkit-icon" alt = "" src = "images/png/photoshop-icon.png">
                        <div class = "toolkit-name">
                            Photoshop
                        </div>
                    </div>
                </div>
                <div class = "row align-items-center" data-aos = "flip-up" data-aos-once = "true">
                    <div class = "col-3 d-flex justify-content-center mx-auto toolkit-col">
                        <img class = "toolkit-icon" alt = "" src = "images/png/visualstudio-icon.png">
                        <div class = "toolkit-name">
                            Visual Studio
                        </div>
                    </div>
                    <div class = "col-3 d-flex justify-content-center mx-auto toolkit-col">
                        <i class="fab fa-wordpress"></i>
                        <div class = "toolkit-name">
                            WordPress                    
                        </div>
                    </div>
    
                    <!-- Force next columns to break to new line -->
                    <div class = "w-100"></div>
                    
                    <div class = "col-3 d-flex justify-content-center mx-auto toolkit-col">
                        <i class="fab fa-github"></i>
                        <div class = "toolkit-name">
                            GitHub
                        </div>
                    </div>
                    <div class = "col-3 d-flex justify-content-center mx-auto toolkit-col">
                        <i class="fas fa-plus"></i>                        
                        <div class = "toolkit-name">
                            And more!
                        </div>
                    </div>
                </div>
            </div>

            <span id = "contactAnch">&nbsp;</span>
            <div id = "contactSection" class = "container-fluid">
                <section class = "contact aos-init aos-animate" data-aos = "fade-up" data-aos-once = "true" id = "contact">
                    <div class = "contactContainer wrapper">
                        <div class = "row">
                            <div class = "contactInformation col-md-5">
                                <h2 class = "section-header">Contact Me</h2>
                                <p>
                                    If you'd like to have a chat, please feel free to contact me using any of the links below, or just drop a message here on this site and I will
                                    get back to you ASAP!
                                </p>
                                <div class = "socialIcons">
                                    <span>
                                        <a target = "_blank" href = "https://www.linkedin.com/in/sergio-pacheco-1584b216a/">
                                            <i class = "fab fa-linkedin"></i>
                                        </a>
                                    </span>
                                    <span>
                                        <a target = "_blank" href = "mailto:sergiomiguelpacheco64@gmail.com">
                                            <i class = "fas fa-envelope"></i>
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
                    <a target = "_blank" href = "https://www.linkedin.com/in/sergio-pacheco-1584b216a/">
                        <i class = "fab fa-linkedin"></i>
                    </a>
                </span>
                <span>
                    <a target = "_blank" href = "https://github.com/SPacheco64">
                        <i class = "fab fa-github"></i>
                    </a>
                </span>
                <span>
                    <a target = "_blank" href = "mailto:sergiomiguelpacheco64@gmail.com">
                        <i class = "fas fa-envelope"></i>
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
    <script src = "js/portfolio-js.js"></script>
</html>
