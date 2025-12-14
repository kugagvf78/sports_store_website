

<?php $__env->startSection('title', 'Đánh giá đơn hàng'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen py-12 px-4">
    <div class="max-w-5xl mx-auto">
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <form action="<?php echo e(route('orders.review.store', $order->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <!-- Header -->
                <div class="bg-gradient-to-r from-red-500 to-red-600 p-8 text-white">
                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                            <i class="fas fa-star text-white text-xl"></i>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold">
                                Đánh giá đơn hàng
                            </h2>
                            <p class="text-red-100 text-sm mt-1">
                                Mã đơn hàng: <span class="font-semibold">#<?php echo e($order->order_no); ?></span>
                            </p>
                        </div>
                    </div>
                    <p class="text-red-50 mt-4">
                        Chia sẻ trải nghiệm của bạn để giúp người mua khác đưa ra quyết định tốt hơn.
                    </p>
                </div>

                <!-- Products List -->
                <div class="divide-y divide-gray-200">
                    <?php $__currentLoopData = $order->orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="p-6 hover:bg-gray-50 transition-colors duration-300">
                        <div class="flex gap-6">
                            <!-- Product Image -->
                            <div class="relative group flex-shrink-0">
                                <div class="w-32 h-32 rounded-xl overflow-hidden shadow-md">
                                    <img
                                        src="<?php echo e(asset('images/products/' . $item->productVariant->product->images->first()->url)); ?>"
                                        class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-110"
                                        alt="<?php echo e($item->product_name); ?>">
                                </div>
                                <div class="absolute -top-2 -right-2 w-8 h-8 bg-red-500 text-white rounded-full flex items-center justify-center text-sm font-bold shadow-lg">
                                    <?php echo e($index + 1); ?>

                                </div>
                            </div>

                            <!-- Product Info -->
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">
                                    <?php echo e($item->product_name); ?>

                                </h3>

                                <div class="inline-flex items-center gap-2 px-3 py-1 bg-gray-100 rounded-lg mb-4">
                                    <i class="fas fa-barcode text-gray-500 text-xs"></i>
                                    <span class="text-sm text-gray-600 font-medium">
                                        <?php echo e($item->productVariant->sku); ?>

                                    </span>
                                </div>

                                <!-- Hidden product_id - DÙNG INDEX THỐNG NHẤT -->
                                <input type="hidden" name="reviews[<?php echo e($index); ?>][product_id]" value="<?php echo e($item->productVariant->product->id); ?>">

                                <!-- Rating - DÙNG INDEX THỐNG NHẤT -->
                                <div class="mb-4">
                                    <label class="block text-sm font-semibold text-gray-700 mb-3">
                                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                                        Đánh giá của bạn
                                    </label>
                                    <div class="flex gap-2 rating-group">
                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                            <label class="cursor-pointer">
                                            <input
                                                type="radio"
                                                name="reviews[<?php echo e($index); ?>][rating]"
                                                value="<?php echo e($i); ?>"
                                                class="sr-only rating-input"
                                                tabindex="0">
                                            <i class="fas fa-star text-3xl text-gray-200 transition-all duration-300 hover:scale-125 star-icon"></i>
                                            </label>
                                            <?php endfor; ?>
                                    </div>
                                </div>

                                <!-- Comment - DÙNG INDEX THỐNG NHẤT -->
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-3">
                                        <i class="fas fa-comment-dots text-red-500 mr-1"></i>
                                        Nhận xét chi tiết
                                    </label>
                                    <textarea
                                        name="reviews[<?php echo e($index); ?>][comment]"
                                        placeholder="Hãy chia sẻ cảm nhận của bạn về sản phẩm này..."
                                        class="w-full border rounded-lg px-4 py-2.5 text-sm focus:outline-none transition border-gray-300 focus:ring-1 focus:ring-red-500 focus:border-red-500"
                                        rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <!-- Submit Button Footer -->
                <div class="bg-gray-50 p-6 border-t border-gray-200">
                    <button
                        type="submit"
                        class="w-full py-4 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-xl hover:from-red-700 hover:to-red-800 font-bold text-lg shadow-lg transform transition-all duration-300 hover:scale-[1.02] hover:shadow-2xl active:scale-[0.98] flex items-center justify-center gap-3 group">
                        <i class="fas fa-paper-plane transform group-hover:translate-x-1 transition-transform duration-300"></i>
                        Gửi đánh giá
                        <i class="fas fa-arrow-right transform group-hover:translate-x-1 transition-transform duration-300"></i>
                    </button>
                    <p class="text-center text-sm text-gray-500 mt-4">
                        <i class="fas fa-shield-alt text-green-500 mr-1"></i>
                        Đánh giá của bạn sẽ được công khai sau khi được duyệt.
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.rating-group').forEach(group => {
            const stars = group.querySelectorAll('label');
            const inputs = group.querySelectorAll('.rating-input');
            const icons = group.querySelectorAll('.star-icon');

            stars.forEach((star, index) => {
                star.addEventListener('click', function() {
                    inputs[index].checked = true;
                    updateStars(index);
                });
                star.addEventListener('mouseenter', function() {
                    highlightStars(index);
                });
            });

            group.addEventListener('mouseleave', function() {
                const checkedIndex = Array.from(inputs).findIndex(input => input.checked);
                if (checkedIndex >= 0) {
                    updateStars(checkedIndex);
                } else {
                    resetStars();
                }
            });

            function updateStars(index) {
                icons.forEach((icon, i) => {
                    if (i <= index) {
                        icon.classList.remove('text-gray-200');
                        icon.classList.add('text-yellow-400', 'scale-110');
                    } else {
                        icon.classList.remove('text-yellow-400', 'scale-110');
                        icon.classList.add('text-gray-200');
                    }
                });
            }

            function highlightStars(index) {
                icons.forEach((icon, i) => {
                    if (i <= index) {
                        icon.classList.remove('text-gray-200');
                        icon.classList.add('text-yellow-300');
                    } else {
                        icon.classList.remove('text-yellow-300', 'text-yellow-400');
                        icon.classList.add('text-gray-200');
                    }
                });
            }

            function resetStars() {
                icons.forEach(icon => {
                    icon.classList.remove('text-yellow-300', 'text-yellow-400', 'scale-110');
                    icon.classList.add('text-gray-200');
                });
            }
        });
    });
</script>

<?php if(session('toast')): ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toast = <?php echo json_encode(session('toast'), 15, 512) ?>;
        if (window.showNotification) {
            window.showNotification(toast.message, toast.type);
        }
    });
</script>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/client/orders/order-review.blade.php ENDPATH**/ ?>