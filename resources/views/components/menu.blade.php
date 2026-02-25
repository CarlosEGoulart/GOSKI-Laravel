<script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
<el-dropdown class="inline-block">
  <button class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-black px-3 py-2 text-sm font-semibold text-white inset-ring-1 inset-ring-white/5 hover:bg-black/30 cursor-pointer">
    Options
    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="-mr-1 size-5 text-white">
      <path d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
    </svg>
  </button>

    <el-menu anchor="bottom end" popover
        class="bg-[#D9D9D9] data-closed:opacity-0 shadow-lg rounded-md outline-1 outline-black/5 w-56 data-closed:scale-95 origin-top-right transition transition-discrete data-enter:duration-100 data-leave:duration-75 data-leave:ease-in data-enter:ease-out [--anchor-gap:--spacing(2)] data-closed:transform">
        <div class='py-1'>
            <a href="#"
                class="flex items-center focus:bg-gray-100 px-4 py-2 focus:outline-hidden text-gray-700 focus:text-gray-900 text-sm">
                <img class='w-5 h-5' src="{{ asset('images/icons/icon.png') }}">
                <h1 class='ml-2 text-black'>Meu perfil</h1>
            </a>

            <form action="/logout" method="POST">
                <button type="submit"
                    class="flex items-center focus:bg-gray-100 px-4 py-2 focus:outline-hidden w-full text-gray-700 focus:text-gray-900 text-sm text-left">
                    <img class='w-5 h-5' src="{{ asset('images/icons/exit.png') }}">
                    <h1 class='ml-2 text-black'>Sair</h1>
                </button>
            </form>
        </div>
    </el-menu>
</el-dropdown>

