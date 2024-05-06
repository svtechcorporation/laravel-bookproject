@extends('app.app')

@section('content')
    <div class="px-20 py-10">
        <!-- title section -->
        <div class="flex flex-col justify-center items-center">
            <h1 class="text-4xl font-bold">About Us</h1>
            <p class="text-sm text-gray-700">Know more of what we offer</p>
        </div>
        <!-- guarantee section -->
        <div class="flex py-10 items-center justify-between">
            <div class="w-5/12" style="position: relative;">
                <img src="{{asset('img/library.jpg')}}" />
                <div class="bg-red-600 p-3 shadow flex items-center justify-center flex-col text-white"
                    style="position: absolute; right:-40px; bottom:-40px; border-radius:50%; width: 200px;height:200px;">
                    <p class="text-5xl font-bold">100%</p>
                    <p class="text-center text-gray-200">Guarantee on all our books</p>
                </div>
            </div>
            <div class="w-6/12">
                <h1 class="text-3xl font-semibold mb-3">Since 1987, We have established ourselves with a strong reputation.</h1>
                <p class="text-gray-800 italic mb-5">
                    Incididunt pariatur consectetur qui anim consequat qui ex nulla ad est dolore ex. 
                    Et irure deserunt deserunt labore Lorem ut. Aliqua eiusmod id duis velit 
                    labore cupidatat tempor esse commodo nisi. Fugiat enim cillum duis ullamco 
                    adipisicing eu magna irure Lorem qui nisi laborum do magna. Sunt sunt adipisicing 
                    incididunt id non ea minim tempor in occaecat incididunt magna. Culpa dolore 
                    aliquip cupidatat ex nostrud irure aute ipsum irure commodo. Pariatur ad minim et 
                    sint pariatur. Et Lorem qui Lorem sunt. Sunt incididunt id ea commodo
                        exercitation aliquip eiusmod consequat.</p>
                <a href="" class="bg-dark px-5 py-2 text-white hover:bg-red-500">Explore more</a>
            </div>
        </div>
        <!-- founders section -->
        <div class="flex mt-10 items-center justify-between">
            <div class="w-6/12">
                <h1 class="text-3xl font-semibold mb-3 text-right">
                    "Essence Are Such Joy To Be Cherished Handled With Pleasure"
                </h1>
                <p class="text-gray-800 mb-3 text-right">
                    Incididunt pariatur consectetur qui anim consequat qui ex nulla ad est dolore ex. 
                    Et irure deserunt deserunt labore Lorem ut. Aliqua eiusmod id duis velit 
                    labore cupidatat tempor esse commodo nisi. Fugiat enim cillum duis ullamco 
                    adipisicing eu magna irure Lorem qui nisi laborum do magna. Sunt sunt adipisicing 
                    incididunt id non ea minim tempor in occaecat incididunt magna. Culpa dolore 
                    aliquip cupidatat ex nostrud irure aute ipsum irure commodo. Pariatur ad minim et 
                    sint pariatur. Et Lorem qui Lorem sunt. Sunt incididunt id ea commodo
                        exercitation aliquip eiusmod consequat.</p>
                <p class="text-gray-900 italic text-xl font-semibold text-right">Dr. Imosen Daniel / Founder</p>
            </div>
            <div class="w-5/12" style="position: relative;">
                <img src="{{asset('img/reading.jpg')}}" />
            </div>
        </div>
        <!-- join community section -->
        <div class="flex items-center justify-between bg-gray-900 mt-20 px-10 py-13w-full">
            <div class="text-white w-6/12">
                <h1 class="text-4xl font-bold">Join our Community</h1>
                <h1 class="my-3 text-sm text-gray-200">
                    Enter your email address to receive regular updates, as well as news on
                     upcoming events and specific offers.</h1>
                <form class="w-full bg-dark">
                    <input type="text" class="w-9/12 p-2 text-dark" placeholder="email@example.com"/>
                    <button type="submit" class="px-4 py-2">Subscribe</button>
                </form>
            </div>
            <div>
                <img src="{{asset('img/bookfront.png')}}" style="width: 400px;"/>
            </div>
        </div>
        <!-- customer testimony section -->
        <div class="flex flex-col items-center mt-20 mb-10 px-10">
            <h1 class="text-4xl font-bold">What our clients say</h1>
            <p class="text-sm text-gray-600">Testimonies</p>
            @php
                $customers = ['img/user 1.jpg', 'img/user 2.jpg', 'img/user3.jpg',];

            @endphp

            <div class="flex mt-10">
                @foreach($customers as $customer)
                    <div class="flex flex-col items-center mx-10">
                        <div class="rounded-full overflow-hidden">
                            <img src="{{asset($customer)}}" />
                        </div>
                        <h1 class="italic text-gray-600 text-sm text-center">
                            Magna deserunt nisi anim non magna deserunt Lorem. Aliquip 
                            officia fugiat excepteur enim consequat est cupidatat ex. 
                            Tempor proident laboris cillum exercitation eu occaecat 
                            proident sunt minim. Sint reprehenderit qui excepteur.
                        </h1>
                        <h1 class="font-semibold text-center mt-2">- Customer Name</h1>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection