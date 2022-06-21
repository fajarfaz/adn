<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{route('posts.index')}}" class="text-blue-300 hover:text-blue-400">Index</a> / {{ __('Add Category') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden  sm:rounded-lg">
				<div class="w-full max-w-xs mx-auto">
					<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{route('posts.update',$post->slug)}}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="mb-6">
					  		<label class="block text-gray-700 text-sm font-bold mb-2" for="title">
						    Title
					  		</label>
					  		<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" placeholder="title here" name="title" value="{{ $post->title }}">
					  		@if($errors->has('title'))
					  			<p class="text-red-500 text-xs italic">{{ $errors->first('title') }}</p>
					  		@endif
						</div>
						<div class="mb-6">
					  		<label class="block text-gray-700 text-sm font-bold mb-2" for="cover">
						    Cover
					  		</label>
					  		<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="cover" type="file" name="cover">
					  		@if($errors->has('cover'))
					  			<p class="text-red-500 text-xs italic">{{ $errors->first('cover') }}</p>
					  		@endif
						</div>
						<div class="mb-6">
							<div id="toolbar-container"></div>
					  		<label class="block text-gray-700 text-sm font-bold mb-2" for="desc">
						    Description
					  		</label>
					  		<textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="desc" name="desc">{{ $post->desc }}</textarea>
					  		@if($errors->has('desc'))
					  			<p class="text-red-500 text-xs italic">{{ $errors->first('desc') }}</p>
					  		@endif
						</div>
						<div class="mb-6">
					  		<label class="block text-gray-700 text-sm font-bold mb-2" for="category">
						    Category
					  		</label>
					  		<select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="category" name="category" value="{{ old('category') }}">
					  			<option hidden>Choose here</option>
					  			@foreach($categories as $category)
					  				<option value="{{ $category->id }}" @if($category->id == $post->category_id) selected  @endif>{{ $category->name }}</option>
					  			@endforeach
					  		</select>
					  		@if($errors->has('category'))
					  			<p class="text-red-500 text-xs italic">{{ $errors->first('category') }}</p>
					  		@endif
						</div>
						<div class="mb-6">
					  		<label class="block text-gray-700 text-sm font-bold mb-2" for="tags">
						    Tags
					  		</label>
					  		<select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="tags" name="tags[]" multiple value="{{ old('tags') }}">
					  			@foreach($tags as $tag)
					  				<option value="{{ $tag->id }}" @if($post->tags->where('id',$tag->id)->count() > 0) selected @endif>{{ $tag->name }}</option>
					  			@endforeach
					  		</select>
					  		@if($errors->has('tags'))
					  			<p class="text-red-500 text-xs italic">{{ $errors->first('tags') }}</p>
					  		@endif
						</div>
						<div class="mb-6">
					  		<label class="block text-gray-700 text-sm font-bold mb-2" for="keywords">
						    Keywords
					  		</label>
					  		<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="keywords" type="text" placeholder="W3, CSS, JS" name="keywords" value="{{ $post->keywords }}">
					  		@if($errors->has('keywords'))
					  			<p class="text-red-500 text-xs italic">{{ $errors->first('keywords') }}</p>
					  		@endif
						</div>
						<div class="mb-6">
					  		<label class="block text-gray-700 text-sm font-bold mb-2" for="meta-desc">
						    Meta Desc
					  		</label>
					  		<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="meta-desc" type="text" placeholder="Meta Description" name="meta_desc" value="{{ $post->meta_desc }}">
					  		@if($errors->has('meta_desc'))
					  			<p class="text-red-500 text-xs italic">{{ $errors->first('meta_desc') }}</p>
					  		@endif
						</div>
						<div class="flex items-center justify-between">
						  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
						    Update
						  </button>
						</div>
					</form>
					<p class="text-center text-gray-500 text-xs">
						&copy;2022 Gradazy. All rights reserved.
					</p>
				</div>
			</div>
		</div>
	</div>
	<script>
		CKEDITOR.replace( 'desc' );
	</script>
</x-app-layout>