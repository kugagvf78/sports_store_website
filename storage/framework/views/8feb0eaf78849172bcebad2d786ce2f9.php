<?php $__env->startSection('content'); ?>

<div class="mt-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-5 pb-3">

        <?php if (isset($component)) { $__componentOriginal179d930850cbc0b57567dfb2ba44c92f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal179d930850cbc0b57567dfb2ba44c92f = $attributes; } ?>
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Doanh thu hôm nay','value' => number_format($totalRevenueToday, 0) . ' ₫','icon' => 'fa-dollar-sign','from' => 'blue-500','to' => 'indigo-600','iconColor' => 'blue-600'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\StatCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal179d930850cbc0b57567dfb2ba44c92f)): ?>
<?php $attributes = $__attributesOriginal179d930850cbc0b57567dfb2ba44c92f; ?>
<?php unset($__attributesOriginal179d930850cbc0b57567dfb2ba44c92f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal179d930850cbc0b57567dfb2ba44c92f)): ?>
<?php $component = $__componentOriginal179d930850cbc0b57567dfb2ba44c92f; ?>
<?php unset($__componentOriginal179d930850cbc0b57567dfb2ba44c92f); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal179d930850cbc0b57567dfb2ba44c92f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal179d930850cbc0b57567dfb2ba44c92f = $attributes; } ?>
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Tổng đơn hàng','value' => $totalOrders,'icon' => 'fa-shopping-cart','from' => 'green-500','to' => 'emerald-600','iconColor' => 'green-600'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\StatCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal179d930850cbc0b57567dfb2ba44c92f)): ?>
<?php $attributes = $__attributesOriginal179d930850cbc0b57567dfb2ba44c92f; ?>
<?php unset($__attributesOriginal179d930850cbc0b57567dfb2ba44c92f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal179d930850cbc0b57567dfb2ba44c92f)): ?>
<?php $component = $__componentOriginal179d930850cbc0b57567dfb2ba44c92f; ?>
<?php unset($__componentOriginal179d930850cbc0b57567dfb2ba44c92f); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal179d930850cbc0b57567dfb2ba44c92f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal179d930850cbc0b57567dfb2ba44c92f = $attributes; } ?>
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Tổng khách hàng','value' => $totalCustomers,'icon' => 'fa-user-plus','from' => 'purple-500','to' => 'violet-600','iconColor' => 'purple-600'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\StatCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal179d930850cbc0b57567dfb2ba44c92f)): ?>
<?php $attributes = $__attributesOriginal179d930850cbc0b57567dfb2ba44c92f; ?>
<?php unset($__attributesOriginal179d930850cbc0b57567dfb2ba44c92f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal179d930850cbc0b57567dfb2ba44c92f)): ?>
<?php $component = $__componentOriginal179d930850cbc0b57567dfb2ba44c92f; ?>
<?php unset($__componentOriginal179d930850cbc0b57567dfb2ba44c92f); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal179d930850cbc0b57567dfb2ba44c92f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal179d930850cbc0b57567dfb2ba44c92f = $attributes; } ?>
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Tổng doanh thu','value' => number_format($totalRevenue, 0) . ' ₫','icon' => 'fa-box','from' => 'amber-500','to' => 'orange-600','iconColor' => 'orange-600'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('stat-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\StatCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal179d930850cbc0b57567dfb2ba44c92f)): ?>
<?php $attributes = $__attributesOriginal179d930850cbc0b57567dfb2ba44c92f; ?>
<?php unset($__attributesOriginal179d930850cbc0b57567dfb2ba44c92f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal179d930850cbc0b57567dfb2ba44c92f)): ?>
<?php $component = $__componentOriginal179d930850cbc0b57567dfb2ba44c92f; ?>
<?php unset($__componentOriginal179d930850cbc0b57567dfb2ba44c92f); ?>
<?php endif; ?>

    </div>
</div>


