<x-app-layout>
    <div class="flex h-screen">
        <x-side></x-side>
        <div class="flex-1 p-6">

        <h2 class="text-2xl font-semibold mb-6">Students</h2>
        <!-- Table -->
        <div class="overflow-x-auto">
          <table class="min-w-full bg-white border border-gray-300">
            <thead class="bg-indigo-600 text-white">
              <tr>
                <th class="py-3 px-6 text-left">Name</th>
                <th class="py-3 px-6 text-left">Email</th>
                <th class="py-3 px-6 text-left">Subject</th>
                <th class="py-3 px-6 text-left">Status</th>
              </tr>
            </thead>
            <tbody>
              <!-- Teacher 1 -->
              <tr class="border-b hover:bg-gray-100">
                <td class="py-3 px-6">John Doe</td>
                <td class="py-3 px-6">john.doe@email.com</td>
                <td class="py-3 px-6">Math</td>
                <td class="py-3 px-6">
                  <span class="bg-green-500 text-white py-1 px-3 rounded-full">Active</span>
                </td>
              </tr>
              <!-- Teacher 2 -->
              <tr class="border-b hover:bg-gray-100">
                <td class="py-3 px-6">Jane Smith</td>
                <td class="py-3 px-6">jane.smith@email.com</td>
                <td class="py-3 px-6">Science</td>
                <td class="py-3 px-6">
                  <span class="bg-yellow-500 text-white py-1 px-3 rounded-full">On Leave</span>
                </td>
              </tr>
              <!-- Teacher 3 -->
              <tr class="border-b hover:bg-gray-100">
                <td class="py-3 px-6">Michael Brown</td>
                <td class="py-3 px-6">michael.brown@email.com</td>
                <td class="py-3 px-6">History</td>
                <td class="py-3 px-6">
                  <span class="bg-red-500 text-white py-1 px-3 rounded-full">Inactive</span>
                </td>
              </tr>
              <!-- Teacher 4 -->
              <tr class="border-b hover:bg-gray-100">
                <td class="py-3 px-6">Emily White</td>
                <td class="py-3 px-6">emily.white@email.com</td>
                <td class="py-3 px-6">English</td>
                <td class="py-3 px-6">
                  <span class="bg-green-500 text-white py-1 px-3 rounded-full">Active</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</x-app-layout>
