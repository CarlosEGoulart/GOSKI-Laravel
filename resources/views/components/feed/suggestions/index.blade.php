<div class='flex flex-col justify-center items-between gap-4 py-4'>
    <div class='flex flex-row justify-between items-center gap-4'>   {{-- Futuramente terá um foreach --}}
        <div class='flex justify-start items-center'>
            <img src='{{ $user->profile_photo_url ?? asset('images/icons/icon.png') }}' alt='Profile Picture' {{-- Futuramente vai ser o nome de usuarios recomendados --}} 
            class='rounded-full w-10 h-10 object-cover'>

            <h1 class='text-shadow-2xs p-4 text-2xl text-center'>{{ Auth::user()->username }}</h1>
        </div>

        <div>
            <button
                class="inline-flex inset-ring-1 inset-ring-white/5 justify-center bg-black hover:bg-black/30 shadow-xl px-3 py-2 rounded-md w-l font-semibold text-white text-sm cursor-pointer">
                Seguir
            </button> {{-- Futuramente vai ser botão de seguir --}} 
        </div>
    </div>
</div>
