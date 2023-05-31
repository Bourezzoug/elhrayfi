<header class=" shadow bg-white relative h-[10vh]">
    <nav class="relative  z-20 bg-white">
        <div class="container mx-auto p-6">
        <!-- Flex Container -->
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="pt-2 ">
                <img src="{{ asset('images/logos.png') }}" class="block" alt="">
            </div>
            <!-- Menu Item -->
            <div class="hidden md:flex space-x-6">
                <a href="#hero" class="text-p-color">Acceuill</a>
                <a href="#about" class="text-p-color">À propos</a>
                <a href="#services" class="text-p-color">Jobs List</a>
                <a href="#services" class="text-p-color">Artisans</a>
                <a href="#" class="text-p-color">Blog</a>
                <a href="#contact" class="text-p-color">Contact</a>
            </div>
            <!-- Button -->
            <button aria-label="theme-toggle" id="theme-toggle" type="button" class="text-gray-500  hover:bg-gray-100  focus:outline-none focus:ring-4 focus:ring-gray-200  rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
            </button>            
            <!-- Hamburger Icon -->
            <button aria-label="burger" id="menu-btn" class="block hamburger md:hidden focus:outline-none">
                <span class="hamburger-top bg-black "></span>
                <span class="hamburger-middle bg-black "></span>
                <span class="hamburger-bottom bg-black "></span>
            </button>
            <div class="space-x-4">
                <a href="#" class="bg-green-600 border-2 border-green-600 p-3 rounded text-white hover:scale-110 transition-all ">Login</a>
                <a href="#" class="border-2 border-green-600 p-3 rounded hover:bg-green-600 hover:text-white transition-all">Sign Up</a>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div class="md:hidden">
            <div id="menu" class="absolute flex-col items-center hidden  self-end py-8 mt-10 space-y-6 font-bold bg-white  sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
                <a href="#" class="text-p-color">Home</a>
                <a href="#about" class="text-p-color">À propos</a>
                <a href="#services" class="text-p-color">Services</a>
                <a href="#" class="text-p-color">Teams</a>
                <a href="#contact" class="text-p-color">Contact</a>
            </div>
        </div>
        {{-- Sign Up & Login Btn --}}

    </div>
    </nav>
</header>