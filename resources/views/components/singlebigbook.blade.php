
@props(['journal' => $journal])

<div class="bg-white mr-4 p-3 rounded shadow singlebook">
    <div>
        <img src="{{asset('covers/'.$journal->cover)}}" style="width: 350px; height:200px;object-fit:cover;"/>
    </div>
    <div class="items-center w-full">
        <p class="text-xs text-gray-700">Author of Journal</p>
        <p class="font-bold">Name of Journal</p>
        <p class="text-xs text-gray-700" style="max-height: 50px; 
            text-overflow: ellipsis; word-wrap: break-word; overflow: hidden">
            Occaecat aliqua in laborum tempor adipisicing occaecat aliqua. 
            Do aliquip est occaecat aliquip sunt. Nisi commodo adipisicing 
            veniam laboris consectetur commodo elit proident eu.</p>
    </div>
</div>