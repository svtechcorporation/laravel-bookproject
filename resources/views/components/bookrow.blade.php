

@props(['book' => $book])


<div class="border-b-2 border-gray-100 mb-5 p-3 flex items-center bookrow">
    <div class="flex justify-center items-center py-5 w-4/12 bg-gray-200 rounded-lg shadow-md mr-5">
        <img src="{{asset('covers/'.$book->cover)}}" 
            style="height: 180px; width:150px;object-fit:contain;"/>
    </div>
    <div class="w-7/12">
        <h1 class="font-semibold text-xl">{{$book->title}}</h1>
        <h1 class="mt-3 text-gray-800"> 
            {{$book->description}}
        </h1>
        <h1 class="mt-3 text-gray-700 text-sm">{{$book->author}}</h1>
        <h1 class="text-red-500 font-bold text-xl">£{{ number_format($book->price, 2, '.', ',') }}</h1>
        <div class="flex mt-3">
            <a href="{{route('books.view', $book)}}" class="button-hover flex bg-dark text-white px-3 py-2 mr-2">View</a>
            <h1 href="" class="button-hover flex bg-dark text-white px-3 py-2 cursor-pointer"
                onclick="addToCarts('{{$book->id}}')">
                <img src="{{asset('img/carticon.png')}}" 
                style="width:20px;filter:invert(1)"/>
                Add to Cart
            </h1>
        </div>
    </div>
</div>
