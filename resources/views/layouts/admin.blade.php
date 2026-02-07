<!DOCTYPE html>
<html lang="pt-br">

@include('shared.head')

<body class='bg-[#ECECEC] min-h-screen flex flex-col'>
    <header class='flex items-center justify-between px-5 py-3'>
        <div class='flex items-center'>
            <img class='w-20 h-20' src="{{ asset('images/logo.svg') }}", alt="GoskiLogo">
            <h1 class='ml-2 text-5xl font-bold'>GOSKI</h1>
        </div>
        
        
        <img src="{{ asset('images/menu.svg') }}", alt="MenuIcon">
    </header>
    
    <div class='flex items-center justify-center py-3'>
        <h1 class='text-3xl font-bold'>@yield('title')</h1>
    </div>


    <x-flash-message />

    <div class="mx-auto flex flex-col itens-center justify center px-5 py-24">
        @yield('content')
    </div>

</body>

</html>
