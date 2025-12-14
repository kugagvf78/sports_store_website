<?php $__env->startSection('title', $product->name); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Breadcrumb -->
        <!-- <nav aria-label="breadcrumb" class="mb-6">
            <div class="bg-white rounded-lg shadow-sm p-4">
                <ol class="flex items-center space-x-2 text-sm">
                    <li>
                        <a href="<?php echo e(route('home')); ?>" class="flex items-center text-red-600 hover:text-red-700 transition-colors">
                            <i class="fas fa-home mr-1"></i>Trang chủ
                        </a>
                    </li>
                    <li class="text-gray-400">/</li>
                    <li>
                        <a href="<?php echo e(route('products.index')); ?>" class="flex items-center text-red-600 hover:text-red-700 transition-colors">
                            <i class="fas fa-box mr-1"></i>Sản phẩm
                        </a>
                    </li>
                    <li class="text-gray-400">/</li>
                    <li class="text-gray-600 font-medium"><?php echo e($product->name); ?></li>
                </ol>
            </div>
        </nav> -->

        <!-- Product Detail -->
        <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
            <div class="grid lg:grid-cols-2 gap-8">

                <!-- Left: Image Gallery -->
                <div class="space-y-4">
                    <?php
                    $images = $product->images;
                    ?>

                    <?php if($images->count() > 0): ?>
                    <div class="flex gap-4">
                        <!-- Thumbnails -->
                        <div class="flex flex-col gap-3">
                            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e(asset('images/products/' . $image->url)); ?>"
                                class="thumbnail w-20 h-20 object-cover rounded-lg border-2 border-gray-300 <?php echo e($loop->first ? 'border-red-500' : ''); ?> hover:border-red-400 cursor-pointer transition-all"
                                data-large="<?php echo e(asset('images/products/' . $image->url)); ?>"
                                alt="Thumbnail <?php echo e($index + 1); ?>">
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <!-- Main Image -->
                        <div class="flex-1">
                            <div class="relative overflow-hidden rounded-lg">
                                <img id="main-image"
                                    src="<?php echo e(asset('images/products/' . $images->first()->url)); ?>"
                                    alt="<?php echo e($product->name); ?>"
                                    class="w-full h-96 lg:h-[500px] object-cover transition-transform duration-500 hover:scale-105 rounded-lg border-2 border-gray-100 hover:border-red-100">
                            </div>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="w-full h-96 lg:h-[500px] bg-gray-100 rounded-lg flex items-center justify-center">
                        <div class="text-center text-gray-400">
                            <i class="fas fa-image text-6xl mb-4 opacity-50"></i>
                            <p class="text-xl font-medium">Không có ảnh</p>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>

                <!-- Right: Product Info -->
                <div class="space-y-6">
                    <!-- Product Name -->
                    <h1 class="text-3xl lg:text-4xl font-bold text-gray-900"><?php echo e($product->name); ?></h1>
                    <?php if($product->status == 2): ?>
                    <div class="inline-flex items-center px-4 py-1.5 bg-gradient-to-r from-red-400 to-red-500 text-white 
                font-semibold text-sm rounded-full shadow-md">
                        <i class="fas fa-exclamation-circle mr-2"></i> Tạm hết hàng
                    </div>

                    <?php elseif($product->status == 3): ?>
                    <div class="inline-flex items-center px-4 py-1.5 bg-gradient-to-r from-red-500 to-red-600 text-white 
                font-semibold text-sm rounded-full shadow-md">
                        <i class="fas fa-ban mr-2"></i> Đã ngừng bán
                    </div>
                    <?php endif; ?>
                    <div class="flex flex-wrap gap-2">
                        <!-- Brand -->
                        <?php if($product->brand): ?>
                        <div class="flex items-center">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-50 text-red-700 border border-red-200">
                                <i class="fas fa-tag mr-1"></i><?php echo e($product->brand->name); ?>

                            </span>
                        </div>
                        <?php endif; ?>


                        <!-- Categories -->
                        <?php if($product->categories->count() > 0): ?>
                        <div>
                            <div class="flex items-center">
                                <?php $__currentLoopData = $product->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-700 border border-gray-200">
                                    <i class="fas fa-folder mr-1"></i><?php echo e($category->name); ?>

                                </span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>


                    <!-- Price -->
                    <div>
                        <h2 class="text-3xl font-bold text-red-600 flex items-center" id="product-price">
                            <i class="fas fa-tag mr-2"></i>
                            <span id="price-value"><?php echo e(number_format($product->price, 0, ',', '.')); ?> VND</span>
                        </h2>
                    </div>

                    <!-- Màu sắc -->
                    <?php
                    $colors = $product->variants->pluck('color')->unique()->filter()->values();
                    $sizes = $product->variants->pluck('size')->unique()->filter()->values();
                    ?>


                    <?php
                    $isDisabled = ($product->status == 2 || $product->status == 3);
                    ?>

                    <?php if($colors->count() > 0): ?>
                    <div>
                        <p class="font-semibold text-gray-700 mb-2">Màu sắc:</p>
                        <div class="flex flex-wrap gap-2">
                            <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <button type="button"
                                class="color-btn border border-gray-300 rounded-lg px-4 py-2 text-sm font-medium transition
    <?php echo e($isDisabled ? 'opacity-50 cursor-not-allowed' : 'hover:bg-red-50 hover:border-red-500'); ?>"
                                data-color="<?php echo e($color); ?>"
                                <?php echo e($isDisabled ? 'disabled' : ''); ?>>
                                <?php echo e($color); ?>

                            </button>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Kích thước -->
                    <?php if($sizes->count() > 0): ?>
                    <div>
                        <p class="font-semibold text-gray-700 mb-2">Kích thước:</p>
                        <div class="flex flex-wrap gap-2">
                            <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <button type="button"
                                class="size-btn border border-gray-300 rounded-lg px-4 py-2 text-sm font-medium transition
    <?php echo e($isDisabled ? 'opacity-50 cursor-not-allowed' : 'hover:bg-red-50 hover:border-red-500'); ?>"
                                data-size="<?php echo e($size); ?>"
                                <?php echo e($isDisabled ? 'disabled' : ''); ?>>
                                <?php echo e($size); ?>

                            </button>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Stock Info -->
                    <p id="stock-info" class="text-gray-500 text-sm"></p>

                    <!-- Quantity Selector -->
                    <div class="flex items-center">
                        <button type="button" id="decrease-qty"
                            class="px-3 py-2 border border-gray-300 rounded-l-lg transition-colors
        <?php echo e($isDisabled ? 'opacity-50 cursor-not-allowed' : 'hover:bg-gray-100'); ?>"
                            <?php echo e($isDisabled ? 'disabled' : ''); ?>>
                            <i class="fas fa-minus"></i>
                        </button>

                        <input type="number" id="quantity-input" value="1" min="1"
                            class="w-20 text-center border-t border-b border-gray-300 py-2 focus:outline-none
        <?php echo e($isDisabled ? 'bg-gray-100 cursor-not-allowed opacity-50' : ''); ?>"
                            <?php echo e($isDisabled ? 'disabled' : ''); ?>>

                        <button type="button" id="increase-qty"
                            class="px-3 py-2 border border-gray-300 rounded-r-lg transition-colors
        <?php echo e($isDisabled ? 'opacity-50 cursor-not-allowed' : 'hover:bg-gray-100'); ?>"
                            <?php echo e($isDisabled ? 'disabled' : ''); ?>>
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>

                    <!-- Action Buttons -->
                    <div class="grid md:grid-cols-2 gap-3">
                        <button id="add-to-cart"
                            class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-3 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-0.5 disabled:bg-gray-400 disabled:cursor-not-allowed focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
                            type="button"
                            disabled>
                            <i class="fas fa-shopping-cart mr-2"></i>Thêm vào giỏ hàng
                        </button>
                        <button id="wishlist-btn"
                            data-product-id="<?php echo e($product->id); ?>"
                            class="w-full border-2 border-red-600 text-red-600 hover:bg-red-600 hover:text-white 
           font-semibold py-3 rounded-lg transition-all duration-300 hover:-translate-y-0.5 
           hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 flex justify-center items-center">
                            <i class="far fa-heart mr-2"></i><span>Yêu thích</span>
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <!-- Quick Info -->
        <section class="mt-12 border-y border-gray-200 py-8">
            <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 px-4">

                <!-- Policy Item -->
                <div class="flex items-center space-x-4">
                    <img src="https://bizweb.dktcdn.net/100/344/983/themes/704702/assets/policy_images_1.png?1628514159582"
                        alt="Miễn phí vận chuyển"
                        class="w-10 h-10 object-contain flex-shrink-0">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900">Miễn phí vận chuyển</h3>
                        <p class="text-xs text-gray-500">Cho các đơn hàng</p>
                    </div>
                </div>

                <!-- Policy Item -->
                <div class="flex items-center space-x-4">
                    <img src="https://bizweb.dktcdn.net/100/344/983/themes/704702/assets/policy_images_2.png?1628514159582"
                        alt="Hỗ trợ 24/7"
                        class="w-10 h-10 object-contain flex-shrink-0">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900">Hỗ trợ 24/7</h3>
                        <p class="text-xs text-gray-500">Liên hệ hỗ trợ 24h/ngày</p>
                    </div>
                </div>

                <!-- Policy Item -->
                <div class="flex items-center space-x-4">
                    <img src="https://bizweb.dktcdn.net/100/344/983/themes/704702/assets/policy_images_3.png?1628514159582"
                        alt="Hoàn tiền 100%"
                        class="w-10 h-10 object-contain flex-shrink-0">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900">Hoàn tiền 100%</h3>
                        <p class="text-xs text-gray-500">Nếu sản phẩm bị lỗi, hư hỏng</p>
                    </div>
                </div>

                <!-- Policy Item -->
                <div class="flex items-center space-x-4">
                    <img src="https://bizweb.dktcdn.net/100/344/983/themes/704702/assets/policy_images_4.png?1628514159582"
                        alt="Thanh toán bảo mật"
                        class="w-10 h-10 object-contain flex-shrink-0">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900">Thanh toán</h3>
                        <p class="text-xs text-gray-500">Được bảo mật 100%</p>
                    </div>
                </div>

            </div>
        </section>


        <!-- Tabs Section -->
        <div class="bg-white rounded-lg shadow-sm my-6">
            <!-- Tabs Header -->
            <div class="border-b border-gray-300">
                <nav class="flex space-x-6 px-6">
                    <button class="py-4 text-red-600 font-semibold border-b-2 border-red-600 focus:outline-none transition-colors duration-300"
                        id="tab-desc-btn"
                        data-target="#tab-desc">
                        <i class="fas fa-info-circle mr-2"></i>Mô tả
                    </button>
                    <button class="py-4 text-gray-600 hover:text-red-600 font-semibold focus:outline-none transition-colors duration-300"
                        id="tab-review-btn"
                        data-target="#tab-review">
                        <i class="fas fa-star mr-2"></i>Đánh giá (<?php echo e($product->reviews->count()); ?>)
                    </button>
                </nav>
            </div>

            <!-- Tabs Content -->
            <div class="p-6 mt-6">
                <!-- Mô tả -->
                <div id="tab-desc" class="tab-pane">
                    <div class="bg-gray-50 p-4 rounded-lg border border-gray-100 leading-relaxed text-gray-700">
                        <?php echo nl2br(e($product->description)); ?>

                    </div>
                </div>

                <!-- Đánh giá -->
                <div id="tab-review" class="tab-pane hidden">
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Danh sách đánh giá -->
                        <div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-4">
                                <?php echo e($product->reviews->count()); ?> đánh giá cho "<?php echo e($product->name); ?>"
                            </h4>

                            <?php $__empty_1 = true; $__currentLoopData = $product->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="border-t border-gray-200 py-4 mb-4">
                                <div class="flex items-center justify-between mb-2">
                                    <h6 class="font-semibold text-gray-800">
                                        <?php echo e($review->user->full_name ?? 'Ẩn danh'); ?>

                                    </h6>
                                    <small class="text-gray-500 text-sm">
                                        <?php echo e($review->created_at->format('d/m/Y')); ?>

                                    </small>
                                </div>
                                <p class="text-yellow-500 mb-2">
                                    <?php for($i = 0; $i < $review->rating; $i++): ?>
                                        <i class="fas fa-star"></i>
                                        <?php endfor; ?>
                                </p>
                                <p class="text-gray-700"><?php echo e($review->comment); ?></p>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <p class="text-gray-500 italic">Chưa có đánh giá nào cho sản phẩm này.</p>
                            <?php endif; ?>
                        </div>

                        <!-- Form gửi đánh giá -->
                        <div class="ml-5">
                            <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                <i class="fas fa-pen mr-2 text-red-600"></i>Viết đánh giá
                            </h4>

                            <?php if(session('success')): ?>
                            <script>
                                document.addEventListener('DOMContentLoaded', () => {
                                    showNotification("<?php echo e(session('success')); ?>", "success");
                                });
                            </script>
                            <?php endif; ?>

                            <form method="POST" action="<?php echo e(route('reviews.store', $product->id)); ?>" class="space-y-4">
                                <?php echo csrf_field(); ?>
                                <?php if($errors->any()): ?>
                                <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                                    <ul class="list-disc list-inside">
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                                <?php endif; ?>
                                <div class="flex items-center gap-2" id="rating-stars">
                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                        <button type="button"
                                        data-value="<?php echo e($i); ?>"
                                        class="star-btn text-gray-300 hover:text-yellow-400 transition text-2xl focus:outline-none">
                                        <i class="fas fa-star"></i>
                                        </button>
                                        <?php endfor; ?>
                                </div>
                                <input type="hidden" name="rating" id="rating" value="0">

                                <div>
                                    <label for="comment" class="block text-sm font-medium text-gray-700 mb-1">Nhận xét *</label>
                                    <textarea name="comment" id="comment" rows="4"
                                        class="w-full rounded-lg border border-gray-300 focus:border-red-500 focus:ring-1 focus:ring-red-500 transition duration-200 px-3 py-2 text-gray-700 placeholder-gray-400"
                                        required></textarea>
                                </div>

                                <button type="submit"
                                    class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2.5 rounded-lg transition-colors duration-300">
                                    <i class="fas fa-paper-plane mr-2"></i>Gửi đánh giá
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
            <a href="<?php echo e(route('products.index')); ?>"
                class="inline-flex items-center px-6 py-3 border border-gray-300 text-gray-700 hover:bg-gray-50 font-semibold rounded-lg transition-colors duration-200">
                <i class="fas fa-arrow-left mr-2"></i>Quay lại danh sách sản phẩm
            </a>

            <!-- Share buttons -->
            <div class="flex space-x-1">
                <button class="p-2 bg-white border border-gray-200 hover:bg-gray-50 rounded transition-colors duration-200" title="Chia sẻ Facebook">
                    <i class="fab fa-facebook text-blue-600"></i>
                </button>
                <button class="p-2 bg-white border border-gray-200 hover:bg-gray-50 rounded transition-colors duration-200" title="Chia sẻ Twitter">
                    <i class="fab fa-twitter text-sky-500"></i>
                </button>
                <button class="p-2 bg-white border border-gray-200 hover:bg-gray-50 rounded transition-colors duration-200 copy-link-btn" title="Sao chép link">
                    <i class="fas fa-link text-gray-600"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- CSRF Token for AJAX -->
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<script>
    window.productId = "<?php echo e($product->id); ?>";
</script>
<?php echo app('Illuminate\Foundation\Vite')(['resources/js/client/product-show.js']); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/client/products/show.blade.php ENDPATH**/ ?>