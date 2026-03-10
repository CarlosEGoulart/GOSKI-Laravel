<!DOCTYPE html>
<html lang="pt-br">

@include('shared.head')

<body class='flex flex-col bg-[#ECECEC] min-h-screen'>

    <header class='flex justify-between items-center px-5 py-3'>
        <div class='flex items-center'>
            <a href='/' class='flex items-center'> 
                <img class='w-20 h-20' src="{{ asset('images/logo.svg') }}" alt="GoskiLogo">
                <h1 class='ml-2 text-5xl'>{{ env('APP_NAME') }}</h1>
            </a>
        </div>

        <a href="/" class='font-bold text-2xl'>Faça seu login.</a>
    </header>

    <div class="flex justify-center">
        <div class="flex flex-col items-start w-full max-w-fit">
            <div class="flex flex-col justify-center items-start gap-3 py-24">
                <div class="pb-8 font-normal text-5xl text-start leading-tight">
                    <h2>Crie sua conta e se</h2>
                    <p>
                        <span
                            class="bg-clip-text bg-linear-to-r from-[#FF0000] via-[#AF054D] to-[#1B0EDB] text-transparent">
                            expresse.
                        </span>
                    </p>
                </div>

                <h3 class="font-bold text-xl text-center">
                    Crie sua conta.
                </h3>

                <x-user-form />
            </div>
        </div>
    </div>
</body>

</html>
