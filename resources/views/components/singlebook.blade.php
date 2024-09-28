

@props(['book' => $book])

<div class="bg-white shadow h-80 md:w-48 sm:w-full md:mx-1 overflow-hidden flex flex-col
    justify-between mb-3 sm:mx-5" >
    <div class="flex flex-col">
        <div >
            <img src="{{asset('covers/'.$book->cover)}}" 
                class="overflow-hidden object-cover h-36 w-full"/>
        </div>
        <div class="w-full flex flex-col h-full px-2">
            <p class="font-black text-sm  custom-line-clamp tracking-tight leading-4 py-2">
                {{$book->title}}
            </p>
            <p class="text-xs text-gray-700 max-h-12 overflow-hidden">{{$book->description}}</p>
            <p class="text-xs text-gray-700 text-start font-bold">{{$book->author}}</p>
            <p class="text-end text-red-500 font-bold">${{$book->price}}</p>
            <p class="text-center text-red-500 font-bold d-none" id="single_book_id">{{$book->id}}</p>
        </div>
    </div>
    <div class="flex items-center justify-center">
        <div class="rounded m-2 bg-gray-700 hover:bg-gray-400 shadow text-white" >
            <h1  class="flex text-sm items-center px-3 py-1 cursor-pointer" 
                onclick="addToCart('{{$book->id}}')">
                <span class="text-xl font-black">+</span>
                 Cart
            </h1>
        </div>
        <div class="rounded m-2 bg-gray-400 hover:bg-gray-700 shadow text-white">
            <a href="{{ route('books.view', $book) }}" class="flex text-sm items-center py-2 px-3">
                View
            </a>
        </div>
    </div>
</div>