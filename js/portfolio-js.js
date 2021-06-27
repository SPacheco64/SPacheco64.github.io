// Sergio Pacheco - Portfolio Site JS

// Swaps between Hamburger Icon to 'X' and displays the dropdown menu
$(document).ready(function () 
{
    const pageBody = document.body;
    const screenOverlay = document.getElementById("screenOverlay");

    $(".hamburger").click(function () 
    {
        $(".hamburger").toggleClass("active");
        screenOverlay.classList.toggle("active");
        pageBody.classList.toggle("no-scroll");
    });
    $(".nav-link").click(function () 
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

// Initialization for the AOS CSS Animations
AOS.init
({
    duration: 800,
});
