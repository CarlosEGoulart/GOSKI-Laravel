{{-- Mock de dados para simular os posts do usuário logado --}}
@php
    $userPosts = [
        (object)['id' => 1, 'image_url' => 'https://picsum.photos/seed/userpost1/300/300'],
        (object)['id' => 2, 'image_url' => 'https://picsum.photos/seed/userpost2/300/300'],
        (object)['id' => 3, 'image_url' => 'https://picsum.photos/seed/userpost3/300/300'],
        (object)['id' => 4, 'image_url' => 'https://picsum.photos/seed/userpost4/300/300'],
        (object)['id' => 5, 'image_url' => 'https://picsum.photos/seed/userpost5/300/300'],
        (object)['id' => 6, 'image_url' => 'https://picsum.photos/seed/userpost6/300/300'],
        (object)['id' => 7, 'image_url' => 'https://picsum.photos/seed/userpost7/300/300'],
        (object)['id' => 8, 'image_url' => 'https://picsum.photos/seed/userpost8/300/300'],
        (object)['id' => 9, 'image_url' => 'https://picsum.photos/seed/userpost9/300/300'],
    ];
@endphp

<div class="flex justify-center items-center py-4">
    <div class='gap-2 md:gap-4 grid grid-cols-3 md:grid-cols-3'>

        @foreach ($userPosts as $post)
            <a href="{{-- route('post.show', $post->id) --}}" class="aspect-h-1 aspect-w-1">
                <img src="{{ $post->image_url }}" alt="Post image"
                     class='hover:opacity-80 shadow-xl rounded-md w-full h-full object-cover transition-opacity'>
            </a>
        @endforeach

    </div>
</div>
