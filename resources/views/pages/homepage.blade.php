@extends('layout.frontend')
@section('title', 'Elhrayfi.ma - ')
@section('meta_description', 'description')
@section('content')
@include('components.header')
@guest
<section id="hero" class="w-full md:h-screen bg-cover bg-center relative">
    <div class="flex flex-col items-center justify-center h-full space-y-10">
        <div>
            <h1 class="text-6xl text-white font-semibold">Découvrez <span class="text-emerald-600">Elhrayfi</span> qui vous convient</h1>
            <p class="text-xl text-white font-normal text-center">Emplois, opportunités professionnelles et carrières futures.</p>
        </div>
        <form action="{{ Route('artisan.liste') }}" method="GET" class="grid grid-cols-10 bg-black w-10/12 h-20 rounded-full overflow-hidden content relative" style=" border: 10px solid rgba(255, 255, 255, 0.5)">
            <div class="col-span-3 relative">
                <input name="name" type="text" placeholder="Nom" class="h-full pl-10 w-full border-none">

                <i class="fa-solid fa-magnifying-glass  text-emerald-600 absolute right-5 top-1/2 -translate-y-1/2 text-xl icon"></i>

            </div>
            <div class="col-span-3 relative">
                <select name="ville" id="" class="h-full pl-10 w-full border border-[#eee]">
                    <option value="" readonly="true" hidden="true"
                    selected>Choisir votre ville</option>
                    @foreach ($cities as $ville)
                    <option value="{{ $ville['ville'] }}">{{ $ville['ville'] }}</option>
                    @endforeach
                </select>
                <i class="fa-solid fa-location-dot text-emerald-600  absolute right-[13px] top-1/2 -translate-y-1/2 text-xl icon"></i>
            </div>
            <div class="col-span-3 relative">
                {{-- <input type="text" placeholder="Categorie" class="h-full pl-10 w-full border-none"> --}}
                <x-select name="catégorie" class="h-full pl-10 w-full border-none rounded-none">
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
                </x-select>
                <i class="fa-solid fa-tag  text-emerald-600 absolute right-2.5 top-1/2 -translate-y-1/2 text-xl icon"></i>
            </div>
            {{-- <div class="col-span-1 flex items-center justify-center bg-emerald-600"> --}}
                <button aria-label="send" class="text-white col-span-1 flex items-center justify-center bg-emerald-600">Envoyer</button>
            {{-- </div> --}}
        </form>
        <div class="md:pt-10">
            <a href="{{ Route('register') }}" class="bg-emerald-600 text-white py-3 px-4 rounded text-xl hover:scale-110 transition-transform inline-block">Créer votre profil</a>
        </div>
        
    </div>
</section>
@endguest
@if(Auth::check())
@if (Auth::user()->user_type == 3)
<section id="hero" class="w-full md:h-screen bg-cover bg-center relative">
    <div class="flex flex-col items-center justify-center h-full space-y-10">
        <div>
            <h1 class="text-6xl text-white font-semibold">Découvrez <span class="text-emerald-600">Elhrayfi</span> qui vous convient</h1>
            <p class="text-xl text-white font-normal text-center">Emplois, opportunités professionnelles et carrières futures.</p>
        </div>
        <form action="{{ Route('artisan.liste') }}" method="GET" class="grid grid-cols-10 bg-black w-10/12 h-20 rounded-full overflow-hidden content relative" style=" border: 10px solid rgba(255, 255, 255, 0.5)">
            <div class="col-span-3 relative">
                <input name="name" type="text" placeholder="Nom" class="h-full pl-10 w-full border-none">

                <i class="fa-solid fa-magnifying-glass  text-emerald-600 absolute right-5 top-1/2 -translate-y-1/2 text-xl icon"></i>

            </div>
            <div class="col-span-3 relative">
                <select name="ville" id="" class="h-full pl-10 w-full border border-[#eee]">
                    <option value="" readonly="true" hidden="true"
                    selected>Choisir votre ville</option>
                    @foreach ($cities as $ville)
                    <option value="{{ $ville['ville'] }}">{{ $ville['ville'] }}</option>
                    @endforeach
                </select>
                <i class="fa-solid fa-location-dot text-emerald-600  absolute right-[13px] top-1/2 -translate-y-1/2 text-xl icon"></i>
            </div>
            <div class="col-span-3 relative">
                {{-- <input type="text" placeholder="Categorie" class="h-full pl-10 w-full border-none"> --}}
                <x-select name="catégorie" class="h-full pl-10 w-full border-none rounded-none">
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
                </x-select>
                <i class="fa-solid fa-tag  text-emerald-600 absolute right-2.5 top-1/2 -translate-y-1/2 text-xl icon"></i>
            </div>
            {{-- <div class="col-span-1 flex items-center justify-center bg-emerald-600"> --}}
                <button aria-label="send" class="text-white col-span-1 flex items-center justify-center bg-emerald-600">Envoyer</button>
            {{-- </div> --}}
        </form>
        <div class="md:pt-10">
            <a href="{{ Route('register') }}" class="bg-emerald-600 text-white py-3 px-4 rounded text-xl hover:scale-110 transition-transform inline-block">Créer votre profil</a>
        </div>
        
    </div>
