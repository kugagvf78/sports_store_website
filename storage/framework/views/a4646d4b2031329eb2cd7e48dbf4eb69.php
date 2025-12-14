<?php $__env->startSection('title', 'Thông tin cá nhân'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Alpine.js wrapper - BỌC TOÀN BỘ LAYOUT -->
        <div x-data="{
            activeSection: 'profile',
            init() {
                // Lấy section từ URL hash khi load trang
                const hash = window.location.hash.slice(1);
                const validSections = ['profile', 'orders', 'addresses', 'wishlists', 'reviews', 'change-password'];
                if (hash && validSections.includes(hash)) {
                    this.activeSection = hash;
                }
                
                // Lắng nghe sự kiện thay đổi hash (khi người dùng bấm nút back/forward)
                window.addEventListener('hashchange', () => {
                    const newHash = window.location.hash.slice(1);
                    if (newHash && validSections.includes(newHash)) {
                        this.activeSection = newHash;
                    }
                });
            },
            showSection(section) {
                this.activeSection = section;
                // Cập nhật URL hash
                window.location.hash = section;
            }
        }" class="flex flex-col lg:flex-row gap-6">

            <!-- Sidebar -->
            <div class="w-full lg:w-64 flex-shrink-0">
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <!-- User Info -->
                    <div class="p-6 text-center border-b border-gray-200">
                        <div class="w-24 h-24 mx-auto rounded-full overflow-hidden border-4 border-gray-200 mb-3">
                            <?php
                                // Kiểm tra xem avatar có phải URL hay không
                                $isUrl = $user->avatar && (
                                    str_starts_with($user->avatar, 'http://') ||
                                    str_starts_with($user->avatar, 'https://')
                                );

                                // Kiểm tra file local
                                $isLocalFile = $user->avatar &&
                                    !$isUrl &&
                                    file_exists(public_path('images/users/' . $user->avatar));

                                // Fallback SVG khi ảnh lỗi hoặc không có
                                $fallbackSvg = "data:image/svg+xml," . urlencode(
                                    '<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100">
                                        <rect fill="#dc2626" width="100" height="100"/>
                                        <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle"
                                            font-size="40" fill="white" font-family="Arial">'
                                            . strtoupper(substr($user->full_name, 0, 1)) .
                                        '</text>
                                    </svg>'
                                );
                            ?>

                            <img src="<?php if($isUrl): ?>
                                        <?php echo e($user->avatar); ?>

                                    <?php elseif($isLocalFile): ?>
                                        <?php echo e(asset('images/users/' . $user->avatar)); ?>

                                    <?php else: ?>
                                        <?php echo e($fallbackSvg); ?>

                                    <?php endif; ?>"
                                alt="Avatar"
                                class="w-full h-full object-cover"
                                onerror="this.onerror=null; this.src='<?php echo e($fallbackSvg); ?>';">
                        </div>

                        <h3 class="font-semibold text-gray-900"><?php echo e($user->full_name); ?></h3>
                        <p class="text-sm text-gray-600 mt-1"><?php echo e($user->email); ?></p>
                    </div>

                    <!-- Menu Items -->
                    <nav class="p-2">
                        <a href="#profile"
                            @click.prevent="showSection('profile')"
                            :class="activeSection === 'profile' ? 'bg-red-50 text-red-600' : 'text-gray-700'"
                            class="flex items-center px-4 py-3 hover:bg-red-50 rounded-lg transition-colors duration-200 mb-1">
                            <i class="fas fa-user w-5 text-center mr-3"
                                :class="activeSection === 'profile' ? 'text-red-600' : ''"></i>
                            <span>Thông tin cá nhân</span>
                        </a>

                        <a href="#orders"
                            @click.prevent="showSection('orders')"
                            :class="activeSection === 'orders' ? 'bg-red-50 text-red-600' : 'text-gray-700'"
                            class="flex items-center px-4 py-3 hover:bg-red-50 rounded-lg transition-colors duration-200 mb-1">
                            <i class="fas fa-shopping-bag w-5 text-center mr-3"
                                :class="activeSection === 'orders' ? 'text-red-600' : ''"></i>
                            <span>Đơn hàng</span>
                        </a>

                        <a href="#addresses"
                            @click.prevent="showSection('addresses')"
                            :class="activeSection === 'addresses' ? 'bg-red-50 text-red-600' : 'text-gray-700'"
                            class="flex items-center px-4 py-3 hover:bg-red-50 rounded-lg transition-colors duration-200 mb-1">
                            <i class="fas fa-map-marker-alt w-5 text-center mr-3"
                                :class="activeSection === 'addresses' ? 'text-red-600' : ''"></i>
                            <span>Sổ địa chỉ</span>
                        </a>


                        <div class="border-t border-gray-200 my-2"></div>

                        <a href="#change-password"
                            @click.prevent="showSection('change-password')"
                            :class="activeSection === 'change-password' ? 'bg-red-50 text-red-600' : 'text-gray-700'"
                            class="flex items-center px-4 py-3 hover:bg-red-50 rounded-lg transition-colors duration-200 mb-1">
                            <i class="fas fa-key w-5 text-center mr-3"
                                :class="activeSection === 'change-password' ? 'text-red-600' : ''"></i>
                            <span>Đổi mật khẩu</span>
                        </a>

                        <a href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="flex items-center px-4 py-3 text-red-600 hover:bg-red-50 rounded-lg transition-colors duration-200">
                            <i class="fas fa-sign-out-alt w-5 text-center mr-3"></i>
                            <span class="font-semibold">Đăng xuất</span>
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Main Content -->
            <div class="flex-1">

                <!-- Profile Section -->
                <div x-show="activeSection === 'profile'"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0">
                    <?php echo $__env->make('client.profile.sections.profile-info', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>

                <!-- Orders Section -->
                <div x-show="activeSection === 'orders'"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="display: none;">
                    <?php echo $__env->make('client.profile.sections.orders', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>

                <!-- Addresses Section -->
                <div x-show="activeSection === 'addresses'"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="display: none;">
                    <?php echo $__env->make('client.profile.sections.addresses', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>

                <!-- Wishlists Section -->
                <div x-show="activeSection === 'wishlists'"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="display: none;">
                    <?php echo $__env->make('client.profile.sections.wishlists', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>

                <!-- Reviews Section -->
                <div x-show="activeSection === 'reviews'"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="display: none;">
                    <?php echo $__env->make('client.profile.sections.reviews', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>

                <!-- Change Password Section -->
                <div x-show="activeSection === 'change-password'"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    style="display: none;">
                    <?php echo $__env->make('client.profile.sections.change-password', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Logout Form -->
<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="hidden">
    <?php echo csrf_field(); ?>
</form>

<!-- Alpine.js Components -->
<script>
    document.addEventListener('alpine:init', () => {
        // Password field component
        Alpine.data('passwordField', () => ({
            showPassword: false,
            togglePassword() {
                this.showPassword = !this.showPassword;
            }
        }));

        // Avatar upload component
        Alpine.data('avatarUpload', () => ({
            previewUrl: null,
            previewAvatar(event) {
                const file = event.target.files[0];
                if (!file) return;

                if (file.size > 2048 * 1024) {
                    alert('Ảnh không được vượt quá 2MB');
                    event.target.value = '';
                    return;
                }

                const allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
                if (!allowedTypes.includes(file.type)) {
                    alert('Chỉ chấp nhận file ảnh: JPG, PNG, GIF');
                    event.target.value = '';
                    return;
                }

                const reader = new FileReader();
                reader.onload = (e) => {
                    this.previewUrl = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }));
    });
</script>
<?php if(session('success') || session('error') || $errors->any()): ?>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        <?php if(session('success')): ?>
        showNotification(<?php echo json_encode(session('success'), 15, 512) ?>, 'success');
        <?php endif; ?>

        <?php if(session('error')): ?>
        showNotification(<?php echo json_encode(session('error'), 15, 512) ?>, 'error');
        <?php endif; ?>

        <?php if($errors-> any()): ?>
        <?php $__currentLoopData = $errors-> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        showNotification(<?php echo json_encode($error, 15, 512) ?>, 'error');
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    });
</script>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/client/profile/profile.blade.php ENDPATH**/ ?>