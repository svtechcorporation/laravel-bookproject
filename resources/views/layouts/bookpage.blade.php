

<div class="flex flex-col w-full">
    <div class="flex flex-col items-center py-4">
        <h1 class="text-2xl font-bold">BEST SELLERS</h1>
        <h1 class="text-gray-500 mb-5">See books that are fast selling </h1>
        <div class="flex">
            @foreach($bestbooks as $book)
                <x-singlebook :book="$book"/>
            @endforeach
        </div>
        <a href="" class="mt-4 bg-red-500 px-5 py-2 text-white rounded button-hover">View all</a>
    </div>
    <div class="px-20 py-4">
        <h1 class="text-2xl font-bold mb-4">READ OUR JOURNAL</h1>
        <div class="flex">
            @foreach($newjournals as $journal)
                <x-singlebigbook :journal="$journal"/>
            @endforeach
        </div>
        <div class="flex mt-3">
            <a href="" class="bg-red-500 px-5 py-2 text-white rounded button-hover">View all journal</a>
        </div>
    </div>
    <div class="bg-gray-800 flex flex-col py-5 items-center">
        <h1 class="text-2xl text-white font-bold">NEW BOOKS</h1>
        <h1 class="text-gray-300 mb-5">See recently uploaded books</h1>
        <div class="flex">
            @foreach($newbooks as $book)
                <x-singlebook :book="$book"/>
            @endforeach
        </div>
    </div>
    <div class="flex flex-col items-center py-4">
        <h1 class="text-2xl font-bold">TRENDING BOOKS</h1>
        <h1 class="text-gray-500 mb-5">Books everyone cant stop talking about </h1>
        <div class="flex">
            @foreach($trendingbooks as $book)
                <x-singlebook :book="$book"/>
            @endforeach
        </div>
        <a href="" class="mt-4 bg-red-500 px-5 py-2 text-white rounded button-hover">View all</a>
    </div>
</div>