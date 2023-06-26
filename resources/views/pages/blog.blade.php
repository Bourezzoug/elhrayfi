@extends('layout.frontend')
@section('title', 'Elhrayfi.ma - ')
@section('meta_description', 'description')
@section('content')
@include('components.header')

<section class="relative table w-full py-36 bg-[url('https://img.freepik.com/premium-vector/people-group-different-occupation-profession-set-international-labor-day-flat-banner_180264-14.jpg')] bg-top bg-no-repeat bg-cover">
    <div class="absolute inset-0 bg-emerald-900/90"></div>

    <div class="absolute text-center z-10 top-1/2 start-0 end-0 mx-3">
        <p class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white text-4xl">BLOG</p>
    </div>
</section>

<section class="relative md:py-24 py-16">
    <div class="container mx-auto p-6">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
            <div class="group relative overflow-hidden bg-white rounded-md shadow">
                <div class="relative overflow-hidden">
                    <img src="https://artisansofmorocco.files.wordpress.com/2014/04/artisans-2048-shot-2-1.jpg" class="scale-110 group-hover:scale-100 transition-all duration-500" alt="">
                </div>

                <div class="relative p-6">
                    <div class="absolute start-6 -top-4">
                        <span class="bg-emerald-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5">Arts</span>
                    </div>

                    <div class="">
                        <div class="flex mb-4">
                            <span class="text-slate-400 text-sm"><i class="uil uil-calendar-alt text-slate-900 me-2"></i>20th February, 2023</span>
                            <span class="text-slate-400 text-sm ms-3"><i class="uil uil-clock text-slate-900 me-2"></i>5 min read</span>
                        </div>

                        <a href="blog-detail.html" class="title text-lg font-semibold hover:text-emerald-600 duration-500 ease-in-out">11 Tips to Help You Get New Clients Through Cold Calling</a>
                        
                        <div class="flex justify-between items-center mt-3">
                            <a href="blog-detail.html" class="btn btn-link hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                            <span class="text-slate-400 text-sm">by <a href="" class="text-slate-900 hover:text-emerald-600 font-medium">Google</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--end content-->
            
            <div class="group relative overflow-hidden bg-white rounded-md shadow">
                <div class="relative overflow-hidden">
                    <img src="https://artisansofmorocco.files.wordpress.com/2014/04/artisans-2048-shot-2-1.jpg" class="scale-110 group-hover:scale-100 transition-all duration-500" alt="">
                </div>

                <div class="relative p-6">
                    <div class="absolute start-6 -top-4">
                        <span class="bg-emerald-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5">Illustration</span>
                    </div>

                    <div class="">
                        <div class="flex mb-4">
                            <span class="text-slate-400 text-sm"><i class="uil uil-calendar-alt text-slate-900 me-2"></i>20th February, 2023</span>
                            <span class="text-slate-400 text-sm ms-3"><i class="uil uil-clock text-slate-900 me-2"></i>5 min read</span>
                        </div>

                        <a href="blog-detail.html" class="title text-lg font-semibold hover:text-emerald-600 duration-500 ease-in-out">DigitalOcean launches first Canadian data centre in Toronto</a>
                        
                        <div class="flex justify-between items-center mt-3">
                            <a href="blog-detail.html" class="btn btn-link hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                            <span class="text-slate-400 text-sm">by <a href="" class="text-slate-900 hover:text-emerald-600 font-medium">Facebook</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--end content-->
            
            <div class="group relative overflow-hidden bg-white rounded-md shadow">
                <div class="relative overflow-hidden">
                    <img src="https://artisansofmorocco.files.wordpress.com/2014/04/artisans-2048-shot-2-1.jpg" class="scale-110 group-hover:scale-100 transition-all duration-500" alt="">
                </div>

                <div class="relative p-6">
                    <div class="absolute start-6 -top-4">
                        <span class="bg-emerald-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5">Music</span>
                    </div>

                    <div class="">
                        <div class="flex mb-4">
                            <span class="text-slate-400 text-sm"><i class="uil uil-calendar-alt text-slate-900 me-2"></i>20th February, 2023</span>
                            <span class="text-slate-400 text-sm ms-3"><i class="uil uil-clock text-slate-900 me-2"></i>5 min read</span>
                        </div>

                        <a href="blog-detail.html" class="title text-lg font-semibold hover:text-emerald-600 duration-500 ease-in-out">Using Banner Stands To Increase Trade Show Traffic</a>
                        
                        <div class="flex justify-between items-center mt-3">
                            <a href="blog-detail.html" class="btn btn-link hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                            <span class="text-slate-400 text-sm">by <a href="" class="text-slate-900 hover:text-emerald-600 font-medium">Linkedin</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--end content-->
            
            <div class="group relative overflow-hidden bg-white rounded-md shadow">
                <div class="relative overflow-hidden">
                    <img src="https://artisansofmorocco.files.wordpress.com/2014/04/artisans-2048-shot-2-1.jpg" class="scale-110 group-hover:scale-100 transition-all duration-500" alt="">
                </div>

                <div class="relative p-6">
                    <div class="absolute start-6 -top-4">
                        <span class="bg-emerald-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5">Arts</span>
                    </div>

                    <div class="">
                        <div class="flex mb-4">
                            <span class="text-slate-400 text-sm"><i class="uil uil-calendar-alt text-slate-900 me-2"></i>20th February, 2023</span>
                            <span class="text-slate-400 text-sm ms-3"><i class="uil uil-clock text-slate-900 me-2"></i>5 min read</span>
                        </div>

                        <a href="blog-detail.html" class="title text-lg font-semibold hover:text-emerald-600 duration-500 ease-in-out">11 Tips to Help You Get New Clients Through Cold Calling</a>
                        
                        <div class="flex justify-between items-center mt-3">
                            <a href="blog-detail.html" class="btn btn-link hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                            <span class="text-slate-400 text-sm">by <a href="" class="text-slate-900 hover:text-emerald-600 font-medium">Google</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--end content-->
            
            <div class="group relative overflow-hidden bg-white rounded-md shadow">
                <div class="relative overflow-hidden">
                    <img src="https://artisansofmorocco.files.wordpress.com/2014/04/artisans-2048-shot-2-1.jpg" class="scale-110 group-hover:scale-100 transition-all duration-500" alt="">
                </div>

                <div class="relative p-6">
                    <div class="absolute start-6 -top-4">
                        <span class="bg-emerald-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5">Illustration</span>
                    </div>

                    <div class="">
                        <div class="flex mb-4">
                            <span class="text-slate-400 text-sm"><i class="uil uil-calendar-alt text-slate-900 me-2"></i>20th February, 2023</span>
                            <span class="text-slate-400 text-sm ms-3"><i class="uil uil-clock text-slate-900 me-2"></i>5 min read</span>
                        </div>

                        <a href="blog-detail.html" class="title text-lg font-semibold hover:text-emerald-600 duration-500 ease-in-out">DigitalOcean launches first Canadian data centre in Toronto</a>
                        
                        <div class="flex justify-between items-center mt-3">
                            <a href="blog-detail.html" class="btn btn-link hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                            <span class="text-slate-400 text-sm">by <a href="" class="text-slate-900 hover:text-emerald-600 font-medium">Facebook</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--end content-->
            
            <div class="group relative overflow-hidden bg-white rounded-md shadow">
                <div class="relative overflow-hidden">
                    <img src="https://artisansofmorocco.files.wordpress.com/2014/04/artisans-2048-shot-2-1.jpg" class="scale-110 group-hover:scale-100 transition-all duration-500" alt="">
                </div>

                <div class="relative p-6">
                    <div class="absolute start-6 -top-4">
                        <span class="bg-emerald-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5">Music</span>
                    </div>

                    <div class="">
                        <div class="flex mb-4">
                            <span class="text-slate-400 text-sm"><i class="uil uil-calendar-alt text-slate-900 me-2"></i>20th February, 2023</span>
                            <span class="text-slate-400 text-sm ms-3"><i class="uil uil-clock text-slate-900 me-2"></i>5 min read</span>
                        </div>

                        <a href="blog-detail.html" class="title text-lg font-semibold hover:text-emerald-600 duration-500 ease-in-out">Using Banner Stands To Increase Trade Show Traffic</a>
                        
                        <div class="flex justify-between items-center mt-3">
                            <a href="blog-detail.html" class="btn btn-link hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                            <span class="text-slate-400 text-sm">by <a href="" class="text-slate-900 hover:text-emerald-600 font-medium">Linkedin</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--end content-->
            
            <div class="group relative overflow-hidden bg-white rounded-md shadow">
                <div class="relative overflow-hidden">
                    <img src="https://artisansofmorocco.files.wordpress.com/2014/04/artisans-2048-shot-2-1.jpg" class="scale-110 group-hover:scale-100 transition-all duration-500" alt="">
                </div>

                <div class="relative p-6">
                    <div class="absolute start-6 -top-4">
                        <span class="bg-emerald-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5">Arts</span>
                    </div>

                    <div class="">
                        <div class="flex mb-4">
                            <span class="text-slate-400 text-sm"><i class="uil uil-calendar-alt text-slate-900 me-2"></i>20th February, 2023</span>
                            <span class="text-slate-400 text-sm ms-3"><i class="uil uil-clock text-slate-900 me-2"></i>5 min read</span>
                        </div>

                        <a href="blog-detail.html" class="title text-lg font-semibold hover:text-emerald-600 duration-500 ease-in-out">11 Tips to Help You Get New Clients Through Cold Calling</a>
                        
                        <div class="flex justify-between items-center mt-3">
                            <a href="blog-detail.html" class="btn btn-link hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                            <span class="text-slate-400 text-sm">by <a href="" class="text-slate-900 hover:text-emerald-600 font-medium">Google</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--end content-->
            
            <div class="group relative overflow-hidden bg-white rounded-md shadow">
                <div class="relative overflow-hidden">
                    <img src="https://artisansofmorocco.files.wordpress.com/2014/04/artisans-2048-shot-2-1.jpg" class="scale-110 group-hover:scale-100 transition-all duration-500" alt="">
                </div>

                <div class="relative p-6">
                    <div class="absolute start-6 -top-4">
                        <span class="bg-emerald-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5">Illustration</span>
                    </div>

                    <div class="">
                        <div class="flex mb-4">
                            <span class="text-slate-400 text-sm"><i class="uil uil-calendar-alt text-slate-900 me-2"></i>20th February, 2023</span>
                            <span class="text-slate-400 text-sm ms-3"><i class="uil uil-clock text-slate-900 me-2"></i>5 min read</span>
                        </div>

                        <a href="blog-detail.html" class="title text-lg font-semibold hover:text-emerald-600 duration-500 ease-in-out">DigitalOcean launches first Canadian data centre in Toronto</a>
                        
                        <div class="flex justify-between items-center mt-3">
                            <a href="blog-detail.html" class="btn btn-link hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                            <span class="text-slate-400 text-sm">by <a href="" class="text-slate-900 hover:text-emerald-600 font-medium">Facebook</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--end content-->
            
            <div class="group relative overflow-hidden bg-white rounded-md shadow">
                <div class="relative overflow-hidden">
                    <img src="https://artisansofmorocco.files.wordpress.com/2014/04/artisans-2048-shot-2-1.jpg" class="scale-110 group-hover:scale-100 transition-all duration-500" alt="">
                </div>

                <div class="relative p-6">
                    <div class="absolute start-6 -top-4">
                        <span class="bg-emerald-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5">Music</span>
                    </div>

                    <div class="">
                        <div class="flex mb-4">
                            <span class="text-slate-400 text-sm"><i class="uil uil-calendar-alt text-slate-900 me-2"></i>20th February, 2023</span>
                            <span class="text-slate-400 text-sm ms-3"><i class="uil uil-clock text-slate-900 me-2"></i>5 min read</span>
                        </div>

                        <a href="blog-detail.html" class="title text-lg font-semibold hover:text-emerald-600 duration-500 ease-in-out">Using Banner Stands To Increase Trade Show Traffic</a>
                        
                        <div class="flex justify-between items-center mt-3">
                            <a href="blog-detail.html" class="btn btn-link hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                            <span class="text-slate-400 text-sm">by <a href="" class="text-slate-900 hover:text-emerald-600 font-medium">Linkedin</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--end content-->
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
            <div class="md:col-span-12 text-center">
                <nav aria-label="Page navigation example">
                    <ul class="inline-flex items-center -space-x-px">
                        <li>
                            <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 bg-white rounded-s-3xl hover:text-white border border-gray-100 hover:border-emerald-600 hover:bg-emerald-600">
                                <i class="uil uil-angle-left text-[20px] rtl:rotate-180 rtl:-mt-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white border border-gray-100 hover:border-emerald-600 hover:bg-emerald-600">1</a>
                        </li>
                        <li>
                            <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white border border-gray-100 hover:border-emerald-600 hover:bg-emerald-600">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page" class="z-10 w-[40px] h-[40px] inline-flex justify-center items-center text-white bg-emerald-600 border border-emerald-600">3</a>
                        </li>
                        <li>
                            <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white border border-gray-100 hover:border-emerald-600 hover:bg-emerald-600">4</a>
                        </li>
                        <li>
                            <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white border border-gray-100 hover:border-emerald-600 hover:bg-emerald-600">5</a>
                        </li>
                        <li>
                            <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 bg-white rounded-e-3xl hover:text-white border border-gray-100 hover:border-emerald-600 hover:bg-emerald-600">
                                <i class="uil uil-angle-right text-[20px] rtl:rotate-180 rtl:-mt-1"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->
</section>
@include('components.footer')
@endsection