  <div class=" p-0 mb-4" @click.outside="$el.childNodes[1].classList.remove('border-b')" type="text"
      wire:model.lazy="text">
      <input config_path="{{ $config_path }}"
          @click="current_path = $el.parentNode.getAttribute('config_path') + '.' + $event.target.getAttribute('config_path')"
          class="border-b @if ($big) w-5/6 @else w-full @endif  border-gray-300 focus:border-2 focus:border-green-200 px-3 py-2 focus:rounded-md outline-none transition-all duration-300"
          placeholder="{{ $placeholder }}" :value="config.{{ $config_path }} !== 'Sans titre' ? config.{{ $config_path }} : ''"
          @if ($large) style="height: 75px" @endif>
  </div>
