require('./bootstrap');



window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        $('header').addClass('scroll');
    } else {
        $('header').removeClass('scroll');
    }
}


if (window.location.pathname == '/') {
    $('#home').addClass('active')
} else if (window.location.pathname == '/over-mij') {
    $('#about').addClass('active')
}


const goToTop = () => window.scrollTo(0,0);

let gpUp = document.getElementById('goUp');
gpUp.addEventListener('click', () => {
    goToTop();
});


//Check wat de width van de website is en geef eventuele class voor mobile menu
(function() {
    if(document.body.clientWidth < 950) {
        $('#header').addClass('mobile')
    }
})();
// resize website? check voor hamburger menu
$(window).resize( () => {
    if(document.body.clientWidth <= 950) {
        $('#header').addClass('mobile')
    } else if(document.body.clientWidth > 950) {
        $('#header').removeClass('mobile')
    }
});

$('#hamburger-toggle').on('click', () => {
    $('#hamburger-toggle').toggleClass('open')
    $('aside#menu').toggleClass('toggle');
    $('#hamburger-toggle span').toggleClass('toggle');
})

switch (window.location.pathname) {
    case "/": $('body').addClass('home'); break;
}


          