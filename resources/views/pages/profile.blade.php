
@extends('app.app')

@section('content')

    <div class="flex flex-col lg:px-10 sm:px-3 py-3 lg:mx-20 sm:mx-5 bg-gray-200 rounded-xl shadow" 
        style="margin-top:150px; margin-bottom:20px; position:relative">
        <div style="position:absolute; top:-100px" class="">
            <img src="{{asset('img/user 1.jpg')}}" class="rounded-full overflow-hidden shadow-lg" 
            style="width: 200px;"/>
        </div>
        <div class="flex justify-between sm:flex-col lg:flex-row">
            <div class="text-sm text-gray-800 mt-24">
                <p class="font-bold text-2xl uppercase sm:text-lg">{{auth()->user()->name}}</p>
                <p class="italic">{{auth()->user()->email}}</p>
            </div>
            <div class="pt-3">
                <a href="" 
                    class="bg-red-500 text-white px-4 py-2 rounded text-sm hover:bg-red-800 
                        sm:text-xs sm:px-2 sm:py-1">
                    Edit Profile
                </a>
            </div>
        </div>
        <div class="mt-10 flex w-full sm:flex-wrap lg:flex-nowrap">
            <div class="lg:w-6/12 sm:w-full sm:mb-5 flex flex-col items-start lg:mr-4">
                <h1 class="bg-dark text-white px-2 py-1 text-xl uppercase font-bold mb-2">Purchased Books</h1>
                <div class="w-full overflow-y-auto overflow-x-hidden pr-2" style="max-height: 400px;">
                    @foreach($verifiedbook as $book)
                        <div class="flex justify-between items-center text-gray-600 bg-white p-1 rounded shadow my-2">
                            <div class="flex items-center">
                                <img src="{{asset('covers/'.$book->book->cover)}}" style="height: 50px;" />
                                <h1 class="text-sm ml-3 overflow-ellipsis">{{$book->book->title}}</h1>
                            </div>
                            <a href="{{route('download', $book->book) }}" class="text-xs bg-green-500 px-2 py-1 rounded text-white">Download File</a>
                        </div>
                    @endforeach
                    @if($verifiedbook->count() < 1)
                        <div class="w-full h-44 bg-white flex items-center justify-center">
                            <h1 class="text-gray-400 text-sm">You are yet to purchase a book</h1>
                        </div>
                    @endif
                </div>
            </div>
            <div class="lg:w-6/12 sm:w-full flex flex-col items-start lg:ml-4">
                <h1 class="bg-dark text-white px-2 py-1 text-xl uppercase font-bold mb-2">Pending Books</h1>
                <div class="w-full overflow-y-auto overflow-x-hidden pr-2" style="max-height: 400px;">
                    @foreach($pendingbook as $book)
                        <div class="flex justify-between items-center text-gray-600 bg-white p-1 rounded shadow my-2">
                            <div class="flex items-center">
                                <img src="{{asset('covers/'.$book->book->cover)}}" style="height: 50px;" />
                                <h1 class="text-sm ml-3 overflow-ellipsis">{{$book->book->title}}</h1>
                            </div>
                            <a href="" class="text-xs bg-yellow-700 px-2 py-1 rounded text-white">View status</a>
                        </div>
                    @endforeach
                    @if($pendingbook->count() < 1)
                        <div class="w-full h-44 bg-white flex items-center justify-center">
                            <h1 class="text-gray-400 text-sm">No pending book</h1>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        
        <div class="flex flex-col items-start py-4 mt-5">
            <h1 class="text-xl font-bold">SIMILAR ITEMS</h1>
            <h1 class="text-gray-500 text-sm mb-5">Books you may like</h1>
            <div class="flex flex-wrap">
                @foreach($similarbooks as $book)
                    <x-singlebook :book="$book"/>
                @endforeach
            </div>
            <a href="" class="mt-4 bg-red-500 px-5 py-2 text-white rounded button-hover">View all</a>
        </div>
    </div>
    @include('layouts.cart_slider')
    @push('scripts')
        <script src="{{asset('js/script.js')}}"></script>
    @endpush

@endsection