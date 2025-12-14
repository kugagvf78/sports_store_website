<?php $__env->startSection('content'); ?>
<div class="min-h-screen py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- CSRF token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <!-- Breadcrumb -->
        <?php if (isset($component)) { $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb','data' => ['items' => [
            ['label' => 'Trang chủ', 'url' => route('home'), 'icon' => 'fas fa-home'],
            ['label' => 'Giỏ hàng', 'icon' => 'fas fa-shopping-cart']
        ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
            ['label' => 'Trang chủ', 'url' => route('home'), 'icon' => 'fas fa-home'],
            ['label' => 'Giỏ hàng', 'icon' => 'fas fa-shopping-cart']
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


        <?php if($cartItems->isEmpty()): ?>
        <!-- Giỏ hàng trống -->
        <div class="bg-white rounded-lg shadow-sm p-12 text-center">
            <svg class="w-24 h-24 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
            <h2 class="text-2xl font-semibold text-gray-900 mb-2">Giỏ hàng trống</h2>
            <p class="text-gray-600 mb-6">Bạn chưa có sản phẩm nào trong giỏ hàng</p>
            <a href="<?php echo e(route('products.index')); ?>" class="inline-flex items-center px-6 py-3 bg-red-600 text-white font-medium rounded-lg hover:bg-red-700 transition-colors duration-200">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
                Tiếp tục mua sắm
            </a>
        </div>
        <?php else: ?>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Danh sách sản phẩm -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <!-- Header với checkbox chọn tất cả -->
                    <div class="p-4 border-b border-gray-200 bg-gray-50 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <input type="checkbox"
                                id="select-all"
                                class="w-5 h-5 text-red-600 rounded border-gray-300 focus:ring-red-500 cursor-pointer">
                            <label for="select-all" class="text-sm font-medium text-gray-700 cursor-pointer">
                                Chọn tất cả (<span id="selected-count">0</span>/<span id="total-items"><?php echo e($cartItems->count()); ?></span>)
                            </label>
                        </div>
                        <button type="button"
                            id="delete-selected-btn"
                            class="text-red-600 hover:text-red-700 text-sm font-medium disabled:opacity-50 disabled:cursor-not-allowed transition-colors"
                            disabled>
                            <i class="fas fa-trash-alt mr-1"></i>
                            Xóa đã chọn
                        </button>
                    </div>

                    <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="cart-item p-6 border-b border-gray-200 last:border-b-0" data-item-id="<?php echo e($item->id); ?>">
                        <div class="flex items-start space-x-4">
                            <!-- Checkbox chọn sản phẩm -->
                            <div class="flex-shrink-0 pt-1">
                                <input type="checkbox"
                                    class="item-checkbox w-5 h-5 text-red-600 rounded border-gray-300 focus:ring-red-500 cursor-pointer"
                                    data-item-id="<?php echo e($item->id); ?>"
                                    data-price="<?php echo e($item->price); ?>"
                                    data-quantity="<?php echo e($item->quantity); ?>">
                            </div>

                            <!-- Ảnh sản phẩm -->
                            <div class="flex-shrink-0 w-24 h-24 bg-gray-100 rounded-lg overflow-hidden">
                                <?php if($item->productVariant->product->mainImage): ?>
                                <img src="<?php echo e(asset('images/products/' . $item->productVariant->product->mainImage->url)); ?>"
                                    alt="<?php echo e($item->productVariant->product->name); ?>"
                                    class="w-full h-full object-cover">
                                <?php else: ?>
                                <div class="w-full h-full flex items-center justify-center">
                                    <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <?php endif; ?>
                            </div>

                            <!-- Thông tin sản phẩm -->
                            <div class="flex-1 min-w-0">
                                <h3 class="text-lg font-semibold text-gray-900">
                                    <a href="<?php echo e(route('products.show', $item->productVariant->product->slug)); ?>" target="_blank" class="hover:text-red-600 transition-colors">
                                        <?php echo e($item->productVariant->product->name); ?>

                                    </a>
                                </h3>
                                <div class="mt-1 flex items-center flex-wrap gap-2 text-sm text-gray-600">
                                    <?php if($item->productVariant->size): ?>
                                    <span class="bg-gray-100 px-2 py-1 rounded">Size: <span class="font-medium"><?php echo e($item->productVariant->size); ?></span></span>
                                    <?php endif; ?>
                                    <?php if($item->productVariant->color): ?>
                                    <span class="bg-gray-100 px-2 py-1 rounded">Màu: <span class="font-medium"><?php echo e($item->productVariant->color); ?></span></span>
                                    <?php endif; ?>
                                </div>
                                <p class="mt-2 text-lg font-bold text-red-600">
                                    <?php echo e(number_format($item->price, 0, ',', '.')); ?>đ
                                </p>
                            </div>

                            <!-- Điều chỉnh số lượng + Xóa -->
                            <div class="flex flex-col items-end space-y-3">
                                <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
                                    <button type="button"
                                        class="decrease-qty px-3 py-2 text-gray-600 hover:bg-gray-100 transition-colors duration-200 disabled:opacity-50 disabled:cursor-not-allowed"
                                        data-item-id="<?php echo e($item->id); ?>"
                                        <?php echo e($item->quantity <= 1 ? 'disabled' : ''); ?>>
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                        </svg>
                                    </button>
                                    <input type="number"
                                        class="quantity-input w-16 text-center border-x border-gray-300 py-2 bg-gray-50 pointer-events-none"
                                        value="<?php echo e($item->quantity); ?>"
                                        readonly
                                        data-item-id="<?php echo e($item->id); ?>">
                                    <button type="button"
                                        class="increase-qty px-3 py-2 text-gray-600 hover:bg-gray-100 transition-colors duration-200"
                                        data-item-id="<?php echo e($item->id); ?>">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                        </svg>
                                    </button>
                                </div>

                                <div class="flex items-center space-x-4">
                                    <p class="item-subtotal text-lg font-bold text-gray-900"
                                        data-item-id="<?php echo e($item->id); ?>"
                                        data-price="<?php echo e($item->price); ?>">
                                        <?php echo e(number_format($item->quantity * $item->price, 0, ',', '.')); ?>đ
                                    </p>
                                    <button type="button"
                                        class="remove-item text-red-600 hover:text-red-700 transition-colors duration-200 p-2"
                                        data-item-id="<?php echo e($item->id); ?>"
                                        title="Xóa sản phẩm">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <!-- Tổng đơn hàng -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow-sm p-6 sticky top-4">
                    <h2 class="text-xl font-semibold text-gray-900 mb-4">Tổng đơn hàng</h2>
                    <div class="space-y-3 mb-6">
                        <div class="flex justify-between text-gray-600">
                            <span>Tạm tính (<span id="checkout-item-count">0</span> sản phẩm):</span>
                            <span id="cart-subtotal" class="font-medium">0đ</span>
                        </div>
                        <div class="flex justify-between text-gray-600">
                            <span>Phí vận chuyển:</span>
                            <span class="font-medium">Miễn phí</span>
                        </div>
                        <div class="border-t border-gray-200 pt-3">
                            <div class="flex justify-between text-lg font-bold text-gray-900">
                                <span>Tổng cộng:</span>
                                <span id="cart-total" class="text-red-600">0đ</span>
                            </div>
                        </div>
                    </div>

                    <button type="button"
                        id="checkout-btn"
                        class="block w-full bg-red-600 text-white text-center font-medium py-3 rounded-lg hover:bg-red-700 transition mb-3 disabled:opacity-50 disabled:cursor-not-allowed"
                        disabled>
                        Tiến hành thanh toán
                    </button>
                    <a href="<?php echo e(route('products.index')); ?>" class="block w-full border border-gray-300 text-gray-700 text-center font-medium py-3 rounded-lg hover:bg-gray-50 transition">
                        Tiếp tục mua sắm
                    </a>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php echo app('Illuminate\Foundation\Vite')('resources/js/client/cart.js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/client/cart/index.blade.php ENDPATH**/ ?>