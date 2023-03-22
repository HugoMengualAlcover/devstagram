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

            <div>
                <p class="text-gray-700 text-2xl">{{$user->username}}</p>
                @auth
                    @if($user->id === auth()->user()->id)
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                            
                        </a>
                    @endif
                @endauth
            </div>

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