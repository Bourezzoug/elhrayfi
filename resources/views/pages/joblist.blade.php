@extends('layout.frontend')
@section('title', 'Elhrayfi.ma - ')
@section('meta_description', 'description')
@section('content')
@include('components.header')
<section class="relative table w-full py-36 bg-[url('https://img.freepik.com/premium-vector/people-group-different-occupation-profession-set-international-labor-day-flat-banner_180264-14.jpg')] bg-top bg-no-repeat bg-cover">
    <div class="absolute inset-0 bg-emerald-900/90"></div>

    <div class="absolute text-center z-10 top-1/2 start-0 end-0 mx-3">
        <p class="inline breadcrumb-item  font-semibold duration-500 ease-in-out text-white text-4xl">Liste des travaux</p>
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
                                <label class="font-semibold">Job Types</label>
                                <div class="block mt-2">
                                    <div class="flex justify-between">
                                        <div class="inline-flex items-center mb-0">
                                            <input class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-emerald-600 focus:border-emerald-300 focus:ring focus:ring-offset-0 focus:ring-emerald-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="fulltime">
                                            <label class="form-checkbox-label text-slate-400" for="fulltime">Full Time</label>
                                        </div>

                                        <span class="bg-emerald-600/10 text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full h-5">3</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="inline-flex items-center mb-0">
                                            <input class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-emerald-600 focus:border-emerald-300 focus:ring focus:ring-offset-0 focus:ring-emerald-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="parttime">
                                            <label class="form-checkbox-label text-slate-400" for="parttime">Part Time</label>
                                        </div>

                                        <span class="bg-emerald-600/10 text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full h-5">7</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="inline-flex items-center mb-0">
                                            <input class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-emerald-600 focus:border-emerald-300 focus:ring focus:ring-offset-0 focus:ring-emerald-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="Freelancing">
                                            <label class="form-checkbox-label text-slate-400" for="Freelancing">Freelancing</label>
                                        </div>

                                        <span class="bg-emerald-600/10 text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full h-5">4</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="inline-flex items-center mb-0">
                                            <input class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-emerald-600 focus:border-emerald-300 focus:ring focus:ring-offset-0 focus:ring-emerald-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="fixedprice">
                                            <label class="form-checkbox-label text-slate-400" for="fixedprice">Fixed Price</label>
                                        </div>

                                        <span class="bg-emerald-600/10 text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full h-5">6</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="inline-flex items-center mb-0">
                                            <input class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-emerald-600 focus:border-emerald-300 focus:ring focus:ring-offset-0 focus:ring-emerald-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="Remote">
                                            <label class="form-checkbox-label text-slate-400" for="Remote">Remote</label>
                                        </div>

                                        <span class="bg-emerald-600/10 text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full h-5">7</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="inline-flex items-center mb-0">
                                            <input class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-emerald-600 focus:border-emerald-300 focus:ring focus:ring-offset-0 focus:ring-emerald-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="hourlybasis">
                                            <label class="form-checkbox-label text-slate-400" for="hourlybasis">Hourly Basis</label>
                                        </div>

                                        <span class="bg-emerald-600/10 text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full h-5">44</span>
                                    </div>
                                </div>
                            </div>
                            


                            <div class="my-2">
                                <input type="submit" class="btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md w-full py-2 cursor-pointer" value="Apply Filter">
                            </div>
                        </div>
                    </form>
                </div>
            </div><!--end col-->

            <div class="lg:col-span-8 md:col-span-6">
                <div class="grid grid-cols-1 gap-[30px]">
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
                </div><!--end grid-->
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->


</section>
@include('components.scrollUp')
@include('components.footer')
@endsection