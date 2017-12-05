//LOADER/SPINNER
$(window).bind("load", function () {

    "use strict";

    $(".spn_hol").fadeOut(1000);
});


//MENU APPEAR AND HIDE
$(document).ready(function () {

    "use strict";

    $(window).scroll(function () {

        "use strict";

        if ($(window).scrollTop() > 80) {
            $(".navbar").css({
                'margin-top': '0px',
                'opacity': '1'
            })
            $(".navbar-nav>li>a").css({
                'padding-top': '15px'
            });
            $(".navbar-brand img, h3").css({
                'height': '35px'
            });
            $(".navbar-brand img, h3").css({
                'padding-top': '0px'
            });
            $(".navbar-default").css({
                'background-color': 'rgba(59, 59, 59, 0.7)'
            });
        } else {
            // $(".navbar").css({
            //     'margin-top': '-100px',
            //     'opacity': '0'
            // })
            $(".navbar-nav>li>a").css({
                'padding-top': '45px'
            });
            $(".navbar-brand img, h3").css({
                'height': '45px'
            });
            $(".navbar-brand img, h3").css({
                'padding-top': '20px'
            });
            $(".navbar-default").css({
                'background-color': 'rgba(59, 59, 59, 0)'
            });
        }
    });
});


// MENU SECTION ACTIVE
$(document).ready(function () {

    "use strict";

    $(".navbar-nav li a").click(function () {

        "use strict";

        $(".navbar-nav li a").parent().removeClass("active");
        $(this).parent().addClass("active");
    });
});


// Hilight MENU on SCROLl

$(document).ready(function () {

    "use strict";

    $(window).scroll(function () {

        "use strict";

        $(".page").each(function () {

            "use strict";

            var bb = $(this).attr("id");
            var hei = $(this).outerHeight();
            var grttop = $(this).offset().top - 70;
            if ($(window).scrollTop() > grttop - 1 && $(window).scrollTop() < grttop + hei - 1) {
                var uu = $(".navbar-nav li a[href='#" + bb + "']").parent().addClass("active");
            } else {
                var uu = $(".navbar-nav li a[href='#" + bb + "']").parent().removeClass("active");
            }
        });
    });
});


//SMOOTH MENU SCROOL


$(function () {

    "use strict";

    $('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});


// FIX HOME SCREEN HEIGHT
$(document).ready(function () {

    "use strict";

    setInterval(function () {

        "use strict";

        var widnowHeight = $(window).height();
        var containerHeight = $(".home-container").height();
        var padTop = widnowHeight - containerHeight;
        $(".home-container").css({
            'padding-top': Math.round(padTop / 2) + 'px',
            'padding-bottom': Math.round(padTop / 2) + 'px'
        });
    }, 10)
});


//PARALLAX
$(document).ready(function () {

    "use strict";

    $(window).bind('load', function () {
        "use strict";
        parallaxInit();
    });

    function parallaxInit() {
        "use strict";
        $('.home-parallax').parallax("30%", 0.1);
        $('.subscribe-parallax').parallax("30%", 0.1);
        $('.testimonial').parallax("10%", 1);
        /*add as necessary*/
    }
});


//PRETTYPHOTO

$(document).ready(function () {

    "use strict";

    $("a[rel^='prettyPhoto']").prettyPhoto({
        show_title: false,
        /* true/false */
    });
});


//WOW JS
$(document).ready(function () {

    "use strict";

    new WOW().init();
});


/// SMOOTH SCROLL

$(document).ready(function () {

    "use strict";

    var scrollAnimationTime = 1200,
        scrollAnimation = 'easeInOutExpo';
    $('a.scrollto').bind('click.smoothscroll', function (event) {
        event.preventDefault();
        var target = this.hash;
        $('html, body').stop().animate({
            'scrollTop': $(target).offset().top
        }, scrollAnimationTime, scrollAnimation, function () {
            window.location.hash = target;
        });
    });
    //COUNTER
    $('.counter_num').counterUp({
        delay: 10,
        time: 2000
    });
});

$(document).ready(function () {
    $(".buttot_pay_system").click(function () {

    });
});

function showElement(menu_id) {
    document.getElementById("menu0").style.display = 'none';
    document.getElementById("menu1").style.display = 'none';
    document.getElementById("menu2").style.display = 'none';
    document.getElementById("menu3").style.display = 'none';
    document.getElementById("menu4").style.display = 'none';
    document.getElementById("menu5").style.display = 'none';
    document.getElementById("menu6").style.display = 'none';
    document.getElementById(menu_id).style.display = 'block';
}

function send() {

    if ($('#password').val() === '') {
        var password = '';
    } else {
        password = (MD5($('#password').val()));
    }
    $.ajax({
        type: 'POST',
        url: 'login.php',
        data: {
            email: $('#email').val(),
            pass: password
        },
        success: function (data) {
            var json = JSON.parse(data);
            var lang = $('#lang_id').text();

            if(lang === 'en') {
                if (json['status'] === 0) {
                    window.location.href = 'http://mysite/lc.php?id=' + json['id'];
                } else if (json['status'] === 1) {
                    document.getElementById('error_auth').innerHTML = 'Wrong login or password.';
                } else if (json['status'] === 3) {
                    document.getElementById('error_auth').innerHTML = 'Enter you email';
                } else if (json['status'] === 2) {
                    document.getElementById('error_auth').innerHTML = 'Enter you password';
                } else {
                    document.getElementById('error_auth').innerHTML = 'Enter you email and password';
                }
            }else  {
                if (json['status'] === 0) {
                    window.location.href = 'http://mysite/lc.php?id=' + json['id'];
                } else if (json['status'] === 1) {
                    document.getElementById('error_auth').innerHTML = 'Не верный логин или пароль';
                } else if (json['status'] === 3) {
                    document.getElementById('error_auth').innerHTML = 'Введите Ваш адрес электронной почты';
                } else if (json['status'] === 2) {
                    document.getElementById('error_auth').innerHTML = 'Введите Ваш пароль';
                } else {
                    document.getElementById('error_auth').innerHTML = 'Введите Ваш адрес электронной почты и пароль';
                }
            }

        }
    })
}

$(document).ready(function () {

    "use strict";

    setTimeout("document.getElementById('bg_popup').style.display='block'", 1000);
});