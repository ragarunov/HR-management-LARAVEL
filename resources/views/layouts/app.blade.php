<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR Management</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>
<body class="bg-gray-100">
    <nav class="p-6 bg-white mb-8">
        <ul class="flex justify-center">
            <li>
                <a href="{{ '/' }}" class="p-3 font-bold hover:text-gray-700">Home</a>
            </li>
            <li>
                <a href="{{ '/emp' }}" class="p-3 font-bold hover:text-gray-700">Employees</a>
            </li>
            <li>
                <a href="{{ '/roles' }}" class="p-3 font-bold hover:text-gray-700">Roles</a>
            </li>
        </ul>
    </nav>

    @yield('content')
</body>
</html>