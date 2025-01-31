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

                <form method="GET" action="{{ route('users') }}"
                    class="my-4 flex items-center space-x-4 w-full sm:w-1/2 lg:w-1/3 mx-auto">
                    <input class="form-control rounded-lg border border-gray-300 shadow-sm p-2 w-full sm:w-auto"
                        type="text" name="search" placeholder="Search students..."
                        value="{{ request()->query('search') }}" style="transition: all 0.3s ease-in-out;">

                    <select name="sort_by_role"
                        class="form-control border-2 border-gray-300 py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 w-30">
                        <option value="">Sort by Role</option>
                        <option value="teacher" {{ request('sort_by_role') === 'teacher' ? 'selected' : '' }}>Teacher
                        </option>
                        <option value="student" {{ request('sort_by_role') === 'student' ? 'selected' : '' }}>Student
                        </option>
                        <option value="administration" {{ request('sort_by_role') === 'administration' ? 'selected' : '' }}>Administration
                        </option>
                    </select>

                    <button
                        class="btn btn-primary p-2 px-4 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 transition duration-200"
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
                            <th class="py-3 px-6 text-left">Role</th>
                            <th class="py-3 px-6 text-left">Status</th>
                            <th class="py-3 px-6 text-left"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="border-b hover:bg-gray-100">
                                <td class="py-3 px-6"> {{ $user->id }} </td>
                                <td class="py-3 px-6">{{ $user->name }}</td>
                                <td class="py-3 px-6">{{ $user->email }}</td>
                                <td class="py-3 px-6">{{ $user->role }}</td>
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
                                <td>
                                     <!-- Edit Link -->
                                     <a href="{{ route('users.edit', $user) }}"
                                     class="text-blue-500 hover:text-blue-700 font-semibold transition-colors duration-200">
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="size-6">
                                         <path stroke-linecap="round" stroke-linejoin="round"
                                             d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                     </svg>

                                 </a>
                                 @if (Auth::user()->is_principal)
                                     <!-- Delete Form -->
                                     <form action="{{ route('users.destroy', $user) }}" method="POST"
                                         class="inline">
                                         @csrf
                                         @method('DELETE')
                                         <button type="submit"
                                             class="text-red-500 hover:text-red-700 font-semibold transition-colors duration-200">
                                             <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                 viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                 class="size-6">
                                                 <path stroke-linecap="round" stroke-linejoin="round"
                                                     d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                             </svg>

                                         </button>
                                     </form>
                                 @endif
                                </td>
                            </tr>
                        @endforeach
                        @error('status')
                            <div class="text-red-700 mt-2">{{ $message }}</div>
                        @enderror
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
