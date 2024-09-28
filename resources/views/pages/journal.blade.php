

@extends('app.app')

@section('content')
    <div class="px-20 py-10 booklist-page">
        <h1 class="text-3xl font-bold">Journals</h1>
        <p class="text-xs text-gray-700">See more of what we know</p>
        <div class="flex mt-3 items-start booklist-content">
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
@endsection