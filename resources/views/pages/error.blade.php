@extends('layout.frontend')
@section('content')
<section class="relative bg-emerald-600/5">
    <div class="container-fluid relative">
        <div class="grid grid-cols-1">
            <div class="flex flex-col h-screen justify-center md:px-10 py-10 px-4">
                <div class="text-center">
                    <a href="/"><img src="{{ asset('images/elhrayfi-logo.png') }}" class="mx-auto h-10" alt=""></a>
                </div>
                <div class="title-heading text-center my-auto">
                    <img src="https://shreethemes.in/jobstack/layouts/assets/images/error.png" class="mx-auto" alt="">
                    <h1 class="mt-3 mb-6 md:text-4xl text-3xl font-bold">Page Not Found?</h1>
                    <p class="text-slate-400">Whoops, this is embarassing. <br> Looks like the page you were looking for wasn't found.</p>
                    
                    <div class="mt-4">
                        <a href="/" class="btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md p-2 my-6 inline-block">Back to Home</a>
                    </div>
                </div>
                <div class="text-center">
                    <p class="mb-0 text-slate-400 font-medium">© <script>document.write(new Date().getFullYear())</script> Elhrayfi. Design with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                </div>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section>
@endsection