</section>
@else
<section id="hero" class="w-full md:h-screen bg-cover bg-center relative">
    <div class="flex flex-col items-center justify-center h-full space-y-10">
        <div>
            <h1 class="text-6xl text-white font-semibold">Découvrez <span class="text-emerald-600">L'offre</span> qui vous convient</h1>
            <p class="text-xl text-white font-normal text-center">Emplois, opportunités professionnelles et carrières futures.</p>
        </div>
        <form action="{{ Route('joblist.index') }}" method="GET" class="grid grid-cols-10 bg-black w-10/12 h-20 rounded-full overflow-hidden content relative" style=" border: 10px solid rgba(255, 255, 255, 0.5)">
            <div class="col-span-3 relative">
                <input name="name" type="text" placeholder="Nom" class="h-full pl-10 w-full border-none">

                <i class="fa-solid fa-magnifying-glass  text-emerald-600 absolute right-5 top-1/2 -translate-y-1/2 text-xl icon"></i>

            </div>
            <div class="col-span-3 relative">
                <select name="ville" id="" class="h-full pl-10 w-full border border-[#eee]">
                    <option value="" readonly="true" hidden="true"
                    selected>Choisir votre ville</option>
                    @foreach ($cities as $ville)
                    <option value="{{ $ville['ville'] }}">{{ $ville['ville'] }}</option>
                    @endforeach
                </select>
                <i class="fa-solid fa-location-dot text-emerald-600  absolute right-[13px] top-1/2 -translate-y-1/2 text-xl icon"></i>
            </div>
            <div class="col-span-3 relative">
                {{-- <input type="text" placeholder="Categorie" class="h-full pl-10 w-full border-none"> --}}
                <x-select name="catégorie" class="h-full pl-10 w-full border-none rounded-none">
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
                </x-select>
                <i class="fa-solid fa-tag  text-emerald-600 absolute right-2.5 top-1/2 -translate-y-1/2 text-xl icon"></i>
            </div>
            {{-- <div class="col-span-1 flex items-center justify-center bg-emerald-600"> --}}
                <button aria-label="send" class="text-white col-span-1 flex items-center justify-center bg-emerald-600">Envoyer</button>
            {{-- </div> --}}
        </form>
        <div class="md:pt-10">
            <a href="{{ Route('register') }}" class="bg-emerald-600 text-white py-3 px-4 rounded text-xl hover:scale-110 transition-transform inline-block">Créer votre profil</a>
        </div>
        
    </div>
</section>
@endif
@endif

<section id="features" class="relative md:py-24 py-16">
    <div class="container mx-auto p-6">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Comment ça marche?</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Elhrayfi : Votre parcours vers le succès en 3 étapes simples pour créer votre compte</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-6 gap-[30px]">
            <div class="p-6 hover:shadow-xl hover:shadow-gray-100 transition duration-500 rounded-2xl mt-6 text-center">
                <div class="w-14 h-14 bg-emerald-600/5 text-emerald-600 rounded-xl text-2xl flex align-middle justify-center items-center mx-auto shadow-sm">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="content mt-7">
                    <a href="" class="title h5 text-lg font-semibold hover:text-emerald-600">Créer un compte</a>
                    <p class="text-slate-400 mt-3">Créez votre compte pour débloquer l'accès aux fonctionnalités et avantages de notre plateforme.</p>
                    
                    <div class="mt-5">
                    </div>
                </div>
            </div><!--end content-->

            <div class="p-6 shadow-xl shadow-gray-100 transition duration-500 rounded-2xl mt-6 text-center">
                <div class="w-14 h-14 bg-emerald-600/5 text-emerald-600 rounded-xl text-2xl flex align-middle justify-center items-center mx-auto shadow-sm">
                    <i class="fa-solid fa-list-ol"></i>
                </div>

                <div class="content mt-7">
                    <a href="" class="title h5 text-lg font-semibold hover:text-emerald-600">Complétez votre profil</a>
                    <p class="text-slate-400 mt-3">Complétez votre profil avec les détails essentiels pour améliorer votre recherche d'emploi ou d'embauche.</p>
                    
                    <div class="mt-5">
                    </div>
                </div>
            </div><!--end content-->

            <div class="p-6 hover:shadow-xl hover:shadow-gray-100 transition duration-500 rounded-2xl mt-6 text-center">
                <div class="w-14 h-14 bg-emerald-600/5 text-emerald-600 rounded-xl text-2xl flex align-middle justify-center items-center mx-auto shadow-sm">
                    <i class="fa-solid fa-briefcase"></i>
                </div>

                <div class="content mt-7">
                    <a href="" class="title h5 text-lg font-semibold hover:text-emerald-600">Postulez à des emplois</a>
                    <p class="text-slate-400 mt-3">Postulez à des emplois ou trouvez des candidats idéaux pour donner un coup de pouce à votre parcours professionnel.</p>
                    
                    <div class="mt-5">
                    </div>
                </div>
            </div><!--end content-->
        </div><!--end grid-->
    </div><!--end container-->
