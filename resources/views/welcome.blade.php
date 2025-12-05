<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartPOS</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body { background-color: #fcfdffff; }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen">

    <div class="text-center">

        <!-- Logo -->
        <img src="{{ asset('images/logo.png') }}" class="w-28 h-28 mx-auto mb-4">

        <h1 class="text-3xl font-extrabold text-gray-800">
            Smart<span class="text-red-600">POS</span>
        </h1>

        <p class="text-gray-600 mt-2 text-sm">
            Pilih peran Anda untuk melanjutkan
        </p>

        <!-- Pilihan Aktor -->
        <div class="mt-6 space-y-4">
            <a href="{{ url('/login?role=kasir') }}"
               class="block bg-red-600 text-white font-semibold px-8 py-3 rounded-lg hover:bg-red-700 transition">
                Masuk sebagai Kasir
            </a>

            <a href="{{ url('/login?role=owner') }}"
               class="block bg-gray-800 text-white font-semibold px-8 py-3 rounded-lg hover:bg-gray-900 transition">
                Masuk sebagai Owner
            </a>
        </div>

    </div>

</body>
</html>
