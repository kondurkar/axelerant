(function ($) {
    'use strict';

    $('.contact_form').on('submit', function (e) {
        var $form = $(this),
            data = {};

        $form.find('input, select, textarea').each(function () {
            data[this.name] = this.value
        });

        e.preventDefault();

        $form.find('.contact_cta, input, select, textarea').prop('disabled', true);

        $.ajax({
            type: 'POST',
            url: window.location.href,
            data: data,
            success: function (resp) {
                $form.find('.contact_thank_sec').removeAttr('hidden');
            },
            error: function () {
                $form.find('.contact_cta, input, select, textarea').prop('disabled', false);
            }
        });
    });


    if (window.innerWidth > 1024) {
        $('#manufactoring_page').fullpage({
            navigation: false,
            slidesNavigation: false,
            continuousVertical: false,
            loopHorizontal: true
        });
    }

}.call(window, window.jQuery));