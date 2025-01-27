<x-app-layout>
    <div class="flex h-screen">
        <x-side></x-side>
        <div class="flex-1 p-6">
            <div class="flex justify-between items-center mb-8">
                <div class="text-xl font-semibold">Welcome back, {{ Auth::user()->name }}</div>

            </div>
            <h2 class="text-2xl font-semibold mb-6">Users</h2>
            <!-- Table -->
            <div class="overflow-x-auto">

                <x-success />

                <form method="GET" action="{{ route('users') }}" class="my-4 flex items-center space-x-4 w-full sm:w-1/2 lg:w-1/3 mx-auto">
                    <input class="form-control rounded-lg border border-gray-300 shadow-sm p-2 w-full sm:w-auto" 
                           type="text" name="search" placeholder="Search students..." 
                           value="{{ request()->query('search') }}" 
                           style="transition: all 0.3s ease-in-out;">
                    <button class="btn btn-primary p-2 px-4 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 transition duration-200" 
                            type="submit">
                        Search
                    </button>
                </form>
                <table class="min-w-full bg-white border border-gray-300">
                    <thead class="bg-indigo-600 text-white">
                        <tr>
                            <th class="py-3 px-6 text-left">Id</th>
                            <th class="py-3 px-6 text-left">Name</th>
                            <th class="py-3 px-6 text-left">Email</th>
                            <th class="py-3 px-6 text-left">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="border-b hover:bg-gray-100">
                                <td class="py-3 px-6"> {{ $user->id }} </td>
                                <td class="py-3 px-6">{{ $user->name }}</td>
                                <td class="py-3 px-6">{{ $user->email }}</td>
                                <td class="py-3 px-6">
                                    <form action="{{ route('users.status', $user->id) }}" method="POST"
                                        class="flex  align-baseline">
                                        @csrf
                                        @method('PATCH')
                                        <select name="status" id="status"
                                            class="form-control border-2 border-gray-300 py-2 px-10 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 mr-3">
                                            <option selected disabled>{{ $user->status }}</option>
                                            <option value="pending">Pending</option>
                                            <option value="active">Active</option>
                                        </select>
                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                                            </svg>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                        @error('status')
                            <div class="text-red-700 mt-2">{{ $message }}</div>
                        @enderror
                    </tbody>
                </table>
                {{ $users->links()}}
              </div>
        </div>
    </div>
</x-app-layout>
