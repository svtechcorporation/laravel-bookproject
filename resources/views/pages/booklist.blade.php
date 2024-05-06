@extends('app.app')

@section('content')
    <div class="px-20 py-10">
        <h1 class="text-3xl font-bold">Books</h1>
        <p class="text-xs text-gray-700">Get it now</p>
        <div class="shadow-md p-3 mt-4">
            <h1>Sort By:</h1>
        </div>
        <div class="flex items-start mt-3">
            <div class="w-9/12 mr-10">
                @for($i=0;$i < 10; $i++)
                    <x-bookrow/>
                @endfor
            </div>
            @include('layouts.sidebar')
        </div>
    </div>
@endsection