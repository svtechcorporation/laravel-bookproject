

@props(['book' => $book])

<div class="bg-white mx-3 p-3 flex flex-col items-center justify-center rounded shadow singlebook" style="width:180px;">
    <div>
        <img src="{{asset('covers/'.$book->cover)}}" style="height: 150px;width:120px;"/>
    </div>
    <div class="items-center w-full">
        <p class="text-xs text-gray-700 text-center">{{$book->author}}</p>
        <p class="font-bold text-center">{{$book->title}}</p>
        <p class="text-center text-red-500 font-bold">${{$book->price}}</p>
    </div>
    <div class="hidden-btn flex items-center justify-center">
        <div class="bg-white p-2 rounded m-2">
            <a href="">
                <img src="{{asset('img/carticon.png')}}" style="width: 30px;"/>
            </a>
        </div>
        <div class="bg-white p-2 rounded m-2">
            <a href="">
                <img src="{{asset('img/price2.png')}}" style="width: 30px;"/>
            </a>
        </div>
    </div>
</div>