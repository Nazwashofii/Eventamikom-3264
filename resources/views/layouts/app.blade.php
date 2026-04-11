<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-blue-500 via-purple-500 to-pink-500 min-h-screen">

    <!-- 🔥 NAVBAR GLASS -->
    <nav class="backdrop-blur-md bg-white/30 border-b border-white/20 shadow-lg p-4 flex justify-between items-center">

        <h1 class="text-white text-xl font-bold tracking-wide">✨ EventHub</h1>

        <div class="space-x-2">
            <a href="/profil" class="px-4 py-2 rounded-full text-white hover:bg-white hover:text-blue-600 transition">Profil</a>
            <a href="/katalog" class="px-4 py-2 rounded-full text-white hover:bg-white hover:text-green-600 transition">Katalog</a>
            <a href="/bantuan" class="px-4 py-2 rounded-full text-white hover:bg-white hover:text-yellow-600 transition">Bantuan</a>
        </div>

    </nav>

    <!-- 🔥 CONTENT -->
    <div class="p-6">
        @yield('content')
    </div>

</body>
</html>