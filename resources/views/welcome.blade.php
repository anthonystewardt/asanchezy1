<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Anthony Sanchez | Desarrollador Full Stack.</title>
        {{-- description meta --}}
        <meta name="description" content="Somos una empresa de desarrollo de software, especializada en el desarrollo de aplicaciones web y móviles.">
        {{-- keywords meta --}}
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset('apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png')}}">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
       @vite(['resources/css/app.css','resources/js/app.js'])
        <!-- Styles -->

    </head>
    <body class="antialiased  p-10 bg-gray-dark scroll-smooth relative">
        <x-header />
        <a href="https://wa.me/51918822791?text=%C2%A1Hola!" target="_blank">
            <img src="{{ asset('images/whatsapp.png')}}" class="fixed z-50 bottom-10 right-10  h-[60px] w-[60px]" alt="">
        </a>
        {{-- <x-carousel /> --}}
        <x-hero-title />
        <div class=" text-center  my-10 flex justify-center">
            <div class="w-1/2">
                <span class="text-white xl:text-2xl opacity-50 text-center">Cuéntanos tu proyecto y nos encargaremos de crearte toda una experiencia con las mejores tecnologías.</span>
            </div>
        </div>
        <x-services />
        <section class="xl:mt-36 mt-20 container mx-auto w-2/3">
            <div class="grid grid-cols-6 gap-5">
                <div class="xl:col-span-3 col-span-6">
                    <h1 class="text-3xl font-semibold text-white">¿Qué tipos de servicios damos?</h1>
                    <p class="text-white text-opacity-60 mt-10">Los servicios que brindo en gran medida por mi especialidad es el <span class="text-white">desarrollo web, aplicaciones web, chatbots (WhatsApp API), desarrollo de backend y frontend</span>. Por otra parte, también cuento con experiencia en integración con IA (Inteligencia artificial). </p>
                    <a href={{ "/blog" . "/" . "potenciamos-tu-presencia-digital-nuestro-versatil-stack-de-servicios-con-tecnologias-avanzadas" }} class="text-white mt-10  flex items-center gap-2 hover:text-blue-500 transition ease">Ver algunos proyectos
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>

                    </a>
                </div>
                <div class="xl:col-span-3 col-span-6  flex justify-center">
                    <img src="{{ asset('images/developer.png') }}" alt="">
                </div>
            </div>
        </section>

        <section class="mt-36 container mx-auto w-2/3">
            <div class="grid grid-cols-6 gap-5">
                <div class="xl:col-span-3 col-span-6">
                    <img src="{{ asset('images/languages.png') }}" alt="">
                </div>
                <div class="xl:col-span-3 col-span-6">
                    <h1 class="text-3xl font-semibold text-white">¿Qué tecnologías debo de implementar para mi proyecto?</h1>
                    <p class="text-white text-opacity-60 mt-10">El uso del stack de tecnologías va a depender del proyecto pero
                        en simple palabras puedo mencionar las el conjunto de tecnologías
                        que sé y tengo experiencia: Nextjs, Reactjs, Laravel, Nodejs, Mysql,
                        Postgresql, MondoDB, PHP, Javascript </p>
                    <a href={{ "/blog" . "/" . "la-importancia-de-elegir-el-stack-de-tecnologia-para-mi-negocio" }} class="text-white mt-10  flex items-center gap-2 hover:text-blue-500 transition ease">Leer más al respecto
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>
        <x-plans />
    </body>
</html>
