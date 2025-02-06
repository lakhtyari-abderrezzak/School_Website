@extends('layouts.master')

@section('content')

<div> 
    {{-- Hero section --}}
    <x-hero title="Welcome to Our School" description="Empowering students for a brighter future.">
        <div class="flex justify-center gap-4">
            <a href="/login" class="bg-white text-gray-800 px-6 py-3 rounded-lg shadow-md hover:bg-gray-200 transition-all">Login</a>
            <a href="/register" class="bg-transparent border-2 border-white text-white px-6 py-3 rounded-lg shadow-md hover:bg-white hover:text-gray-800 transition-all">Register</a>
        </div>
    </x-hero>

    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6 text-center">
            <!-- Heading -->
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Why Choose Us?</h2>
            <p class="text-lg text-gray-600 mb-8 max-w-lg mx-auto">At Cadi Ayyad, we provide exceptional education, support, and opportunities for all students. Here's why you should choose us for your child's education.</p>
        </div>
    
        <!-- Why Choose Us Grid Section -->
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Academic Excellence -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-blue-600 mb-4">Academic Excellence</h3>
                    <p class="text-gray-700">We offer a rigorous, high-quality curriculum that prepares students for success in college and beyond. Our experienced educators ensure each student excels academically, laying the foundation for their future achievements.</p>
                </div>
    
                <!-- Experienced Faculty -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-blue-600 mb-4">Dedicated and Experienced Faculty</h3>
                    <p class="text-gray-700">Our teachers are passionate about education and dedicated to providing individualized attention to each student. With a team of highly qualified faculty members, your child will receive the support they need to thrive academically and personally.</p>
                </div>
            </div>
    
            <div class="grid md:grid-cols-2 gap-8 mt-8">
                <!-- Holistic Education -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-blue-600 mb-4">Holistic Education</h3>
                    <p class="text-gray-700">We focus on developing the whole child—academically, socially, emotionally, and creatively. Through extracurricular activities, arts, sports, and leadership opportunities, we nurture students to become well-rounded individuals.</p>
                </div>
    
                <!-- Strong Community -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-blue-600 mb-4">Strong Community & Support System</h3>
                    <p class="text-gray-700">Our school fosters a supportive, inclusive, and collaborative environment. Students are encouraged to connect with one another and build lasting relationships with faculty, staff, and parents to create a thriving school community.</p>
                </div>
            </div>
    
            <div class="grid md:grid-cols-2 gap-8 mt-8">
                <!-- Cutting-Edge Facilities -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-blue-600 mb-4">Cutting-Edge Facilities</h3>
                    <p class="text-gray-700">Our campus is equipped with modern classrooms, science labs, libraries, and sports facilities to provide students with the tools they need for success. From technology-driven learning to extracurricular activities, we have it all.</p>
                </div>
    
                <!-- College & Career Readiness -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-blue-600 mb-4">College & Career Readiness</h3>
                    <p class="text-gray-700">We ensure students are well-prepared for college and careers with academic counseling, career exploration, and specialized programs. Our graduates are equipped with the skills to succeed in higher education and the workforce.</p>
                </div>
            </div>
    
            <div class="grid md:grid-cols-2 gap-8 mt-8">
                <!-- Testimonials -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-blue-600 mb-4">What Our Parents & Students Say</h3>
                    <p class="text-gray-700">"We couldn’t have made a better choice for our child’s education. [School Name] has provided the support, resources, and encouragement for our son to thrive academically and socially." – Parent of a 12th grader</p>
                </div>
    
                <!-- Call to Action -->
                <div class="bg-white text-blue-600 p-6 rounded-lg shadow-lg flex items-center justify-center">
                    <div>
                        <h3 class="text-2xl font-semibold mb-4">Ready to Join Our School?</h3>
                        <p class="mb-4 text-black/90">Take the next step in your child's educational journey by contacting us today. We are excited to welcome you to our school community.</p>
                        <a href="{{ route('contact') }}" wire:navigate class="px-6 py-3 bg-blue-400 text-white font-semibold rounded-lg hover:bg-blue-600 transition-all">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


 <!-- Courses Section -->
<section class="container mx-auto my-8 px-4">
    <div class="container mx-auto px-6 text-center">
        <!-- Heading -->
        <h2 class="text-4xl font-bold text-gray-800 mb-4">Our Courses</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Course Card 1 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="https://images.pexels.com/photos/256342/pexels-photo-256342.jpeg" alt="Mathematics" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-xl font-bold mb-2">Mathematics</h3>
            <p class="text-gray-700">Learn the fundamentals of algebra, geometry, and calculus.</p>
            <a href="#" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Learn More</a>
        </div>

        <!-- Course Card 2 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="https://images.pexels.com/photos/3965502/pexels-photo-3965502.jpeg" alt="Science" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-xl font-bold mb-2">Science</h3>
            <p class="text-gray-700">Explore biology, chemistry, and physics through hands-on experiments.</p>
            <a href="#" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Learn More</a>
        </div>

        <!-- Course Card 3 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="https://images.pexels.com/photos/1104134/pexels-photo-1104134.jpeg" alt="Literature" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-xl font-bold mb-2">Literature</h3>
            <p class="text-gray-700">Dive into classic and contemporary literature from around the world.</p>
            <a href="#" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Learn More</a>
        </div>
    </div>
</section>


</div>
@endsection
