<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{route('categories.index')}}" class="text-blue-300 hover:text-blue-400">Index</a> / {{ __('Add Category') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden  sm:rounded-lg">
				<div class="w-full max-w-xs mx-auto">
					<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{route('categories.store')}}" method="POST">
						@csrf
						<div class="mb-6">
					  		<label class="block text-gray-700 text-sm font-bold mb-2" for="category-name">
						    Category Name
					  		</label>
					  		<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="category-name" type="text" placeholder="Tech, Book" name="name">
					  		@if($errors->has('name'))
					  			<p class="text-red-500 text-xs italic">{{ $errors->first('name') }}</p>
					  		@endif
						</div>
						<div class="mb-6">
					  		<label class="block text-gray-700 text-sm font-bold mb-2" for="keywords">
						    Keywords
					  		</label>
					  		<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="keywords" type="text" placeholder="W3, CSS, JS" name="keywords">
					  		@if($errors->has('keywords'))
					  			<p class="text-red-500 text-xs italic">{{ $errors->first('keywords') }}</p>
					  		@endif
						</div>
						<div class="mb-6">
					  		<label class="block text-gray-700 text-sm font-bold mb-2" for="meta-desc">
						    Meta Desc
					  		</label>
					  		<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="meta-desc" type="text" placeholder="Meta Description" name="meta_desc">
					  		@if($errors->has('meta_desc'))
					  			<p class="text-red-500 text-xs italic">{{ $errors->first('meta_desc') }}</p>
					  		@endif
						</div>
						<div class="flex items-center justify-between">
						  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
						    Create New
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
</x-app-layout>