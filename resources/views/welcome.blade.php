<x-front-guest-layout>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900&display=swap" rel="stylesheet">

    <main style="background-image: url('{{ asset('images/bgvideo.gif') }}');background-size: cover;"
     class="font-montserrat">
    {{-- <main class="bg-white font-montserrat"> --}}
        <header class="h-24 sm:h-32 pt-6 flex items-center">
            <div class="container mx-auto px-6 sm:px-12 flex items-center justify-between">

                <div class="text-black font-black text-4xl flex items-center">
                    <div class="w-24 h-18 mr-6">
                        <img src="{{ asset('images/logo.png') }}" alt="">
                    </div>
                    <span>Farm Easy</span>
                </div>
                <div class="flex items-center">
                    <nav class="text-black text-lg hidden lg:flex items-center">

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
                    <h1 class="text-4xl lg:text-6xl leading-none mb-4 pt-20"><strong class="font-black">
                        A Farmer's Helper
                    </strong>
                        <br>
                         Web
                        </h1>
                        <br>
                    <p class="lg:text-lg mb-4 sm:mb-12">"To me, 
                        there's nothing more special than providing food for other families,
                        <br>
                         and that's what we do out here."</p>
                        <br>
                    <a href="https://abishek-portfolio.vercel.app/"
                        class="font-semibold text-lg bg-blue-500 hover:bg-blue-400 text-white py-3 px-10 rounded-full">Creators</a>
                </div>
                {{-- <div class="mb-4 sm:mb-12">
                    <img src="https://media4.giphy.com/media/eh0X7QwmxiXihecJud/giphy.gif?cid=6c09b952quzttq69muk85q0zrpmg4wd5atf34meb1aj6evfk&rid=giphy.gif&ct=s"
                        alt="">
                </div> --}}
            </div>
        </section>

        <section class="container mx-auto px-6 sm:px-12">
            <div >
                <img src="{{ asset('images/Ak.png') }}" alt="">
                {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/JzPfMbG1vrE"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe> --}}
            </div>
        </section>

    </main>







</x-front-guest-layout>
