<!DOCTYPE html>
<html lang="pt-br">

@include('shared.head')

<body class='flex flex-col bg-[#ECECEC] min-h-screen'>
    <x-admin.header />


    <x-flash-message />

    <div class="flex flex-col mx-auto px-5 py-24 itens-center justify center">
        @yield('content')
    </div>

</body>

</html>
