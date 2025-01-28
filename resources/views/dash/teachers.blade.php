<x-app-layout>
    <div class="flex h-screen">
        <x-side></x-side>
        <div class="flex-1 p-6">
          <x-success />
            <h2 class="text-2xl font-semibold mb-6">Teachers</h2>
            <!-- Table -->
            <div class="overflow-x-auto">
                <a href="{{route('teachers.create')}}" class="text-white bg-indigo-600 hover:bg-indigo-800 rounded-lg p-2 ">Add a New Teacher</a>
                <form method="GET" action="{{ route('teachers') }}" class="my-4 flex items-center space-x-4 w-full sm:w-1/2 lg:w-1/3 mx-auto">
                    <!-- Search input with design improvements -->
                    <input class="form-control rounded-lg border border-gray-300 shadow-sm p-2 w-full sm:w-auto" 
                           type="text" name="search" placeholder="Search students..." 
                           value="{{ request()->query('search') }}" 
                           style="transition: all 0.3s ease-in-out;">
            
                    <!-- Search button with hover and transition effect -->
                    <button class="btn btn-primary p-2 px-4 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 transition duration-200" 
                            type="submit">
                        Search
                    </button>
                </form>
            
                <table class="min-w-full bg-white border border-gray-300">
                    <thead class="bg-indigo-600 text-white">
                        <tr>
                            <th class="py-3 px-6 text-left">Name</th>
                            <th class="py-3 px-6 text-left">Phone</th>
                            <th class="py-3 px-6 text-left">Subject</th>
                            <th class="py-3 px-6 text-left"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Teacher 1 -->
                        @foreach ($teachers as $teacher)
                            <tr class="border-b hover:bg-gray-100">
                                <td class="py-3 px-6">{{ $teacher->full_name }} </td>
                                <td class="py-3 px-6"> {{$teacher->phone}} </td>
                                <td class="py-3 px-6"> {{ $teacher->subject->name }}</td>
                                <td class="py-3 px-6">
                                     <!-- Edit Link -->
                                     <a href="{{ route('teachers.edit', $teacher) }}" 
                                        class="text-blue-500 hover:text-blue-700 font-semibold transition-colors duration-200">
                                         Edit
                                     </a>
                                 
                                     <!-- Delete Form -->
                                     <form action="{{ route('teachers.destroy', $teacher) }}" method="POST" class="inline">
                                         @csrf 
                                         @method('DELETE')
                                         <button type="submit" 
                                                 class="text-red-500 hover:text-red-700 font-semibold transition-colors duration-200">
                                             Delete
                                         </button>
                                     </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
