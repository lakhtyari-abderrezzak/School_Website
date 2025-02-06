@props(['title', 'description'])
<section class="relative bg-gradient-to-r from-blue-500 via-teal-400 to-green-400 text-white h-screen flex items-center justify-center">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="text-center z-10">
        <h1 class="text-5xl font-extrabold leading-tight mb-4">{{ $title }}</h1>
        <p class="text-lg mb-8 max-w-2xl mx-auto">{{$description}}</p>
        {{ $slot }}
    </div>
    
</section>