<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>SUG App Login</title>

<script src="https://cdn.tailwindcss.com"></script>

<style>
body {
    background: linear-gradient(to bottom, #4facfe, #c2e9fb);
}
</style>

</head>
<body class="flex items-center justify-center min-h-screen">


<div class="bg-white rounded-3xl shadow-xl w-full max-w-sm p-8">


    <!-- APP ICON -->
    <div class="flex justify-center mb-4">
        <img src="{{ url('./logo/icon-192.png') }}"
             class="w-20 h-20">
    </div>


    <!-- APP NAME -->
    <h2 class="text-center text-xl font-bold text-gray-700 mb-6">
        SUG App Login
    </h2>



    <!-- LOGIN FORM -->
    <form method="POST" action="{{ route('login') }}">
    @csrf


    <!-- EMAIL -->
    <div class="mb-4">

        <input type="email"
               name="email"
               placeholder="Email"
               required
               autofocus

               class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-400 outline-none">

    </div>



    <!-- PASSWORD -->
    <div class="mb-4">

        <input type="password"
               name="password"
               placeholder="Password"
               required

               class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-400 outline-none">

    </div>



    <!-- REMEMBER ME -->
    <div class="flex items-center mb-4">

        <input type="checkbox"
               name="remember_token"
               id="remember_token"
               class="w-5 h-5 text-blue-600">

        <label for="remember_token"
               class="ml-3 text-gray-600">

            Remember Me

        </label>

    </div>



    <!-- LOGIN BUTTON -->
    <button type="submit"

        class="w-full bg-blue-500 hover:bg-blue-600 text-white py-3 rounded-xl font-semibold transition">

        Login

    </button>


    </form>



    <!-- FOOTER -->
    <div class="text-center mt-6 text-gray-400 text-sm">
        © 2026 SUG App Developed by Mark Lester M. Lamanilao
    </div>


</div>


</body>
</html>