</section>

<section id="categories" class="my-10">
    <div class="grid grid-cols-1 pb-8 text-center">
        <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Categories</h3>

        <p class="text-slate-400 max-w-xl mx-auto">Elhrayfi : Une plateforme complète couvrant une diversité de catégories pour votre réussite professionnelle</p>
    </div><!--end grid-->
    <div class="grid grid-cols-4 container mx-auto p-6 ">
        <div class="col-span-1 py-10 border-r border-b border-gray-200 transition-all space-y-2 flex flex-col justify-center items-center">
            <img src="{{ asset('images/plumber.png') }}" class="w-16 mx-auto bg-[#cfe6d2] p-2 rounded" alt="">
            <p class="text-md text-black font-semibold ">Plombier</p>
        </div>
        <div class="col-span-1 p-5 border-r border-b  border-gray-200 transition-all space-y-2 flex flex-col justify-center items-center">
            <img src="{{ asset('images/electrician.png') }}" class="w-16 bg-[#ece5d2] p-2 rounded" alt="">
            <p class="text-md text-black font-semibold ">Electricien</p>
        </div>
        <div class="col-span-1 p-5 border-r border-b  border-gray-200 transition-all space-y-2 flex flex-col justify-center items-center">
            <img src="{{ asset('images/gardner.png') }}" class="w-16 mx-auto bg-[#d9d7f1] p-2 rounded" alt="">
            <p class="text-md text-black font-semibold ">Jardinier</p>
        </div>
        <div class="col-span-1 p-5 border-b  border-gray-200 transition-all space-y-2 flex flex-col justify-center items-center">
            <img src="{{ asset('images/mechanic.png') }}" class="w-16 mx-auto bg-[#caeffc] p-2 rounded" alt="">
            <p class="text-md text-black font-semibold ">Mécanicien</p>
        </div>
        <div class="col-span-1 py-10 border-r border-gray-200 transition-all space-y-2 flex flex-col justify-center items-center">
            <img src="{{ asset('images/carpenter.png') }}" class="w-16 mx-auto bg-[#dbf5df] p-2 rounded" alt="">
            <p class="text-md text-black font-semibold ">Menuisier</p>
        </div>
        <div class="col-span-1 p-5 border-r   border-gray-200 transition-all space-y-2 flex flex-col justify-center items-center">
            <img src="{{ asset('images/painter.png') }}" class="w-16  bg-[#f5cccc] p-2 rounded" alt="">
            <p class="text-md text-black font-semibold ">Peintre</p>
        </div>
        <div class="col-span-1 p-5 border-r   border-gray-200 transition-all space-y-2 flex flex-col justify-center items-center">
            <img src="{{ asset('images/constructeur.png') }}" class="w-16 mx-auto bg-[#f5e0d6] p-2 rounded" alt="">
            <p class="text-md text-black font-semibold ">constructeur</p>
        </div>
        <div class="col-span-1 p-5 border-gray-200 transition-all space-y-2 flex flex-col justify-center items-center">
            <img src="{{ asset('images/forgeron.png') }}" class="w-16 mx-auto bg-[#d9d7f1] p-2 rounded" alt="">
            <p class="text-md text-black font-semibold ">Forgeron</p>
        </div>
    </div>
</section>

