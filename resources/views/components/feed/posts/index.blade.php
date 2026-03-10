<div class='flex flex-col justify-start items-start gap-4 py-4'>
    <div class='flex flex-row justify-between items-center'>
        <div class='flex justify-start items-center'>
            <img src='{{ $user->profile_photo_url ?? asset('images/icons/icon.png') }}' alt='Profile Picture'
                class='rounded-full w-10 h-10 object-cover'>
            <h1 class='text-shadow-2xs p-4 text-2xl text-center'>{{ Auth::User()->username }}</h1>
        </div>

    </div>
</div>