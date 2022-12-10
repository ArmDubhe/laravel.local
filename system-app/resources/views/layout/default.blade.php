<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<style>
    body {
        background-color: #878787;
    }
</style>
<body>
    <header>
        @include('includes.header')
    </header>
    <section>
        @yield('content')
    </section>
    <footer>
        @include('includes.footer')
    </footer>
</body>

</html>