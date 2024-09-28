
@extends('app.app')

@section('content')
    <div class="w-full my-10 flex flex-col items-center justify-center">
        <h1 class="text-center text-3xl font-bold">Create Account</h1>
        <h1 class="text-center text-sm text-gray-700 mb-4">Please Register using account detail below.</h1>
        <div class="w-5/12 shadow p-3 small-screen-padding">
            <form action="{{route('register')}}" method="post" class="flex flex-col items-center">
                @csrf
                @if(session('status'))
                <p class="text-white bg-red-400 text-xs py-1 w-full text-center rounded">
                    {{session('status')}}
                </p>
                @endif
                <input type="text" placeholder="Enter Name" name="name" value="{{old('name')}}"
                class="w-full p-3 my-3 border-1 shadow-md @error('name')  border-red-400 @enderror"/>
                @error('name')
                    <p class="text-red-400 w-full text-start text-xs italic">
                        {{$message}}
                    </p>
                @enderror
                <input type="email" placeholder="Enter Email" name="email" value="{{old('email')}}"
                class="w-full p-3 my-3 border-1 shadow-md @error('email')  border-red-400 @enderror"/>
                @error('email')
                    <p class="text-red-400 w-full text-start text-xs italic">
                        {{$message}}
                    </p>
                @enderror
                <input type="password" placeholder="Password" name="password" 
                class="w-full p-3 my-3 border-1 shadow-md @error('password')  border-red-400 @enderror"/>
                @error('password')
                    <p class="text-red-400 w-full text-start text-xs italic">
                        {{$message}}
                    </p>
                @enderror
                <input type="password" placeholder="Repeat Password" name="password_confirmation" 
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