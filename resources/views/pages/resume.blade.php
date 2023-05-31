@extends('layout.frontend')
@section('title', 'Elhrayfi.ma - ')
@section('meta_description', 'description')
@section('content')
@include('components.header')
<main class="bg-[#f3f4f6]">
    <div class="container mx-auto p-6">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-4">
                <div class="shadow rounded-xl overflow-hidden"><!-- Start User Block -->
                    <div class="h-32 bg-cover" style="background-image: url('https://img.freepik.com/premium-photo/top-view-colorful-aquarelle-with-copy-space_23-2148419543.jpg?w=2000');"></div>
                    <div class="pt-14 p-7 bg-white relative">
                        <a href="/personal_cv/" class="absolute -top-10"><img src="https://media.istockphoto.com/id/668562118/fr/photo/visage-heureux-jeune-homme-africain-beau-sourire.jpg?s=170667a&w=0&k=20&c=oMzg_18lLvD-lT6EEFMV7u5uiq5FADDKGk5_bl8YpUo=" class="w-20 h-20 rounded object-cover" alt="Avatar" class="user-photo"></a>
                        <div class="text-lg font-semibold mb-1.5">Cristopher Abbott</div>
                        <div class="text-sm text-gray-400 mb-4">Senior Developer</div>
                        <div class="flex space-x-3 bg-gradient-to-l from-green-500 to-green-700 w-fit p-2 rounded text-white">
                            <button class="download-btn">Download CV</button>
                            <button class="download-btn-icon"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg></button>
                        </div>
                    </div>
                </div>
                <div class="p-7 bg-white my-8 shadow rounded-xl overflow-hidden"><!-- Start Info Block -->
                    <h2 class="pb-4 text-xl">Information</h2>
                    <div class="space-y-4">
                        <div class="flex justify-between">
                            <div class="text-gray-400">Location</div>
                            <div class="font-medium text-right text-gray-600">Casablanca</div>
                        </div>
                        <div class="flex justify-between">
                            <div class="text-gray-400">Experience</div>
                            <div class="font-medium text-right text-gray-600">+3 ans</div>
                        </div>
                        <div class="flex justify-between">
                            <div class="text-gray-400">Available</div>
                            <div class="font-medium text-right text-gray-600">Oui</div>
                        </div>
                    </div>
                </div>
                <div class="p-7 bg-white my-8 shadow rounded-xl overflow-hidden"><!-- Start Skills Block -->
                    <h2 class="pb-4 text-xl">Skills</h2>
                    <div class="flex flex-wrap  items-center">
                        <span class="p-3 mt-2 mr-2 text-gray-400 rounded ">JavaScript</span>
                        <span class="p-3 mt-2 mr-2 text-gray-400 rounded ">React</span>
                        <span class="p-3 mt-2 mr-2 text-gray-400 rounded ">Vue</span>
                        <span class="p-3 mt-2 mr-2 text-gray-400 rounded ">SQL</span>
                        <span class="p-3 mt-2 mr-2 text-gray-400 rounded ">HTML/CSS</span>
                        <span class="p-3 mt-2 mr-2 text-gray-400 rounded ">Java</span>
                    </div>
                </div>
            </div>
            <div class="col-span-8 ">
                <div class="p-7 bg-white  shadow rounded-xl overflow-hidden"><!-- Start About Me Block -->
                    <h2 class="text-xl py-2">About me</h2>
                    <p class="text-gray-600 mb-5">Libero quas veritatis nulla distinctio fuga nihil temporibus et. Quia dicta sapiente qui porro molestiae nobis incidunt voluptatem. Et voluptas sunt nihil. At perferendis voluptatem dolores nulla. Adipisci dolore non. Praesentium ipsa magnam ut quia explicabo voluptates.</p>
                    
                    <div class="flex flex-col space-y-4">
                        <a href="#0" class="text-green-700">
                            <span
                            class="inline-flex items-center gap-1 rounded-full font-medium bg-green-50 px-2 py-1 text-md text-green-600"
                          >
                            <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                            elhrayfi_nbr@gmail.com
                          </span>
                        </a>
            
                        <ul class="flex space-x-5">
                            <li>
                                <a href="#0" class="social-link-hover">
                                    <i class="bx bxl-facebook-circle text-2xl"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#0" class="social-link-hover">
                                    <i class="bx bxl-twitter text-2xl"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#0" class="social-link-hover">
                                    <i class="bx bxl-github text-2xl"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="border-t border-gray-200 my-5"></div>
                    
                    <ul class="flex space-x-8 font-medium">
                        <li>
                            <a href="/personal_cv/index.html" class="menu-link-active menu-link-hover">Resume</a>
                        </li>
                        <li>
                            <a href="/personal_cv/products.html" class="menu-link menu-link-hover">Products</a>
                        </li>
                        <li>
                            <a href="/personal_cv/blog.html" class="menu-link menu-link-hover">Blog</a>
                        </li>
                    </ul>
                </div>

                <div class="p-7 bg-white  shadow rounded-xl overflow-hidden mt-12"><!-- Start Experience Block -->
                    <h2 class="text-xl pb-6">Experience</h2>
                    <div class="mb-5 flex space-x-5">
                        <div class="company-logo w-28 h-28">
                            <img src="https://www.colorado.ma/sites/all/themes/colorado_commercial/img/logo.png" alt="">
                        </div>

                        <div class="w-full space-y-5">
                            <div class="item-header">
                                <div class="space-y-1.5">
                                    <div class="font-medium">Peintre Pistolet et Bâtiment</div>
                                    <div class="flex space-x-5 text-gray-400 items-center">
                                        <div class="flex flex-col items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                            </svg>
                                            <span>Colorado</span>
                                        </div>
                                        <div class="flex flex-col items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                            <span>Casablanca</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-y-2 sm:text-right">
                                    <div class=" text-sm  ">
                                        <span class="bg-green-50 text-green-600 w-fit p-2 rounded">Full time</span>
                                    </div>
                                    <div class="flex items-center justify-end space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <span>June 2019 – Present</span>
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-600">
                                Aut omnis voluptatem sit sequi. Voluptatem temporibus repellat voluptatem voluptatibus enim voluptas necessitatibus. Aut quasi sunt dolor. Commodi dolores saepe asperiores beatae voluptate corporis est ea voluptatem. Enim quo sed et sint aspernatur distinctio qui quam.
                            </p>
                            <div class="border-b border-gray-200"></div>
                        </div>
                    </div>
                    <div class="mb-5 flex space-x-5">
                        <div class="company-logo w-28 h-28">
                            <img src="https://cdn3.f-cdn.com//files/download/1139225/IP7AoLOGO--COLOR.png?width=780&height=525&fit=crop" alt="">
                        </div>

                        <div class="w-full space-y-5">
                            <div>
                                <div class="space-y-1.5">
                                    <div class="font-medium">Peintre de batiment</div>
                                    <div class="flex space-x-5 text-gray-400">
                                        <div class="flex flex-col items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                            </svg>
                                            <span>Astral</span>
                                        </div>
                                        <div class="flex flex-col items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                            <span>Casablanca</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-y-2 sm:text-right">
                                    <div class=" text-sm  ">
                                        <span class="bg-green-50 text-green-600 w-fit p-2 rounded">Part Time</span>
                                    </div>
                                    <div class="flex items-center justify-end space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <span>Janv 2018 – Mai 2019</span>
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-600">
                                Aut omnis voluptatem sit sequi. Voluptatem temporibus repellat voluptatem voluptatibus enim voluptas necessitatibus. Aut quasi sunt dolor. Commodi dolores saepe asperiores beatae voluptate corporis est ea voluptatem. Enim quo sed et sint aspernatur distinctio qui quam.
                            </p>
                            <div class="border-b border-gray-200"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
@endsection