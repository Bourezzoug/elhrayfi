
@extends('layouts.admin')
@section('content')
<div class="flex">
    @include('artisan.components.sidebar')

    <div class="w-full flex flex-col h-screen">
        @include('artisan.components.header')
        <div id="price" class="py-10 md:ml-72">
            <div class="grid grid-cols-1 pb-8 text-center mt-20">
                <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Vous êtes encore dans la période d'essai. Choisi votre moyen de paiment</h3>
            </div>
            <div class="container mx-auto p-6">
                <div class="grid md:grid-cols-3 grid-cols-1 gap-[30px] justify-center">

        
                    <div class="group border border-emerald-600 relative shadow hover:shadow-md rounded-md z-2 bg-gray-50 transition-all duration-500">
                        <div class="p-6 py-8">
                            <h6 class="text-lg font-bold uppercase mb-5 text-emerald-600">Plan Essentiel</h6>
        
                            <div class="flex mb-5">
                                <span class="text-xl font-semibold">Dhs</span>
                                <span class="price text-4xl font-semibold mb-0">100</span>
                                <span class="text-xl font-semibold self-end mb-1">/mois</span>
                            </div>
        
                            <ul class="list-none text-slate-400 border-t border-gray-100 pt-5">
                                <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Visibilité accrue auprès des entreprises.</li>
                                <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Offres régulièrement mises à jour.</li>
                                <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Assistance 24H/7J</li>
                                <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Paiement mensuel à un prix fixe.</li>
                                {{-- <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Enhanced Security</li> --}}
                            </ul>
                            <a href="" class="btn bg-[#3b7bbf] text-white rounded-md block text-center mt-5 p-1">
                                <i class="fa-brands fa-cc-paypal text-white text-3xl"></i>
                            </a>
                            <a href="" class="btn bg-[#635bff] text-white rounded-md block text-center mt-5 p-1">
                                <i class="fa-brands fa-cc-stripe text-white text-3xl"></i>
                            </a>
                        </div>
                    </div>
        
                    <div class="group border border-transparent relative shadow hover:shadow-md rounded-md z-2 bg-white transition-all duration-500">
                        <div class="p-6 py-8">
                            <h6 class="text-lg font-bold uppercase mb-5 text-emerald-600">Preferred Plan</h6>
        
                            <div class="flex mb-5">
                                <span class="text-sm font-semibold">Dhs</span>
                                <span class="price text-4xl font-semibold mb-0">570</span>
                                <span class="text-xl font-semibold self-end mb-1">/6 mois</span>
                            </div>
        
                            <ul class="list-none text-slate-400 border-t border-gray-100 pt-5">
                                <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Accès facile à des artisans qualifiés.</li>
                                <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Artisans régulièrement mises à jour.</li>
                                <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Assistance 24H/7J</li>
                                <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Paiement tous les 6 mois avec une réduction de 5%.</li>
                                {{-- <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Enhanced Security</li> --}}
                            </ul>
                            <a href="" class="btn bg-[#3b7bbf] text-white rounded-md block text-center mt-5 p-1">
                                <i class="fa-brands fa-cc-paypal text-white text-3xl"></i>
                            </a>
                            <a href="" class="btn bg-[#635bff] text-white rounded-md block text-center mt-5 p-1">
                                <i class="fa-brands fa-cc-stripe text-white text-3xl"></i>
                            </a>
                        </div>
                    </div>
        
                    <div class="group border border-transparent relative shadow hover:shadow-md rounded-md z-2 bg-white transition-all duration-500">
                        <div class="p-6 py-8">
                            <h6 class="text-lg font-bold uppercase mb-5 text-emerald-600">Ultimate Plan</h6>
        
                            <div class="flex mb-5">
                                <span class="text-sm font-semibold">Dhs</span>
                                <span class="price text-4xl font-semibold mb-0">1080</span>
                                <span class="text-xl font-semibold self-end mb-1">/an</span>
                            </div>
        
                            <ul class="list-none text-slate-400 border-t border-gray-100 pt-5">
                                <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Accès facile à des artisans qualifiés.</li>
                                <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Artisans régulièrement mises à jour.</li>
                                <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Assistance 24H/7J</li>
                                <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Paiement annuel avec une réduction de 10%.</li>
                                {{-- <li class="my-2 flex"><i class="fa-solid fa-check text-emerald-600 text-lg me-2"></i> Enhanced Security</li> --}}
                            </ul>
                            <form action="{{ Route('paypal') }}" method="POST" class="btn bg-[#3b7bbf] text-white rounded-md block text-center mt-5 p-1">
                                @csrf
                                <input type="hidden" name="price">
                                <button type="submit">
                                    <i class="fa-brands fa-cc-paypal text-white text-3xl"></i>
                                </button>
                            </form>
                            <a href="" class="btn bg-[#635bff] text-white rounded-md block text-center mt-5 p-1">
                                <i class="fa-brands fa-cc-stripe text-white text-3xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if(Session::has('message'))
<script>
    console.log({{ Session::get('message') }})
</script>

@endif
@endsection