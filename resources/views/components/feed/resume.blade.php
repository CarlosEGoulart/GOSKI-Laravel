<div class='flex flex-col w-s h-x'>
    <div class='flex flex-row justify-between items-center gap-3 py-4'>
        <img src='{{ $user->profile_photo_url ?? asset('images/icons/icon.png') }}' alt='Profile Picture' class='rounded-full w-10 h-10 object-cover'>
        <h1 class='p-4 text-2xl text-center'>{{ $user->username }}</h1>
        <button
            class="inline-flex inset-ring-1 inset-ring-white/5 justify-center bg-black hover:bg-black/30 px-3 py-2 rounded-md w-l font-semibold text-white text-sm cursor-pointer"
            >Meu perfil</button>
    </div>

    <div class='flex flex-row justify-between'>
        <div>
            <h1>Seguidores:</h1>
        </div>
        <div>
            <h1>Seguindo: </h1>
        </div>
    </div>

</div>
