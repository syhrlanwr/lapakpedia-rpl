<div class="w-60 fixed top-0 left-0 h-screen transform duration-200 bg-zinc-800 shadow-md flex flex-col justify-between px-1 z-40"
    :class="{ 'translate-x-0 ease-in duration-200': isOpen === true, '-translate-x-full ease-out duration-100': isOpen === false }">
    <div>
        <div class="mr-4 mt-4 mb-4 flex items-center justify-end">
            <button class="text-white hover:text-gray-300 focus:outline-none focus:text-white-900" id="menu-toggle"
                @click="isOpen = !isOpen">
                <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <ul class="relative px-2">
            <li class="relative">
                <a class="flex items-center py-4 px-6 overflow-hidden text-white rounded hover:bg-gradient-to-br from-rose-600 via-rose-900 to-emerald-800 transition duration-300 ease-in-out"
                    href="/dashboard" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-dashboard"
                        width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 4h6v8h-6z"></path>
                        <path d="M4 16h6v4h-6z"></path>
                        <path d="M14 12h6v8h-6z"></path>
                        <path d="M14 4h6v4h-6z"></path>
                    </svg>

                    <span class="pl-2">Dashboard</span>
                </a>
            </li>
            <li class="relative">
                <a class="flex items-center py-4 px-6 overflow-hidden text-white rounded hover:bg-gradient-to-br from-rose-600 via-rose-900 to-emerald-800 transition duration-300 ease-in-out"
                    href="#!" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-notification" width="16"
                        height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M10 6h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3"></path>
                        <circle cx="17" cy="7" r="3"></circle>
                    </svg>

                    <span class="pl-2">Notifications</span>
                </a>
            </li>
            <li class="relative">
                <a class="flex items-center py-4 px-6 overflow-hidden text-white rounded hover:bg-gradient-to-br from-rose-600 via-rose-900 to-emerald-800 transition duration-300 ease-in-out"
                    href="/chat" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-2" width="16"
                        height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path
                            d="M12 20l-3 -3h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-2l-3 3">
                        </path>
                        <line x1="8" y1="9" x2="16" y2="9"></line>
                        <line x1="8" y1="13" x2="14" y2="13"></line>
                    </svg>
                    <span class="pl-2">Chat</span>
                </a>
            </li>
            <li class="relative">
                <a class="flex items-center py-4 px-6 overflow-hidden text-white rounded hover:bg-gradient-to-br from-rose-600 via-rose-900 to-emerald-800 transition duration-300 hover:transition-opacity ease-in-out"
                    href="#!" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="16"
                        height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path
                            d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z">
                        </path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>

                    <span class="pl-2">Setting</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="mb-8 px-2">
        <button
            class="w-full flex items-center justify-center bg-emerald-800 text-white hover:bg-gradient-to-br from-rose-600 via-rose-900 to-emerald-800 text-white font-semibold hover:text-white py-2 px-4 border border-emerald-700 hover:border-transparent rounded">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-store mr-2" width="16"
                height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <line x1="3" y1="21" x2="21" y2="21"></line>
                <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4"></path>
                <line x1="5" y1="21" x2="5" y2="10.85"></line>
                <line x1="19" y1="21" x2="19" y2="10.85"></line>
                <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4"></path>
            </svg>
            Start selling
        </button>
    </div>
</div>