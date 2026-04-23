<!DOCTYPE html>
<html>
<head>
    <title>Chirper</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<nav class="bg-white p-4 shadow flex justify-between">
    <h1 class="font-bold">🐦 Chirper</h1> 
    <div style="float:right;">
    @auth
        {{ auth()->user()->name }}

        <form method="POST" action="/logout" style="display:inline;">
            @csrf
            <button style="margin-left:10px;">Logout</button>
        </form>
    @else
        <a href="/login" style="margin-right:10px;">Sign In</a>
        <a href="/register">Sign Up</a>
    @endauth
</div>
</nav>

<div class="max-w-2xl mx-auto mt-6">
    {{ $slot }}
</div>

</body>
</html>