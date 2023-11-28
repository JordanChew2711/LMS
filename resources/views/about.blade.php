{{-- Extend the public layout --}}
@extends('layouts.public')

{{-- Set the content for the "content" section in your public layout --}}
@section('content')

    {{-- Hero section --}}
    <div class="bg-gray-50 py-24">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-5xl font-bold text-gray-800 mb-8">About AllCourseCentral</h1>
            <p class="text-lg text-gray-600 mb-10">Dedicated to empowering Sarawakians through education.</p>
        </div>
    </div>

    {{-- Our Mission section --}}
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-5">Our Mission</h2>
                    <p class="text-gray-600 mb-5">At AllCourseCentral, we believe that quality education is the cornerstone of personal and community growth. Our mission is to provide accessible learning opportunities to Sarawakians, enhancing skills and knowledge to meet the challenges of the future.</p>
                    <p class="text-gray-600">We are committed to creating a platform where every Sarawakian can learn new skills, advance their careers, and contribute positively to our community.</p>
                </div>
                <div>
                    <!-- Image that reflects the mission or the community -->
                    <img src="{{ asset('images/Students Grouping.png') }}" alt="Our Mission" class="rounded shadow-lg">
                </div>
            </div>
        </div>
    </section>

    {{-- Why Choose Us section --}}
    <section class="bg-white py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Why Choose AllCourseCentral</h2>
            <div class="flex flex-wrap -mx-4 text-center">
                <!-- Feature 1 -->
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="p-6 border rounded-lg shadow-lg bg-gray-50">
                        <h3 class="text-xl font-semibold mb-3">Locally Curated Content</h3>
                        <p class="text-gray-600">Content designed to cater to both global trends and local community needs.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="p-6 border rounded-lg shadow-lg bg-gray-50">
                        <h3 class="text-xl font-semibold mb-3">Expert Instructors</h3>
                        <p class="text-gray-600">Courses taught by experienced educators who understand the unique cultural landscape.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="p-6 border rounded-lg shadow-lg bg-gray-50">
                        <h3 class="text-xl font-semibold mb-3">Collaborative Community</h3>
                        <p class="text-gray-600">A growing community that values collaboration and shared success.</p>
                    </div>
                </div>
                <!-- Feature 4 -->
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="p-6 border rounded-lg shadow-lg bg-gray-50">
                        <h3 class="text-xl font-semibold mb-3">Up-to-Date Learning</h3>
                        <p class="text-gray-600">Continuous updates to ensure Sarawakians have the latest knowledge and skills.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Call to Action for joining the platform --}}
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-6">Start Learning Today</h2>
            <p class="text-lg text-gray-600 mb-8">Join the thousands of Sarawakians who are already improving their lives with AllCourseCentral. Sign up and start your journey to knowledge and empowerment.</p>
            <a href="{{ route('register') }}" class="bg-blue-600 text-white font-bold py-3 px-6 rounded-md text-lg">Sign Up</a>
        </div>
    </section>

@endsection


