<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Obstacle Avoidance Robot</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white min-h-screen flex flex-col items-center justify-center p-6">
    
    <h1 class="text-5xl font-bold text-center mb-8">Obstacle Avoidance Robot</h1>

    <div class="max-w-4xl bg-gray-800 p-6 rounded-lg shadow-lg">
    <p class="text-lg leading-relaxed text-justify">
    Robot obstacle avoidance adalah jenis robot yang dirancang untuk mendeteksi dan menghindari rintangan secara otomatis saat bergerak di lingkungan tertentu. Teknologi ini umumnya digunakan dalam robot otonom seperti robot vacuum cleaner, robot eksplorasi, atau robot pemetaan.
</p>

<p class="text-lg leading-relaxed text-justify">
Komponen yang digunakan adalah sensor ultrasonik, arduino, L298N, dan 2 motor</p>

<p class="text-lg leading-relaxed text-justify">
1. Sensor mendeteksi keberadaan rintangan.</p>

<p class="text-lg leading-relaxed text-justify">
2. Mikrokontroler membaca data jarak dari sensor.</p>

<p class="text-lg leading-relaxed text-justify">
3. Jika rintangan terdeteksi dalam jarak tertentu, mikrokontroler memerintahkan motor untuk mengubah arah gerak.</p>

<p class="text-lg leading-relaxed text-justify">
4. Robot menghindar dan melanjutkan perjalanan tanpa menabrak.</p>

<img src="/images/robot1.jpg" alt="Alif Andika Amin" class="w-[1000px] h-[1000px] object-cover rounded-2xl shadow-lg border-4 border-white">
<img src="/images/robot2.jpg" alt="Alif Andika Amin" class="w-[1000px] h-[1000px] object-cover rounded-2xl shadow-lg border-4 border-white">

    </div>
    <button onclick="history.back()" class="bg-gray-700 hover:bg-gray-800 text-white px-4 py-2 rounded">
    ← Kembali
</button>

</body>
</html>
