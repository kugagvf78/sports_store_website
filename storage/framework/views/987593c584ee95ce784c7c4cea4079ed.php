<?php $__env->startSection('title', 'Xác thực OTP'); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-md mx-auto mt-3 mb-5 p-5 bg-white">
    <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
        <div class="mb-6 text-center">
            <h2 class="text-3xl font-bold text-gray-900">
                Xác thực OTP
            </h2>
            <p class="mt-2 text-sm text-gray-600">
                Nhập mã OTP đã được gửi đến email
            </p>
            <div class="mt-3 inline-block bg-gray-100 px-4 py-2 rounded-md">
                <span class="text-xs text-gray-500">Email:</span>
                <span class="text-sm font-medium text-gray-900 ml-1"><?php echo e(session('reset_email')); ?></span>
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

        <form method="POST" action="<?php echo e(route('password.verify.otp')); ?>" class="mb-6">
            <?php echo csrf_field(); ?>
            
            
            <div class="mb-5">
                <label for="otp" class="block mb-1.5 font-medium text-gray-700">
                    Mã OTP (6 chữ số): <span class="text-red-500">*</span>
                </label>
                <input type="text" 
                    id="otp" 
                    name="otp" 
                    maxlength="6"
                    value="<?php echo e(old('otp')); ?>" 
                    class="w-full px-4 py-3 border <?php $__errorArgs = ['otp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php else: ?> border-gray-300 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rounded-md text-base text-center tracking-widest font-bold text-2xl transition-all duration-200 focus:outline-none focus:ring-2 focus:border-red-600 focus:ring-red-600/20 hover:border-gray-400"
                    placeholder="000000"
                    pattern="[0-9]{6}"
                    inputmode="numeric"
                    autocomplete="one-time-code"
                    required>
                <?php $__errorArgs = ['otp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                
                <p class="mt-2 text-xs text-gray-500 text-center">
                    ⏱️ Mã OTP có hiệu lực trong 5 phút
                </p>
            </div>

            
            <button type="submit" 
                    class="w-full bg-red-600 text-white py-3 px-6 rounded-md text-base font-medium 
                           transition-all duration-200 cursor-pointer
                           hover:bg-red-700 hover:-translate-y-0.5 hover:shadow-lg 
                           focus:outline-none focus:ring-2 focus:ring-red-600/50
                           active:transform-none active:bg-red-800">
                Xác thực OTP
            </button>
        </form>

        
        <div class="text-center mb-4">
            <p class="text-sm text-gray-600 mb-2">Không nhận được mã?</p>
            <button id="resendBtn" 
                    type="button"
                    class="text-red-600 text-sm font-medium hover:text-red-700 hover:underline disabled:text-gray-400 disabled:cursor-not-allowed disabled:no-underline">
                Gửi lại mã OTP <span id="countdown"></span>
            </button>
        </div>

        
        <p class="text-center mt-4 mb-0">
            <a href="<?php echo e(route('password.request')); ?>" 
               class="text-red-600 no-underline text-sm font-medium 
                      hover:text-red-700 hover:underline">
                ← Quay lại
            </a>
        </p>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const otpInput = document.getElementById('otp');
    const resendBtn = document.getElementById('resendBtn');
    const countdownSpan = document.getElementById('countdown');
    
    let countdownTime = 60; // 60 giây
    let countdownInterval;

    // Auto focus OTP input
    otpInput.focus();

    // Chỉ cho phép nhập số
    otpInput.addEventListener('input', function(e) {
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    // Khởi động countdown
    function startCountdown() {
        resendBtn.disabled = true;
        countdownTime = 60;
        
        countdownInterval = setInterval(() => {
            countdownTime--;
            countdownSpan.textContent = `(${countdownTime}s)`;
            
            if (countdownTime <= 0) {
                clearInterval(countdownInterval);
                resendBtn.disabled = false;
                countdownSpan.textContent = '';
            }
        }, 1000);
    }

    // Bắt đầu countdown khi trang load
    startCountdown();

    // Xử lý gửi lại OTP
    resendBtn.addEventListener('click', async function() {
        if (this.disabled) return;

        try {
            const response = await fetch('<?php echo e(route("password.resend.otp")); ?>', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                }
            });

            const data = await response.json();

            if (data.success) {
                // Hiển thị thông báo thành công
                const successDiv = document.createElement('div');
                successDiv.className = 'bg-green-50 text-green-600 border border-green-200 px-4 py-3 rounded-md mb-4 text-sm';
                successDiv.textContent = data.message;
                otpInput.closest('form').insertAdjacentElement('beforebegin', successDiv);
                
                // Tự động ẩn sau 3 giây
                setTimeout(() => successDiv.remove(), 3000);
                
                // Bắt đầu countdown lại
                startCountdown();
                
                // Clear input OTP
                otpInput.value = '';
                otpInput.focus();
            } else {
                alert(data.message || 'Có lỗi xảy ra. Vui lòng thử lại.');
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Có lỗi xảy ra. Vui lòng thử lại.');
        }
    });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/client/login/verify-otp.blade.php ENDPATH**/ ?>