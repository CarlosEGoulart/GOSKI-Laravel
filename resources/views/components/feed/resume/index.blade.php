<div class='flex flex-row justify-between items-center gap-3'>
    <div class='flex justify-start items-center'>
        <img src='{{ $user->profile_photo_url ?? asset('images/icons/icon.png') }}' alt='Profile Picture'
            class='rounded-full w-10 h-10 object-cover'>
        <h1 class='text-shadow-2xs p-4 text-2xl text-center'>{{ Auth::user()->username }}</h1>
    </div>
    <button
        class="inline-flex inset-ring-1 inset-ring-white/5 justify-center bg-black hover:bg-black/30 shadow-xl px-3 py-2 rounded-md w-l font-semibold text-white text-sm cursor-pointer">
        Meu Perfil
    </button>
</div>

<div class='flex flex-row justify-between py-4'>
    <div>
        <h1 class='text-shadow-2xs'>Seguidores</h1>
    </div>
    <div>
        <h1 class='text-shadow-2xs'>Seguindo</h1>
    </div>
</div>

<div class='flex flex-row justify-center'>
    <div class='flex flex-col justify-center items-center gap-4'>
        <h1 class='text-shadow-2xs'>Publicações</h1>
        <x-feed.resume.posts-resume />
    </div>
</div>
