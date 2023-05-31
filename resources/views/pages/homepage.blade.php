@extends('layout.frontend')
@section('title', 'Elhrayfi.ma - ')
@section('meta_description', 'description')
@section('content')
@include('components.header')
<section id="hero" class="w-full h-[90vh] bg-cover bg-center relative">
    <div class="flex flex-col items-center justify-center h-full space-y-10">
        <div>
            <h1 class="text-6xl text-white font-semibold">Find Your <span class="text-green-600">Desire</span> Job</h1>
            <p class="text-xl text-white font-normal text-center">Jobs, Employment & Future Career Opportunities</p>
        </div>
        <div class="grid grid-cols-10 bg-black w-10/12 h-20 rounded-full overflow-hidden content relative" style=" border: 10px solid rgba(255, 255, 255, 0.5)">
            <div class="col-span-3 relative">
                <input type="text" placeholder="Job Title" class="h-full pl-10 w-full">
                <i class="fa-solid fa-magnifying-glass gradient-text  absolute right-5 top-1/2 -translate-y-1/2 text-xl icon"></i>
                {{-- <i class="fi fi-rr-search "></i>
                <i class="fi fi-rs-square-right">sat</i> --}}
            </div>
            <div class="col-span-3 relative">
                {{-- <input type="text" placeholder="Ville" class="h-full pl-10 w-full"> --}}
                <select name="" id="" class="h-full pl-10 w-full">
                    <option value="" readonly="true" hidden="true"
                    selected>Choisir votre ville</option>
                    @foreach ($cities as $ville)
                    <option value="{{ $ville['ville'] }}">{{ $ville['ville'] }}</option>
                    @endforeach
                </select>
                <i class="fa-solid fa-location-dot gradient-text  absolute right-0 top-1/2 -translate-y-1/2 text-xl icon"></i>
            </div>
            <div class="col-span-3 relative">
                <input type="text" placeholder="Categorie" class="h-full pl-10 w-full">
                <i class="fa-solid fa-tag gradient-text  absolute right-5 top-1/2 -translate-y-1/2 text-xl icon"></i>
            </div>
            <div class="col-span-1 flex items-center justify-center bg-gradient-to-r from-[#38a745] to-[#4cce5b]">
                <button aria-label="send" class="text-white">Envoyer</button>
            </div>
        </div>
        <div class="md:pt-10">
            <a href="#" class="bg-gradient-to-r from-[#38a745] to-[#4cce5b] text-white py-3 px-4 rounded text-xl hover:scale-110 transition-transform inline-block">Créer votre profil</a>
        </div>
        
    </div>
</section>
<section id="features" class="bg-gradient-to-r from-[#38a745] to-[#4cce5b]">
    <div class="container px-32 py-6 mx-auto flex justify-around items-center">
        <div class="flex flex-col items-center space-y-2" >
            <div class="feature-component relative" style=" border: 10px solid rgba(255, 255, 255, 0.4)">
                <img src="{{ asset('images/register.png') }}" class="p-3 w-16 bg-white" alt="">
            </div>
            <p class="text-md text-white font-semibold">Inscrivez-vous</p>
        </div>
        <div class="flex flex-col items-center space-y-2" >
            <div class="feature-component relative" style=" border: 10px solid rgba(255, 255, 255, 0.4)">
                <img src="{{ asset('images/resume.png') }}" class="p-3 w-16 bg-white" alt="">
            </div>
            <p class="text-md text-white font-semibold">Téléchargez votre CV</p>
        </div>
        <div class="flex flex-col items-center space-y-2" >
            <div style=" border: 10px solid rgba(255, 255, 255, 0.4)">
                <img src="{{ asset('images/job.png') }}" class="p-3 w-16 bg-white" alt="">
            </div>
            <p class="text-md text-white font-semibold">Commencer à postuler</p>
        </div>

    </div>
