<!-- Order Detail View -->
<div class="space-y-6">
    <!-- Order Info Header -->
    <div class="bg-gradient-to-r from-red-50 to-white p-6 rounded-xl border border-red-200">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <p class="text-sm text-gray-600 mb-1">Mã đơn hàng</p>
                <p class="text-xl font-bold text-gray-900">#<?php echo e($order->order_no); ?></p>
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-1">Ngày đặt hàng</p>
                <p class="text-lg font-semibold text-gray-900"><?php echo e($order->created_at->format('d/m/Y H:i')); ?></p>
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-1">Trạng thái</p>
                <?php
                $statusConfig = [
                1 => ['bg' => 'bg-yellow-100', 'text' => 'text-yellow-800', 'icon' => 'fa-clock'],
                2 => ['bg' => 'bg-blue-100', 'text' => 'text-blue-800', 'icon' => 'fa-box'],
                3 => ['bg' => 'bg-purple-100', 'text' => 'text-purple-800', 'icon' => 'fa-truck'],
                4 => ['bg' => 'bg-green-100', 'text' => 'text-green-800', 'icon' => 'fa-check-circle'],
                5 => ['bg' => 'bg-red-100', 'text' => 'text-red-800', 'icon' => 'fa-times-circle'],
                ];
                $config = $statusConfig[$order->status_id] ?? ['bg' => 'bg-gray-100', 'text' => 'text-gray-800', 'icon' => 'fa-question'];
                ?>
                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full text-sm font-semibold <?php echo e($config['bg']); ?> <?php echo e($config['text']); ?>">
                    <i class="fas <?php echo e($config['icon']); ?>"></i>
                    <?php echo e($order->status->name ?? 'Không xác định'); ?>

                </span>
            </div>
        </div>
    </div>

    <!-- Order Timeline -->
    <div class="bg-white p-6 rounded-xl border border-gray-200">
        <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
            <i class="fas fa-history text-red-600"></i>
            Lịch sử đơn hàng
        </h3>
        <div class="space-y-4">
            <?php
            $timeline = [
            ['status' => 1, 'title' => 'Đơn hàng đã được đặt', 'desc' => 'Chờ xác nhận từ người bán', 'icon' => 'fa-shopping-cart', 'color' => 'yellow'],
            ['status' => 2, 'title' => 'Đơn hàng đã được xác nhận', 'desc' => 'Đang chuẩn bị hàng', 'icon' => 'fa-check-circle', 'color' => 'blue'],
            ['status' => 3, 'title' => 'Đơn hàng đang được giao', 'desc' => 'Shipper đang trên đường', 'icon' => 'fa-shipping-fast', 'color' => 'purple'],
            ['status' => 4, 'title' => 'Đã giao hàng thành công', 'desc' => 'Đơn hàng đã được giao', 'icon' => 'fa-box-open', 'color' => 'green'],
            ];

            if ($order->status_id == 5) {
            $timeline = [
            ['status' => 1, 'title' => 'Đơn hàng đã được đặt', 'desc' => 'Đã đặt hàng', 'icon' => 'fa-shopping-cart', 'color' => 'yellow'],
            ['status' => 5, 'title' => 'Đơn hàng đã bị hủy', 'desc' => 'Đã hủy bởi người dùng', 'icon' => 'fa-times-circle', 'color' => 'red'],
            ];
            }
            ?>

            <?php $__currentLoopData = $timeline; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex items-start gap-4">
                <?php if($step['status'] <= $order->status_id): ?>
                    <div class="w-10 h-10 bg-<?php echo e($step['color']); ?>-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas <?php echo e($step['icon']); ?> text-<?php echo e($step['color']); ?>-600"></i>
                    </div>
                    <?php else: ?>
                    <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas <?php echo e($step['icon']); ?> text-gray-400"></i>
                    </div>
                    <?php endif; ?>

                    <div class="flex-1">
                        <p class="font-semibold text-gray-900 <?php echo e($step['status'] > $order->status_id ? 'opacity-50' : ''); ?>">
                            <?php echo e($step['title']); ?>

                        </p>
                        <p class="text-sm text-gray-600 <?php echo e($step['status'] > $order->status_id ? 'opacity-50' : ''); ?>">
                            <?php echo e($step['desc']); ?>

                        </p>
                        <?php if($step['status'] <= $order->status_id && $step['status'] == $order->status_id): ?>
                            <p class="text-xs text-gray-500 mt-1">
                                <?php echo e($order->updated_at->format('d/m/Y H:i')); ?>

                            </p>
                            <?php endif; ?>
                    </div>

                    <?php if($step['status'] <= $order->status_id): ?>
                        <i class="fas fa-check-circle text-<?php echo e($step['color']); ?>-600 text-xl"></i>
                        <?php endif; ?>
            </div>

            <?php if(!$loop->last): ?>
            <div class="ml-5 w-0.5 h-8 bg-gray-200"></div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <!-- Product List -->
    <div class="bg-white p-6 rounded-xl border border-gray-200">
        <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
            <i class="fas fa-box text-red-600"></i>
            Sản phẩm (<?php echo e($order->orderItems->count()); ?>)
        </h3>
        <div class="space-y-4">
            <?php $__currentLoopData = $order->orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex gap-4 p-4 bg-gray-50 rounded-lg">
                <div class="w-24 h-24 flex-shrink-0 bg-white rounded-lg overflow-hidden border border-gray-200">
                    <?php if($item->productVariant && $item->productVariant->product && $item->productVariant->product->images->first()): ?>
                    <img src="<?php echo e(asset('images/products/' . $item->productVariant->product->images->first()->url)); ?>"
                        alt="<?php echo e($item->product_name); ?>"
                        class="w-full h-full object-cover">
                    <?php else: ?>
                    <div class="w-full h-full flex items-center justify-center bg-gray-100">
                        <i class="fas fa-image text-gray-400 text-2xl"></i>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="flex-1">
                    <h4 class="font-semibold text-gray-900 mb-2"><?php echo e($item->product_name); ?></h4>
                    <?php if($item->productVariant): ?>
                    <div class="flex flex-wrap gap-2 text-sm text-gray-600 mb-2">
                        <span class="px-2 py-1 bg-white rounded border border-gray-200">
                            SKU: <?php echo e($item->productVariant->sku); ?>

                        </span>
                        <?php if($item->productVariant->color): ?>
                        <span class="px-2 py-1 bg-white rounded border border-gray-200">
                            Màu: <?php echo e($item->productVariant->color); ?>

                        </span>
                        <?php endif; ?>
                        <?php if($item->productVariant->size): ?>
                        <span class="px-2 py-1 bg-white rounded border border-gray-200">
                            Size: <?php echo e($item->productVariant->size); ?>

                        </span>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    <p class="text-sm text-gray-600">Số lượng: <?php echo e($item->quantity); ?></p>
                </div>

                <div class="text-right">
                    <p class="text-sm text-gray-600 mb-1">Đơn giá</p>
                    <p class="font-semibold text-gray-900"><?php echo e(number_format($item->price, 0, ',', '.')); ?>đ</p>
                    <div class="mt-2 pt-2 border-t border-gray-300">
                        <p class="text-xs text-gray-600 mb-1">Thành tiền</p>
                        <p class="font-bold text-red-600"><?php echo e(number_format($item->price * $item->quantity, 0, ',', '.')); ?>đ</p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <!-- Delivery Address -->
    <?php if($order->address): ?>
    <div class="bg-white p-6 rounded-xl border border-gray-200">
        <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
            <i class="fas fa-map-marker-alt text-red-600"></i>
            Địa chỉ giao hàng
        </h3>
        <div class="bg-blue-50 p-4 rounded-lg border border-blue-200">
            <p class="font-semibold text-gray-900 mb-2">
                <?php echo e($order->address->full_name ?? $order->address->recipient_name ?? ''); ?>

            </p>
            <p class="text-blue-600 font-medium mb-2">
                <i class="fas fa-phone mr-2"></i><?php echo e($order->address->phone ?? ''); ?>

            </p>
            <p class="text-gray-700">
                <i class="fas fa-home mr-2"></i>
                <?php echo e($order->address->address ?? $order->address->address_line ?? ''); ?>,
                <?php echo e($order->address->district->name ?? ''); ?>,
                <?php echo e($order->address->province->name ?? ''); ?>

            </p>
        </div>
    </div>
    <?php endif; ?>

    <!-- Payment Info -->
    <?php if($order->payment): ?>
    <div class="bg-white p-6 rounded-xl border border-gray-200">
        <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
            <i class="fas fa-credit-card text-red-600"></i>
            Thông tin thanh toán
        </h3>
        <div class="space-y-3">
            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                <span class="text-gray-700">Phương thức thanh toán</span>
                <span class="font-semibold text-gray-900">
                    <?php if($order->payment->payment_method == 'cod'): ?>
                    <i class="fas fa-money-bill-wave text-green-600 mr-2"></i>COD
                    <?php elseif($order->payment->payment_method == 'bank_transfer'): ?>
                    <i class="fas fa-university text-blue-600 mr-2"></i>Chuyển khoản
                    <?php elseif($order->payment->payment_method == 'vnpay'): ?>
                    <i class="fas fa-wallet text-purple-600 mr-2"></i>VNPay
                    <?php else: ?>
                    Khác
                    <?php endif; ?>
                </span>
            </div>
            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                <span class="text-gray-700">Trạng thái thanh toán</span>
                <span class="font-semibold <?php echo e($order->payment->payment_status == 'paid' ? 'text-green-600' : 'text-orange-600'); ?>">
                    <?php if($order->payment->payment_status == 'paid'): ?>
                    <i class="fas fa-check-circle mr-2"></i>Đã thanh toán
                    <?php else: ?>
                    <i class="fas fa-clock mr-2"></i>Chưa thanh toán
                    <?php endif; ?>
                </span>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- Order Summary -->
    <div class="bg-gradient-to-r from-red-50 to-white p-6 rounded-xl border border-red-200">
        <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
            <i class="fas fa-calculator text-red-600"></i>
            Tổng kết đơn hàng
        </h3>
        <div class="space-y-3">
            <div class="flex justify-between items-center">
                <span class="text-gray-700">Tạm tính (<?php echo e($order->orderItems->count()); ?> sản phẩm)</span>
                <span class="font-semibold text-gray-900">
                    <?php echo e(number_format($order->orderItems->sum(function($item) { return $item->price * $item->quantity; }), 0, ',', '.')); ?>đ
                </span>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-gray-700">Phí vận chuyển</span>
                <span class="font-semibold text-gray-900">
                    <?php echo e(number_format($order->shipping_fee ?? 0, 0, ',', '.')); ?>đ
                </span>
            </div>
            <?php if($order->discount_amount > 0): ?>
            <div class="flex justify-between items-center text-green-600">
                <span>Giảm giá</span>
                <span class="font-semibold">
                    -<?php echo e(number_format($order->discount_amount, 0, ',', '.')); ?>đ
                </span>
            </div>
            <?php endif; ?>
            <div class="border-t-2 border-red-200 pt-3 mt-3">
                <div class="flex justify-between items-center">
                    <span class="text-lg font-bold text-gray-900">Tổng cộng</span>
                    <span class="text-2xl font-bold text-red-600">
                        <?php echo e(number_format($order->total_amount, 0, ',', '.')); ?>đ
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Notes -->
    <?php if($order->note): ?>
    <div class="bg-white p-6 rounded-xl border border-gray-200">
        <h3 class="text-lg font-bold text-gray-900 mb-3 flex items-center gap-2">
            <i class="fas fa-sticky-note text-red-600"></i>
            Ghi chú
        </h3>
        <p class="text-gray-700 bg-yellow-50 p-4 rounded-lg border border-yellow-200">
            <?php echo e($order->note); ?>

        </p>
    </div>
    <?php endif; ?>

    <!-- Action Buttons -->
    <div class="flex flex-wrap gap-3 pt-6 border-t border-gray-200">
        <?php if($order->status_id == 1): ?>
        <button onclick="cancelOrder(<?php echo e($order->id); ?>); closeOrderDetail();"
            class="flex-1 sm:flex-none px-8 py-3 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-all duration-200 font-medium shadow-md hover:shadow-lg">
            <i class="fas fa-times-circle mr-2"></i>Hủy đơn hàng
        </button>
        <?php endif; ?>

        <?php if($order->status_id == 4): ?>
        <button onclick="reviewOrder(<?php echo e($order->id); ?>); closeOrderDetail();"
            class="flex-1 sm:flex-none px-8 py-3 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition-all duration-200 font-medium shadow-md hover:shadow-lg">
            <i class="fas fa-star mr-2"></i>Đánh giá
        </button>
        <?php endif; ?>

        <?php if(in_array($order->status_id, [4, 5])): ?>
        <button onclick="reorder(<?php echo e($order->id); ?>); closeOrderDetail();"
            class="flex-1 sm:flex-none px-8 py-3 border-2 border-red-600 text-red-600 rounded-lg hover:bg-red-50 transition-all duration-200 font-medium">
            <i class="fas fa-redo mr-2"></i>Mua lại
        </button>
        <?php endif; ?>

        <?php if($order->status_id == 3): ?>
        <button onclick="trackOrder(<?php echo e($order->id); ?>)"
            class="flex-1 sm:flex-none px-8 py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition-all duration-200 font-medium shadow-md hover:shadow-lg">
            <i class="fas fa-map-marked-alt mr-2"></i>Theo dõi đơn hàng
        </button>
        <?php endif; ?>

        <button onclick="window.open('<?php echo e(route('orders.print', $order->id)); ?>', '_blank')"
            class="flex-1 sm:flex-none px-8 py-3 border-2 border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-all duration-200 font-medium">
            <i class="fas fa-print mr-2"></i>In đơn hàng
        </button>

        <button onclick="contactSupport(<?php echo e($order->id); ?>)"
            class="flex-1 sm:flex-none px-8 py-3 border-2 border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50 transition-all duration-200 font-medium">
            <i class="fas fa-headset mr-2"></i>Liên hệ hỗ trợ
        </button>
    </div>  
</div>

<!-- Print Styles -->
<style>
    @media print {
        body * {
            visibility: hidden;
        }

        #orderDetailContent,
        #orderDetailContent * {
            visibility: visible;
        }

        #orderDetailContent {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
        }

        button {
            display: none !important;
        }
    }
</style><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/client/profile/sections/order-detail.blade.php ENDPATH**/ ?>