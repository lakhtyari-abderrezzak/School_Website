@extends('layouts.master')

@section('content')
    <x-hero title="Contact us" description="We would love to hear from you. Please reach out to us using the form below." />


    <!-- Contact Us Section -->
    <section id="contact" class="py-20 my-10">
        <div class="container mx-auto px-6">
            @if (session('success'))
                <x-success />
            @elseif(session('error'))
                <x-errors />
            @endif
            <form action="{{route('submitForm')}}" method="POST" class="bg-white p-8 rounded-lg shadow-lg max-w-2xl m-auto">
                
                @csrf
                <h2 class="text-gray-600 text-center text-2xl font-bold my-4 ">Contact us</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Name Input -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" id="name" name="name"
                            class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                            required>
                        @error('name')
                            <p class="text-red-500 my-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" id="email" name="email"
                            class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                            required>
                        @error('email')
                            <p class="text-red-500 my-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <!-- Subject Input -->
                <div class="mt-6">
                    <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                    <input type="text" id="subject" name="subject"
                        class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                        required>
                </div>
                <!-- Message Input -->
                <div class="mt-6">
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="6"
                        class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                        required></textarea>
                    @error('message')
                        <p class="text-red-500 my-2">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Submit Button -->
                <div class="mt-6 text-center">
                    <button type="submit"
                        class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Send
                        Message</button>
                </div>
            </form>
        </div>
    </section>
    
@endsection
