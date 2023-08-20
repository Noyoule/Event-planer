<input config_path="{{ $config_path }}" wire:model.lazy="text" type="text"
    @click="current_path = $el.parentNode.getAttribute('config_path') + '.' + $el.getAttribute('config_path')"
    class="hover:border-b @if (!$big) w-1/2 @else w-full @endif  border-gray-300 focus:border focus:border-green-200 mb-2 px-3 py-2 focus:rounded-md outline-none transition-all duration-300"
    x-putvalue="config"
    @if ($large) style="height: 75px" @endif>