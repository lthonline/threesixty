jQuery.noConflict();
jQuery(document).ready(function() {
    
    jQuery("#btnScrollToTop").on("click", function(e) {
        e.preventDefault();
        scrollToTop();
    });  
        
    var $mobileMenu = jQuery('#mobileMenu');
    if($mobileMenu.hasClass('show')) {
        $mobileMenu.removeClass('show')
    }
    
    jQuery('.navbar-toggler').on('click', function(e) {
        e.preventDefault();
        if(!$mobileMenu.hasClass('show')) {
            $mobileMenu.addClass('show');
        }
    });
    
    jQuery('.mobile-menu-close').on('click', function(e) {
        e.preventDefault();
        jQuery('.dropdown-menu').hide();
        if($mobileMenu.hasClass('show')) {
            $mobileMenu.removeClass('show');
        }
        
    });
    
    $mobileMenu.find('.dropdown').each(function() {
        var $this = jQuery(this);
        $this.on('click', function(e) {            
            $this.find('.dropdown-menu').toggle();                       
            $this.siblings('.dropdown').find('.dropdown-menu').hide();
        });
    });
    
    
}); // ready function end

// Tasks on window scroll
jQuery(window).scroll(function() {
    var $navbar = jQuery('.navbar');
    var $this = jQuery(this);
      
    var $scrollTopButton = jQuery('#btnScrollToTop');
        
    if($this.scrollTop() > $navbar.height()) {
        if(!$navbar.hasClass('sticky-navbar')) {
            $navbar.addClass('sticky-navbar');
        }
            
        if($scrollTopButton.hasClass('d-none')) {
            $scrollTopButton.removeClass('d-none');
        }
    }
        
    if($this.scrollTop() < $navbar.height()) {
        if($navbar.hasClass('sticky-navbar')) {
            $navbar.removeClass('sticky-navbar');
        }
            
        if(!$scrollTopButton.hasClass('d-none')) {
            $scrollTopButton.addClass('d-none');
        }
    }
                
});

// When the user clicks on the button, scroll to the top of the document
function scrollToTop() {
  var rootElement = document.documentElement;
  rootElement.scrollTo({
    top: 0,
    behavior: "smooth"
  });
}