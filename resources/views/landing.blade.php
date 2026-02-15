<!DOCTYPE html>
<html lang="pt-br">

@include('shared.head')

<body class='bg-[#ECECEC] min-h-screen flex flex-col'>
 
  <header class='flex items-center justify-between px-5 py-3'>
    <div class='flex items-center'>
        <img class='w-20 h-20' src="{{ asset('images/logo.svg') }}" alt="GoskiLogo">
        <h1 class='ml-2 text-5xl'>GOSKI</h1>
    </div>

    <a href="/register" class='text-2xl font-bold'>Crie sua conta.</a>
    
  </header>

    <div class="flex justify-center">
        <div class="w-full max-w-fit flex flex-col items-start">
            <div class="flex flex-col items-start justify-center gap-3 py-24">
                <div class="text-start text-5xl font-normal leading-tight pb-8">
                <h2>Acompanhe as</h2>
                <p>
                    <span class="bg-linear-to-r from-[#FF0000] via-[#AF054D] to-[#1B0EDB] bg-clip-text text-transparent">
                        expressões
                    </span>

                    <span>do </span>

                    <span class="bg-linear-to-l from-[#FF0000] via-[#AF054D] to-[#1B0EDB] bg-clip-text text-transparent">
                        mundo.
                    </span>

                </p>
            </div>

            <h3 class="text-xl font-bold text-center">
    Faça seu login.
</h3>

<div class="flex flex-col items-center gap-4 mt-6 w-full max-w-sm mx-auto">
    <form action="/login" method="POST" class="w-full">
        @csrf
        <div class="flex flex-col items-center gap-4">
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <img class="w-5 h-5 opacity-30" src="{{ asset('images/icon.png') }}" alt="User Icon">
                </div>
                <input type="text" name="name" placeholder="Usuario" 
                    class="w-full flex items-center py-2 rounded-2xl bg-[#D9D9D9] border-none text-center placeholder:text-black/30">
            </div>

            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <img class="w-5 h-5 opacity-30" src="{{ asset('images/lock.png') }}" alt="Lock Icon">
                </div>
                <input type="password" name="password" placeholder="Senha" 
                    class="w-full flex items-center py-2 rounded-2xl bg-[#D9D9D9] border-none text-center placeholder:text-black/30">
            </div>

            <button type="submit" 
                class="w-3/4 mt-2 bg-[#1000FF] text-white font-bold py-2 px-8 rounded-2xl hover:bg-blue-700 transition duration-200 shadow-md cursor-pointer">
                Entrar
            </button>
        </div>
    </form>
</div>
        </div>
    </div>
</body>