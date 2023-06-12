@extends('layout.frontend')
@section('title', 'Elhrayfi.ma - ')
@section('meta_description', 'description')
@section('content')
@include('components.header')
{{-- <main class="bg-[#f3f4f6]">
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
</main> --}}
<section class="relative ">
    <div class="lg:container container-fluid mx-auto p-6">
        <div class="relative shrink-0">
            <img src="https://img.freepik.com/premium-photo/top-view-colorful-aquarelle-with-copy-space_23-2148419543.jpg?w=2000" class="h-64 w-full object-cover lg:rounded-xl shadow dark:shadow-gray-700" alt="">
        </div>

        <div class="md:flex ms-4 -mt-12">
            <div class="md:w-full">
                <div class="relative flex items-end">
                    <img src="https://media.istockphoto.com/id/668562118/fr/photo/visage-heureux-jeune-homme-africain-beau-sourire.jpg?s=170667a&w=0&k=20&c=oMzg_18lLvD-lT6EEFMV7u5uiq5FADDKGk5_bl8YpUo=" class="h-28 w-28 rounded-full shadow dark:shadow-gray-800 ring-4 ring-slate-50 dark:ring-slate-800 object-cover" alt="">
                    <div class="ms-4">
                        <h5 class="text-lg font-semibold">Mr. Calvin carlo</h5>
                        <div class="text-slate-400 flex">Peintre

                            <div class="flex items-center ml-2">
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Rating star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <p class="ml-1 text-sm font-bold text-gray-900 dark:text-white">4.95</p>
                                <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                                <a href="#" class="text-sm font-medium text-gray-900 underline hover:no-underline dark:text-white">73 reviews</a>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div><!--end -->
</section>
<section class="relative md:pb-24 pb-16">
    <div class="container mx-auto p-6">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-7">
                <h5 class="text-xl font-semibold">Dolly Pran</h5>
                <p class="text-slate-400 mt-4">Obviously I'M Web Developer. Web Developer with over 3 years of experience. Experienced with all stages of the development cycle for dynamic web projects. The as opposed to using 'Content here, content here', making it look like readable English.</p>
                

                <h4 class="mt-6 text-xl font-semibold">Experience :</h4>

                <div class="flex mt-6">
                    <div class="text-slate-400 font-semibold min-w-[80px] text-center">
                        <img src="https://www.colorado.ma/sites/all/themes/colorado_commercial/img/logo.png" class="h-16 w-16 mx-auto mb-2 block" alt=""> 2019-22
                    </div>

                    <div class="ms-4">
                        <h5 class="text-lg font-medium mb-0">Peintre Pistolet et Bâtiment</h5>
                        <span class="text-slate-400 company-university">Colorado - Casablanca</span>
                        <p class="text-slate-400 mt-2 mb-0">It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text. </p>
                    </div>
                </div>
                
                <div class="flex mt-6">
                    <div class="text-slate-400 font-semibold min-w-[80px] text-center">
                        <img src="https://cdn3.f-cdn.com//files/download/1139225/IP7AoLOGO--COLOR.png?width=780&height=525&fit=crop" class="h-16 w-16 mx-auto mb-2 block" alt=""> 2017-19
                    </div>

                    <div class="ms-4">
                        <h5 class="text-lg font-medium mb-0">Peintre de batiment</h5>
                        <span class="text-slate-400 company-university">Astral - Agadir</span>
                        <p class="text-slate-400 mt-2 mb-0">It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text. </p>
                    </div>
                </div>

                <div class=" py-6 mt-6">
                    <h5 class="text-xl font-semibold">Feedback:</h5>

                    {{-- <form method="post" name="myForm" id="myForm" class="mt-4" onsubmit="return validateForm()">
                        <p class="mb-0" id="error-msg"></p>
                        <div id="simple-msg"></div>
                        <div class="grid grid-cols-12 gap-2">
                            <div class="md:col-span-6 col-span-12">
                                <label for="name" class="font-semibold">Your Name:</label>
                                <input name="name" id="name" type="text" class="h-10 w-full rounded border bg-transparent py-2 px-3 text-[14px] mt-2" placeholder="Name :">
                            <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div></div>

                            <div class="md:col-span-6 col-span-12">
                                <label for="email" class="font-semibold">Your Email:</label>
                                <input name="email" id="email" type="email" class="h-10 w-full rounded border bg-transparent py-2 px-3 text-[14px] mt-2" placeholder="Email :">
                            </div>

                            <div class="col-span-12">
                                <label for="subject" class="font-semibold">Your Question:</label>
                                <input name="subject" id="subject" class="h-10 w-full rounded border bg-transparent py-2 px-3 text-[14px] mt-2" placeholder="Subject :">
                            </div>

                            <div class="col-span-12">
                                <label for="comments" class="font-semibold">Your Comment:</label>
                                <textarea name="comments" id="comments" class="h-32 w-full rounded border bg-transparent py-2 px-3 text-[14px] mt-2 textarea" placeholder="Message :"></textarea>
                            </div>
                        </div>
                        <button type="submit" id="submit" name="send" class="btn bg-emerald-600 hover:bg-emerald-700 text-white rounded-md p-2 mt-2">Send Message</button>
                    </form> --}}
                


                </div>
            </div><!--end col-->

            <div class="lg:col-span-4 md:col-span-5">
                <div class="bg-slate-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-700 p-6 sticky top-20">
                    <h5 class="text-lg font-semibold">Personal Detail:</h5>
                    <ul class="list-none mt-4">
                        <li class="flex justify-between mt-3 items-center font-medium">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail h-4 w-4 text-slate-400 me-3 inline"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><span class="text-slate-400 me-3">Email  :</span></span>
                            
                            <span>dollypran@mail.com</span>
                        </li>
                        <li class="flex justify-between mt-3 items-center font-medium">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-gift h-4 w-4 text-slate-400 me-3 inline"><polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path></svg><span class="text-slate-400 me-3">Date de naissance :</span></span>
                            
                            <span>31st Dec, 1996</span>
                        </li>
                        <li class="flex justify-between mt-3 items-center font-medium">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home h-4 w-4 text-slate-400 me-3 inline"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg><span class="text-slate-400 me-3">Address :</span></span>
                            
                            <span>B13</span>
                        </li>
                        <li class="flex justify-between mt-3 items-center font-medium">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin h-4 w-4 text-slate-400 me-3 inline"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg><span class="text-slate-400 me-3">City :</span></span>
                            
                            <span>Casablanca</span>
                        </li>
                        <li class="flex justify-between mt-3 items-center font-medium">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe h-4 w-4 text-slate-400 me-3 inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg><span class="text-slate-400 me-3">Country :</span></span>
                            
                            <span>Maroc</span>
                        </li>
                        <li class="flex justify-between mt-3 items-center font-medium">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone h-4 w-4 text-slate-400 me-3 inline"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg><span class="text-slate-400 me-3">Mobile :</span></span>
                            
                            <span>+212 606 565 006</span>
                        </li>


                        <li class="mt-3 w-full  py-4 rounded-md ">
                            <a href="assets/images/calvin-carlo-resume.pdf" class="btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 dark:border-emerald-600 text-white rounded-md w-full p-2 my-2" download=""><i class="uil uil-file-download-alt"></i> Download CV</a>
                        </li>
                    </ul>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->



</section>
@include('components.footer')
@endsection