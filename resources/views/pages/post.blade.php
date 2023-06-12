@extends('layout.frontend')
@section('title', 'Elhrayfi.ma - ')
@section('meta_description', 'description')
@section('content')
@include('components.header')
<section class="relative md:py-24 py-16">
    <div class="container mx-auto p-6">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-6">
                <div class="w-full">

                    <div>
                        <a 
                        class="mb-4 md:mb-0 w-full relative rounded inline-block" 
                        style="height: 30em;"
                        href="./blog.html">
                        <div class="absolute left-0 bottom-0 w-full h-full z-10"
                        style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
                        <img src="https://artisansofmorocco.files.wordpress.com/2014/04/artisans-2048-shot-2-1.jpg" class="absolute left-0 top-0 w-full h-full rounded z-0 object-cover" />
                        <div class="p-4 z-20">
        
                        <div class="flex mt-3">
                            <img src="https://randomuser.me/api/portraits/men/97.jpg"
                            class="h-10 w-10 rounded-full mr-2 object-cover" />
                            <div>
                            <p class="font-semibold text-gray-200 text-sm"> Mike Sullivan </p>
                            <p class="font-semibold text-gray-400 text-xs"> 14 Aug </p>
                            </div>
                        </div>
                        </div>
            
                    </a>
                    <div class="flex flex-col items-start">
                        <span class=" text-gray-500 inline-flex items-center   text-[17px]">Jul 31 Foundation, Make Up By Janny Joe 
                            Foundation, Organic
                            </span>
                            <a href="#" class="text-2xl uppercase leading-tight  py-3">
                                <!-- GLOWING SKIN IS A RESULT OF PROPER SKINCARE -->
                                Glowing Skin is a Result Of Proper Skincare
                            </a>
                            <p class=" text-gray-500  text-[17px] leading-loose">
                                Lorem ipsum dolor sit amet, odio legere cotidieque ex quo, an noster evertitur vel, ei solet democritum est. Id mel tibique ancillae convenire. Admodum tacimates maiestatis his id. Sed everti accusam facilisi ne. Est diam debitis an, error recusabo id pro, quo eripuit civibus ut. Mel ut tamquam erroribus, ad nonumy vituperata mei.Et qui falli latine consequuntur. In appellantur concludaturque pro. Commune scriptorem ad pri, ut euripidis posidonium has. Eum ei verear dolorum. Duo quas viris delenit cu, dolores inciderint scribentur mel in. Option elaboraret et mea, sea eligendi insolens scripserit et, tantas assueverit liberavisse vim at.Prima modus erroribus id eum, te mea munere doming equidem. At per ullum facilisis omittantur, veri ponderum definitionem an eum. Mel purto adipisci eu, ex eum nisl consul, has virtute inermis ne. Eripuit delicatissimi in eos. Pri ut congue dolorem. Impetus consequat in qui, pro posse bonorum delicatissimi ad, veri voluptatibus ei qui.Munere accusamus ex has, pri vero populo voluptaria eum no, eos atomoru.
        

                            </p>
                    </div>
                    <div class="flex items-center mt-3 gap-2">
                        <a href="#" class="px-2.5 py-1 border cursor-pointer  border-[#838383] transition-all">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/gardenia.secret/" target="_blank" class="px-2 py-1 border cursor-pointer  border-[#838383] transition-all">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="px-2 py-1 border cursor-pointer  border-[#838383] transition-all">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                        <a href="#" class="px-2 py-1 border cursor-pointer  border-[#838383] transition-all">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </div>
        
                    </div>
        
                    {{-- Comment Section --}}
        
                    <section class="bg-white pt-8">
                        <div class="max-w-2xl ">
                            <div class="flex justify-between items-center mb-6">
                              <h2 class="text-lg lg:text-2xl  uppercase text-gray-900">Discussion (2)</h2>
                          </div>
                          <form class="mb-6">
                              <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200">
                                  <label for="comment" class="sr-only">Your comment</label>
                                  <textarea id="comment" rows="6"
                                      class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none"
                                      placeholder="Write a comment..." required></textarea>
                              </div>
                              <button type="submit"
                                  class="inline-flex items-center py-4 px-4 text-xs font-medium text-center text-white bg-emerald-600 rounded-lg focus:ring-4 focus:ring-primary-200 hover:bg-primary-800">
                                  Post comment
                              </button>
                          </form>
                          <article class="p-6 mb-6 text-base bg-white rounded-lg">
                              <footer class="flex justify-between items-center mb-2">
                                  <div class="flex items-center">
                                      <p class="inline-flex items-center mr-3 text-sm text-gray-900"><img
                                              class="mr-2 w-10 h-10 rounded-full "
                                              src="https://biagiotti.qodeinteractive.com/wp-content/uploads/2019/08/admin-new-img.jpg"
                                              alt="JANNY JOE">JANNY JOE</p>
                                      <p class="text-sm text-gray-600"><time pubdate datetime="2022-02-08"
                                              title="February 8th, 2022">Feb. 8, 2022</time></p>
                                  </div>
                              </footer>
                              <p class="text-gray-500 ">Vim porro alterum at, labores noluisse ullam corper at me has. Lorem ipsum dolor sit amet, an rebum aeque tractatos has, te solet doctus ocurreret sit. Nam falli fabulas repudiandae. </p>
                              <div class="flex items-center mt-4 space-x-4">
                                  <button type="button"
                                      class="flex items-center text-sm text-gray-500 hover:underline">
                                      <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                                      Reply
                                  </button>
                              </div>
                          </article>
                          <article class="p-6 mb-6 ml-6 lg:ml-12 text-base bg-white rounded-lg">
                              <footer class="flex justify-between items-center mb-2">
                                  <div class="flex items-center">
                                      <p class="inline-flex items-center mr-3 text-sm text-gray-900"><img
                                              class="mr-2 w-10 h-10 rounded-full"
                                              src="https://biagiotti.qodeinteractive.com/wp-content/uploads/2019/07/user-img-2-100x100.jpg"
                                              alt="Jese Leos">Jese Leos</p>
                                      <p class="text-sm text-gray-600"><time pubdate datetime="2022-02-12"
                                              title="February 12th, 2022">Feb. 12, 2022</time></p>
                                  </div>
                              </footer>
                              <p class="text-gray-500">Much appreciated! Glad you liked it ☺️</p>
                              <div class="flex items-center mt-4 space-x-4">
                                  <button type="button"
                                      class="flex items-center text-sm text-gray-500 hover:underline">
                                      <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                                      Reply
                                  </button>
                              </div>
                          </article>
        
                        </div>
                      </section>
        
                </div>
            </div>

            <div class="lg:col-span-4 md:col-span-6">
                <div class="w-full  px-3">
                    <div class="hidden py-2 xl:col-span-3 lg:col-span-4 md:hidden lg:block">
                    <div class=" space-x-5">
                        <h4 class=" text-[17px] uppercase">RECENT POSTS</h4>
                    </div>
                    <div class="flex flex-col divide-y">
                        <div class="flex px-1 py-4 space-x-4">
                            <img alt="" class="flex-shrink-0 object-cover w-20 h-20 mr-4 " src="{{ asset('images/about-02.jpeg') }}">
                            <div class="flex flex-col flex-grow">
                                <a rel="noopener noreferrer" href="#" class="   text-[17px]">Vitae semper augue purus tincidunt libero.</a>
                                <p class="mt-auto text-xs ">Wed 24 May
                                </p>
                            </div>
                        </div>
                        <div class="flex px-1 py-4 space-x-4">
                            <img alt="" class="flex-shrink-0 object-cover w-20 h-20 mr-4 " src="{{ asset('images/about-01.jpeg') }}">
                            <div class="flex flex-col flex-grow">
                                <a rel="noopener noreferrer" href="#" class=" text-[17px] ">Vitae semper augue purus tincidunt libero.</a>
                                <p class="mt-auto text-xs ">Wed 24 May
                                </p>
                            </div>
                        </div>
                        <div class="flex px-1 py-4 space-x-4">
                            <img alt="" class="flex-shrink-0 object-cover w-20 h-20 mr-4 " src="{{ asset('images/about-03.jpeg') }}">
                            <div class="flex flex-col flex-grow">
                                <a rel="noopener noreferrer" href="#" class=" text-[17px] ">Vitae semper augue purus tincidunt libero.</a>
                                <p class="mt-auto text-xs ">Wed 24 May
                                </p>
                            </div>
                        </div>
                        <div class="flex px-1 py-4 space-x-4">
                            <img alt="" class="flex-shrink-0 object-cover w-20 h-20 mr-4 " src="{{ asset('images/about-04.jpeg') }}">
                            <div class="flex flex-col flex-grow">
                                <a rel="noopener noreferrer" href="#" class=" text-[17px] ">Vitae semper augue purus tincidunt libero.</a>
                                <p class="mt-auto text-xs ">Wed 24 May
                                </p>
                            </div>
                        </div>
                    </div>
                    </div>
        
        
                </div>
            </div>
        </div>
    </div>


</section>
@include('components.scrollUp')
@include('components.footer')
@endsection