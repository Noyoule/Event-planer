<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <div class="h-screen w-screen flex items-center justify-center dark:bg-gray-900 dark:text-slate-100" x-data="nav_data">
        <div class="fixed top-3  left-3 lg:top-10 lg:left-10">
            <img src="{{ asset('assets/images/icon.png') }}" class="h-16 w-16" alt="">
        </div>
        <div class="fixed top-3  right-3 lg:top-10 lg:right-10 border border-2 border-gray-300 rounded-full p-1 cursor-pointer">
            <svg @click="darkMode" xmlns="http://www.w3.org/2000/svg" fill="true" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="dark:hidden w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
            </svg>
            <svg @click="lightMode" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="hidden dark:block w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
              </svg>              
        </div>
        <div>
            <h1 class="mb-3 text-2xl lg:text-3xl font-display dark:text-slate-300">S'authentifier sur EventShape</h1>
            <a href="{{ route('login') }}">
                <div class="border border-2 border-black dark:border-slate-300 flex items-center justify-center p-2 rounded gap-3">
                    <img src="{{ asset('assets/images/google.png') }}" alt="" class="w-8 h-8">
                    <p class="text-lg font-display dark:text-slate-300">Continuer avec google</p>
                </div>
            </a>
        </div>
    </div>
</body>

</html>
