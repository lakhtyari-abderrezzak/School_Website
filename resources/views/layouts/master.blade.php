<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to School</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

            <div class="text-2xl font-bold text-blue-600">
                <a href="/">
                    <x-application-logo />
                </a>
            </div>

            <nav class="hidden md:flex space-x-6 text-gray-800">
                <x-nav-link  :active="request()->is('/')" :href="route('home')" class="hover:text-white text-black transition-colors">Home</x-nav-link>
                <x-nav-link  :active="request()->is('about')" :href="route('about')" class="hover:text-white text-black transition-colors">About</x-nav-link>
                <x-nav-link  :active="request()->is('services')" :href="route('services')" class="hover:text-white text-black transition-colors">Services</x-nav-link>
                <x-nav-link  :active="request()->is('contact')" :href="route('contact')" class="hover:text-white text-black transition-colors">Contact</x-nav-link>
            </nav>

            <button class="md:hidden text-gray-800" id="menu-button">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </header>
    <div id="mobile-menu" class="md:hidden bg-gradient-to-r  from-blue-500 via-teal-400 to-green-400   rounded-lg hidden">
        <nav class="flex flex-col items-center space-y-4 py-6 px-4">
            <x-nav-link wire:navigate :active="request()->is('/')" :href="route('home')"  class="text-black text-xl font-semibold hover:text-blue-200 transition-all duration-300 ease-in-out transform hover:scale-105">Home</x-nav-link>
            <x-nav-link wire:navigate :active="request()->is('about')" :href="route('about')" class="text-black text-xl font-semibold hover:text-blue-200 transition-all duration-300 ease-in-out transform hover:scale-105">About</x-nav-link>
            <x-nav-link wire:navigate :active="request()->is('services')" :href="route('services')" class="text-black text-xl font-semibold hover:text-blue-200 transition-all duration-300 ease-in-out transform hover:scale-105">Services</x-nav-link>
            <x-nav-link wire:navigate :active="request()->is('contact')" :href="route('contact')" class="text-black text-xl font-semibold hover:text-blue-200 transition-all duration-300 ease-in-out transform hover:scale-105">Contact</x-nav-link>
        </nav>
    </div>
    
    @yield('content')

    {{-- Footer --}}
    <x-footer />
    <script>
        const menuButton = document.getElementById('menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>
</html>
