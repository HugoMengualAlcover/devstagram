@extends('layouts.app')

@section('titulo')
    Inicia sesión en Devstagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-1/2 p-5">
            <img src="{{ asset('img/usuario.svg') }}" alt="Imagen login de usuarios">
        </div>
        <div class="md:w-1/3 bg-white p-6 rounded-lg shadow-xl">
            <form method="POST" action="{{route('login')}}" novalidate>
                @csrf
                @if (session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-lg txt-sm p-2
                    text-center">{{session('mensaje')}}</p>
                @endif

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold" >
                        Email
                    </label>
                    <input
                        id="email"
                        name="email"
                        type="text"
                        placeholder="Tu email"
                        class="border p-3 w-full rounded @error('email') border-red-600 @enderror"
                        value="{{old('name')}}"/>
                </div> 
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg txt-sm p-2
                        text-center">{{$message}}</p>
                    @enderror

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold" >
                        Password
                    </label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Tu contraseña"
                        class="border p-3 w-full rounded @error('password') border-red-600 @enderror"/>
                </div> 
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg txt-sm p-2
                        text-center">{{$message}}</p>
                    @enderror
                

                <div class="mb-5">
                    <input type="checkbox" name="remember"> <label class="uppercase text-gray-500 text-sm">
                            Mantener mi sesión iniciada
                    </label>
                </div>

                <input 
                    type="submit"
                    value="Iniciar Sesión"
                    class="bg-sky-600 hover:bg-sky-800 transition-colors cursor-pointer
                    uppercase font-bold w-full p-3 text-white rounded-lg"
                />
            </form>
        </div>
    </div>
@endsection