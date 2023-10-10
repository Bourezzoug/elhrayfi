@extends('layout.frontend')
@section('title', 'Elhrayfi.ma - ')
@section('meta_description', 'description')
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
                    <form action="{{ Route('artisan.liste') }}" method="GET">
                        <div class="grid grid-cols-1 gap-3">
                            <div class="my-2">
                                <label for="searchname" class="font-semibold">Nom d'artisan</label>
                                <div class="relative mt-2">
                                    <i class="fa-solid fa-magnifying-glass absolute left-0 top-1/2 -translate-y-1/2 pl-1.5 text-gray-300"></i>
                                    <input name="name" id="searchname" type="text" class=" form-input border border-slate-100 w-full h-[2.5rem] rounded pl-7 py-2 text-[14px]" placeholder="Nom">
                                </div>
                            </div>
                            
                            <div class="my-2">
                                <label class="font-semibold">Categories</label>
                                <select name="catégorie"  class="form-select form-input border border-slate-100 block w-full mt-1 h-[2.5rem] rounded px-2 py-2 text-[14px]">
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
                                <select name="ville" class="form-select form-input border border-slate-100 block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px]">
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

                <div class="grid  lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">



                        @forelse ($artisans as $artisan)
                        <div class="group bg-white relative overflow-hidden rounded-md shadow-lg text-center p-6">
                            <img src="http://127.0.0.1:8000/storage/{{ $artisan->profile_photo_path }}" class="h-20 w-20 rounded-full shadow mx-auto" alt="">
                            
                            <div class="mt-2">
                                <a href="candidate-detail.html" class="hover:text-emerald-600 font-semibold text-lg">{{ $artisan->name }}</a>
                                <p class="text-sm text-slate-400">{{ $artisan->artisan_job_category }}</p>
                            </div>
    
    
                            <div class="flex flex-col items-center justify-center ml-2 mb-4 space-y-3">
                                <div class="block">
                                    <span class="text-slate-400">Lieu</span>
                                    <span class="block text-sm font-semibold">{{ $artisan->ville }}</span>
                                </div>
                                <div class="block">
                                    <span class="text-slate-400">Experience:</span>
                                    <span class="block text-sm font-semibold">{{ $artisan->artisan_experience }}</span>
                                </div>
                            </div>
    

    
                            <div class="mt-4">
                                <a href="/artisan/{{ $artisan->name }}" class="btn btn-sm bg-emerald-600 hover:bg-emerald-700 border-emerald-600 text-white rounded-md p-2">Profile</a>
                            </div>
                            
                        </div><!--end content-->
                        @empty
                            
                        @endforelse

                </div>
                <div class="pt-10">
                    {{ $artisans->links() }} 
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->


</section>
@include('components.scrollUp')
@include('components.footer')
@endsection