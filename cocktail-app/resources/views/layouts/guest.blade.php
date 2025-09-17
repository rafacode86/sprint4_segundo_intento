<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acceso a App de Cócteles</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans antialiased">
    <main class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md bg-white p-6 rounded shadow">
            {{ $slot }}
        </div>
    </main>
</body>
</html>

