<?php $__env->startSection('title', 'Quên mật khẩu'); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-md mx-auto mt-3 mb-5 p-5 bg-white">
    <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
        <div class="mb-6 text-center">
            <h2 class="text-3xl font-bold text-gray-900">
                Quên mật khẩu
            </h2>
            <p class="mt-2 text-sm text-gray-600">
                Nhập email để nhận mã đặt lại mật khẩu
            </p>
        </div>
        
        
        <?php if(session('success')): ?>
            <div class="bg-green-50 text-green-600 border border-green-200 px-4 py-3 rounded-md mb-4 text-sm">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        
        <?php if($errors->any()): ?>
            <div class="bg-red-50 text-red-600 border border-red-200 px-4 py-3 rounded-md mb-4 text-sm">
                <ul class="list-none m-0 p-0">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="mb-1 last:mb-0">• <?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('password.email')); ?>" class="mb-6">
            <?php echo csrf_field(); ?>
            
            
            <div class="mb-5">
                <label for="email" class="block mb-1.5 font-medium text-gray-700">
                    Email: <span class="text-red-500">*</span>
                </label>
                <input type="email" 
                    id="email" 
                    name="email" 
                    value="<?php echo e(old('email')); ?>" 
                    class="w-full px-4 py-3 border <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php else: ?> border-gray-300 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-md text-base transition-all duration-200 focus:outline-none focus:ring-2 focus:border-red-600 focus:ring-red-600/20 hover:border-gray-400"
                    placeholder="Nhập địa chỉ email"
                    autocomplete="email"
                    required>
                <?php $__errorArgs = ['email'];
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
                    class="w-full bg-red-600 text-white py-3 px-6 rounded-md text-base font-medium 
                           transition-all duration-200 cursor-pointer
                           hover:bg-red-700 hover:-translate-y-0.5 hover:shadow-lg 
                           focus:outline-none focus:ring-2 focus:ring-red-600/50
                           active:transform-none active:bg-red-800">
                Gửi mã xác nhận
            </button>
        </form>

        
        <p class="text-center mt-4 mb-0">
            <a href="<?php echo e(route('login')); ?>" 
               class="text-red-600 no-underline text-sm font-medium 
                      hover:text-red-700 hover:underline">
                ← Quay lại đăng nhập
            </a>
        </p>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/client/login/forgot-password.blade.php ENDPATH**/ ?>