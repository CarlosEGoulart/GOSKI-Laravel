<header class="top-0 z-50 sticky backdrop-blur-lg border-[#D9D9D9] border-b">
    <div class="mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="flex justify-between items-center h-24"> 
            <div class='flex items-center'>
                <a href='/admin' class='flex items-center'> 
                    <img class='w-auto h-16' src="{{ asset('images/logo.svg') }}" alt="GoskiLogo">
                    <h1 class='ml-3 font-bold text-5xl'>{{ env('APP_NAME') }}</h1>
                </a>
            </div>
            
            <div class="flex items-center gap-5"> 
                <form action="" method="POST" class="flex items-center">
                    <button type="submit" class="hover:opacity-20 transition-opacity cursor-pointer">
                        <img class="w-8 h-8" src="{{ asset('images/icons/add.png') }}" alt="NovoPost">
                    </button>
                </form>

                <form action="" method="POST" class="flex items-center">
                    <button type="submit" class="hover:opacity-20 transition-opacity cursor-pointer">
                        <img class="w-8 h-8" src="{{ asset('images/icons/bell.png') }}" alt="Notificacoes">
                    </button>
                </form>

                <x-header.menu />
            </div>
        </div>
    </div>
</header>