<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content= "@yield('meta_description')">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <main>
        @yield('content')
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
            $('.products').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                autoplay: true,
                            autoplayTimeout: 3000,
                            loop: true,
                            margin: 10,
                            dots:true,
                            nav:false,
                            // center:true,
                responsive:{
                    0:{
                        items:1,
                        items:1,
                        center: true, // center the single item
                        onInitialized: function(event) {
                            $(event.target).find('.owl-item.active').addClass('center'); // add center class to the single item
                        }
                    },
                    600:{
                        items:2
                    },
                    900:{
                        items:3
                    },
                    
                    1280:{
                        items:4
                    }
                }
            })
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var newsLetterForm = document.getElementById('sssssss');
        var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        newsLetterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(newsLetterForm);

            var xhr = new XMLHttpRequest();
            xhr.open(newsLetterForm.method, newsLetterForm.action);
            xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
            xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 422) { 
            var errorObj = JSON.parse(xhr.responseText);
            var errors = errorObj.errors || {};
            for (var field in errors) {
                var inputField = document.querySelector('[name="' + field + '"]');
                inputField.classList.add('is-invalid');
                var errorElement = inputField.nextElementSibling;
                errorElement.innerHTML = errors[field][0];
                errorElement.style.display = 'block';
            }

            var message = errorObj.message || "Error";
            if(message.includes('The email has already been taken.')) {
                Toastify({
                    text: 'Email déjà utilisée',
                    duration: 3000, 
                    gravity: 'top', 
                    position: 'center', 
                    backgroundColor: '#ef4444', 
                    stopOnFocus: true, 
                    }).showToast();
            }
            }
        else if (xhr.status === 200) {
            // if (this.responseText == 'exists') {
                    Toastify({
                    text: 'Merci pour votre inscription',
                    duration: 3000, 
                    gravity: 'top', 
                    position: 'center', 
                    backgroundColor: '#059669', 
                    stopOnFocus: true, 
                    }).showToast();
                } else {
                    handleSuccess();
                // }
                }
            }
            };
            xhr.send(formData);
        });
    });
        </script>
</body>
</html>