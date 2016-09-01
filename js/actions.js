// SudoSlider
$(document).ready(function () {
    var sudoSlider = $("#slider").sudoSlider({
        effect: "fade",
        auto: false,
        prevNext: false,
        customLink: '.customLink',
        useCSS: false,
        controlsFadeSpeed: '0',
    });
});

Barba.Pjax.start();