
<div class="flex justify-between items-center px-10 py-4 shadow-md bg-white w-full" 
    id="navigation">
    <div class="flex items-center">
        <img src="{{asset('img/logo.png')}}" style="width: 50px;">
        <div class="">
            <p class="text-xl font-bold text-uppercase">Essence</p>
            <p class="text-sm">Bookstore</p>
        </div>
    </div>
    <div>
        <ul class="flex nav-link-center">
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
    <div class="flex items-center nav-link-right">
        <div class="nav-link-search">
            <a href="">
                <img src="{{asset('img/search.png')}}">
                <p class="text-xs">Search</p>
            </a>
            <div class="search-bar p-3 bg-white shadow hover:text-dark">
                <form class="flex w-full items-center bg-dark border-1 border-gray-300">
                    <input type="text" placeholder="Find your desired books...." class="p-2 text-dark 
                    outline-none" style="width: 500px;"/>
                    <button type="submit" class="text-white bg-dark px-4 py-2">Search</button>
                </form>
            </div>
        </div>
        <div class="nav-link-cart">
            <a href="">
                <img src="{{asset('img/carticon.png')}}">
                <p class="text-xs">Cart</p>
            </a>
            <div class="flex flex-col bg-white shadow text-dark cart-style p-1">
                @php
                    $carts = ['img/basicprogram.jpg', 'img/basicprogram.jpg', 'img/basicprogram.jpg', 
                    'img/basicprogram.jpg','img/basicprogram.jpg','img/basicprogram.jpg',
                    'img/basicprogram.jpg','img/basicprogram.jpg',];
                @endphp
                <div style="max-height: 350px; overflow-x:hidden;overflow-y:scroll;">
                    @foreach($carts as $cart)
                        <div class="flex w-full items-center justify-between text-dark border-b-2 p-1">
                            <img src="{{asset($cart)}}" style="width:40px;"/>
                            <div class="w-full flex flex-col items-start">
                                <h2 class="text-sm text-dark font-semibold">Cart Item Name</h2>
                                <h2 class="text-xs">1 x $25.00</h2>
                            </div>
                            <a href="" class="bg-red-500 justify-center items-center text-white p-2" >x</a>
                        </div>
                    @endforeach
                </div>
                <div class="flex justify-center">
                    <h1 class="text-sm text-gray-500">Total Price:</h1>
                    <h1 class="text-red-500 font-bold ml-1">$250.00</h1>
                </div>
                <div class="flex justify-between mt-3">
                    <a href="" class="w-full py-2 bg-green-700 text-white mr-5 text-center 
                    text-sm rounded-lg text-gray-300 button-hover">Checkout</a>
                    <a href="{{route('cart')}}" class="w-full py-2 bg-blue-700 text-white text-center text-sm 
                    text-gray-300 rounded-lg button-hover">View Cart</a>
                </div>
            </div>
        </div>
        <div>
            <a href="{{route('login')}}" class="flex flex-col items-center">
                <img src="{{asset('img/login.png')}}">
                <p class="text-xs">Login/Register</p>
            </a>
        </div>
    </div>
</div>