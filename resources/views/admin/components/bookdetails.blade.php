
<div>
    @if($isview ?? '')
        <div class="flex items-center justify-center w-full h-full" 
            style="position:fixed;top:0;left:0;z-index:10;background:rgba(0, 0, 0, 0.8)" >
            <div class="bg-white rounded-xl shadow p-3 w-8/12 h-5/6 opacity-100">
                <div class="flex w-full justify-end">
                    <a href="{{url()->previous()}}">
                        <img src="{{asset('img/closec.png')}}" style="width:30px;height:30px;"/>
                    </a>
                </div>
                <h1>View Book page</h1>
            </div>
        </div>
    @endif
</div>