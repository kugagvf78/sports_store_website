<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-sm p-8 text-center">

            <!-- Icon Success -->
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-green-100 mb-6">
                <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>

            <h1 class="text-3xl font-bold text-gray-900 mb-2">Đặt hàng thành công!</h1>
            <p class="text-gray-600 mb-8">Cảm ơn bạn đã mua hàng tại cửa hàng chúng tôi</p>

            <!-- Order Info -->
            <div class="bg-gray-50 rounded-lg p-6 mb-8 text-left">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Thông tin đơn hàng</h2>
                <div class="space-y-3">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Mã đơn hàng:</span>
                        <span class="font-semibold text-gray-900"><?php echo e($order->order_no); ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Tổng tiền:</span>
                        <span class="font-semibold text-red-600"><?php echo e(number_format($order->total_amount, 0, ',', '.')); ?>đ</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Phương thức thanh toán:</span>
                        <span class="font-semibold text-gray-900">
                            <?php if($order->payment->method == 'zalopay'): ?>
                            <span class="inline-flex items-center">
                                <img src="https://cdn.haitrieu.com/wp-content/uploads/2022/10/Logo-ZaloPay.png" alt="ZaloPay" class="h-5 mr-2">
                                ZaloPay
                            </span>
                            <?php else: ?>
                            Thanh toán khi nhận hàng
                            <?php endif; ?>
                        </span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Trạng thái thanh toán:</span>
                        <span class="font-semibold">
                            <?php if($order->payment->status == 'completed'): ?>
                            <span class="text-green-600">Đã thanh toán</span>
                            <?php else: ?>
                            <span class="text-yellow-600">Chưa thanh toán</span>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Shipping Address -->
            <div class="bg-gray-50 rounded-lg p-6 mb-8 text-left">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Địa chỉ giao hàng</h2>

                <p class="text-gray-900 font-medium"><?php echo e($order->address->full_name ?? $order->address->recipient_name ?? ''); ?></p>
                <p class="text-gray-600 mt-1"><?php echo e($order->address->phone ?? ''); ?></p>
                <p class="text-gray-600 mt-1">
                    <?php echo e($order->address->address ?? ''); ?>,
                    <?php echo e($order->address->district->name ?? ''); ?>,
                    <?php echo e($order->address->province->name ?? ''); ?>

                </p>
            </div>

            <!-- Order Items -->
            <div class="bg-gray-50 rounded-lg p-6 mb-8 text-left">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Sản phẩm đã đặt</h2>
                <div class="space-y-4">
                    <?php $__currentLoopData = $order->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-16 h-16 bg-gray-200 rounded overflow-hidden">
                            <?php if($item->productVariant->product->mainImage): ?>
                            <img src="<?php echo e(asset('images/products/' . $item->productVariant->product->mainImage->url)); ?>"
                                alt="<?php echo e($item->productVariant->product->name); ?>"
                                class="w-full h-full object-cover">
                            <?php endif; ?>
                        </div>
                        <div class="flex-1">
                            <p class="font-medium text-gray-900"><?php echo e($item->productVariant->product->name); ?></p>
                            <p class="text-sm text-gray-600 mt-1">
                                <?php if($item->productVariant->size): ?>Size: <?php echo e($item->productVariant->size); ?> <?php endif; ?>
                                <?php if($item->productVariant->color): ?> - <?php echo e($item->productVariant->color); ?><?php endif; ?>
                            </p>
                            <p class="text-sm text-gray-600 mt-1">
                                <?php echo e(number_format($item->price, 0, ',', '.')); ?>đ x <?php echo e($item->quantity); ?>

                            </p>
                        </div>
                        <div class="text-right">
                            <p class="font-semibold text-gray-900">
                                <?php echo e(number_format($item->price * $item->quantity, 0, ',', '.')); ?>đ
                            </p>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <!-- Actions -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="javascript:void(0);"
                    onclick="openOrderDetail(<?php echo e($order->id); ?>)"
                    class="inline-flex items-center justify-center px-6 py-3 bg-red-600 text-white font-medium rounded-lg hover:bg-red-700 transition-colors duration-200">
                    <i class="fas fa-file-invoice mr-2"></i> Xem đơn hàng
                </a>
                <a href="<?php echo e(route('products.index')); ?>" class="inline-flex items-center justify-center px-6 py-3 border border-gray-300 text-gray-700 font-medium rounded-lg hover:bg-gray-50 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                    Tiếp tục mua sắm
                </a>
            </div>
        </div>
    </div>

    <div id="orderDetailModal"
        class="fixed inset-0 z-50 hidden items-center justify-center p-4 transition-opacity duration-300
            bg-white/50"
        style="display:none;">
        <div class="relative bg-white rounded-2xl max-w-5xl w-full shadow-2xl overflow-hidden">
            <!-- Header cố định -->
            <div class="sticky top-0 z-10 flex justify-between items-center p-5 border-b bg-white">
                <h2 class="text-xl font-bold text-gray-900 flex items-center gap-2">
                    <i class="fas fa-file-invoice text-red-600"></i> Chi tiết đơn hàng
                </h2>
                <button onclick="closeOrderDetail()" class="text-gray-500 hover:text-gray-700 text-2xl">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <!-- Phần nội dung scroll -->
            <div id="orderDetailContent"
                class="p-6 overflow-y-auto max-h-[calc(90vh-80px)] custom-scrollbar">
            </div>
        </div>
    </div>


