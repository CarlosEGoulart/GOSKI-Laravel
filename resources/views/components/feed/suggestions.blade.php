@props(['user'])

@php
    $suggestedUsers = [
        (object)[
            'id' => 99,
            'username' => 'Zezinho_Gamer',
            'profile_photo_url' => 'https://i.pravatar.cc/150?u=zezinho'
        ],
        (object)[
            'id' => 98,
            'username' => 'Carla_Fotografia',
            'profile_photo_url' => 'https://i.pravatar.cc/150?u=carla'
        ],
        (object)[
            'id' => 97,
            'username' => 'Pedro_Cozinheiro',
            'profile_photo_url' => 'https://i.pravatar.cc/150?u=pedro'
        ],
    ];
@endphp

<div class='flex flex-col justify-center items-between gap-4 py-4'>
    <h2 class="font-semibold text-gray-500">Sugestões.</h2>

    @foreach ($suggestedUsers as $suggestedUser)
        <div class='flex flex-row justify-between items-center gap-4'>
            <div class='flex justify-start items-center'>
                <img src='{{ $suggestedUser->profile_photo_url ?? asset('images/icons/icon.png') }}' alt='Profile Picture'
                    class='rounded-full w-10 h-10 object-cover'>

                <h1 class='text-shadow-2xs p-4 text-lg text-center'>{{ $suggestedUser->username }}</h1>
            </div>

            <div>
                <form action="" method="POST">
                    @csrf
                    <button
                        class="inline-flex inset-ring-1 inset-ring-white/5 justify-center bg-black hover:bg-black/30 shadow-xl px-3 py-2 rounded-md w-full font-semibold text-white text-sm cursor-pointer">
                        Seguir
                    </button>
                </form>
            </div>
        </div>
    @endforeach

</div>
