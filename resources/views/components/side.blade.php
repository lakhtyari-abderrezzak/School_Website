<!-- Sidebar -->
<div class="w-64 bg-indigo-600 text-white p-4">
    <h1 class="text-3xl font-semibold mb-8">Dashboard</h1>
      <div class="inline-block w-full">
        <x-nav-link class="text-white text-xl w-full mt-4" :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
            {{ __('Dashboard') }}
        </x-nav-link>
        <x-nav-link class="text-white text-xl w-full mt-4" :href="route('students')"   :active="request()->routeIs('students')" wire:navigate>
            {{ __('Students') }}
        </x-nav-link>
        <x-nav-link class="text-white text-xl w-full mt-4"  :href="route('teachers')" :active="request()->routeIs('teachers')" wire:navigate>
            {{ __('Teachers') }}
        </x-nav-link>
        <x-nav-link class="text-white text-xl w-full mt-4" :href="route('administration')" :active="request()->routeIs('administration')" wire:navigate>
            {{ __('Administration') }}
        </x-nav-link>
      </div>

</div>
