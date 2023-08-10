<main x-data="{ config: @entangle('config'), current_path: @entangle('current_path') }">
    <section>
        <div class="flex max-w-screen p-1 bg-green-200 text-green-500 border-green-700 items-center justify-between lg:mt-3">
            <div class="flex items-center gap-2">
                <a href="{{ route('home') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                </a>
                <p class="text-xl font-display">{{ $config['titre'] }}</p>
                <p>{{ $current_path }}</p>
            </div>
            <div>
            </div>
            <div class="flex gap-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="w-6 h-6 cursor-pointer" viewBox="0 0 16 16">
                    <path
                        d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm4 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM5.5 7a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                    <path
                        d="M16 8c0 3.15-1.866 2.585-3.567 2.07C11.42 9.763 10.465 9.473 10 10c-.603.683-.475 1.819-.351 2.92C9.826 14.495 9.996 16 8 16a8 8 0 1 1 8-8zm-8 7c.611 0 .654-.171.655-.176.078-.146.124-.464.07-1.119-.014-.168-.037-.37-.061-.591-.052-.464-.112-1.005-.118-1.462-.01-.707.083-1.61.704-2.314.369-.417.845-.578 1.272-.618.404-.038.812.026 1.16.104.343.077.702.186 1.025.284l.028.008c.346.105.658.199.953.266.653.148.904.083.991.024C14.717 9.38 15 9.161 15 8a7 7 0 1 0-7 7z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <div class="flex gap-1 items-center p-1 border border-green-500 rounded rounded-xl cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                    Sauvegardé
                </div>
            </div>
        </div>
    </section>
    <section class="flex flex-col items-center bg-slate-50 min-h-screen p-4">
        <div config_path="" @click="current_path = $event.target.getAttribute('config_path')"
            class="w-11/12 lg:w-3/5  bg-white rounded-lg shadow-sm pt-3 pl-3 m-2">
            @if ($config['image'] != '')
                <img src="{{ $config['image'] }}" alt="">
                <livewire:components.input-image>
                @else
                    <livewire:components.input-image>
            @endif
            @livewire('components.put-label', ['placeholder' => "Sans Titre","config_path" =>"titre","big"=>true,"large"=>false])
            @livewire('components.put-label', ['placeholder' => "Description du formulaire","config_path" =>"description","big"=>true,"large"=>true])
        </div>
        @php
            $count = 0;
        @endphp
        @foreach ($config['elements'] as $element)
            <div config_path="{{ 'elements.' . $count }}"
                @click="current_path = $event.target.getAttribute('config_path')"
                class="w-11/12 lg:w-3/5  bg-white rounded-lg shadow-sm pt-3 pl-3 m-2">Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Provident, deleniti. Vel odit, quisquam, sequi error quam voluptate
                voluptates sint commodi, et consequatur dolore eius ullam totam nulla nesciunt. Non, corrupti.</div>
            @php
                $count++;
            @endphp
        @endforeach
    </section>
</main>
