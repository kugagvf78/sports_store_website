<?php $__env->startSection('content'); ?>
<div class="max-w-lg mx-auto mt-3 p-6 bg-white">
    <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
        <div class="mb-6 text-center">
            <h2 class="text-3xl font-bold text-gray-900">
                Đăng ký tài khoản
            </h2>
            <p class="mt-2 text-sm text-gray-600">
                Tạo tài khoản mới để bắt đầu
            </p>
        </div>
        
        
        <?php if($errors->has('general')): ?>
            <div class="bg-red-50 text-red-600 border border-red-200 px-4 py-3 rounded-md mb-4 text-sm">
                <?php echo e($errors->first('general')); ?>

            </div>
        <?php endif; ?>

        
        <div class="mb-6">
            <a href="<?php echo e(route('auth.google')); ?>" 
               class="w-full flex items-center justify-center gap-3 bg-white text-gray-700 py-3 px-6 rounded-md text-base font-medium 
                      border border-gray-300 transition-all duration-200 
                      hover:bg-gray-50 hover:border-gray-400 hover:shadow-md
                      focus:outline-none focus:ring-2 focus:ring-gray-300/50
                      no-underline">
                <svg class="w-5 h-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                </svg>
                <span>Đăng ký bằng Google</span>
            </a>
        </div>

        
        <div class="relative mb-6">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-2 bg-white text-gray-500">Hoặc đăng ký bằng email</span>
            </div>
        </div>

        <form method="POST" action="<?php echo e(route('register')); ?>" class="mb-6" novalidate>
            <?php echo csrf_field(); ?>
            
            <?php
            // Tạo class cho từng field
            $usernameInputClass = $errors->has('username') 
                ? 'w-full px-4 py-3 border border-red-300 rounded-md text-base transition-all duration-200 focus:outline-none focus:ring-2 focus:border-red-600 focus:ring-red-600/20 hover:border-gray-400'
                : 'w-full px-4 py-3 border border-gray-300 rounded-md text-base transition-all duration-200 focus:outline-none focus:ring-2 focus:border-red-600 focus:ring-red-600/20 hover:border-gray-400';

            $emailInputClass = $errors->has('email') 
                ? 'w-full px-4 py-3 border border-red-300 rounded-md text-base transition-all duration-200 focus:outline-none focus:ring-2 focus:border-red-600 focus:ring-red-600/20 hover:border-gray-400'
                : 'w-full px-4 py-3 border border-gray-300 rounded-md text-base transition-all duration-200 focus:outline-none focus:ring-2 focus:border-red-600 focus:ring-red-600/20 hover:border-gray-400';
            $passwordInputClass = $errors->has('password') 
                ? 'w-full px-4 py-3 border border-red-300 rounded-md text-base transition-all duration-200 focus:outline-none focus:ring-2 focus:border-red-600 focus:ring-red-600/20 hover:border-gray-400 pr-12'
                : 'w-full px-4 py-3 border border-gray-300 rounded-md text-base transition-all duration-200 focus:outline-none focus:ring-2 focus:border-red-600 focus:ring-red-600/20 hover:border-gray-400 pr-12';

            $passwordConfirmationInputClass = $errors->has('password_confirmation') 
                ? 'w-full px-4 py-3 border border-red-300 rounded-md text-base transition-all duration-200 focus:outline-none focus:ring-2 focus:border-red-600 focus:ring-red-600/20 hover:border-gray-400 pr-12'
                : 'w-full px-4 py-3 border border-gray-300 rounded-md text-base transition-all duration-200 focus:outline-none focus:ring-2 focus:border-red-600 focus:ring-red-600/20 hover:border-gray-400 pr-12';

            $fullNameInputClass = $errors->has('full_name') 
                ? 'w-full px-4 py-3 border border-red-300 rounded-md text-base transition-all duration-200 focus:outline-none focus:ring-2 focus:border-red-600 focus:ring-red-600/20 hover:border-gray-400'
                : 'w-full px-4 py-3 border border-gray-300 rounded-md text-base transition-all duration-200 focus:outline-none focus:ring-2 focus:border-red-600 focus:ring-red-600/20 hover:border-gray-400';

            $phoneInputClass = $errors->has('phone') 
                ? 'w-full px-4 py-3 border border-red-300 rounded-md text-base transition-all duration-200 focus:outline-none focus:ring-2 focus:border-red-600 focus:ring-red-600/20 hover:border-gray-400'
                : 'w-full px-4 py-3 border border-gray-300 rounded-md text-base transition-all duration-200 focus:outline-none focus:ring-2 focus:border-red-600 focus:ring-red-600/20 hover:border-gray-400';                      
            ?>

            
            <div class="mb-5">
                <label for="username" class="block mb-1.5 font-medium text-gray-700">
                    Tên đăng nhập: <span class="text-red-500">*</span>
                </label>
                <input type="text" 
                    id="username" 
                    name="username" 
                    value="<?php echo e(old('username')); ?>" 
                    class="<?php echo e($usernameInputClass); ?>"
                    placeholder="Nhập tên đăng nhập (3-50 ký tự)"
                    required>
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

            
            <div class="mb-5">
                <label for="full_name" class="block mb-1.5 font-medium text-gray-700">
                    Họ tên: <span class="text-red-500">*</span>
                </label>
                <input type="text" 
                    id="full_name" 
                    name="full_name" 
                    value="<?php echo e(old('full_name')); ?>" 
                    class="<?php echo e($fullNameInputClass); ?>"
                    placeholder="Nhập họ và tên đầy đủ"
                    required>
                <?php $__errorArgs = ['full_name'];
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
                <label for="phone" class="block mb-1.5 font-medium text-gray-700">
                    Số điện thoại: <span class="text-red-500">*</span>
                </label>
                <input type="tel" 
                    id="phone" 
                    name="phone" 
                    value="<?php echo e(old('phone')); ?>" 
                    class="<?php echo e($phoneInputClass); ?>"
                    placeholder="Nhập số điện thoại (VD: 0912345678)"
                    required>
                <?php $__errorArgs = ['phone'];
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
                <label for="email" class="block mb-1.5 font-medium text-gray-700">
                    Email: <span class="text-red-500">*</span>
                </label>
                <input type="email" 
                    id="email" 
                    name="email" 
                    value="<?php echo e(old('email')); ?>" 
                    class="<?php echo e($emailInputClass); ?>"
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

            
            <div class="mb-5">
                <label for="password" class="block mb-1.5 font-medium text-gray-700">
                    Mật khẩu: <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <input type="password" 
                        id="password" 
                        name="password" 
                        class="<?php echo e($passwordInputClass); ?>"
                        placeholder="Nhập mật khẩu (tối thiểu 6 ký tự)"
                        autocomplete="new-password"
                        required>
                    <button type="button" 
                            id="togglePassword"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 focus:outline-none focus:text-gray-600"
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
                        class="<?php echo e($passwordConfirmationInputClass); ?>"
                        placeholder="Nhập lại mật khẩu"
                        autocomplete="new-password"
                        required>
                    <button type="button" 
                            id="togglePasswordConfirmation"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 focus:outline-none focus:text-gray-600"
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
                <?php $__errorArgs = ['password_confirmation'];
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
                    id="registerBtn"
                    class="w-full bg-red-600 text-white py-3 px-6 rounded-md text-base font-medium 
                           transition-all duration-200 cursor-pointer
                           hover:bg-red-700 hover:-translate-y-0.5 hover:shadow-lg 
                           focus:outline-none focus:ring-2 focus:ring-red-600/50
                           active:transform-none active:bg-red-800 
                           disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:transform-none">
                <span id="registerBtnText">Đăng ký</span>
            </button>
        </form>

        
        <p class="text-center mt-6 mb-0">
            <a href="<?php echo e(route('login')); ?>" 
               class="text-red-600 no-underline text-sm font-medium 
                      hover:text-red-700 hover:underline">
                Đã có tài khoản? Đăng nhập
            </a>
        </p>
    </div>
