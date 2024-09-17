
@extends('app.app')

@section('content')
    <div class="flex flex-col px-5 py-3 mx-20 bg-gray-200 rounded-xl shadow" style="margin-top:150px; margin-bottom:20px; position:relative">
        <div style="position:absolute; top:-100px">
            <img src="{{asset('img/user 1.jpg')}}" class="rounded-full overflow-hidden shadow-lg" style="width: 200px;"/>
        </div>
        <div class="flex justify-between">
            <div class="text-sm text-gray-800 mt-24">
                <p class="font-bold text-2xl uppercase">Samuel Ferguson</p>
                <p class="italic">samuelferguson@gmail.com</p>
            </div>
            <div>
                <a href="" class="bg-red-500 text-white px-4 py-2 rounded text-sm hover:bg-red-800">Edit Profile</a>
            </div>
        </div>
        <div class="mt-10 flex w-full">
            <div class="w-6/12 flex flex-col items-start">
                <h1 class="bg-dark text-white px-2 py-1 text-xl uppercase font-bold mb-2">Purchased Books</h1>
                <div class="overflow-y-auto overflow-x-hidden pr-2" style="max-height: 400px;">
                    @foreach($similarbooks as $book)
                        <div class="flex justify-between items-center text-gray-600 bg-white p-1 rounded shadow my-2">
                            <div class="flex items-center">
                                <img src="{{asset('covers/'.$book->cover)}}" style="height: 50px;" />
                                <h1 class="text-sm ml-3 overflow-ellipsis">{{$book->title}}</h1>
                            </div>
                            <a href="" class="text-xs bg-green-500 px-2 py-1 rounded text-white">Download File</a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="w-6/12 flex flex-col items-start">
                <h1 class="bg-dark text-white px-2 py-1 text-xl uppercase font-bold mb-2">Pending Books</h1>
                <div class="overflow-y-auto overflow-x-hidden pr-2" style="max-height: 400px;">
                    @foreach($similarbooks as $book)
                        <div class="flex justify-between items-center text-gray-600 bg-white p-1 rounded shadow my-2">
                            <div class="flex items-center">
                                <img src="{{asset('covers/'.$book->cover)}}" style="height: 50px;" />
                                <h1 class="text-sm ml-3 overflow-ellipsis">{{$book->title}}</h1>
                            </div>
                            <a href="" class="text-xs bg-green-500 px-2 py-1 rounded text-white">Download File</a>
                        </div>
                    @endforeach
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

@endsection