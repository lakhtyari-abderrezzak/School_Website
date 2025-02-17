<x-app-layout>
    <div class="flex h-screen">
        <x-side></x-side>
        <div class="flex-1 p-6">

            <h2 class="text-2xl font-semibold mb-6">Create a New User</h2>
            <!-- Table -->
            <div class="overflow-x-auto">
                <form action="{{ route('users.store') }}" method="POST"
                    class="card w-1/2 mx-auto p-8 bg-white shadow-lg rounded-lg space-y-4">
                    @csrf
                    <!-- Name Field -->
                    <div class="flex flex-col space-y-2">
                        <label for="name" class="font-semibold text-gray-700">Name</label>
                        <input type="text" name="name"
                            class="form-control border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            value="{{ old('name') }}">
                        @error('name')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email Field -->
                    <div class="flex flex-col space-y-2">
                        <label for="email" class="font-semibold text-gray-700">Email</label>
                        <input type="email" name="email"
                            class="form-control border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            value="{{ old('email') }}">
                        @error('email')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="flex flex-col space-y-2">
                        <label for="password" class="font-semibold text-gray-700">Password</label>
                        <input type="password" name="password"
                            class="form-control border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('password')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col space-y-2">
                        <label for="password_confirmation" class="font-semibold text-gray-700">Confirm Password</label>
                        <input type="password" name="password_confirmation"
                            class="form-control border-2 border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2
                             focus:ring-blue-500" required minlength="8">
                    </div>
                    
                    <!-- Role Field -->
                    <div class="flex flex-col space-y-2">
                        <label for="role" class="block text-sm font-medium text-gray-700">Select Role</label>
                        <select id="role" name="role"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="administration" {{ old('role') == 'administration' ? 'selected' : '' }}>Administration</option>
                            <option value="student" {{ old('role') == 'student' ? 'selected' : '' }}>Student</option>
                            <option value="teacher" {{ old('role') == 'teacher' ? 'selected' : '' }}>Teacher</option>
                        </select>
                        @error('role')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Status Field -->
                    <div class="flex flex-col space-y-2">
                        <label for="status" class="block text-sm font-medium text-gray-700">Select Status</label>
                        <select id="status" name="status"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                        </select>
                        @error('status')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 mt-4">
                        Create
                    </button>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
