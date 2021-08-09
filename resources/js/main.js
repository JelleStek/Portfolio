require('./bootstrap');

console.log('test')

if (window.location.pathname == '/') {
    $('#home').addClass('active')
} else if (window.location.pathname == '/over-mij') {
    $('#about').addClass('active')
}