</section>
<section id="categories" class="my-10">
    <h2 class="text-3xl text-center font-semibold py-10">Choose Your Desire Category</h2>
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
    <h2 class="text-3xl text-center font-semibold py-10">Pourquoi nous choisir?</h2>
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
<section id="annoce">
    <h2 class="text-3xl text-center font-semibold py-10">Les dernières annonces</h2>
        <div class="container mx-auto p-6">
            <div class="grid grid-cols-3">
                <div class="col-span-1">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-center ml-5">
                            <img class="w-20 h-20 mb-3 mt-6 rounded-full shadow-lg" src="{{ asset('images/avatar.png') }}" alt="Bonnie image"/>
                            <div class="ml-5">
                                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
                                <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
                            </div>
                        </div>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Cherche Menuiserie - Huisserie - Agencement</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Bonjour, je cherche quelqu'un pour raboter 2 portes en urgence et boucher au mieux le plafond suivant la photo svp. J'ai besoin pour demain...</p>
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gradient-to-r from-[#38a745] to-[#4cce5b] rounded-lg ">
                                Voir plus
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-center ml-5">
                            <img class="w-20 h-20 mb-3 mt-6 rounded-full shadow-lg" src="{{ asset('images/avatar-02.png') }}" alt="Bonnie image"/>
                            <div class="ml-5">
                                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
                                <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
                            </div>
                        </div>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Cherche Menuiserie - Huisserie - Agencement</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Bonjour, je cherche quelqu'un pour raboter 2 portes en urgence et boucher au mieux le plafond suivant la photo svp. J'ai besoin pour demain...</p>
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gradient-to-r from-[#38a745] to-[#4cce5b] rounded-lg ">
                                Voir plus
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-center ml-5">
                            <img class="w-20 h-20 mb-3 mt-6 rounded-full shadow-lg" src="{{ asset('images/avatar-03.png') }}" alt="Bonnie image"/>
                            <div class="ml-5">
                                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
                                <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
                            </div>
                        </div>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Cherche Menuiserie - Huisserie - Agencement</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Bonjour, je cherche quelqu'un pour raboter 2 portes en urgence et boucher au mieux le plafond suivant la photo svp. J'ai besoin pour demain...</p>
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gradient-to-r from-[#38a745] to-[#4cce5b] rounded-lg ">
                                Voir plus
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="flex justify-center">
            <a href="{{ Route('blog.index') }}" class="inline-flex items-center p-3 text-sm font-medium text-center text-white bg-gradient-to-r from-[#38a745] to-[#4cce5b] rounded-lg ">
                Voir Tous les annonces
            </a>
        </div>
</section>
<section id="stats" class="my-10 bg-gradient-to-r from-[#38a745] to-[#4cce5b]">
    <div class="container mx-auto px-6 py-16">
        <div class="grid grid-cols-4 gap-5">
            <div class="col-span-1 flex flex-col items-center">
                <div>
                    <img src="{{ asset('images/artisans.png') }}" class="w-16" alt="">
                </div>
                <div>
                    <p class="text-5xl text-white font-semibold text-center pt-3">10+</p>
                    <p class="text-xl text-white font-semibold text-center pt-3">Artisans</p>
                </div>
            </div>
            <div class="col-span-1 flex flex-col items-center">
                <div>
                    <img src="{{ asset('images/cv.png') }}" class="w-16" alt="">
                </div>
                <div>
                    <p class="text-5xl text-white font-semibold text-center pt-3">10+</p>
                    <p class="text-xl text-white font-semibold text-center pt-3">CV</p>
                </div>
            </div>
            <div class="col-span-1 flex flex-col items-center">
                <div>
                    <img src="{{ asset('images/job-seeker.png') }}" class="w-16" alt="">
                </div>
                <div>
                    <p class="text-5xl text-white font-semibold text-center pt-3">10+</p>
                    <p class="text-xl text-white font-semibold text-center pt-3">Annonces</p>
                </div>
            </div>
            <div class="col-span-1 flex flex-col items-center">
                <div>
                    <img src="{{ asset('images/satisfaction.png') }}" class="w-16" alt="">
                </div>
                <div>
                    <p class="text-5xl text-white font-semibold text-center pt-3">99%</p>
                    <p class="text-xl text-white font-semibold text-center pt-3">Clients Satisfaction</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="products" class="py-10">
    <div class="flex items-center justify-center flex-col concept">
      <h2 class="text-2xl sm:text-3xl md:text-header my-8 font-Lato uppercase relative">Featured Profile</h2>
    </div>
    <div class="container mx-auto p-6">
      <div class="products  owl-carousel owl-theme">
          {{-- <div class="left-scroll mt-24 cursor-pointer">
              <img src="{{ asset('images/eye.png') }}" class="w-16" alt="">
          </div>  --}}
              <div class="grid-cols-1 card w-72">
                  <div class="card-img relative transition-all">
                      <a href="#">
                      <div class="bg h-full opacity-0 w-full absolute top-0 left-0 transition-all"></div>
                      </a>
                      <a href="#">
                          <img src="{{ asset('images/profile-01.png') }}" class="w-56 h-72 object-cover" alt="">
                      </a>
                      <div class="icons  gap-3 items-center absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 hidden z-30">
                          <a href="#">
                              <span class="w-8 border border-gray-200 p-2 text-center hover:bg-black hover:border-black hover:text-white">
                                  <i class="fa-solid fa-plus"></i>
                              </span>
                          </a>
                          <a href="#">
                              <span class="w-8 border border-gray-200 p-2 text-center hover:bg-black hover:border-black hover:text-white">
                                  <i class="fa-solid fa-eye"></i>
                              </span>
                          </a>
                          <a href="#">
                              <span class="w-8 border border-gray-200 p-2 text-center hover:bg-black hover:border-black hover:text-white">
                                  <i class="fa-regular fa-heart"></i>
                              </span>
                          </a>
                      </div>
                  </div>
                  <div class="card-title">
                    <h4 class=" pt-3 text-lg uppercase font-Lato">Ibrahim</h4>
                    <p class=" text-gray-400 font-cormorant mt-2">Peintre</p>
                    <a href="#" class="font-cormorant text-sm flex items-center mt-2 bg-gradient-to-r from-[#38a745] to-[#4cce5b] text-white w-fit p-2 rounded">
                      Voir Plus
                      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>

                </div>
              </div>
              <div class="grid-cols-1 card w-72">
                  <div class="card-img relative transition-all">
                      <a href="#">
                      <div class="bg h-full opacity-0 w-full absolute top-0 left-0 transition-all"></div>
                      </a>
                      <a href="#">
                          <img src="{{ asset('images/profile-02.jpeg') }}" class="w-56 h-72 object-cover" alt="">
                      </a>
                      <div class="icons  gap-3 items-center absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 hidden z-30">
                          <a href="#">
                              <span class="w-8 border border-gray-200 p-2 text-center hover:bg-black hover:border-black hover:text-white">
                                  <i class="fa-solid fa-plus"></i>
                              </span>
                          </a>
                          <a href="#">
                              <span class="w-8 border border-gray-200 p-2 text-center hover:bg-black hover:border-black hover:text-white">
                                  <i class="fa-solid fa-eye"></i>
                              </span>
                          </a>
                          <a href="#">
                              <span class="w-8 border border-gray-200 p-2 text-center hover:bg-black hover:border-black hover:text-white">
                                  <i class="fa-regular fa-heart"></i>
                              </span>
                          </a>
                      </div>
                  </div>
                  <div class="card-title">
                      <h4 class=" pt-3 text-lg uppercase font-Lato">Ibrahim</h4>
                      <p class=" text-gray-400 font-cormorant mt-2">Menuisier</p>
                      <a href="#" class="font-cormorant text-sm flex items-center mt-2 bg-gradient-to-r from-[#38a745] to-[#4cce5b] text-white w-fit p-2 rounded">
                        Voir Plus
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>

                  </div>
              </div>
              <div class="grid-cols-1 card w-72">
                  <div class="card-img relative transition-all">
                      <a href="#">
                      <div class="bg h-full opacity-0 w-full absolute top-0 left-0 transition-all"></div>
                      </a>
                      <a href="#">
                          <img src="{{ asset('images/profile-03.jpeg') }}" class="w-56 h-72 object-cover" class="w-full h-full" alt="">
                      </a>
                      <div class="icons  gap-3 items-center absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 hidden z-30">
                          <a href="#">
                              <span class="w-8 border border-gray-200 p-2 text-center hover:bg-black hover:border-black hover:text-white">
                                  <i class="fa-solid fa-plus"></i>
                              </span>
                          </a>
                          <a href="#">
                              <span class="w-8 border border-gray-200 p-2 text-center hover:bg-black hover:border-black hover:text-white">
                                  <i class="fa-solid fa-eye"></i>
                              </span>
                          </a>
                          <a href="#">
                              <span class="w-8 border border-gray-200 p-2 text-center hover:bg-black hover:border-black hover:text-white">
                                  <i class="fa-regular fa-heart"></i>
                              </span>
                          </a>
                      </div>
                  </div>
                  <div class="card-title">
                    <h4 class=" pt-3 text-lg uppercase font-Lato">Ibrahim</h4>
                    <p class=" text-gray-400 font-cormorant mt-2">Forgeron</p>
                    <a href="#" class="font-cormorant text-sm flex items-center mt-2 bg-gradient-to-r from-[#38a745] to-[#4cce5b] text-white w-fit p-2 rounded">
                      Voir Plus
                      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>

                </div>
              </div>
              <div class="grid-cols-1 card w-72">
                  <div class="card-img relative transition-all">
                      <a href="#">
                      <div class="bg h-full opacity-0 w-full absolute top-0 left-0 transition-all"></div>
                      </a>
                      <a href="#">
                          <img src="{{ asset('images/profile-04.jpeg') }}" class="w-56 h-72 object-cover" alt="">
                      </a>
                      <div class="icons  gap-3 items-center absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 hidden z-30">
                          <a href="#">
                              <span class="w-8 border border-gray-200 p-2 text-center hover:bg-black hover:border-black hover:text-white">
                                  <i class="fa-solid fa-plus"></i>
                              </span>
                          </a>
                          <a href="#">
                              <span class="w-8 border border-gray-200 p-2 text-center hover:bg-black hover:border-black hover:text-white">
                                  <i class="fa-solid fa-eye"></i>
                              </span>
                          </a>
                          <a href="#">
                              <span class="w-8 border border-gray-200 p-2 text-center hover:bg-black hover:border-black hover:text-white">
                                  <i class="fa-regular fa-heart"></i>
                              </span>
                          </a>
                      </div>
                  </div>
                  <div class="card-title">
                    <h4 class=" pt-3 text-lg uppercase font-Lato">Ibrahim</h4>
                    <p class=" text-gray-400 font-cormorant mt-2">Electricien</p>
                    <a href="#" class="font-cormorant text-sm flex items-center mt-2 bg-gradient-to-r from-[#38a745] to-[#4cce5b] text-white w-fit p-2 rounded">
                      Voir Plus
                      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>

                </div>
              </div>
  
  
  
          <!-- Other Products -->
  
          <!-- <div class="left-scroll mt-24 cursor-pointer">
              <img src="images/right_arrow.png" class="w-16" alt="">
          </div> -->
      </div>
    </div>
</section>
<section id="blogs">
    <div class="flex items-center justify-center flex-col concept">
        <h2 class="text-2xl sm:text-3xl md:text-header my-8 font-Lato uppercase relative">Our Latest Blogs</h2>
      </div>
    <div class="container mx-auto p-6">
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
    </div>
</section>
<section id='newsletter' class="items-center mt-10 max-w-screen-xl px-4 gap-4 md:flex xl:px-8 xl:gap-12 bg-gradient-to-l from-green-500 to-green-700 py-14 rounded-xl container mx-auto p-6">  
    <div class="flex-1 space-y-4 text-center md:text-left">
      <h1 class="text-2xl text-gray-100 font-semibold lg:text-3xl">
        Subscribe to our newsletter
      </h1>
      <p class="text-gray-200 leading-relaxed text-center text-sm md:text-justify md:pr-12">
        We'll send you best of our blog just once a month. We promise.
      </p>
    </div>
    <div class="mt-5 md:mt-0 flex-1 px-0 sm:px-4">
      <form class="items-center justify-center sm:flex">
        <input type="email" placeholder="Enter e-mail"
          class="text-gray-500 w-full p-2 rounded-md border outline-none focus:border-green-800" />
        <button aria-label="subscribe"
          class="w-full mt-3 px-5 py-2 rounded-md text-white bg-green-700 hover:bg-green-800 outline-none shadow-md focus:shadow-none focus:ring-2 ring-offset-2 ring-indigo-600 sm:mt-0 sm:ml-3 sm:w-auto">
          Subscribe
        </button>
      </form>
      <p class="mt-3 text-xs text-gray-200">
        Product updates, announcements, and discounts.
        Read our <a class="text-gray-100 hover:text-gray-50 underline" href="#"> Privacy Policy </a>
      </p>  
    </div>
  </section>
{{-- <footer class="mt-20 bg-gradient-to-r from-[#38a745] to-[#4cce5b] relative ">
    
</footer> --}}
<footer class="mt-20" style="-webkit-font-smoothing: antialiased;">
    {{-- <img src="images/logo.png" class="h-20 mx-auto pt-8" alt=""> --}}
    <div class="flex flex-col md:flex-row container mx-auto px-6 text-white justify-between md:items-center pt-16">
        <div>
            <img src="images/logo.png" class="h-16" alt="">
            <p class="font-cormorant py-1 mt-1 text-[1rem]  max-w-md">
                Gardenia Secret sélectionne soigneusement des produits de beauté pour vous faire découvrir de nouvelles marques et vous aider à vous sentir belle et confiante o tahte le texte dir les logo reseaux sociaux
            </p>
            <div class="flex items-center my-2 gap-2">
              <a href="#" class=" bg-[#e9b5a8] px-3.5 py-2 border cursor-pointer  border-none rounded-full transition-all">
                <i class="fa-brands fa-facebook-f"></i>
              </a>
              <a href="https://www.instagram.com/gardenia.secret/" target="_blank" class="px-3 py-2 border cursor-pointer  bg-[#e9b5a8] border-none rounded-full transition-all">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a href="#" class="px-2.5 py-2 border cursor-pointer  bg-[#e9b5a8] border-none rounded-full transition-all">
                <i class="fa-brands fa-youtube"></i>
              </a>
              <a href="#" class="px-3 py-2 border cursor-pointer  bg-[#e9b5a8] border-none rounded-full transition-all">
                <i class="fa-brands fa-tiktok"></i>
              </a>
            </div>
        </div>
        <div class="mt-5 md:mt-0">
            <h4 class="uppercase text-xl font-Lato">Concept</h4>
            <p class="font-cormorant py-1 mt-1 "><a href="">Notre concept</a></p>
            <p class="font-cormorant py-1 "><a href="mailto:biagiottitheme@gmail.com">Activer une carte cadeau</a></p>
            <p class="font-cormorant py-1 "><a href="tel:+ 99 411 725 39 12">Magazine</a></p>
            <p class="font-cormorant py-1 "><a href="tel:+ 99 411 725 39 12">E-boutique</a></p>
            <p class="font-cormorant py-1 "><a href="tel:+ 99 411 725 39 12">Contactez-nous</a></p>
          </div>
        <div class="lg:mr-24 mt-5 md:mt-0">
          <h4 class="uppercase text-xl font-Lato">Support</h4>
          <p class="font-cormorant py-1 mt-1  "><a href="">Suivi de commande</a></p>
          <p class="font-cormorant py-1 "><a href="mailto:biagiottitheme@gmail.com">Services clients</a></p>
          <p class="font-cormorant py-1 "><a href="tel:+ 99 411 725 39 12">Livraison et retour</a></p>
          <p class="font-cormorant py-1 "><a href="tel:+ 99 411 725 39 12">Question et réponse</a></p>
          <p class="font-cormorant py-1 "><a href="tel:+ 99 411 725 39 12">Plan de site</a></p>
        </div>
    </div>
    <div class="container mx-auto p-6 flex items-center justify-between nav-footer py-3 text-white border-t border-white mt-12">


        <div class="  py-3 flex justify-around text-sm text-white">
            <p>&copy; {{ date('Y',strtotime(now())) }} Elhrayfi. tous droits réservés </p>
        </div>

    <div class="  py-3 flex flex-col md:flex-row  text-sm  ">
        <a href="#" class="uppercase font-Lato text-xs mr-6">Privacy Policy</a>
        <a href="#" class="uppercase font-Lato text-xs">Terms & Conditions</a>
      </div>


    </div>

</footer>
@endsection