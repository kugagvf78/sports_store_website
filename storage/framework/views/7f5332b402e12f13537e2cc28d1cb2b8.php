<?php $__env->startSection('title', 'Đặt lại mật khẩu'); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-md mx-auto mt-3 mb-5 p-5 bg-white">
    <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
        <div class="mb-6 text-center">
            <h2 class="text-3xl font-bold text-gray-900">
                Đặt lại mật khẩu
            </h2>
            <p class="mt-2 text-sm text-gray-600">
                Nhập mật khẩu mới cho tài khoản
            </p>
            <div class="mt-3 inline-block bg-gray-100 px-4 py-2 rounded-md">
                <span class="text-xs text-gray-500">Email:</span>
                <span class="text-sm font-medium text-gray-900 ml-1"><?php echo e($email); ?></span>
            </div>
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

        <form method="POST" action="<?php echo e(route('password.update')); ?>" class="mb-6">
            <?php echo csrf_field(); ?>
            
            
            <div class="mb-5">
                <label for="password" class="block mb-1.5 font-medium text-gray-700">
                    Mật khẩu mới: <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <input type="password" 
                        id="password" 
                        name="password" 
                        class="w-full px-4 py-3 pr-12 border <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php else: ?> border-gray-300 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-md text-base transition-all duration-200 focus:outline-none focus:ring-2 focus:border-red-600 focus:ring-red-600/20 hover:border-gray-400"
                        placeholder="Nhập mật khẩu mới"
                        required>
                    <button type="button" 
                            id="togglePassword"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 focus:outline-none"
                            tabindex="-1">
                        <svg id="eyeIcon" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        <svg id="eyeSlashIcon" class="h-5 w-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L8.464 8.464M9.878 9.878l.785-.785m4.242 4.242L15.95 15.95m0 0l1.414 1.414M15.95 15.95l.785-.785M2.5 2.5L21.5 21.5"></path>
                        </svg>
                    </button>
                </div>
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

            
            <div class="mb-5">
                <label for="password_confirmation" class="block mb-1.5 font-medium text-gray-700">
                    Xác nhận mật khẩu: <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <input type="password" 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        class="w-full px-4 py-3 pr-12 border border-gray-300 rounded-md text-base transition-all duration-200 focus:outline-none focus:ring-2 focus:border-red-600 focus:ring-red-600/20 hover:border-gray-400"
                        placeholder="Nhập lại mật khẩu mới"
                        required>
                    <button type="button" 
                            id="togglePasswordConfirm"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 focus:outline-none"
                            tabindex="-1">
                        <svg id="eyeIconConfirm" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        <svg id="eyeSlashIconConfirm" class="h-5 w-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L8.464 8.464M9.878 9.878l.785-.785m4.242 4.242L15.95 15.95m0 0l1.414 1.414M15.95 15.95l.785-.785M2.5 2.5L21.5 21.5"></path>
                        </svg>
                    </button>
                </div>
            </div>

            
            <button type="submit" 
                    class="w-full bg-red-600 text-white py-3 px-6 rounded-md text-base font-medium 
                           transition-all duration-200 cursor-pointer
                           hover:bg-red-700 hover:-translate-y-0.5 hover:shadow-lg 
                           focus:outline-none focus:ring-2 focus:ring-red-600/50
                           active:transform-none active:bg-red-800">
                Đặt lại mật khẩu
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Toggle password visibility
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');
    const eyeSlashIcon = document.getElementById('eyeSlashIcon');

    if (togglePassword && passwordInput) {
        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            eyeIcon.classList.toggle('hidden');
            eyeSlashIcon.classList.toggle('hidden');
        });
    }

    // Toggle password confirmation visibility
    const togglePasswordConfirm = document.getElementById('togglePasswordConfirm');
    const passwordConfirmInput = document.getElementById('password_confirmation');
    const eyeIconConfirm = document.getElementById('eyeIconConfirm');
    const eyeSlashIconConfirm = document.getElementById('eyeSlashIconConfirm');

    if (togglePasswordConfirm && passwordConfirmInput) {
        togglePasswordConfirm.addEventListener('click', function() {
            const type = passwordConfirmInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordConfirmInput.setAttribute('type', type);
            eyeIconConfirm.classList.toggle('hidden');
            eyeSlashIconConfirm.classList.toggle('hidden');
        });
    }
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/client/login/reset-password.blade.php ENDPATH**/ ?>