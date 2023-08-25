<main>
    <section>
        <div
            class="flex max-w-screen p-1 bg-green-200 text-green-500 border-green-700 items-center justify-between lg:mt-3">
            <div class="flex items-center gap-2">
                <a href="{{ route('home') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                </a>
                <p class="text-xl font-display">{{ $config['title'] }}</p>
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
    {{-- Partie de création du formulaire --}}
    <section x-cloak x-data="{ config: @entangle('config'), current_path: @entangle('current_path') }" class="flex flex-col items-center bg-slate-100 min-h-screen p-4">
        {{--
        -- "config": est le json de configuration de formulaire
        -- "current_path": est juste un (chemin d’accès) qui fait reference à la parti du formulaire clicker à une
        partie dans le json
        --}}
        <div config_path="" @click="current_path = $event.target.getAttribute('config_path')"
            @mouseenter=" $el.childNodes[3].classList.remove('hidden')"
            @mouseleave=" $el.childNodes[3].classList.add('hidden')"
            x-transition:enter="transition ease-out duration-900"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-900"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90" class="w-11/12 lg:w-3/5 my-4">
            <div config_path="" class="bg-white pt-3 px-3 rounded-lg shadow-sm">
                @if ($config['image'] != '')
                    <div config_path="">
                        <img src="{{ $config['image'] }}" alt="">
                        <livewire:components.input-image>
                    </div>
                @else
                    <livewire:components.input-image>
                @endif
                @livewire('components.put-label', ['config_path' => 'title', 'big' => true, 'large' => false])
                @livewire('components.put-label', ['config_path' => 'description', 'big' => true, 'large' => true])
            </div>
            <div class="hidden">
                <livewire:components.new-element :wire:key="'begin'" :element_position="-1">
            </div>
        </div>
        @php
            $count = 0;
        @endphp
        @foreach ($config['elements'] as $element)
            <div config_path="{{ 'elements.' . $count }}" @mouseenter=" $el.childNodes[3].classList.remove('hidden')"
                @mouseleave=" $el.childNodes[3].classList.add('hidden')"
                x-transition:enter="transition ease-out duration-900"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-900"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90" class="w-11/12 lg:w-3/5 my-4">
                <div class="relative pt-4 bg-white px-3 rounded-lg shadow-sm">
                    @if ($element['type'] != 'image' && $element['type'] != 'video' && $element['type'] != 'titre_description')
                            <div class="mt-2">
                                {{-- Placons le composant livewire en fonction de type de question choisi --}}
                                @switch($element["type"])
                                    @case('reponse_courte')
                                        <livewire:components.short-answer :wire:key="'reponsecourte' . $count"
                                            :config_path="'elements.' . $count" :element_position="$count">
                                    @break
                                    @case('reponse_long')
                                        <livewire:components.long-answer :wire:key="'reponselong' . $count" :config_path="'elements.' . $count" :element_position="$count">
                                    @break
                                    @case('radio')
                                        <livewire:components.input-radio :wire:key="'radio2 '. $count" :config_path="'elements.' . $count" :element_position="$count" :option_count="count($config['elements'][$count]['options'])">
                                    @break
                                    @case('checkbox')
                                         <livewire:components.input-check-box :wire:key="'checkbox' . $count" :element_position="$count">
                                    @break
                                    @case('select')
                                        <livewire:components.input-select :wire:key="'select' . $count" :element_position="$count">
                                    @break
                                    @default
                                @endswitch
                            </div>
                        @else
                            {{-- Au cas ou l'utilisateur décide d'ajouter un élément autre qu'une question (image; video, titre et description) --}}
                            @switch($element["type"])
                                @case('image')
                                    <livewire:components.image :wire:key="'image' . $count">
                                @break
                                @case('video')
                                     <livewire:components.video :wire:key="'video' . $count">
                                @break
                                @default
                            @endswitch
                      @endif
            </div>
                {{-- Composant livewire permettant d'ajouter un nouvel élément --}}
                <div class="hidden" @click="current_path = $el.parentNode.getAttribute('config_path')">
                    <livewire:components.new-element :wire:key="'new_element.' . $count" :element_position="$count">
                </div>
            </div>
            @php
                $count++;
            @endphp
        @endforeach
    </section>
</main>
