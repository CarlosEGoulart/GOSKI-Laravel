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

        <a href="/register" class='font-bold text-2xl'>Crie sua conta.</a>

    </header>

    <div class="flex justify-center">
        <div class="flex flex-col items-start w-full max-w-fit">
            <div class="flex flex-col justify-center items-start gap-3 py-24">
                <div class="pb-8 font-normal text-5xl text-start leading-tight">
                    <h2>Acompanhe as</h2>
                    <p>
                        <span
                            class="bg-clip-text bg-linear-to-r from-[#FF0000] via-[#AF054D] to-[#1B0EDB] text-transparent">
                            expressões
                        </span>

                        <span>do </span>

                        <span
                            class="bg-clip-text bg-linear-to-l from-[#FF0000] via-[#AF054D] to-[#1B0EDB] text-transparent">
                            mundo.
                        </span>

                    </p>
                </div>

                <h3 class="font-bold text-xl text-center">
                    Faça seu login.
                </h3>

                <div class="flex flex-col items-center gap-4 mx-auto mt-6 w-full max-w-sm">
                    <form action="{{ route('authenticate') }}" method="POST" class="w-full">
                        @csrf
                        <div class="flex flex-col items-center gap-4">
                            <div class="relative w-full">
                                <div class="left-0 absolute inset-y-0 flex items-center pl-3 pointer-events-none">
                                    <img class="opacity-30 w-5 h-5" src="{{ asset('images/icons/icon.png') }}"
                                        alt="User Icon">
                                </div>
                                <input type="text" name="username" placeholder="Usuario"
                                    value="{{ old('username', $user['username'] ?? '') }}"
                                    class="flex items-center bg-[#D9D9D9] py-2 border-none rounded-2xl w-full placeholder:text-black/30 text-center">
                            </div>
                            @error('username')
                                <p class="text-red-500 text-xs">{{ $message }}</p>
                            @enderror

                            <div class="relative w-full">
                                <div class="left-0 absolute inset-y-0 flex items-center pl-3 pointer-events-none">
                                    <img class="opacity-30 w-5 h-5" src="{{ asset('images/icons/lock.png') }}"
                                        alt="Lock Icon">
                                </div>
                                <input type="password" name="password" placeholder="Senha"
                                    class="flex items-center bg-[#D9D9D9] py-2 border-none rounded-2xl w-full placeholder:text-black/30 text-center">
                            </div>
                            @error('password')
                                <p class="text-red-500 text-xs">{{ $message }}</p>
                            @enderror

                            <button type="submit"
                                class="bg-[#1000FF] hover:bg-blue-700 shadow-md mt-2 px-8 py-2 rounded-2xl w-3/4 font-bold text-white transition duration-200 cursor-pointer">
                                Entrar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
