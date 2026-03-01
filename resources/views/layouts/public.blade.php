<!DOCTYPE html>
<html lang="pt-br">

@include('shared.head')

<body class='bg-[#ECECEC] min-h-screen'>
    <x-header/>

    <div class="flex flex-rpw justify-between mx-auto px-5 py-10 itens-center">
        @yield('content')
    </div>

</body>

</html>
