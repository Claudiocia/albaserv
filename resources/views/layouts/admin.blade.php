@include('layouts.includes.header')
<body class="font-sans antialiased">
<x-banner />

<div class="min-h-screen bg-gray-100">
    @livewire('nav-admin-menu')

    <!-- Page Heading -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            @yield('header')
        </div>
    </header>
    <div class="col-6">
        @if (Session::has('msg'))
            <div class="my-alert">
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {!! Session::get('msg') !!}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @elseif(Session::has('error'))
            <div>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {!! Session::get('error') !!}
                    <button type="button" class="btn-close btn-assinar" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
    </div>

    <!-- Page Content -->
    <main>
        @yield('conteudo')
    </main>
</div>

@stack('modals')
@include('layouts.includes.footer')
@livewireScripts
</body>
</html>