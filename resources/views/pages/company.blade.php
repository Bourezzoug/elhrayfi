@extends('layout.frontend')
@section('title', 'Elhrayfi.ma - ')
@section('meta_description', 'description')
@include('components.header')
@section('content')
<section class="relative table w-full py-40 bg-center bg-no-repeat bg-cover" style="background-image: url('http://127.0.0.1:8000/storage/{{ $client->cover_photo }}');height:320px">
    <div class="absolute top-0 h-full w-full left-0 inset-0 bg-emerald-700" style="opacity: .6"></div>
</section>
<section class="container mx-auto px-6 relative mb:pb-24 pb-16 -mt-16 z-1">
    <div class="container mt-5">
        <div class="grid grid-cols-1">
            <div class="md:flex justify-between items-center shadow dark:shadow-gray-700 rounded-md p-6 bg-white dark:bg-slate-900">
                <div class="flex items-center">
                    <img src="http://127.0.0.1:8000/storage/{{ $client->profile_photo_path }}" class="h-20 w-20 p-3 shadow dark:shadow-gray-700 rounded-md bg-slate-50 dark:bg-slate-800" alt="">

                    <div class="ms-4">
                        <h5 class="text-xl font-bold">{{ $client->name }}</h5>
                        <h6 class="text-base text-slate-400"><i class="uil uil-map-marker"></i> {{ $client->ville }}</h6>
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


                <h5 class="text-xl font-semibold mt-6">Emploi publié par {{ $client->name }}:</h5>

                <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 mt-6">
                    @foreach($offers as $offer)
                    <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                        <div class="p-6">
                            <a href="" class="title h5 text-lg font-semibold hover:text-emerald-600">{{ $offer->catégorie }}</a>
                            <p class="text-slate-400 mt-2"><i class="fa-regular fa-clock text-emerald-600"></i> Il y'a  {{ $offer->created_at->diffForHumans(null, true) }}</p>
                
                            <div class="flex justify-between items-center mt-4">
                                <span class="bg-emerald-600/5 text-emerald-600 text-xs font-bold px-2.5 py-0.5 rounded h-5">Temps {{ $offer->type_travail }}</span>
                
                                <p class="text-slate-400"><i class="uil uil-usd-circle text-emerald-600"></i> {{ $offer->salaire_montant }} {{ $offer->salaire_type }}</p>
                            </div>
                        </div>
                
                        <div class="flex items-center justify-between p-6 border-t border-gray-100 dark:border-gray-700">
                            <div class="flex items-center ">
                                <img src="http://127.0.0.1:8000/storage/{{ $offer->client->profile_photo_path }}" class="h-12 w-12 shadow-md dark:shadow-gray-800 rounded-md p-2 bg-white dark:bg-slate-900" alt="">
                
                                <div class="ms-3">
                                    <h6 class="mb-0 font-semibold text-base">{{ $offer->client->name }}</h6>
                                    <span class="text-slate-400 text-sm">{{ $offer->client->ville }}</span>
                                </div>
                            </div>
                            @if(!Auth::check())
                                <a href="{{ Route('login') }}" name="send" class="btn bg-emerald-600 hover:bg-emerald-700 text-white rounded-md p-2 mt-2">Postulez</a>
                            @else
                                <a href="/offre/{{ $offer->id }}" name="send" class="btn bg-emerald-600 hover:bg-emerald-700 text-white rounded-md p-2 mt-2">Postulez</a>
                            @endif
                        </div>
                    </div><!--end content-->
                @endforeach
                

                </div>
                @if(Auth::check())
                @if(Auth::user()->user_type == 2)
                <div class="p-6 rounded-md shadow dark:shadow-gray-800 mt-8">
                    <h5 class="text-xl font-semibold">Votre Message:</h5>

                    <form class="mt-8">


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
                <div class="bg-slate-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-700 p-6 sticky top-20">

                    <ul class="list-none mt-4">
                        <li class="flex justify-between mt-2">
                            <span class="text-slate-400 font-medium">Nom:</span>
                            <span class="font-medium">{{ $client->name }}</span>
                        </li>


                        <li class="flex justify-between mt-2">
                            <span class="text-slate-400 font-medium">Ville:</span>
                            <span class="font-medium">{{ $client->ville }}</span>
                        </li>

                        <li class="flex justify-between mt-2">
                            <span class="text-slate-400 font-medium">Addresse:</span>
                            <span class="font-medium">{{ $client->addresse }}</span>
                        </li>


                        
                    </ul>


                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->




</section>
@include('components.footer')
@endsection