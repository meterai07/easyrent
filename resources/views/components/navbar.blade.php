<div class="w-full shadow-xl">
    <div class="flex justify-between p-8 items-center text-lg">
        <a href="/product">
            <h1 class="text-2xl hover:text-slate-400">EASYRENT</h1>
        </a>
        <div class="flex gap-5">
            <a href="#" class="hover:text-slate-500">Home</a>
            <a href="#" class="hover:text-slate-500">About</a>
            <a href="/product" class="hover:text-slate-500">Pricing</a>
        </div>
        @if (auth()->check())
            <div class="flex gap-3 items-center">
                <p>{{ auth()->user()->name }}</p>
                <div class="relative inline-block text-left dropdown-icon">
                    <div>
                        <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="dropdown-list-item absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                      <div class="py-1">
                        <form method="get" action="/logout">
                          <button type="submit" class="hover:bg-sky-400 text-gray-700 block w-full px-4 py-2 text-left text-lg" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
                        </form>
                      </div>
                    </div>
                </div>
                <div style="width: 50px; height: 50px;" class="overflow-hidden w-50 h-50 rounded-full">
                    <img src="/assets/hanif.jpeg" alt="" style="width: 100%; height: 100%;" class="object-cover">
                </div>   
            </div>
        @else
            <a href="/login&register" class="bg-sky-500 hover:bg-sky-700 text-white   px-4 py-2 rounded-xl">
                <h1>Login</h1>
            </a>
        @endif
    </div>
</div>