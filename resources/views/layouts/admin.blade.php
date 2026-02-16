<!DOCTYPE html>
<html lang="pt-br">

    @include('shared.head')

    <body class='flex min-h-screen flex-col bg-[#ECECEC]'>
        <x-admin.header />

        
        <x-flash-message />

        <div class="itens-center justify center mx-auto flex flex-col px-5 py-24">
            @yield('content')
        </div>

    </body>

</html>
