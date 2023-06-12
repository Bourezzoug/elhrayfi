@extends('layout.frontend')
@section('title', 'Elhrayfi.ma - ')
@section('meta_description', 'description')
@section('content')
@include('components.header')

<section class="relative mb:pb-24 pb-10  z-1">
    <div class="container mx-auto p-6">
        <div class="grid grid-cols-1">
            <div class="md:flex justify-between items-center shadow-xl dark:shadow-gray-700 rounded-md p-6 bg-white dark:bg-slate-900">
                <div class="flex items-center">
                    <img src="https://www.colorado.ma/sites/all/themes/colorado_commercial/img/logo.png" class="h-20 w-20 p-3 shadow dark:shadow-gray-700 rounded-md bg-slate-50 dark:bg-slate-800" alt="">

                    <div class="ms-4">
                        <h5 class="text-xl font-bold">Colorado</h5>
                        <h6 class="text-base text-slate-400">Entreprise</h6>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container mx-auto p-6 mt-6">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-7">
                <h5 class="text-xl font-semibold">Description du travail</h5>
                <p class="text-slate-400 mt-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed.</p>
                <p class="text-slate-400 mt-2">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</p>

                <div class="p-6 rounded-md shadow dark:shadow-gray-800 mt-8">
                    <h5 class="text-xl font-semibold">Postulez:</h5>

                    <form class="mt-8">
                        <div class="grid lg:grid-cols-12 lg:gap-6">
                            <div class="lg:col-span-6 mb-5">
                                <div class="text-left">
                                    <label for="name" class="font-semibold">Votre nom:</label>
                                    <div class="form-icon relative mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user w-4 h-4 absolute top-3 start-4"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <input name="name" id="name" type="text" class="border border-slate-100 dark:border-slate-800 block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px] pl-10" placeholder="Name :">
                                    <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div></div>
                                </div>
                            </div>

                            <div class="lg:col-span-6 mb-5">
                                <div class="text-left">
                                    <label for="email" class="font-semibold">Votre Email:</label>
                                    <div class="form-icon relative mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail w-4 h-4 absolute top-3 start-4"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <input name="email" id="email" type="email" class="border border-slate-100 dark:border-slate-800 block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px] pl-10" placeholder="Email :">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1">
                            <div class="mb-5">
                                <div class="text-left">
                                    <label for="comments" class="font-semibold">Votre Message:</label>
                                    <div class="form-icon relative mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle w-4 h-4 absolute top-3 start-4"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                        <textarea name="comments" id="comments" class="h-32 w-full rounded border bg-transparent text-[14px] py-2 pl-10" placeholder="Message :"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" id="submit" name="send" class="btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md w-full p-2">Envoyez</button>
                    </form>
                </div>
            </div><!--end col-->
            
            <div class="lg:col-span-4 md:col-span-5">
                <div class="bg-slate-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-700 p-6 sticky top-20">
                    {{-- <div class="w-full leading-[0] border-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0" class="w-full h-[350px] rounded-md shadow dark:shadow-gray-700" allowfullscreen=""></iframe>
                    </div> --}}

                    <ul class="list-none mt-4">
                        <li class="flex justify-between mt-2">
                            <span class="text-slate-400 font-medium">Type:</span>
                            <span class="font-medium">Temps plein</span>
                        </li>

                        <li class="flex justify-between mt-2">
                            <span class="text-slate-400 font-medium">Address:</span>
                            <span class="font-medium">Casablanca</span>
                        </li>

                        <li class="flex justify-between mt-2">
                            <span class="text-slate-400 font-medium">Durée:</span>
                            <span class="font-medium">3 mois</span>
                        </li>

                        <li class="flex justify-between mt-2">
                            <span class="text-slate-400 font-medium">Salaire:</span>
                            <span class="font-medium">À discuter</span>
                        </li>

                    </ul>


                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container mx-auto p-6  mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-[26px] md:leading-normal text-2xl leading-normal font-semibold">Les dernières annonces</h3>

            <p class="text-slate-400 dark:text-slate-300 max-w-xl mx-auto">Découvrez les dernières annonces d'emploi mises à jour régulièrement pour rester informé des opportunités professionnelles les plus récentes.</p>
        </div><!--end grid-->

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-[30px] mt-8">
            <div class="group relative p-6 rounded-md shadow dark:shadow-gray-700 mt-6">
                <div class="w-14 h-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md relative -mt-12">
                    <img src="{{ asset('images/avatar-02.png') }}" class="h-8 w-8" alt="">
                </div>

                <div class="mt-4 flex justify-between items-center">
                    <a href="" class="text-lg hover:text-emerald-600 font-semibold">Ibrahim</a>
                    <p class="text-slate-400 mt-2">Particulier</p>
                </div>
                <p class="text-slate-400 mt-4">À la recherche d'un plombier</p>

                <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-700 flex justify-between">
                    <span class="text-slate-400"> Agadir</span>
                    <span class="block font-medium text-emerald-600">Voir plus <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </div><!--end content-->
            
            <div class="group relative p-6 rounded-md shadow dark:shadow-gray-700 mt-6">
                <div class="w-14 h-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md relative -mt-12">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/45/Logo_Lydec_2010.jpg" class="h-8 w-8" alt="">
                </div>

                <div class="mt-4 flex justify-between items-center">
                    <a href="" class="text-lg hover:text-emerald-600 font-semibold">Lydec</a>
                    <p class="text-slate-400 mt-2">Entreprise</p>
                </div>
                <p class="text-slate-400 mt-4">À la recherche d'un plombier</p>


                <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-700 flex justify-between">
                    <span class="text-slate-400"> Marrakech</span>
                    <span class="block font-medium text-emerald-600">Voir plus <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </div><!--end content-->
            
            <div class="group relative p-6 rounded-md shadow dark:shadow-gray-700 mt-6">
                <div class="w-14 h-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md relative -mt-12">
                    <img src="https://www.colorado.ma/sites/all/themes/colorado_commercial/img/logo.png" class="h-8 w-8" alt="">
                </div>

                <div class="mt-4 flex justify-between items-center">
                    <a href="" class="text-lg hover:text-emerald-600 font-semibold">Lydec</a>
                    <p class="text-slate-400 mt-2">Entreprise</p>
                </div>
                <p class="text-slate-400 mt-4">À la recherche d'un plombier</p>

                <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-700 flex justify-between">
                    <span class="text-slate-400"> Tangier</span>
                    <span class="block font-medium text-emerald-600">Voir plus <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </div><!--end content-->
            
            <div class="group relative p-6 rounded-md shadow dark:shadow-gray-700 mt-6">
                <div class="w-14 h-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md relative -mt-12">
                    <img src="{{ asset('images/avatar-03.png') }}" class="h-8 w-8" alt="">
                </div>

                <div class="mt-4 flex justify-between items-center">
                    <a href="" class="text-lg hover:text-emerald-600 font-semibold">Saad</a>
                    <p class="text-slate-400 mt-2">Particulier</p>
                </div>
                <p class="text-slate-400 mt-4">À la recherche d'un electricien</p>


                <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-700 flex justify-between">
                    <span class="text-slate-400"> Rabat</span>
                    <span class="block font-medium text-emerald-600">Voir plus <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </div><!--end content-->
        </div><!--end grid-->
    </div><!--end container-->

</section>

@include('components.scrollUp')
@include('components.footer')
@endsection