{{-- Extend the public layout --}}
@extends('layouts.public')

{{-- Set the content for the "content" section in your public layout --}}
@section('content')

    <div class="bg-white py-10">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2">
                    <h2 class="text-4xl font-bold text-center md:text-left mb-2">Get in Touch</h2>
                    <p class="text-xl text-center md:text-left text-gray-700">We're here to help and answer any question you might have.</p>
                </div>
                <div class="md:w-1/2">
                    <!-- Placeholder for an image or logo -->
                    <img class="w-full h-auto object-cover rounded-lg shadow-lg" src="{{ asset('images/support.jpeg') }}" alt="AllCourseCentral Logo" style="max-width: 300px;">
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-6 py-10">
        <div class="bg-white rounded shadow-lg p-8 md:p-12 lg:p-16">
            <form method="POST" action="{{ route('contact.send') }}" class="max-w-2xl mx-auto">
                @csrf  {{-- CSRF token for security --}}
                
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Your Name</label>
                    <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>

                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your Email</label>
                    <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>

                <div class="mb-6">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Your Message</label>
                    <textarea id="message" name="message" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required></textarea>
                </div>

                <div class="mb-6 text-center">
                    <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Send Message</button>
                </div>
            </form>
        </div>
    </div>

@endsection


