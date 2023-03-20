@extends('layouts.app')

@section('titulo')
    Perfil: {{$user->username}}
@endsection

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-2/3 lg:w-1/2 flex flex-col items-center md:flex-row">
        </div>
        <div class="md:w-2/3 lg:w-1/2 px-5">
            <img src="{{asset('img/usuario.svg')}}" alt="imagen usuario">
        </div>
        <div class="md:w-2/3 lg:w-1/2 px-5 flex flex-col items-ceter md:justify-center md:items-center py-10 md:py-10">
            <p class="text-gray-700 text-2xl">{{$user->username}}</p>

            <p class="text-gray-700 text-sm mb-3 font-bold mt-5">
                
                <span class="font-normal">Seguidores</span>
            </p>
            <p class="text-gray-700 text-sm mb-3 font-bold">

                <span class="font-normal">Seguidores</span>
            </p>
            <p class="text-gray-700 text-sm mb-3 font-bold">

                <span class="font-normal">Seguidores</span>
            </p>
        </div>
    </div>
@endsection