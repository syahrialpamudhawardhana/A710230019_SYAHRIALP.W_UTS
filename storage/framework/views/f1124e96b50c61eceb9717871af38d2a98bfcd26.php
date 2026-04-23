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
    <?php if(auth()->guard()->check()): ?>
        <?php echo e(auth()->user()->name); ?>


        <form method="POST" action="/logout" style="display:inline;">
            <?php echo csrf_field(); ?>
            <button style="margin-left:10px;">Logout</button>
        </form>
    <?php else: ?>
        <a href="/login" style="margin-right:10px;">Sign In</a>
        <a href="/register">Sign Up</a>
    <?php endif; ?>
</div>
</nav>

<div class="max-w-2xl mx-auto mt-6">
    <?php echo e($slot); ?>

</div>

</body>
</html><?php /**PATH D:\XboxGames\UTS_A710230009_Laravel-main\resources\views/components/layout.blade.php ENDPATH**/ ?>