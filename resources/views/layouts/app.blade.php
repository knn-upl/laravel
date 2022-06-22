@include('partials._head')
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
    @include('partials._nav')

    <!-- Page Heading -->
    <!-- Page Content -->
    <main id="app">

        <div class="py-12">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @include('partials._message')
                @yield('content')
            </div>
        </div>
    </main>

</div>
@include('partials._foot')
@include('partials._script')
@stack('js')
@yield('scripts')
</body>
</html>
