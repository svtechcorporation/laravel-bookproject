
<div class="flex justify-between items-center px-10 py-2 shadow-md bg-white w-full" 
    id="navigation">
    <div class="flex items-center">
        <a href="{{route('home')}}" class="flex items-center">
            <img src="{{asset('img/logo.png')}}" style="width: 50px;">
            <div class="">
                <p class="text-xl font-bold text-uppercase">Essence</p>
                <p class="text-sm">Bookstore</p>
            </div>
        </a>
    </div>
    <div class="nav-link-container">
        <ul class="flex nav-link-center text-sm">
            <li class="@if($title==='Home') nav-active @endif">
                <a href="{{route('home')}}" >Home</a>
            </li>
            <li  class="@if($title==='Books') nav-active @endif">
                <a href="{{route('books')}}">Books</a>
            </li>
            <li class="@if($title==='Journals') nav-active @endif">
                <a href="{{route('journals')}}">Journals</a>
            </li>
            <li class="@if($title==='About Us') nav-active @endif">
                <a href="{{route('aboutus')}}">About Us</a>
            </li>
            <li class="@if($title==='Contact Us') nav-active @endif">
                <a href="{{route('contactus')}}">Contact Us</a>
            </li>
        </ul>
    </div>
    <div class="flex items-center nav-link-right nav-login-container">
        <div class="nav-link-search @if($title==='Search') nav-active @endif">
            <a href="" class="flex items-center">
                <img src="{{asset('img/search.png')}}">
                <p class="text-xs font-semibold ml-1">Search</p>
            </a>
            <div class="search-bar p-3 bg-white shadow hover:text-dark">
                <form action="{{route('search')}}" class="flex w-full items-center bg-dark border-1 border-gray-300">
                    <input type="text" placeholder="Find your desired books...." class="p-2 text-dark 
                    outline-none" style="width: 500px;"/>
                    <button type="submit" class="text-white bg-dark px-4 py-2">Search</button>
                </form>
            </div>
        </div>
        <div class="nav-link-cart @if($title==='Cart') nav-active @endif">
            <a href="{{route('cart')}}" class="flex items-center ">
                <img src="{{asset('img/carticon.png')}}">
                <p class="text-xs font-semibold ml-1">Cart</p>
                <p class="bg-red-500 text-white p-1 rounded-full flex items-center justify-center" 
                style="height:15px;margin-top: -10px;font-size:0.6em">5</p>
            </a>
        </div>
        <div class="@if($title==='Login' || $title==='Register') nav-active @endif">
            <a href="{{route('login')}}" class="flex items-center">
                <img src="{{asset('img/login.png')}}">
                <p class="text-xs font-semibold ml-1">Login/Register</p>
            </a>
        </div>
    </div>
    <div class="hidden toggle-menu">
        <div class="flex items-center">
            <a href="{{route('register')}}" class="flex flex-col items-center">
                <p class="text-sm font-bold mr-3">Register</p>
            </a>
            <a href="{{route('login')}}" class="flex flex-col items-center bg-red-500 mr-3 px-2 py-1 rounded">
                <p class="text-sm text-white font-bold">Login</p>
            </a>
        </div>
        <div id="sm-navigation">
            <img src="{{asset('img/openmenu.png')}}" style="width: 40px; cursor:pointer" 
                id="sm-nav-show"  onclick="showNavigation(1)"/>
            <img src="{{asset('img/closemenu.png')}}" style="width: 40px; cursor:pointer; display:none" 
                id="sm-nav-hide"  onclick="showNavigation(0)"/>
        </div>
        <div class="sm-links p-3 bg-dark text-white scale-up-ver-top" id="sm-links">
            <ul class="flex flex-col">
                <a class="@if($title==='Home') nav-active @endif p-3" href="{{route('home')}}" >
                    Home
                </a>
                <a class="@if($title==='Books') nav-active @endif p-3" href="{{route('books')}}">
                    Books
                </a>
                <a class="@if($title==='Journals') nav-active @endif p-3" href="{{route('journals')}}">
                    Journals
                </a>
                <a class="@if($title==='About Us') nav-active @endif p-3" href="{{route('aboutus')}}">
                    About Us
                </a>
                <a class="@if($title==='Contact Us') nav-active @endif p-3" href="{{route('contactus')}}">
                    Contact Us
                </a>
                <a class="@if($title==='Cart') nav-active @endif p-3 flex items-center" 
                    href="{{route('cart')}}">
                    Cart
                    <p class="bg-white text-red-500 p-1 rounded-full flex items-center justify-center ml-2" 
                        style="height:15px;font-size:0.6em">5</p>
                </a>
                <a class="@if($title==='Search') nav-active @endif p-3" href="{{route('search')}}">
                    Search
                </a>
            </ul>
        </div>
    </div>

</div>