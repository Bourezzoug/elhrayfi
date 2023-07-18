
@extends('layouts.admin')
@section('content')
<div class="flex">
    @include('artisan.components.sidebar')

    <div class="w-full flex flex-col h-screen">
        @include('artisan.components.header')
    </div>
</div>
@endsection