@extends('layouts.master')

{{-- 
  <!-- Navbar -->
  <nav class="bg-blue-800 text-white p-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
      <a href="#" class="text-2xl font-bold">Your School Name</a>
      <div class="space-x-4">
        <a href="/" class="hover:underline">Home</a>
        <a href="/about" class="hover:underline">About</a>
        <a href="/contact" class="hover:underline">Contact</a>
      </div>
    </div>
  </nav> --}}
@section('content')
    <!-- Hero Section -->
    <x-hero title="About Us"
        description="Welcome to Cadi Ayyad, where we foster a nurturing and inclusive environment that empowers students to excel academically and personally. Our dedicated team strives to inspire a love for learning and prepare students for a bright future.">

    </x-hero>

    <!-- About Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center">
                <h2 class="text-3xl font-semibold">Our Mission</h2>
                <p class="mt-4 text-lg text-gray-700">We are committed to providing a nurturing environment where every
                    student can grow academically, socially, and emotionally.</p>
            </div>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- School History -->
                <div>
                    <h3 class="text-2xl font-semibold text-blue-800">Our History</h3>
                    <p class="mt-4 text-gray-700">Founded in 1978, Cadi Ayyad has been dedicated to shaping future
                        leaders. Our rich history is built on providing excellent education and fostering a community of
                        inclusiveness and innovation.</p>
                </div>

                <!-- Vision -->
                <div>
                    <h3 class="text-2xl font-semibold text-blue-800">Our Vision</h3>
                    <p class="mt-4 text-gray-700">Our vision is to create a school where every student feels valued,
                        supported, and challenged to reach their full potential, both in the classroom and in their
                        community.</p>
                </div>
            </div>

            <div class="mt-12 text-center">
                <h2 class="text-3xl font-semibold">Meet Our Team</h2>
                <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">      
                    <!-- Team Members  -->
                    <x-team-card src="images/9434619.jpg" name="Abelkarim ELjadid" title="Principal" />
                    <x-team-card src="images/9434619.jpg" name="Hassan Mabsot" title="Vice Principal" />
                    <x-team-card src="images/9434619.jpg" name="Ahmed Bouchikhi" title="Teacher" />
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
@endsection
