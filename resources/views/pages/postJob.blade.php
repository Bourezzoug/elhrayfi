@extends('layout.frontend')
@section('title', 'Elhrayfi.ma - ')
@section('meta_description', 'description')
@section('content')
@include('components.header')
<section class="relative bg-slate-50 lg:py-24 py-16">
    <div class="container mx-auto p-6">
        <div class="lg:flex justify-center">
            <div class="lg:w-2/3">
                <div class="p-6 bg-white shadow rounded-md">
                    <form class="text-left">
                        <div class="grid grid-cols-1">
                            <h5 class="text-lg font-semibold">Job Details:</h5>
                        </div>

                        <div class="grid grid-cols-12 gap-4 mt-4">
                            <div class="col-span-12 ltr:text-left rtl:text-right">
                                <label class="font-semibold" for="RegisterName">Titre du poste<span class="text-red-600 inline-block ml-1">*</span> :</label>
                                <input id="RegisterName" type="text" class="border border-slate-100 block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px]" placeholder="Titre du poste">
                            </div>

                            <div class="col-span-12 ltr:text-left">
                                <label for="comments" class="font-semibold block">Description du poste<span class="text-red-600 inline-block ml-1">*</span> :</label>
                                <textarea name="comments" id="comments" class="h-32 w-full rounded border bg-transparent py-2 px-3 text-[14px] mt-2" placeholder="Description du poste"></textarea>
                            </div>

                            <div class="md:col-span-6 col-span-12 ltr:text-left rtl:text-right">
                                <label class="font-semibold">Categorie<span class="text-red-600 inline-block ml-1">*</span> :</label>
                                <select class="border border-slate-100 block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px]">
                                    <option value="Plombier">Plombier</option>
                                    <option value="Electricien">Electricien</option>
                                    <option value="Jardinier">Jardinier</option>
                                    <option value="Mécanicien">Mécanicien</option>
                                    <option value="Menuisier">Menuisier</option>
                                    <option value="Peintre">Peintre</option>
                                    <option value="Constructeur">Constructeur</option>
                                    <option value="Forgeron">Forgeron</option>
                                </select>
                            </div>

                            <div class="md:col-span-6 col-span-12 ltr:text-left rtl:text-right">
                                <label class="font-semibold">Type du travail<span class="text-red-600 inline-block ml-1">*</span> :</label>
                                <select class="border border-slate-100 block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px]">
                                    <option value="Plein">Temps Plein</option>
                                    <option value="Partiel">Temps partiel</option>
                                </select>
                            </div>


                            <div class="md:col-span-6 col-span-12 ltr:text-left rtl:text-right">
                                <label class="font-semibold">Salary:</label>
                                <select class="border border-slate-100 block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px]">
                                    <option value="heure">Par Heure</option>
                                    <option value="semaine">Par Semaine</option>
                                    <option value="mois">Par Mois</option>
                                </select>
                            </div>

                            <div class="md:col-span-6 col-span-12 ltr:text-left rtl:text-right">
                                <label class="font-semibold md:invisible md:block hidden">Min:</label>
                                <div class="relative mt-1">
                                    <span class="w-10 h-10 bg-slate-50 border border-slate-100 absolute top-0 start-0 overflow-hidden rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign w-4 h-4 absolute top-3 start-3"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                    </span>
                                    <input type="number" class="border border-slate-100 block w-full mt-1  h-[2.5rem] rounded pr-2 pl-12 py-2 text-[14px]" placeholder="Le salaire que vous proposez" name="minsalary">
                                </div>
                            </div>
                            <div class="md:col-span-6 col-span-12 ltr:text-left rtl:text-right">
                                <label class="font-semibold">Durée:</label>
                                <select class="border border-slate-100 block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px]">
                                    <option value="heure">moins d'un mois</option>
                                    <option value="semaine">Entre 1 et 3 mois</option>
                                    <option value="mois">3 mois ou plus</option>
                                </select>
                            </div>

                            {{-- <div class="md:col-span-3 col-span-12 ltr:text-left rtl:text-right">
                                <label class="font-semibold md:invisible md:block hidden">Max:</label>
                                <div class="relative mt-1">
                                    <span class="w-10 h-10 bg-slate-50 border border-slate-100 absolute top-0 start-0 overflow-hidden rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign w-4 h-4 absolute top-3 start-3"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                    </span>
                                    <input type="number" class="form-input border border-slate-100 ps-12" placeholder="max" name="maxsalary">
                                </div>
                            </div> --}}
                        </div>




                        <div class="grid grid-cols-1 mt-8">
                            <h5 class="text-lg font-semibold">Address:</h5>
                        </div>

                        <div class="grid grid-cols-12 gap-4 mt-4">
                            <div class="md:col-span-6 col-span-12 ltr:text-left rtl:text-right">
                                <label class="font-semibold">Categorie<span class="text-red-600 inline-block ml-1">*</span> :</label>
                                <select class="border border-slate-100 block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px]">
                                    <option value="Plombier">Plombier</option>
                                    <option value="Electricien">Electricien</option>
                                    <option value="Jardinier">Jardinier</option>
                                    <option value="Mécanicien">Mécanicien</option>
                                    <option value="Menuisier">Menuisier</option>
                                    <option value="Peintre">Peintre</option>
                                    <option value="Constructeur">Constructeur</option>
                                    <option value="Forgeron">Forgeron</option>
                                </select>
                            </div>

                            <div class="md:col-span-6 col-span-12 ltr:text-left rtl:text-right">
                                <label class="font-semibold">Address<span class="text-red-600 inline-block ml-1">*</span> :</label>
                                <input id="RegisterName" type="text" class="border border-slate-100 block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px]" placeholder="Votre address">
                            </div>


                            {{-- <div class="col-span-12 ltr:text-left rtl:text-right">
                                <div class="w-full leading-[0] border-0">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0" class="w-full h-[200px] rounded shadow" allowfullscreen=""></iframe>
                                </div>
                            </div> --}}
                        </div>

                        <div class="grid grid-cols-1 gap-4 mt-4">
                            <div>
                                <button type="submit" id="submit" name="send" class="btn rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white p-2">Post Now</button>
                            </div>
                        </div>
                    </form><!--end form-->
                </div>
            </div>
        </div><!--end flex-->
    </div><!--end container-->
</section>
@include('components.scrollUp')
@include('components.footer')
@endsection