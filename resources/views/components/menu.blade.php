<script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
<el-dropdown class="inline-block">
    <button class="inline-flex inset-ring-1 inset-ring-gray-300 cursor-poiter">
        <img class='w-10 h-10' src="{{ asset('images/icons/menu.png') }}">
    </button>

    <el-menu anchor="bottom end" popover
        class="bg-[#D9D9D9] data-closed:opacity-0 shadow-lg rounded-md outline-1 outline-black/5 w-56 data-closed:scale-95 origin-top-right transition transition-discrete data-enter:duration-100 data-leave:duration-75 data-leave:ease-in data-enter:ease-out [--anchor-gap:--spacing(2)] data-closed:transform">
        <div class='py-1'>
            <a href="#"
                class="flex items-center focus:bg-gray-100 px-4 py-2 focus:outline-hidden text-gray-700 focus:text-gray-900 text-sm">
                <img class='w-5 h-5' src="{{ asset('images/icons/icon.png') }}">
                <h1 class='ml-2'>Meu perfil</h1>
            </a>

            <form action="/logout" method="POST">
                <button type="submit"
                    class="flex items-center focus:bg-gray-100 px-4 py-2 focus:outline-hidden w-full text-gray-700 focus:text-gray-900 text-sm text-left">
                    <img class='w-5 h-5' src="{{ asset('images/icons/exit.png') }}">
                    <h1 class='ml-2'>Sair</h1>
                </button>
            </form>
        </div>
    </el-menu>
</el-dropdown>

