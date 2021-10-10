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


function triggerDisplay() {
    $('#loader').addClass('test')
}

const goToTop = () => window.scrollTo(0,0);

//demo - moet nog een to top element maken in de website

// let main = document.getElementById('main');
// main.addEventListener('click', () => {
//     goToTop();
//     console.log('test')
// })