<div class="flex mt-2 ">
    <div class="w-3/5 pr-6 bg-white shadow-xl rounded-2xl p-6 overflow-hidden mr-5">
        <h6 class="text-2xl font-bold text-gray-800 mb-3">Số lượng đơn hàng</h6>
        <div class="bg-gradient-to-br from-[#141727] to-[#3a416f] rounded-xl p-4 w-full h-[290px]">
            <canvas id="chart-bars" class="chart-canvas" height="200"></canvas>
        </div>
    </div>

    <div class="w-2/5 flex flex-col justify-between pb-13 pl-5 bg-white shadow-xl rounded-2xl p-6 overflow-hidden">
        <!-- Tiêu đề -->
        <div>
            <h6 class="text-2xl font-bold text-gray-800 mb-1">Số Liệu Hôm Nay</h6>
            <p class="text-sm font-medium text-green-600 flex items-center">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 3a1 1 0 01.707.293l5 5a1 1 0 11-1.414 1.414L11 6.414V16a1 1 0 11-2 0V6.414L5.707 9.707a1 1 0 01-1.414-1.414l5-5A1 1 0 0110 3z"
                        clip-rule="evenodd" />
                </svg>
                +23% so với tuần trước
            </p>
        </div>

        <div class="space-y-6 mt-6 w-full">
            <div class="grid grid-cols-12 items-center gap-4">
                <div class="col-span-7 flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center shadow-md">
                        <i class="fas fa-dollar-sign text-white text-sm"></i>
                    </div>
                    <div>
                        <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Doanh Thu</p>
                        <p class="text-md font-bold text-gray-900"><?php echo e(number_format($totalRevenueToday, 0)); ?> VNĐ</p>
                    </div>
                </div>

                <div class="col-span-2">
                    <div class="h-1.5 bg-gray-200 rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-blue-500 to-blue-600 rounded-full transition-all duration-300" style="width: 50%"></div>
                    </div>
                </div>

                <div class="col-span-3 text-right">
                </div>
            </div>

            <div class="grid grid-cols-12 items-center gap-4">
                <div class="col-span-7 flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-full flex items-center justify-center shadow-md">
                        <i class="fas fa-shopping-cart text-white text-sm"></i>
                    </div>
                    <div>
                        <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Đơn Hàng</p>
                        <p class="text-md font-bold text-gray-900"><?php echo e($totalOrdersToday); ?></p>
                    </div>
                </div>

                <div class="col-span-2">
                    <div class="h-1.5 bg-gray-200 rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-cyan-500 to-cyan-600 rounded-full transition-all duration-300" style="width: 50%"></div>
                    </div>
                </div>

                <div class="col-span-3 text-right">
                </div>
            </div>

            <div class="grid grid-cols-12 items-center gap-4">
                <div class="col-span-7 flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-amber-500 to-amber-600 rounded-full flex items-center justify-center shadow-md">
                        <i class="fas fa-shoe-prints text-white text-sm"></i>
                    </div>
                    <div>
                        <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Sản Phẩm Bán Chạy Nhất</p>
                        <?php if($bestSelling): ?>
                        <p class="text-md font-bold text-gray-900"><?php echo e($bestSelling->name); ?></p>
                        <?php else: ?>
                        <p class="text-md font-bold text-gray-900">Chưa có dữ liệu</p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-span-2">
                    <div class="h-1.5 bg-gray-200 rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-amber-500 to-amber-600 rounded-full transition-all duration-300" style="width: 50%"></div>
                    </div>
                </div>

                <div class="col-span-3 text-right">
                    <?php if($bestSelling): ?>
                    <p class="text-md text-gray-900"><?php echo e($bestSelling->total_sold); ?> lượt bán</p>
                    <?php else: ?>
                    <p class="text-md text-gray-400">0 lượt bán</p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="grid grid-cols-12 items-center gap-4">
                <div class="col-span-7 flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-red-500 to-red-600 rounded-full flex items-center justify-center shadow-md">
                        <i class="fas fa-eye text-white text-sm"></i>
                    </div>
                    <div>
                        <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Xem Nhiều Nhất</p>
                        <?php if($mostViewed): ?>
                        <p class="text-md font-bold text-gray-900"><?php echo e($mostViewed->name); ?></p>
                        <?php else: ?>
                        <p class="text-md font-bold text-gray-900">Chưa có dữ liệu</p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-span-2">
                    <div class="h-1.5 bg-gray-200 rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-red-500 to-red-600 rounded-full transition-all duration-300" style="width: 50%"></div>
                    </div>
                </div>

                <div class="col-span-3 text-right">
                    <?php if($mostViewed): ?>
                    <p class="text-md text-gray-900"><?php echo e($mostViewed->view_count); ?> lượt xem</p>
                    <?php else: ?>
                    <p class="text-md text-gray-400">0 lượt xem</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="mt-4">
    <div class="col-lg-7">
        <div class="bg-white shadow-lg rounded-lg p-4">
            <h6 class="text-2xl font-bold text-gray-800">Doanh Thu Theo Tháng</h6>
            <div class="w-full h-[350px] pt-2">
                <canvas id="chart-line"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 my-8">

    <!-- Top Sản Phẩm Bán Chạy -->
    <div class="bg-white border border-gray-100 rounded-2xl shadow-md hover:shadow-lg transition-all duration-300">
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
            <h6 class="text-lg font-semibold text-gray-800 flex items-center">
                <i class="fas fa-chart-line text-indigo-500 mr-2"></i>
                Top Sản Phẩm Bán Chạy
            </h6>
        </div>
        <div>
            <?php $__empty_1 = true; $__currentLoopData = $topSellingProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="grid grid-cols-5 items-center px-6 py-2 hover:bg-gray-50 transition">
                <div class="col-span-3 flex items-center space-x-4">
                    <img src="<?php echo e(asset('images/products/' . ($product->url ?? 'no-image.png'))); ?>"
                        alt="<?php echo e($product->product_name); ?>"
                        class="w-20 h-20 rounded-lg object-cover">
                    <div>
                        <p class="font-medium text-gray-800 truncate max-w-[180px]"><?php echo e($product->product_name); ?></p>
                        <p class="text-xs text-gray-500 mt-1">
                            <span class="inline-block bg-red-50 text-red-600 text-xs font-medium px-2.5 py-1 rounded-full border border-red-200 mt-1">
                                <?php echo e($product->brand_name ?? ''); ?>

                            </span>
                            <?php if($product->category_names): ?>
                            ⟡ <?php echo e($product->category_names); ?>

                            <?php endif; ?>
                        </p>
                    </div>
                </div>
                <p class="col-span-1 text-center"><?php echo e($product->total_sold); ?> lượt bán</p>
                <p class="col-span-1 text-center font-semibold "><?php echo e(number_format($product->revenue, 0)); ?> ₫</p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p class="text-center text-gray-400 py-6 italic">Không có dữ liệu</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Top Sản Phẩm Sắp Hết Hàng -->
    <div class="bg-white border border-gray-100 rounded-2xl shadow-md hover:shadow-lg transition-all duration-300">
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
            <h6 class="text-lg font-semibold text-gray-800 flex items-center">
                <i class="fas fa-boxes text-red-500 mr-2"></i>
                Top Sản Phẩm Sắp Hết Hàng
            </h6>
        </div>
        <div>
            <?php $__empty_1 = true; $__currentLoopData = $lowStockProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="flex items-center justify-between px-6 py-2 hover:bg-gray-50 transition">
                <div class="flex items-center space-x-4">
                    <img src="<?php echo e(asset('images/products/' . ($product->url ?? 'no-image.png'))); ?>"
                        alt="<?php echo e($product->product_name); ?>"
                        class="w-20 h-20 rounded-lg object-cover">
                    <div>
                        <p class="font-medium text-gray-800"><?php echo e($item->name); ?></p>
                        <p class="text-sm text-gray-500 inline-block bg-red-50 text-red-600 text-xs font-medium px-2.5 py-1 rounded-full border border-red-200 mt-1">
                            <?php echo e($item->size ? 'Size  -' . $item->size : ''); ?>

                            <?php echo e($item->color ? $item->color : ''); ?>

                        </p>
                    </div>
                </div>
                <?php if($item->available_qty == 0): ?>
                <span class="text-xs font-semibold text-red-600 bg-red-100 px-2.5 py-1 rounded-full border border-red-200 mt-1">Hết hàng</span>
                <?php elseif($item->available_qty <= 3): ?>
                    <span class="text-xs font-semibold text-orange-600 bg-orange-100 px-2.5 py-1 rounded-full border border-orange-200 mt-1">Còn ít (<?php echo e($item->available_qty); ?>)</span>
                    <?php else: ?>
                    <span class="text-xs font-semibold text-yellow-700 bg-yellow-100 px-2.5 py-1 rounded-full border border-yellow-200 mt-1"><?php echo e($item->available_qty); ?></span>
                    <?php endif; ?>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p class="text-center text-gray-400 py-6 italic">Không có dữ liệu</p>
            <?php endif; ?>
        </div>
    </div>

