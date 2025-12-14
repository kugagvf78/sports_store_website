<div class="bg-white rounded-lg shadow-sm border border-gray-200">
    <div class="p-6 border-b border-gray-200">
        <h2 class="text-2xl font-bold text-gray-900">Đổi mật khẩu</h2>
        <p class="text-gray-600 mt-1">Cập nhật mật khẩu cho tài khoản của bạn</p>
    </div>

    <form method="POST" action="<?php echo e(route('profile.sections.change-password')); ?>">
        <?php echo csrf_field(); ?>
        
        <div class="p-6 space-y-6">
            <!-- Current Password -->
            <div x-data="passwordField()">
                <label for="current_password" class="block text-sm font-medium text-gray-700 mb-2">
                    Mật khẩu hiện tại <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <input :type="showPassword ? 'text' : 'password'" 
                           id="current_password" 
                           name="current_password" 
                           class="w-full px-3 py-2 pr-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           placeholder="Nhập mật khẩu hiện tại"
                           required>
                    <button type="button" 
                            @click="togglePassword()" 
                            class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <i :class="showPassword ? 'fa-eye' : 'fa-eye-slash'" 
                           class="fas text-gray-400 hover:text-gray-600"></i>
                    </button>
                </div>
                <?php $__errorArgs = ['current_password'];
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

            <!-- New Password -->
            <div x-data="passwordField()">
                <label for="new_password" class="block text-sm font-medium text-gray-700 mb-2">
                    Mật khẩu mới <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <input :type="showPassword ? 'text' : 'password'" 
                           id="new_password" 
                           name="new_password" 
                           class="w-full px-3 py-2 pr-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           placeholder="Nhập mật khẩu mới"
                           required>
                    <button type="button" 
                            @click="togglePassword()" 
                            class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <i :class="showPassword ? 'fa-eye' : 'fa-eye-slash'" 
                           class="fas text-gray-400 hover:text-gray-600"></i>
                    </button>
                </div>
                <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <p class="mt-1 text-xs text-gray-500">Mật khẩu phải có ít nhất 6 ký tự</p>
            </div>

            <!-- Confirm New Password -->
            <div x-data="passwordField()">
                <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                    Xác nhận mật khẩu mới <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <input :type="showPassword ? 'text' : 'password'" 
                           id="new_password_confirmation" 
                           name="new_password_confirmation" 
                           class="w-full px-3 py-2 pr-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 <?php $__errorArgs = ['new_password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           placeholder="Nhập lại mật khẩu mới"
                           required>
                    <button type="button" 
                            @click="togglePassword()" 
                            class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <i :class="showPassword ? 'fa-eye' : 'fa-eye-slash'" 
                           class="fas text-gray-400 hover:text-gray-600"></i>
                    </button>
                </div>
                <?php $__errorArgs = ['new_password_confirmation'];
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
        </div>

        <!-- Form Actions -->
        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 rounded-b-lg">
            <div class="flex items-center justify-end space-x-3">
                <button type="reset" 
                        class="bg-gray-500 hover:bg-gray-600 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-200">
                    <i class="fas fa-undo mr-2"></i>Xóa
                </button>
                <button type="submit" 
                        class="bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-6 rounded-lg transition-colors duration-200">
                    <i class="fas fa-key mr-2"></i>Đổi mật khẩu
                </button>
            </div>
        </div>
    </form>

    <?php if(session('success')): ?>
        <div class="mx-6 mt-4 p-4 bg-green-50 border border-green-200 rounded-lg">
            <div class="flex items-center">
                <i class="fas fa-check-circle text-green-600 mr-2"></i>
                <p class="text-sm text-green-800"><?php echo e(session('success')); ?></p>
            </div>
        </div>
    <?php endif; ?>

    <?php if($errors->has('general')): ?>
        <div class="mx-6 mt-4 p-4 bg-red-50 border border-red-200 rounded-lg">
            <div class="flex items-center">
                <i class="fas fa-exclamation-triangle text-red-600 mr-2"></i>
                <p class="text-sm text-red-800"><?php echo e($errors->first('general')); ?></p>
            </div>
        </div>
    <?php endif; ?>

    <!-- Security Tips -->
    <div class="m-6 bg-blue-50 border border-blue-200 rounded-lg p-4">
        <div class="flex items-start">
            <i class="fas fa-info-circle text-blue-600 mt-0.5 mr-3"></i>
            <div>
                <h3 class="text-sm font-medium text-blue-800">Mẹo bảo mật</h3>
                <ul class="mt-2 text-sm text-blue-700 list-disc list-inside space-y-1">
                    <li>Sử dụng mật khẩu mạnh có ít nhất 8 ký tự</li>
                    <li>Kết hợp chữ hoa, chữ thường, số và ký tự đặc biệt</li>
                    <li>Không sử dụng thông tin cá nhân dễ đoán</li>
                    <li>Thay đổi mật khẩu định kỳ</li>
                </ul>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/client/profile/sections/change-password.blade.php ENDPATH**/ ?>