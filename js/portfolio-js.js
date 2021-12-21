// Sergio Pacheco - Portfolio Site JS

// Swaps between Hamburger Icon to 'X' and displays the dropdown menu
$(document).ready(function () 
{
    // Preloads the images for smoother page loading
    if (document.images) 
    {
        var img = [];

        img[0] = new Image();
        img[1] = new Image();
        img[2] = new Image();

        img[0].src = "images/jpg/me-1.jpg"; // Me @ top
        img[1].src = "images/png/portfolio-web-screen.png"; // Portfolio Site png
        img[2].src = "images/jpg/me-4.jpg"; // Me @ about
    }

    const pageBody = document.body;
    const screenOverlay = document.getElementById("screenOverlay");

    $(".hamburger").click(function () 
    {
        $(".hamburger").toggleClass("active");
        screenOverlay.classList.toggle("active");
        pageBody.classList.toggle("no-scroll");
    });
    $("#mobileNav .nav-link").click(function () 
    {
        $(".hamburger").click();
    });
});

// Project Overlay Activations/Deactivations
$(document.getElementById("projContainerOne")).click(function () 
{
    $(document.getElementById("overlayOne")).toggleClass("active");
});
$(".close-overlay-one").click(function () 
{
    $(document.getElementById("overlayOne")).toggleClass("active");
});
$(document.getElementById("projContainerTwo")).click(function () 
{
    $(document.getElementById("overlayTwo")).toggleClass("active");
});
$(".close-overlay-two").click(function () 
{
    $(document.getElementById("overlayTwo")).toggleClass("active");
});
$(document.getElementById("projContainerThree")).click(function () 
{
    $(document.getElementById("overlayThree")).toggleClass("active");
});
$(".close-overlay-three").click(function () 
{
    $(document.getElementById("overlayThree")).toggleClass("active");
});
$(document.getElementById("projContainerFive")).click(function () 
{
    $(document.getElementById("overlayFive")).toggleClass("active");
});
$(".close-overlay-five").click(function () 
{
    $(document.getElementById("overlayFive")).toggleClass("active");
});

// Initialization for the AOS CSS Animations
AOS.init
({
    duration: 800
});


// Back to Top Button JS
scrollBtn = document.getElementById("scrollToTopBtn");
window.onscroll = function() 
{
    scrollFunction()
};
function scrollFunction() 
{
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) 
    {
        scrollBtn.style.display = "block";
    } 
    else 
    {
        scrollBtn.style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() 
{
    document.body.scrollTop = 0; // Safari Compatibility
    document.documentElement.scrollTop = 0; // Chrome, Firefox, & IE Compatibility
}