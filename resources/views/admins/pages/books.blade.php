@extends('admins.components.app')

@section('content')
<div class="p-3 book-page-section">
    <div class="w-full page-details-section">
        <h1 class="py-3 font-bold uppercase">{{$route}} Details</h1>
        <div class="flex page-detail-list">
            <div class="py-1 w-4/12 mx-1 flex flex-col items-center shadow">
                <h1 class="text-sm text-gray-600 font-semibold capitalize text-center">Available {{$route}}</h1>
                <h1 class="text-4xl font-bold text-green-600">300</h1>
            </div>
            <div class="py-1 w-4/12 mx-1 flex flex-col items-center shadow">
                <h1 class="text-sm text-gray-600 font-semibold capitalize text-center">Sold {{$route}}s</h1>
                <h1 class="text-4xl font-bold text-red-600">10</h1>
            </div>
            <div class="py-1 w-4/12 mx-1 flex flex-col items-center shadow">
                <h1 class="text-sm text-gray-600 font-semibold capitalize text-center">{{$route}}s on pending Sales</h1>
                <h1 class="text-4xl font-bold text-blue-600">10</h1>
            </div>
        </div>
    </div>
    <div class="p-3 page-operation-section" style="position: relative;">
        <a href="{{$route =='book' ? 
                    $operation=='view' ? route('admins.books.add'):route('admins.books') : (
                    $operation=='view' ? route('admins.journals.add'):route('admins.journals') )
                }}" 
            class="{{$operation=='view'?'bg-green-500':'bg-blue-500'}} 
            px-3 py-2 rounded text-white text-sm button-hover shadow capitalize">
            {{ $operation=='view'? 'Add New':'View'}} {{$route}}s
        </a>
        <h1 class="mt-3 text-xl font-black capitalize">
            {{ $operation=='view'? 'List All': ($operation=='edit' ? 'Edit':'Add New')}} {{$route}}
         </h1>
        <div class="flex items-start mt-2">
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