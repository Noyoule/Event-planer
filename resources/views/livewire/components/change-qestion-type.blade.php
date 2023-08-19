<div x-data="{ open_menu: false, choice: {{ $choice }} }" @click.outside=" open_menu=false; $el.classList.remove('z-10')"
    @click=" open_menu = !open_menu; $el.classList.toggle('z-10')"
    class="absolute top-3 right-3 flex items-center gap-2 shadow-md border p-1 bg-white">
    <div>
        <div x-show="open_menu || choice == 0" x-transition
            x-changetype.reponse_courte.{{ $element_position }}="config, open_menu"
            class="flex items-center py-1 cursor-pointer hover:bg-slate-200" value="">
            <span class="material-symbols-outlined text-gray-700 text-3xl">
                short_text
            </span>
            Réponse courte
        </div>
        <div x-show="open_menu || choice == 1" x-transition
            x-changetype.reponse_long.{{ $element_position }}="config, open_menu"
            class="flex items-center py-1 cursor-pointer hover:bg-slate-200" value="">
            <span class="material-symbols-outlined text-gray-700 text-3xl">
                reorder
            </span>
            Paragraphe
        </div>
        <hr x-show="open_menu">
        <div x-show="open_menu || choice == 2" x-transition
            x-changetype.radio.{{ $element_position }}="config, open_menu"
            class="flex items-center py-1 cursor-pointer hover:bg-slate-200">
            <span class="material-symbols-outlined text-gray-700 text-3xl">
                radio_button_checked
            </span>
            Question à choix multiple
        </div>
        <div x-show="open_menu || choice == 3" x-transition
            x-changetype.checkbox.{{ $element_position }}="config, open_menu"
            class="flex items-center py-1 cursor-pointer hover:bg-slate-200">
            <span class="material-symbols-outlined text-gray-700 text-3xl">
                check_box
            </span>
            Cases à cocher
        </div>
        <div x-show="open_menu || choice == 4" x-transition
            x-changetype.select.{{ $element_position }}="config, open_menu"
            class="flex items-center py-1 cursor-pointer hover:bg-slate-200" value="">
            <span class="material-symbols-outlined text-gray-700 text-3xl">
                expand_circle_down
            </span>
            Liste déroulantes
        </div>
        <hr x-show="open_menu">
        <div x-show="open_menu || choice == 5" x-transition
            x-changetype.echelle.{{ $element_position }}="config, open_menu"
            class="flex items-center py-1 cursor-pointer hover:bg-slate-200">
            <span class="material-symbols-outlined text-gray-700 text-3xl">
                linear_scale
            </span>
            Échelle linéaire
        </div>
        <hr x-show="open_menu">
        <div x-show="open_menu || choice == 6" x-transition
            x-changetype.date.{{ $element_position }}="config, open_menu"
            class="flex items-center py-1 cursor-pointer hover:bg-slate-200">
            <span class="material-symbols-outlined text-gray-700 text-3xl">
                event
            </span>
            Date
        </div>
        <div x-show="open_menu || choice == 7" x-transition
            x-changetype.heure.{{ $element_position }}="config, open_menu"
            class="flex items-center py-1 cursor-pointer hover:bg-slate-200">
            <span class="material-symbols-outlined text-gray-700 text-3xl">
                schedule
            </span>
            Heure
        </div>
    </div>
    <div class="p-0 m-0" x-show="!open_menu">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6 cursor-pointer">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
        </svg>
    </div>
</div>
