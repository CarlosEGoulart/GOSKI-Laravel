<!DOCTYPE html>
<html lang="pt-br">

@include('shared.head')

<body class='bg-[#ECECEC] min-h-screen flex flex-col'>
 
  <header class='flex items-center justify-between px-5 py-3'>
    <div class='flex items-center'>
        <img class='w-20 h-20' src="{{ asset('images/logo.svg') }}" alt="GoskiLogo">
        <h1 class='ml-2 text-5xl'>GOSKI</h1>
    </div>

    <a href="/register" class='text-2xl font-bold'>Crie sua conta</a>
    
  </header>

    <div class="flex justify-center">
        <div class="w-full max-w-fit flex flex-col items-start">
            <div class="flex flex-col items-start justify-center gap-3 py-24">
                <div class="text-start text-5xl font-normal leading-tight">
                <h2>Acompanhe as</h2>
                <p>
                    <span class="bg-linear-to-r from-[#FF0000] via-[#AF054D] to-[#1B0EDB] bg-clip-text text-transparent">
                        expressões
                    </span>

                    <span>do </span>

                    <span class="bg-linear-to-l from-[#FF0000] via-[#AF054D] to-[#1B0EDB] bg-clip-text text-transparent">
                        mundo
                    </span>

                    <span>.</span>
                </p>
            </div>

            <h3 class="mt-8 text-xl">
                Faça seu login
            </h3>

    
        </div>
    </div>
</body>