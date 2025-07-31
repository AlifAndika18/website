<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Project</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white p-8">
  <h2 class="text-2xl mb-4 font-bold">Tambah Project Baru</h2>

  <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-4">
      <label class="block">Judul Project</label>
      <input type="text" name="judul" required class="w-full p-2 text-black">
    </div>

    <div class="mb-4">
      <label class="block">Isi Project</label>
      <textarea name="isi" rows="5" required class="w-full p-2 text-black"></textarea>
    </div>

    <div class="mb-4">
      <label class="block">Gambar</label>
      <input type="file" name="gambar" required class="text-white">
    </div>

    <button type="submit" class="bg-blue-500 px-4 py-2 rounded">Upload</button>
  </form>
</body>
</html>
