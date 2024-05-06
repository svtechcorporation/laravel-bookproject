@extends('app.app')

@section('content')
    <div class="px-20 py-10">
        <!-- title section -->
        <div class="flex flex-col justify-center items-center">
            <h1 class="text-4xl font-bold">Contact Us</h1>
            <p class="text-sm text-gray-700">Know us more</p>
        </div>
        <!--  section -->
        <div class="flex py-10 items-start justify-between">
            <div class="w-6/12">
                <div class="bg-gray-200 p-4 rounded-lg">
                    <h1 class="font-bold mb-2">Address</h1>
                    <div class="flex items-center">
                        <img src="{{asset('img/emailred.png')}}" style="width: 40px;"/>
                        <h1 class="ml-2">123 Pall Mall, London England</h1>
                    </div>
                </div>
                <div class="bg-gray-200 p-4 rounded-lg my-2">
                    <h1 class="font-bold mb-2">Email</h1>
                    <div class="flex items-center">
                        <img src="{{asset('img/emailred.png')}}" style="width: 40px;"/>
                        <h1 class="ml-2">email@example.com</h1>
                    </div>
                </div>
                <div class="bg-gray-200 p-4 rounded-lg">
                    <h1 class="font-bold mb-2">Phone</h1>
                    <div class="flex items-center">
                        <img src="{{asset('img/emailred.png')}}" style="width: 40px;"/>
                        <h1 class="ml-2">+234-814-444-3774</h1>
                    </div>
                </div>
            </div>
            <div class="w-5/12">
                <form class="w-full text-dark">
                    <input type="text" placeholder="Name" class="border-1 shadow-md w-full p-3 mb-3"/>
                    <input type="text" placeholder="Email" class="border-1 shadow-md w-full p-3 mb-3"/>
                    <input type="text" placeholder="Subject" class="border-1 shadow-md w-full p-3 mb-3"/>
                    <textarea type="text" placeholder="Message" rows="5" 
                        class="border-1 shadow-md w-full p-3 mb-3"></textarea>
                    <button class="bg-dark px-20 rounded py-2 text-white button-hover">Send</button>
                </form>
            </div>
        </div>
    </div>
@endsection