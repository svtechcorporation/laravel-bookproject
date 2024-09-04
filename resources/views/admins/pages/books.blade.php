@extends('admins.components.app')

@section('content')
<div class="p-3">
    <div class="w-full">
        <h1 class="py-3 font-bold uppercase">Book Details</h1>
        <div class="flex shadow">
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
    <div class="p-3" style="position: relative;">
        <h1 class="mb-3 text-xl font-black">
            {{ $operation=='view'? 'List All Books': ($operation=='edit' ? 'Edit Book':'Add New Book')}}
        </h1>
        <a href="{{$operation=='view'? route('admins.books.add'):route('admins.books')}}" class="{{$operation=='view'?'bg-green-500':'bg-blue-500'}} 
            px-3 py-2 rounded text-white text-sm button-hover shadow">
            {{ $operation=='view'? 'Add New Books':'View Books'}}
        </a>
        <div class="flex items-start mt-3">
            <div class="w-full">
                @if($operation == 'view')
                @include('admins.components.viewbook')
                @elseif($operation=='add')
                @include('admins.components.addbook')
                @elseif($operation=='edit')
                @include('admins.components.editbook')
                @endif
            </div>

        </div>
    </div>

</div>

@endsection