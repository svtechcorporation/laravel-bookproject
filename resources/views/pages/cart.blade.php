
@extends('app.app')

@section('content')
    <div class="flex flex-col w-full px-20 py-10 small-screen-padding">
        <div class="flex flex-col w-full">
            <h1 class="text-2xl font-bold">Cart Item</h1>
            <h1 class="text-gray-500 mb-5">Items you have picked</h1>
            <div class="flex justify-between small-screen">
                <div class="w-7/12 bg-white overflow-x-hidden overflow-y-scroll p-3 shadow" 
                style="max-height: 400px;">
                    @php $i = 0; $totalprice = 0; $totalitems=0; @endphp
                    @foreach($cartbooks as $book)
                        @php 
                            $i = $i+1; 
                            $ownbk = null;
                            foreach($ownedbooks as $ownbook){
                                if($ownbook->book_id == $book->id){
                                    $ownbk = $ownbook;
                                }  
                            }
                            if($ownbk == null){
                                $totalprice = $totalprice + (int)$book->price;
                                $totalitems = $totalitems + 1;
                            }
                        @endphp
                        <div class="w-full flex items-center justify-between p-2 shadow-md mb-2 
                                {{ ($ownbk) ? 'bg-gray-200': '' }} ">
                            <h1 class="mr-2 text-sm">{{$i}}.</h1>
                            <img src="{{asset('covers/'.$book->cover)}}" style="width: 50px;" class=""/>
                            <div class="w-8/12 px-2 flex flex-col justify-center h-full">
                                <div class="mb-3">
                                    <h1 class="text-sm font-bold text-gray-800">{{$book->title}}</h1>
                                    @if($ownbk)
                                        <h1 class="text-xs -mt-1 text-gray-500 italic">
                                            You already owned this book - Status: 
                                            <span class="font-semibold capitalize text-gray-800">
                                                {{$ownbk->status}}
                                            </span>
                                        </h1>
                                    @endif
                                </div>
                                <h1 class="text-sm text-gray-500">Price: <span class="text-md text-red-500
                                font-bold">${{number_format((float)$book->price, 2, '.', ',')}}</span></h1>
                            </div>
                            <h1 onclick="removeBook('{{$book->id}}')" 
                            class="flex items-center cursor-pointer">
                                <p class="bg-red-500 flex items-center justify-center text-sm text-white 
                                    rounded-full hover:bg-red-800 mr-1"
                                    style="width:25px;height:25px">
                                    x
                                </p>
                                <p class="text-xs text-gray-500">Remove</p>
                            </h1>
                        </div>
                    @endforeach
                    @if($cartbooks->count() < 1)
                        <h1 class="w-full h-full flex flex-col font-bold text-lg items-center justify-center">
                            No Item in your cart
                            <span class="text-xs font-light">Add new items to your cart</span>
                        </h1>
                    @endif
                </div>
                <div class="lg:w-5/12 sm:w-full">
                    <div class="lg:px-10 sm:px-1 sm:mt-10">
                        @if(session('status'))
                            <p class="text-white text-center bg-green-400 text-sm py-2 w-full mb-2 rounded">
                                {{session('status')}}
                            </p>
                        @endif
                        @error('payment')
                            <label class="text-sm text-white px-5 py-1 my-1 rounded bg-red-500">{{$message}}</label>
                        @enderror
                        <h1 class="font-bold">Total Price</h1>
                        <h1 class="mt-2 mb-2 text-4xl font-bold text-red-500">${{number_format((float)$totalprice, 2, '.', ',')}}</h1>
                        <div class="flex flex-col w-full justify-between text-sm text-gray-600">
                            <h1 class="text-xs">Number of Items:</h1>
                            <p class="text-2xl font-bold">{{$totalitems}}</p>
                        </div>
                        <div class="flex flex-col items-start mt-2">
                            <h1 onclick="clearCookies()" 
                            class="bg-red-600 px-4 text-white button-hover text-sm py-2 my-2 cursor-pointer">
                                Clear Cart
                            </h1>
                        </div>
                    </div>
                    @if($totalprice > 0)
                    <div class="bg-white shadow p-4 lg:ml-10 lg:mt-2 sm:mt-5">
                        <h1 class="uppercase font-bold text-lg border-b b-dark py-1 mb-3">Checkout </h1>
                        <div>
                            <p class="text-sm mb-3">
                                Pay the sum of <span class="text-xl text-red-700 font-bold">
                                    ${{number_format((float)$totalprice, 2, '.', ',')}}
                                </span> 
                                to the following account details
                            </p>
                            <label class="text-xs text-gray-700 -mb-4">Account Number</label>
                            <h1 class="text-2xl font-bold">{{$ownerprofile->account_number}}</h1>
                            <label class="text-xs text-gray-700 -mb-4">Bank Name</label>
                            <h1 class="text-xl font-bold">{{$ownerprofile->bank}}</h1>
                            <label class="text-xs text-gray-700 -mb-4">Account Name</label>
                            <h1 class="text-lg font-bold">{{$ownerprofile->account_name}}</h1>
                        </div>
                        <form action="{{route('checkout')}}" method="post" enctype="multipart/form-data"
                            class="mt-4 flex flex-col items-start">
                            @csrf
                            <label class="text-xs text-gray-700">Upload proof of payment (Image or Pdf only)</label>
                            <input accept="image/*, .pdf" name="payment" type="file" class="text-sm my-2" />
                            @error('payment')
                                <label class="text-xs text-red-500">{{$message}}</label>
                            @enderror
                            <button type="submit" 
                               class="bg-green-600 px-4 text-white button-hover text-sm py-2 mt-2 rounded">
                               Checkout
                            </button>
                        </form>
                    </div>
                @endif
                </div>
            </div>
        </div>
        <div class="flex flex-col items-start py-4 mt-5">
            <h1 class="text-2xl font-bold">SIMILAR ITEMS</h1>
            <h1 class="text-gray-500 mb-5">Books you may like</h1>
            <div class="flex bookpage sm:px-1">
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