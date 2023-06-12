@extends('layout.frontend')
@section('title', 'Elhrayfi.ma - ')
@section('meta_description', 'description')
@section('content')
@include('components.header')
<div class="container-fluid relative mt-20">
    <div class="grid grid-cols-1">
        <div class="w-full leading-[0] border-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d174994.03589057792!2d-7.6037778!3d33.5901667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd614f2cadd7%3A0x75f7966c413acac8!2sBd+de+Khouribga%2C+Casablanca+20250!5e0!3m2!1sen!2s!4v1564499918862!5m2!1sen!2s" style="border:0" class="w-full h-[500px]" allowfullscreen=""></iframe>
        </div>
    </div><!--end grid-->
</div>
<section class="relative py-16">
    <div class="container mx-auto p-6">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="lg:col-span-7 md:col-span-6">
                <img src="{{ asset('images/contact-img.svg') }}" alt="">
            </div>

            <div class="lg:col-span-5 md:col-span-6">
                <div class="lg:ms-5">
                    <div class="bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-700 p-6">
                        <h3 class="mb-6 text-2xl leading-normal font-semibold">Get in touch !</h3>

                        <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
                            <p class="mb-0" id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-6 mb-5">
                                    <label for="name" class="font-semibold">Your Name:</label>
                                    <input name="name" id="name" type="text" class="border border-slate-100 dark:border-slate-800 block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px]" placeholder="Name :">
                                <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div></div>

                                <div class="lg:col-span-6 mb-5">
                                    <label for="email" class="font-semibold">Your Email:</label>
                                    <input name="email" id="email" type="email" class="border border-slate-100 dark:border-slate-800 block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px]" placeholder="Email :">
                                </div>
                            </div>

                            <div class="grid grid-cols-1">
                                <div class="mb-5">
                                    <label for="subject" class="font-semibold">Your Question:</label>
                                    <input name="subject" id="subject" class="border border-slate-100 dark:border-slate-800 block w-full mt-1  h-[2.5rem] rounded px-2 py-2 text-[14px]" placeholder="Subject :">
                                </div>

                                <div class="mb-5">
                                    <label for="comments" class="font-semibold">Your Comment:</label>
                                    <textarea name="comments" id="comments" class="h-32 w-full rounded border bg-transparent py-2 px-3 text-[14px] mt-2" placeholder="Message :"></textarea>
                                </div>
                            </div>
                            <button type="submit" id="submit" name="send" class="btn bg-emerald-600 hover:bg-emerald-700 text-white rounded-md p-3">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end container-->
    
    <div class="container mx-auto p-6 mt-16">
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
            <div class="text-center px-6">
                <div class="relative text-transparent">
                    <div class="w-14 h-14 bg-emerald-600/5 text-emerald-600 rounded-xl text-2xl flex align-middle justify-center items-center mx-auto shadow-sm dark:shadow-gray-800">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                </div>

                <div class="content mt-7">
                    <h5 class="title h5 text-lg font-semibold">Phone</h5>
                    <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
                    
                    <div class="mt-5">
                        <a href="tel:+212600000000" class="btn btn-link text-emerald-600 hover:text-emerald-600 after:bg-emerald-600 transition duration-500">+212 600 000 000</a>
                    </div>
                </div>
            </div>

            <div class="text-center px-6">
                <div class="relative text-transparent">
                    <div class="w-14 h-14 bg-emerald-600/5 text-emerald-600 rounded-xl text-2xl flex align-middle justify-center items-center mx-auto shadow-sm dark:shadow-gray-800">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                </div>

                <div class="content mt-7">
                    <h5 class="title h5 text-lg font-semibold">Email</h5>
                    <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
                    
                    <div class="mt-5">
                        <a href="mailto:contact@elhrayfi.ma" class="btn btn-link text-emerald-600 hover:text-emerald-600 after:bg-emerald-600 transition duration-500">contact@elhrayfi.ma</a>
                    </div>
                </div>
            </div>

            <div class="text-center px-6">
                <div class="relative text-transparent">
                    <div class="w-14 h-14 bg-emerald-600/5 text-emerald-600 rounded-xl text-2xl flex align-middle justify-center items-center mx-auto shadow-sm dark:shadow-gray-800">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                </div>

                <div class="content mt-7">
                    <h5 class="title h5 text-lg font-semibold">Location</h5>
                    <p class="text-slate-400 mt-3">C/54 Northwest Freeway, Suite 558, <br> Houston, USA 485</p>
                    
                    <div class="mt-5">
                        <a href="https://www.google.com/maps/place/33%C2%B035'24.6%22N+7%C2%B036'13.6%22W/@33.5901689,-7.6050653,18z/data=!3m1!4b1!4m21!1m16!4m15!1m6!1m2!1s0xda7cd614f2cadd7:0x75f7966c413acac8!2sBd+de+Khouribga,+Casablanca+20250!2m2!1d-7.6067092!2d33.5895781!1m6!1m2!1s0xda7cd4778aa113b:0xb06c1d84f310fd3!2sCasablanca!2m2!1d-7.5898434!2d33.5731104!3e0!3m3!8m2!3d33.5901667!4d-7.6037778?entry=ttu" target="_blank"  class="video-play-icon read-more lightbox btn btn-link text-emerald-600 hover:text-emerald-600 after:bg-emerald-600 transition duration-500">View on Google map</a>
                    </div>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section>
@include('components.footer')
@endsection