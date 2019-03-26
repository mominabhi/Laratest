<!doctype html>
<html lang="en">
@include('partials._head')
<body>
@include('partials._nav')
<br>
<div class="container">
    @include('partials._massage')
    @yield('content')
    @include('partials._footer')
</div>
@include('partials._javascript')
@yield('scripts')
</body>
</html>
