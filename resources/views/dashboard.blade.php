@extends('layouts.app')

@section('titulo')
    Tu cuenta
@endsection

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-2/3 lg:w-1/2 md:flex">
        </div>
        <div class="md:w-2/3 lg:w-1/2 px-5">
            <img src="{{asset('img/usuario.svg')}}" alt="imagen usuario">
        </div>
        <div class="md:w-2/3 lg:w-1/2 px-5">
            <p class="text-gray-700 text-2xl">{{auth()->user()->username}}</p>
        </div>
    </div>
@endsection