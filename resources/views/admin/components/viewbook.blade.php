

<div>
    @for($i=0; $i < 10; $i++)
        <div class="flex my-2 {{$route=='journal' ? 'bg-gray-100 border-1':''}} items-center shadow p-2">
            <img src="{{asset('img/basicprogram.jpg')}}" style="width: 50px;"/>
            <div class="mx-3">
                <h1 class="text-sm font-semibold">Basic Program</h1>
                <p class="text-xs text-gray-500">
                    Eu ullamco tempor irure ea non. Fugiat amet nostrud officia nisi officia. 
                    Et adipisicing exercitation qui dolor Lorem. Aliquip laborum ea nulla 
                </p>
            </div>
            <div class="flex">
                <a href="" class="text-white text-xs font-semibold bg-blue-500 
                rounded mx-1 shadow px-2 py-1 button-hover">View</a>
                <a href="{{ $route=='book'? route('admin.books.edit'):route('admin.journals.edit')}}" class="text-white text-xs font-semibold bg-green-500 
                rounded mx-1 shadow px-2 py-1 button-hover">Edit</a>
                <a href="" class="text-white text-xs font-semibold bg-red-500 
                rounded mx-1 shadow px-2 py-1 button-hover">Delete</a>
            </div>
        </div>
    @endfor
</div>