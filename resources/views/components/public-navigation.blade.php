<nav class="shadow bg-gradient-to-r from-purple-500 to-indigo-500">
    <div class="container mx-auto px-6 py-3 md:flex md:justify-between md:items-center">
        <div class="flex justify-between items-center">
            <div>
                <a class="text-black text-xl font-bold md:text-2xl hover:text-gray-300" href="{{ route('home') }}">AllCourseCentral</a>
            </div>
            
            <!-- Mobile menu button -->
            <div class="flex md:hidden">
                <button type="button" class="text-white hover:text-gray-300 focus:outline-none focus:text-gray-300" aria-label="toggle menu">
                    <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                        <!-- SVG for the hamburger icon can be placed here -->
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div class="md:flex items-center">
            <div class="flex flex-col md:flex-row md:mx-6">
                <a class="my-1 text-black hover:text-gray-300 md:mx-4 md:my-0" href="#">Courses</a>
                <a class="my-1 text-black hover:text-gray-300 md:mx-4 md:my-0" href="{{ route('about') }}">About Us</a>
                <a class="my-1 text-black hover:text-gray-300 md:mx-4 md:my-0" href="{{ route('contact') }}">Contact</a>
            </div>

            <!-- Authentication Links -->
            @guest
                <a class="my-1 text-black hover:bg-purple-700 md:mx-4 md:my-0 px-3 py-2 rounded" href="{{ route('login') }}">Login</a>
                <a class="my-1 text-black bg-blue-500 hover:bg-blue-600 md:mx-4 md:my-0 px-3 py-2 rounded" href="{{ route('register') }}">Register</a>
            @endguest

            @auth
                <div class="relative">
                    <!-- Dropdown Trigger -->
                    <button onclick="toggleDropdown()" class="flex items-center focus:outline-none focus:shadow-outline">
                        <span class="text-black mr-2">{{ Auth::user()->name }}</span>
                        <svg class="text-black fill-current h-4 w-4 transform group-hover:rotate-180
                        transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M5.516 7.548c0-0.829 0.335-1.591 0.883-2.139s1.31-0.883 2.139-0.883c0.829 0 1.591 0.335 2.139 0.883s0.883 1.31 0.883 2.139c0 0.829-0.335 1.591-0.883 2.139s-1.31 0.883-2.139 0.883c-0.829 0-1.591-0.335-2.139-0.883s-0.883-1.31-0.883-2.139z M10 18c-5 0-6-3.582-6-4.5 0-0.171 0.029-0.338 0.085-0.5h11.83c0.056 0.162 0.085 0.329 0.085 0.5 0 0.918-1 4.5-6 4.5z"></path>
                        </svg>
                    </button>
                    <!-- Dropdown Menu -->
                    <div class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-20 hidden" id="userMenu">
                        <a href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-200">Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-200">Settings</a>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Logout</a>
                    </div>
                </div>

                <!-- Logout Form -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                {{-- Show login and register links --}}
            @endauth

            {{-- Add your scripts at the bottom of the page --}}
            <script>
                function toggleDropdown() {
                    let dropdown = document.getElementById('userMenu');
                    dropdown.classList.toggle('hidden');
                }
            </script>
        </div>
    </div>
</nav>


