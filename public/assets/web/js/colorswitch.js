
jQuery(document).ready(function($) {     
    punica_style_switch_INIT();
    jQuery('.choose-color a.black').addClass('active');
});

function punica_style_switch_INIT(){   
    
    // Color Change
    jQuery("a.black" ).click(function(){
        jQuery("#colors" ).attr("href", "css/skin/black.css");
        return false;
    });
		
    jQuery("a.cyan" ).click(function(){
        jQuery("#colors" ).attr("href", "css/skin/cyan.css");
        return false;
    });
		
    jQuery("a.pink" ).click(function(){
        jQuery("#colors" ).attr("href", "css/skin/pink.css");
        return false;
    });
		
    jQuery("a.green" ).click(function(){
        jQuery("#colors" ).attr("href", "css/skin/green.css");
        return false;
    });
		
    jQuery("a.red" ).click(function(){
        jQuery("#colors" ).attr("href", "css/skin/red.css");
        return false;
    });
	
	jQuery("a.oran" ).click(function(){
        jQuery("#colors" ).attr("href", "css/skin/oran.css");
        return false;
    });
	
	jQuery("a.purple" ).click(function(){
        jQuery("#colors" ).attr("href", "css/skin/purple.css");
        return false;
    });
		
    jQuery('.choose-color a').click(function(e){
        e.preventDefault();
        jQuery(this).parent().parent().find('a').removeClass('active');
        jQuery(this).addClass('active');
    });
		
		
    
jQuery(window).load(function($) {	
    // Switcher Layout
    jQuery('#theme-option').animate({
        left: '-275px'
    });
		
    jQuery('.open-close-button').click(function(e){
        e.preventDefault();
        var div = jQuery('#theme-option');
        if (div.css('left') === '-275px') {
            jQuery('#theme-option').animate({
                left: '0px'
            }); 
        } else {
            jQuery('#theme-option').animate({
                left: '-275px'
            });
        }
    });
});
		
		
    // Reset
    jQuery('a.reset').click(function(e){
        jQuery('.color.black').trigger('click');
    });				    
}