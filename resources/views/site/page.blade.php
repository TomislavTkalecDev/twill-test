<!doctype html>
<html lang="en">
<head>
    <title>{{ $item->title }}</title>
    {{-- include your CSS here --}}
    {{-- @vite('resources/css/app.css') --}}
</head>
<body>
        {{-- Cover Image --}}
    @if($item->image('cover', 'mobile'))
        <img src="{{ $item->image('cover', 'mobile') }}" alt="{{ $item->title }}" style="width: 100%; height: auto;" />
    @endif

    <div>
        {!! $item->renderBlocks() !!}
    </div>
</body>
</html>