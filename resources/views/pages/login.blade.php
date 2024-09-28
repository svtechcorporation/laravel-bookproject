
@extends('app.app')

@section('content')
    <div class="w-full my-10 flex flex-col items-center justify-center">
        <h1 class="text-center text-3xl font-bold mb-4">Login</h1>
        <div class="w-5/12 shadow p-3 small-screen-padding">
            <form action="{{route('login')}}" method="post"  class="flex flex-col items-center">
                @csrf
                @if(session('status'))
                <p class="text-white bg-red-400 text-xs py-1 w-full text-center rounded">
                    {{session('status')}}
                </p>
                @endif
                <input type="email" placeholder="Email" name="email" value="{{old('email')}}"
                class="w-full p-3 my-3 border-1 shadow-md"/>
                @error('email')
                    <p class="text-red-400 w-full text-start text-xs italic">
                        {{$message}}
                    </p>
                @enderror
                <input type="password" placeholder="Password" name="password"
                class="w-full p-3 my-3 border-1 shadow-md"/>
                @error('password')
                    <p class="text-red-400 w-full text-start text-xs italic">
                        {{$message}}
                    </p>
                @enderror
                <div class="flex items-center w-full">
                    <input type="checkbox" />
                    <label class="ml-1 text-sm text-gray-500">Remember me</label>
                </div>
                <div class="flex items-center justify-between w-full">
                    <button type="submit" class="bg-dark px-10 py-2 rounded shadow-md my-3
                    button-hover text-white">Login</button>
                    <a href="{{route('register')}}" class="hover:text-gray-800">Forgotten Password ?</a>
                </div>
            </form>
            <div class="flex justify-start items-center">
                <a href="{{route('register')}}" class="font-bold hover:text-gray-800">Create Account</a>
            </div>
        </div>
    </div>
@endsection