</div>

<?php echo app('Illuminate\Foundation\Vite')(['resources/js/client/orders.js']); ?>
<?php $__env->stopSection(); ?>
<script>
    // Hàm mở modal và load chi tiết đơn hàng
    function openOrderDetail(orderId) {
        const modal = document.getElementById('orderDetailModal');
        const content = document.getElementById('orderDetailContent');

        modal.style.display = 'flex';
        content.innerHTML = `
            <div class="flex justify-center py-12">
                <div class="animate-spin rounded-full h-12 w-12 border-4 border-red-600 border-t-transparent"></div>
            </div>
        `;

        fetch(`/orders/${orderId}`, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(res => res.text())
            .then(html => {
                content.innerHTML = html;
            })
            .catch(() => {
                content.innerHTML = `
                <div class="text-center py-12 text-red-600">
                    <i class="fas fa-exclamation-circle text-4xl mb-4"></i>
                    <p>Không thể tải chi tiết đơn hàng.</p>
                </div>`;
            });
    }

    // Hàm đóng modal
    function closeOrderDetail() {
        const modal = document.getElementById('orderDetailModal');
        modal.style.display = 'none';
    }

    function contactSupport(orderId) {
        Swal.fire({
            title: 'Liên hệ hỗ trợ',
            html: `
            <div class="text-left">
                <p class="text-gray-700 mb-4">Bạn cần hỗ trợ gì về đơn hàng này?</p>
                <div class="space-y-3">
                    <div class="p-3 bg-blue-50 rounded-lg border border-blue-200 hover:bg-blue-100 cursor-pointer transition">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-phone text-blue-600 text-xl"></i>
                            <div>
                                <p class="font-semibold text-gray-900">Gọi hotline</p>
                                <p class="text-sm text-gray-600">1900 xxxx</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 bg-green-50 rounded-lg border border-green-200 hover:bg-green-100 cursor-pointer transition">
                        <div class="flex items-center gap-3">
                            <i class="fab fa-facebook-messenger text-green-600 text-xl"></i>
                            <div>
                                <p class="font-semibold text-gray-900">Chat với chúng tôi</p>
                                <p class="text-sm text-gray-600">Phản hồi trong vài phút</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 bg-orange-50 rounded-lg border border-orange-200 hover:bg-orange-100 cursor-pointer transition">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-envelope text-orange-600 text-xl"></i>
                            <div>
                                <p class="font-semibold text-gray-900">Gửi email</p>
                                <p class="text-sm text-gray-600">support@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `,
            showConfirmButton: false,
            showCloseButton: true,
            customClass: {
                popup: 'rounded-xl'
            },
            width: '500px'
        });
    }
</script>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/client/checkout/success.blade.php ENDPATH**/ ?>