</div>


<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 my-8">


    <!-- Top Đơn Hàng Giá Trị Cao -->
    <div class="bg-white border border-gray-100 rounded-2xl shadow-md hover:shadow-lg transition-all duration-300">
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
            <h6 class="text-lg font-semibold text-gray-800 flex items-center">
                <i class="fas fa-coins text-green-500 mr-2"></i>
                Top Đơn Hàng Giá Trị Cao Nhất
            </h6>
        </div>

        <div>
            <?php $__empty_1 = true; $__currentLoopData = $topOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="grid grid-cols-7 items-center px-6 py-4 hover:bg-gray-50 transition">
                <div class="col-span-3">
                    <p class="font-medium text-indigo-600"><?php echo e($order->order_no); ?></p>
                    <p class="text-sm text-gray-500"><?php echo e($order->user->full_name ?? 'Ẩn danh'); ?></p>
                </div>
                <div class="col-span-2 text-center">
                    <p class="text-gray-800">
                        <?php echo e($order->total_products ?? 0); ?> sản phẩm
                    </p>
                </div>
                <div class="col-span-2 text-right">
                    <p class="font-semibold text-gray-900 font-semibold ">
                        <?php echo e(number_format($order->total_amount, 0)); ?> ₫
                    </p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p class="text-center text-gray-400 py-6 italic">Không có dữ liệu</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Top Khách Hàng Mua Nhiều -->
    <div class="bg-white border border-gray-100 rounded-2xl shadow-md hover:shadow-lg transition-all duration-300">
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
            <h6 class="text-lg font-semibold text-gray-800 flex items-center">
                <i class="fas fa-user-tie text-yellow-500 mr-2"></i>
                Top Khách Hàng Mua Nhiều Nhất
            </h6>
        </div>
        <div>
            <?php $__empty_1 = true; $__currentLoopData = $topCustomers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="grid grid-cols-5 items-center px-6 py-4 hover:bg-gray-50 transition">
                <div class="col-span-3 flex items-center space-x-4">
                    <img src="<?php echo e($customer->avatar ? asset('images/users/'.$customer->avatar) : asset('images/users/default-avatar.png')); ?>"
                        alt="<?php echo e($customer->full_name); ?>"
                        class="w-10 h-10 rounded-full object-cover border border-gray-200">
                    <div>
                        <p class="font-medium text-gray-800"><?php echo e($customer->full_name); ?></p>
                        <p class="text-sm text-gray-500 truncate max-w-[200px]"><?php echo e($customer->email); ?></p>
                    </div>
                </div>
                <div class="col-span-1 text-center">
                    <p class="text-gray-500"><?php echo e($customer->total_orders); ?> đơn</p>
                </div>
                <div class="col-span-1 text-right">
                    <p class="text-gray-900 font-semibold "><?php echo e(number_format($customer->total_spent, 0)); ?> ₫</p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p class="text-center text-gray-400 py-6 italic">Không có dữ liệu</p>
            <?php endif; ?>
        </div>
    </div>
</div>


<script>
    const ordersData = <?php echo json_encode($monthlyOrders); ?>;
    const revenueData = <?php echo json_encode($monthlyRevenueData); ?>;
</script>
<?php echo app('Illuminate\Foundation\Vite')(['resources/js/admin/dashboard.js']); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>