<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ALIF ANDIKA AMIN</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

</head>
<body class="font-sans antialiased bg-cover bg-center bg-no-repeat" style="background-image: url('/images/qwer.jpg');">
    

    <!-- Navbar -->
    <nav class="flex justify-between items-center p-4 bg-black text-white fixed top-0 w-full z-50">
        <div class="flex items-center">
            <img src="/images/Logo.png" class="w-10 mr-4" alt="Logo">
            <ul class="flex gap-6 text-sm relative">
            <li><a href="{{ route('tugas-akhir') }}" class="hover:underline">Tugas Akhir</a></li>

   <!-- Dropdown IOT Project -->
   <li class="relative group">
    <span class="cursor-pointer hover:underline"> Project</span>
    <div class="absolute left-0 mt-2 bg-white text-black rounded shadow-lg invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-200 w-40 z-50">
        <ul>
            <li><a href="{{ route('Obstacle-Avoidance-Robot') }}" class="block px-4 py-2 hover:bg-gray-100">Obstacle Avoidance Robot</a></li>
            <li><a href="{{ route('perpustakaan') }}" class="block px-4 py-2 hover:bg-gray-100">Perpustakaan</a></li>
            <li><a href="{{ route('INTEGRASI-DATA-PADA-PLC-UNTUK-PLATFORM-ANDROID') }}" class="block px-4 py-2 hover:bg-gray-100">Integrasi Data Pada PLC untuk Platform Android</a></li>
             @if(session()->has('username'))
        <li><a href="{{ route('project.create') }}" class="font-bold">+Tambah Project</a></li>
    @endif
        </ul>
    </div>
</li>


    <li><a href="{{ route('sertifikat') }}" class="hover:underline">Sertifikat</a></li>
</ul>

        </div>
        <div class="flex gap-4">
        <a href="{{ route('contact') }}" class="hover:underline flex items-center space-x-0">
    <img src="/images/kontak.png" alt="Contact Icon" class="w-10 h-10">
    <span>Contact</span>
</a>
      <a href="{{ route('Login') }}" class="hover:underline flex items-center space-x-0">
    <img src="/images/login1.png" alt="Login Icon" class="w-10 h-10">
    <span>Login</span>
</a>

        </div>
    </nav>

    <!-- Hero Section -->
<!-- Hero Section -->
<section class="h-screen w-full bg-black flex items-center pt-20 px-10">
    <div class="flex flex-col md:flex-row items-center gap-10 w-full">

        <!-- Foto Alif -->
        <div class="flex-shrink-0">
            <img src="/images/dika.JPG" alt="Alif Andika Amin" class="w-[400px] h-[400px] object-cover rounded-2xl shadow-lg border-4 border-white">
        </div>

        <!-- Deskripsi -->
        <div class="text-white max-w-2xl">
            <h1 class="text-[60px] md:text-[80px] leading-none font-bold ">ALIF ANDIKA AMIN</h1>
            <p class="text-lg leading-relaxed text-justify mt-6 inline-block">
                A Computer Engineering graduate from Telkom University with a GPA of 3.6. Has internship experience
                in the engineering field and has completed a BNSP-certified PLC training. Actively develops skills in
                technology and programming. An EPRT score of 523 demonstrates good English proficiency.
            </p>
            <a href="123" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg transition duration-300 mt-6 inline-block">
                CV 
            </a>
        </div>

        <!-- GIF 
        <div class="hidden md:block">
            <img src="/images/dota.gif" alt="GIF Showcase" class="rounded-lg shadow-lg max-w-[500px]">
        </div>-->

    </div>
</section>



</body>
</html>
