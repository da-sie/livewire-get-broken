<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Demo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    Here is a thing:<br/>
    With custom path to Livewire HttpConnectionHandler (nested with routing groups), there is an issue when you open page with livewire component
    which is served only as GET.
    <ul>
        <li>
            <a href="{{url('p,1/s,1/sample')}}">Doesn't work - route GET</a>
        </li>
        <li>
            <a href="{{url('p,1/s,1/sample-works')}}">Works - route POST & GET defined</a>
        </li>
        <li>
            <a href="{{url('p,1/s,1/sample-works-too')}}">Works - route ANY</a>
        </li>
    </ul>

</div>
</body>
</html>
