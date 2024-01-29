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
        <script src="https://cdn.tailwindcss.com"></script>


       @vite(['resources/css/app.css','resources/js/app.js'])
        <!-- Styles -->

    </head>
    <body class="antialiased  p-10 bg-gray-dark">
        <x-header />
        <div class="text-white container mx-auto xl:w-4/5 mb-10 mt-20 text-opacity-50 hover:text-opacity-100 transition ease">
            <a href="{{ route('blog.index') }}" class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
                Regresar</a>
        </div>
        <section class=" container mx-auto mt-10  xl:w-4/5">
            <h1 class="text-white xl:text-7xl text-4xl text-center">{{ $post->title }}</h1>

            <div class="grid grid-cols-12">
                <div class="xl:col-span-4 col-span-12">
                    <div class="flex  justify-center mt-5">
                        <img src="{{ asset('/storage' .'/' . $post->image) }}"  class="w-full object-contain"  alt="">
                    </div>
                </div>
                <div class="xl:col-span-8 col-span-12   py-10 px-5 ">
                    <div class="text-white flex   items-center justify-between container mx-auto ">
                        <span class="text-indigo-500">
                            {{ \Carbon\Carbon::parse($post->created_at)->locale('es_ES')->isoFormat('dddd, D MMM YYYY') }}
                        </span>
                        <span class="px-3  rounded-full border-2 border-red-600 text-sm text-red-500">{{ $post->category->name }}</span>
                        {{-- @dd($post) --}}
                    </div>
                    <div class="text-white  container mx-auto ">
                        <p>{!! $post->body !!}</p>
                    </div>
                </div>
                <div class="col-span-12 mt-10 text-white text-2xl font-semibold">
                    <h2>También te puede interesar los siguientes posts: </h2>
                </div>
                {{-- apply foreach to $randomPosts in 3 columns --}}
                @foreach ($randomPosts as $item)
                    <a href="{{ route('blog.show', $item->slug) }}" class="my-5 flex items-center xl:gap-4 gap-2 xl:col-span-4 col-span-12 mr-5 text-white border-2 border-opacity-45 rounded-lg p-4">
                        <div class="w-[100px] h-[70px]">
                            <img src={{ "/storage"  . "/" . $item->image }} class="h-full object-contain" alt="">
                        </div>
                        <div class="flex flex-col ">
                            <h1>Título:</h1>
                            <h1 class="text-gray-400">{{ $item->title }}</h1>
                            {{-- <p class="text-opacity-50">{{ $item->excerpt }}</p> --}}
                        </div>
                    </a>
                @endforeach
            </div>

        </section>

    </body>
</html>
