@extends('layout.frontend')
@section('title', 'Elhrayfi.ma - ')
@section('meta_description', 'description')
@section('content')
@include('components.header')
<section class="relative table w-full py-36 bg-[url('https://img.freepik.com/premium-vector/people-group-different-occupation-profession-set-international-labor-day-flat-banner_180264-14.jpg')] bg-top bg-no-repeat bg-cover">
    <div class="absolute inset-0 bg-emerald-900/90"></div>

    <div class="absolute text-center z-10 top-1/2 start-0 end-0 mx-3">
        <p class="inline breadcrumb-item  font-semibold duration-500 ease-in-out text-white text-4xl">À Propos</p>
    </div>
</section>
<section class="relative md:py-24 py-16">
    <div class="container mx-auto p-6 md:pb-16">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="lg:col-span-5 md:col-span-6">
                <div class="relative">
                    <div class="relative">
                        <img src="{{ asset('images/about-img-01.jpeg') }}" class="lg:w-[400px] w-[280px] rounded-md shadow dark:shadow-gray-700" alt="">
                    </div>
                    <div class="absolute md:-end-5 end-0 -bottom-16">
                        <img src="{{ asset('images/about-img-02.jpeg') }}" class="lg:w-[280px] w-[200px] border-8 border-white dark:border-slate-900 rounded-md shadow dark:shadow-gray-700" alt="">
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 md:col-span-6 mt-14 md:mt-0">
                <div class="lg:ms-5">
                    <h3 class="mb-6 md:text-[26px] text-2xl md:leading-normal leading-normal font-semibold">Des milliers d'emplois.<br> Trouvez celui qui vous convient.</h3>

                    <p class="text-slate-400 max-w-xl">Découvrez une myriade d'opportunités sur la plateforme elhrayfi. Obtenez une estimation personnalisée de votre salaire. Consultez les avis sur de nombreuses entreprises au Maroc.</p>

                    <ul class="list-none text-slate-400 mt-4">
                        <li class="mb-1 flex"><i class="fa-solid fa-check text-emerald-600 text-sm mr-1 mt-1"></i> Bénéficiez de l'expertise d'artisans talentueux</li>
                        <li class="mb-1 flex"><i class="fa-solid fa-check text-emerald-600 text-sm mr-1 mt-1"></i> Découvrez une entreprise de premier plan offrant d'excellentes opportunités</li>
                        <li class="mb-1 flex"><i class="fa-solid fa-check text-emerald-600 text-sm mr-1 mt-1"></i> Bénéficiez d'un support disponible 24/7</li>
                    </ul>
                
                    <div class="mt-6">
                        <a href="contact.html" class="btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white mt-2 rounded-md p-3"><i class="fa-regular fa-envelope"></i> Contactez-nous</a>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container mx-auto p-6 md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Elhrayfi Features</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Découvrez les Fonctionnalités Puissantes d'elhrayfi : Trouvez l'Emploi de vos Rêves grâce à notre Plateforme Intuitive, des Outils Avancés de Recherche et des Recommandations Personnalisées</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            <div class="group p-6 shadow dark:shadow-gray-700 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
                <div class="w-16 h-16 flex items-center justify-center mx-auto bg-emerald-600/5 group-hover:bg-emerald-600 dark:bg-emerald-600/10 dark:group-hover:bg-emerald-600 shadow dark:shadow-gray-700 rounded-lg transition-all duration-500">
                    <i class="fa-solid fa-headset text-[30px] text-emerald-600 group-hover:text-white"></i>
                </div>

                <div class="mt-4">
                    <a href="" class="text-lg font-semibold hover:text-emerald-600 transition-all duration-500">24/7 Support</a>

                    <p class="text-slate-400 mt-3 mb-2">Nous sommes là pour vous à tout moment, jour et nuit, pour vous aider dans vos besoins.</p>

                </div>
            </div><!--end content-->
            
            <div class="group p-6 shadow dark:shadow-gray-700 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
                <div class="w-16 h-16 flex items-center justify-center mx-auto bg-emerald-600/5 group-hover:bg-emerald-600 dark:bg-emerald-600/10 dark:group-hover:bg-emerald-600 shadow dark:shadow-gray-700 rounded-lg transition-all duration-500">
                    <i class="fa-solid fa-bullhorn text-[30px] text-emerald-600 group-hover:text-white"></i>
                </div>

                <div class="mt-4">
                    <a href="" class="text-lg font-semibold hover:text-emerald-600 transition-all duration-500">Annonces quotidienne.</a>

                    <p class="text-slate-400 mt-3 mb-2">Annonces quotidiennes d'emploi : Découvrez les nouvelles offres chaque jour.</p>

                </div>
            </div><!--end content-->
            
            <div class="group p-6 shadow dark:shadow-gray-700 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
                <div class="w-16 h-16 flex items-center justify-center mx-auto bg-emerald-600/5 group-hover:bg-emerald-600 dark:bg-emerald-600/10 dark:group-hover:bg-emerald-600 shadow dark:shadow-gray-700 rounded-lg transition-all duration-500">
                    <i class="fa-solid fa-bolt text-[30px] text-emerald-600 group-hover:text-white"></i>
                </div>

                <div class="mt-4">
                    <a href="" class="text-lg font-semibold hover:text-emerald-600 transition-all duration-500">Quick &amp; Easy</a>

                    <p class="text-slate-400 mt-3 mb-2">Simple et convivial : Trouvez l'emploi de vos rêves en quelques clics seulement.</p>

                </div>
            </div><!--end content-->
            
            <div class="group p-6 shadow dark:shadow-gray-700 rounded-md bg-white hover:bg-emerald-600/5 dark:bg-slate-900 dark:hover:bg-emerald-600/10 text-center transition-all duration-500">
                <div class="w-16 h-16 flex items-center justify-center mx-auto bg-emerald-600/5 group-hover:bg-emerald-600 dark:bg-emerald-600/10 dark:group-hover:bg-emerald-600 shadow dark:shadow-gray-700 rounded-lg transition-all duration-500">
                    <i class="fa-solid fa-hourglass-half text-[30px] text-emerald-600 group-hover:text-white"></i>
                </div>

                <div class="mt-4">
                    <a href="" class="text-lg font-semibold hover:text-emerald-600 transition-all duration-500">Save Time</a>

                    <p class="text-slate-400 mt-3 mb-2">Gagnez du temps précieux : Laissez-nous vous aider à trouver l'emploi idéal.</p>

                </div>
            </div><!--end content-->
        </div><!--end grid-->
    </div><!--end container-->





    <div class="container mx-auto p-6 md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Questions &amp; Réponses</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Nous avons compilé une liste complète des questions les plus souvent posées pour vous fournir des réponses rapides et pertinentes.</p>
        </div><!--end grid-->

        <div class="grid md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle h-8 text-emerald-600 me-3"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                <div class="flex-1">
                    <h5 class="mb-2 text-lg font-semibold">Comment <span class="text-emerald-600">Elhrayfi</span> fonctionne ?</h5>
                    <p class="text-slate-400">Elhrayfi simplifie votre recherche d'emploi. Créez un compte, complétez votre profil et explorez les offres avec des filtres avancés. Trouvez des opportunités adaptées à vos compétences et préférences.</p>
                </div>
            </div>
            
            <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle h-8 text-emerald-600 me-3"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                <div class="flex-1">
                    <h5 class="mb-2 text-lg font-semibold">Quelle est la portée géographique des offres d'emploi sur <span class="text-emerald-600">Elhrayfi</span>?</h5>
                    <p class="text-slate-400">Couverture nationale : nous proposons des offres d'emploi dans tout le Maroc.</p>
                </div>
            </div>
            
            <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle h-8 text-emerald-600 me-3"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                <div class="flex-1">
                    <h5 class="mb-2 text-lg font-semibold">Les entreprises peuvent-elles publier des offres d'emploi sur <span class="text-emerald-600">Elhrayfi</span> ?</h5>
                    <p class="text-slate-400">Oui, les entreprises peuvent publier des offres d'emploi sur Elhrayfi. De plus, les particuliers ont également la possibilité de poster des offres.</p>
                </div>
            </div>
            
            <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle h-8 text-emerald-600 me-3"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                <div class="flex-1">
                    <h5 class="mb-2 text-lg font-semibold">Comment contacter le support client d'<span class="text-emerald-600">Elhrayfi</span> en cas de besoin d'aide ?</h5>
                    <p class="text-slate-400">Sur notre page de contact, vous pouvez entrer le sujet de votre message ainsi que votre message pour contacter notre support client.</p>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

</section>
@include('components.footer')
@endsection