
@extends('admin.adminapp')

@section('content')
    <div class="">
        <h1 class="mb-4">Welcome</h1>
        <div class="flex ">
            <div class="px-20 py-10 w-4/12 bg-red-500 flex flex-col items-center mr-5 rounded shadow">
                <h1 class="text-4xl font-bold text-white">300</h1>
                <h1 class="text-white text-sm italic">Users</h1>
            </div>
            <div class="px-20 py-10 w-4/12 bg-blue-500 flex flex-col items-center mr-5 rounded shadow">
                <h1 class="text-4xl font-bold text-white">500</h1>
                <h1 class="text-white text-sm italic">Books</h1>
            </div>
            <div class="px-20 py-10 w-4/12 bg-green-500 flex flex-col items-center mr-5 rounded shadow">
                <h1 class="text-4xl font-bold text-white">700</h1>
                <h1 class="text-white text-sm italic">Journals</h1>
            </div>
        </div>
        <div class="flex py-5 items-start">
            <div class="w-8/12 bg-gray-200 p-3 rounded-lg shadow">
                <h1 class="font-bold mb-3">Pending Transactions from users</h1>
                <div class="max-h-96 overflow-y-scroll">
                    @for($i=0; $i < 10; $i++)
                        <div class="flex bg-white shadow p-2 my-2 justify-between rounded">
                            <h1 class="text-sm"><span class="text-md font-bold">Ferguson</span> made a deposite of <span 
                            class="text-md font-bold text-red-500">$4000</span></h1>
                            <div class="flex">
                                <a href="" class="px-3 py-1 text-xs mx-1 text-white rounded bg-blue-500">View</a>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="w-3/12 bg-gray-100 px-4 py-5 ml-5 shadow rounded">
                <h1 class="text-sm font-semibold">Sales for the Month</h1>
                <h1 class="text-4xl font-bold">$4,500</h1>
            </div>
        </div>
    </div>
@endsection