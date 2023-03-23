@include('layouts.includes.header-guest')
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        @include('layouts.includes.footer')
    </body>
</html>
