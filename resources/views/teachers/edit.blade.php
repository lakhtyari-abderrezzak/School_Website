<x-app-layout>
    <div class="flex h-screen">
        <x-side></x-side>
        <div class="flex-1 p-6">

            <h2 class="text-2xl font-semibold mb-6">{{ $teacher->name }}</h2>
            <!-- Table -->
            <div class="overflow-x-auto">
                <form action="{{route('teachers.update', $teacher)}}" method="POST" class="card w-1/2 mx-auto p-8 bg-white shadow-lg rounded-lg space-y-4">
                    @csrf
                    @method('PATCH')
                    <div class="flex flex-col space-y-2">
                        <label for="user_id" class="font-semibold text-gray-700">User Name</label>
                        <select name="user_id" id="user_id" 
                        class="form-control border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('user_id') }}">
                            @foreach ($users as $user)
                                <option {{ $teacher->user_id === $user->id ? 'Selected' : ''}} value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col space-y-2">
                        <label for="user_id" class="font-semibold text-gray-700">Subject</label>
                        <select name="subject_id" id="subject_id" 
                        class="form-control border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @foreach ($subjects as $subject)
                                <option {{ $teacher->subject_id === $subject->id ? 'Selected' : ''}} value="{{$subject->id}}">{{$subject->name}}</option>
                            @endforeach
                        </select>
                        @error('subject_id')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col space-y-2">
                        <label for="name" class="font-semibold text-gray-700">Full Name</label>
                        <input type="text" name="full_name" class="form-control border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $teacher->full_name }}">
                        @error('name')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <div class="flex flex-col space-y-2">
                        <label for="phone" class="font-semibold text-gray-700">Phone</label>
                        <input type="text" name="phone" class="form-control border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{$teacher->phone}}">
                        @error('phone')
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
