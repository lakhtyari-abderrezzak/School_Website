<x-app-layout>
    <div class="flex h-screen">
        <x-side></x-side>
        <div class="flex-1 p-6">

            <h2 class="text-2xl font-semibold mb-6">{{ $subject->name }}</h2>

            <!-- Table -->
            <div class="overflow-x-auto">
                <form action="{{route('subjects.update', $subject->id)}}" method="POST" class="card w-1/2 mx-auto p-8 bg-white shadow-lg rounded-lg space-y-4">
                    @csrf
                    @method('PATCH')

                    <div class="flex flex-col space-y-2">
                        <label for="name" class="font-semibold text-gray-700">Name</label>
                        <input type="text" name="name" class="form-control border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $subject->name }}">
                        @error('name')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 mt-4">
                        Update
                    </button>
                </form>
            </div>
            


        </div>
    </div>
</x-app-layout>
