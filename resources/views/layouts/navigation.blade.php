<nav  x-cloak class="fixed bg-white top-0 left-0 right-0 shadow-md flex items-center justify-between px-2 dark:bg-slate-900 dark:text-slate-100"
    x-data="nav_data">
    <div class="flex gap-1 items-center">
        <svg @click=" menuOpen=true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-8 h-8 mr-3 md:mr-5 ml-2 text-gray-700 dark:text-slate-100 cursor-pointer">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
        <img src="{{ asset('assets/images/icon.png') }}" alt="" class="w-12 h-12 md:w-16 md:h-16">
        <p class="font-display text-3xl text-gray-700 dark:text-slate-100">EventShape</p>
    </div>
    <div class="flex items-center gap-1 lg:mr-2 ">
        <div class="border border-2 border-gray-300 rounded-full p-1 cursor-pointer mr-3 md:mr-10">
            <svg @click="darkMode" xmlns="http://www.w3.org/2000/svg" fill="true" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="dark:hidden w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
            </svg>
            <svg @click="lightMode" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="hidden dark:block w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
            </svg>
        </div>
        <div class="flex items-center gap-1 cursor-pointer" @click=" open=!open">
            <img src="{{ Auth::user()->avatar }}" alt="" class="w-8 h-8 rounded-full">
            <p class="text-xs hidden md:block">{{ Auth::user()->name }}</p>
        </div>
    </div>
    <div class="absolute profile bg-gray-100 border rounded dark:bg-slate-700" @click.outside="open=false" x-transition
        x-show="open">
        <div
            class="absolute top-0 right-0 md:left-2/3 transform -translate-x-1/2 lg:-translate-x-2/3 -translate-y-1/2 bg-slate-100 dark:bg-slate-700 w-6 h-6 -rotate-45">
        </div>
        <div class="static flex flex-col items-center p-4 pt-10 text-gray-700 dark:text-slate-100"
            style="width: 300px; max-width: 300px;">
            <div>
                <img src="{{ Auth::user()->avatar }}" alt="" class="w-25 h-25 rounded-full">
            </div>
            <p class="mt-2 font-display text-xl">{{ Auth::user()->name }}</p>
            <p class="mb-3">{{ Auth::user()->email }}</p>
            <a href="{{ route('logout') }}">
                <button
                    class="bg-red-400 p-2 rounded hover:bg-red-500 dark:bg-slate-600 dark:hover:bg-slate-500">Déconnexion</button>
            </a>
        </div>
    </div>
    <aside x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0" x-transition:leave="transition-transform ease-in duration-300"
        x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-show="menuOpen"
        @click.outside="menuOpen = false"
        class="fixed top-0 left-0 shadow-lg shadow-gray-800 with-3d-shadow min-h-screen bg-white p-2 pt-0 dark:bg-slate-800 dark:shadow-slate-300"
        style="width: 50%; max-width: 300px;">
        <div>
            <h1
                class="menu-title font-display text-3xl text-xl-center flex items-center ml-2 text-gray-800 dark:text-slate-100">
                EventShape</h1>
            <hr>
            <div class="mt-10">
                <a href="">
                    <div class="flex items-center gap-6 md:ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 text-green-700 dark:text-indigo-700"
                            viewBox="0 0 16 16">
                            <path
                                d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
                            <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z" />
                        </svg>
                        <h1 class="text-xl font-display text-gray-700 dark:text-slate-100">Participations</h1>
                    </div>
                </a>
                <a href="">
                    <div class="flex items-center gap-6 mt-4 md:ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 text-green-700 dark:text-indigo-700"
                            viewBox="0 0 16 16">
                            <path
                                d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                        </svg>
                        <h1 class="text-xl font-display text-gray-700 dark:text-slate-100">Calendrier</h1>
                    </div>
                </a>
            </div>
        </div>
    </aside>
    <style>
        .menu-title,
        nav {
            height: 55px;
        }

        .profile {
            top: 62px;
            right: 5px;
        }

        @media screen and (min-width: 760px) {

            .menu-title,
            nav {
                height: 65px;
            }

            .profile {
                right: 20px;
            }
        }
    </style>
</nav>
