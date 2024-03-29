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
       <script src="https://cdn.tailwindcss.com"></script>

        <!-- Styles -->
          <style>
            body {
                background-color: #05010D;
            }
        </style>

    </head>
    <body class="antialiased  md:p-10 p-5 ">
        <x-header />
        <section class="mt-20">
            <div class="border-t-2 border-opacity-50 border-b-2 border-white lg:py-10  py-5">
                <h1 class="text-white text-7xl text-center">THE BLOG</h1>
            </div>
        </section>
        <div class="text-white mt-20">
            <h2 class="text-2xl block">Todos los Posts:</h2>
        </div>
        <section class="grid grid-cols-6 gap-5  text-white mt-10">
            @foreach ($posts as $post)
            <a href="{{ route('blog.show', $post->slug)  }}" class="block  xl:col-span-2 col-span-6 md:col-span-3">
                <div class="h-[250px]  w-full">
                    <img src="{{ $post->image_url }}" class="h-full w-full object-cover" alt="">
                </div>
                <div class="my-5">
                    <div class="flex items-center justify-between">
                        <span class="text-indigo-500">
                    {{ \Carbon\Carbon::parse($post->created_at)->locale('es_ES')->isoFormat('dddd, D MMM YYYY') }}
                    </span>
                    <span class="text-indigo-500">
                        <span class="px-3  rounded-full border-2  border-red-600 text-sm text-red-500">{{ $post->category->name }}</span>
                    </span>
                    </div>
                    <h3 class="text-2xl text-slate-100 font-semibold text-opacity-70">{{ $post->title }}</h3>
                    <span class="text-white text-opacity-50">{{ $post->excerpt }}</span>
                </div>
            </a>
            @endforeach
        </section>
        <div class="">{{ $posts->links() }}</div>
    </body>
</html>
