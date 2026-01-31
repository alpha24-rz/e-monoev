<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'BAPPEDA Kabupaten'); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <?php echo app('Illuminate\Foundation\Vite')(['./resources/css/app.css']); ?>
</head>
<body class="h-screen">
    <div class="bg-[url('/image/bg-main.png')] bg-cover bg-center bg-no-repeat h-full w-full">
        
        
        <header class="absolute top-5 left-5 flex items-center">
            <img src="/logo/icon.svg" alt="logo" class="h-16 md:h-20">
            <div class="pl-4">
                <p class="text-sm md:text-sm font-bold text-gray-600">BAPPEDA</p>
                <p class="text-sm md:text-sm font-bold text-gray-600">KABUPATEN</p>
                <p class="text-sm md:text-sm font-bold text-gray-600">AFILA MEDIA KARYA</p>
            </div>
        </header>

        
        <main class="h-full flex items-center justify-center">
            <?php echo $__env->yieldContent('content'); ?>
        </main>

    </div>
</body>
</html><?php /**PATH C:\Users\alfak\Herd\emonev\resources\views/layouts/app.blade.php ENDPATH**/ ?>