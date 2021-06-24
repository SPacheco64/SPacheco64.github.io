// Sergio Pacheco - Portfolio Site JS

// Swaps between Hamburger Icon to 'X' and displays the dropdown menu
$(document).ready(function () 
{
    $(".hamburger").click(function () 
    {
        $(".hamburger").toggleClass("active");
        $(body).toggleClass("no-scroll");
    });
    $(".link").click(function () 
    {
        $(".hamburger").toggleClass("active");
        $(body).toggleClass("no-scroll");
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
$(document.getElementById("projContainerFour")).click(function () 
{
    $(document.getElementById("overlayFour")).toggleClass("active");
});
$(".close-overlay-four").click(function () 
{
    $(document.getElementById("overlayFour")).toggleClass("active");
});

// Initialization for the AOS CSS Animations
AOS.init
({
    duration: 800,
});