<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100">
    <div class="p-6 max-w-lg mx-auto bg-white rounded-lg shadow-md mt-20">
        <h2 class="text-2xl font-bold text-center">Admin Dashboard</h2>
        <p class="text-gray-700 text-center mt-4">Welcome, {{ auth()->user()->name }}!</p>
        
       
    </div>
</body>
</html>
