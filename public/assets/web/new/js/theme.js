/**
 * Torbara Sport.AK Template for Joomla, exclusively on Envato Market: http://themeforest.net/user/torbara?ref=torbara
 * @encoding     UTF-8
 * @version      1.0
 * @copyright    Copyright (C) 2015 Torbara (http://torbara.com). All rights reserved.
 * @license      GNU General Public License version 2 or later, see http://www.gnu.org/licenses/gpl-2.0.html
 * @author       Vadim Kozhukhov (support@torbara.com)
 */
jQuery(function($) {

    var config = $('html').data('config') || {};
    
    // Fix for RTL sliders
    UIkit.on('beforeready.uk.dom', function () {  
        UIkit.$('[data-uk-slideset],[data-uk-slider]').attr('dir', 'ltr');  
    });

    
   jQuery('.our-team-wrap .team-read-more').click(function(){
       jQuery(this).parent().parent().find('.additional').slideToggle();
       return false;
   });

   jQuery('.teamdonate-form label').click(function() {
        jQuery(this).addClass('active').siblings().removeClass('active');

    });

   

});

jQuery(window).load(function(){
    
    jQuery('.preloader').fadeOut();

    colWidth = jQuery('.grid').width();

    $grid = jQuery('.grid');
    $grid.isotope({
        // options
        itemSelector: '.grid-item',
        percentPosition: true,
        layoutMode: 'masonry',
        masonry: {
            columnWidth: $grid.find('.grid-item')[1]
        }

    });


    jQuery('.filter-button-group').on('click', 'button', function() {
        $grid.isotope({
            // options
            itemSelector: '.grid-item',
            percentPosition: true,
            layoutMode: 'masonry',
            masonry: {
                columnWidth: $grid.find('.grid-item')[1]
            }

        });
        var filterValue = jQuery(this).attr('data-filter');
        jQuery(this).toggleClass('active').siblings().removeClass('active');
        $grid.isotope({
            filter: filterValue
        });
    });

    colWidth1 = jQuery('.grid1').width();
    $grid1 = jQuery('.grid1');    
        $grid1.isotope({
            // options
            itemSelector: '.player-item',
            percentPosition: true,
            layoutMode: 'masonry',
            masonry: {
                columnWidth:  $grid1.find('.player-item')[1]
              }

        });  
   
    
    jQuery('.filter-button-group').on( 'click', 'button', function() {
        $grid1.isotope({
            // options
            itemSelector: '.player-item',
            percentPosition: true,
            layoutMode: 'masonry',
            masonry: {
                columnWidth:  $grid.find('.player-item')[1]
              }

        }); 
        var filterValue = jQuery(this).attr('data-filter');
        jQuery(this).toggleClass('active').siblings().removeClass('active');
        $grid1.isotope({ filter: filterValue });
    });
    
});