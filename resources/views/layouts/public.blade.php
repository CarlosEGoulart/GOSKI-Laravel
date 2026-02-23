<!DOCTYPE html>
<html lang="pt-br">

@include('shared.head')

<body class='bg-[#ECECEC] min-h-screen'>
    <x-header/>

    <div class="flex flex-col mx-auto px-5 py-24 itens-center justify center">
        @yield('content')
    </div>

</body>

</html>
