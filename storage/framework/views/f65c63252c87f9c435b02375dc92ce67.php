<!-- Orders Section - Complete -->
<!-- Thêm SweetAlert2 CDN vào head -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="bg-white rounded-xl shadow-sm border border-gray-200">
    <!-- Header -->
    <div class="p-6 border-b border-gray-200 bg-gradient-to-r from-red-50 to-white">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-gray-900 flex items-center gap-3">
                    <i class="fas fa-shopping-bag text-red-600"></i>
                    Đơn hàng của tôi
                </h1>
                <p class="text-gray-600 mt-1">Quản lý và theo dõi đơn hàng của bạn</p>
            </div>
            <div class="text-right hidden sm:block">
                <p class="text-sm text-gray-600">Tổng đơn hàng</p>
                <p class="text-2xl font-bold text-red-600"><?php echo e($user->orders->count()); ?></p>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-xl shadow-sm border border-gray-200" x-data="{ activeTab: 'all' }">

        <!-- Filter Tabs -->
        <div class="px-6 pt-6 border-b border-gray-200">
            <div class="px-6 border-b border-gray-200">
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-3 gap-2 pb-4">

                    <button @click="activeTab = 'all'"
                        :class="activeTab === 'all' ? 'bg-red-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                        class="px-6 py-2.5 rounded-lg font-medium transition-all duration-200 flex items-center gap-2">
                        <i class="fas fa-list"></i>
                        <span>Tất cả</span>
                        <span class="ml-1 px-2 py-0.5 text-xs rounded-full"
                            :class="activeTab === 'all' ? 'bg-red-700' : 'bg-gray-300'">
                            <?php echo e($user->orders->count()); ?>

                        </span>
                    </button>

                    <button @click="activeTab = 'pending'"
                        :class="activeTab === 'pending' ? 'bg-yellow-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                        class="px-6 py-2.5 rounded-lg font-medium transition-all duration-200 flex items-center gap-2">
                        <i class="fas fa-clock"></i>
                        <span>Chờ xác nhận</span>
                        <span class="ml-1 px-2 py-0.5 text-xs rounded-full"
                            :class="activeTab === 'pending' ? 'bg-yellow-700' : 'bg-gray-300'">
                            <?php echo e($user->orders->where('status_id', 1)->count()); ?>

                        </span>
                    </button>

                    <button @click="activeTab = 'processing'"
                        :class="activeTab === 'processing' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                        class="px-6 py-2.5 rounded-lg font-medium transition-all duration-200 flex items-center gap-2">
                        <i class="fas fa-box"></i>
                        <span>Đang xử lý</span>
                        <span class="ml-1 px-2 py-0.5 text-xs rounded-full"
                            :class="activeTab === 'processing' ? 'bg-blue-700' : 'bg-gray-300'">
                            <?php echo e($user->orders->where('status_id', 2)->count()); ?>

                        </span>
                    </button>

                    <button @click="activeTab = 'shipping'"
                        :class="activeTab === 'shipping' ? 'bg-purple-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                        class="px-6 py-2.5 rounded-lg font-medium transition-all duration-200 flex items-center gap-2">
                        <i class="fas fa-truck"></i>
                        <span>Đang giao</span>
                        <span class="ml-1 px-2 py-0.5 text-xs rounded-full"
                            :class="activeTab === 'shipping' ? 'bg-purple-700' : 'bg-gray-300'">
                            <?php echo e($user->orders->where('status_id', 3)->count()); ?>

                        </span>
                    </button>

                    <button @click="activeTab = 'completed'"
                        :class="activeTab === 'completed' ? 'bg-green-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                        class="px-6 py-2.5 rounded-lg font-medium transition-all duration-200 flex items-center gap-2">
                        <i class="fas fa-check-circle"></i>
                        <span>Đã giao</span>
                        <span class="ml-1 px-2 py-0.5 text-xs rounded-full"
                            :class="activeTab === 'completed' ? 'bg-green-700' : 'bg-gray-300'">
                            <?php echo e($user->orders->where('status_id', 4)->count()); ?>

                        </span>
                    </button>

                    <button @click="activeTab = 'cancelled'"
                        :class="activeTab === 'cancelled' ? 'bg-red-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                        class="px-6 py-2.5 rounded-lg font-medium transition-all duration-200 flex items-center gap-2">
                        <i class="fas fa-times-circle"></i>
                        <span>Đã hủy</span>
                        <span class="ml-1 px-2 py-0.5 text-xs rounded-full"
                            :class="activeTab === 'cancelled' ? 'bg-red-700' : 'bg-gray-300'">
                            <?php echo e($user->orders->where('status_id', 5)->count()); ?>

                        </span>
                    </button>

                </div>
            </div>

        </div>

        <!-- Orders List -->
        <div class="p-6">
            <?php if($user->orders->count() > 0): ?>
            <div class="space-y-6">
                <?php $__currentLoopData = $user->orders->sortByDesc('created_at'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div id="order-<?php echo e($order->id); ?>"
                    class="border border-gray-200 rounded-xl hover:shadow-lg transition-all duration-300 overflow-hidden"
                    data-status="<?php echo e($order->status_id); ?>"
                    x-show="activeTab === 'all' || 
                                 (activeTab === 'pending' && <?php echo e($order->status_id); ?> === 1) ||
                                 (activeTab === 'processing' && <?php echo e($order->status_id); ?> === 2) ||
                                 (activeTab === 'shipping' && <?php echo e($order->status_id); ?> === 3) ||
                                 (activeTab === 'completed' && <?php echo e($order->status_id); ?> === 4) ||
                                 (activeTab === 'cancelled' && <?php echo e($order->status_id); ?> === 5)"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0">

                    <!-- Order Header -->
                    <div class="p-5 bg-gradient-to-r from-gray-50 to-white border-b border-gray-200">
                        <div class="flex flex-wrap justify-between items-center gap-4">
                            <div class="flex items-center gap-6">
                                <div>
                                    <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">Mã đơn hàng</p>
                                    <p class="font-bold text-gray-900 text-lg">#<?php echo e($order->order_no); ?></p>
                                </div>
                                <div class="hidden sm:block w-px h-12 bg-gray-300"></div>
                                <div class="hidden sm:block">
                                    <p class="text-xs text-gray-500 uppercase tracking-wider mb-1">Ngày đặt</p>
                                    <p class="text-gray-900 font-medium"><?php echo e($order->created_at->format('d/m/Y')); ?></p>
                                    <p class="text-xs text-gray-500"><?php echo e($order->created_at->format('H:i')); ?></p>
                                </div>
                            </div>

                            <div class="flex items-center gap-3">
                                <?php
                                $statusConfig = [
                                1 => ['bg' => 'bg-yellow-100', 'text' => 'text-yellow-800', 'icon' => 'fa-clock'],
                                2 => ['bg' => 'bg-blue-100', 'text' => 'text-blue-800', 'icon' => 'fa-box'],
                                3 => ['bg' => 'bg-purple-100', 'text' => 'text-purple-800', 'icon' => 'fa-truck'],
                                4 => ['bg' => 'bg-green-100', 'text' => 'text-green-800', 'icon' => 'fa-check-circle'],
                                5 => ['bg' => 'bg-red-100', 'text' => 'text-red-800', 'icon' => 'fa-times-circle'],
                                6 => ['bg' => 'bg-gray-100', 'text' => 'text-gray-800', 'icon' => 'fa-undo']
                                ];
                                $config = $statusConfig[$order->status_id] ?? ['bg' => 'bg-gray-100', 'text' => 'text-gray-800', 'icon' => 'fa-question'];
                                ?>
                                <span class="order-status px-4 py-2 rounded-full text-sm font-semibold <?php echo e($config['bg']); ?> <?php echo e($config['text']); ?> flex items-center gap-2">
                                    <i class="fas <?php echo e($config['icon']); ?>"></i>
                                    <span class="status-name">
                                        <?php if(is_object($order->status)): ?>
                                        <?php echo e($order->status->name); ?>

                                        <?php else: ?>
                                        <?php echo e($order->status ?? 'Không xác định'); ?>

                                        <?php endif; ?>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Order Items -->
                    <div class="p-5 bg-white">
                        <div class="space-y-4">
                            <?php $__currentLoopData = $order->orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            $productId = $item->productVariant->product_id;

                            // Kiểm tra user đã review chưa
                            $hasReviewed = \App\Models\Review::where('product_id', $productId)
                            ->where('user_id', auth()->id())
                            ->exists();
                            ?>
                            <div class="flex gap-4 p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                                <!-- Product Image -->
                                <div class="w-24 h-24 flex-shrink-0 bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm">
                                    <?php if($item->productVariant && $item->productVariant->product && $item->productVariant->product->images->first()): ?>
                                    <img src="<?php echo e(asset('images/products/' . $item->productVariant->product->images->first()->url)); ?>"
                                        alt="<?php echo e($item->product_name); ?>"
                                        class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                                    <?php else: ?>
                                    <div class="w-full h-full flex items-center justify-center bg-gray-100">
                                        <i class="fas fa-image text-gray-400 text-3xl"></i>
                                    </div>
                                    <?php endif; ?>
                                </div>

                                <!-- Product Info -->
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-semibold text-gray-900 text-lg mb-2 line-clamp-2"><?php echo e($item->product_name); ?></h4>
                                    <?php if($item->productVariant): ?>
                                    <div class="flex flex-wrap gap-3 text-sm text-gray-600 mb-2">
                                        <span class="inline-flex items-center gap-1 bg-white px-2 py-1 rounded border border-gray-200">
                                            <i class="fas fa-barcode text-gray-400"></i>
                                            <?php echo e($item->productVariant->sku); ?>

                                        </span>
                                        <?php if($item->productVariant->color): ?>
                                        <span class="inline-flex items-center gap-1 bg-white px-2 py-1 rounded border border-gray-200">
                                            <i class="fas fa-palette text-gray-400"></i>
                                            <?php echo e($item->productVariant->color); ?>

                                        </span>
                                        <?php endif; ?>
                                        <?php if($item->productVariant->size): ?>
                                        <span class="inline-flex items-center gap-1 bg-white px-2 py-1 rounded border border-gray-200">
                                            <i class="fas fa-ruler text-gray-400"></i>
                                            <?php echo e($item->productVariant->size); ?>

                                        </span>
                                        <?php endif; ?>
                                    </div>
                                    <?php endif; ?>
                                    <p class="text-sm text-gray-600 flex items-center gap-2">
                                        <i class="fas fa-boxes text-gray-400"></i>
                                        Số lượng: <span class="font-semibold text-gray-900"><?php echo e($item->quantity); ?></span>
                                    </p>
                                </div>

                                <!-- Price -->
                                <div class="text-right flex-shrink-0">
                                    <p class="text-sm text-gray-500 mb-1">Đơn giá</p>
                                    <p class="font-semibold text-gray-900 text-lg"><?php echo e(number_format($item->price, 0, ',', '.')); ?>đ</p>
                                    <div class="mt-2 pt-2 border-t border-gray-300">
                                        <p class="text-xs text-gray-500 mb-1">Thành tiền</p>
                                        <p class="font-bold text-red-600 text-lg">
                                            <?php echo e(number_format($item->price * $item->quantity, 0, ',', '.')); ?>đ
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <!-- Order Summary -->
                        <div class="mt-5 pt-5 border-t-2 border-gray-200 bg-gradient-to-r from-red-50 to-white p-4 rounded-lg">
                            <div class="flex justify-between items-center">
                                <div class="text-gray-700 flex items-center gap-2">
                                    <i class="fas fa-box-open text-red-600 text-xl"></i>
                                    <span class="font-medium">Tổng <span class="font-bold text-red-600"><?php echo e($order->orderItems->count()); ?></span> sản phẩm</span>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm text-gray-600 mb-1">Tổng tiền thanh toán</p>
                                    <p class="text-2xl font-bold text-red-600">
                                        <?php echo e(number_format($order->total_amount, 0, ',', '.')); ?>đ
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Delivery Address -->
                        <?php if($order->address): ?>
                        <div class="mt-5 p-4 bg-blue-50 rounded-lg border border-blue-200">
                            <div class="flex items-start gap-3">
                                <i class="fas fa-map-marker-alt text-blue-600 text-xl mt-1"></i>
                                <div class="flex-1">
                                    <p class="font-semibold text-gray-900 mb-2 flex items-center gap-2">
                                        <span>Địa chỉ giao hàng</span>
                                    </p>
                                    <p class="text-gray-700 font-medium">
                                        <?php echo e($order->address->full_name ?? $order->address->recipient_name ?? ''); ?>

                                        <span class="text-gray-500">|</span>
                                        <span class="text-blue-600"><?php echo e($order->address->phone ?? ''); ?></span>
                                    </p>
                                    <p class="text-gray-600 mt-1">
                                        <?php echo e($order->address->address ?? $order->address->address_line ?? ''); ?>,
                                        <?php echo e($order->address->district->name ?? ''); ?>,
                                        <?php echo e($order->address->province->name ?? ''); ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Payment Method -->
                        <?php if($order->payment): ?>
                        <div class="mt-3 p-4 bg-green-50 rounded-lg border border-green-200">
                            <div class="flex items-center gap-3">
                                <i class="fas fa-credit-card text-green-600 text-xl"></i>
                                <div>
                                    <p class="font-semibold text-gray-900">Phương thức thanh toán</p>
                                    <p class="text-gray-700">
                                        <?php echo e($order->payment->payment_method == 'cod' ? 'Thanh toán khi nhận hàng (COD)' : 
                                                   ($order->payment->payment_method == 'bank_transfer' ? 'Chuyển khoản ngân hàng' : 
                                                   ($order->payment->payment_method == 'vnpay' ? 'VNPay' : 'Khác'))); ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Action Buttons -->
                        <div class="order-actions mt-5 pt-5 border-t border-gray-200 flex flex-wrap gap-3">
                            <?php if($order->status_id == 1): ?>
                            <!-- Chờ xác nhận -->
                            <button onclick="cancelOrder(<?php echo e($order->id); ?>)"
                                class="cancel-btn flex-1 sm:flex-none px-6 py-3 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-all duration-200 font-medium shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                <i class="fas fa-times-circle mr-2"></i>Hủy đơn
                            </button>
                            <?php endif; ?>

                            <?php if($order->status_id == 4 && !$hasReviewed): ?>
                            <button onclick="window.location.href='<?php echo e(route('orders.review.show', $order->id)); ?>'"
                                class="flex-1 sm:flex-none px-6 py-3 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition-all">
                                <i class="fas fa-star mr-2"></i>Đánh giá
                            </button>
                            <?php endif; ?>

                            <button onclick="viewOrderDetail(<?php echo e($order->id); ?>)"
                                class="flex-1 sm:flex-none px-6 py-3 border-2 border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 hover:border-gray-400 transition-all duration-200 font-medium shadow-sm hover:shadow">
                                <i class="fas fa-eye mr-2"></i>Chi tiết
                            </button>

                            

                            <?php if($order->status_id == 3): ?>
                            <!-- Đang giao - Theo dõi đơn hàng -->
                            <button onclick="trackOrder(<?php echo e($order->id); ?>)"
                                class="flex-1 sm:flex-none px-6 py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition-all duration-200 font-medium shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                <i class="fas fa-map-marked-alt mr-2"></i>Theo dõi
                            </button>
                            <?php endif; ?>

                            <?php if($order->status_id == 4): ?>
                            <!-- Đã giao và chưa đánh giá -->
                            <button onclick="contactSupport(<?php echo e($order->id); ?>)"
                                class="flex-1 sm:flex-none px-6 py-3 border-2 border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50 transition-all duration-200 font-medium shadow-sm hover:shadow">
                                <i class="fas fa-headset mr-2"></i>Hỗ trợ
                            </button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php else: ?>
            <!-- Empty State -->
            <div class="text-center py-16">
                <div class="w-32 h-32 mx-auto mb-6 bg-gradient-to-br from-red-100 to-red-50 rounded-full flex items-center justify-center shadow-lg">
                    <i class="fas fa-shopping-bag text-red-400 text-5xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Chưa có đơn hàng nào</h3>
                <p class="text-gray-600 mb-8 max-w-md mx-auto">Bạn chưa có đơn hàng nào. Hãy khám phá và mua sắm ngay!</p>
                <a href="<?php echo e(route('products.index')); ?>"
                    class="inline-flex items-center px-8 py-4 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-all duration-200 font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    <i class="fas fa-shopping-cart mr-3 text-lg"></i>
                    Mua sắm ngay
                </a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Order Detail Modal -->
<div id="orderDetailModal" class="fixed inset-0 bg-opacity-50 z-50 hidden items-center justify-center p-4" style="display: none;">
    <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden shadow-2xl">
        <div class="p-6 border-b border-gray-200 bg-gradient-to-r from-red-50 to-white">
            <div class="flex items-center justify-between">
                <h2 class="text-2xl font-bold text-gray-900 flex items-center gap-3">
                    <i class="fas fa-file-invoice text-red-600"></i>
                    Chi tiết đơn hàng
                </h2>
                <button onclick="closeOrderDetail()" class="text-gray-500 hover:text-gray-700 text-2xl">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div id="orderDetailContent" class="p-6 overflow-y-auto max-h-[calc(90vh-120px)]">
            <!-- Content will be loaded here -->
        </div>
    </div>
</div>
<?php echo app('Illuminate\Foundation\Vite')(['resources/js/client/orders.js']); ?>

<!-- JavaScript Functions with SweetAlert2 -->
<script>
    // Hủy đơn hàng
    function cancelOrder(orderId) {
        Swal.fire({
            title: 'Xác nhận hủy đơn',
            html: `
            <div class="text-left">
                <p class="text-gray-700 mb-3">Bạn có chắc chắn muốn hủy đơn hàng này?</p>
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-3 rounded">
                    <p class="text-sm text-yellow-800">
                        <i class="fas fa-info-circle mr-2"></i>
                        Sản phẩm sẽ được hoàn trả vào kho sau khi hủy.
                    </p>
                </div>
            </div>
        `,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#dc2626',
            cancelButtonColor: '#6b7280',
            confirmButtonText: '<i class="fas fa-times-circle mr-2"></i>Hủy đơn',
            cancelButtonText: '<i class="fas fa-arrow-left mr-2"></i>Quay lại',
            reverseButtons: true,
            customClass: {
                popup: 'rounded-xl',
                confirmButton: 'px-6 py-3 rounded-lg font-medium',
                cancelButton: 'px-6 py-3 rounded-lg font-medium'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: 'Đang xử lý...',
                    html: '<div class="flex justify-center"><div class="animate-spin rounded-full h-12 w-12 border-4 border-red-600 border-t-transparent"></div></div>',
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    allowEscapeKey: false
                });

                fetch(`/orders/${orderId}/cancel`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                        }
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            const orderElement = document.getElementById(`order-${orderId}`);
                            const statusElement = orderElement.querySelector('.order-status');
                            const actionsElement = orderElement.querySelector('.order-actions');

                            // Cập nhật trạng thái
                            statusElement.className = 'order-status px-4 py-2 rounded-full text-sm font-semibold bg-red-100 text-red-800 flex items-center gap-2';
                            statusElement.innerHTML = `
                        <i class="fas fa-times-circle"></i>
                        <span class="status-name">${data.order.status.name}</span>
                    `;

                            // Cập nhật nút hành động
                            actionsElement.innerHTML = `
                        <button onclick="viewOrderDetail(${orderId})" 
                               class="flex-1 sm:flex-none px-6 py-3 border-2 border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 hover:border-gray-400 transition-all duration-200 font-medium shadow-sm hover:shadow">
                            <i class="fas fa-eye mr-2"></i>Chi tiết
                        </button>
                        <button onclick="reorder(${orderId})" 
                                class="flex-1 sm:flex-none px-6 py-3 border-2 border-red-600 text-red-600 rounded-lg hover:bg-red-50 transition-all duration-200 font-medium shadow-sm hover:shadow">
                            <i class="fas fa-redo mr-2"></i>Mua lại
                        </button>
                    `;

                            Swal.fire({
                                icon: 'success',
                                title: 'Thành công!',
                                html: `
                            <div class="text-left">
                                <p class="text-gray-700 mb-3">Hủy đơn hàng thành công!</p>
                                <div class="bg-green-50 border-l-4 border-green-400 p-3 rounded">
                                    <p class="text-sm text-green-800">
                                        <i class="fas fa-check-circle mr-2"></i>
                                        Sản phẩm đã được hoàn trả vào kho.
                                    </p>
                                </div>
                            </div>
                        `,
                                confirmButtonColor: '#dc2626',
                                confirmButtonText: '<i class="fas fa-check mr-2"></i>Đóng',
                                customClass: {
                                    popup: 'rounded-xl',
                                    confirmButton: 'px-6 py-3 rounded-lg font-medium'
                                }
                            });

                            orderElement.classList.add('animate-pulse');
                            setTimeout(() => {
                                orderElement.classList.remove('animate-pulse');
                            }, 1000);
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Lỗi!',
                                text: data.message || 'Có lỗi xảy ra. Vui lòng thử lại!',
                                confirmButtonColor: '#dc2626',
                                confirmButtonText: '<i class="fas fa-times mr-2"></i>Đóng',
                                customClass: {
                                    popup: 'rounded-xl',
                                    confirmButton: 'px-6 py-3 rounded-lg font-medium'
                                }
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Lỗi!',
                            text: 'Có lỗi xảy ra. Vui lòng thử lại!',
                            confirmButtonColor: '#dc2626',
                            confirmButtonText: '<i class="fas fa-times mr-2"></i>Đóng',
                            customClass: {
                                popup: 'rounded-xl',
                                confirmButton: 'px-6 py-3 rounded-lg font-medium'
                            }
                        });
                    });
            }
        });
    }

    // Đánh giá đơn hàng
    function reviewOrder(orderId) {
        window.location.href = `/orders/${orderId}/review`;
    }

    // Mua lại đơn hàng
    function reorder(orderId) {
        Swal.fire({
            title: 'Mua lại đơn hàng',
            text: 'Bạn muốn mua lại các sản phẩm trong đơn hàng này?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#dc2626',
            cancelButtonColor: '#6b7280',
            confirmButtonText: '<i class="fas fa-shopping-cart mr-2"></i>Mua lại',
            cancelButtonText: '<i class="fas fa-times mr-2"></i>Hủy',
            customClass: {
                popup: 'rounded-xl',
                confirmButton: 'px-6 py-3 rounded-lg font-medium',
                cancelButton: 'px-6 py-3 rounded-lg font-medium'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: 'Đang xử lý...',
                    html: '<div class="flex justify-center"><div class="animate-spin rounded-full h-12 w-12 border-4 border-red-600 border-t-transparent"></div></div>',
                    showConfirmButton: false,
                    allowOutsideClick: false
                });

                fetch(`/orders/${orderId}/reorder`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Thành công!',
                                text: data.message,
                                confirmButtonColor: '#dc2626',
                                confirmButtonText: '<i class="fas fa-shopping-cart mr-2"></i>Xem giỏ hàng',
                                customClass: {
                                    popup: 'rounded-xl',
                                    confirmButton: 'px-6 py-3 rounded-lg font-medium'
                                }
                            }).then(() => {
                                window.location.href = '/cart';
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Lỗi!',
                                text: data.message || 'Có lỗi xảy ra. Vui lòng thử lại!',
                                confirmButtonColor: '#dc2626',
                                confirmButtonText: '<i class="fas fa-times mr-2"></i>Đóng',
                                customClass: {
                                    popup: 'rounded-xl',
                                    confirmButton: 'px-6 py-3 rounded-lg font-medium'
                                }
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Lỗi!',
                            text: 'Có lỗi xảy ra. Vui lòng thử lại!',
                            confirmButtonColor: '#dc2626',
                            confirmButtonText: '<i class="fas fa-times mr-2"></i>Đóng',
                            customClass: {
                                popup: 'rounded-xl',
                                confirmButton: 'px-6 py-3 rounded-lg font-medium'
                            }
                        });
                    });
            }
        });
    }

    // Xem chi tiết đơn hàng
    function viewOrderDetail(orderId) {
        const modal = document.getElementById('orderDetailModal');
        const content = document.getElementById('orderDetailContent');

        modal.style.display = 'flex';
        content.innerHTML = '<div class="flex justify-center py-12"><div class="animate-spin rounded-full h-12 w-12 border-4 border-red-600 border-t-transparent"></div></div>';

        fetch(`/orders/${orderId}`, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.text())
            .then(html => {
                content.innerHTML = html;
            })
            .catch(error => {
                console.error('Error:', error);
                content.innerHTML = '<div class="text-center py-12 text-red-600"><i class="fas fa-exclamation-circle text-4xl mb-4"></i><p>Không thể tải chi tiết đơn hàng</p></div>';
            });
    }

    // Đóng modal chi tiết
    function closeOrderDetail() {
        document.getElementById('orderDetailModal').style.display = 'none';
    }

    // Theo dõi đơn hàng
    function trackOrder(orderId) {
        Swal.fire({
            title: 'Theo dõi đơn hàng',
            html: `
            <div class="text-left space-y-4">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-check text-green-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-900">Đơn hàng đã được xác nhận</p>
                        <p class="text-sm text-gray-600">Đã xác nhận và đang chuẩn bị</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-check text-green-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-900">Đã đóng gói</p>
                        <p class="text-sm text-gray-600">Sản phẩm đã được đóng gói</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center animate-pulse">
                        <i class="fas fa-truck text-blue-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-900">Đang giao hàng</p>
                        <p class="text-sm text-gray-600">Shipper đang trên đường giao</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 opacity-50">
                    <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-box-open text-gray-400 text-xl"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-900">Đã giao hàng</p>
                        <p class="text-sm text-gray-600">Chờ giao hàng thành công</p>
                    </div>
                </div>
            </div>
        `,
            icon: 'info',
            confirmButtonColor: '#dc2626',
            confirmButtonText: '<i class="fas fa-check mr-2"></i>Đóng',
            customClass: {
                popup: 'rounded-xl',
                confirmButton: 'px-6 py-3 rounded-lg font-medium'
            },
            width: '600px'
        });
    }

    // Liên hệ hỗ trợ
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

    // Đóng modal khi click outside
    document.getElementById('orderDetailModal')?.addEventListener('click', function(e) {
        if (e.target === this) {
            closeOrderDetail();
        }
    });

    // Thêm style cho scrollbar ẩn
    const style = document.createElement('style');
    style.textContent = `
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
`;
    document.head.appendChild(style);
</script><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/client/profile/sections/orders.blade.php ENDPATH**/ ?>