@extends('layout.frontend')
@section('title', 'Elhrayfi.ma - ')
@section('meta_description', 'description')
@section('content')
@include('components.header')
<section class="relative table w-full py-36 bg-[url('https://img.freepik.com/premium-vector/people-group-different-occupation-profession-set-international-labor-day-flat-banner_180264-14.jpg')] bg-top bg-no-repeat bg-cover">
    <div class="absolute inset-0 bg-emerald-900/90"></div>

    <div class="absolute text-center z-10 top-1/2 start-0 end-0 mx-3">
        <p class="inline breadcrumb-item  font-semibold duration-500 ease-in-out text-white text-4xl">Liste des Artisans</p>
    </div>
</section>

<section class="relative md:py-24 py-16 ">
    <div class="container mx-auto p-6">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-4 md:col-span-6 ">
                <div class="shadow dark:shadow-gray-700 p-6 rounded-md bg-white dark:bg-slate-900 sticky top-16">
                    <form>
                        <div class="grid grid-cols-1 gap-3">
                            <div class="my-2">
                                <label for="searchname" class="font-semibold">Search Company</label>
                                <div class="relative mt-2">
                                    <i class="fa-solid fa-magnifying-glass absolute left-0 top-1/2 -translate-y-1/2 pl-1.5 text-gray-300"></i>
                                    <input name="search" id="searchname" type="text" class=" form-input border border-slate-100 w-full h-[2.5rem] rounded pl-7 py-2 text-[14px]" placeholder="Search">
                                </div>
                            </div>
                            
                            <div class="my-2">
                                <label class="font-semibold">Categories</label>
                                <select class="form-select form-input border border-slate-100 dark:border-slate-800 block w-full mt-1 h-[2.5rem] rounded px-2 py-2 text-[14px]">
                                    <option value="WD">Plombier</option>
                                </select>
                            </div>

                            <div class="my-2">
                                <label class="font-semibold">Location</label>
                                <select class="form-select form-input border border-slate-100 dark:border-slate-800 block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px]">
                                    <option value="" readonly="true" hidden="true"
                                    selected>Choisir votre ville</option>
                                    @foreach ($cities as $ville)
                                    <option value="{{ $ville['ville'] }}">{{ $ville['ville'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            


                            <div class="my-2">
                                <input type="submit" class="btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md w-full py-2 cursor-pointer" value="Apply Filter">
                            </div>
                        </div>
                    </form>
                </div>
            </div><!--end col-->

            <div class="lg:col-span-8 md:col-span-6">
                {{-- <div class="grid grid-cols-1 gap-[30px]">
                    <div class="group relative overflow-hidden lg:flex justify-between items-center rounded shadow hover:shadow-md dark:shadow-gray-700 transition-all duration-500 p-5">
                        <div class="flex items-center">
                            <div class="w-14 h-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/45/Logo_Lydec_2010.jpg" class="h-8 w-8" alt="">
                            </div>
                            <a href="job-detail-three.html" class="text-lg hover:text-emerald-600 font-semibold transition-all duration-500 ms-3 min-w-[150px]">Plombier</a>
                        </div>

                        <div class="lg:block flex justify-between lg:mt-0 mt-4">
                            <span class="block"><span class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">Full Time</span></span>
                            <span class="block text-slate-400 text-sm md:mt-1 mt-0"><i class="uil uil-clock"></i> 20th Feb 2023</span>
                        </div>

                        <div class="lg:block flex justify-between lg:mt-0 mt-2">
                            <span class="text-emerald-600 bg-emerald-600/10 p-2 rounded-full"><i class="uil uil-map-marker"></i> Marrakech</span>
                        </div>

                        <div class="lg:mt-0 mt-4">
                            <a href="job-apply.html" class="btn rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full md:w-auto p-2">Apply Now</a>
                        </div>

                    </div><!--end content-->
                    
                    <div class="group relative overflow-hidden lg:flex justify-between items-center rounded shadow hover:shadow-md dark:shadow-gray-700 transition-all duration-500 p-5">
                        <div class="flex items-center">
                            <div class="w-14 h-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                                <img src="https://www.colorado.ma/sites/all/themes/colorado_commercial/img/logo.png" class="h-8 w-8" alt="">
                            </div>
                            <a href="job-detail-three.html" class="text-lg hover:text-emerald-600 font-semibold transition-all duration-500 ms-3 min-w-[150px]">Peintre</a>
                        </div>

                        <div class="lg:block flex justify-between lg:mt-0 mt-4">
                            <span class="block"><span class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">Part Time</span></span>
                            <span class="block text-slate-400 text-sm md:mt-1 mt-0"><i class="uil uil-clock"></i> 20th Feb 2023</span>
                        </div>

                        <div class="lg:block flex justify-between lg:mt-0 mt-2">
                            <span class="text-emerald-600 bg-emerald-600/10 p-2 rounded-full"><i class="uil uil-map-marker"></i> Casablanca</span>
                        </div>


                        <div class="lg:mt-0 mt-4">
                            <a href="job-apply.html" class="btn rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full md:w-auto p-2">Apply Now</a>
                        </div>
                    </div><!--end content-->
                    
                    <div class="group relative overflow-hidden lg:flex justify-between items-center rounded shadow hover:shadow-md dark:shadow-gray-700 transition-all duration-500 p-5">
                        <div class="flex items-center">
                            <div class="w-14 h-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/45/Logo_Lydec_2010.jpg" class="h-8 w-8" alt="">
                            </div>
                            <a href="job-detail-three.html" class="text-lg hover:text-emerald-600 font-semibold transition-all duration-500 ms-3 min-w-[150px]">Electricien</a>
                        </div>

                        <div class="lg:block flex justify-between lg:mt-0 mt-4">
                            <span class="block"><span class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">Remote</span></span>
                            <span class="block text-slate-400 text-sm md:mt-1 mt-0"><i class="uil uil-clock"></i> 20th Feb 2023</span>
                        </div>

                        <div class="lg:block flex justify-between lg:mt-0 mt-2">
                            <span class="text-emerald-600 bg-emerald-600/10 p-2 rounded-full"><i class="uil uil-map-marker"></i> Casablanca</span>
                        </div>


                        <div class="lg:mt-0 mt-4">
                            <a href="job-apply.html" class="btn rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full md:w-auto p-2">Apply Now</a>
                        </div>
                    </div><!--end content-->

                </div><!--end grid-->

                <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
                    <div class="md:col-span-12 text-center">
                        <nav aria-label="Page navigation example">
                            <ul class="inline-flex items-center -space-x-px">
                                <li>
                                    <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-s-3xl hover:text-white border border-gray-100 dark:border-gray-800 hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600">
                                        <i class="uil uil-angle-left text-[20px] rtl:rotate-180 rtl:-mt-1"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600">1</a>
                                </li>
                                <li>
                                    <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600">2</a>
                                </li>
                                <li>
                                    <a href="#" aria-current="page" class="z-10 w-[40px] h-[40px] inline-flex justify-center items-center text-white bg-emerald-600 border border-emerald-600">3</a>
                                </li>
                                <li>
                                    <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600">4</a>
                                </li>
                                <li>
                                    <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600">5</a>
                                </li>
                                <li>
                                    <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-e-3xl hover:text-white border border-gray-100 dark:border-gray-800 hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600">
                                        <i class="uil uil-angle-right text-[20px] rtl:rotate-180 rtl:-mt-1"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div><!--end col-->
                </div><!--end grid--> --}}
                <div class="grid  lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">

                        <div class="group bg-white dark:bg-slate-900 relative overflow-hidden rounded-md shadow-lg dark:shadow-gray-700 text-center p-6">
                            <img src="{{ asset('images/profile-01.jpeg') }}" class="h-20 w-20 rounded-full shadow dark:shadow-gray-700 mx-auto" alt="">
                            
                            <div class="mt-2">
                                <a href="candidate-detail.html" class="hover:text-emerald-600 font-semibold text-lg">Mari Harrington</a>
                                <p class="text-sm text-slate-400">Plombier</p>
                            </div>
    
    
                            <div class="flex items-center justify-center ml-2 my-2">
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Rating star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <p class="ml-1 text-sm font-bold text-gray-900 dark:text-white">4.95</p>
                                <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                                <a href="#" class="text-sm font-medium text-gray-900 underline hover:no-underline dark:text-white">73 reviews</a>
                            </div>
    
                            <div class="flex items-center justify-between my-6">
                                <div class="block">
                                    <span class="text-slate-400">Lieu</span>
                                    <span class="block text-sm font-semibold">Casablanca</span>
                                </div>
                                <div class="block">
                                    <span class="text-slate-400">Experience:</span>
                                    <span class="block text-sm font-semibold">2 Years</span>
                                </div>
                            </div>
    
                            <div class="mt-4">
                                <a href="{{ Route('resume.index') }}" class="btn btn-sm bg-emerald-600 hover:bg-emerald-700 border-emerald-600 dark:border-emerald-600 text-white rounded-md p-2">Profile</a>
                            </div>
                            
                            <span class="absolute top-[10px] end-4">
                                <a href="javascript:void(0)" class="text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600 text-2xl"><i class="mdi mdi-heart"></i></a>
                            </span>
                        </div><!--end content-->

                        <div class="group bg-white dark:bg-slate-900 relative overflow-hidden rounded-md shadow-lg dark:shadow-gray-700 text-center p-6">
                            <img src="{{ asset('images/profile-02.jpeg') }}" class="h-20 w-20 rounded-full shadow dark:shadow-gray-700 mx-auto" alt="">
                            
                            <div class="mt-2">
                                <a href="candidate-detail.html" class="hover:text-emerald-600 font-semibold text-lg">Mari Harrington</a>
                                <p class="text-sm text-slate-400">Menuisier</p>
                            </div>
    
    
                            <div class="flex items-center justify-center ml-2 my-2">
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Rating star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <p class="ml-1 text-sm font-bold text-gray-900 dark:text-white">4.95</p>
                                <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                                <a href="#" class="text-sm font-medium text-gray-900 underline hover:no-underline dark:text-white">73 reviews</a>
                            </div>
    
                            <div class="flex items-center space-y-2 justify-between my-6">
                                <div class="block">
                                    <span class="text-slate-400">Lieu</span>
                                    <span class="block text-sm font-semibold">Casablanca</span>
                                </div>
                                <div class="block">
                                    <span class="text-slate-400">Experience:</span>
                                    <span class="block text-sm font-semibold">2 Years</span>
                                </div>
                            </div>
    
                            <div class="mt-4">
                                <a href="{{ Route('resume.index') }}" class="btn btn-sm bg-emerald-600 hover:bg-emerald-700 border-emerald-600 dark:border-emerald-600 text-white rounded-md p-2">Profile</a>
                            </div>
                            
                            <span class="absolute top-[10px] end-4">
                                <a href="javascript:void(0)" class="text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600 text-2xl"><i class="mdi mdi-heart"></i></a>
                            </span>
                        </div><!--end content-->

                        <div class="group bg-white dark:bg-slate-900 relative overflow-hidden rounded-md shadow-lg dark:shadow-gray-700 text-center p-6">
                            <img src="{{ asset('images/profile-03.jpeg') }}" class="h-20 w-20 rounded-full shadow dark:shadow-gray-700 mx-auto" alt="">
                            
                            <div class="mt-2">
                                <a href="candidate-detail.html" class="hover:text-emerald-600 font-semibold text-lg">Mari Harrington</a>
                                <p class="text-sm text-slate-400">Forgeron</p>
                            </div>
    
    
                            <div class="flex items-center justify-center ml-2 my-2">
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Rating star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <p class="ml-1 text-sm font-bold text-gray-900 dark:text-white">4.95</p>
                                <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                                <a href="#" class="text-sm font-medium text-gray-900 underline hover:no-underline dark:text-white">73 reviews</a>
                            </div>
    
                            <div class="flex items-center justify-between my-6">
                                <div class="block">
                                    <span class="text-slate-400">Lieu</span>
                                    <span class="block text-sm font-semibold">Casablanca</span>
                                </div>
                                <div class="block">
                                    <span class="text-slate-400">Experience:</span>
                                    <span class="block text-sm font-semibold">2 Years</span>
                                </div>
                            </div>
    
                            <div class="mt-4">
                                <a href="{{ Route('resume.index') }}" class="btn btn-sm bg-emerald-600 hover:bg-emerald-700 border-emerald-600 dark:border-emerald-600 text-white rounded-md p-2">Profile</a>
                            </div>
                            
    
                        </div><!--end content-->

                        <div class="group bg-white dark:bg-slate-900 relative overflow-hidden rounded-md shadow-lg dark:shadow-gray-700 text-center p-6">
                            <img src="{{ asset('images/profile-04.jpeg') }}" class="h-20 w-20 rounded-full shadow dark:shadow-gray-700 mx-auto" alt="">
                            
                            <div class="mt-2">
                                <a href="candidate-detail.html" class="hover:text-emerald-600 font-semibold text-lg">Mari Harrington</a>
                                <p class="text-sm text-slate-400">Electricien</p>
                            </div>
    
    
                            <div class="flex items-center justify-center ml-2 my-2">
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Rating star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <p class="ml-1 text-sm font-bold text-gray-900 dark:text-white">4.95</p>
                                <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                                <a href="#" class="text-sm font-medium text-gray-900 underline hover:no-underline dark:text-white">73 reviews</a>
                            </div>
    
                            <div class="flex items-center justify-between my-6">
                                <div class="block">
                                    <span class="text-slate-400">Lieu</span>
                                    <span class="block text-sm font-semibold">Casablanca</span>
                                </div>
                                <div class="block">
                                    <span class="text-slate-400">Experience:</span>
                                    <span class="block text-sm font-semibold">2 Years</span>
                                </div>
                            </div>
    
                            <div class="mt-4">
                                <a href="{{ Route('resume.index') }}" class="btn btn-sm bg-emerald-600 hover:bg-emerald-700 border-emerald-600 dark:border-emerald-600 text-white rounded-md p-2">Profile</a>
                            </div>
                            
                        </div><!--end content-->
                        <div class="group bg-white dark:bg-slate-900 relative overflow-hidden rounded-md shadow-lg dark:shadow-gray-700 text-center p-6">
                            <img src="{{ asset('images/profile-01.jpeg') }}" class="h-20 w-20 rounded-full shadow dark:shadow-gray-700 mx-auto" alt="">
                            
                            <div class="mt-2">
                                <a href="candidate-detail.html" class="hover:text-emerald-600 font-semibold text-lg">Mari Harrington</a>
                                <p class="text-sm text-slate-400">Plombier</p>
                            </div>
    
    
                            <div class="flex items-center justify-center ml-2 my-2">
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Rating star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <p class="ml-1 text-sm font-bold text-gray-900 dark:text-white">4.95</p>
                                <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                                <a href="#" class="text-sm font-medium text-gray-900 underline hover:no-underline dark:text-white">73 reviews</a>
                            </div>
    
                            <div class="flex items-center justify-between my-6">
                                <div class="block">
                                    <span class="text-slate-400">Lieu</span>
                                    <span class="block text-sm font-semibold">Casablanca</span>
                                </div>
                                <div class="block">
                                    <span class="text-slate-400">Experience:</span>
                                    <span class="block text-sm font-semibold">2 Years</span>
                                </div>
                            </div>
    
                            <div class="mt-4">
                                <a href="{{ Route('resume.index') }}" class="btn btn-sm bg-emerald-600 hover:bg-emerald-700 border-emerald-600 dark:border-emerald-600 text-white rounded-md p-2">Profile</a>
                            </div>
                            
                            <span class="absolute top-[10px] end-4">
                                <a href="javascript:void(0)" class="text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600 text-2xl"><i class="mdi mdi-heart"></i></a>
                            </span>
                        </div><!--end content-->

                        <div class="group bg-white dark:bg-slate-900 relative overflow-hidden rounded-md shadow-lg dark:shadow-gray-700 text-center p-6">
                            <img src="{{ asset('images/profile-02.jpeg') }}" class="h-20 w-20 rounded-full shadow dark:shadow-gray-700 mx-auto" alt="">
                            
                            <div class="mt-2">
                                <a href="candidate-detail.html" class="hover:text-emerald-600 font-semibold text-lg">Mari Harrington</a>
                                <p class="text-sm text-slate-400">Menuisier</p>
                            </div>
    
    
                            <div class="flex items-center justify-center ml-2 my-2">
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Rating star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <p class="ml-1 text-sm font-bold text-gray-900 dark:text-white">4.95</p>
                                <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                                <a href="#" class="text-sm font-medium text-gray-900 underline hover:no-underline dark:text-white">73 reviews</a>
                            </div>
    
                            <div class="flex items-center space-y-2 justify-between my-6">
                                <div class="block">
                                    <span class="text-slate-400">Lieu</span>
                                    <span class="block text-sm font-semibold">Casablanca</span>
                                </div>
                                <div class="block">
                                    <span class="text-slate-400">Experience:</span>
                                    <span class="block text-sm font-semibold">2 Years</span>
                                </div>
                            </div>
    
                            <div class="mt-4">
                                <a href="{{ Route('resume.index') }}" class="btn btn-sm bg-emerald-600 hover:bg-emerald-700 border-emerald-600 dark:border-emerald-600 text-white rounded-md p-2">Profile</a>
                            </div>
                            
                            <span class="absolute top-[10px] end-4">
                                <a href="javascript:void(0)" class="text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600 text-2xl"><i class="mdi mdi-heart"></i></a>
                            </span>
                        </div><!--end content-->

                        <div class="group bg-white dark:bg-slate-900 relative overflow-hidden rounded-md shadow-lg dark:shadow-gray-700 text-center p-6">
                            <img src="{{ asset('images/profile-03.jpeg') }}" class="h-20 w-20 rounded-full shadow dark:shadow-gray-700 mx-auto" alt="">
                            
                            <div class="mt-2">
                                <a href="candidate-detail.html" class="hover:text-emerald-600 font-semibold text-lg">Mari Harrington</a>
                                <p class="text-sm text-slate-400">Forgeron</p>
                            </div>
    
    
                            <div class="flex items-center justify-center ml-2 my-2">
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Rating star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <p class="ml-1 text-sm font-bold text-gray-900 dark:text-white">4.95</p>
                                <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                                <a href="#" class="text-sm font-medium text-gray-900 underline hover:no-underline dark:text-white">73 reviews</a>
                            </div>
    
                            <div class="flex items-center justify-between my-6">
                                <div class="block">
                                    <span class="text-slate-400">Lieu</span>
                                    <span class="block text-sm font-semibold">Casablanca</span>
                                </div>
                                <div class="block">
                                    <span class="text-slate-400">Experience:</span>
                                    <span class="block text-sm font-semibold">2 Years</span>
                                </div>
                            </div>
    
                            <div class="mt-4">
                                <a href="{{ Route('resume.index') }}" class="btn btn-sm bg-emerald-600 hover:bg-emerald-700 border-emerald-600 dark:border-emerald-600 text-white rounded-md p-2">Profile</a>
                            </div>
                            
    
                        </div><!--end content-->

                        <div class="group bg-white dark:bg-slate-900 relative overflow-hidden rounded-md shadow-lg dark:shadow-gray-700 text-center p-6">
                            <img src="{{ asset('images/profile-04.jpeg') }}" class="h-20 w-20 rounded-full shadow dark:shadow-gray-700 mx-auto" alt="">
                            
                            <div class="mt-2">
                                <a href="candidate-detail.html" class="hover:text-emerald-600 font-semibold text-lg">Mari Harrington</a>
                                <p class="text-sm text-slate-400">Electricien</p>
                            </div>
    
    
                            <div class="flex items-center justify-center ml-2 my-2">
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Rating star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <p class="ml-1 text-sm font-bold text-gray-900 dark:text-white">4.95</p>
                                <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                                <a href="#" class="text-sm font-medium text-gray-900 underline hover:no-underline dark:text-white">73 reviews</a>
                            </div>
    
                            <div class="flex items-center justify-between my-6">
                                <div class="block">
                                    <span class="text-slate-400">Lieu</span>
                                    <span class="block text-sm font-semibold">Casablanca</span>
                                </div>
                                <div class="block">
                                    <span class="text-slate-400">Experience:</span>
                                    <span class="block text-sm font-semibold">2 Years</span>
                                </div>
                            </div>
    
                            <div class="mt-4">
                                <a href="{{ Route('resume.index') }}" class="btn btn-sm bg-emerald-600 hover:bg-emerald-700 border-emerald-600 dark:border-emerald-600 text-white rounded-md p-2">Profile</a>
                            </div>
                            
                        </div><!--end content-->

                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->


</section>
@include('components.scrollUp')
@include('components.footer')
@endsection