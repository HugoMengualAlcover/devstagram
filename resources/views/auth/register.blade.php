@extends('layouts.app')

@section('titulo')
    Regístate en Devstagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-1/2 p-5">
            <img src="{{ asset('img/registrar.png') }}" alt="Imagen Registro">
        </div>
        <div class="md:w-1/3 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('register')}}" method="POST" novalidate>
                @csrf
               <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold" >
                        Nombre
                    </label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Tu nombre"
                        class="border p-3 w-full rounded @error('name') border-red-600 @enderror"
                        value="{{old('name')}}">
                </div> 

                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg txt-sm p-2
                        text-center">{{$message}}</p>
                    @enderror

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold" >
                        Username
                    </label>
                    <input
                        id="username"
                        name="username"
                        type="text"
                        placeholder="Tu nombre de usuario"
                        class="border p-3 w-full rounded @error('username') border-red-600 @enderror"
                        value="{{old('name')}}"/>
                </div>
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg txt-sm p-2
                        text-center">{{$message}}</p>
                    @enderror

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold" >
                        Email
                    </label>
                    <input
                        id="email"
                        name="email"
                        type="text"
                        placeholder="Tu email"
                        class="border p-3 w-full rounded @error('emial') border-red-600 @enderror"
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
                    <label for="password_confiration" class="mb-2 block uppercase text-gray-500 font-bold" >
                        Repetir Password
                    </label>
                    <input
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        placeholder="Repite tu contraseña"
                        class="border p-3 w-full rounded @error('password_confirmation') border-red-600 @enderror"/>
                </div> 
                
                <input 
                    type="submit"
                    value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky-800 transition-colors cursor-pointer
                    uppercase font-bold w-full p-3 text-white rounded-lg"
                />
            </form>
        </div>
    </div>
@endsection