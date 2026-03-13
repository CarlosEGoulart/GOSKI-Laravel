<div class='flex flex-row justify-between items-center'>
    <div class='flex justify-start items-center'>
        <img src='{{ $user->profile_photo_url ?? asset('images/icons/icon.png') }}' alt='Profile Picture'
            class='rounded-full w-10 h-10 object-cover'>
        <h1 class='text-shadow-2xs p-4 text-2xl text-center'>{{ Auth::user()->username }}</h1> {{-- Futuramente vai ser o nome do usuario que postou --}}
    </div>
    <h1>
        Data {{-- Futuramente vai ser a data de criação do post --}}
    </h1>
</div>

<div class='flex flex-row justify-center py-4'>
    <div class='flex flex-col justify-center items-center gap-4'>
        <div class="flex justify-center items-center">
            <div class='flex justify-center items-center bg-[#B9B9B9] shadow-md rounded-md w-4xl h-128'>Post</div>
            {{-- Futuramente vai ser a imagem do post --}}
        </div>
    </div>
</div>

<div>
    <h1 class='font-bold text-xl'> Descrição do post </h1> {{-- Futuramente vai ser a descrição do post --}}
</div>

<div class='flex flex-row justify-between py-4'>

    <h1> {{ Auth::user()->username }}</h1> {{-- Futuramente vai ser o nome do usuario que postou --}}

    <form action="/" method="POST">
        <button type="submit"
            class="flex items-center focus:bg-gray-100 focus:outline-hidden w-full text-gray-700 focus:text-gray-900 text-sm text-left cursor-pointer">
            <img class='w-5 h-5' src="{{ asset('images/icons/like.png') }}">
            <h1 class='ml-2 text-black'>Curtir</h1>
        </button>
    </form>
</div>
