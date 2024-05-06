
@extends('app.app')

@section('content')
    <div class="px-20 py-10 flex flex-col w-full">
        <div class="flex flex-col items-center">
            <h1 class="text-3xl font-bold">Search Books/Journals</h1>
            <p class="text-xs text-gray-700">Find for your desired books</p>
        </div>
        <div class="flex justify-center items-center w-full my-4">
            <form class="w-6/12">
                <input type="text" placeholder="Find your desired books and journals..."
                class="px-4 py-2 outline-none w-10/12 border-1 border-gray-500"/>
                <button class="text-white text-center px-4 py-2 button-hover bg-dark -ml-3">Search</button>
            </form>
        </div>
        <div class="mt-1 flex justify-between items-center">
            <h1 class="text-sm text-gray-500 flex items-center">Showing result for: &nbsp;
                <span class="text-lg font-semibold text-dark italic">Basic Programming textbook</span>
            </h1>
            <a href="{{route('books')}}" class="px-4 py-2 bg-red-500 text-white text-sm rounded">View all Books</a>
        </div>
        <div class="shadow-md p-3 mt-1">
            <h1>Sort By:</h1>
        </div>
        <div class="flex items-start mt-3">
            <div class="w-9/12 mr-10">
                @for($i=0;$i < 10; $i++)
                    <x-bookrow/>
                @endfor
            </div>
        </div>
    </div>
@endsection