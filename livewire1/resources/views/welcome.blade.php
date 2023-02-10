<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <livewire:styles />
</head>
<body>

    <livewire:counter />
    {{-- @livewire('counter') --}}
    <livewire:comments />
    <livewire:scripts />
</body>
</html>
