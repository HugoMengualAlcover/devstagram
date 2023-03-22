@extends('layouts.app')

@section('titulo')
    {{$post->titulo}}
@endsection

@section('contenido')
    <div class="container mx-auto flex">
        <div class="md:w-1/2">
                <img src="{{asset('uploads') . '/' . $post->imagen}}" alt="Imagen del post {{$post->titulo}}">

                <div class="p-3">
                    <p>Likes</p>
                </div>

                <div class="p-3">
                    <p class="font-bold"> {{$post->user->username}} </p>
                    <p class="text-sm text-gray-500"> {{$post->created_at->diffForHumans()}} </p>
                    <p class="mt-5"> {{$post->descripcion}} </p>
                </div>
        </div>

        <div class="md:w-1/2">
            <div class="shadow bg-white p-5 mb-5">

                @auth
                    
                <p class="text-xl font-bold text-center mb-4">
                    Agrega un Nuevo Comentario
                </p>
            </div>

            <form action="{{ route('comentarios.store', ['post' => $post, 'user' => $user]) }}" method="POST">
                <div class="mb-5">
                    <label for="decripcion" class="mb-2 block uppercase text-gray-500 font-bold" >
                        Comentarios
                    </label>
                    <textarea
                        id="comentario"
                        name="comentario"
                        placeholder="Agregar comentario"
                        class="border p-3 w-full rounded @error('comentario') border-red-600 @enderror">
                    </textarea>
                    @error('comentario')
                       <p class="bg-red-500 text-white my-2 rounded-lg txt-sm p-2
                        text-center">{{$message}}</p>
                    @enderror
                </div> 

                <input 
                    type="submit"
                    value="Crear Post"
                    class="bg-sky-600 hover:bg-sky-800 transition-colors cursor-pointer
                    uppercase font-bold w-full p-3 text-white rounded-lg"
                />
            </form>
            @endauth
        </div>
    </div>
@endsection