<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 10 Task List App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- blade-formatter-disable --}}
    <style>
        .btn {
            @apply rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/50 hover:bg-slate-10
        }

        .link {
            @apply font-medium text-gray-700 underline decoration-pink-500
        }

        label {
            @apply block uppercase text-slate-700 mb-2
        }

        input, textarea{
            @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
        }

    </style>
    {{-- blade-formatter-enable --}}

    @yield('styles')
</head>

<body class="container mx-auto mt-10 mb-10 max-w-lg">
    <h1 class="text-center text-2xl text-blue-500 border border-slate-700 shadow-lg mb-4">@yield('title')</h1>
    <div>
        @if(session()->has('success'))
            <div class="text-center mb-10 rounded border border-green-400 bg-green-100 px-4 py-3 text-lg text-green-800">{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>
</body>

</html>
