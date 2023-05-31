@extends('layout.frontend')
@section('title', 'Elhrayfi.ma - ')
@section('meta_description', 'description')
@section('content')
@include('components.header')
<div class="max-w-screen-xl container p-6 mx-auto">

    <main class="mt-10">


    <div class="block lg:flex lg:space-x-2 px-2 lg:p-0 mt-10 mb-10">
        <!-- post cards -->
        <div class="w-full lg:w-2/3">

            <div>
                <a 
                class="mb-4 md:mb-0 w-full relative rounded inline-block" 
                style="height: 24em;"
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
                <span class=" text-gray-500 inline-flex items-center justify-center font-cormorant text-[17px]">Jul 31 Foundation, Make Up By Janny Joe 
                    Foundation, Organic
                    </span>
                    <a href="#" class="text-2xl uppercase leading-tight font-Lato py-3">
                        <!-- GLOWING SKIN IS A RESULT OF PROPER SKINCARE -->
                        Evenements d'artisan dans les prochaines mois
                    </a>
                    <p class=" text-gray-500 font-cormorant text-[17px]">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi ...
                    </p>
            </div>
            <div class="flex items-center mt-3 gap-2">
                <a href="#" class="px-2.5 py-1 border cursor-pointer  border-[#838383] transition-all">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/gardenia.secret/" target="_blank" class="px-2 py-1 border cursor-pointer  border-[#838383] transition-all">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="#" class="px-1.5 py-1 border cursor-pointer  border-[#838383] transition-all">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                <a href="#" class="px-2 py-1 border cursor-pointer  border-[#838383] transition-all">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
            </div>

            </div>
            <div class="mt-16">
                <a 
                class="mb-4 md:mb-0 w-full relative rounded inline-block" 
                style="height: 24em;"
                href="./blog.html">
                <div class="absolute left-0 bottom-0 w-full h-full z-10"
                style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
                <img src="https://static.asianpaints.com/content/dam/asian_paints/blog/Contractor-Blogs/Things-To-Look-For-In-A-Painting-Contractor/contractor-blogs-things-to-look-for-in-a-painting-contractor-main-image-asian-paints.jpeg.transform/cc-width-652-height-455/image.webp" class="absolute left-0 top-0 w-full h-full rounded z-0 object-cover" />
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
                <span class="text-gray-500 inline-flex items-center justify-center font-cormorant text-[17px]">Jul 31 Foundation, Make Up By Janny Joe 
                    Foundation, Organic
                    </span>
                    <a href="#" class="text-2xl uppercase leading-tight font-Lato py-3">
                        5 Factors to Consider while looking for Painting Contractor
                    </a>
                    <p class="text-gray-500 font-cormorant text-[17px]">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi ...
                    </p>
                </div>

                <div class="flex items-center mt-3 gap-2">
                    <a href="#" class="px-2.5 py-1 border cursor-pointer  border-[#838383] transition-all">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/gardenia.secret/" target="_blank" class="px-2 py-1 border cursor-pointer  border-[#838383] transition-all">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="px-1.5 py-1 border cursor-pointer  border-[#838383] transition-all">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a href="#" class="px-2 py-1 border cursor-pointer  border-[#838383] transition-all">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                </div>


            </div>


        </div>

        <!-- right sidebar -->
        <div class="w-full lg:w-1/3 px-3">
            <div class="hidden py-2 xl:col-span-3 lg:col-span-4 md:hidden lg:block">
            <div class=" space-x-5">
                <h4 class="font-Lato text-[17px] uppercase">RECENT POSTS</h4>
            </div>
            <div class="flex flex-col divide-y">
                <div class="flex px-1 py-4">
                    <img alt="" class="flex-shrink-0 object-cover w-20 h-20 mr-4 " src="https://www.conexpoconagg.com/getmedia/9972612b-be91-447d-b593-fd2e60f59807/McCarthy_Craft_Trailer-1543805.aspx">
                    <div class="flex flex-col flex-grow">
                        <a rel="noopener noreferrer" href="#" class="  font-Lato text-[17px]">Vitae semper augue purus tincidunt libero.</a>
                        <p class="mt-auto text-xs font-Lato">Wed 24 May
                        </p>
                    </div>
                </div>
                <div class="flex px-1 py-4">
                    <img alt="" class="flex-shrink-0 object-cover w-20 h-20 mr-4 " src="https://grainger-prod.adobecqms.net/content/grainger/know-how/us/en/safety/electrical-hazard-safety/basic-electrical-maintenance/kh-qualified-vs-unqualified-electrical-workers/_jcr_content/root/responsivegrid/responsivegrid/articleheader/articleHeaderImage.img.jpg/1589922402372.jpg">
                    <div class="flex flex-col flex-grow">
                        <a rel="noopener noreferrer" href="#" class="font-Lato text-[17px] ">Vitae semper augue purus tincidunt libero.</a>
                        <p class="mt-auto text-xs font-Lato">Wed 24 May
                        </p>
                    </div>
                </div>
                <div class="flex px-1 py-4">
                    <img alt="" class="flex-shrink-0 object-cover w-20 h-20 mr-4 " src="https://lirp.cdn-website.com/c7d25243/dms3rep/multi/opt/painting+hamilton-640w.jpg">
                    <div class="flex flex-col flex-grow">
                        <a rel="noopener noreferrer" href="#" class="font-Lato text-[17px] ">Vitae semper augue purus tincidunt libero.</a>
                        <p class="mt-auto text-xs font-Lato">Wed 24 May
                        </p>
                    </div>
                </div>
                <div class="flex px-1 py-4">
                    <img alt="" class="flex-shrink-0 object-cover w-20 h-20 mr-4 " src="https://img.freepik.com/free-photo/close-up-experienced-carpenter-his-younger-employee_329181-15693.jpg">
                    <div class="flex flex-col flex-grow">
                        <a rel="noopener noreferrer" href="#" class="font-Lato text-[17px] ">Vitae semper augue purus tincidunt libero.</a>
                        <p class="mt-auto text-xs font-Lato">Wed 24 May
                        </p>
                    </div>
                </div>
            </div>
            </div>
            <div class="mt-10">
                <div>
                    <h4 class="pb-5 font-Lato text-[17px] uppercase">Instagram</h4>
                    <div class="grid grid-cols-3 gap-5">
                        <div class="col-span-1 relative insta-card">

                            <a href="">
                                <div class="absolute left-0 bottom-0 w-full h-0 z-10 insta-overlay transition-all"
                                style="background-image: linear-gradient(180deg,transparent,rgba(255,255,255,.7));"></div>
                                <img src="https://www.vmcdn.ca/f/files/greatwest/images/branded-content-features/home-sweet-home/2023-articles/02-2-plumber.jpg" class="w-full h-28 object-cover" alt="">
                            </a>
                        </div>
                        <div class="col-span-1 relative insta-card">
                            <a href="">
                                <div class="absolute left-0 bottom-0 w-full h-0 z-10 insta-overlay transition-all"
                                style="background-image: linear-gradient(180deg,transparent,rgba(255,255,255,.7));"></div>
                                <img src="https://www.travaux-electrique.fr/wp-content/uploads/2014/08/Electricien.jpg" class="w-full h-28 object-cover" alt="">
                            </a>
                        </div>
                        <div class="col-span-1 relative insta-card">
                            <a href="">
                                <div class="absolute left-0 bottom-0 w-full h-0 z-10 insta-overlay transition-all"
                                style="background-image: linear-gradient(180deg,transparent,rgba(255,255,255,.7));"></div>
                                <img src="https://previews.123rf.com/images/alessandroguerriero/alessandroguerriero1511/alessandroguerriero151100067/48553446-portrait-of-handsome-young-smiling-painter-in-white-dungarees-blue-t-shirt-cap-and-gloves-leaning.jpg" class="w-full h-28 object-cover" alt="">
                            </a>
                        </div>
                        <div class="col-span-1 relative insta-card">
                            <a href="">
                                <div class="absolute left-0 bottom-0 w-full h-0 z-10 insta-overlay transition-all"
                                style="background-image: linear-gradient(180deg,transparent,rgba(255,255,255,.7));"></div>
                                <img src="https://s3-us-west-2.amazonaws.com/jobcorps.gov/styles/fs_bg_img_sm/s3/2017-10/JC_Career_Carpentry_2.jpg" class="w-full h-28 object-cover" alt="">
                            </a>
                        </div>
                        <div class="col-span-1 relative insta-card">
                            <a href="">
                                <div class="absolute left-0 bottom-0 w-full h-0 z-10 insta-overlay transition-all"
                                style="background-image: linear-gradient(180deg,transparent,rgba(255,255,255,.7));"></div>
                                <img src="https://www.travaux.com/images/cms/medium/9fdc61d5-e854-4274-8431-b1fca6fcc969.jpg" class="w-full h-28 object-cover" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
    </main>
    <!-- main ends here -->

</div>
@endsection