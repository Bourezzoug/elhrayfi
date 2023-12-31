@extends('layout.frontend')
@section('title', 'Elhrayfi.ma - Listes des offres')
@section('meta_description', 'Découvrez les différents offres de la plateforme Elhrayfi')
@section('content')
@include('components.header')
<section class="relative table w-full py-40 bg-top bg-no-repeat bg-cover" style="background-image: url('https://www.fairwork.gov.au/sites/default/files/styles/banner/public/2022-08/young-workers-banner2.png?itok=4yxB5D0e');height:320px">
    <div class="absolute top-0 h-full w-full left-0 inset-0 bg-emerald-700" style="opacity: .6"></div>
</section>

<section class="relative md:py-24 py-16 ">
    <div class="container mx-auto p-6">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-4 md:col-span-6 ">
                <div class="shadow p-6 rounded-md bg-white sticky top-16">
                    <form action="{{ Route('joblist.index') }}" method="GET">
                        <div class="grid grid-cols-1 gap-3">
                            <div class="my-2">
                                <label for="searchname" class="font-semibold">Nom d'Entreprise</label>
                                <div class="relative mt-2">
                                    <i class="fa-solid fa-magnifying-glass absolute left-0 top-1/2 -translate-y-1/2 pl-1.5 text-gray-300"></i>
                                    <input name="name" id="searchname" type="text" class=" form-input border border-slate-100 w-full h-[2.5rem] rounded pl-7 py-2 text-[14px]" placeholder="Search">
                                </div>
                            </div>
                            
                            <div class="my-2">
                                <label class="font-semibold">Categories</label>
                                <select name="catégorie" class="form-select form-input border border-slate-100 block w-full mt-1 h-[2.5rem] rounded px-2 py-2 text-[14px]">
                                    <option value="" readonly="true" hidden="true"
                                    selected>Catégorie que vous cherchez</option>
                                    <option value="Plombier">Plombier</option>
                                    <option value="Electricien">Electricien</option>
                                    <option value="Jardinier">Jardinier</option>
                                    <option value="Mécanicien">Mécanicien</option>
                                    <option value="Menuisier">Menuisier</option>
                                    <option value="Peintre">Peintre</option>
                                    <option value="Constructeur">Constructeur</option>
                                    <option value="Forgeron">Forgeron</option>
                                    <option value="Autres">Autres</option>
                                </select>
                            </div>

                            <div class="my-2">
                                <label class="font-semibold">Location</label>
                                <select name="ville"  class="form-select form-input border border-slate-100 block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px]">
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
                <div class="grid grid-cols-2 gap-[30px]">
                    @forelse ($offres as $offre)
                    <div class="card w-[25rem] col-span-1 bg-white shadow hover:shadow-md hover:-mt-2 rounded-md transition-all duration-500">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center py-2 px-4">
                                <div class="w-14 h-14 min-w-[56px] flex items-center justify-center bg-white shadow rounded-md">
                                    <a href="/company/{{ $offre->client->name }}">
                                        <img src="http://127.0.0.1:8000/storage/{{ $offre->client->profile_photo_path }}" class="h-14 w-14 rounded" alt="">
                                    </a>
                                </div>
            
                                <div class="ms-3 flex flex-col">
                                    <span class="inline-block text-base text-gray-600">{{ $offre->client->name }}</span>
                                    <span class="inline-block text-sm text-slate-400">{{ $offre->formattedTime }}</span>
                                </div>
                            </div>
                            <div class="mr-2">
                                <a href="/offre/{{ $offre->id }}">
                                    <i class="fa-solid fa-eye rounded-full p-3 border border-emerald-600 text-emerald-600 hover:text-white hover:bg-emerald-600 transition-all"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-title">
                            <h3 class="inline-block text-lg py-5 px-4  font-medium">{{ $offre->title }}</h3>
                        </div>
                        <div class="card-img">
                            <img src="{{ $offre->image_offre }}" class="w-full h-[300px] object-cover" alt="">
                        </div>
                        <div class="card-body inline-block text-base text-gray-600 py-3 px-4">
                            {!! \Illuminate\Support\Str::words($offre->description, 20, '...') !!}
                        </div>
                    </div>
                    @empty
                        
                    @endforelse
                </div><!--end grid-->
                <div class="pt-10">
                    {{ $offres->links() }} 
                </div>


            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->


</section>
@include('components.scrollUp')
@include('components.footer')
@endsection