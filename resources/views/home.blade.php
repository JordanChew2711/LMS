{{-- Extend the public layout --}}
@extends('layouts.public')

{{-- Set the content for the "content" section in your public layout --}}
@section('content')

    {{-- Hero section --}}
    <div class="hero bg-gray-50 py-24">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-5xl font-bold text-gray-800 mb-8">Start Your Learning Journey</h1>
            <p class="text-lg text-gray-600 mb-10">Explore a wide range of courses and expand your knowledge at your own pace.</p>
            <a href="#" class="inline-block bg-blue-500 text-white px-8 py-3 rounded-lg text-lg font-semibold hover:bg-blue-600 transition duration-300">Discover Courses</a>
        </div>
    </div>

    {{-- Features section --}}
    <section class="features py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                <div class="feature-item">
                    <span class="block w-10 h-10 mx-auto mb-4 bg-blue-500 rounded-full text-white items-center justify-center">
                        <!-- Icon or Image -->
                    </span>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Expert Instructors</h3>
                    <p class="text-gray-600">Qualified professionals who are passionate about teaching and sharing their expertise.</p>
                </div>
                <div class="feature-item">
                    <span class="block w-10 h-10 mx-auto mb-4 bg-green-500 rounded-full text-white items-center justify-center">
                        <!-- Icon or Image -->
                    </span>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Flexible Learning</h3>
                    <p class="text-gray-600">Courses designed to fit into your busy schedule, accessible from anywhere, anytime.</p>
                </div>
                <div class="feature-item">
                    <span class="block w-10 h-10 mx-auto mb-4 bg-purple-500 rounded-full text-white items-center justify-center">
                        <!-- Icon or Image -->
                    </span>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Lifetime Access</h3>
                    <p class="text-gray-600">Once enrolled, you have unlimited access to the course material forever.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Call to Action section --}}
    <section class="call-to-action py-20 bg-gray-50 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-black text-4xl font-bold mb-6">Join Our Community</h2>
            <p class="text-black text-lg mb-8">Become a part of a growing community of learners and start your success story today.</p>
            <a href="#" class="inline-block bg-white text-black px-8 py-3 rounded-lg text-lg font-semibold hover:bg-gray-100 transition duration-300">Get Started</a>
        </div>
    </section>

    {{-- Testimonials section --}}
    <section class="testimonials py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Hear From Our Learners</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Testimonial card --}}
                <!-- Repeat this block for each testimonial -->
                <div class="testimonial p-6 bg-white rounded-lg shadow-lg">
                    <p class="text-gray-600 mb-4">"The courses are comprehensive and up-to-date, and the instructors are genuinely invested in students' success."</p>
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="https://i.pravatar.cc/300" alt="Avatar">
                        <div class="text-left">
                            <p class="text-gray-800 font-semibold">John Doe</p>
                            <p class="text-gray-500 text-xs">Web Developer</p>
                        </div>
                    </div>
                </div>
                <!-- Second Testimonial -->
                <div class="testimonial p-6 bg-white rounded-lg shadow-lg">
                    <p class="text-gray-600 mb-4">"This platform has transformed my career. The flexible learning environment was perfect for my busy schedule."</p>
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="https://i.pravatar.cc/300" alt="Avatar">
                        <div class="text-left">
                            <p class="text-gray-800 font-semibold">Jane Smith</p>
                            <p class="text-gray-500 text-xs">Data Analyst</p>
                        </div>
                    </div>
                </div>
                <!-- Thirs Testimonial -->
                <div class="testimonial p-6 bg-white rounded-lg shadow-lg">
                    <p class="text-gray-600 mb-4">"This platform has transformed my career. The flexible learning environment was perfect for my busy schedule."</p>
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="https://i.pravatar.cc/300" alt="Avatar">
                        <div class="text-left">
                            <p class="text-gray-800 font-semibold">Jane Smith</p>
                            <p class="text-gray-500 text-xs">Data Analyst</p>
                        </div>
                    </div>
                </div>
                <!-- End testimonial block -->
            </div>
        </div>
    </section>

    {{-- Features section --}}
    <section class="courses py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Courses here!</h2>
        </div>
    </section>

    {{-- Footer section is included from the layouts.public --}}

    @endsection



