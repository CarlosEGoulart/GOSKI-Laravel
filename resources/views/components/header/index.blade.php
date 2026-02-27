<header class='flex justify-between items-center shadow-2xs px-5 py-3 border-[#D9D9D9] border-b'>
    
    <div class='flex items-center'>
        <a href='/' class='flex items-center'> 
            <img class='w-20 h-20' src="{{ asset('images/logo.svg') }}" alt="GoskiLogo">
            <h1 class='ml-2 text-5xl'>{{ env('APP_NAME') }}</h1>
        </a>
    </div>

    <div class='flex justify-between gap-5'>
        <a href='/create'> <img class='w-10 h-10' src="{{ asset('images/icons/add.png') }} alt="Adicionar"></a>

        <a href='/notifications'> <img class='w-10 h-10' src="{{ asset('images/icons/bell.png') }} alt="Notificações"></a>

        <x-header.menu/>
    </div>

</header>