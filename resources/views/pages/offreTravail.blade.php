@extends('layout.frontend')
@section('title', 'Elhrayfi.ma - ' . {{ $offers->title }})
@section('meta_description',{!! Illuminate\Support\Str::limit(strip_tags($offres->description), 220, ' [...]') !!})
@include('components.header')
@section('content')
<section class="relative table w-full py-40 bg-center bg-no-repeat bg-cover" style="background-image: url('http://127.0.0.1:8000/storage/{{ $offers->client->cover_photo }}');height:320px">
    <div class="absolute top-0 h-full w-full left-0 inset-0 bg-emerald-700" style="opacity: .6"></div>
</section>
<section class="container mx-auto px-6 relative mb:pb-24 pb-16 -mt-16 z-1">
    <div class="container mt-5">
        <div class="grid grid-cols-1">
            <div class="md:flex justify-between items-center shadow  rounded-md p-6 bg-white ">
                <div class="flex items-center">
                    <img src="http://127.0.0.1:8000/storage/{{ $offers->client->profile_photo_path }}" class="h-20 w-20 p-3 shadow  rounded-md bg-slate-50 " alt="">

                    <div class="ms-4">
                        <h5 class="text-xl font-bold">{{ $offers->client->name }}</h5>
                        <h6 class="text-base text-slate-400"><i class="uil uil-map-marker"></i> {{ $offers->client->ville }}</h6>
                    </div>
                </div>
                @guest
                    <a href="{{ Route('login') }}" name="send" class="btn bg-emerald-600 hover:bg-emerald-700 text-white rounded-md p-2 mt-2">Contactez</a>
                @endguest

            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container mt-12">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-7">
                <h1 class="text-3xl mb-5 font-semibold">{{ $offers->title }}</h1>
                <img src="{{ $offers->image_offre }}" class="w-full" alt="">
                <h5 class="text-xl font-semibold my-5">Description</h5>
                <div class="text-gray-600 mt-4 text-justify text-lg">{!! $offers->description !!}</div>



                @if(Auth::check())
                @if(Auth::user()->user_type == 2)
                <div class="p-6 rounded-md shadow  mt-8">
                    <h5 class="text-xl font-semibold">Contactez:</h5>

                    <form action="{{ Route('contact.client') }}" method="POST" class="mt-8">
                        @csrf
                        <input type="hidden" name="job_offer_id" value="{{ $offers->id }}"> 
                        <div class="grid grid-cols-1">
                            <div class="mb-5">
                                <div class="text-left">
                                    {{-- <label for="comments" class="font-semibold">Your Comment:</label> --}}
                                    <div class="form-icon relative mt-2">
                                        <textarea name="comments" id="comments" class="h-32 w-full rounded border-gray-300 px-2 py-2 text-[14px] shadow-sm mt-2" placeholder="Message :"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" id="submit" name="send" class="btn bg-emerald-600 hover:bg-emerald-700 text-white rounded-md p-2 mt-2">Send Message</button>
                    </form>
                </div>
                @endif
                @endif
            </div><!--end col-->
            
            <div class="lg:col-span-4 md:col-span-5">
                <div class="bg-slate-50  rounded-md shadow  p-6 sticky top-20">

                    <ul class="list-none mt-4">

                        <li class="flex justify-between mt-2">
                            <span class="text-slate-400 font-medium">Ville:</span>
                            <span class="font-medium">{{ $offers->ville }}</span>
                        </li>
                        <li class="flex justify-between mt-2">
                            <span class="text-slate-400 font-medium">Addresse:</span>
                            <span class="font-medium">{{ $offers->address }}</span>
                        </li>


                        <li class="flex justify-between mt-2">
                            <span class="text-slate-400 font-medium">Salaire:</span>
                            <span class="font-medium">{{ $offers->salaire_montant }} <sup class="text-[10px] text-gray-500">DHS</sup></span>
                        </li>

                    </ul>


                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->




</section>
@include('components.footer')
@endsection