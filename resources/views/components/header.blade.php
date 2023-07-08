<header class=" shadow bg-white relative h-[10vh]">
    <nav class="relative  z-20 bg-white">
        <div class="container mx-auto p-6">
        <!-- Flex Container -->
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="pt-2 ">
                <img src="{{ asset('images/elhrayfi-logo.png') }}" class="block" width="180" height="100" alt="">
            </div>
            <!-- Menu Item -->
            <div class="hidden md:flex space-x-6">
                <a href="/" class="text-p-color">Acceuill</a>
                <a href="{{ Route('about.index') }}" class="text-p-color">À propos</a>
                @if (Auth::check()) <!-- Check if user is logged in -->
                @if (Auth::user()->user_type == 2)
                    <a href="{{ route('joblist.index') }}" class="text-p-color">Jobs List</a>
                @endif
                @if (Auth::user()->user_type == 3)
                    <a href="{{ route('artisans.index') }}" class="text-p-color">Artisans</a>
                @endif
                @else
                    <!-- Display both options for users who are not logged in -->
                    <a href="{{ route('joblist.index') }}" class="text-p-color">Jobs List</a>
                    <a href="{{ route('artisans.index') }}" class="text-p-color">Artisans</a>
                @endif
            
                <a href="{{ Route('blog.index') }}" class="text-p-color">Blog</a>
                <a href="{{ Route('contact.index') }}" class="text-p-color">Contact</a>
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
                {{-- <a href="{{ Route('register') }}"  class="border-2 border-emerald-600 p-3 rounded hover:bg-emerald-600 hover:text-white transition-all">Sign Up</a>
                <a href="{{ Route('login') }}"  class="bg-emerald-600 border-2 border-green-600 p-3 rounded text-white hover:scale-110 transition-all ">Login</a> --}}
                @if (Route::has('login'))
                    @auth
                        @if (Auth::user()->user_type === 1) 
                        {{-- Admin --}}
                        @elseif (Auth::user()->user_type === 2)
                        {{-- Artisan --}}
                        {{-- <div x-data="{ open: false }" @click.away="open = false">
                            <button @click="open = !open" class="hover:underline">
                              {{ Auth::user()->name }}
                            </button>
                            
                            <ul x-show="open" class="absolute bg-white shadow-md z-[99999] top-8 right-16">
                              <li>
                                <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-black hover:bg-gray-100 ">Dashboard</a>
                              </li>

                                                          <!-- Authentication -->
                                                          <form method="POST" action="{{ route('logout') }}" x-data>
                                                            @csrf

                                                            <a href="{{ route('logout') }}"
                                                            @click.prevent="$root.submit();" class ='block px-4 py-2 text-black hover:bg-gray-100 '>Logout</a>
            
                                                        </form>
                              <!-- Add other dropdown items here -->
                            </ul>
                          </div> --}}
                          <div class="ml-3 relative mr-2">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-12 w-12 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                        </button>
                                    @else
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                                {{ Auth::user()->name }}
                    
                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                </svg>
                                            </button>
                                        </span>
                                    @endif
                                </x-slot>
                    
                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Account') }}
                                    </div>
                    
                                    <x-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>
                    
                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                        <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                            {{ __('API Tokens') }}
                                        </x-dropdown-link>
                                    @endif
                    
                                    <div class="border-t border-gray-200"></div>
                    
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf
                    
                                        <x-dropdown-link href="{{ route('logout') }}"
                                                 @click.prevent="$root.submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                        @else
                        {{-- Client --}}
                        <div class="ml-3 relative mr-2">
                          <x-dropdown align="right" width="48">
                              <x-slot name="trigger">
                                  @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                      <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                          <img class="h-12 w-12 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                      </button>
                                  @else
                                      <span class="inline-flex rounded-md">
                                          <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                              {{ Auth::user()->name }}
                  
                                              <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                              </svg>
                                          </button>
                                      </span>
                                  @endif
                              </x-slot>
                  
                              <x-slot name="content">
                                  <!-- Account Management -->
                                  <div class="block px-4 py-2 text-xs text-gray-400">
                                      {{ __('Manage Account') }}
                                  </div>
                  
                                  <x-dropdown-link href="{{ route('Client.dashboard') }}">
                                      {{ __('Profile') }}
                                  </x-dropdown-link>
                  
                                  @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                      <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                          {{ __('API Tokens') }}
                                      </x-dropdown-link>
                                  @endif
                  
                                  <div class="border-t border-gray-200"></div>
                  
                                  <!-- Authentication -->
                                  <form method="POST" action="{{ route('logout') }}" x-data>
                                      @csrf
                  
                                      <x-dropdown-link href="{{ route('logout') }}"
                                               @click.prevent="$root.submit();">
                                          {{ __('Log Out') }}
                                      </x-dropdown-link>
                                  </form>
                              </x-slot>
                          </x-dropdown>
                      </div>
                        @endif
                    @else
                        <a href="{{ Route('register') }}"  class="border-2 border-emerald-600 p-3 rounded hover:bg-emerald-600 hover:text-white transition-all">Sign Up</a>
                        <a href="{{ Route('login') }}"  class="bg-emerald-600 border-2 border-green-600 p-3 rounded text-white hover:scale-110 transition-all ">Login</a>
                    @endif
                
                @endif
            </div>
        </div>
        <!-- Mobile Menu -->
        <div class="md:hidden">
            <div id="menu" class="absolute flex-col items-center hidden  self-end py-8 mt-10 space-y-6 font-bold bg-white  sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
                <a href="/" class="text-p-color">Acceuill</a>
                <a href="{{ Route('about.index') }}" class="text-p-color">À propos</a>
                <a href="{{ Route('joblist.index') }}" class="text-p-color">Jobs List</a>
                <a href="{{ Route('artisans.index') }}" class="text-p-color">Artisans</a>
                <a href="{{ Route('blog.index') }}" class="text-p-color">Blog</a>
                <a href="{{ Route('contact.index') }}" class="text-p-color">Contact</a>
            </div>
        </div>
        {{-- Sign Up & Login Btn --}}

    </div>
    </nav>
</header>