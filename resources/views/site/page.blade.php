<!doctype html>
<html lang="en">
<head>
    <title>{{ $item->title }}</title>
    {{-- include your CSS here --}}
    {{-- @vite('resources/css/app.css') --}}
</head>
<body>
    <div>
        {!! $item->renderBlocks() !!}
    </div>
</body>
</html>