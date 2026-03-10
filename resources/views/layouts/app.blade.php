<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Author Book Manager</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100">

<!-- Navbar -->
<div class="bg-indigo-600 text-white p-4 shadow">
    <div class="max-w-6xl mx-auto flex justify-between items-center">
        <h1 class="text-xl font-bold">📚 Author Book Manager</h1>
    </div>
</div>

<!-- Page Content -->
<div class="max-w-6xl mx-auto mt-8">

    @yield('content')

</div>

</body>
</html>