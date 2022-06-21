<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{route('tags.create')}}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Add Tags</a>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        No.
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Category name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        slug
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        keyword
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        meta desc
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tags as $tag)
                                <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                    <td class="px-6 py-4">
                                        {{$loop->iteration}}
                                    </td>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        {{$tag->name}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$tag->slug}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$tag->keywords}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$tag->meta_desc}}
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="inline-flex">
                                            <a href="{{route('tags.edit',$tag->id)}}" class="bg-yellow-500 hover:bg-yellow-400 text-slate-900 font-bold py-2 px-4 rounded-l">Edit</a>
                                            <form method="POST" action="{{route('tags.destroy', [$tag->id])}}" class="d-inline" onsubmit="return confirm('Delete this Tag permanently?')">
                                            @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="submit" value="Delete" class="bg-red-500 hover:bg-red-400 text-slate-900 font-bold py-2 px-4 rounded-r cursor-pointer">
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