<section id="about" class="my-10">
    <div class="grid grid-cols-1 pb-8 text-center">
        <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Pourquoi nous choisir?</h3>

        <p class="text-slate-400 max-w-xl mx-auto">Faites le bon choix en optant pour notre plateforme : une expérience unique vous attend</p>
    </div><!--end grid-->
    <div class="container mx-auto p-6">
        <div class="grid grid-cols-2 gap-7">
            <div class="col-span-1">
                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-1  space-y-4 ">
                        <div>
                            <img src="{{ asset('images/about-01.jpeg') }}" class="" alt="">
                        </div>
                        <div>
                            <img src="{{ asset('images/about-03.jpeg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-span-1  space-y-4 ">
                        <div>
                            <img src="{{ asset('images/about-04.jpeg') }}" class="" alt="">
                        </div>
                        <div >
                            <img src="{{ asset('images/about-02.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1 flex items-center">
                <div>
                    <h2 class="text-3xl text-center font-semibold">Pourquoi sommes-nous les plus populaires ?</h2>
                    <p class="py-5 pl-2 text-[#808192] text-justify">Avec Elhrayfi, vous bénéficiez d'une communication transparente et d'une expérience client exceptionnelle. Simplifiez vos recherches, gagnez du temps et trouvez le professionnel idéal pour concrétiser vos projets. </p>
                    <div class="grid grid-cols-2">
                        <div class="col-span-1 py-4 border-r border-b  border-gray-200 transition-all space-y-2 flex flex-col justify-center items-center">
                            <img src="{{ asset('images/quality.png') }}" class="w-12 mx-auto bg-[#cfe6d2] p-2 rounded" alt="">
                            <p class="text-md text-black font-semibold ">Artisans de qualité</p>
                        </div>
                        <div class="col-span-1 py-4  border-b  border-gray-200 transition-all space-y-2 flex flex-col justify-center items-center">
                            <img src="{{ asset('images/no-money.png') }}" class="w-12 mx-auto bg-[#cfe6d2] p-2 rounded" alt="">
                            <p class="text-md text-black font-semibold ">Sans frais</p>
                        </div>
                        <div class="col-span-1 py-4 border-r  border-gray-200 transition-all space-y-2 flex flex-col justify-center items-center">
                            <img src="{{ asset('images/facile.png') }}" class="w-12 mx-auto bg-[#cfe6d2] p-2 rounded" alt="">
                            <p class="text-md text-black font-semibold ">Facile à utiliser</p>
                        </div>
                        <div class="col-span-1 py-4 border-gray-200 transition-all space-y-2 flex flex-col justify-center items-center">
                            <img src="{{ asset('images/secure.png') }}" class="w-12 mx-auto bg-[#cfe6d2] p-2 rounded" alt="">
                            <p class="text-md text-black font-semibold ">Protection des données</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@guest
<section id="annoce">
    <div class="grid grid-cols-1 pb-8 text-center">
        <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Des nouveaux offres</h3>

        <p class="text-slate-400 max-w-xl mx-auto">Elhrayfi : Découvrez chaque jour une multitude d'offres d'emploi postées par des entreprises et des particuliers passionnés</p>
    </div>
    <div class="container mx-auto p-6">
        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">


            @forelse ($offres as $offre)
            <div class="group relative overflow-hidden bg-white shadow hover:shadow-md hover:-mt-2 rounded-md transition-all duration-500 h-fit">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="w-14 h-14 min-w-[56px] flex items-center justify-center bg-white shadow rounded-md">
                            <a href="/company/{{ $offre->client->name }}">
                                <img src="http://127.0.0.1:8000/storage/{{ $offre->client->profile_photo_path }}" class="h-8 w-8" alt="">
                            </a>
                        </div>

                        <div class="ms-3">
                            <a href="/offre/{{ $offre->id }}" class="inline-block text-[16px] font-semibold hover:text-emerald-600 transition-all duration-500 me-1">{{ $offre->catégorie }}</a>
                            <span class="inline-block text-sm text-slate-400">{{ $offre->formattedTime }}</span>
                            <div>
                                <span class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Temps {{ $offre->type_travail }}</span>
                                <span class="text-sm font-medium inline-block me-1">Durée: <span class="text-slate-400">{{ $offre->travail_periode }}</span></span>
                                {{-- <span class="text-sm font-medium inline-block me-1">Type: <span class="text-slate-400">Personnel</span></span> --}}
                            </div>
                        </div>
                    </div>

                    <p class="text-slate-400 py-3">{{ $offre->title }}</p>

                </div>

                <div class="px-6 py-2 bg-slate-50 lg:flex justify-between items-center">
                    <div class="lg:inline-block flex justify-between">
                        <span class="inline-block me-1 text-slate-400"><i class="fa-solid fa-location-dot text-[18px] text-slate-900 me-1"></i>{{ $offre->ville }}</span>
                    </div>

                    <a href="/offre/{{ $offre->id }}" class="btn btn-sm rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full lg:w-auto lg:mt-0 mt-4 p-2">Postulez</a>
                </div>

            </div><!--end content-->
            @empty
                
            @endforelse


        </div>

    </div>
    <div class="flex justify-center lg:my-10">
        <a href="{{ Route('liste.offre') }}" class="btn btn-sm rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full lg:w-auto lg:mt-0 mt-4 p-2">Voir tous les annonces</a>
    </div> 
