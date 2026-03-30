<!DOCTYPE html>
<html lang="en" id="htmlRoot">

<head>
    <title>{{ config('app.name') }}</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class'
        }
    </script>
</head>

<body class="bg-white text-black dark:bg-gray-900 dark:text-white transition duration-300">

    <!-- NAVBAR -->
    <nav class="bg-white dark:bg-gray-900 shadow">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16 items-center">

                <div class="flex items-center space-x-3">

                    <!-- LOGO -->
                    <img src="{{ asset('assets/images/logopcu.webp') }}" alt="Logo UK Petra"
                        class="h-28 w-28 object-contain">

                    <!-- TEXT -->
                    <span class="font-bold text-lg md:text-xl text-gray-800 dark:text-white">
                        Universitas Kristen Petra
                    </span>

                </div>

                <!-- MENU DESKTOP -->
                <div class="hidden md:flex space-x-6 items-center">

                    <a href="/" class="text-gray-800 dark:text-gray-200 hover:text-blue-500">
                        Home
                    </a>

                    <a href="/facility" class="text-gray-600 dark:text-gray-400 hover:text-blue-500">
                        Facility
                    </a>

                    <!-- DARK MODE BUTTON -->
                    <button onclick="toggleDarkMode()" id="themeToggle"
                        class="ml-4 bg-gray-200 dark:bg-gray-700 px-3 py-1 rounded">
                        🌙
                    </button>
                </div>

                <!-- MOBILE -->
                <div class="md:hidden flex items-center space-x-2">
                    <button onclick="toggleDarkMode()" class="bg-gray-200 dark:bg-gray-700 px-2 py-1 rounded">
                        🌙
                    </button>
                    <button onclick="toggleMenu()" class="text-gray-800 dark:text-white">
                        ☰
                    </button>
                </div>

            </div>
        </div>

        <!-- MOBILE MENU -->
        <div id="mobile-menu" class="hidden md:hidden px-4 pb-3 space-y-2">
            <a href="/" class="block text-gray-800 dark:text-white">Home</a>
            <a href="/facility" class="block text-gray-600 dark:text-gray-300">Facility</a>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="min-h-screen">
        @yield('content')
    </div>

    <!-- SCRIPT -->
    <script>
        function toggleMenu() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        }

        // DARK MODE TOGGLE
        function toggleDarkMode() {
            const html = document.getElementById('htmlRoot');
            const button = document.getElementById('themeToggle');

            html.classList.toggle('dark');

            if (html.classList.contains('dark')) {
                localStorage.setItem('theme', 'dark');
                if (button) button.innerHTML = '☀️';
            } else {
                localStorage.setItem('theme', 'light');
                if (button) button.innerHTML = '🌙';
            }
        }

        // LOAD THEME SAAT PAGE LOAD
        window.onload = function() {
            const html = document.getElementById('htmlRoot');
            const button = document.getElementById('themeToggle');
            const theme = localStorage.getItem('theme');

            if (theme === 'dark') {
                html.classList.add('dark');
                if (button) button.innerHTML = '☀️';
            } else {
                if (button) button.innerHTML = '🌙';
            }
        }
    </script>

</body>

</html>
