jQuery.noConflict();
jQuery(document).ready(function() {
    
    jQuery("#btnScrollToTop").on("click", function(e) {
        e.preventDefault();
        scrollToTop();
    });
});


// When the user clicks on the button, scroll to the top of the document
function scrollToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


/*
jQuary(function ($) {
    var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
});

*/

//$(document).ready(function() {
//var offset = 220;
//var duration = 500;
//jQuery(window).scroll(function() {
//    if (jQuery(this).scrollTop() > offset) {
//        jQuery('#btnScrollToTop').fadeIn(duration);
//    } else {
//        jQuery('#btnScrollToTop').fadeOut(duration);
//    }
//});
//
//jQuery('#btnScrollToTop').click(function(e) {
//    event.preventDefault();
//    jQuery('html, body').animate({scrollTop: 0}, duration);
//    return false;
//})
//});