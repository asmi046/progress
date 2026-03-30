<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @header_seo

    <link rel="icon" type="image/png" href="{{ asset('/img/favicons/icon256.png') }}" sizes="256x256">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicons/icon128.png') }}" sizes="128x128">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicons/icon64.png') }}" sizes="64x64">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicons/icon32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicons/icon16.png') }}" sizes="16x16">
    <link rel="icon" type="image/svg" href="{{ asset('/img/favicons/fav.svg') }}" sizes="any">

    <meta name="_token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js', 'public/scss/main.scss'])

    <script>
        window.Laravel = {
            assetUrl: '{{ asset('') }}',
            storageUrl: '{{ Storage::url('') }}'
        };
    </script>
</head>

<body>
    <main id="main">
        @yield('main')
    </main>


    <footer class="site-footer">
        <div class="container">
            <div class="site-footer__inner">
                <div class="site-footer__logo-block">
                    <a href="{{ url('/') }}" aria-label="На главную">
                        <img src="{{ asset('img/logo.png') }}" alt="ЗАО Прогресс" class="site-footer__logo">
                    </a>
                </div>

                <div class="site-footer__menu">
                    <x-menues.puncts name="Меню в подвале"></x-menues.puncts>
                </div>

                <div class="site-footer__contacts">
                    <h3 class="site-footer__contacts-title">Контакты</h3>
                    <a class="site-footer__phone" href="tel:+74712343090">+7 (4712) 34-30-90</a>
                    <a class="site-footer__email" href="mailto:info@progress-apk.ru">info@progress-apk.ru</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
