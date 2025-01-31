<x-app-layout>
    <div class="flex h-screen">

        <x-side></x-side>
        <!-- Main Content -->
        <div class="flex-1 p-6">
            <!-- Top Bar -->
            <div class="flex justify-between items-center mb-8">
                <div class="text-xl font-semibold">Welcome back, {{ Auth::user()->role }}</div>

            </div>

            <!-- Cards Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-4">Total users</h2>
                    <p class="text-xl text-indigo-600">{{ $users->count() }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    
                    @if ($users)
                           <h2 class="text-2xl font-semibold mb-4">Teachers</h2>
                            <p class="text-xl text-green-600">{{$teachers->count()}}</p>    
                    @endif
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-4">Administration</h2>
                    <p class="text-xl text-yellow-600"> {{ $administrators->count() }} </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-4">Students</h2>
                    <p class="text-xl text-yellow-600"> {{ $students->count() }} </p>
                </div>
            </div>

        </div>

    </div>
</x-app-layout>
