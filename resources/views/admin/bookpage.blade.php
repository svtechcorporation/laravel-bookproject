
@extends('admin.adminapp')

@section('content')
    <div class="">
        <h1 class="mb-3 text-xl font-black">
            {{ $operation=='view'? 'List All Books':'Add New Book'}}
        </h1>
        <a href="{{$operation=='view'? route('admin.books.add'):route('admin.books')}}" class="{{$operation=='view'?'bg-green-500':'bg-blue-500'}} 
            px-3 py-2 rounded text-white text-sm button-hover shadow">
            {{ $operation=='view'? 'Add New Books':'View Books'}}
        </a>
        <div class="flex items-start mt-3">
            <div class="w-8/12">
                @if($operation == 'view')
                    @for($i=0; $i < 10; $i++)
                        <div class="flex my-2 items-center shadow p-2">
                            <img src="{{asset('img/basicprogram.jpg')}}" style="width: 50px;"/>
                            <div class="mx-3">
                                <h1 class="text-sm font-semibold">Basic Program</h1>
                                <p class="text-xs text-gray-500">
                                    Eu ullamco tempor irure ea non. Fugiat amet nostrud officia nisi officia. 
                                    Et adipisicing exercitation qui dolor Lorem. Aliquip laborum ea nulla 
                                </p>
                            </div>
                            <div class="flex">
                                <a href="" class="text-white text-xs font-semibold bg-blue-500 
                                rounded mx-1 shadow px-2 py-1 button-hover">View</a>
                                <a href="" class="text-white text-xs font-semibold bg-green-500 
                                rounded mx-1 shadow px-2 py-1 button-hover">Edit</a>
                                <a href="" class="text-white text-xs font-semibold bg-red-500 
                                rounded mx-1 shadow px-2 py-1 button-hover">Delete</a>
                            </div>
                        </div>
                    @endfor
                @elseif($operation=='add')
                    <div>
                        <form class="my-2">
                            <div class="flex my-3">
                                <input type="text" placeholder="Title of book" 
                                    class="px-3 py-2 rounded border-1 text-dark shadow-md w-8/12 mr-3"/>
                                <input type="text" placeholder="Name of Author" 
                                    class="px-3 py-2 rounded border-1 text-dark shadow-md w-4/12"/>
                            </div>
                            <div class="flex my-3">
                                <input type="number" placeholder="Price of Book" 
                                    class="px-3 py-2 rounded border-1 text-dark shadow-md w-4/12 mr-3"/>
                                <input type="text" placeholder="Language" 
                                    class="px-3 py-2 mr-4 rounded border-1 text-dark shadow-md w-4/12"/>
                                <input type="number" placeholder="Quantity" 
                                    class="px-3 py-2 rounded border-1 text-dark shadow-md w-4/12"/>
                            </div>
                            <div>
                                <textarea rows="5" placeholder="Book Description" name="description" 
                                class="w-full px-3 py-2 rounded border-1 shadow"></textarea>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
            <div class="shadow rounded mx-3 w-3/12">
                <h1 class="border-b-2 border-gray-200 p-3 font-bold uppercase">Book Details</h1>
                <div class="p-3">
                    <h1 class="text-sm text-gray-600 font-semibold">Available Books</h1>
                    <h1 class="text-4xl font-bold text-green-600">300</h1>
                </div>
                <div class="p-3">
                    <h1 class="text-sm text-gray-600 font-semibold">Sold Books</h1>
                    <h1 class="text-4xl font-bold text-red-600">10</h1>
                </div>
                <div class="p-3">
                    <h1 class="text-sm text-gray-600 font-semibold">Books on pending Sales</h1>
                    <h1 class="text-4xl font-bold text-blue-600">10</h1>
                </div>
            </div>
        </div>
    </div>
@endsection