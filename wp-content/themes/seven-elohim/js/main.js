(function ($) {
    $(document).ready(function () {
        $(document).click(function () {
            $('.logo').css('z-index', '0');
        });
    });


})(jQuery);
(function ($) {

    /**
     * Copyright 2012, Digital Fusion
     * Licensed under the MIT license.
     * http://teamdf.com/jquery-plugins/license/
     *
     * @author Sam Sehnert
     * @desc A small plugin that checks whether elements are within
     *     the user visible viewport of a web browser.
     *     only accounts for vertical position, not horizontal.
     */

    $.fn.visible = function (partial) {

        var $t = $(this),
            $w = $(window),
            viewTop = $w.scrollTop(),
            viewBottom = viewTop + $w.height(),
            _top = $t.offset().top,
            _bottom = _top + $t.height(),
            compareTop = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom;

        return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

    };

})(jQuery);


(function ($) {

    // FADE IN/OUT LOGO
    $(window).on('scroll', function () {
        if (!$(window).scrollTop()) { //abuse 0 == false :)
            $('.logo__text').fadeIn();
        } else {
            $('.logo__text').fadeOut();
        }
    });

    // CSS/JS ANIMATIONS
    var win = $(window);

    var allMods = $(".se_animate");

    setTimeout(function () {
        allMods.each(function (i, el) {
            var el = $(el);
            if (el.visible(true)) {
                el.addClass("already-visible");
            }
        });
    }, 300);

    win.scroll(function (event) {

        allMods.each(function (i, el) {
            var el = $(el);
            if (el.visible(true)) {
                el.addClass("come-in");
            }
        });
    });

    $(document).ready(function () {

        // SHOW HIDDEN PAGES
        $(".se-singlepage").show("fade", 400);
        $(".projects-list").show("fade", 800);

        // LEFT MENU CLICK
        $('.sidebar--leftclick').on('click', function (e) {
            e.preventDefault();
            var href = this.href;

            $('body').animate({
                backgroundColor: 'white'
            }, 400, function () {
                $("body").hide("fade", 200, function () {
                    window.location = href;
                });
            });



        });

        // SEVEN ELOHIM CLICK
        $('.sidebar--sevenelohim').on('click', function (e) {
            e.preventDefault();
            var href = this.href;
            $(".items_wrapper").hide("fade", {
                direction: "down"
            }, 400);
            $('.ripple').animate({
                width: 3000,
                height: 3000,
                top: 0,
                left: '50%',
                'margin-left': 3000 / 2 * -1,
                'margin-top': 3000 / 2 * -1,
                'background-color': 'rgba(180,180,180,1)'
            }, 800, function () {
                window.location = href;
            });
        });

        // // LIGHTBOX
        // lightbox.option({
        //     'resizeDuration': 200,
        //     'wrapAround': true,
        //     'maxWidth': 2000,
        //     'albumLabel': ''
        // });

        // // Only do this on projects page
        // if ($('.single-project-page').length >= 1) {
        //     setTimeout(function () {
        //         $('.lb-prev').after('<a class="se-lb-close"></a>');
        //         $('.se-lb-close').on('click', function () {
        //             lightbox.end();
        //         });
        //     }, 150);

        //     var colorThief = new ColorThief();
        //     if ($('.lightbox_item').length > 0) {
        //         $('.lightbox_item').each(function () {

        //             var link = $(this).find('img').attr('src');

        //             var thisImage = new Image();
        //             thisImage.src = link;

        //             var self = this;
        //             setTimeout(function () {
        //                 var color = colorThief.getColor(thisImage);
        //                 var luma = 0.2126 * color[0] + 0.7152 * color[1] + 0.0722 * color[2];

        //                 $(self).attr('data-luma', Math.round(luma));

        //                 if (luma < 40) {
        //                     $(self).addClass('darkcolor');
        //                     $(self).attr('data-color', 'dark');
        //                 } else {
        //                     $(self).attr('data-color', 'light');
        //                 }
        //             }, 150);


        //         });
        //     }
        // }

    });



})(jQuery);


/*function getAverageColourAsRGB (img) {
    var canvas = document.createElement('canvas'),
        context = canvas.getContext && canvas.getContext('2d'),
        rgb = {r:102,g:102,b:102}, // Set a base colour as a fallback for non-compliant browsers
        pixelInterval = 5, // Rather than inspect every single pixel in the image inspect every 5th pixel
        count = 0,
        i = -4,
        data, length;

    // return the base colour for non-compliant browsers
    if (!context) { return rgb; }

    // set the height and width of the canvas element to that of the image
    var height = canvas.height = img.naturalHeight || img.offsetHeight || img.height,
        width = canvas.width = img.naturalWidth || img.offsetWidth || img.width;

    context.drawImage(img, 0, 0);

    try {
        data = context.getImageData(0, 0, width, height);
    } catch(e) {
        // catch errors - usually due to cross domain security issues
        alert(e);
        return rgb;
    }

    data = data.data;
    length = data.length;
    while ((i += pixelInterval * 4) < length) {
        count++;
        rgb.r += data[i];
        rgb.g += data[i+1];
        rgb.b += data[i+2];
    }

    // floor the average values to give correct rgb values (ie: round number values)
    rgb.r = Math.floor(rgb.r/count);
    rgb.g = Math.floor(rgb.g/count);
    rgb.b = Math.floor(rgb.b/count);

    return rgb;
} */