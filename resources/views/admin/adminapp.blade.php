<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('tailwindcss/style.css')}}">
        <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
    </head>
    <body>
        <div class="bg-red-900 w-full p-10 flex  min-h-screen">
            @include('admin.components.bookdetails')
            <div class="w-2/12">
                <div class="flex items-center border-b-2 border-gray-500 mr-10 pb-3">
                    <img src="{{asset('img/logo.png')}}" style="width: 50px; filter:invert(0)">
                    <div class="text-white">
                        <p class="text-2xl font-bold text-uppercase">Essence</p>
                        <p class="text-md">Bookstore</p>
                    </div>
                </div>
                <!-- Links -->
                <div class="mt-5 ml-3">
                    <!-- dashboard -->
                    <div class="{{ $route == 'dashboard' ? 'bg-white' : 'bg-red-900' }} mb-3">
                        <a href="{{route('admin')}}" class="rounded-l-2xl -ml-3 overflow-hidden 
                            {{ $route == 'dashboard' ? 'bg-white' : 'bg-red-900' }} p-3 flex 
                            items-center hover:text-red-900">
                            <img src="{{asset('img/home.png')}}" style="width: 18px; 
                            filter : {{ $route == 'dashboard' ? 'invert(0)' : 'invert(1)' }}">
                            <h1 class="ml-3 text-sm font-bold {{ $route == 'dashboard' ? 'text-dark' : 'text-white' }}">
                                Dashboard
                            </h1>
                        </a>
                    </div>
                    <!-- book -->
                    <div class="{{ $route == 'book' ? 'bg-white' : 'bg-red-900' }} mb-3">
                        <a href="{{route('admin.books')}}" class="rounded-l-2xl -ml-3 overflow-hidden 
                            {{ $route == 'book' ? 'bg-white' : 'bg-red-900' }} p-3 flex 
                            items-center hover:text-red-900">
                            <img src="{{asset('img/home.png')}}" style="width: 18px; 
                            filter : {{ $route == 'book' ? 'invert(0)' : 'invert(1)' }}">
                            <h1 class="ml-3 text-sm font-bold {{ $route == 'book' ? 'text-dark' : 'text-white' }}">
                                Books
                            </h1>
                        </a>
                    </div>
                    
                    <!-- journal -->
                    <div class="{{ $route == 'journal' ? 'bg-white' : 'bg-red-900' }} mb-3">
                        <a href="{{route('admin.journals')}}" class="rounded-l-2xl -ml-3 overflow-hidden 
                            {{ $route == 'journal' ? 'bg-white' : 'bg-red-900' }} p-3 flex 
                            items-center hover:text-red-900">
                            <img src="{{asset('img/home.png')}}" style="width: 18px; 
                            filter : {{ $route == 'journal' ? 'invert(0)' : 'invert(1)' }}">
                            <h1 class="ml-3 text-sm font-bold {{ $route == 'journal' ? 'text-dark' : 'text-white' }}">
                                Journals
                            </h1>
                        </a>
                    </div>
                    
                    <!-- user -->
                    <div class="{{ $route == 'user' ? 'bg-white' : 'bg-red-900' }} mb-3">
                        <a href="{{route('admin')}}" class="rounded-l-2xl -ml-3 overflow-hidden 
                            {{ $route == 'user' ? 'bg-white' : 'bg-red-900' }} p-3 flex 
                            items-center hover:text-red-900">
                            <img src="{{asset('img/home.png')}}" style="width: 18px; 
                            filter : {{ $route == 'user' ? 'invert(0)' : 'invert(1)' }}">
                            <h1 class="ml-3 text-sm font-bold {{ $route == 'user' ? 'text-dark' : 'text-white' }}">
                                Users
                            </h1>
                        </a>
                    </div>

                    <!-- view website -->
                    <div class="{{ $route == 'user' ? 'bg-white' : 'bg-red-900' }} mb-3">
                        <a href="{{route('home')}}" class="rounded-l-2xl -ml-3 overflow-hidden 
                            {{ $route == 'user' ? 'bg-white' : 'bg-red-900' }} p-3 flex 
                            items-center hover:text-red-900">
                            <img src="{{asset('img/home.png')}}" style="width: 18px; 
                            filter : {{ $route == 'user' ? 'invert(0)' : 'invert(1)' }}">
                            <h1 class="ml-3 text-sm font-bold {{ $route == 'user' ? 'text-dark' : 'text-white' }}">
                                Visit Website
                            </h1>
                        </a>
                    </div>
                    
                  
                    
                </div>
            </div>
            <div class="bg-white w-10/12 rounded-3xl p-3">
                <div class="flex items-center justify-between border-b-2 border-gray-200 pb-2 mb-2">
                    <h1 class="text-sm text-gray-600 font-bold">
                        Home > 
                        <span class="capitalize">{{$route }}</span>
                        @if($operation ?? '') 
                        > <span class="capitalize">{{$operation }}</span>
                        @endif
                    </h1>
                    <div class="flex items-center">
                        <form class="flex items-center bg-gray-300 rounded-full overflow-hidden">
                            <input type="text" placeholder="Search" class="px-3 py-1 bg-gray-300"/>
                            <button><img src="{{asset('img/search.png')}}" style="width: 20px;"
                            class="mx-3"></button>
                        </form>
                        <div class="mx-4">
                            <a href=""><img src="{{asset('img/notification.png')}}" style="width: 30px;"></a>
                        </div>
                        <div class="rounded-full overflow-hidden border-2 border-gray-300">
                            <a href=""><img src="{{asset('img/user 1.jpg')}}" style="width: 40px;"></a>
                        </div>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
        <script src="{{asset('js/script.js')}}"></script>
    </body>
</html>