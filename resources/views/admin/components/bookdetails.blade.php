
<div>
    @if($isview ?? '')
        <div class="flex items-center justify-center w-full h-full" 
            style="position:fixed;top:0;left:0;z-index:10;background:rgba(0, 0, 0, 0.8)" >
            <div class="bg-white rounded-xl shadow p-3 w-8/12 h-5/6">
                <div class="flex w-full justify-end">
                    <a href="{{url()->previous()}}" class="">
                        <img src="{{asset('img/closec.png')}}" style="width:30px;height:30px;"/>
                    </a>
                </div>
                <div class="flex w-full items-start">
                    <div class="bg-gray-100 px-5 py-3 w-4/12 mr-5">
                        <img src="{{asset('covers/'.$book->cover)}}" class="w-full h-full"/>
                    </div>
                    <div class="flex flex-col w-7/12">
                        <h1 class="text-3xl font-bold">{{$book->title}}</h1>
                        <h1 class="font-semibold flex items-center mb-4">
                            <span class="text-xs text-gray-500 mr-2">By:</span>{{$book->author}}
                        </h1>
                        <label class="text-xs text-gray-500 border-b-2 py-1 mb-1" >Description</label>
                        <h1 class="text-sm text-gray-700 font-semibold max-h-36 mb-3 truncate">
                            {{$book->description}}
                        </h1>
                        <label class="text-xs text-gray-500">Language</label>
                        <h1 class="text-sm text-gray-700 mb-2 font-semibold">{{$book->language}}</h1>
                        <label class="text-xs text-gray-500">Quantity Available</label>
                        <h1 class="text-sm text-gray-700 mb-2 font-semibold">{{$book->quantity}} Copies</h1>
                        <label class="text-xs text-gray-500">Price</label>
                        <h1 class="text-red-500 flex items-center text-3xl font-bold">
                            <img src="{{asset('img/naira.png')}}" style="width:15px;"/>{{$book->price}}
                        </h1>
                        <div class="flex mt-2">
                            <a href="{{$book->type=='book'?route('admin.books.edit', $book):route('admin.journals.edit', $book)}}"
                                class="shadow-md px-4 py-2 text-sm text-white bg-green-500 button-hover rounded mr-5">
                                Edit {{$book->type}}
                            </a>
                            <a href="{{ route('admin.delete', $book)}}"
                                class="shadow-md px-4 py-2 text-sm text-white bg-red-500 button-hover rounded">
                                Delete {{$book->type}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>