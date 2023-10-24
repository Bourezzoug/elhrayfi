<div class="top-0 left-0 fixed z-[100]">
    <aside class="relative bg-white h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="/">
                <img src="{{ asset('images/elhrayfi-logo.png') }}" alt="Elhrayfi Logo">
            </a>
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="{{ Route('artisan.dashboard') }}" class="flex items-center  py-4 text-black pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            {{-- <a href="#" class="flex items-center text-black opacity-75 hover:opacity-100  py-4 pl-6 nav-item">
                <i class="fa-solid fa-store mr-3"></i>
                Produits
            </a> --}}

            @if(Auth::user()->paid !== 0 && strtotime(Auth::user()->created_at) >= strtotime('-7 days'))

                <a href="{{ Route('artisan.profile') }}" class="flex items-center text-black opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fa-solid fa-user mr-3.5"></i>
                    Mon Profile
                </a>
                <a href="{{ Route('experience.index') }}" class="flex items-center text-black opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fa-solid fa-list-check mr-3"></i>
                    Mes Expériences
                </a>
                <a href="{{ Route('education.index') }}" class="flex items-center text-black opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fa-solid fa-user-graduate mr-3.5"></i>
                    Mes Éducations
                </a>
                <a href="{{ Route('message.index') }}" class="flex items-center text-black opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <span class="inline-block relative">
                        <i class="fa-regular fa-comment-dots mr-3"></i>
                        {{-- <span class="text-[10px] rounded-full text-white bg-[#FA3E3E] h-4 w-4 flex items-center justify-center absolute -top-1 left-2">{{ $unreadConversationsCount }}</span> --}}
                    </span>
                    Mes Messages
                </a>
                
                <a href="{{ Route('payment.index') }}" class="flex items-center  opacity-75 text-black hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fa-regular fa-credit-card mr-2.5"></i>
                    Abonnement
                </a>
                @else
                <a href="{{ Route('payment.index') }}" class="flex items-center  opacity-75 text-black hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fa-regular fa-credit-card mr-2.5"></i>
                    Abonnement
                </a>
                @endif
        </nav>
    </aside>
</div>