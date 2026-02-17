<h1></h1>
<!DOCTYPE html>
<html lang="pt-br">

    @include('shared.head')

    <body class='flex min-h-screen flex-col bg-[#ECECEC]'>

        <header class='flex items-center justify-between px-5 py-3'>
            <div class='flex items-center'>
                <img class='h-20 w-20' src="{{ asset('images/icons/logo.svg') }}" alt="GoskiLogo">
                <h1 class='ml-2 text-5xl'>GOSKI</h1>
            </div>


        </header>

        <div class="flex justify-center">
            <div class="flex w-full max-w-fit flex-col items-start">
                <div class="flex flex-col items-start justify-center gap-3 py-24">
                    <div class="pb-8 text-start text-5xl font-normal leading-tight">
                        <h2>Crie sua conta e se</h2>
                        <p>
                            <span
                                class="bg-linear-to-r from-[#FF0000] via-[#AF054D] to-[#1B0EDB] bg-clip-text text-transparent">
                                expresse.
                            </span>
                        </p>
                    </div>

                    <h3 class="text-center text-xl font-bold">
                        Crie sua conta.
                    </h3>

                    <div class="mx-auto mt-6 flex w-full max-w-sm flex-col items-center gap-4">
                        <form action="/register" method="POST" class="w-full">
                            @csrf
                            <div class="flex flex-col items-center gap-4">
                                <div class="relative w-full">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                        <img class="h-5 w-5 opacity-30" src="{{ asset('images/icons/icon.png') }}"
                                            alt="User Icon">
                                    </div>
                                    <input type="text" name="name" placeholder="Usuario"
                                        class="flex w-full items-center rounded-2xl border-none bg-[#D9D9D9] py-2 text-center placeholder:text-black/30">
                                        @error('name')
                                            <p class="text-red-500 text-xs mt-4 mb-4">{{ $message }}</p>
                                        @enderror
                                </div>

                                <div class="relative w-full">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                        <img class="h-5 w-5 opacity-30" src="{{ asset('images/icons/email.png') }}"
                                            alt="Email Icon">
                                    </div>
                                    <input type="email" name="email" placeholder="Email"
                                        class="flex w-full items-center rounded-2xl border-none bg-[#D9D9D9] py-2 text-center placeholder:text-black/30">
                                        @error('email')
                                            <p class="text-red-500 text-xs mt-4 mb-4">{{ $message }}</p>
                                        @enderror
                                </div>

                                <div class="relative w-full">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                        <img class="h-5 w-5 opacity-30" src="{{ asset('images/icons/lock.png') }}"
                                            alt="Lock Icon">
                                    </div>
                                    <input type="password" name="password" placeholder="Senha"
                                        class="flex w-full items-center rounded-2xl border-none bg-[#D9D9D9] py-2 text-center placeholder:text-black/30">
                                        @error('password')
                                            <p class="text-red-500 text-xs mt-4 mb-4">{{ $message }}</p>
                                        @enderror
                                </div>

                                <div class="relative w-full">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                        <img class="h-5 w-5 opacity-30" src="{{ asset('images/icons/lock.png') }}"
                                            alt="Lock Icon">
                                    </div>
                                    <input type="password" name="password_confirmation" placeholder="Confirme sua senha"
                                        class="flex w-full items-center rounded-2xl border-none bg-[#D9D9D9] py-2 text-center placeholder:text-black/30">
                                        @error('password_confirmation')
                                            <p class="text-red-500 text-xs mt-4 mb-4">{{ $message }}</p>
                                        @enderror
                                </div>

                                <button type="submit"
                                    class="mt-2 w-3/4 cursor-pointer rounded-2xl bg-[#1000FF] px-8 py-2 font-bold text-white shadow-md transition duration-200 hover:bg-blue-700">
                                    Cadastrar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </body>
