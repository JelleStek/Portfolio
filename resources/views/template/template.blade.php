<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    <title>Portfolio - Jelle Stekelenburg</title>
</head>
<body>
<div class="loader" id="loader">
    <div class="loader__child">
        <h4>Jelle Stekelenburg<span class="punt">.</span></h4>
    </div>
</div>
<main id="main" v-cloak>

    @include('includes/nav')

    @yield('content')
</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{asset('/js/main.js')}}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-NXH5Q98JD4"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-NXH5Q98JD4');
</script>
<script src="https://unpkg.com/vue@next"></script>
<script>
    let app = Vue.createApp({
        data: function() {
            return {
                greeting: 'Hello Vue 3',
                isVisible: true
            }
        },
        mounted: () => {
            let loader = document.getElementById('loader');
            loader.classList.add('hidden');
            triggerDisplay();
        },
    })
    app.mount('#main')

    function triggerDisplay() {
        let loader = document.getElementById('loader');
        setTimeout(function(){ loader.classList.add('hide'); }, 500);
    };
</script>
</body>
</html>