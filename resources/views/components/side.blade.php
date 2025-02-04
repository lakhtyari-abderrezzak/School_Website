<div id="sidebar"
    class="fixed inset-0 z-50 lg:w-64 w-0 lg:flex flex-col bg-gray-800 text-white transition-all duration-300 ease-in-out">
    <div class="flex justify-between items-center p-4 border-b border-gray-700">
        <h2 class="text-2xl font-semibold">Dashboard</h2>
        <button id="close-btn" class="lg:hidden text-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <ul class="space-y-2 p-4">
        <x-nav-link :active="request()->is('dashboard')" :href="route('dashboard')" class="block py-2 px-4  " wire:navigate>Dashboard</x-nav-link>
        <x-nav-link :active="request()->is('dashboard/users')" :href="route('users')" class="block py-2 px-4  " wire:navigate>Users</x-nav-link>
        <x-nav-link :active="request()->is('dashboard/students')" :href="route('students')" class="block py-2 px-4  " wire:navigate>Students</x-nav-link>
        <x-nav-link :active="request()->is('dashboard/teachers')" :href="route('teachers')" class="block py-2 px-4  " wire:navigate>Teachers</x-nav-link>
        <x-nav-link :active="request()->is('dashboard/administration')" :href="route('administration')" class="block py-2 px-4  "
            wire:navigate>Administration</x-nav-link>
        <x-nav-link :active="request()->is('dashboard/classes')" :href="route('classes')" class="block py-2 px-4  "
            wire:navigate>Calsses</x-nav-link>
    </ul>

</div>
