
@extends('app.app')

@section('content')
    <div class="flex flex-col w-full px-20 py-10">
        <div class="flex flex-col w-full">
            <h1 class="text-2xl font-bold">Cart Item</h1>
            <h1 class="text-gray-500 mb-5">Items you have picked</h1>
            <div class="flex justify-between">
                <div class="w-8/12 bg-gray-100 overflow-x-hidden overflow-y-scroll p-3 shadow" style="max-height: 400px;">
                    @for($i=0; $i < 5;$i++)
                        <div class="w-full flex items-center justify-between p-2 shadow-md mb-2">
                            <h1 class="mr-5 text-sm">{{$i+1}}.</h1>
                            <img src="{{asset('img/basicprogram.jpg')}}" style="width: 50px;" class=""/>
                            <div class="w-8/12 px-2">
                                <h1 class="leading-3 font-bold text-gray-800 mb-3">Cart Item name</h1>
                                <h1 class="text-sm text-gray-500">Price: <span class="text-md text-red-500
                                font-bold">$350</span></h1>
                            </div>
                            <div class="flex flex-col mr-5">
                                <label class="text-xs text-gray-500 text-center">Quantity</label>
                                <input type="number" class="bg-white text-center text-dark shadow-md 
                                outline-none p-2 " style="width: 70px;" value="1" />
                            </div>
                            <a href="" class="flex flex-col items-center">
                                <p class="bg-red-500 px-2 text-white rounded-full hover:bg-red-800">x</p>
                                <p class="text-xs text-gray-500">Remove</p>
                            </a>
                        </div>
                    @endfor
                </div>
                <div class="w-3/12 p-3">
                    <h1 class="font-bold">Total Price</h1>
                    <h1 class="mt-2 mb-5 text-4xl font-bold text-red-500">$350.50</h1>
                    <div class="flex w-full justify-between text-sm text-gray-600">
                        <h1>Number of Items:</h1>
                        <p>4</p>
                    </div>
                    <div class="flex flex-col items-start mt-5">
                        <a href="" class="bg-red-600 px-5 text-white button-hover text-sm py-2 my-2">Clear Cart</a>
                        <a href="" class="bg-green-600 px-5 text-white button-hover text-sm py-2 my-2">Checkout</a>
                    </div>
                </div>
            </div>
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