<x-app-layout>
    <div class="flex h-screen">
        <x-side></x-side>
        <div class="flex-1 p-6">

            <h2 class="text-2xl font-semibold mb-6">{{ $student->name }}</h2>
            <!-- Table -->
            <div class="overflow-x-auto">
                <form action="{{route('students.update', $student->id)}}" method="POST" class="card w-1/2 mx-auto p-8 bg-white shadow-lg rounded-lg space-y-4">
                    @csrf
                    @method('PATCH')
                    <div class="flex flex-col space-y-2">
                        <label for="uesr_id" class="font-semibold text-gray-700">User Name</label>
                        <select name="user_id" id="user_id" 
                        class="form-control border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('user_id') }}">
                            @foreach ($users as $user)
                                <option {{ $student->user_id === $user->id ? 'Selected' : ''}} value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col space-y-2">
                        <label for="name" class="font-semibold text-gray-700">Name</label>
                        <input type="text" name="name" class="form-control border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $student->name }}">
                        @error('name')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <div class="flex flex-col space-y-2">
                        <label for="phone" class="font-semibold text-gray-700">Phone</label>
                        <input type="text" name="phone" class="form-control border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{$student->phone}}">
                        @error('phone')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <div class="flex flex-col space-y-2">
                        <label for="class" class="font-semibold text-gray-700">Class</label>
                        <input type="text" name="class" class="form-control border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{$student->class}}">
                        @error('class')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <div class="flex flex-col space-y-2">
                        <label for="enrollment_date" class="font-semibold text-gray-700">Enrollment Date</label>
                        <input type="date" name="enrollment_date" class="form-control border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{$student->enrollment_date}}">
                        @error('enrollment_date')
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
