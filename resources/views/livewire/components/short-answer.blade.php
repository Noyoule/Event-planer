<div>
    <livewire:components.change-qestion-type :wire:key="'change_question' . $element_position" :element_position="$element_position" :choice="$choice">
        <div config_path="{{ $config_path }}" @mouseenter="$el.getAttribute('config_path')">
            @livewire('components.put-label', ['placeholder' => 'Question1', 'config_path' => 'label', 'big' => false, 'large' => false])
            Facere rem facilis, doloremque quos excepturi quidem eos distinctio deleniti, veritatis accusamus ipsum
            impedit aliquam praesentium dicta optio maiores esse. Alias, praesentium?
        </div>
</div>
