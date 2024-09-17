<div class="">
    <div class="flex flex-col bg-white shadow text-dark p-1">
        @php
        $carts = ['img/basicprogram.jpg', 'img/basicprogram.jpg', 'img/basicprogram.jpg',
        'img/basicprogram.jpg','img/basicprogram.jpg','img/basicprogram.jpg',
        'img/basicprogram.jpg','img/basicprogram.jpg',];
        @endphp
        <div style="max-height: 350px; overflow-x:hidden;overflow-y:scroll;">
            @foreach($carts as $cart)
            <div class="flex w-full items-center justify-between text-dark border-b-2 p-1">
                <img src="{{asset($cart)}}" style="width:40px;" />
                <div class="w-full flex flex-col items-start">
                    <h2 class="text-sm text-dark font-semibold">Cart Item Name</h2>
                    <h2 class="text-xs">1 x $25.00</h2>
                </div>
                <a href="" class="bg-red-500 justify-center items-center text-white p-2">x</a>
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