
<div class="flex px-10 py-4 shadow text-white bg-dark w-full footer" >
    <div class="flex footer-content">
        <div class="px-10 w-6/12 footer-about">
            <h1>About Info</h1>
            <p class="text-sm text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod 
                tempor inci ut labore et dolore.</p>
            <div class="text-sm mt-4 text-gray-300">
                <h1><span class="font-bold text-white">Addresss:</span> 123 Pall Mall, London England</h1>
                <h1><span class="font-bold text-white">Email:</span> hello@example.com</h1>
                <h1><span class="font-bold text-white">Phone:</span> (012) 345 6789</h1> 
            </div>
        </div>
        <div class="px-10 w-6/12 flex justify-between ml-5 footer-links">
            <div class="flex flex-col">
                <h1>Info</h1>
                <a href="{{route('contactus')}}">Contact Us</a>
                <a href="{{route('aboutus')}}">About Us</a>
                <a href="{{route('aboutus')}}">Terms and Conditions</a>
                <a href="{{route('books')}}">Best Sellers</a>
            </div>
            <div class="flex flex-col">
                <h1>Quick Links</h1>
                <a href="{{route('profile')}}">My Account</a>
                <a href="{{route('cart')}}">Shopping Cart</a>
                <a href="{{route('aboutus')}}">Help</a>
            </div>
            <div class="flex flex-col">
                <h1>Follow us</h1>
                <a href=""><img src="{{asset('img/fb.png')}}" />Facebook</a>
                <a href=""><img src="{{asset('img/twt.png')}}" />Twitter</a>
                <a href=""><img src="{{asset('img/ist.png')}}" />Instagram</a>
                <a href=""><img src="{{asset('img/fb.png')}}" />Youtube</a>
            </div>
        </div>
    </div>
</div>