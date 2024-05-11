
<div>
    <form action="{{route('admin.books.add')}}" class="my-2" method="post" enctype="multipart/form-data" >
        @csrf
        @if($errors->any())
            <h1 class="p-2 bg-red-500 text-white text-xs rounded">Please fill all out all fields</h1>
            @endif
        @if(session('status'))
            <h1 class="p-2 bg-green-500 text-white text-xs rounded">{{session('status')}}</h1>
        @endif
        <div class="flex my-3">
            <input name="title" type="text" placeholder="Title of book" value="{{old('title')}}"
                class="px-3 py-2 rounded border-1 text-dark shadow-md w-8/12 mr-3"/>
            <input name="author" type="text" placeholder="Name of Author" value="{{old('author')}}"
                class="px-3 py-2 rounded border-1 text-dark shadow-md w-4/12"/>
        </div>
        <div class="flex my-3">
            <input name="price" type="number" placeholder="Price of Book" value="{{old('price')}}"
                class="px-3 py-2 rounded border-1 text-dark shadow-md w-4/12 mr-3"/>
            <input name="language" type="text" placeholder="Language" value="{{old('language')}}"
                class="px-3 py-2 mr-4 rounded border-1 text-dark shadow-md w-4/12"/>
            <input name="quantity" type="number" placeholder="Quantity" value="{{old('quantity')}}"
                class="px-3 py-2 rounded border-1 text-dark shadow-md w-4/12"/>
        </div>
        <div>
            <textarea rows="5" placeholder="Book Description" name="description" 
            class="w-full px-3 py-2 rounded border-1 shadow">{{old('description')}}</textarea>
        </div>
        <div class="my-4 flex items-center">
            <img src="{{asset('img/blankbook.png')}}" style="width: 120px;"/>
            <div class="flex flex-col">
                <label class="text-xs text-gray-500">Select Book Cover</label>
                <input name="cover" type="file" value="{{old('cover')}}" />
                <label class="text-xs text-gray-500 mt-4">Select Book File</label>
                <input name="file" type="file" value="{{old('file')}}" />
            </div>
        </div>
        <div>
            <button type="submit" class="px-4 rounded py-2 text-sm text-white bg-green-600 button-hover
                mr-5 shadow-md">Save</button>
            <a href="{{route('admin.books')}}" class="px-4 rounded py-2 text-sm text-white bg-red-600 button-hover
                shadow-md">Cancel</a>
        </div>
    </form>
</div>