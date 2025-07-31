<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - Alif Andika Amin</title>
  <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black flex items-center justify-center h-screen">

  <div class="bg-gray-900 p-8 rounded-lg shadow-md w-full max-w-md text-white">
    <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>

    <div class="flex justify-center mb-2">
      <img src="/images/Logo.PNG" alt="Logo" class="w-[100px] h-[100px] object-cover rounded-2xl shadow-lg border-4 border-black">
    </div>

    <form action="/login" method="POST">
      @csrf <!-- Token CSRF Laravel -->

      <!-- Email -->
      <div class="mb-4">
        <label for="email" class="block text-sm font-medium mb-1">Email</label>
        <input type="email" id="email" name="email" required
          class="w-full px-4 py-2 border border-gray-700 rounded-md bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Password -->
      <div class="mb-6">
        <label for="password" class="block text-sm font-medium mb-1">Password</label>
        <input type="password" id="password" name="password" required
          class="w-full px-4 py-2 border border-gray-700 rounded-md bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Submit Button -->
      <button type="submit"
        class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-300">
        Login
      </button>
    </form>
  </div>

</body>
</html>
