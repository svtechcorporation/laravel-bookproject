

@props(['book' => $book])

<div class="bg-white mx-2 mb-5 flex flex-col items-center justify-between rounded-lg 
    overflow-hidden shadow-lg singlebook" 
    style="width:200px;height:300px">
    <div >
        <img src="{{asset('covers/'.$book->cover)}}" 
            class="overflow-hidden"
            style="width:200px; height: 210px; object-fit:cover"/>
    </div>
    <div class="items-center w-full flex flex-col items-center justify-center h-full px-2">
        <p class="font-semibold text-sm text-center custom-line-clamp">{{$book->title}}</p>
        <p class="text-xs text-gray-700 text-center">{{$book->author}}</p>
        <p class="text-center text-red-500 font-bold">${{$book->price}}</p>
    </div>
    <div class="hidden-btn flex items-center justify-center">
        <div class="rounded m-2 bg-green-700 shadow text-white" >
            <a href="" class="flex text-sm items-center px-3 py-1">
                <span class="text-xl font-black">+</span>
                 Cart
            </a>
        </div>
        <div class="rounded m-2 bg-blue-700 shadow text-white">
            <a href="" class="flex text-sm items-center py-2 px-3">
                View
            </a>
        </div>
    </div>
</div>