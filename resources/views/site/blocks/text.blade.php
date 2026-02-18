
<div class="block-text" style="padding: 10px;">
    @if($block->input('title'))
        <h2>{{ $block->input('title') }}</h2>
    @endif

    @if($block->input('text'))
        {!! $block->input('text') !!}
    @else
        <p style="color: #999;">No text content</p>
    @endif
</div>