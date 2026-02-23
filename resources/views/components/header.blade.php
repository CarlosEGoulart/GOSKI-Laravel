<header class='flex justify-between items-center px-5 py-3'>
    
    <div class='flex items-center'>
        <a href='/' class='flex items-center'> 
            <img class='w-20 h-20' src="{{ asset('images/logo.svg') }}" alt="GoskiLogo">
            <h1 class='ml-2 text-5xl'>{{ env('APP_NAME') }}</h1>
        </a>
    </div>

    <div class='flex justify-between gap-5'>
        <a href='#'> <img class='w-10 h-10' src="{{ asset('images/icons/add.png') }} alt="Adicionar"></a>

        <a href='#'> <img class='w-10 h-10' src="{{ asset('images/icons/bell.png') }} alt="Notificações"></a>

        <x-menu/>
    </div>

</header>