</section>
@endguest

@if(Auth::check())
@if (Auth::user()->user_type == 2)
<section id="annoce">
    <div class="grid grid-cols-1 pb-8 text-center">
        <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Des nouveaux offres</h3>

        <p class="text-slate-400 max-w-xl mx-auto">Elhrayfi : Découvrez chaque jour une multitude d'offres d'emploi postées par des entreprises et des particuliers passionnés</p>
    </div>
    <div class="container mx-auto p-6">
        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">


            @forelse ($offres as $offre)
            <div class="group relative overflow-hidden bg-white shadow hover:shadow-md hover:-mt-2 rounded-md transition-all duration-500 h-fit">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="w-14 h-14 min-w-[56px] flex items-center justify-center bg-white shadow rounded-md">
                            <a href="/company/{{ $offre->client->name }}">
                                <img src="http://127.0.0.1:8000/storage/{{ $offre->client->profile_photo_path }}" class="h-8 w-8" alt="">
                            </a>
                        </div>

                        <div class="ms-3">
                            <a href="/offre/{{ $offre->id }}" class="inline-block text-[16px] font-semibold hover:text-emerald-600 transition-all duration-500 me-1">{{ $offre->catégorie }}</a>
                            <span class="inline-block text-sm text-slate-400">{{ $offre->formattedTime }}</span>
                            <div>
                                <span class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full me-1">Temps {{ $offre->type_travail }}</span>
                                <span class="text-sm font-medium inline-block me-1">Durée: <span class="text-slate-400">{{ $offre->travail_periode }}</span></span>
                                {{-- <span class="text-sm font-medium inline-block me-1">Type: <span class="text-slate-400">Personnel</span></span> --}}
                            </div>
                        </div>
                    </div>

                    <p class="text-slate-400 py-3">{{ $offre->title }}</p>

                </div>

                <div class="px-6 py-2 bg-slate-50 lg:flex justify-between items-center">
                    <div class="lg:inline-block flex justify-between">
                        <span class="inline-block me-1 text-slate-400"><i class="fa-solid fa-location-dot text-[18px] text-slate-900 me-1"></i>{{ $offre->ville }}</span>
                    </div>

                    <a href="/offre/{{ $offre->id }}" class="btn btn-sm rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full lg:w-auto lg:mt-0 mt-4 p-2">Postulez</a>
                </div>

            </div><!--end content-->
            @empty
                
            @endforelse


        </div>

    </div>
    <div class="flex justify-center lg:my-10">
        <a href="{{ Route('liste.offre') }}" class="btn btn-sm rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full lg:w-auto lg:mt-0 mt-4 p-2">Voir tous les annonces</a>
    </div> 
</section>
@endif
@endif


