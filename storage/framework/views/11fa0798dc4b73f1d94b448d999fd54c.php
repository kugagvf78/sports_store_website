<?php $__env->startSection('content'); ?>
<div class="max-w-6xl mx-auto" x-data="{ tab: 'profile' }">

    
    <div id="toast-container" class="fixed top-4 right-4 z-50 space-y-3"></div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <!-- Sidebar -->
        <div class="lg:col-span-1 space-y-6">
            
            <!-- 🧍 Thông tin cá nhân -->
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center gap-2">
                    <i class="fa-solid fa-user text-red-600"></i> Thông tin cá nhân
                </h3>

                <div class="flex flex-col items-center text-center mb-4">
                    <div class="relative mb-3">
                        <img src="<?php echo e($admin->avatar ? asset('images/users/'.$admin->avatar) : asset('images/users/default-avatar.png')); ?>"
                             class="w-28 h-28 rounded-full object-cover border-4 border-gray-100 shadow-md"
                             id="main-avatar">
                        <div class="absolute bottom-1 right-1 w-4 h-4 bg-green-500 rounded-full border-2 border-white"></div>
                    </div>

                    <h2 class="text-xl font-bold text-gray-900"><?php echo e($admin->full_name); ?></h2>
                    <p class="text-gray-600 text-sm mt-1">
                        <i class="fa-solid fa-envelope text-xs mr-1"></i> <?php echo e($admin->email); ?>

                    </p>
                    <?php if($admin->phone): ?>
                    <p class="text-gray-600 text-sm mt-0.5">
                        <i class="fa-solid fa-phone text-xs mr-1"></i> <?php echo e($admin->phone); ?>

                    </p>
                    <?php endif; ?>
                </div>

                <div class="space-y-3 border-t pt-4 text-sm text-gray-700">
                    <div class="flex justify-between">
                        <span class="font-medium text-gray-600">Giới tính:</span>
                        <span>
                            <?php if($admin->gender == 1): ?> Nam
                            <?php elseif($admin->gender == 0): ?> Nữ
                            <?php else: ?> Khác
                            <?php endif; ?>
                        </span>
                    </div>
                    <div class="flex justify-between">
                        <span class="font-medium text-gray-600">Ngày sinh:</span>
                        <span><?php echo e($admin->birthday ? $admin->birthday->format('d/m/Y') : '—'); ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="font-medium text-gray-600">Tham gia từ:</span>
                        <span><?php echo e($admin->created_at->format('d/m/Y')); ?></span>
                    </div>
                </div>
            </div>

            <!-- ⚡ Thao tác nhanh -->
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center gap-2">
                    <i class="fa-solid fa-bolt text-yellow-600"></i> Thao tác nhanh
                </h3>
                
                <div class="space-y-2">
                    <button 
                        @click="tab = 'password'"
                        class="w-full flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-50 transition text-left group">
                        <div class="w-10 h-10 bg-blue-50 group-hover:bg-blue-100 rounded-lg flex items-center justify-center transition">
                            <i class="fa-solid fa-key text-blue-600"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">Đổi mật khẩu</p>
                            <p class="text-xs text-gray-500">Cập nhật mật khẩu bảo mật</p>
                        </div>
                        <i class="fa-solid fa-chevron-right text-gray-400 text-sm"></i>
                    </button>

                    <button 
                        @click="tab = 'profile'; scrollToSection('edit-avatar')"
                        class="w-full flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-50 transition text-left group">
                        <div class="w-10 h-10 bg-red-50 group-hover:bg-red-100 rounded-lg flex items-center justify-center transition">
                            <i class="fa-solid fa-camera text-red-600"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">Chỉnh sửa hồ sơ</p>
                            <p class="text-xs text-gray-500">Cập nhật thông tin cá nhân</p>
                        </div>
                        <i class="fa-solid fa-chevron-right text-gray-400 text-sm"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-6">

            <!-- 📝 Chỉnh sửa hồ sơ -->
            <div x-show="tab === 'profile'" x-transition.opacity.duration.250ms class="bg-white rounded-2xl shadow-sm p-6">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-red-50 rounded-lg flex items-center justify-center">
                        <i class="fa-solid fa-user-pen text-red-600"></i>
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold text-gray-900">Chỉnh sửa hồ sơ</h2>
                        <p class="text-sm text-gray-500">Cập nhật thông tin cá nhân của bạn</p>
                    </div>
                </div>

                <form action="<?php echo e(route('admin.profile.update')); ?>" method="POST" enctype="multipart/form-data" class="space-y-6">
                    <?php echo csrf_field(); ?>

                    <!-- Avatar Upload với Alpine.js -->
                    <div id="edit-avatar" 
                         x-data="avatarUpload()"
                         class="border-2 border-dashed border-gray-200 rounded-xl p-6 hover:border-red-300 transition">
                        <div class="flex flex-col sm:flex-row items-center gap-6">
                            <div class="relative">
                                <img :src="previewUrl"
                                     class="w-24 h-24 rounded-full object-cover border-4 border-gray-100 shadow-md"
                                     alt="Avatar preview">
                                
                                <!-- Hiển thị loading spinner khi đang xử lý -->
                                <div x-show="isLoading" 
                                     class="absolute inset-0 bg-black bg-opacity-50 rounded-full flex items-center justify-center">
                                    <i class="fa-solid fa-spinner fa-spin text-white text-2xl"></i>
                                </div>
                                
                                <!-- Nút xóa ảnh preview -->
                                <button 
                                    x-show="hasNewImage"
                                    @click="resetImage()"
                                    type="button"
                                    class="absolute -top-2 -right-2 w-8 h-8 bg-red-500 hover:bg-red-600 text-white rounded-full flex items-center justify-center shadow-lg transition"
                                    title="Xóa ảnh đã chọn">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                            
                            <div class="flex-1 text-center sm:text-left">
                                <label class="cursor-pointer inline-flex items-center gap-2 bg-gradient-to-r from-red-600 to-pink-600 hover:from-red-700 hover:to-pink-700 text-white px-5 py-2.5 rounded-lg font-medium transition shadow-md hover:shadow-lg">
                                    <i class="fa-solid fa-camera"></i>
                                    <span x-text="hasNewImage ? 'Chọn ảnh khác' : 'Chọn ảnh mới'"></span>
                                    <input 
                                        type="file" 
                                        name="avatar" 
                                        class="hidden" 
                                        @change="handleFileChange($event)" 
                                        accept="image/*"
                                        x-ref="fileInput">
                                </label>
                                <p class="text-xs text-gray-500 mt-2">JPG, PNG hoặc GIF. Tối đa 2MB</p>
                                
                                <!-- Hiển thị tên file đã chọn -->
                                <p x-show="fileName" 
                                   x-text="'Đã chọn: ' + fileName"
                                   class="text-xs text-green-600 mt-1 font-medium"></p>
                                
                                <!-- Hiển thị lỗi nếu có -->
                                <p x-show="error" 
                                   x-text="error"
                                   class="text-xs text-red-600 mt-1 font-medium"></p>
                            </div>
                        </div>
                    </div>

                    <!-- Form Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <?php if (isset($component)) { $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96 = $attributes; } ?>
