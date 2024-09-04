
@extends('app.app')

@section('content')
    <div class="w-full my-10 flex flex-col items-center justify-center">
        <h1 class="text-center text-3xl font-bold">Create Account</h1>
        <h1 class="text-center text-sm text-gray-700 mb-4">Please Register using account detail below.</h1>
        <div class="w-5/12 shadow p-3 small-screen-padding">
            <form class="flex flex-col items-center">
                <input type="text" placeholder="Enter Name" name="email" 
                class="w-full p-3 my-3 border-1 shadow-md"/>

                <input type="text" placeholder="Enter Username" name="email" 
                class="w-full p-3 my-3 border-1 shadow-md"/>

                <input type="email" placeholder="Enter Email" name="email" 
                class="w-full p-3 my-3 border-1 shadow-md"/>

                <input type="password" placeholder="Password" name="password" 
                class="w-full p-3 my-3 border-1 shadow-md"/>
                
                <input type="password" placeholder="Repear Password" name="password_confirmation" 
                class="w-full p-3 my-3 border-1 shadow-md"/>

                <button type="submit" class="bg-dark px-20 py-2 rounded shadow-md my-3
                button-hover text-white">Create</button>
            </form>
            <div class="flex justify-end items-center">
                <p class="text-sm">Already signed up ? <a href="{{route('login')}}" 
                class="text-xl font-bold text-red-500
                hover:text-gray-800">Login</a></p>
            </div>
        </div>
    </div>
@endsection