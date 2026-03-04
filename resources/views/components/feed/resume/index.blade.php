<div class='flex flex-row items-center justify-between gap-3 py-4'>
    <div class='flex items-center justify-start'>
        <img src='{{ $user->profile_photo_url ?? asset('images/icons/icon.png') }}' alt='Profile Picture'
            class='h-10 w-10 rounded-full object-cover'>
        <h1 class='p-4 text-center text-2xl'>{{ Auth::user()->username }}</h1>
    </div>
    <button
        class="inset-ring-1 inset-ring-white/5 w-l inline-flex cursor-pointer justify-center rounded-md bg-black px-3 py-2 text-sm font-semibold text-white hover:bg-black/30">Meu
        perfil</button>
</div>

<div class='flex flex-row justify-between py-4'>
    <div>
        <h1>Seguidores</h1>
    </div>
    <div>
        <h1>Seguindo</h1>
    </div>
</div>

<div class='flex flex-row justify-center py-4'>
    <div>
        <h1>Publicações</h1>
        <x-feed.resume.posts-resume />
    </div>
</div>