</div>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const registerBtn = document.getElementById('registerBtn');
    const registerBtnText = document.getElementById('registerBtnText');
    const passwordInput = document.getElementById('password');
    const passwordConfirmationInput = document.getElementById('password_confirmation');
    const togglePassword = document.getElementById('togglePassword');
    const togglePasswordConfirmation = document.getElementById('togglePasswordConfirmation');
    const eyeIcon = document.getElementById('eyeIcon');
    const eyeSlashIcon = document.getElementById('eyeSlashIcon');
    const eyeIconConfirm = document.getElementById('eyeIconConfirm');
    const eyeSlashIconConfirm = document.getElementById('eyeSlashIconConfirm');

    // Prevent double submission
    form.addEventListener('submit', function(e) {
        if (registerBtn.disabled) {
            e.preventDefault();
            return;
        }
        
        registerBtn.disabled = true;
        registerBtnText.textContent = 'Đang xử lý...';
        
        setTimeout(() => {
            registerBtn.disabled = false;
            registerBtnText.textContent = 'Đăng ký';
        }, 5000);
    });

    // Toggle password visibility
    if (togglePassword && passwordInput) {
        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            eyeIcon.classList.toggle('hidden');
            eyeSlashIcon.classList.toggle('hidden');
        });
    }

    // Toggle password confirmation visibility
    if (togglePasswordConfirmation && passwordConfirmationInput) {
        togglePasswordConfirmation.addEventListener('click', function() {
            const type = passwordConfirmationInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordConfirmationInput.setAttribute('type', type);
            eyeIconConfirm.classList.toggle('hidden');
            eyeSlashIconConfirm.classList.toggle('hidden');
        });
    }

    // Auto-focus username field if empty
    const usernameInput = document.getElementById('username');
    if (usernameInput && !usernameInput.value) {
        usernameInput.focus();
    }

    // Clear form validation errors on input
    const inputs = form.querySelectorAll('input');
    inputs.forEach(input => {
        input.addEventListener('input', function() {
            if (this.classList.contains('border-red-300')) {
                this.classList.remove('border-red-300');
                this.classList.add('border-gray-300');
                
                const errorMsg = this.parentNode.querySelector('.text-red-600') || 
                                this.parentNode.parentNode.querySelector('.text-red-600');
                if (errorMsg && errorMsg.tagName === 'P') {
                    errorMsg.style.display = 'none';
                }
            }
        });
    });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/client/login/register.blade.php ENDPATH**/ ?>