@extends('admins.components.app')

@section('content')
<div class="p-4">
    <div class="flex flex-col">
        <div class="py-3 mb-2 w-full bg-red-500 flex flex-col items-center mr-5 rounded shadow">
            <h1 class="text-4xl font-bold text-white">300</h1>
            <h1 class="text-white text-sm italic">Users</h1>
        </div>
        <div class="py-3 mb-2 w-full bg-blue-500 flex flex-col items-center mr-5 rounded shadow">
            <h1 class="text-4xl font-bold text-white">500</h1>
            <h1 class="text-white text-sm italic">Books</h1>
        </div>
        <div class="py-3 mb-2 w-full bg-green-500 flex flex-col items-center mr-5 rounded shadow">
            <h1 class="text-4xl font-bold text-white">700</h1>
            <h1 class="text-white text-sm italic">Journals</h1>
        </div>
    </div>
    <div class="flex py-2 flex-col">
        <div class="w-full mb-3 px-4 py-2 shadow rounded">
            <h1 class="text-sm font-semibold">Sales for the Month</h1>
            <h1 class="text-4xl font-bold">$4,500</h1>
        </div>
        <div class="w-full bg-gray-200 p-3 rounded-lg shadow">
            <h1 class="font-bold mb-3">Pending Transactions from users</h1>
            <div class="max-h-96 overflow-y-scroll">
                @for($i=0; $i < 10; $i++) 
                <div class="flex bg-white shadow p-2 my-2 justify-between rounded">
                    <h1 class="text-sm"><span class="text-md font-bold">Ferguson</span> made a deposite of <span class="text-md font-bold text-red-500">$4000</span></h1>
                    <div class="flex">
                        <a href="" class="px-3 py-1 text-xs mx-1 text-white rounded bg-blue-500">View</a>
                    </div>
                </div>
            @endfor
            </div>
        </div>

    </div>
</div>
@endsection