@extends('layouts.app')

@section('content')
    <main class="flex flex-col items-center">
        <section class="w-11/12 lg:w-3/4">
            <h1 class="text-xl font-display text-gray-700 lg:mt-10 dark:text-slate-100">Créer un événement</h1>
            <div class="mt-4 grid grid-cols-2 gap-1 md:grid-cols-3 md:gap-2 lg:grid-cols-6 lg:gap-6">
                <a href="{{ route('create-form') }}">
                    <div class="border rounded rounded-lg flex items-center justify-center" style="height: 130px">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 text-gray-700 dark:text-slate-100">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                          </svg>                          
                    </div>
                    <h1 class="text-center text-gray-700 dark:text-slate-100">Vide</h1>
                </a>
                <a href="">
                    <div class="border rounded rounded-lg" style="height: 130px"></div>
                    <h1 class="text-center text-gray-700 dark:text-slate-100">Anniversaire</h1>
                </a>
                <a href="">
                    <div class="border rounded rounded-lg" style="height: 130px"></div>
                    <h1 class="text-center text-gray-700">Conférence</h1>
                </a>
                <a href="">
                    <div class="border rounded rounded-lg" style="height: 130px"></div>
                </a>
                <a href="">
                    <div class="border rounded rounded-lg" style="height: 130px"></div>
                </a>
            </div>
        </section>
        <section class="w-11/12 lg:w-3/4 mt-5 lg:mt-0">
            <h1 class="text-xl font-display text-gray-700 lg:mt-10 dark:text-slate-100">Créer un formulaire</h1>
            <div class="mt-4 grid grid-cols-2 gap-1 md:grid-cols-3 md:gap-2 lg:grid-cols-6 lg:gap-6">
                <a href="">
                    <div class="border rounded rounded-lg" style="height: 130px"></div>
                </a>
                <a href="">
                    <div class="border rounded rounded-lg" style="height: 130px"></div>
                </a>
                <a href="">
                    <div class="border rounded rounded-lg" style="height: 130px"></div>
                </a>
                <a href="">
                    <div class="border rounded rounded-lg" style="height: 130px"></div>
                </a>
                <a href="">
                    <div class="border rounded rounded-lg" style="height: 130px"></div>
                </a>
            </div>
        </section>
        <section class="w-11/12 lg:w-3/4 mt-5 lg:mt-0">
            <h1 class="text-xl font-display text-gray-700 lg:mt-10  dark:text-slate-100">Vos événements</h1>
            <div class="mt-4 grid grid-cols-2 gap-1 md:grid-cols-3 md:gap-2 lg:grid-cols-6 lg:gap-6">
                <a href="">
                    <div class="border rounded rounded-lg" style="height: 130px"></div>
                </a>
                <a href="">
                    <div class="border rounded rounded-lg" style="height: 130px"></div>
                </a>
                <a href="">
                    <div class="border rounded rounded-lg" style="height: 130px"></div>
                </a>
                <a href="">
                    <div class="border rounded rounded-lg" style="height: 130px"></div>
                </a>
                <a href="">
                    <div class="border rounded rounded-lg" style="height: 130px"></div>
                </a>
            </div>
        </section>
        <section class="w-11/12 lg:w-3/4 mt-5 lg:mt-0">
            <h1 class="text-xl font-display text-gray-700 lg:mt-10  dark:text-slate-100">Vos formulaires</h1>
            <div class="mt-4 grid grid-cols-2 gap-1 md:grid-cols-3 md:gap-2 lg:grid-cols-6 lg:gap-6">
                <a href="">
                    <div class="border rounded rounded-lg" style="height: 130px"></div>
                </a>
                <a href="">
                    <div class="border rounded rounded-lg" style="height: 130px"></div>
                </a>
                <a href="">
                    <div class="border rounded rounded-lg" style="height: 130px"></div>
                </a>
                <a href="">
                    <div class="border rounded rounded-lg" style="height: 130px"></div>
                </a>
                <a href="">
                    <div class="border rounded rounded-lg" style="height: 130px"></div>
                </a>
            </div>
        </section>
    </main>
@endsection
