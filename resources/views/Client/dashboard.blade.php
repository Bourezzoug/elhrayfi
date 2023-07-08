
@extends('layouts.admin')
@section('content')
<div class="flex">
    @include('Client.components.sidebar')

    <div class="w-full flex flex-col h-screen">
        @include('Client.components.header')
    </div>
</div>
@endsection