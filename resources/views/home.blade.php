@extends('app.app')

@section('content')
    <div>
        @include('layouts.landingpage')
        <div class="px-36 py-10 position-fixed top-0 left-0 z-50 w-full h-full " 
            style="background: rgba(0,0,0,0.8);">
            <div class="bg-white w-full h-full rounded-lg">
                @include('layouts.cart')
            </div>
        </div>
        @include('layouts.bookpage')
    </div>
@endsection