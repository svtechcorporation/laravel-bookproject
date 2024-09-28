@extends('admin.components.app')

@section('content')
<div class="p-4">
    <div class="dashboard">
        <div class="flex flex-col dashboard-details">
            <div class="py-3 mb-2 w-full bg-red-500 flex flex-col items-center mr-5 rounded shadow">
                <h1 class="text-4xl font-bold text-white">{{$total_user}}</h1>
                <h1 class="text-white text-sm italic">Users</h1>
            </div>
            <div class="py-3 mb-2 w-full bg-blue-500 flex flex-col items-center mr-5 rounded shadow">
                <h1 class="text-4xl font-bold text-white">{{$total_book}}</h1>
                <h1 class="text-white text-sm italic">Books</h1>
            </div>
            <div class="py-3 mb-2 w-full bg-green-500 flex flex-col items-center mr-5 rounded shadow">
                <h1 class="text-4xl font-bold text-white">{{$total_journal}}</h1>
                <h1 class="text-white text-sm italic">Journals</h1>
            </div>
            <div class="py-3 mb-2 w-full bg-yellow-600 flex flex-col items-center mr-5 rounded shadow">
                <h1 class="text-4xl font-bold text-white">{{$sold_books}}</h1>
                <h1 class="text-white text-sm italic">Sold Books</h1>
            </div>
        </div>
        <div class="flex py-2 flex-col dashboard-content">
            <div class="w-full mb-3 px-4 py-4 shadow rounded flex sm:flex-col-reverse lg:flex-row">
                <div class="lg:w-9/12 md:w-full text-xs lg:pr-5 md:pr-0">
                    <h1 class="text-lg font-black uppercase border-b border-gray-300 pb-2 mb-4">
                        Owner Information
                    </h1>
                    @if($owner =='view')
                        <div class="flex mb-3">
                            <h1 class="w-6/12">Name:<br>
                                <span class="text-base font-semibold">{{$ownerprofile->name}}</span></h1>
                            <h1 class="w-6/12">Phone Number:<br><span class="text-base font-semibold">
                            {{$ownerprofile->phone}}
                            </span></h1>
                        </div>
                        <h1>Email:<br><span class="text-base font-semibold">
                            {{$ownerprofile->email}}
                        </span></h1>
                        <div class="flex my-3">
                            <h1 class="w-6/12">Account Number:<br><span class="text-base font-semibold">
                                {{$ownerprofile->account_number}}
                            </span></h1>
                            <h1 class="w-6/12">Bank:<br><span class="text-base font-semibold">
                                {{$ownerprofile->bank}}
                            </span></h1>
                        </div>
                        <h1 class="mb-4">Account Name:<br><span class="text-base font-semibold">
                            {{$ownerprofile->account_name}}
                        </span></h1>
                        <a href="{{route('owner.edit') }}" class="rounded text-sm bg-green-500 px-3 py-2 text-white hover:bg-green-900">
                            Edit Information
                        </a>
                    @endif
                    @if($owner =='edit')
                        <form action="{{route('owner.save')}}" method="post" class="text-sm">
                            @csrf
                            @if(session('status'))
                                <p class="bg-green-300 px-3 py-1 mb-3 text-sm text-white rounded">
                                    {{session('status')}}
                                </p>
                            @endif
                            @if($errors->count() > 0)
                                <p class="bg-red-500 px-3 py-1 mb-3 text-sm text-white rounded">
                                    Please, fill up form properly
                                </p>
                            @endif
                            <div class="flex w-full">
                                <input type="text" name="name" placeholder="Name" 
                                    value="{{$ownerprofile->name}}"
                                class="w-6/12 px-3 py-2 mb-3 rounded border-1 border-gray-200 
                                    @error('name') border-red-500 @enderror"/>
                                <input type="number" name="phone" placeholder="Phone Number" 
                                    value="{{$ownerprofile->phone}}"
                                class="w-6/12 px-3 py-2 mb-3 ml-4 rounded border-1 border-gray-200 
                                    @error('phone') border-red-500 @enderror"/>
                            </div>
                            <input type="email" name="email" placeholder="Email Address" 
                                value="{{$ownerprofile->email}}"
                                class="px-3 py-2 mb-3 rounded border-1 border-gray-200 w-full
                                    @error('email') border-red-500 @enderror"/>
                            <div class="flex w-full">
                                <input type="number" name="account_number" placeholder="Account Number" 
                                    value="{{$ownerprofile->account_number}}"
                                class="w-6/12 px-3 py-2 mb-3 rounded border-1 border-gray-200 
                                    @error('account_number') border-red-500 @enderror"/>
                                <input type="text" name="account_name" placeholder="Account Name" 
                                    value="{{$ownerprofile->account_name}}"
                                class="w-6/12 px-3 py-2 mb-3 ml-4 rounded border-1 border-gray-200 
                                    @error('account_name') border-red-500 @enderror"/>
                            </div>
                            <input type="text" name="bank" placeholder="Bank Name" 
                                value="{{$ownerprofile->bank}}"
                                class="px-3 py-2 mb-4 rounded border-1 border-gray-200 w-full
                                    @error('bank') border-red-500 @enderror">
                            <div class="flex w-full text-white text-xs">
                                <button type="submit"
                                    class="bg-green-500 rounded px-4 py-2 hover:bg-green-900">Save</button>
                                <a href="{{route('admin') }}"
                                    class="bg-red-500 rounded px-4 py-2 ml-5 hover:bg-red-900">Back</a>
                            </div>
                        </form>
                    @endif
                </div>
                <div class="lg:w-3/12 sm:w-full sm:mb-10">
                    <h1 class="text-sm font-semibold">Sales for the Month</h1>
                    <h1 class="text-4xl font-bold">${{ number_format($soldbooksprice, 0, '', ',') }}</h1>
                </div>
            </div>
            @if($operation == 'dashboard')
                <div class="w-full bg-gray-200 p-3 rounded-lg shadow">
                    <h1 class="font-bold mb-3">Pending Transactions from users</h1>
                    <div class="max-h-96 overflow-y-scroll">
                    @foreach($pendingbook as $book) 
                        <div class="flex bg-white shadow p-2 my-2 justify-between rounded">
                            <h1 class="text-sm">
                                <span class="text-md font-bold">{{$book->user->name}}</span> 
                                made a deposite of 
                                <span class="text-md font-bold text-red-500">
                                    ${{number_format((float)$book->amount, 2, ".", ",")}}</span>
                            </h1>
                            <div class="flex">
                                <a href="{{ route('admin.viewtransaction', ['id'=>$book->transaction_id] ) }}" 
                                    class="px-3 py-1 text-xs mx-1 text-white rounded bg-blue-500">
                                    View
                                </a>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            @endif
            @if($operation == 'view')
                <div class="w-full bg-white lg:p-5 sm:p-5 rounded-lg shadow">
                    <a href="{{route('admin')}}" 
                        class="bg-red-600 px-3 py-2 rounded text-white  text-xs">
                        <span class="font-black"><</span> Back
                    </a>
                    <h1 class="font-bold my-3 uppercase">Single Transaction</h1>
                    <div class="flex sm:flex-col-reverse lg:flex-row">
                        <div class="lg:w-7/12 sm:w-full">
                            <h1 class="text-sm text-gray-400 font-semibold capitalize mb-1 border-b border-gray-200 pb-1">
                                Payment From
                            </h1>
                            <div class="text-sm text-gray-500 mb-4">
                                <h1 class="text-base font-bold text-dark py-2">{{$pending_books[0]->user->name}}</h1>
                                <h1>{{$pending_books[0]->user->email}}</h1>
                            </div>
                            <h1 class="text-sm text-gray-400 font-semibold capitalize mb-1 border-b border-gray-200 pb-1">
                                For:
                            </h1>
                            <div>
                                @php $i = 1; @endphp
                                @foreach($pending_books as $book)
                                    <div class="flex items-center justify-between p-3 rounded shadow my-2">
                                        <h1 class="flex items-center text-sm font-bold">
                                            <span class="pr-2 font-semibold text-xs">{{$i}}</span>
                                            {{$book->book->title}}
                                        </h1>
                                        <h1 class="font-bold text-sm text-red-500 flex items-center">
                                            <span class="text-gray-500 font-light text-xs mr-2">Price: </span>
                                            ${{number_format($book->book->price, 2, '.', ',') }}
                                        </h1>
                                    </div>
                                    @php $i = $i+1; @endphp
                                @endforeach
                            </div>
                            <h1 class="text-sm text-gray-400 mt-5 font-semibold capitalize mb-1 border-b border-gray-200 pb-1">
                                Total Amount Paid:
                            </h1>
                            <h1 class="text-3xl font-bold mt-2">
                                ${{number_format($totalprice, 2, '.', ',') }}
                            </h1>
                            <div class="mt-5">
                                <form method="post" action="{{route('admin.verify')}}">
                                    @csrf
                                    <input type="hidden" class="d-none" name="id" value="{{$pending_books[0]->transaction_id}}" />
                                    <button class="bg-green-500 text-white px-4 py-2 rounded shadow" href="" type="submit">
                                        Verify Payment
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="lg:w-5/12 sm:w-full lg:pl-5">
                            <h1 class="text-sm text-gray-400 font-semibold capitalize mb-3 border-b border-gray-200 pb-1">
                                Proof of Payment
                            </h1>
                            <img src="{{ asset('payment/'.$pending_books[0]->payment) }}" 
                                class="w-full h-80 shadow rounded-lg overflow-hidden"/>
                            <div class="flex text-white mt-3 justify-end">
                                <a href="{{ asset('payment/'.$pending_books[0]->payment) }}" target="_blank"
                                    class="bg-blue-500 px-3 py-2 text-sm rounded mr-4">View</a>
                                <a href="{{route('admin.downloadreceipt', ['file'=>$pending_books[0]->payment])}}" 
                                    class="bg-yellow-600 px-3 py-2 text-sm rounded">Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="">

                    </div>
                </div>
            @endif
        </div>
    </div>
    
</div>
@endsection