<section id="stats" class="bg-emerald-600 my-10">
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
      <div class="grid grid-cols-2 row-gap-8 md:grid-cols-3">
        <div class="text-center md:border-r">
            <div class="flex justify-center">
                <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl text-white" data-target="{{ $artisansCount }}">0</h6><span class="text-4xl font-bold lg:text-5xl xl:text-6xl text-white">+</span>
            </div>
          <p class="text-sm font-medium tracking-widest text-white uppercase lg:text-base">
            Artisans
          </p>
        </div>
        <div class="text-center md:border-r">
        <div class="flex justify-center">
            <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl text-white" data-target="{{ $clientsCount }}">0</h6><span class="text-4xl font-bold lg:text-5xl xl:text-6xl text-white">+</span>
        </div>
          <p class="text-sm font-medium tracking-widest text-white uppercase lg:text-base">
            Clients
          </p>
        </div>
        <div class="text-center ">
            <div class="flex justify-center">
                <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl text-white" data-target="{{ $offresCount }}">0</h6><span class="text-4xl font-bold lg:text-5xl xl:text-6xl text-white">+</span>
            </div>
          <p class="text-sm font-medium tracking-widest text-white uppercase lg:text-base">
            Annonces
          </p>
        </div>

      </div>
    </div>
    <script>
        function animateCounters() {
          const counters = document.querySelectorAll('[data-target]');
          const windowHeight = window.innerHeight;
      
          function animateCounter(counter) {
            const target = parseInt(counter.getAttribute('data-target'));
            const duration = 1000; // Duration in milliseconds
            let current = 0;
            const step = Math.ceil(target / (duration / 10));
      
            const timer = setInterval(function() {
              current += step;
              counter.textContent = current;
      
              if (current >= target) {
                clearInterval(timer);
              }
            }, 10);
          }
      
          function handleScroll() {
            counters.forEach(counter => {
              const counterPosition = counter.getBoundingClientRect().top;
              if (counterPosition <= windowHeight * 0.8) { // Adjust the threshold as needed
                animateCounter(counter);
                window.removeEventListener('scroll', handleScroll); // Remove the scroll listener after counting once
              }
            });
          }
      
          window.addEventListener('scroll', handleScroll);
        }
      
        animateCounters();
      </script>
</section>
@guest
<section id="artisans" class="py-10">
    <div class="grid grid-cols-1 pb-8 text-center">
        <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Candidats</h3>

        <p class="text-slate-400 max-w-xl mx-auto">Elhrayfi : Découvrez nos artisans talentueux et passionnés pour des réalisations exceptionnelles</p>
    </div><!--end grid-->
    <div class="container mx-auto p-6">

                <div class="container mx-auto p-6 ">
                <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">



                    @forelse ($artisans as $artisan)
                                            
                    <div class="group bg-white relative overflow-hidden rounded-md shadow-lg text-center p-6">
                        <img src="storage/{{ $artisan->profile_photo_path }}" class="h-20 w-20 rounded-full shadow mx-auto" alt="">
                        
                        <div class="mt-2">
                            <a href="/artisan/{{ $artisan->name }}" class="hover:text-emerald-600 font-semibold text-lg">{{ $artisan->name }}</a>
                            <p class="text-sm text-slate-400">{{ $artisan->artisan_job_category }}</p>
                        </div>


                        <div class="flex items-center justify-center ml-2 my-2">
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Rating star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <p class="ml-1 text-sm font-bold text-gray-900">4.95</p>
                            <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full"></span>
                            <a href="#" class="text-sm font-medium text-gray-900 underline hover:no-underline">73 reviews</a>
                        </div>

                        <div class="flex flex-col space-y-2 justify-between my-2">
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
                        
                        <span class="absolute top-[10px] end-4">
                            <a href="javascript:void(0)" class="text-slate-100 focus:text-red-600 hover:text-red-600 text-2xl"><i class="mdi mdi-heart"></i></a>
                        </span>
                    </div><!--end content-->
                    @empty
                        
                    @endforelse

                </div><!--end grid-->
            </div><!--end container-->
    </div>
</section>
@endguest
@if(Auth::check())
@if (Auth::user()->user_type == 3)
<section id="artisans" class="py-10">
    <div class="grid grid-cols-1 pb-8 text-center">
        <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Candidats</h3>

        <p class="text-slate-400 max-w-xl mx-auto">Elhrayfi : Découvrez nos artisans talentueux et passionnés pour des réalisations exceptionnelles</p>
    </div><!--end grid-->
    <div class="container mx-auto p-6">

                <div class="container mx-auto p-6 ">
                <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">



                    @forelse ($artisans as $artisan)
                                            
                    <div class="group bg-white relative overflow-hidden rounded-md shadow-lg text-center p-6">
                        <img src="storage/{{ $artisan->profile_photo_path }}" class="h-20 w-20 rounded-full shadow mx-auto" alt="">
                        
                        <div class="mt-2">
                            <a href="/artisan/{{ $artisan->name }}" class="hover:text-emerald-600 font-semibold text-lg">{{ $artisan->name }}</a>
                            <p class="text-sm text-slate-400">{{ $artisan->artisan_job_category }}</p>
                        </div>


                        <div class="flex items-center justify-center ml-2 my-2">
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Rating star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <p class="ml-1 text-sm font-bold text-gray-900">4.95</p>
                            <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full"></span>
                            <a href="#" class="text-sm font-medium text-gray-900 underline hover:no-underline">73 reviews</a>
                        </div>

                        <div class="flex flex-col space-y-2 justify-between my-2">
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
                        
                        <span class="absolute top-[10px] end-4">
                            <a href="javascript:void(0)" class="text-slate-100 focus:text-red-600 hover:text-red-600 text-2xl"><i class="mdi mdi-heart"></i></a>
                        </span>
                    </div><!--end content-->
                    @empty
                        
                    @endforelse

                </div><!--end grid-->
            </div><!--end container-->
    </div>
