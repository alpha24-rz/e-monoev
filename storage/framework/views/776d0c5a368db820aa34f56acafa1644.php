

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
    <div class="w-full max-w-md mx-4">
        <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-2xl border border-white/20 pt-8 px-8">

            
            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800 mb-2">
                    Selamat datang 👋
                </h1>
                <p class="text-gray-600 text-sm">
                    Masuk dengan akun anda untuk mengakses layanan
                </p>
            </div>

            
            <form method="POST" action="/">
                <?php echo csrf_field(); ?>

                
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Nama Pengguna
                    </label>
                    <input type="text" name="username" required autofocus
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 
                              focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                              outline-none transition">
                    <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Kata Sandi
                    </label>
                    <input type="password" name="password" required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 
                              focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                              outline-none transition">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-3 rounded-lg font-medium
                           hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 
                           focus:ring-offset-2 transition">
                    Masuk
                </button>
            </form>

            <div class="py-5 w-full text-center">
                <p class="text-sm text-gray-600 flex items-center justify-center">
                    Crafted by
                    <img src="/logo/icon.svg" alt="Logo" class="h-5 mx-2">
                    <span class="font-semibold text-blue-600">AFILA MEDIA KARYA</span>
                </p>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\alfak\Herd\emonev\resources\views/auth/login.blade.php ENDPATH**/ ?>