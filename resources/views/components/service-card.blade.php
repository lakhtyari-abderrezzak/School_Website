@props(['title', 'description'])

<div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
    <div class="text-blue-600 text-4xl mb-4">
        <i class="fas fa-globe"></i>
    </div>
    <h3 class="text-xl font-semibold">{{ $title }}</h3>
    <p class="mt-4 text-gray-600"> {{ $description }} </p>
</div>