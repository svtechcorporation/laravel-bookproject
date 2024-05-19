
@extends('app.app')

@section('content')
    <div class="flex flex-col w-full px-20 py-10">
        <div class="flex flex-col w-full">
            User Page
        </div>
        <div class="flex flex-col items-start py-4 mt-5">
            <h1 class="text-2xl font-bold">SIMILAR ITEMS</h1>
            <h1 class="text-gray-500 mb-5">Books you may like</h1>
            <div class="flex">
                @foreach($similarbooks as $book)
                    <x-singlebook :book="$book"/>
                @endforeach
            </div>
            <a href="" class="mt-4 bg-red-500 px-5 py-2 text-white rounded button-hover">View all</a>
        </div>
    </div>

@endsection