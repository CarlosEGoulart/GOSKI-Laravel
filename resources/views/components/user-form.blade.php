<div class="flex flex-col items-center gap-4 mx-auto mt-6 w-full max-w-sm">
    <form action="/register" method="POST" class="w-full">
        @csrf
        <div class="flex flex-col items-center gap-4">
            <div class="relative w-full">
                <div class="left-0 absolute inset-y-0 flex items-center pl-3 pointer-events-none">
                    <img class="opacity-30 w-5 h-5" src="{{ asset('images/icons/icon.png') }}" alt="User Icon">
                </div>
                <input type="text" name="username" placeholder="Usuario"
                    value="{{ old('username', $user['username'] ?? '') }}"
                    class="flex items-center bg-[#D9D9D9] py-2 border-none rounded-lg w-full placeholder:text-black/30 text-center">
                </div>
                @error('username')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror

            <div class="relative w-full">
                <div class="left-0 absolute inset-y-0 flex items-center pl-3 pointer-events-none">
                    <img class="opacity-30 w-5 h-5" src="{{ asset('images/icons/email.png') }}" alt="Email Icon">
                </div>
                <input type="email" name="email" placeholder="Email"
                    value="{{ old('email', $user['email'] ?? '') }}"
                    class="flex items-center bg-[#D9D9D9] py-2 border-none rounded-lg w-full placeholder:text-black/30 text-center">
                </div>
                @error('email')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror

            <div class="relative w-full">
                <div class="left-0 absolute inset-y-0 flex items-center pl-3 pointer-events-none">
                    <img class="opacity-30 w-5 h-5" src="{{ asset('images/icons/lock.png') }}" alt="Lock Icon">
                </div>
                <input type="password" name="password" placeholder="Senha" value="{{ old('password') }}"
                    class="flex items-center bg-[#D9D9D9] py-2 border-none rounded-lg w-full placeholder:text-black/30 text-center">
                </div>
                @error('password')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror

            <div class="relative w-full">
                <div class="left-0 absolute inset-y-0 flex items-center pl-3 pointer-events-none">
                    <img class="opacity-30 w-5 h-5" src="{{ asset('images/icons/lock.png') }}" alt="Lock Icon">
                </div>
                <input type="password" name="password_confirmation" placeholder="Confirme sua senha"
                    value="{{ old('password_confirmation') }}"
                    class="flex items-center bg-[#D9D9D9] py-2 border-none rounded-lg w-full placeholder:text-black/30 text-center">
                </div>
                @error('password_confirmation')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror

            <button type="submit"
                class="bg-[#1000FF] hover:bg-blue-700 shadow-md mt-2 px-8 py-2 rounded-lg w-3/4 font-bold text-white transition duration-200 cursor-pointer">
                Cadastrar
            </button>
        </div>
    </form>
</div>
