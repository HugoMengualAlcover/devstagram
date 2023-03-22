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

    <section class="container mx-auto mt-10">
        <h2 class="text-4xl text-center font-black my-10">Publicidad</h2>

        @if($posts->count())
        
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cold-4 gap-6">
                @foreach ($posts as $post)
                    <div>
                        <a href="{{ route('posts.show', ['post' => $post, 'user' => $user]) }}">
                            <img src="{{ asset('uploads') . "/" . $post->imagen}}" alt="Imagen del post {{$post->titulo}}">
                        </a>
                    </div>


                @endforeach
            </div>

            <div class="my-5">
                {{$posts->links()}}
            </div>
        @else

            <p class="text-gray-600 uppercase text-sm text-center font-bold">No hay posts</p>

        @endif


    </section>
@endsection