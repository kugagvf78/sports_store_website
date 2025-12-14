

<div class="bg-white rounded-lg shadow-sm border border-gray-200">
    <div class="p-6 border-b border-gray-200">
        <h2 class="text-2xl font-bold text-gray-900">Thông tin cá nhân</h2>
        <p class="text-gray-600 mt-1">Quản lý thông tin tài khoản của bạn</p>
    </div>

    <form method="POST" action="<?php echo e(route('profile.update')); ?>" enctype="multipart/form-data" id="profileForm">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="p-6 space-y-6">
            <!-- Avatar Section -->
            <div class="flex items-center space-x-6 pb-6 border-b border-gray-200">
                <div class="relative">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-gray-200 shadow-lg">
                        <?php
                        $avatar = null;

                        if ($user->avatar) {
                        if (str_starts_with($user->avatar, 'http://') || str_starts_with($user->avatar, 'https://')) {
                        $avatar = $user->avatar;
                        } elseif (file_exists(public_path('images/users/' . $user->avatar))) {
                        $avatar = asset('images/users/' . $user->avatar);
                        }
                        }

                        // Nếu không có avatar → dùng avatar mặc định
                        if (!$avatar) {
                        $avatar = asset('images/default-avatar.png');
                        }
                        ?>

                        <img id="avatarPreview"
                            src="<?php echo e($avatar); ?>"
                            class="w-full h-full object-cover rounded-full">


                        <img id="avatarPreview"
                            src="<?php if($isUrl): ?><?php echo e($user->avatar); ?><?php elseif($isLocalFile): ?><?php echo e(asset('images/users/' . $user->avatar)); ?><?php else: ?><?php echo e(asset('images/default-avatar.png')); ?><?php endif; ?>"
                            alt="Avatar"
                            class="w-full h-full object-cover"
                            onerror="this.onerror=null; this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22100%22 height=%22100%22><rect fill=%22%23dc2626%22 width=%22100%22 height=%22100%22/><text x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 font-size=%2240%22 fill=%22white%22 font-family=%22Arial%22><?php echo e(strtoupper(substr($user->full_name, 0, 1))); ?></text></svg>';">
                    </div>

                    <label for="avatar"
                        class="absolute bottom-0 right-0 bg-red-600 hover:bg-red-700 text-white w-8 h-8 flex items-center justify-center rounded-full cursor-pointer shadow-lg transition-colors duration-200"
                        title="Thay đổi ảnh đại diện">
                        <i class="fas fa-camera text-sm"></i>
                        <input type="file"
                            id="avatar"
                            name="avatar"
                            accept="image/jpeg,image/png,image/jpg,image/gif"
                            class="hidden"
                            onchange="previewAvatar(this)">
                    </label>
                </div>
                <div>
                    <?php if($user->google_id): ?>
                    <div class="flex items-center mb-2">
                        <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-blue-100 text-blue-800">
                            <svg class="w-3 h-3 mr-1" viewBox="0 0 24 24">
                                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4" />
                                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853" />
                                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05" />
                                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335" />
                            </svg>
                            Tài khoản Google
                        </span>
                    </div>
                    <?php endif; ?>
                    <p class="text-sm text-gray-600">Ảnh đại diện của bạn</p>
                    <p class="text-xs text-gray-500 mt-1">JPG, PNG, GIF - Tối đa 2MB</p>
                    <?php if($user->google_id): ?>
                    <p class="text-xs text-blue-600 mt-1">
                        <i class="fas fa-info-circle mr-1"></i>
                        Bạn có thể upload ảnh mới để thay thế ảnh Google
                    </p>
                    <?php endif; ?>
                    <?php $__errorArgs = ['avatar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-2 text-sm text-red-600"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <!-- Full Name -->
            <div>
                <label for="full_name" class="block text-sm font-medium text-gray-700 mb-2">
                    Họ và tên <span class="text-red-500">*</span>
                </label>
                <input type="text"
                    id="full_name"
                    name="full_name"
                    value="<?php echo e(old('full_name', $user->full_name)); ?>"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 <?php $__errorArgs = ['full_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    placeholder="Nhập họ và tên"
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

            <!-- Username -->
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-2">
                    Tên đăng nhập <span class="text-red-500">*</span>
                </label>
                <input type="text"
                    id="username"
                    name="username"
                    value="<?php echo e(old('username', $user->username)); ?>"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    placeholder="Nhập tên đăng nhập"
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
                <p class="mt-1 text-xs text-gray-500">Chỉ được chứa chữ cái, số và dấu gạch dưới (_)</p>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                    Email <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <input type="email"
                        id="email"
                        name="email"
                        value="<?php echo e(old('email', $user->email)); ?>"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <?php echo e($user->google_id ? 'bg-gray-50' : ''); ?>"
                        placeholder="Nhập email"
                        <?php echo e($user->google_id ? 'readonly' : 'required'); ?>>
                    <?php if($user->google_id): ?>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        <i class="fas fa-lock text-gray-400 text-sm"></i>
                    </div>
                    <?php endif; ?>
                </div>
                <?php if($user->google_id): ?>
                <p class="mt-1 text-xs text-gray-500">
                    <i class="fas fa-info-circle mr-1"></i>
                    Email từ tài khoản Google không thể thay đổi
                </p>
                <?php endif; ?>
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

            <!-- Phone -->
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                    Số điện thoại
                </label>
                <input type="text"
                    id="phone"
                    name="phone"
                    value="<?php echo e(old('phone', $user->phone)); ?>"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    placeholder="Nhập số điện thoại (tùy chọn)">
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
                <p class="mt-1 text-xs text-gray-500">Định dạng: 0901234567 hoặc +84901234567</p>
            </div>

            <!-- Birthday and Gender -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Birthday -->
                <div>
                    <label for="birthday" class="block text-sm font-medium text-gray-700 mb-2">
                        Ngày sinh
                    </label>
                    <input type="date"
                        id="birthday"
                        name="birthday"
                        value="<?php echo e(old('birthday', $user->birthday ? $user->birthday->format('Y-m-d') : '')); ?>"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 <?php $__errorArgs = ['birthday'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        max="<?php echo e(date('Y-m-d')); ?>">
                    <?php $__errorArgs = ['birthday'];
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

                <!-- Gender -->
                <div>
                    <label for="gender" class="block text-sm font-medium text-gray-700 mb-2">
                        Giới tính
                    </label>
                    <select id="gender"
                        name="gender"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <option value="">Chọn giới tính</option>
                        <option value="1" <?php echo e(old('gender', $user->gender) == 1 ? 'selected' : ''); ?>>Nam</option>
                        <option value="0" <?php echo e(old('gender', $user->gender) == 0 ? 'selected' : ''); ?>>Nữ</option>
                    </select>
                    <?php $__errorArgs = ['gender'];
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

            <!-- Account Status -->
            <div class="pt-6 border-t border-gray-200">
                <label class="block text-sm font-medium text-gray-700 mb-2">Trạng thái tài khoản</label>
                <div class="flex items-center">
                    <?php if($user->isActive()): ?>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                        <i class="fas fa-check-circle mr-1"></i>
                        <?php echo e($user->status_text); ?>

                    </span>
                    <?php elseif($user->isBanned()): ?>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-800">
                        <i class="fas fa-ban mr-1"></i>
                        <?php echo e($user->status_text); ?>

                    </span>
                    <?php else: ?>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800">
                        <i class="fas fa-pause-circle mr-1"></i>
                        <?php echo e($user->status_text); ?>

                    </span>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Account Info -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-6 border-t border-gray-200">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Ngày tạo tài khoản</label>
                    <p class="text-gray-900 flex items-center">
                        <i class="fas fa-calendar mr-2 text-gray-400"></i>
                        <?php echo e($user->created_at ? $user->created_at->format('d/m/Y H:i') : 'Không xác định'); ?>

                    </p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Cập nhật lần cuối</label>
                    <p class="text-gray-900 flex items-center">
                        <i class="fas fa-clock mr-2 text-gray-400"></i>
                        <?php echo e($user->updated_at ? $user->updated_at->format('d/m/Y H:i') : 'Không xác định'); ?>

                    </p>
                </div>
            </div>

            
            <?php if($user->google_id): ?>
            <div class="pt-6 border-t border-gray-200">
                <label class="block text-sm font-medium text-gray-700 mb-2">Liên kết tài khoản</label>
                <div class="flex items-center space-x-2 bg-blue-50 border border-blue-200 rounded-lg p-3">
                    <svg class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4" />
                        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853" />
                        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05" />
                        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335" />
                    </svg>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-blue-900">Đã liên kết với Google</p>
                        <p class="text-xs text-blue-700"><?php echo e($user->email); ?></p>
                    </div>
                    <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-blue-100 text-blue-800">
                        <i class="fas fa-check mr-1"></i>Đã kết nối
                    </span>
                </div>
            </div>
            <?php endif; ?>
        </div>

        <!-- Form Actions -->
        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 rounded-b-lg">
            <div class="flex items-center justify-end space-x-3">
                <button type="reset"
                    class="bg-gray-500 hover:bg-gray-600 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-200">
                    <i class="fas fa-undo mr-2"></i>Khôi phục
                </button>
                <button type="submit"
                    class="bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-6 rounded-lg transition-colors duration-200">
                    <i class="fas fa-save mr-2"></i>Cập nhật thông tin
                </button>
            </div>
        </div>
    </form>
</div>


<script>
    function previewAvatar(input) {
        if (input.files && input.files[0]) {
            const file = input.files[0];

            // Validate file type
            const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
            if (!validTypes.includes(file.type)) {
                alert('Vui lòng chọn file ảnh (JPG, PNG, GIF)');
                input.value = '';
                return;
            }

            // Validate file size (2MB)
            if (file.size > 2 * 1024 * 1024) {
                alert('Kích thước file không được vượt quá 2MB');
                input.value = '';
                return;
            }

            // Create preview
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('avatarPreview').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    }
</script><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/client/profile/sections/profile-info.blade.php ENDPATH**/ ?>