<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    @yield('style')
    <title>Pet Shop</title>
</head>
<body>
    <div class="min-h-screen w-full flex justify-center items-center bg-gradient-to-tr from-pink-500 via-purple-500 to-blue-500">
        @include('base.navbar')
        
        @yield('content')
    </div>
    
    @yield('script')
</body>
</html>