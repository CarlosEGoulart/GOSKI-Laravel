<header class='flex items-center justify-between px-5 py-3'>
    <div class='flex items-center'>
        <a href='/admin'> <img class='w-20 h-20' src="{{ asset('images/logo.svg') }}" alt="GoskiLogo"></a>
        <h1 class='ml-2 text-5xl'>{{ env('APP_NAME') }}</h1>
    </div>

    <div class='flex items-center justify-center py-3'>
        <h1 class='text-3xl font-bold'>@yield('title')</h1>
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