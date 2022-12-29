<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.meta')
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>

<body class="bg-fixed bg-no-repeat bg-cover font-ubuntu text-white semok">
    @include('includes.header')
    @yield('content')
    @include('includes.footer')
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>

</html>