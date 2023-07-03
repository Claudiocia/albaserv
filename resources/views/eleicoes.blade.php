@include('layouts.includes.header')
<body>
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="container-fluid fixed-top p-4 bg-blue">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><strong class="text-white">Painel de controle</strong></a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><strong class="text-white">Entrar</strong></a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><strong class="text-white">Cadastre-se</strong></a>
                    @endif
                @endauth
            </div>
        @endif
        <div class="d-flex justify-content-start font-branc">
            <a href="{{route('/')}}" ><img src="{{asset('images/logo.png')}}" alt="" class="img-fluid" width="136px"></a>
        </div>
    </div>
    <div class="max-w-7xl mx-auto p-6 lg:p-8 bg-white">

        <div class="mt-16">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <i class="fa-solid fa-people-line" style="font-size: x-large; color: red;"></i>
                            </div>

                            <a href="{{route('depfed')}}"><h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-black">Deputado Federal</h2></a>

                            <a href="{{route('depest')}}"><h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-black">Deputado Estadual</h2></a>

                        </div>
                    </div>


                <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                            <i class="fa-solid fa-landmark-dome" style="font-size: x-large; color: red;"></i>
                        </div>

                        <a href="{{route('senado')}}"><h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-black">Senador</h2></a>

                    </div>

                </div>

                <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                            <i class="fa-solid fa-building-columns" style="font-size: x-large; color: red;"></i>
                        </div>

                        <a href="{{route('governo')}}"><h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-black">Governador  1º Turno</h2></a>
                        <a href="{{route('governo-2t')}}"><h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-black">Governador  2º Turno</h2></a>

                    </div>

                </div>

                <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                            <i class="fa-solid fa-flag" style="font-size: x-large; color: red;"></i>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-black">Presidente</h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Laravel's robust library of first-party tools and libraries, such as Forge, Vapor, Nova, and Envoyer help you take your projects to the next level. Pair them with powerful open source libraries like Cashier, Dusk, Echo, Horizon, Sanctum, Telescope, and more.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.includes.footer')
</body>
</html>
