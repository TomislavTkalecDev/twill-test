<div class="block-text" style="padding: 10px;">
    @if($block->input('quote'))
        <h2>{!! $block->input('quote') !!}</h2>
    @endif

    @if($block->input('author'))
        {!! $block->input('author') !!}
    @else
        <p style="color: #999;">No text content</p>
    @endif
</div>