<?php $component = App\View\Components\Form\Input::resolve(['name' => 'full_name','label' => 'Họ và tên','value' => ''.e($admin->full_name).'','placeholder' => 'Nhập họ tên'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $attributes = $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $component = $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96 = $attributes; } ?>
<?php $component = App\View\Components\Form\Input::resolve(['type' => 'email','name' => 'email','label' => 'Email','value' => ''.e($admin->email).'','placeholder' => 'example@gmail.com'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $attributes = $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $component = $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96 = $attributes; } ?>
<?php $component = App\View\Components\Form\Input::resolve(['name' => 'phone','label' => 'Số điện thoại','value' => ''.e($admin->phone).'','placeholder' => 'Nhập số điện thoại'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $attributes = $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $component = $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Ngày sinh</label>
                            <input 
                                type="date" 
                                name="birthday" 
                                value="<?php echo e(old('birthday', optional($admin->birthday)->format('Y-m-d'))); ?>"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                        </div>
                        <?php if (isset($component)) { $__componentOriginal36c368e88b7801a467b55faa78ace34f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36c368e88b7801a467b55faa78ace34f = $attributes; } ?>
<?php $component = App\View\Components\Form\Select::resolve(['name' => 'gender','label' => 'Giới tính','options' => ['1' => 'Nam', '0' => 'Nữ', '2' => 'Khác'],'selected' => $admin->gender,'placeholder' => 'Chọn giới tính'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Select::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal36c368e88b7801a467b55faa78ace34f)): ?>
<?php $attributes = $__attributesOriginal36c368e88b7801a467b55faa78ace34f; ?>
<?php unset($__attributesOriginal36c368e88b7801a467b55faa78ace34f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal36c368e88b7801a467b55faa78ace34f)): ?>
<?php $component = $__componentOriginal36c368e88b7801a467b55faa78ace34f; ?>
<?php unset($__componentOriginal36c368e88b7801a467b55faa78ace34f); ?>
<?php endif; ?>
                    </div>

                    <div class="flex justify-end pt-4 border-t">
                        <?php if (isset($component)) { $__componentOriginalf95f399a33c6240aef137a9e6b350e45 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf95f399a33c6240aef137a9e6b350e45 = $attributes; } ?>
<?php $component = App\View\Components\Ui\ActionButton::resolve(['type' => 'submit','color' => 'red','icon' => 'fa-solid fa-save','label' => 'Lưu thay đổi'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.action-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Ui\ActionButton::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf95f399a33c6240aef137a9e6b350e45)): ?>
<?php $attributes = $__attributesOriginalf95f399a33c6240aef137a9e6b350e45; ?>
<?php unset($__attributesOriginalf95f399a33c6240aef137a9e6b350e45); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf95f399a33c6240aef137a9e6b350e45)): ?>
<?php $component = $__componentOriginalf95f399a33c6240aef137a9e6b350e45; ?>
<?php unset($__componentOriginalf95f399a33c6240aef137a9e6b350e45); ?>
<?php endif; ?>
                    </div>
                </form>
            </div>

            <!-- 🔒 Đổi mật khẩu -->
            <div x-show="tab === 'password'" x-transition.opacity.duration.250ms class="bg-white rounded-2xl shadow-sm p-6">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center">
                        <i class="fa-solid fa-shield-halved text-blue-600"></i>
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold text-gray-900">Đổi mật khẩu</h2>
                        <p class="text-sm text-gray-500">Thay đổi mật khẩu để bảo vệ tài khoản</p>
                    </div>
                </div>

                <form action="<?php echo e(route('admin.profile.changePassword')); ?>" method="POST" class="space-y-6" id="change-password-form">
                    <?php echo csrf_field(); ?>

                    <?php if (isset($component)) { $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96 = $attributes; } ?>
<?php $component = App\View\Components\Form\Input::resolve(['type' => 'password','name' => 'current_password','label' => 'Mật khẩu hiện tại','placeholder' => 'Nhập mật khẩu hiện tại'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $attributes = $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $component = $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96 = $attributes; } ?>
<?php $component = App\View\Components\Form\Input::resolve(['type' => 'password','name' => 'new_password','label' => 'Mật khẩu mới','placeholder' => 'Nhập mật khẩu mới (ít nhất 8 ký tự)'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $attributes = $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $component = $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96 = $attributes; } ?>
<?php $component = App\View\Components\Form\Input::resolve(['type' => 'password','name' => 'new_password_confirmation','label' => 'Xác nhận mật khẩu mới','placeholder' => 'Nhập lại mật khẩu mới'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $attributes = $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $component = $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>

                    <div class="flex justify-between pt-4 border-t">
                        <?php if (isset($component)) { $__componentOriginalf95f399a33c6240aef137a9e6b350e45 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf95f399a33c6240aef137a9e6b350e45 = $attributes; } ?>
<?php $component = App\View\Components\Ui\ActionButton::resolve(['type' => 'button','color' => 'gray','icon' => 'fa-solid fa-arrow-left','label' => 'Quay lại hồ sơ','outline' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.action-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Ui\ActionButton::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => 'tab = \'profile\'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf95f399a33c6240aef137a9e6b350e45)): ?>
<?php $attributes = $__attributesOriginalf95f399a33c6240aef137a9e6b350e45; ?>
<?php unset($__attributesOriginalf95f399a33c6240aef137a9e6b350e45); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf95f399a33c6240aef137a9e6b350e45)): ?>
<?php $component = $__componentOriginalf95f399a33c6240aef137a9e6b350e45; ?>
<?php unset($__componentOriginalf95f399a33c6240aef137a9e6b350e45); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalf95f399a33c6240aef137a9e6b350e45 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf95f399a33c6240aef137a9e6b350e45 = $attributes; } ?>
<?php $component = App\View\Components\Ui\ActionButton::resolve(['type' => 'submit','icon' => 'fa-solid fa-key','label' => 'Cập nhật mật khẩu'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.action-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Ui\ActionButton::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf95f399a33c6240aef137a9e6b350e45)): ?>
<?php $attributes = $__attributesOriginalf95f399a33c6240aef137a9e6b350e45; ?>
<?php unset($__attributesOriginalf95f399a33c6240aef137a9e6b350e45); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf95f399a33c6240aef137a9e6b350e45)): ?>
<?php $component = $__componentOriginalf95f399a33c6240aef137a9e6b350e45; ?>
<?php unset($__componentOriginalf95f399a33c6240aef137a9e6b350e45); ?>
<?php endif; ?>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script>
function avatarUpload() {
    return {
        previewUrl: '<?php echo e($admin->avatar ? asset("images/users/".$admin->avatar) : asset("images/users/default-avatar.png")); ?>',
        originalUrl: '<?php echo e($admin->avatar ? asset("images/users/".$admin->avatar) : asset("images/users/default-avatar.png")); ?>',
        fileName: '',
        error: '',
        isLoading: false,
        hasNewImage: false,
        
        handleFileChange(event) {
            const file = event.target.files[0];
            
            // Reset error
            this.error = '';
            
            if (!file) {
                this.resetImage();
                return;
            }
            
            // Validate file type
            const validTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
            if (!validTypes.includes(file.type)) {
                this.error = 'Chỉ chấp nhận file JPG, PNG hoặc GIF';
                this.resetImage();
                return;
            }
            
            // Validate file size (2MB)
            const maxSize = 2 * 1024 * 1024; // 2MB in bytes
            if (file.size > maxSize) {
                this.error = 'Kích thước file không được vượt quá 2MB';
                this.resetImage();
                return;
            }
            
            // Show loading
            this.isLoading = true;
            this.fileName = file.name;
            
            // Create FileReader to preview image
            const reader = new FileReader();
            
            reader.onload = (e) => {
                this.previewUrl = e.target.result;
                this.hasNewImage = true;
                this.isLoading = false;
                
                // Update main avatar in sidebar
                const mainAvatar = document.getElementById('main-avatar');
                if (mainAvatar) {
                    mainAvatar.src = e.target.result;
                }
            };
            
            reader.onerror = () => {
                this.error = 'Không thể đọc file. Vui lòng thử lại';
                this.isLoading = false;
                this.resetImage();
            };
            
            reader.readAsDataURL(file);
        },
        
        resetImage() {
            this.previewUrl = this.originalUrl;
            this.fileName = '';
            this.error = '';
            this.hasNewImage = false;
            this.isLoading = false;
            
            // Clear file input
            if (this.$refs.fileInput) {
                this.$refs.fileInput.value = '';
            }
            
            // Reset main avatar in sidebar
            const mainAvatar = document.getElementById('main-avatar');
            if (mainAvatar) {
                mainAvatar.src = this.originalUrl;
            }
        }
    }
}
</script>

<?php echo app('Illuminate\Foundation\Vite')(['resources/js/admin/profile.js']); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/admin/profile/edit.blade.php ENDPATH**/ ?>