@extends('master-layout')

@section('title', 'Home')

@section('content')
<div class="flex justify-center h-full">
    <div class="flex flex-col mt-8 items-center">
        <img src="{{ asset('storage/icons/logo.png') }}" alt="logo">
        <play-button-component></play-button-component>
    </div>
</div>
@endsection

