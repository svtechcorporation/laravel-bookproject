<div class="flex flex-col items-end">
    <div class="flex justify-between items-center p-2 shadow w-full">
        <div>
            <div class="flex items-center">
                <img src="{{asset('img/user 1.jpg')}}" class="rounded-full overflow-hidden" style="width: 50px; height:50px" />
                <div class="ml-3">
                    <p class="text-sm">Welcome </p>
                    <h1 class="text-xl text-md font-bold -mt-2">Admin</h1>
                </div>
            </div>
        </div>
        <div class="flex items-center">
            <h1 class="text-lg font-bold uppercase mr-4">{{$operation}}</h1>
            <div>
                <img src="{{asset('img/openmenu.png')}}" class="cursor-pointer" style="width: 40px; height:40px" id="close_menu" />
                <img src="{{asset('img/closemenu.png')}}" class="cursor-pointer" style="width: 40px; height:40px; display:none" id="open_menu" />
            </div>
        </div>
    </div>
    <div class="bg-white rounded-lg overflow-hidden shadow align-right flex mr-2 w-6/12 flex-col position-absolute top-20" 
        id="nav_draw" style="display: none;">
        <a href="{{route('admins')}}" 
        class="flex items-center justify-between font-semibold p-2 py-3 {{ $operation == 'dashboard' ? 'nav_active' : '' }}">
            Dashboard
            <img src="{{asset('img/home.png')}}" 
            class="ml-2 {{ $operation == 'dashboard' ? 'change_image' : ''}}" 
            style="width: 20px; "/>
        </a>
        <a href="{{route('admins.books')}}" 
        class="flex items-center justify-between font-semibold p-2 py-3 {{ $operation == 'view' ? 'nav_active' : '' }}">
            Book
            <img src="{{asset('img/book.png')}}" 
            class="ml-2 {{ $operation == 'view' ? 'change_image' : ''}}" 
            style="width: 20px; "/>
        </a>
        <a href="" 
        class="flex items-center justify-between font-semibold p-2 py-3 {{ $operation == 'journal' ? 'nav_active' : '' }}">
            Journal
            <img src="{{asset('img/journal.png')}}" 
            class="ml-2 {{ $operation == 'journal' ? 'change_image' : ''}}" 
            style="width: 20px; "/>
        </a>
        <a href="" 
        class="flex items-center justify-between font-semibold p-2 py-3 {{ $operation == 'view_website' ? 'nav_active' : '' }}">
            Notification
            <img src="{{asset('img/notification.png')}}" 
            class="ml-2 {{ $operation == 'view_website' ? 'change_image' : ''}}" 
            style="width: 20px; "/>
        </a>
    </div>
</div>


<style>
    .nav_active{
        background: red;
        color: white;
    }
    .change_image {
        filter: invert(1);
    }
</style>

<script>
    var open_menu = document.getElementById("open_menu");
    var close_menu = document.getElementById("close_menu");
    var nav_draw = document.getElementById("nav_draw");

    open_menu.onclick = function() {
        openMenu(true);
    }

    close_menu.onclick = function() {
        openMenu(false);
    }



    function openMenu(open) {
        if (open) {
            open_menu.style.display = "none";
            close_menu.style.display = "flex";
            nav_draw.style.display="none";
        } else {
            open_menu.style.display = "flex";
            close_menu.style.display = "none";
            nav_draw.style.display="flex";
        }
    }
</script>