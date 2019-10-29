(function ($) {
    'use strict';

    var menuLink = $('.header__list_item.has_subnav a.header__list_item_link'),
        subNav = $('.sub__nav');

    menuLink.on('click', function (e) {
        e.stopPropagation();
        if( $(this).hasClass('nav_menu_open') ) {
            $(this).removeClass('nav_menu_open');
            $(this).next('.sub__nav').slideUp();
        } else {
            menuLink.removeClass('nav_menu_open');
            subNav.slideUp();
            $(this).addClass('nav_menu_open');
            $(this).next('.sub__nav').slideDown();
        }
    });

    $('body').on('click', function () {
        menuLink.removeClass('nav_menu_open');
        subNav.slideUp();
    });

    $('.menu_icon').on('click', function (e) {
        e.stopPropagation();
        $('.header__list').toggleClass('header__list_open');
        $(this).toggleClass('menu_open');
    });

}.call(window, jQuery));