</section>
@endif
@endif


@guest
<div id="price" class="py-10">
    <div class="grid grid-cols-1 pb-8 text-center">
        <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Nos Tarifs</h3>

        <p class="text-slate-400 max-w-xl mx-auto">Elhrayfi : Profitez de tarifs avantageux. Solutions abordables, adaptées à vos besoins. Premier mois gratuit, sans carte de crédit requise.</p>
    </div>
    <div class="container mx-auto p-6">
        <div class="grid md:grid-cols-2 grid-cols-1 gap-[30px] justify-center">
            {{-- <div class="group border border-transparent relative shadow hover:shadow-md rounded-md bg-white transition-all duration-500">
                <div class="p-6 py-8">
                    <h6 class="text-lg font-bold uppercase mb-5 text-emerald-600">Particuliers</h6>

                    <div class="flex mb-5">
                        <span class="text-xl font-semibold"></span>
                        <span class="price text-4xl font-semibold mb-0">Gratuit</span>
                        <span class="text-xl font-semibold self-end mb-1"></span>
                    </div>

                    <ul class="list-none text-slate-400 border-t border-gray-100 pt-5">
                        <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Full Access</li>
                        <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Source Files</li>
                        <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Free Appointments</li>
                        <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Enhanced Security</li>
                    </ul>
                    <a href="" class="btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md block w-fit mt-5 p-2">S'inscrire</a>
                </div>
            </div> --}}

            <div class="group border border-emerald-600 relative shadow hover:shadow-md rounded-md z-2 bg-gray-50 transition-all duration-500">
                <div class="p-6 py-8">
                    <h6 class="text-lg font-bold uppercase mb-5 text-emerald-600">Artisans</h6>

                    <div class="flex mb-5">
                        <span class="text-xl font-semibold">Dhs</span>
                        <span class="price text-4xl font-semibold mb-0">50</span>
                        <span class="text-xl font-semibold self-end mb-1">/mois</span>
                    </div>

                    <ul class="list-none text-slate-400 border-t border-gray-100 pt-5">
                        <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Visibilité accrue auprès des entreprises.</li>
                        <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Offres régulièrement mises à jour.</li>
                        <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Assistance 24H/7J</li>
                        {{-- <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Enhanced Security</li> --}}
                    </ul>
                    <a href="" class="btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md block w-fit mt-5 p-2">S'inscrire</a>
                </div>
            </div>

            <div class="group border border-transparent relative shadow hover:shadow-md rounded-md z-2 bg-white transition-all duration-500">
                <div class="p-6 py-8">
                    <h6 class="text-lg font-bold uppercase mb-5 text-emerald-600">Entreprises</h6>

                    <div class="flex mb-5">
                        <span class="text-sm font-semibold">Dhs</span>
                        <span class="price text-4xl font-semibold mb-0">100</span>
                        <span class="text-xl font-semibold self-end mb-1">/mois</span>
                    </div>

                    <ul class="list-none text-slate-400 border-t border-gray-100 pt-5">
                        <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Accès facile à des artisans qualifiés.</li>
                        <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Artisans régulièrement mises à jour.</li>
                        <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Assistance 24H/7J</li>
                        {{-- <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Enhanced Security</li> --}}
                    </ul>
                    <a href="" class="btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md mt-5 block w-fit p-2">S'inscrire</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endguest
