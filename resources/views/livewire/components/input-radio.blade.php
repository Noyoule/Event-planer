<div>
    <livewire:components.change-qestion-type :wire:key="'change_question' . $element_position" :element_position="$element_position"
        :choice='$choice'>
        <div config_path="{{ $config_path }}">
            @livewire('components.put-label', ['config_path' => 'label', 'big' => false, 'large' => false])
            @for($i=0; $i< $option_count; $i++)
                <div>{{ $i }}</div>
            @endfor
            <div>
                <button class="flex rounded-lg items-center bg-slate-400 text-white p-1 my-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      <p class="text-sm">Nouvelle option</p>                      
                </button>
            </div>           
        </div>
</div>
