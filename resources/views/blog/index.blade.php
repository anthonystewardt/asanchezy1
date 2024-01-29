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

       @vite(['resources/css/app.css','resources/js/app.js'])
        <!-- Styles -->

    </head>
    <body class="antialiased  p-10 bg-gray-dark">
        <x-header />
        <section class="mt-20">
            <div class="border-t-2 border-opacity-50 border-b-2 border-white py-10">
                <h1 class="text-white text-7xl text-center">THE BLOG</h1>
            </div>
        </section>
        <div class="text-white mt-20">
            <h2 class="text-2xl block">Todos los Posts:</h2>
        </div>
        <section class="grid grid-cols-6 gap-5 text-white mt-10">
            @foreach ($posts as $post)
            <a href="{{ route('blog.show', $post->slug)  }}" class="block xl:col-span-2 col-span-6 md:col-span-3">
                <div class="">
                    <img src="{{ asset('/storage' .'/' . $post->image) }}" alt="">
                </div>
                <div class="my-5">
                    <span class="text-indigo-500">
                    {{ \Carbon\Carbon::parse($post->created_at)->locale('es_ES')->isoFormat('dddd, D MMM YYYY') }}
                    </span>
                    <h3 class="text-2xl font-semibold">{{ $post->title }}</h3>
                    <span class="text-white text-opacity-50">{{ $post->excerpt }}</span>
                </div>
            </a>
            @endforeach
        </section>
        <div class="">{{ $posts->links() }}</div>
    </body>
</html>