<section id="blogs">
    <div class="grid grid-cols-1 pb-8 text-center">
        <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Nos Articles</h3>

        <p class="text-slate-400 max-w-xl mx-auto">Le Blog Elhrayfi : Votre source d'inspiration incontournable pour les clients exigeants et les artisans talentueux en quête de perfectionnement</p>
    </div><!--end grid-->
    {{-- <div class="container mx-auto p-6">
        <div class="grid grid-cols-3 gap-10">
            <div class="col-span-1">
                <!-- component -->
                <!-- This is an example component -->
                <div class="max-w-lg mx-auto">
                    <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('images/blog-01.webp') }}" alt="">
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Comment peindre un mur facilement & sans traces</h5>
                            </a>
                            <p class="font-normal text-gray-700 mb-3">1. Préparer le chantier et le support · 2. Appliquer une sous-couche · 3. Préparer la peinture et les outils d'application · 4. Faire le rechampi ou peindre les ...</p>
                            <a class="text-white bg-gradient-to-r from-[#38a745] to-[#4cce5b] font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="#">
                                Voir la suite
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <!-- component -->
                <!-- This is an example component -->
                <div class="max-w-lg mx-auto">
                    <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('images/blog-02.jpeg') }}" alt="">
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Les étapes de construction d'une maison neuve</h5>
                            </a>
                            <p class="font-normal text-gray-700 mb-3">1 - Définir un budget construction · 2 - Dénicher le bon terrain à bâtir · 3 - Trouver son constructeur · 4 - Choisir sa maison · 5 - Signer le ...</p>
                            <a class="text-white bg-gradient-to-r from-[#38a745] to-[#4cce5b] font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="#">
                                Voir la suite
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <!-- component -->
                <!-- This is an example component -->
                <div class="max-w-lg mx-auto">
                    <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('images/blog-03.jpeg') }}" alt="">
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Comment faire son installation électrique soi-même</h5>
                            </a>
                            <p class="font-normal text-gray-700 mb-3">Le schéma électrique : comment faire ? · Commencez par dessiner le plan de votre maison (si elle dispose de plusieurs niveaux, établissez un plan par étage).</p>
                            <a class="text-white bg-gradient-to-r from-[#38a745] to-[#4cce5b] font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="#">
                                Voir la suite
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container mx-auto p-6">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">

            @forelse ($blog as $blog)
                            
            <div class="group relative overflow-hidden bg-white rounded-md shadow">
                <div class="relative overflow-hidden h-72 bg-cover">
                    <img src="{{ $blog->image }}" class="h-full bg-cover scale-110 group-hover:scale-100 transition-all duration-500" alt="">
                </div>

                <div class="relative p-6">
                    <div class="absolute start-6 -top-4">
                        <span class="bg-emerald-600 text-white text-[12px] px-2.5 py-1 font-semibold rounded-full h-5">Music</span>
                    </div>

                    <div class="">
                        <div class="flex mb-4">
                            <span class="text-slate-400 text-sm"><i class="uil uil-calendar-alt text-slate-900 me-2"></i>{{ strftime('%A %e %B %Y', strtotime($blog->created_at)) }} </span>
                        </div>

                        <a href="/blog/{{ $blog->slug }}" class="title text-lg font-semibold hover:text-emerald-600 duration-500 ease-in-out">{{ $blog->title }}</a>
                        
                        {{-- <div class="flex justify-between items-center mt-3">
                            <a href="blog-detail.html" class="btn btn-link hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!--end content-->
            @empty
                
            @endforelse

        </div>
    </div>
</section>
<section id='newsletter' class="items-center mt-10 max-w-screen-xl px-4 gap-4 md:flex xl:px-8 xl:gap-12 bg-gradient-to-l from-emerald-500 to-emerald-700 py-14 rounded-xl container mx-auto p-6">  
    <div class="flex-1 space-y-4 text-center md:text-left">
      <h1 class="text-2xl text-gray-100 font-semibold lg:text-3xl">
        Abonnez-vous à notre newsletter.
      </h1>
      <p class="text-gray-200 leading-relaxed text-center text-sm md:text-justify md:pr-12">
        
        Nous vous enverrons le meilleur de notre blog une fois par mois. Nous le promettons.
      </p>
    </div>
    <div class="mt-5 md:mt-0 flex-1 px-0 sm:px-4">
      <form action="{{ Route('email.store') }}"  id="sssssss" method="POST" class="items-center justify-center sm:flex">
        @csrf
        <input type="email" name="email" placeholder="Enter e-mail"
          class="text-gray-500 w-full p-2 rounded-md border outline-none focus:border-emerald-800" />
        <button  type="submit"
          class="w-full mt-3 px-5 py-2 rounded-md text-white bg-emerald-700 hover:bg-emerald-800 outline-none shadow-md focus:shadow-none focus:ring-2 ring-offset-2 ring-indigo-600 sm:mt-0 sm:ml-3 sm:w-auto">
          Subscribe
        </button>
      </form>
      <p class="mt-3 text-xs text-gray-200">
        Mises à jour de produits, annonces et réductions.
        
        Lisez notre <a class="text-gray-100 hover:text-gray-50 underline" href="#"> politique de confidentialité. </a>
      </p>  
    </div>
</section>

@include('components.scrollUp')

@include('components.footer')
@endsection