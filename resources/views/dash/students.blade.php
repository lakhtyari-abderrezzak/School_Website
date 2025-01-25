<x-app-layout>
    <div class="flex h-screen">
        <x-side></x-side>
        <div class="flex-1 p-6">

            <h2 class="text-2xl font-semibold mb-6">Students</h2>
            <!-- Table -->
            <div class="overflow-x-auto">
                <form method="GET" action="{{ route('students') }}" class="my-4 flex items-center space-x-4 w-full sm:w-1/2 lg:w-1/3 mx-auto">
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
            
                <table class="min-w-full bg-white border border-gray-300 mt-6">
                    <thead class="bg-indigo-600 text-white">
                        <tr>
                            <th class="py-3 px-6 text-left">Name</th>
                            <th class="py-3 px-6 text-left">Phone</th>
                            <th class="py-3 px-6 text-left">Class</th>
                            <th class="py-3 px-6 text-left">Enrollment Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr class="border-b hover:bg-gray-100">
                                <td class="py-3 px-6">{{ $student->name }}</td>
                                <td class="py-3 px-6">{{ $student->phone }}</td>
                                <td class="py-3 px-6">{{ $student->class }}</td>
                                <td class="py-3 px-6">
                                    <span class="bg-green-500 text-white py-1 px-3 rounded-full">{{ $student->enrollment_date }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            {{ $students->links() }}
            
        </div>
    </div>
</x-app-layout>
