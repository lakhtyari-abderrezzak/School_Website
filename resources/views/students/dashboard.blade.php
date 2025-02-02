<x-app-layout>

    <div class="bg-gray-100">

        <!-- Sidebar (optional, you can remove if you don’t want the sidebar) -->
        <div id="sidebar"
            class="fixed inset-0 z-50 lg:w-64 w-0 lg:flex flex-col bg-gray-800 text-white transition-all duration-300 ease-in-out">
            <div class="flex justify-between items-center p-4 border-b border-gray-700">
                <h2 class="text-2xl font-semibold">Student Portal</h2>
                <button id="close-btn" class="lg:hidden text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <ul class="space-y-2 p-4">
                <li><a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Dashboard</a></li>
                <li><a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Courses</a></li>
                <li><a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Grades</a></li>
                <li><a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Assignments</a></li>
                <li><a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Profile</a></li>
                <li><a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Logout</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div id="main-content" class="lg:ml-64 p-6 min-h-screen">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-semibold text-gray-800">Welcome, John Doe</h1>
                <button id="menu-btn" class="lg:hidden text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Profile Section -->
            <section class="bg-white shadow-lg rounded-lg p-6 mb-6">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Student Profile</h2>
                <div class="flex items-center gap-6">
                    <img src="https://via.placeholder.com/100" alt="Profile Picture"
                        class="rounded-full border border-gray-300 p-2">
                    <div>
                        <p class="text-gray-600"><strong>Name:</strong> John Doe</p>
                        <p class="text-gray-600"><strong>Student ID:</strong> 123456</p>
                        <p class="text-gray-600"><strong>Email:</strong> john.doe@example.com</p>
                    </div>
                </div>
            </section>

            <!-- Courses Section -->
            <section class="bg-white shadow-lg rounded-lg p-6 mb-6">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Current Courses</h2>
                <div class="space-y-4">
                    <div class="flex justify-between items-center p-4 bg-gray-50 rounded-lg">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Math 101</h3>
                            <p class="text-sm text-gray-500">Instructor: Mr. Smith</p>
                        </div>
                        <span class="text-sm text-gray-500">In Progress</span>
                    </div>
                    <div class="flex justify-between items-center p-4 bg-gray-50 rounded-lg">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">English Literature</h3>
                            <p class="text-sm text-gray-500">Instructor: Ms. Johnson</p>
                        </div>
                        <span class="text-sm text-gray-500">In Progress</span>
                    </div>
                    <div class="flex justify-between items-center p-4 bg-gray-50 rounded-lg">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">History 201</h3>
                            <p class="text-sm text-gray-500">Instructor: Mr. Anderson</p>
                        </div>
                        <span class="text-sm text-gray-500">Completed</span>
                    </div>
                </div>
            </section>

            <!-- Grades Section -->
            <section class="bg-white shadow-lg rounded-lg p-6 mb-6">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Grades</h2>
                <div class="space-y-4">
                    <div class="flex justify-between p-4 bg-gray-50 rounded-lg">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Math 101</h3>
                            <p class="text-sm text-gray-500">Grade: A</p>
                        </div>
                    </div>
                    <div class="flex justify-between p-4 bg-gray-50 rounded-lg">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">English Literature</h3>
                            <p class="text-sm text-gray-500">Grade: B+</p>
                        </div>
                    </div>
                    <div class="flex justify-between p-4 bg-gray-50 rounded-lg">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">History 201</h3>
                            <p class="text-sm text-gray-500">Grade: A-</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Announcements Section -->
            <section class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Recent Announcements</h2>
                <ul class="space-y-4">
                    <li class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-800">Spring Break Information</h3>
                        <p class="text-sm text-gray-500">Don't forget, Spring Break starts next week!</p>
                    </li>
                    <li class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-800">Upcoming Exam Dates</h3>
                        <p class="text-sm text-gray-500">Math Exam: March 15th, English Exam: March 18th</p>
                    </li>
                    <li class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-800">New Student Portal Feature</h3>
                        <p class="text-sm text-gray-500">A new feature is now available to track your assignments and
                            grades more easily!</p>
                    </li>
                </ul>
            </section>
        </div>
    </div>

    <!-- JavaScript for Sidebar toggle -->
    <script>
        const menuBtn = document.getElementById('menu-btn');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');
        const closeBtn = document.getElementById('close-btn');

        menuBtn.addEventListener('click', () => {
            sidebar.classList.toggle('w-64');
            sidebar.classList.toggle('w-0');
            mainContent.classList.toggle('ml-64');
        });

        closeBtn.addEventListener('click', () => {
            sidebar.classList.toggle('w-64');
            sidebar.classList.toggle('w-0');
            mainContent.classList.toggle('ml-64');
        });
    </script>



</x-app-layout>
