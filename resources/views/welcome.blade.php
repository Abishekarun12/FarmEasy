<x-front-guest-layout>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900&display=swap" rel="stylesheet">

    <main style="background-image: url('{{ asset('images/bgvideo.gif') }}');background-size: cover;"
     class="font-montserrat">
    {{-- <main class="bg-white font-montserrat"> --}}
        <header class="h-24 sm:h-32 pt-6 flex items-center">
            <div class="container mx-auto px-6 sm:px-12 flex items-center justify-between">

                <div class="text-pink font-pink text-4xl flex items-center">
                    <div class="w-24 h-18 mr-6">
                        <img src="{{ asset('images/logo.png') }}" alt="">
                    </div>
                    <span><strong>Farm Easy </strong>
                    </span>
                        <br>
                </div>
                <div class="flex items-center">
                    <nav class="text-pink text-lg hidden lg:flex items-center">

                        @if (Route::has('admin.login'))
                            <a href="{{ route('admin.login') }}" class="py-2 px-6 flex hover:text-blue-500">Admin</a>
                        @endif

                        @if (Route::has('login'))
                            @auth('front')
                                <a href="{{ url('/dashboard') }}" class="py-2 px-6 flex hover:text-blue-500">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="py-2 px-6 flex hover:text-blue-500">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="ml-4 py-2 px-6 flex hover:text-blue-500">Register</a>
                                @endif
                            @endauth
                        @endif
                    </nav>
                    <button class="lg:hidden flex flex-col">
                        <span class="w-6 h-px bg-gray-900 mb-1"></span>
                        <span class="w-6 h-px bg-gray-900 mb-1"></span>
                        <span class="w-6 h-px bg-gray-900 mb-1"></span>
                    </button>
                </div>
            </div>
        </header>

        <section>
            <div class="container mx-auto px-6 sm:px-12 flex flex-col-reverse sm:flex-row items-center gap-10 ">
                <div class=" flex flex-col items-start mt-8 sm:mt-0 ">
                    <br>
                    <h1 class="text-4xl lg:text-6xl leading-none mb-4"><strong class="font-black">
                       A Farmer Helping
                       <br>
                       Webpage
                    </strong>
                        <br>
                         Ak
                        </h1>
                        <br>
                    <p class="lg:text-lg mb-4 sm:mb-12">
                        
                        <br>
                         </p>
                        <br>
                    <a href="https://abishek-portfolio.vercel.app/"
                        class="font-semibold text-lg bg-green-500 hover:bg-blue-400 text-white py-3 px-10 rounded-full">Developed By</a>
                </div>
            </div>
        </section>
        <br>

        <section class="container mx-auto py-2 px-6 sm:px-12">
            <div >
                <figure class='bcake'>
                    <div class='bcake__hero'>
                        <img src="{{ asset('images/Ak.png') }}" alt="">
                        {{-- <video width="640" height="360" controls>
                            <source src="{{ asset(Storage::url($file)) }}" type="audio/mpeg">
                                        Your browser does not support the audio tag.
                            </video> --}}
                      {{-- <img src="https://images.unsplash.com/photo-1552689486-f6773047d19f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=3302&q=80" alt="birthday-cake" class="bcake__img"> --}}
                    </div>
                    <div class="bcake__content">
                      <div class="bcake__title">
                        <h1 class="bcake__heading">
                          <strong>Abishek Arunachalam</strong>
                        </h1>
                        <div class="bcake__tag bcake__tag--1">#laravel</div>
                        <div class="bcake__tag bcake__tag--2">#Fullstack</div>
                      </div>
                       <p class="bcake__description" style="font-family:Georgia, 'Times New Roman', Times, serif">
                        Dedicated and Efficient Full Stack Developer Specialized in Backend
                        Programming using Laravel (Server-side) Framework. Technically
                        proficient and analytical problem solver with calm and focused
                        demeanour.
                        
                    </p>
                      <div class="bcake__details">
                        <p class="bcake__detail">
                          <span class="emoji">🎉</span>
                          450 Kcal
                        </p>
                        <p class="bcake__detail">
                          <span class="emoji">⏱</span>
                          30 min
                        </p>
                        <p class="bcake__detail">
                          <span class="emoji">🌟</span>
                          highly rated
                        </p>
                      </div>
                    </div>
                    <div class="bcake__price">
                      410319104001
                    </div>
                  </figure>
                 
                {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/JzPfMbG1vrE"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe> --}}
            </div>
        </section>


    </main>







</x-front-guest-layout>
