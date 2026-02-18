{{ dd($block) }}


@if($block->input('youtube_url'))
<div class="video-block">
    <p>Video URL: {{ $block->input('youtube_url') }}</p>
</div>
@endif