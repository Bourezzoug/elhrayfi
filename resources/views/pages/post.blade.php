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
                        <img src="{{ $post->image }}" class="absolute left-0 top-0 w-full h-full rounded z-0 object-cover" />
                        <div class="p-4 z-20">
        
                        <div class="flex mt-3">
                            <img src="https://randomuser.me/api/portraits/men/97.jpg"
                            class="h-10 w-10 rounded-full mr-2 object-cover" />
                        </div>
                        </div>
            
                    </a>
                    <div class="flex flex-col items-start">
                        <span class=" text-gray-500 inline-flex items-center   text-[17px]">{{ strftime('%A %e %B %Y', strtotime($post->created_at)) }}

                            </span>
                            <p class="text-2xl uppercase leading-tight  py-3">
                                <!-- GLOWING SKIN IS A RESULT OF PROPER SKINCARE -->
                                {{ $post->title }}
                            </p>
                            <div class=" text-gray-900  text-[17px] leading-loose text-justify">
                                {!! $post->body !!}
                            </div>
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

            <div class="lg:col-span-4 md:col-span-6 ">
                <div class="w-full  px-3 ">
                    <div class="hidden py-2 xl:col-span-3 lg:col-span-4 md:hidden lg:block">
                    <div class=" space-x-5">
                        <h4 class=" text-[17px] uppercase">RECENT POSTS</h4>
                    </div>
                    <div class="flex flex-col divide-y">
                        {{-- <div class="flex px-1 py-4 space-x-4">
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
                        </div> --}}


                        @forelse ($recentArticle as $recentArticle)
                        <div class="flex px-1 py-4 space-x-4">
                            <img alt="{{ $recentArticle->image }}" class="flex-shrink-0 object-cover w-20 h-20 mr-4 " src="{{ $recentArticle->image }}">
                            <div class="flex flex-col flex-grow">
                                <a rel="noopener noreferrer" href="/blog/{{ $recentArticle->slug }}" class=" text-[17px] ">{{ $recentArticle->title }}</a>
                                <p class="text-xs mt-3">Il y'a {{ $recentArticle->created_at->diffForHumans(null, true) }}
                                </p>
                            </div>
                        </div>
                        @empty
                            
                        @endforelse
                        
                    </div>
                    <div class="mt-5 sm:px-4 max-w-2xl mx-auto">
                        <button type='button'
                            class='flex break-inside bg-blue-700 px-6 py-4 mb-4 w-full '>
                            <div class=''>
                            <div class='flex items-center justify-start flex-1 space-x-4'>
                                <svg width='25' height='25' viewBox='0 0 24 24' class="text-white">
                                    <path fill='currentColor'
                                    d='M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z' />
                                </svg>
                                <span class='font-medium mb-[-2px] text-white'>Facebook</span>
                                </div>
                            </div>
                        </button>
                        <button type='button'
                            class='flex break-inside bg-red-500 text-white px-6 py-4 mb-4 w-full '>
                            <div class=''>
                            <div class='flex items-center justify-start flex-1 space-x-4'>
                                <svg class="w-5 h-5 fill-current"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" /></svg>
                                <span class='font-medium mb-[-2px] text-white'>Youtube</span>
                                </div>
                            </div>
                        </button>
                        <button type='button'
                            class='flex break-inside bg-blue-400 text-white px-6 py-4 mb-4 w-full '>
                            <div class=''>
                            <div class='flex items-center justify-start flex-1 space-x-4'>
                                <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" /></svg>
                                <span class='font-medium mb-[-2px] text-white'>Twitter</span>
                                </div>
                            </div>
                        </button>
                        <button type='button'
                            class='flex break-inside bg-pink-600 text-white px-6 py-4 mb-4 w-full '>
                            <div class=''>
                            <div class='flex items-center justify-start flex-1 space-x-4'>
                                <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5"
                                fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                  d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                              </svg>
                                <span class='font-medium mb-[-2px] text-white'>Instagram</span>
                                </div>
                            </div>
                        </button>

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