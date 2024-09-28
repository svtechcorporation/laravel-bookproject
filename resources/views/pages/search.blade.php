
@extends('app.app')

@section('content')
    <div class="md:px-20 md:py-10 sm:px-5 sm:py-5 flex flex-col w-full">
        <div class="flex flex-col items-center">
            <h1 class="md:text-3xl sm:text-xl font-bold">Search Books/Journals</h1>
            <p class="text-xs text-gray-700">Find for your desired books</p>
        </div>
        <div class="flex flex-col justify-center items-center w-full md:my-4 sm:my-3">
            <form class="md:w-6/12 sm:w-full flex" action="{{route('search')}}">
                <input type="text" name="search" placeholder="Find your desired books and journals..."
                class="px-4 py-2 outline-none md:w-10/12 sm:w-full border-1 border-gray-500"/>
                <button class="text-white text-center px-4 py-2 button-hover bg-dark -ml-3">Search</button>
            </form>
            @error('search')
                <p class="bg-red-500 text-center py-1 text-xs text-white px-5 mt-3">
                    {{$message}}
                </p>
            @enderror
        </div>
        <div class="mt-1 flex justify-between items-center flex md:flex-row sm:flex-col-reverse">
            <h1 class="text-sm text-gray-500 flex items-center">Showing result for: &nbsp;
                <span class="text-lg font-semibold text-dark italic capitalize">{{$search_query}}</span>
            </h1>
            <a href="{{route('books')}}" class="px-4 py-2 bg-red-500 text-white text-sm rounded">View all Books</a>
        </div>
        <div class="shadow-md p-3 mt-1">
            <h1>Sort By:</h1>
        </div>
        <div class="flex items-start mt-3">
            <div class="md:w-9/12 md:mr-10 sm:w-full sm:mr-0 ">
                @foreach($search_books as $book)
                    <x-bookrow :book='$book'/>
                @endforeach
                
            </div>
        </div>
    </div>
    @include('layouts.cart_slider')
    @push('scripts')
        <script src="{{asset('js/script.js')}}"></script>
    @endpush
@endsection