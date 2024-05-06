

@extends('app.app')

@section('content')
    <div class="px-20 py-10">
        <h1 class="text-3xl font-bold">Journals</h1>
        <p class="text-xs text-gray-700">See more of what we know</p>
        <div class="shadow-md p-3 mt-4">
            <h1>Sort By:</h1>
        </div>
        <div class="flex mt-3 items-start">
            <div class="w-9/12 mr-10">
                @for($i=0;$i < 10; $i++)
                    <x-bookrow/>
                @endfor
            </div>
            @include('layouts.sidebar')
        </div>
    </div>
@endsection