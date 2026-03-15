<header class='flex justify-between items-center shadow-2xs px-5 py-3 border-[#D9D9D9] border-b'>
    <div class='flex items-center'>
        <a href='/admin' class='flex items-center'> 
            <img class='w-20 h-20' src="{{ asset('images/logo.svg') }}" alt="GoskiLogo">
            <h1 class='ml-2 text-5xl'>{{ env('APP_NAME') }}</h1>
        </a>
    </div>

    <div class='flex justify-center items-center py-3'>
        <h1 class='font-bold text-3xl'>@yield('title')</h1>
    </div>

    <div class='flex justify-between gap-5'>
        <form action="{{  route('logout') }}" method="POST" class="flex items-center gap-2 cursor-pointer">
            @csrf
            <button class="cursor-pointer">
                <img src="images/icons/exit.png" alt="Sair">
            </button>
        </form>
    </div>
</header> 