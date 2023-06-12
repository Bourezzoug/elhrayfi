<footer class="mt-20 bg-[#0f172a]" style="-webkit-font-smoothing: antialiased;">
    {{-- <img src="images/logo.png" class="h-20 mx-auto pt-8" alt=""> --}}
    <div class="flex flex-col md:flex-row container mx-auto px-6 text-white justify-between md:items-center pt-16">
        <div>
            <a href="/">
              <img src="{{ asset('images/elhrayfi-footer-logo.png') }}" class="" alt="">
            </a>
            <p class=" py-1 mt-1 text-[1rem]  max-w-md">
                Avec Elhrayfi, vous bénéficiez d'une communication transparente et d'une expérience client exceptionnelle. Simplifiez vos recherches et gagnez du temps.
            </p>
            <div class="flex items-center my-2 gap-2">
              <a href="#" class=" px-3.5 py-2 border cursor-pointer bg-white border-none rounded-full transition-all">
                <i class="fa-brands fa-facebook-f text-emerald-600"></i>
              </a>
              <a href="https://www.instagram.com/gardenia.secret/" target="_blank" class="px-3 py-2 border cursor-pointer  bg-white border-none rounded-full transition-all">
                <i class="fa-brands fa-instagram text-emerald-600"></i>
              </a>
              <a href="#" class="px-2.5 py-2 border cursor-pointer  bg-white border-none rounded-full transition-all">
                <i class="fa-brands fa-youtube text-emerald-600"></i>
              </a>
              <a href="#" class="px-3 py-2 border cursor-pointer  bg-white border-none rounded-full transition-all">
                <i class="fa-brands fa-linkedin text-emerald-600"></i>
              </a>
            </div>
        </div>
        <div class="mt-5 md:mt-0">
            <h4 class="uppercase text-xl ">Lien direct</h4>
            <p class=" py-1 mt-1"><a href="{{ Route('about.index') }}">À propos</a></p>
            <p class=" py-1 "><a href="{{ Route('artisans.index') }}">Candidatures</a></p>
            <p class=" py-1 "><a href="{{ Route('joblist.index') }}">Listes d'emplois</a></p>
            <p class=" py-1 "><a href="{{ Route('blog.index') }}">Blog</a></p>
            <p class=" py-1 "><a href="{{ Route('contact.index') }}">Contactez-nous</a></p>
          </div>
        {{-- <div class="lg:mr-24 mt-5 md:mt-0">
          <h4 class="uppercase text-xl ">Support</h4>
          <p class=" py-1 mt-1  "><a href="">Suivi de commande</a></p>
          <p class=" py-1 "><a href="mailto:biagiottitheme@gmail.com">Services clients</a></p>
          <p class=" py-1 "><a href="tel:+ 99 411 725 39 12">Livraison et retour</a></p>
          <p class=" py-1 "><a href="tel:+ 99 411 725 39 12">Question et réponse</a></p>
          <p class=" py-1 "><a href="tel:+ 99 411 725 39 12">Plan de site</a></p>
        </div> --}}
    </div>
    <div class="container mx-auto p-6 flex items-center justify-between nav-footer py-3 text-white border-t border-white mt-12">


        <div class="  py-3 flex justify-around text-sm text-white">
            <p>&copy; {{ date('Y',strtotime(now())) }} Elhrayfi. tous droits réservés </p>
        </div>

    <div class="  py-3 flex flex-col md:flex-row  text-sm  ">
        <a href="#" class="uppercase  text-xs mr-6">Privacy Policy</a>
        <a href="#" class="uppercase  text-xs">Terms & Conditions</a>
      </div>


    </div>

</footer>