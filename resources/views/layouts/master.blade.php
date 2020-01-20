<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>

    {{-- @include('includes.nav') --}}

    {{-- Content --}}
    <div id="main">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer>
        @include('includes.footer')
    </footer>

     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="/js/jquery.vide.min.js"></script>



</body>
</html>
