<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Code Breaker</title>
    {{-- Imporrted links --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://db.onlinewebfonts.com/c/97537ad2690fc422a4f8d4c692f7a6de?family=Crimstone+Rounded" rel="stylesheet" type="text/css"/>
</head>
<body class="pt-6 bg-primary text-white print:bg-white print:text-gray-700 grid place-items-center h-full">
    {{ $slot }}
</body>
</html>


