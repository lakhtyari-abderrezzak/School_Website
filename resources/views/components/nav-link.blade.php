@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'bg-gray-700 text-white hover:bg-gray-600 transition duration-150 ease-in-out px-4 py-2 rounded-md'
                : ' text-black-200 hover:bg-gray-700 transition duration-150 ease-in-out px-4 py-2 rounded-md';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>


