<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fakta Unik Tumbuhan</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"crossorigin="anonymous"></script>
</head>
<body class="bg-gray-200 min-h-screen py-10 px-4">

    <div class="max-w-md mx-auto">
        
        <h1 class="text-3xl font-extrabold text-center text-emerald-600 mb-8">
           Selamat Datang di Fakta Unik Tumbuhan yaaaaa
        </h1>

        <div class="grid grid-cols-2 gap-4">
            
            @foreach($tumbuhan as $item)
                <div class="bg-white rounded-2xl p-3 shadow-sm flex flex-col justify-between">
                    <div>
                        <h2 class="font-bold text-gray-800 text-base mb-2 px-1">
                            {{ $item['nama'] }}
                        </h2>
                        
                        <div class="bg-gray-100 rounded-xl overflow-hidden aspect-square flex items-center justify-center">
                            <img src="{{ $item['gambar'] }}" alt="{{ $item['nama'] }}" class="w-full h-full object-cover">
                        </div>
                    </div>
                    
                    <p class="text-xs text-gray-500 mt-2 px-1 line-clamp-3">
                        {{ $item['fakta'] }}
                    </p>
                </div>
            @endforeach

        </div>
    </div>

</body>
</html>

