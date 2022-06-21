<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{route('categories.index')}}" class="text-blue-300 hover:text-blue-400">Posts</a> / {{ $post->title }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden  sm:rounded-lg">
                <div class="w-full max-w-xs mx-auto">
                    <article class="flex flex-col shadow my-4">
                        <!-- Article Image -->
                        <a href="#" class="hover:opacity-75">
                            <img src="{{url('storage/'.$post->cover)}}">
                        </a>
                        <div class="bg-white flex flex-col justify-start p-6">
                            <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">{{$post->category->name}}</a>
                            <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{$post->title}}</a>
                            <p href="#" class="text-sm pb-8">
                                By <a href="#" class="font-semibold hover:text-gray-800">{{$post->user->name}}</a>, Published on {{$post->created_at->format('d M Y')}}
                            </p>
                            {!! $post->desc !!}
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>