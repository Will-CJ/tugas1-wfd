<nav class="w-full px-6 py-4 flex justify-between items-center shadow-md fixed top-0 left-0 z-50 backdrop-blur-md bg-white/10">
    <div class="flex items-center">
        <h1 class="text-2xl font-bold bg-white bg-clip-text text-transparent">PetNom</h1>
    </div>
    <ul class="hidden md:flex space-x-8 text-l">
        <li><a href="{{route('homepage')}}" class="text-white hover:text-pink-600 font-bold transition">Home</a></li>
        <li><a href="{{route('catalog')}}" class="text-white hover:text-pink-600 font-bold transition">Catalog</a></li>
        <li><a href="{{route('about')}}" class="text-white hover:text-pink-600 font-bold transition">About Us</a></li>
    </ul>
    
    <div class="md:hidden cursor-pointer p-2" id="hamburger">
        <div class="w-6 h-1 bg-gray-700 my-1 transition-all"></div>
        <div class="w-6 h-1 bg-gray-700 my-1 transition-all"></div>
        <div class="w-6 h-1 bg-gray-700 my-1 transition-all"></div>
    </div>
</nav>

<div id="menubar" class="fixed top-0 left-[-100%] w-3/4 h-screen bg-white flex flex-col items-center justify-center space-y-6 shadow-lg transition-all duration-300 md:hidden z-50 border-r border-gray-200">
    <a href="{{route('homepage')}}" class="text-gray-700 text-lg hover:text-indigo-600 transition">Home</a>
    <a href="{{route('catalog')}}" class="text-gray-700 text-lg hover:text-indigo-600 transition">Catalog</a>
    <a href="{{route('about')}}" class="text-gray-700 text-lg hover:text-indigo-600 transition">About Us</a>
</div>

<script>
    const hamburger = document.getElementById('hamburger');
    const menubar = document.getElementById('menubar');

    hamburger.addEventListener('click', () => {
        menubar.classList.toggle("left-0");
        menubar.classList.toggle("left-[-100%]");
    });
</script>