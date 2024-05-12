

<div>
    @foreach($books as $book)
        <div class="flex justify-between my-2 {{$route=='journal' ? 'bg-gray-100 border-1':''}} 
            items-center shadow p-2">
            <div class="flex items-center">
                <img src="{{asset('covers/'.$book->cover)}}" style="width: 50px;"/>
                <div class="mx-3">
                    <h1 class="text-sm font-semibold">{{$book->title}}</h1>
                    <p class="text-xs text-gray-500">
                        {{$book->description}} 
                    </p>
                    <h1 class="text-sm text-red-500 font-bold">${{$book->price}}</h1>
                </div>
            </div>
            <div class="flex">
                <a href="{{route('admin.books.view', $book)}}" class="text-white text-xs font-semibold bg-blue-500 
                rounded mx-1 shadow px-2 py-1 button-hover">View</a>
                <a href="{{ $route=='book'? route('admin.books.edit', $book):route('admin.journals.edit', $book)}}" class="text-white text-xs font-semibold bg-green-500 
                rounded mx-1 shadow px-2 py-1 button-hover">Edit</a>
                <a href="" class="text-white text-xs font-semibold bg-red-500 
                rounded mx-1 shadow px-2 py-1 button-hover">Delete</a>
            </div>
        </div>
    @endforeach
</div>