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
})

console.log(document.body.clientWidth);

(function() {
    if(document.body.clientWidth < 950) {
        $('#header').addClass('mobile')
    }
})();
//moet automatisch updaten, is nog niet zo.