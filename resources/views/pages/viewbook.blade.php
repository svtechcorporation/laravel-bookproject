
@extends('app.app')

@section('content')

    <div class="flex flex-col lg:mx-20 sm:mx-5 lg:my-20 sm:my-5 rounded-xl shadow overflow-hidden">
        <div class="relative w-full">
            <div class="h-full absolute left-0 w-4/12 bg-gray-800 top-0 md:flex sm:hidden" style="z-index: -4;"></div>
            <div class="lg:px-10 sm:px-3 lg:py-5 sm:py-2 w-full">
                <div class="w-full flex flex-col items-center lg:mb-5 sm:mb-1">
                    <h1 class="text-2xl font-black uppercase">
                        {{$book->type}} Details
                    </h1>
                    <p class="text-sm text-gray-500">See more about this {{$book->type}}</p>
                </div>
                <div class="flex w-full lg:pl-10 sm:pl-0 md:flex-row sm:flex-col">
                    <div class="md:w-6/12 sm:w-full flex justify-end ">
                        <img src="{{ asset('covers/'.$book->cover) }}"
                            style="height:50dd0px"
                            class="rounded-lg sm:w-full overflow-hidden shadow"/>
                    </div>
                    <div class="md:ml-10 md:w-6/12 sm:w-full md:mt-0 sm:mt-5 flex flex-col items-start">
                        <h1 class="text-3xl font-semibold mb-2 capitalize">
                            {{$book->title}}
                        </h1>
                        <h1 class="text-sm text-gray-500 mb-5">
                            Author: {{$book->title}}
                        </h1>
                        <label class="text-xs text-gray-500">Price</label>
                        <h1 class="text-4xl font-black text-red-500 mb-3">
                            ${{$book->price}}
                        </h1>
                        <label class="text-xs text-gray-500">Language:</label>
                        <h1 class="text-base mb-3 font-semibold">
                            {{$book->language}}
                        </h1>
                        <label class="text-xs text-gray-500">Date Added</label>
                        <h1 class="text-base mb-3 font-semibold">
                            {{$book->created_at}}
                        </h1>
                        <label class="text-xs text-gray-500">Description</label>
                        <h1 class="text-base italic mb-4">
                            {{$book->description}}
                        </h1>
                        <h1 onclick="addToCarts('{{$book->id}}')" 
                            class="bg-gray-600 rounded text-white text-sm px-4 py-3 hover:bg-gray-500 
                                cursor-pointer flex items-center">
                            <img src="{{asset('img/carticon.png')}}" 
                                style="filter: invert(1);" class="w-5 mr-2"/>
                            Add to Cart
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="flex flex-col items-start lg:px-10 sm:px-3 py-3 mt-5">
            <h1 class="text-xl font-bold">SIMILAR ITEMS</h1>
            <h1 class="text-gray-500 text-sm mb-3">Books you may like</h1>
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