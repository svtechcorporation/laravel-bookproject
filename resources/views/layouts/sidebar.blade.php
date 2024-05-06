<div class="flex shadow w-3/12 p-3">
    <form class="w-full">
        <div>
            <h1 class="font-bold border-b-2 border-gray-100 pb-3 mb-3">Price</h1>
            <div class="flex items-center text-sm font-semibold">
                From:<span class="text-red-500 font-bold text-xl ml-1">$</span>
                <input placeholder="0" type="number" class="p-1 mx-1 shadow-md rounded border-1" 
                style="width:50px"/> 
                To <span class="text-red-500 font-bold text-xl ml-1">$</span>
                <input placeholder="0" type="number" class="p-1 shadow-md rounded border-1" 
                style="width:50px"/>
            </div>
        </div>    
        <div class="mt-5">
            <h1 class="font-bold border-b-2 border-gray-100 pb-3 mb-3">Availability</h1>
            <div class="flex items-center">
                <input type="checkbox">
                <label class="text-gray-600 text-sm ml-3">In Stock</label>
            </div>
            <div class="flex items-center mt-2">
                <input type="checkbox">
                <label class="text-gray-600 text-sm ml-3">Out of Stock</label>
            </div>
        </div> 
        <div class="mt-5">
            <h1 class="font-bold border-b-2 border-gray-100 pb-3 mb-3">Authors</h1>
            @php 
                $authors = ['Dr. Emosen', 'Prof. Dan Ferguson', 'Mr. Paul Samuel'];
            @endphp

            @foreach($authors as $author)
                <div class="flex items-center mb-2">
                    <input type="checkbox">
                    <label class="text-gray-600 text-sm ml-3">{{$author}}</label>
                </div>
            @endforeach
        </div> 
        <div class="mt-5">
            <h1 class="font-bold border-b-2 border-gray-100 pb-3 mb-3">Date of Publication</h1>
            @php 
                $timeframes = ['Less than 1 Month', '1 - 3 Months', 'Within 6 Months', 'All publications'];
            @endphp

            @foreach($timeframes as $timeframe)
                <div class="flex items-center mb-2">
                    <input type="checkbox">
                    <label class="text-gray-600 text-sm ml-3">{{$timeframe}}</label>
                </div>
            @endforeach
        </div> 
        <button type="submit" class="bg-dark text-white w-full py-2 text-center 
        mt-4 button-hover rounded shadow-md">Filter</button>
    </form>
</div>