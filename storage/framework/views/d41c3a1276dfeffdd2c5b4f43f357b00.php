<?php $__env->startSection('content'); ?>
<div class="max-w-7xl mx-auto">
    <!-- Card tổng -->
    <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-8 space-y-10">

        <!-- Header -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pb-6 border-b border-gray-300">
            <div class="flex items-center gap-3">
                <div class="px-6 py-2 rounded-full bg-gradient-to-r from-green-100 to-emerald-100 border border-green-300 shadow-sm">
                    <p class="text-xl font-semibold text-green-700">#<?php echo e($order->order_no); ?></p>
                </div>
                <span class="text-sm text-gray-500 font-medium">
                    Cập nhật lần cuối: <?php echo e($order->updated_at->format('d/m/Y H:i')); ?>

                </span>
            </div>

            <a href="<?php echo e(route('admin.orders.index')); ?>"
                class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 border border-gray-300 rounded-xl transition-all shadow-sm hover:shadow">
                <i class="fa-solid fa-arrow-left text-gray-500"></i>
                <span>Quay lại danh sách</span>
            </a>
        </div>

        <div class="flex items-center justify-between relative max-w-4xl mx-auto">
            <!-- Background Line -->
            <div class="absolute top-[26px] left-0 right-0 h-1 bg-gray-200 rounded-full z-0"></div>

            <!-- Progress Line -->
            <div class="absolute top-[26px] left-0 h-1 bg-red-600 transition-all duration-500 rounded-full z-0"
                style="width: <?php echo e($order->status_id == 5 ? '100%' : ((($order->status_id - 1) / 3) * 100) . '%'); ?>"></div>

            <!-- Các bước -->
            <div class="flex justify-between relative z-10 w-full">
                <?php $__currentLoopData = [
                1 => ['Chờ xử lý', 'clock'],
                2 => ['Đã xác nhận', 'check-circle'],
                3 => ['Đang giao', 'truck'],
                4 => ['Hoàn thành', 'check-double'],
                5 => ['Đã hủy', 'times-circle']
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statusId => $statusInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php if($order->status_id == 5 || $statusId != 5): ?>
                <div class="flex flex-col items-center relative bg-white">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center text-sm mb-3 transition-all border-2
                        <?php echo e($order->status_id >= $statusId && $order->status_id != 5
                            ? 'bg-red-600 border-red-600 text-white'
                            : ($order->status_id == 5 && $statusId == 5
                                ? 'bg-red-500 border-red-500 text-white'
                                : 'bg-white border-gray-300 text-gray-400')); ?>">
                        <i class="fas fa-<?php echo e($statusInfo[1]); ?>"></i>
                    </div>
                    <span class="text-xs font-medium
                        <?php echo e($order->status_id >= $statusId && $order->status_id != 5
                            ? 'text-gray-900'
                            : ($order->status_id == 5 && $statusId == 5
                                ? 'text-red-600'
                                : 'text-gray-500')); ?>

                        text-center whitespace-nowrap">
                        <?php echo e($statusInfo[0]); ?>

                    </span>
                </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>


        <!-- Thông tin cơ bản -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 border-t border-gray-300 pt-8">
            <!-- Đơn hàng -->
            <div class="bg-gradient-to-br from-gray-50 to-white p-6 rounded-xl border border-gray-200">
                <h3 class="flex items-center gap-3 text-lg font-bold text-gray-900 pb-3 mb-6 border-b border-gray-200">
                    <span class="inline-block w-1.5 h-6 bg-red-500 rounded-full"></span>
                    <span>Thông tin đơn hàng</span>
                </h3>
                <div class="space-y-3 text-sm">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Trạng thái</span>
                        <span class="px-3 py-1.5 text-xs font-medium rounded-full border shadow-sm
                    <?php switch($order->status_id):
                        case (1): ?> bg-amber-50 text-amber-700 border-amber-200 <?php break; ?>
                        <?php case (2): ?> bg-blue-50 text-blue-700 border-blue-200 <?php break; ?>
                        <?php case (3): ?> bg-cyan-50 text-cyan-700 border-cyan-200 <?php break; ?>
                        <?php case (4): ?> bg-emerald-50 text-emerald-700 border-emerald-200 <?php break; ?>
                        <?php case (5): ?> bg-rose-50 text-rose-700 border-rose-200 <?php break; ?>
                    <?php endswitch; ?>">
                            <?php echo e($order->status->name); ?>

                        </span>
                    </div>
                    <div class="flex justify-between items-center pt-2 border-t border-gray-200">
                        <span class="text-gray-600">Tổng tiền</span>
                        <span class="text-xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                            <?php echo e(number_format($order->total_amount, 0, ',', '.')); ?> ₫
                        </span>
                    </div>
                    <div class="flex justify-between text-gray-500 pt-2">
                        <span>Ngày tạo</span>
                        <span class="font-medium"><?php echo e($order->created_at->format('d/m/Y H:i')); ?></span>
                    </div>
                    <div class="flex justify-between text-gray-500 pt-2">
                        <span>Người cập nhật</span>
                        <span class="font-medium"><?php echo e(optional($order->updater)->full_name ?? '—'); ?></span>
                    </div>
                </div>
            </div>

            <!-- Khách hàng -->
            <div class="bg-gradient-to-br from-gray-50 to-white p-6 rounded-xl border border-gray-300">
                <h3 class="flex items-center gap-3 text-lg font-bold text-gray-900 pb-3 mb-6 border-b border-gray-200">
                    <span class="inline-block w-1.5 h-6 bg-red-500 rounded-full"></span>
                    <span>Thông tin khách hàng</span>
                </h3>
                <div class="space-y-2.5 text-sm">
                    <p><span class="text-gray-600">Họ tên:</span> <span class="font-medium text-gray-900"><?php echo e($order->user->full_name ?? 'Khách vãng lai'); ?></span></p>
                    <p><span class="text-gray-600">Email:</span> <span class="text-gray-900"><?php echo e($order->user->email ?? '—'); ?></span></p>
                    <p><span class="text-gray-600">SĐT:</span> <span class="text-gray-900"><?php echo e($order->address->phone ?? '—'); ?></span></p>
                    <div class="pt-2 border-t border-gray-200">
                        <p class="text-gray-600 mb-1.5">Địa chỉ:</p>
                        <p class="text-gray-800 text-sm leading-relaxed pl-4 border-l-2 border-indigo-200">
                            <?php echo e($order->address?->address ?? '—'); ?><br>
                            <?php if($order->address?->district?->name): ?>
                            <?php echo e($order->address->district->name); ?>,
                            <?php endif; ?>
                            <?php echo e($order->address?->province?->name ?? ''); ?>

                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sản phẩm -->
        <div class="pt-12 border-t border-gray-200">
            <h3 class="flex items-center gap-3 text-lg font-bold text-gray-900 pb-3 mb-6 border-b border-gray-200">
                <span class="inline-block w-1.5 h-6 bg-red-500 rounded-full"></span>
                <span>Sản phẩm trong đơn (<?php echo e($order->items->count()); ?>)</span>
            </h3>

            <div class="overflow-hidden rounded-xl border border-gray-200">
                <table class="min-w-full text-sm text-gray-700">
                    <thead class="border-b border-gray-200 bg-gradient-to-r from-gray-50 to-gray-100">
                        <tr>
                            <th class="px-6 py-4 text-center font-semibold text-gray-700 uppercase text-xs tracking-wide">STT</th>
                            <th class="px-6 py-4 text-left font-semibold text-gray-700 uppercase text-xs tracking-wide">Sản phẩm</th>
                            <th class="px-6 py-4 text-center font-semibold text-gray-700 uppercase text-xs tracking-wide">SL</th>
                            <th class="px-6 py-4 text-center font-semibold text-gray-700 uppercase text-xs tracking-wide">Đơn giá</th>
                            <th class="px-6 py-4 text-center font-semibold text-gray-700 uppercase text-xs tracking-wide">Tổng</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-100 bg-white">
                        <?php $__empty_1 = true; $__currentLoopData = $order->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 text-center font-medium text-gray-700"><?php echo e($index + 1); ?></td>
                            <td class="px-6 py-4 font-medium text-gray-900">
                                <?php echo e($item->product_name ?? $item->productVariant->product->name ?? 'Sản phẩm đã xóa'); ?>

                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class=" font-medium"><?php echo e($item->quantity); ?></span>
                            </td>
                            <td class="px-6 py-4 text-center text-gray-700"><?php echo e(number_format($item->price, 0, ',', '.')); ?> ₫</td>
                            <td class="px-6 py-4 text-center font-semibold text-gray-900">
                                <?php echo e(number_format($item->price * $item->quantity, 0, ',', '.')); ?> ₫
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="4" class="py-8 text-center text-gray-500 italic">
                                <i class="fa-regular fas fa-archive text-gray-400 mr-1"></i>
                                Không có sản phẩm trong đơn hàng
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <div class="text-xl font-bold bg-clip-text text-right mt-4 mr-1">
                Tổng tiền: <?php echo e(number_format($order->total_amount, 0, ',', '.')); ?> ₫
            </div>
        </div>


        <!-- Vận chuyển & Thanh toán -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 border-t border-gray-300 pt-12">
            <!-- Vận chuyển -->
            <div class="bg-gradient-to-br from-blue-50 to-white p-6 rounded-xl border border-blue-200">
                <h3 class="flex items-center gap-3 text-lg font-bold text-gray-900 pb-3 mb-6 border-b border-blue-200">
                    <span class="inline-block w-1.5 h-6 bg-blue-500 rounded-full"></span>
                    <span>Thông tin vận chuyển</span>
                </h3>
                <?php if($order->shipment): ?>
                <dl class="space-y-3 text-sm">
                    <div class="flex justify-between items-center">
                        <dt class="text-gray-600">Đơn vị vận chuyển:</dt>
                        <dd class="font-medium text-gray-900"><?php echo e($order->shipment->carrier->name ?? '—'); ?></dd>
                    </div>
                    <div class="flex justify-between items-center">
                        <dt class="text-gray-600">Mã vận đơn:</dt>
                        <dd class="font-mono text-indigo-600 font-semibold text-base"><?php echo e($order->shipment->tracking_number ?? '—'); ?></dd>
                    </div>
                    <div class="flex justify-between items-center">
                        <dt class="text-gray-600">Trạng thái:</dt>
                        <dd><span class="px-3 py-1.5 rounded-full flex justify-between items-center bg-blue-100 border border-blue-200 text-blue-700 text-xs font-semibold"><?php echo e($order->shipment->status ?? '—'); ?></span></dd>
                    </div>
                    <div class="grid grid-cols-2 gap-4 border-t border-blue-100 pt-4 mt-3">
                        <div class="text-center p-3 bg-white rounded-lg border border-blue-100">
                            <p class="text-xs text-gray-500 mb-1">Ngày gửi</p>
                            <p class="font-medium text-gray-800"><?php echo e($order->shipment->shipped_at ?? '—'); ?></p>
                        </div>
                        <div class="text-center p-3 bg-white rounded-lg border border-blue-100">
                            <p class="text-xs text-gray-500 mb-1">Ngày giao</p>
                            <p class="font-medium text-gray-800"><?php echo e($order->shipment->delivered_at ?? '—'); ?></p>
                        </div>
                    </div>
                </dl>
                <?php else: ?>
                <p class="text-sm text-gray-500 italic">Chưa có thông tin vận chuyển.</p>
                <?php endif; ?>

            </div>

            <!-- Thanh toán -->
            <div class="bg-gradient-to-br from-green-50 to-white p-6 rounded-xl border border-green-300">
                <h3 class="flex items-center gap-3 text-lg font-bold text-gray-900 pb-3 mb-6 border-b border-green-200">
                    <span class="inline-block w-1.5 h-6 bg-green-500 rounded-full"></span>
                    <span>Thông tin thanh toán</span>
                </h3>
                <?php if($order->payment): ?>
                <dl class="space-y-3 text-sm">
                    <div class="flex justify-between items-center">
                        <dt class="text-gray-600">Phương thức:</dt>
                        <dd class="font-medium text-gray-900"><?php echo e($order->payment->method); ?></dd>
                    </div>
                    <div class="flex justify-between items-center">
                        <dt class="text-gray-600">Số tiền:</dt>
                        <dd class="font-semibold text-green-600 text-lg"><?php echo e(number_format($order->payment->amount, 0, ',', '.')); ?> ₫</dd>
                    </div>
                    <div class="flex justify-between items-center">
                        <dt class="text-gray-600">Trạng thái:</dt>
                        <dd>
                            <span class="px-3 py-1.5 rounded-lg text-xs font-semibold border
                                <?php echo e($order->payment->status === 'paid'
                                    ? 'bg-emerald-100 text-emerald-700 border-emerald-200'
                                    : 'bg-amber-100 text-amber-700 border-amber-200'); ?>">
                                <?php echo e(ucfirst($order->payment->status)); ?>

                            </span>
                        </dd>
                    </div>
                    <div class="pt-3 border-t border-green-100">
                        <p class="text-xs text-gray-500 mb-2">Mã giao dịch:</p>
                        <p class="font-mono text-sm text-gray-800 bg-white px-3 py-2 rounded-lg border border-green-100"><?php echo e($order->payment->transaction_id ?? '—'); ?></p>
                    </div>
                </dl>
                <?php else: ?>
                <p class="text-sm text-gray-500 italic">Chưa có thông tin thanh toán.</p>
                <?php endif; ?>

            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/admin/orders/show.blade.php ENDPATH**/ ?>