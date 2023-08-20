<div x-data="{ open_menu: false, choice: {{ $choice }} }" @click.outside=" open_menu=false; $el.classList.remove('z-10')"
    @click=" open_menu = !open_menu; $el.classList.toggle('z-10')"
    class="absolute top-3 right-3 flex items-center gap-2 shadow-md border px-1 lg:p-1 bg-white">
    <div>
        <div x-show="open_menu || choice == 0" x-transition
            x-changetype.reponse_courte.{{ $element_position }}="config, open_menu"
            class="flex items-center lg:py-1 cursor-pointer hover:bg-slate-200" value="">
            <span class="material-symbols-outlined text-gray-700 text-3xl">
                short_text
            </span>
            <p x-show="open_menu">Réponse courte</p>
            <p x-show="!open_menu" class="hidden lg:block">Réponse courte</p>
        </div>
        <div x-show="open_menu || choice == 1" x-transition
            x-changetype.reponse_long.{{ $element_position  }}="config, open_menu"
            class="flex items-center lg:py-1 cursor-pointer hover:bg-slate-200" value="">
            <span class="material-symbols-outlined text-gray-700 text-3xl">
                reorder
            </span>
            <p x-show="open_menu">Paragraphe</p>
            <p x-show="!open_menu" class="hidden lg:block">Paragraphe</p>
        </div>
        <hr x-show="open_menu">
        <div x-show="open_menu || choice == 2" x-transition
            x-changetype.radio.{{ $element_position }}="config, open_menu"
            class="flex items-center lg:py-1 cursor-pointer hover:bg-slate-200">
            <span class="material-symbols-outlined text-gray-700 text-3xl">
                radio_button_checked
            </span>
            <p x-show="open_menu">Question à choix multiple</p>
            <p x-show="!open_menu" class="hidden lg:block">Question à choix multiple</p>
        </div>
        <div x-show="open_menu || choice == 3" x-transition
            x-changetype.checkbox.{{ $element_position }}="config, open_menu"
            class="flex items-center lg:py-1 cursor-pointer hover:bg-slate-200">
            <span class="material-symbols-outlined text-gray-700 text-3xl">
                check_box
            </span>
            <p x-show="open_menu">Cases à cocher</p>
            <p x-show="!open_menu" class="hidden lg:block">Cases à cocher</p>
        </div>
        <div x-show="open_menu || choice == 4" x-transition
            x-changetype.select.{{ $element_position }}="config, open_menu"
            class="flex items-center lg:py-1 cursor-pointer hover:bg-slate-200" value="">
            <span class="material-symbols-outlined text-gray-700 text-3xl">
                expand_circle_down
            </span>
            <p x-show="open_menu">Liste déroulante</p>
            <p x-show="!open_menu" class="hidden lg:block">Liste déroulante</p>
        </div>
        <hr x-show="open_menu">
        <div x-show="open_menu || choice == 5" x-transition
            x-changetype.echelle.{{ $element_position }}="config, open_menu"
            class="flex items-center lg:py-1 cursor-pointer hover:bg-slate-200">
            <span class="material-symbols-outlined text-gray-700 text-3xl">
                linear_scale
            </span>
            <p x-show="open_menu">Échelle linéaire</p>
            <p x-show="!open_menu" class="hidden lg:block">Échelle linéaire</p>
        </div>
        <hr x-show="open_menu">
        <div x-show="open_menu || choice == 6" x-transition
            x-changetype.date.{{ $element_position }}="config, open_menu"
            class="flex items-center lg:py-1 cursor-pointer hover:bg-slate-200">
            <span class="material-symbols-outlined text-gray-700 text-3xl">
                event
            </span>
            <p x-show="open_menu">Date</p>
            <p x-show="!open_menu" class="hidden lg:block">Date</p>
        </div>
        <div x-show="open_menu || choice == 7" x-transition
            x-changetype.heure.{{ $element_position }}="config, open_menu"
            class="flex items-center lg:py-1 cursor-pointer hover:bg-slate-200">
            <span class="material-symbols-outlined text-gray-700 text-3xl">
                schedule
            </span>
            <p x-show="open_menu">Heure</p>
            <p x-show="!open_menu" class="hidden lg:block">Heure</p>
        </div>
    </div>
    <div class="p-0 m-0" x-show="!open_menu">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6 cursor-pointer">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
        </svg>
    </div>
</div>
