<header class="">
            <div class="">
                <div class=" flex items-center justify-between">
                    <div class="">
                        <a href="{{ route('home') }}" class="text-blue-500 text-3xl font-semibold">
                            <img src="{{ asset('/images/logoasanchezy.png')}}" class="w-[200px] object-contain" alt="">
                        </a>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="flex items-center gap-3 font-semibold text-white">
                            {{-- <a class="hover:text-blue-700 transition ease hover:underline-offset-2"  href="">Servicios</a> --}}
                            <a class="hover:text-blue-700 transition ease hover:underline-offset-2" href="{{ route('blog.index') }}">Blog</a>
                            {{-- <a class="hover:text-blue-700 transition ease hover:underline-offset-2" href="">Contacto</a> --}}
                        </div>
                        <div class="">
                        {{-- <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button"> --}}
                        {{-- <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                        <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                        </svg> --}}
                        {{-- <span>Es</span> --}}
                        {{-- </button> --}}
                            {{-- <div id="dropdownDots" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600 right-5">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Español</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Inglés</a>
                                </li>
                            </div> --}}
                        <nav class="px-4 py-2 rounded-full bg-white">
                            <ul class="flex items-center">
                                <li>
                                    <a href="https://www.instagram.com/anthonysanchez2748/" target="_blank">
                                        <img src="{{asset('images/ig.png')}}" class="w-[30px] h-[30px] object-contain" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/profile.php?id=100005621298855&locale=es_LA" target="_blank">
                                        <img src="{{asset('images/facebook2.png')}}" class="w-[30px] h-[30px] object-contain" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/anthony-stewardt-sanchez-yupanqui-62751b1b5/" target="_blank">
                                        <img src="{{asset('images/linkedin2.png')}}" class="w-[30px] h-[30px] object-contain" alt="">
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    </div>
                </div>
            </div>
        </header>
