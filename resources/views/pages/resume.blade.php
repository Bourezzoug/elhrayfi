@extends('layout.frontend')
@section('title', 'Elhrayfi.ma - ')
@section('meta_description', 'description')
@section('content')
@include('components.header')
<section class="relative table w-full py-40 bg-center bg-no-repeat bg-cover" style="background-image: url('http://127.0.0.1:8000/storage/{{ $artisan->cover_photo }}');height:320px">
    <div class="absolute top-0 h-full w-full left-0 inset-0 bg-emerald-700" style="opacity: .6"></div>
</section>
<section class="container mx-auto px-6 relative mb:pb-24 pb-16 -mt-16 z-1">
    <div class="container mt-5">
        <div class="grid grid-cols-1">
            <div class="md:flex justify-between items-center shadow dark:shadow-gray-700 rounded-md p-6 bg-white dark:bg-slate-900">
                <div class="flex items-center">
                    <img src="http://127.0.0.1:8000/storage/{{ $artisan->profile_photo_path }}" class="h-24 w-24  shadow dark:shadow-gray-700 rounded-full bg-slate-50 dark:bg-slate-800" alt="">

                    <div class="ms-4">
                        <h5 class="text-xl font-bold">{{ $artisan->name }}</h5>
                        <h6 class="text-base text-slate-400"><i class="uil uil-map-marker"></i> {{ $artisan->ville }}</h6>
                    </div>
                </div>
                @guest
                    <a href="{{ Route('login') }}" name="send" class="btn bg-emerald-600 hover:bg-emerald-700 text-white rounded-md p-2 mt-2">Contactez</a>
                @endguest
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section>
<section class="relative md:pb-24 pb-16">
    <div class="container mx-auto p-6">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-7">
                <h5 class="text-xl font-semibold">Description</h5>
                <p class="text-slate-400 mt-4">{{ $artisan->description }}</p>
                
                @if (!$artisan->educations->isEmpty())
                    <h4 class="mt-6 text-xl font-semibold">Education :</h4>
                @foreach ($artisan->educations as $education)

                    <div class="flex mt-6">
                        <div class="text-slate-400 font-semibold min-w-[80px] text-center">
                            {{ $education->date_debut }}-{{ substr($education->date_fin, -2) }}
                        </div>
                
                        <div class="ms-4">
                            <h5 class="text-lg font-medium mb-0">{{ $education->diplome }}</h5>
                            <span class="text-slate-400 company-university">{{ $education->school_name }} - {{ $education->school_city }}</span>
                            {{-- <p class="text-slate-400 mt-2 mb-0">{{ $experience->description }}</p> --}}
                        </div>
                    </div>
                @endforeach
                @endif

                @if (!$artisan->experiences->isEmpty())
                    <h4 class="mt-6 text-xl font-semibold">Experience :</h4>

                    @foreach ($artisan->experiences as $experience)
                    <div class="flex mt-6">
                        <div class="text-slate-400 font-semibold min-w-[80px] text-center">
                            {{ $experience->date_debut }}-{{ substr($experience->date_fin, -2) }}
                        </div>
                
                        <div class="ms-4">
                            <h5 class="text-lg font-medium mb-0">{{ $experience->titre }}</h5>
                            <span class="text-slate-400 company-university">{{ $experience->company_name }} - {{ $experience->company_city }}</span>
                            <p class="text-slate-400 mt-2 mb-0">{{ $experience->description }}</p>
                        </div>
                    </div>
                    @endforeach
                @endif

                

                
                {{-- <div class="flex mt-6">
                    <div class="text-slate-400 font-semibold min-w-[80px] text-center">
                        2017-19
                    </div>

                    <div class="ms-4">
                        <h5 class="text-lg font-medium mb-0">Peintre de batiment</h5>
                        <span class="text-slate-400 company-university">Astral - Agadir</span>
                        <p class="text-slate-400 mt-2 mb-0">It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text. </p>
                    </div>
                </div> --}}
                @if ($artisan->artisan_portfolio)
                <div class=" py-6 mt-6">
                    <h5 class="text-xl font-semibold mb-6">Portfolio:</h5>


                    <div class="grid grid-cols-12 gap-5">
                    @forelse (explode(',', $artisan->artisan_portfolio) as $image)
                        <div class="col-span-4">
                            <img src="http://127.0.0.1:8000/storage/{{ $image }}" class="h-40 w-full object-cover" alt="">
                        </div>
                    @empty
                        <!-- Handle the case when no images are available -->
                    @endforelse
                    
                    </div>


                </div>
                @endif
                @if(Auth::check())
                <div class="py-6 my-6">
                    <form method="post" name="myForm" id="myForm" class="mt-4" onsubmit="return validateForm()">
                        <p class="mb-0" id="error-msg"></p>
                        <h5 class="text-xl font-semibold mb-4">Message:</h5>
                        <div class="grid grid-cols-12 gap-2">

                            <div class="col-span-12">
                                {{-- <label for="comments" class="font-semibold">Your Comment:</label> --}}
                                <textarea name="comments" id="comments" class="h-32 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-2" placeholder="Message :"></textarea>
                            </div>
                        </div>
                        <button type="submit" id="submit" name="send" class="btn bg-emerald-600 hover:bg-emerald-700 text-white rounded-md p-2 mt-2">Contactez</button>
                    </form>
                </div>
                @endif
            </div><!--end col-->

            <div class="lg:col-span-4 md:col-span-5">
                <div class="bg-slate-50 rounded-md shadow p-6 sticky top-20">
                    <h5 class="text-lg font-semibold">Personal Detail:</h5>
                    <ul class="list-none mt-4">
                        <li class="flex justify-between mt-3 items-center font-medium">
                            <span><i class="fa-regular fa-calendar feather feather-phone h-4 w-4 text-slate-400 me-3 inline"></i><span class="text-slate-400 me-3">Date de naissance :</span></span>
                            
                            <span>31st Dec, 1996</span>
                        </li>
                        <li class="flex justify-between mt-3 items-center font-medium">
                            <span><i class="fa-solid fa-house feather feather-phone h-4 w-4 text-slate-400 me-3 inline"></i><span class="text-slate-400 me-3">Address :</span></span>
                            
                            <span>{{ $artisan->addresse }}</span>
                        </li>
                        <li class="flex justify-between mt-3 items-center font-medium">
                            <span><i class="fa-solid fa-location-dot feather feather-phone h-4 w-4 text-slate-400 me-3 inline"></i><span class="text-slate-400 me-3">Ville :</span></span>
                            
                            <span>{{ $artisan->ville }}</span>
                        </li>
                        {{-- <li class="flex justify-between mt-3 items-center font-medium">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe h-4 w-4 text-slate-400 me-3 inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg><span class="text-slate-400 me-3">Country :</span></span>
                            
                            <span>Maroc</span>
                        </li> --}}
                        <li class="flex justify-between mt-3 items-center font-medium">
                            {{-- <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone h-4 w-4 text-slate-400 me-3 inline"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg><span class="text-slate-400 me-3">Expérience :</span></span> --}}
                            <span><i class="fa-solid fa-briefcase feather feather-phone h-4 w-4 text-slate-400 me-3 inline"></i><span class="text-slate-400 me-3">Expérience :</span></span>
                            <span>{{ $artisan->artisan_experience }}</span>
                        </li>


                        <li class="mt-3 w-full  py-4 rounded-md ">
                            <a href="http://127.0.0.1:8000/storage/{{ $artisan->artisan_cv }}" class="btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 text-white rounded-md w-full p-2 my-2" download=""><i class="uil uil-file-download-alt"></i> Download CV</a>
                        </li>
                    </ul>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->



</section>
@include('components.footer')
@endsection