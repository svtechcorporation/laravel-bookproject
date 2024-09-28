
@props(['journal' => $journal])

<div class="bg-white md:mr-4 sm:mr-0 rounded shadow mb-5 md:w-80 sm:w-full">
    <div>
        <img src="{{asset('covers/'.$journal->cover)}}" style="height:200px;object-fit:cover;"
        class="w-full"/>
    </div>
    <div class="w-full p-3 relative">
        <p class="text-xs text-gray-700">Author: {{$journal->author}}</p>
        <p class="font-bold">{{$journal->title}}</p>
        <p class="text-xs text-gray-700 mb-5" style="height: 50px; 
            text-overflow: ellipsis; word-wrap: break-word; overflow: hidden">
            {{$journal->description}}
        </p>
        <div class="absolute bottom-3 flex items-center">
            <a href="{{route('books.view', $journal)}}" 
                class="bg-dark rounded text-white text-xs px-3 py-2 hover:bg-gray-500 mr-5">
                Read More
            </a>
            <h1 onclick="addToCarts('{{$journal->id}}')" 
                class="bg-gray-600 rounded text-white text-xs px-3 py-2 hover:bg-gray-500 cursor-pointer">
                Add to Cart
            </h1>
        </div>
    </div>
</div>