<style>
    [x-cloak] {
        display: none !important;
    }
</style>
<?php $__env->startSection('content'); ?>
<div class="min-h-screen py-6"
    x-data="checkoutAddressModal()">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php if (isset($component)) { $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb','data' => ['items' => [
            ['label' => 'Trang chủ', 'url' => route('home'), 'icon' => 'fas fa-home'],
            ['label' => 'Giỏ hàng', 'url' => route('cart.index'), 'icon' => 'fas fa-shopping-cart'],
            ['label' => 'Thanh toán', 'icon' => 'fas fa-credit-card']
        ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
            ['label' => 'Trang chủ', 'url' => route('home'), 'icon' => 'fas fa-home'],
            ['label' => 'Giỏ hàng', 'url' => route('cart.index'), 'icon' => 'fas fa-shopping-cart'],
            ['label' => 'Thanh toán', 'icon' => 'fas fa-credit-card']
        ])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $attributes = $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $component = $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>

        
        <?php if(session('error')): ?>
        <div class="mb-6 bg-red-50 border-l-4 border-red-500 text-red-700 p-4 rounded-r-lg shadow-sm" role="alert">
            <div class="flex items-start">
                <svg class="w-6 h-6 mr-3 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                </svg>
                <div class="flex-1">
                    <strong class="font-bold block">Lỗi!</strong>
                    <span class="block mt-1"><?php echo e(session('error')); ?></span>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if(session('success')): ?>
        <div class="mb-6 bg-green-50 border-l-4 border-green-500 text-green-700 p-4 rounded-r-lg shadow-sm" role="alert">
            <div class="flex items-start">
                <svg class="w-6 h-6 mr-3 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                <div class="flex-1">
                    <strong class="font-bold">Thành công!</strong>
                    <span class="block mt-1"><?php echo e(session('success')); ?></span>
                </div>
            </div>
        </div>
        <?php endif; ?>

        
        <?php if($errors->any()): ?>
        <div class="mb-6 bg-red-50 border-l-4 border-red-500 text-red-700 p-4 rounded-r-lg shadow-sm" role="alert">
            <div class="flex items-start">
                <svg class="w-6 h-6 mr-3 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                </svg>
                <div class="flex-1">
                    <strong class="font-bold block mb-2">Có lỗi xảy ra:</strong>
                    <ul class="list-disc list-inside space-y-1">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="text-sm"><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <?php if($errors->has('address')): ?>
                    <a href="#"
                        class="inline-block mt-3 text-sm font-medium underline hover:no-underline">
                        → Thêm địa chỉ giao hàng ngay
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <form action="<?php echo e(route('checkout.process')); ?>" method="POST" id="checkout-form">
            <?php echo csrf_field(); ?>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Thông tin giao hàng -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Phương thức thanh toán -->
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h2 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                            </svg>
                            Phương thức thanh toán
                        </h2>

                        <div class="space-y-3">
                            <label
                                class="payment-item flex items-center p-4 border-2 rounded-lg cursor-pointer transition-all duration-200"
                                :class="selectedPayment === 'zalopay' ? 'border-red-500 bg-red-50' : 'border-gray-200 hover:border-red-300'">
                                <input type="radio" name="payment_method" value="zalopay"
                                    class="self-center"
                                    @change="updatePaymentMethod($event)"
                                    checked>
                                <div class="ml-3 flex items-center">
                                    <img src="https://cdn.haitrieu.com/wp-content/uploads/2022/10/Logo-ZaloPay.png" alt="ZaloPay" class="h-8">
                                    <div class="ml-3">
                                        <span class="font-semibold text-gray-900 block">Thanh toán qua ZaloPay</span>
                                        <span class="text-xs text-gray-600">Thanh toán an toàn qua ví điện tử</span>
                                    </div>
                                </div>
                            </label>

                            <label
                                class="payment-item flex items-center p-4 border-2 rounded-lg cursor-pointer transition-all duration-200"
                                :class="selectedPayment === 'cod' ? 'border-red-500 bg-red-50' : 'border-gray-200 hover:border-red-300'">
                                <input type="radio" name="payment_method" value="cod"
                                    class="self-center"
                                    @change="updatePaymentMethod($event)">
                                <div class="ml-3 flex items-center">
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    <div class="ml-3">
                                        <span class="font-semibold text-gray-900 block">Thanh toán khi nhận hàng (COD)</span>
                                        <span class="text-xs text-gray-600">Thanh toán bằng tiền mặt</span>
                                    </div>
                                </div>
                            </label>
                        </div>

                        <?php $__errorArgs = ['payment_method'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="mt-2 text-sm text-red-600 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                            <?php echo e($message); ?>

                        </p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Địa chỉ giao hàng -->
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-xl font-semibold text-gray-900 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Địa chỉ giao hàng
                            </h2>
                            <?php if(!$addresses->isEmpty()): ?>
                            <a href="#" @click.prevent="openAddModal()"
                                class="text-sm text-red-600 hover:text-red-700 font-medium">
                                + Thêm địa chỉ mới
                            </a>
                            <?php endif; ?>
                        </div>

                        <?php if($addresses->isEmpty()): ?>
                        
                        <div class="text-center py-10 bg-gray-50 rounded-lg border-2 border-dashed border-gray-300">
                            <svg class="w-20 h-20 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <p class="text-gray-700 font-semibold text-lg mb-2">Bạn chưa có địa chỉ giao hàng</p>
                            <p class="text-gray-500 text-sm mb-6">Vui lòng thêm địa chỉ để tiếp tục đặt hàng</p>
                            <a href="#"
                                class="inline-flex items-center px-6 py-3 bg-red-600 text-white font-medium rounded-lg hover:bg-red-700 transition-colors duration-200 shadow-sm">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                </svg>
                                Thêm địa chỉ giao hàng
                            </a>
                        </div>
                        <?php else: ?>
                        
                        <div class="space-y-3">
                            <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <label class="address-item flex items-start p-4 border-2 rounded-lg cursor-pointer transition-all duration-200
              <?php echo e($loop->first ? 'border-red-500 bg-red-50' : 'border-gray-200 hover:border-red-300'); ?>">
                                <input type="radio"
                                    name="address_id"
                                    value="<?php echo e($address->id); ?>"
                                    @change="updateSelectedAddress($event)"
                                    class="mt-0.5"
                                    <?php echo e(session('selected_address_id') == $address->id ? 'checked' : ($loop->first ? 'checked' : '')); ?>>
                                <div class="ml-3 flex-1">
                                    <div class="flex items-center justify-between">
                                        <p class="font-semibold text-gray-900"><?php echo e($address->full_name); ?></p>
                                        <?php if($address->is_default): ?>
                                        <span class="text-xs bg-red-100 text-red-600 px-2 py-1 rounded font-medium">Mặc định</span>
                                        <?php endif; ?>
                                    </div>
                                    <p class="text-sm text-gray-600 mt-1"><?php echo e($address->phone); ?></p>
                                    <p class="text-sm text-gray-600 mt-1">
                                        <?php echo e($address->address); ?>

                                        <?php if($address->district): ?>, <?php echo e($address->district->name); ?><?php endif; ?>
                                        <?php if($address->province): ?>, <?php echo e($address->province->name); ?><?php endif; ?>
                                        <?php if($address->postal_code): ?> (<?php echo e($address->postal_code); ?>)<?php endif; ?>
                                    </p>
                                </div>
                            </label>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        
                        <?php $__errorArgs = ['address_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="mt-2 text-sm text-red-600 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                            <?php echo e($message); ?>

                        </p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <?php endif; ?>
                    </div>

                </div>

                <!-- Tóm tắt đơn hàng -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-lg shadow-sm p-6 sticky top-4">
                        <h2 class="text-xl font-semibold text-gray-900 mb-4">Đơn hàng của bạn</h2>

                        <div class="space-y-4 mb-6 max-h-96 overflow-y-auto">
                            <?php $__currentLoopData = $cart->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="flex items-start space-x-3 pb-3 border-b border-gray-100 last:border-b-0">
                                <div class="flex-shrink-0 w-16 h-16 bg-gray-100 rounded overflow-hidden">
                                    <?php if($item->productVariant->product->mainImage): ?>
                                    <img src="<?php echo e(asset('images/products/' . $item->productVariant->product->mainImage->url)); ?>"
                                        alt="<?php echo e($item->productVariant->product->name); ?>"
                                        class="w-full h-full object-cover">
                                    <?php endif; ?>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 line-clamp-2"><?php echo e($item->productVariant->product->name); ?></p>
                                    <p class="text-xs text-gray-500 mt-1">
                                        <?php if($item->productVariant->size): ?>Size: <?php echo e($item->productVariant->size); ?> <?php endif; ?>
                                        <?php if($item->productVariant->color): ?> - <?php echo e($item->productVariant->color); ?><?php endif; ?>
                                    </p>
                                    <p class="text-sm text-gray-600 mt-1">
                                        x<?php echo e($item->quantity); ?> = <?php echo e(number_format($item->quantity * $item->price, 0, ',', '.')); ?>đ
                                    </p>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <div class="border-t-2 border-gray-200 pt-4 space-y-2">
                            <div class="flex justify-between text-sm text-gray-600">
                                <span>Tạm tính:</span>
                                <span class="font-medium"><?php echo e(number_format($cart->subtotal, 0, ',', '.')); ?>đ</span>
                            </div>
                            <?php if($cart->discount_amount > 0): ?>
                            <div class="flex justify-between text-sm text-green-600">
                                <span>Giảm giá:</span>
                                <span class="font-medium">-<?php echo e(number_format($cart->discount_amount, 0, ',', '.')); ?>đ</span>
                            </div>
                            <?php endif; ?>
                            <div class="flex justify-between text-sm text-gray-600">
                                <span>Phí vận chuyển:</span>
                                <span class="font-medium text-green-600">Miễn phí</span>
                            </div>
                            <div class="border-t border-gray-200 pt-2 flex justify-between text-lg font-bold">
                                <span class="text-gray-900">Tổng cộng:</span>
                                <span class="text-red-600"><?php echo e(number_format($cart->total, 0, ',', '.')); ?>đ</span>
                            </div>
                        </div>

                        <button type="submit"
                            id="submit-btn"
                            class="w-full mt-6 bg-red-600 text-white font-semibold py-4 rounded-lg hover:bg-red-700 transition-colors duration-200 
                                       focus:outline-none focus:ring-4 focus:ring-red-300
                                       disabled:opacity-50 disabled:cursor-not-allowed disabled:bg-gray-400"
                            <?php echo e($addresses->isEmpty() ? 'disabled' : ''); ?>>
                            <span id="btn-text">
                                <?php if($addresses->isEmpty()): ?>
                                Vui lòng thêm địa chỉ giao hàng
                                <?php else: ?>
                                Đặt hàng
                                <?php endif; ?>
                            </span>
                            <span id="btn-loading" class="hidden">
                                <svg class="animate-spin inline-block h-5 w-5 text-white mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Đang xử lý...
                            </span>
                        </button>

                        <a href="<?php echo e(route('cart.index')); ?>"
                            class="block w-full mt-3 text-center text-gray-600 hover:text-gray-900 font-medium transition-colors duration-200">
                            ← Quay lại giỏ hàng
                        </a>

                        <p class="text-xs text-gray-500 text-center mt-4">
                            Bằng việc đặt hàng, bạn đồng ý với
                            <a href="#" class="text-red-600 hover:underline">Điều khoản sử dụng</a>
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- MODAL THÊM ĐỊA CHỈ -->
    <div x-show="showAddModal"
        x-cloak
        @click.self="closeAddModal()"
        class="fixed inset-0 z-50 backdrop-blur-sm bg-black/20 flex items-center justify-center p-4">

        <div x-show="showAddModal"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            @click.stop
            class="bg-white rounded-lg shadow-xl w-full max-w-2xl max-h-[90vh] flex flex-col">

            <form action="<?php echo e(route('checkout.address.store')); ?>" method="POST" class="flex flex-col h-full">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="from_checkout" value="1">

                <!-- Header -->
                <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center flex-shrink-0">
                    <h3 class="text-xl font-semibold text-gray-900">Thêm địa chỉ mới</h3>
                    <button type="button" @click="closeAddModal()" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>

                <!-- Body -->
                <div class="px-6 py-4 overflow-y-auto flex-1">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        <div>
                            <label class="text-sm font-medium text-gray-700 mb-2 block">Họ và tên *</label>
                            <input type="text" name="full_name" required
                                class="w-full border rounded-lg px-4 py-2.5 text-sm transition-all duration-200 focus:outline-none border-gray-300 hover:border-gray-400 focus:ring-2 focus:ring-red-600/20 focus:border-red-600">
                        </div>

                        <div>
                            <label class="text-sm font-medium text-gray-700 mb-2 block">Số điện thoại *</label>
                            <input type="text" name="phone" required placeholder=""
                                class="w-full border rounded-lg px-4 py-2.5 text-sm transition-all duration-200 focus:outline-none border-gray-300 hover:border-gray-400 focus:ring-2 focus:ring-red-600/20 focus:border-red-600">
                        </div>

                        <div>
                            <label class="text-sm font-medium text-gray-700 mb-2 block">Tỉnh/Thành phố *</label>
                            <select name="province_id" required
                                @change="loadDistricts($event.target.value)"
                                class="w-full border rounded-lg px-4 py-2.5 text-sm transition-all duration-200 focus:outline-none border-gray-300 hover:border-gray-400 focus:ring-2 focus:ring-red-600/20 focus:border-red-600">
                                <option value="">-- Chọn tỉnh --</option>
                                <template x-for="p in provinces" :key="p.id">
                                    <option :value="p.id" x-text="p.name"></option>
                                </template>
                            </select>
                        </div>

                        <div>
                            <label class="text-sm font-medium text-gray-700 mb-2 block">Quận/Huyện *</label>
                            <select name="district_id" required
                                :disabled="districts.length == 0"
                                class="w-full border rounded-lg px-4 py-2.5 text-sm transition-all duration-200 focus:outline-none border-gray-300 hover:border-gray-400 focus:ring-2 focus:ring-red-600/20 focus:border-red-600 disabled:bg-gray-100">
                                <option value="">-- Chọn quận --</option>
                                <template x-for="d in districts" :key="d.id">
                                    <option :value="d.id" x-text="d.name"></option>
                                </template>
                            </select>
                        </div>

                        <div class="md:col-span-2">
                            <label class="text-sm font-medium text-gray-700 mb-2 block">Địa chỉ cụ thể *</label>
                            <input type="text" name="address" required
                                class="w-full border rounded-lg px-4 py-2.5 text-sm transition-all duration-200 focus:outline-none border-gray-300 hover:border-gray-400 focus:ring-2 focus:ring-red-600/20 focus:border-red-600">
                        </div>

                        <div>
                            <label class="text-sm font-medium text-gray-700 mb-2 block">Mã bưu điện</label>
                            <input type="text" name="postal_code"
                                class="w-full border rounded-lg px-4 py-2.5 text-sm transition-all duration-200 focus:outline-none border-gray-300 hover:border-gray-400 focus:ring-2 focus:ring-red-600/20 focus:border-red-600">
                        </div>

                        <div class="md:col-span-2">
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="checkbox" name="is_default" value="1"
                                    class="w-4 h-4 text-red-600 border-gray-300 rounded focus:ring-red-500">
                                <span class="text-sm text-gray-700">Đặt làm địa chỉ mặc định</span>
                            </label>
                        </div>

                    </div>
                </div>

                <!-- Footer -->
                <div class="px-6 py-4 border-t border-gray-200 flex justify-end gap-3 flex-shrink-0">
                    <button type="button" @click="closeAddModal()"
                        class="px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg text-gray-700">
                        Hủy
                    </button>
                    <button type="submit"
                        class="px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                        Lưu địa chỉ
                    </button>
                </div>

            </form>
        </div>
    </div>



</div>

<script>
    document.getElementById('checkout-form').addEventListener('submit', function(e) {
        // Kiểm tra địa chỉ
        const addressSelected = document.querySelector('input[name="address_id"]:checked');
        if (!addressSelected) {
            e.preventDefault();
            alert('Vui lòng chọn địa chỉ giao hàng');
            return false;
        }

        // Kiểm tra phương thức thanh toán
        const paymentMethod = document.querySelector('input[name="payment_method"]:checked');
        if (!paymentMethod) {
            e.preventDefault();
            alert('Vui lòng chọn phương thức thanh toán');
            return false;
        }

        // Hiển thị loading state
        const submitBtn = document.getElementById('submit-btn');
        const btnText = document.getElementById('btn-text');
        const btnLoading = document.getElementById('btn-loading');

        submitBtn.disabled = true;
        btnText.classList.add('hidden');
        btnLoading.classList.remove('hidden');

        // Log để debug
        console.log('Form đang submit...', {
            address_id: addressSelected.value,
            payment_method: paymentMethod.value
        });
    });
</script>

<script>
    function checkoutAddressModal() {
        return {
            showAddModal: false,
            provinces: <?php echo json_encode($provinces ?? [], 15, 512) ?>,
            districts: [],

            // ⭐ Payment method chọn mặc định
            selectedPayment: 'zalopay',

            openAddModal() {
                this.showAddModal = true;
            },

            closeAddModal() {
                this.showAddModal = false;
            },

            async loadDistricts(provinceId) {
                if (!provinceId) {
                    this.districts = [];
                    return;
                }

                const res = await fetch(`/checkout/districts/${provinceId}`);
                const data = await res.json();

                if (data.success) {
                    this.districts = data.districts;
                }
            },

            // ⭐ Update địa chỉ khi chọn radio
            updateSelectedAddress(e) {
                document.querySelectorAll('.address-item').forEach(item => {
                    item.classList.remove('border-red-500', 'bg-red-50');
                    item.classList.add('border-gray-200');
                });

                let wrapper = e.target.closest('.address-item');
                wrapper.classList.remove('border-gray-200');
                wrapper.classList.add('border-red-500', 'bg-red-50');
            },

            // ⭐ Update phương thức thanh toán
            updatePaymentMethod(e) {
                this.selectedPayment = e.target.value;
            }
        }
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/client/checkout/index.blade.php ENDPATH**/ ?>