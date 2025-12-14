<div class="group">
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
        <div class="relative">
            <?php if($product->status == 2): ?>
            <span class="absolute top-3 left-3 bg-red-500 text-white text-xs font-semibold px-4 py-1 rounded-2xl shadow z-20">
                Hết hàng
            </span>
            <?php elseif($product->status == 3): ?>
            <span class="absolute top-3 left-3 bg-gray-600 text-white text-xs font-semibold px-4 py-1 rounded-2xl shadow z-20">
                Ngừng bán
            </span>
            <?php endif; ?>
            <img src="<?php echo e($product->mainImage ? asset('images/products/' . $product->mainImage->url) : asset('images/no-image.png')); ?>"
                alt="<?php echo e($product->name); ?>" class="w-full h-60 object-cover group-hover:scale-105 transition-transform duration-300">

            <button class="toggle-wishlist absolute top-3 right-3 bg-white/90 w-10 h-10 rounded-full shadow-md"
                data-product-id="<?php echo e($product->id); ?>">
                <i class="far fa-heart text-red-500"></i>
            </button>
        </div>
        <div class="p-4">
            <h3 class="font-semibold text-gray-900 line-clamp-2"><?php echo e(Str::limit($product->name, 40)); ?></h3>
            <div class="flex items-center justify-between mt-3">
                <div>
                    <?php if($product->discounted_price): ?>
                    <span class="text-sm text-gray-500 line-through"><?php echo e($product->formatted_price); ?></span>
                    <span class="text-lg font-bold text-red-600 ml-2"><?php echo e($product->formatted_discounted_price); ?></span>
                    <?php else: ?>
                    <span class="text-lg font-bold text-red-600"><?php echo e($product->formatted_price); ?></span>
                    <?php endif; ?>
                </div>
                <a href="<?php echo e(route('products.show', $product->slug)); ?>" class="text-red-600 hover:text-red-700">
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/components/product-card.blade.php ENDPATH**/ ?>