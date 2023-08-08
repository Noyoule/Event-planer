<nav class="shadow-md flex items-center justify-between px-2 dark:bg-slate-900 dark:text-slate-100" x-data="nav_data">
    <div class="flex gap-1 items-center">
        <img src="{{ asset('assets/images/icon.png') }}" alt="" class="w-12 h-12 md:w-16 md:h-16">
        <p class="font-display text-3xl text-gray-700 dark:text-slate-100">EventShape</p>
    </div>
    <div class="flex items-center gap-1 lg:mr-2 ">
        <div class="border border-2 border-gray-300 rounded-full p-1 cursor-pointer mr-3 md:mr-10">
            <svg @click="darkMode" xmlns="http://www.w3.org/2000/svg" fill="true" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="dark:hidden w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
            </svg>
            <svg @click="lightMode" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="hidden dark:block w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
              </svg>              
        </div>
        <div class="flex items-center gap-1 cursor-pointer" @click=" open=!open">
            <img src="{{ Auth::user()->avatar }}" alt="" class="w-8 h-8 rounded-full">
            <p class="text-xs hidden md:block">{{ Auth::user()->name }}</p>
        </div>
    </div>
    <div class="absolute profile bg-gray-100 border rounded dark:bg-slate-700" @click.outside="open=false" x-transition x-show="open">
        <div
            class="absolute top-0 right-0 md:left-2/3 transform -translate-x-1/2 lg:-translate-x-2/3 -translate-y-1/2 bg-slate-100 dark:bg-slate-700 w-6 h-6 -rotate-45">
        </div>
        <div class="static flex flex-col items-center p-4 pt-10 text-gray-700 dark:text-slate-100" style="width: 300px; max-width: 300px;">
            <div>
                <img src="{{ Auth::user()->avatar }}" alt="" class="w-25 h-25 rounded-full">
            </div>
            <p class="mt-2 font-display text-xl">{{ Auth::user()->name }}</p>
            <p class="mb-3">{{ Auth::user()->email }}</p>
            <a href="{{ route('logout') }}">
                <button class="bg-red-400 p-2 rounded hover:bg-red-500 dark:bg-slate-600 dark:hover:bg-slate-500">Déconnexion</button>
            </a>
        </div>        
    </div>
    <style>
        nav {
            height: 55px;
        }

        .profile {
            top: 62px;
            right: 5px;
        }

        @media screen and (min-width: 760px) {
            nav {
                height: 65px;
            }

            .profile {
                right: 20px;
            }
        }
    </style>
</nav>
