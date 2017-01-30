// theme js
jQuery(document).ready(function ($) {
    'use strict';

	/**
	*
	* Fit Vid any videos
	*
	**/

	$("#page").fitVids();

	/**
	*
	* Below = JS for keyboard-accessible menu 
	*
	* JS copied from: http://examples.simplyaccessible.com/css-menu/option-3.html (see source file navigation-option-3.js)
	*
	**/

	$(function(){
		$('.menu').setup_navigation();
	});

	$.fn.setup_navigation = function(settings) {
		settings = jQuery.extend({
			menuHoverClass: 'show-menu',
		}, settings);
		
		// Set tabIndex to -1 so that links can't receive focus until menu is open
		$(this).find('> li > a').next('ul').find('a').attr('tabIndex',-1);
		
		$(this).find('> li > a').hover(function(){
			$(this).closest('ul').find('.'+settings.menuHoverClass).removeClass(settings.menuHoverClass).find('a').attr('tabIndex',-1);
		});
		$(this).find('> li > a').focus(function(){
			$(this).closest('ul').find('.'+settings.menuHoverClass).removeClass(settings.menuHoverClass).find('a').attr('tabIndex',-1);
			$(this).next('ul')
				.addClass(settings.menuHoverClass)
				.find('a').attr('tabIndex',0);
		});
			
		// Hide menu if click or focus occurs outside of navigation
		$(this).find('a').last().keydown(function(e){ 
			if(e.keyCode == 9) {
				// If the user tabs out of the navigation hide all menus
				$('.'+settings.menuHoverClass).removeClass(settings.menuHoverClass).find('a').attr('tabIndex',-1);
			}
		});
		$(document).click(function(){ $('.'+settings.menuHoverClass).removeClass(settings.menuHoverClass).find('a').attr('tabIndex',-1); });
		
		$(this).click(function(e){
			e.stopPropagation();
		});
	}

	var $connect = $('.connect')

	$(window).on('scroll', function () {
	            var scroll = $(window).scrollTop();
	            var connectTop = $connect.offset().top;

	              if (scroll > connectTop - 60){
	                 $('.nav-container').addClass('white-background');
	                 console.log('white');
	

	            } else  {
	                $('.nav-container').removeClass('white-background');

	            }
	        });


/*******************

Snapjs

*********************/

	var snapper = new Snap({
	    element: document.getElementById('page'),
	    dragger: document.getElementsByClassName('page'),
	    disable: 'right',
	    slideIntent: 10,
	});
	var addEvent = function addEvent(element, eventName, func) {
	    if (!element) {
	        return;
	    }

	    if (element.addEventListener) {
	        return element.addEventListener(eventName, func, false);
	    } else if (element.attachEvent) {
	        return element.attachEvent("on" + eventName, func);
	    }
	};
	addEvent(document.getElementById('open-left'), 'click', function () {
	    snapper.open('left');
	});

 
}); // end doc ready