<!-- Start of Footer -->
<footer class="bg-gray-800 text-white">
    <div class="container mx-auto px-6 py-8">
        <div class="flex flex-wrap justify-between">
            <!-- Footer Navigation -->
            <div class="w-full sm:w-2/5 mb-6">
                <h3 class="text-xl mb-3 font-semibold border-b border-gray-700 pb-2">Quick Links</h3>
                <ul class="list-none footer-links">
                    <li><a href="{{ route('home') }}" class="hover:text-gray-300">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-gray-300">About Us</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-gray-300">Contact Us</a></li>
                    <!-- Add more links as needed -->
                </ul>
            </div>

            <!-- Contact Information -->
            <div class="w-full sm:w-1/5 mb-6">
                <h3 class="text-xl mb-3 font-semibold border-b border-gray-700 pb-2">Contact Info</h3>
                <ul class="list-none footer-links">
                    <li><a href="tel:+15551234567" class="hover:text-gray-300">+1 (555) 123-4567</a></li>
                    <li><a href="mailto:support@allcoursecentral.com" class="hover:text-gray-300">support@allcoursecentral.com</a></li>
                </ul>
            </div>

            <!-- Social Media Links -->
            <div class="w-full sm:w-1/5 mb-6">
                <h3 class="text-xl mb-3 font-semibold border-b border-gray-700 pb-2">Follow Us</h3>
                <div class="flex mt-4">
                    <!-- Icons from Heroicons (https://heroicons.com/) -->
                    <!-- Replace with your own social media links -->
                    <a href="#" class="mr-6 hover:text-gray-300">
                        <!-- Twitter Icon -->
                    </a>
                    <a href="#" class="mr-6 hover:text-gray-300">
                        <!-- Facebook Icon -->
                    </a>
                    <a href="#" class="hover:text-gray-300">
                        <!-- LinkedIn Icon -->
                    </a>
                </div>
            </div>

            <!-- Legal Disclaimer or Additional Info -->
            <div class="w-full sm:w-1/5 mb-6">
                <h3 class="text-xl mb-3 font-semibold border-b border-gray-700 pb-2">Legal</h3>
                <ul class="list-none footer-links">
                    <li><a href="#" class="hover:text-gray-300">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-gray-300">Terms of Use</a></li>
                </ul>
            </div>
        </div>

        <!-- Copyright and Attribution -->
        <div class="mt-8 border-t border-gray-700 pt-4">
            <p class="text-center text-gray-500">&copy; {{ date('Y') }} AllCourseCentral. All rights reserved.</p>
        </div>
    </div>
</footer>
<!-- End of Footer -->


