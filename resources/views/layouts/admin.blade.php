<!DOCTYPE html>
<html lang="pt-br">

    @include('shared.head')

    <body class='flex min-h-screen flex-col bg-[#ECECEC]'>
        <header class='flex items-center justify-between px-5 py-3'>
            <div class='flex items-center'>
                <img class='h-20 w-20' src="{{ asset('images/logo.svg') }}" alt="GoskiLogo">
                <h1 class='ml-2 text-5xl'>GOSKI</h1>
            </div>
        </header>

        <div class='flex items-center justify-center py-3'>
            <h1 class='text-3xl font-bold'>@yield('title')</h1>
        </div>


        <x-flash-message />

        <div class="itens-center justify center mx-auto flex flex-col px-5 py-24">
            @yield('content')
        </div>

    </body>

</html>
