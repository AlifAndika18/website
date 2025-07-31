<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tugas Akhir</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white min-h-screen flex flex-col items-center justify-center p-6">
    
    <h1 class="text-5xl font-bold text-center mb-8">Tugas Akhir</h1>

    <div class="max-w-4xl bg-gray-800 p-6 rounded-lg shadow-lg">
    <p class="text-lg leading-relaxed font-bold">
    "RANCANG BANGUN SISTEM PEMANTAUAN DAN PENGATURAN KUALITAS AIR AKUARIUM UNTUK SALAMANDER AXOLOTL"
</p>
<p class="text-lg leading-relaxed text-justify">
Menjaga kualitas air akuarium sangat penting untuk memastikan hewan yang tinggal di dalamnya dapat berkembang dengan baik. Faktor utama yang mempengaruhi kualitas air adalah pH, suhu, dan tingkat kekeruhan air. Beberapa hewan, seperti salamander axolotl, sangat sensitif terhadap perubahan pH dan suhu air. Axolotl adalah spesies yang terancam punah akibat polusi air dan dampak negatif dari ikan invasif seperti ikan nila. Untuk mendukung konservasi axolotl, diperlukan kondisi air yang optimal, yaitu pH sekitar 7 dan suhu antara 16°C - 24°C.Pemantauan kualitas air secara konvensional membutuhkan kehadiran fisik di lokasi, sehingga kurang efisien. Oleh karena itu, dalam penelitian ini dikembangkan sistem otomatis untuk memantau dan mengontrol pH, suhu, dan kekeruhan air akuarium. Sistem ini menggunakan sensor pH, sensor suhu, dan sensor kekeruhan, serta metode logika fuzzy Sugeno untuk pengambilan keputusan dalam mengatur suhu dan pH air. Sistem ini juga dilengkapi dengan perangkat Peltier untuk mengontrol suhu dan cairan penambah serta penurun pH. Dengan adanya sistem ini, dengan adanya penelitian ini proses budidaya salamander axolotl dapat dilakukan dengan lebih mudah dan efektif, sehingga membantu mencegah kepunahan spesies yang terancam ini. Dari hasil pengujian diperoleh tinkat akurasi pembacaan pH sebesar 91,15% untuk pH 7,84,09% untuk pH 4 dan 95,01% untuk pH 9, pembacaan sensor suhu sebesar 97,82%.
</p>
<video controls class="mt-8 w-full max-w-3xl rounded-lg shadow-lg">
  <source src="/images/videoTA.mp4" type="video/mp4">
  Browser Anda tidak mendukung pemutar video.
</video>
<p class="text-lg leading-relaxed text-justify mt-6 inline-block">
    Pengujian sistem yang dilakukan pada sistem ini adalah dengan cara menurunkan atau menaikkan pH air dan melakukan analiis terhadap sistem sesuai dengan video di atas
    Penelitian tugas akhir ini mencapai beberapa kesimpulan sesuai dengan tujuan
tugas akhir. Beberapa dari kesimpulan tersebut adalah sebagai berikut : 
</p>
<p class="text-lg leading-relaxed text-justify">
1.Efektivitas Sistem Kontrol pH dan Suhu: Berdasarkan pengujian yang
    dilakukan, sistem kontrol pH dan suhu yang menggunakan metode fuzzy
    logic berhasil menjaga kondisi lingkungan yang optimal untuk salamander
    axolotl. Sistem ini mampu mengontrol pH air dalam rentang 6,5 - 8 , sesuai
    dengan kebutuhan habitat alami axolotl. Hal ini menunjukkan bahwa sistem
    fuzzy logic yang dirancang dapat merespons perubahan lingkungan dengan
    cepat dan akurat. 
</p>
<p class="text-lg leading-relaxed text-justify">
2.Didapat hasil tingkat akurasi yang berbeda-beda, pada pH 4 didapatkan hasil
    tingkat akurasi sebesar 84,09%, pada pH7 91,15% dan pH 9 95,01%. Untuk
    uji coba sensor suhu dilakukan dengan thermometer sebagai alat
    pembanding, didapatkan hasil akurasi sebesar 97.82%. hasil dari setiap
    parameter didapat dari melakukan 10 kali pengujian dan menghitung nilai
    presentase errornya.  
</p>
<p class="mt-4 text-justify">
    Selengkapnya bisa dilihat pada karya ilmiah di perpustakaan digital Telkom University:
    <a href="https://openlibrary.telkomuniversity.ac.id/home/catalog/id/214010/slug/rancang-bangun-sistem-pemantauan-dan-pengaturan-kualitas-air-akuarium-untuk-salamander-axolotl-dalam-bentuk-buku-karya-ilmiah.html" 
       target="_blank" 
       class="text-blue-500 hover:underline">
       Rancang Bangun Sistem Pemantauan dan Pengaturan Kualitas Air Akuarium
    </a>
</p>

    </div>
    <button onclick="history.back()" class="bg-gray-700 hover:bg-gray-800 text-white px-4 py-2 rounded">
    ← Kembali
</button>

</body>
</html>
