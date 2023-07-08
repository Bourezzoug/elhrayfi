<div class="top-0 left-0 fixed z-[100]">
    <aside class="relative bg-white h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <img src="https://gardeniasecret.com/images/logo.png" alt="">
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="{{ Route('dashboard') }}" class="flex items-center  py-4 text-black pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            {{-- <a href="#" class="flex items-center text-black opacity-75 hover:opacity-100  py-4 pl-6 nav-item">
                <i class="fa-solid fa-store mr-3"></i>
                Produits
            </a> --}}
            @if (Auth::user()->user_id == 1)
                <a href="{{ Route('blog.index') }}" class="flex items-center text-black opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fa-regular fa-newspaper mr-3"></i>
                    Articles
                </a>
                <a href="{{ Route('inscrit.index') }}" class="flex items-center  opacity-75 text-black hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fa-solid fa-users mr-3"></i>
                    Inscrits
                </a>
            @elseif(Auth::user()->user_type == 3)
                <a href="{{ Route('offre.index') }}" class="flex items-center  opacity-75 text-black hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fa-solid fa-users mr-3"></i>
                    Offres du travail
                </a>
            @endif
        </nav>
    </aside>
</div>