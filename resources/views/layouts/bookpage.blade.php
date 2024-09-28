

<div class="flex flex-col w-full">
    <div class="flex flex-col items-center py-4">
        <h1 class="text-2xl font-bold">BEST SELLERS</h1>
        <h1 class="text-gray-500 mb-5">See books that are fast selling </h1>
        <div class="flex bookpage md:px-0 sm:px-4">
            @foreach($bestbooks as $book)
                <x-singlebook :book="$book"/>
            @endforeach
        </div>
        <a href="{{route('books')}}" class="mt-4 bg-red-500 px-5 py-2 text-white rounded button-hover">View all</a>
    </div>
    <div class="px-20 py-4 section-big">
        <h1 class="text-2xl font-bold mb-2">READ OUR JOURNAL</h1>
        <h1 class="text-gray-500 mb-3">Inspiring and Awesome</h1>
        <div class="flex flex-wrap md:px-0 sm:px-4">
            @foreach($newjournals as $journal)
                <x-singlebigbook :journal="$journal"/>
            @endforeach
        </div>
        <div class="flex mt-2">
            <a href="{{route('journals')}}" class="bg-red-500 px-5 py-2 text-white rounded button-hover">View all journal</a>
        </div>
    </div>
    <div class="flex flex-col py-5 items-center" 
            style="background: linear-gradient(rgba(19, 0, 0, 0.65), rgba(20, 2, 37, 0.65)),
                url('../img/bg2.jpg');">
        <h1 class="text-2xl text-white font-bold">NEW BOOKS</h1>
        <h1 class="text-gray-300 mb-5">See recently uploaded books</h1>
        <div class="flex bookpage md:px-0 sm:px-4">
            @foreach($newbooks as $book)
                <x-singlebook :book="$book"/>
            @endforeach
        </div>
    </div>
    <div class="flex flex-col items-center py-4">
        <h1 class="text-2xl font-bold">TRENDING BOOKS</h1>
        <h1 class="text-gray-500 mb-5">Books everyone cant stop talking about </h1>
        <div class="flex bookpage">
            @foreach($trendingbooks as $book)
                <x-singlebook :book="$book"/>
            @endforeach
        </div>
        <a href="{{route('books')}}" class="mt-4 bg-red-500 px-5 py-2 text-white rounded button-hover">View all</a>
    </div>
</div>