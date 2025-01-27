<x-app-layout>
    <div class="flex h-screen">
        <x-side></x-side>
        <div class="flex-1 p-6">
            <div class="flex justify-between items-center mb-8">
                <div class="text-xl font-semibold">Welcome back, {{ Auth::user()->role }}</div>

            </div>
            <h2 class="text-2xl font-semibold mb-6">Teachers</h2>
            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300">
                    <thead class="bg-indigo-600 text-white">
                        <tr>
                            <th class="py-3 px-6 text-left">Name</th>
                            <th class="py-3 px-6 text-left">Phone</th>
                            <th class="py-3 px-6 text-left"></th>
                            <th class="py-3 px-6 text-left"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Teacher 1 -->
                        @foreach ($teachers as $teacher)
                            <tr class="border-b hover:bg-gray-100">
                                <td class="py-3 px-6">{{ $teacher->first_name . ' ' . $teacher->last_name }} </td>
                                <td class="py-3 px-6"> {{$teacher->phone}} </td>
                                <td class="py-3 px-6"></td>
                                <td class="py-3 px-6">
                                    <span class="bg-green-500 text-white py-1 px-3 rounded-full">Active</span>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
