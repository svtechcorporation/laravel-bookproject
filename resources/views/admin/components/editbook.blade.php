
<div>
    <form class="my-2">
        <div class="flex my-3">
            <input type="text" placeholder="Title of book" value="Basic Program"
                class="px-3 py-2 rounded border-1 text-dark shadow-md w-8/12 mr-3"/>
            <input type="text" placeholder="Name of Author" value="Dr. Daniel Ferguson"
                class="px-3 py-2 rounded border-1 text-dark shadow-md w-4/12"/>
        </div>
        <div class="flex my-3">
            <input type="number" placeholder="Price of Book" value="3000"
                class="px-3 py-2 rounded border-1 text-dark shadow-md w-4/12 mr-3"/>
            <input type="text" placeholder="Language" value="English"
                class="px-3 py-2 mr-4 rounded border-1 text-dark shadow-md w-4/12"/>
            <input type="number" placeholder="Quantity" value="5"
                class="px-3 py-2 rounded border-1 text-dark shadow-md w-4/12"/>
        </div>
        <div>
            <textarea rows="5" placeholder="Book Description" name="description" 
            class="w-full px-3 py-2 rounded border-1 shadow">This is the description of the book</textarea>
        </div>
        <div class="my-4 flex items-center">
            <img src="{{asset('img/basicprogram.jpg')}}" style="width: 100px;"/>
            <div class="flex flex-col ml-4">
                <label class="text-xs text-gray-500">Select Book Cover</label>
                <input type="file" />
                <label class="text-xs text-gray-500 mt-4">Select Book File</label>
                <input type="file" />
            </div>
        </div>
        <div>
            <button class="px-4 rounded py-2 text-sm text-white bg-green-600 button-hover
                mr-5 shadow-md">Update</button>
            <a href="{{route('admin.books')}}" class="px-4 rounded py-2 text-sm text-white bg-red-600 button-hover
                shadow-md">Cancel</a>
        </div>
    </form>
</div>