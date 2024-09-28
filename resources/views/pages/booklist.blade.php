@extends('app.app')

@section('content')
    <div class="px-20 py-10 booklist-page">
        <h1 class="text-3xl font-bold">Books</h1>
        <p class="text-xs text-gray-700">Get it now</p>
        <div class="flex items-start mt-3 booklist-content">
            <div class="w-9/12 mr-10">
                @foreach($books as $book)
                    <x-bookrow  :book="$book"/>
                @endforeach
                <div>
                    {{$books->links()}}
                </div>
            </div>
            @include('layouts.sidebar')
        </div>
    </div>
    @include('layouts.cart_slider')
@endsection