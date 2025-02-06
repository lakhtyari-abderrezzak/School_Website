@extends('layouts.master')
@section('content')
    <!-- Hero Section -->
    <x-hero title="Our Services" description="Providing the best education and student services"></x-hero>

    <!-- Services Section -->
    <section id="services" class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-semibold text-center text-blue-700">What We Offer</h2>
            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">

                <x-service-card title="Career Guidance"
                    description="Our career services assist students in preparing for internships, jobs, and professional growth." />
                <x-service-card title="Student Support"
                    description="We offer various support services to help students succeed academically and personally." />
                <x-service-card title="Modern Facilities"
                    description="Our campus is equipped with modern classrooms, labs, and technology to provide a dynamic learning environment." />
                <x-service-card title="Qualified Faculty"
                    description="Our faculty members are highly qualified, passionate, and dedicated to student success" />
                <x-service-card title="Academic Excellence"
                    description="We provide top-notch academic programs to ensure every student achieves their full potential." />
                <x-service-card title="International Exchange"
                    description="We offer international exchange programs to expand students' global perspectives and experiences." />
            </div>
        </div>
    </section>
@endsection
