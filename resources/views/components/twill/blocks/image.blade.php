{{-- @if($block->image('image'))
<figure>
    <img 
        src="{{ $block->image('image', 'default') }}" 
        alt="{{ $block->input('caption') ?? '' }}"
        class="w-full h-auto"
    />
    @if($block->input('caption'))
        <figcaption class="text-sm text-gray-600 mt-2">
            {{ $block->input('caption') }}
        </figcaption>
    @endif
</figure>
@endif --}}