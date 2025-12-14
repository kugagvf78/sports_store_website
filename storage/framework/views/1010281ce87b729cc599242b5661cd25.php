<?php $__env->startSection('title', 'Danh sách yêu thích'); ?>

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
            ['label' => 'Danh sách yêu thích', 'icon' => 'fas fa-heart']
        ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
            ['label' => 'Trang chủ', 'url' => route('home'), 'icon' => 'fas fa-home'],
            ['label' => 'Danh sách yêu thích', 'icon' => 'fas fa-heart']
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

        <!-- Header -->
        <div class="flex items-center justify-between mb-8">
            <div class="flex items-center bg-[#fef2f2] text-[#dc2626] px-4 py-2 rounded-full border border-[#fcdcdc] shadow-sm">
                <i class="fas fa-heart mr-2"></i>
                <span class="font-semibold">Danh sách yêu thích</span>
            </div>
            <div class="flex items-center text-sm text-gray-600 bg-white px-4 py-2 rounded-full border border-gray-200 shadow-sm">
                <i class="fas fa-heart text-[#dc2626] mr-2"></i>
                <span><strong class="text-gray-900" id="wishlist-count"><?php echo e($wishlists->count()); ?></strong> sản phẩm</span>
            </div>
        </div>

        <?php if($wishlists->isEmpty()): ?>
        <!-- Danh sách trống -->
        <div class="bg-white rounded-lg shadow-sm p-12 text-center">
            <svg class="w-24 h-24 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
            <h2 class="text-2xl font-semibold text-gray-900 mb-2">Danh sách yêu thích trống</h2>
            <p class="text-gray-600 mb-6">Bạn chưa có sản phẩm yêu thích nào</p>
            <a href="<?php echo e(route('products.index')); ?>" class="inline-flex items-center px-6 py-3 bg-red-600 text-white font-medium rounded-lg hover:bg-red-700 transition-colors duration-200">
                <i class="fas fa-shopping-bag mr-2"></i>
                Khám phá sản phẩm
            </a>
        </div>
        <?php else: ?>
        <!-- Products Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
            <?php $__currentLoopData = $wishlists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wishlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="wishlist-item group" data-wishlist-id="<?php echo e($wishlist->id); ?>">
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                    <!-- Product Image -->
                    <div class="relative overflow-hidden">
                        <?php if($wishlist->product->status == 2): ?>
                        <span class="absolute top-3 left-3 bg-red-500 text-white text-xs font-semibold px-4 py-2 rounded-2xl shadow z-20 leading-none">Hết hàng</span>
                        <?php elseif($wishlist->product->status == 3): ?>
                        <span class="absolute top-3 left-3 bg-gray-600 text-white text-xs font-semibold px-4 py-2 rounded-2xl shadow z-20 leading-none">Ngừng bán</span>
                        <?php endif; ?>
                        <?php if($wishlist->product->mainImage): ?>
                        <img src="<?php echo e(asset('images/products/' . $wishlist->product->mainImage->url)); ?>"
                            class="w-full h-60 object-cover group-hover:scale-105 transition-transform duration-300"
                            alt="<?php echo e($wishlist->product->name); ?>">
                        <?php else: ?>
                        <div class="w-full h-60 bg-gray-100 flex items-center justify-center">
                            <div class="text-center text-gray-400">
                                <i class="fas fa-image text-4xl mb-2"></i>
                                <p class="text-sm">Không có ảnh</p>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Remove Button -->
                        <div class="absolute top-3 right-3">
                            <button
                                class="remove-wishlist bg-white/90 backdrop-blur-sm hover:bg-white w-9 h-9 flex items-center justify-center rounded-full shadow-md transition-all duration-200"
                                data-wishlist-id="<?php echo e($wishlist->id); ?>"
                                title="Xóa khỏi yêu thích">
                                <i class="fas fa-heart text-red-500 hover:text-red-600 text-lg"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Product Info -->
                    <div class="p-6">
                        <!-- Brand -->
                        <?php if($wishlist->product->brand): ?>
                        <span class="inline-block bg-red-50 text-red-600 text-xs font-medium px-2.5 py-1 rounded-full border border-red-200 mb-3">
                            <?php echo e($wishlist->product->brand->name); ?>

                        </span>
                        <?php endif; ?>

                        <!-- Product Name -->
                        <h6 class="text-lg font-semibold text-gray-900 mb-2 line-clamp-2">
                            <?php echo e(Str::limit($wishlist->product->name, 22)); ?>

                        </h6>

                        <!-- Description -->
                        <p class="text-sm text-gray-600 mb-4 line-clamp-2">
                            <?php echo e(Str::limit($wishlist->product->description, 26)); ?>

                        </p>

                        <!-- Price and Action -->
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-bold text-red-600"><?php echo e($wishlist->product->formatted_price); ?></span>
                            <a href="<?php echo e(route('products.show', $wishlist->product->slug)); ?>"
                                class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200 flex items-center">
                                <i class="fas fa-eye mr-1"></i>Chi tiết
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php echo app('Illuminate\Foundation\Vite')('resources/js/client/wishlist.js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/client/wishlist/index.blade.php ENDPATH**/ ?>