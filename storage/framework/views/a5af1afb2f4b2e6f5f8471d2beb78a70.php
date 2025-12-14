<?php $__env->startSection('content'); ?>
<div>
    <!-- 🧮 Thống kê -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-2 pb-6">
        <?php if (isset($component)) { $__componentOriginal179d930850cbc0b57567dfb2ba44c92f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal179d930850cbc0b57567dfb2ba44c92f = $attributes; } ?>
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Tổng đơn hàng','value' => $totalOrders,'icon' => 'fa-boxes','from' => 'blue-500','to' => 'blue-600','iconColor' => 'blue-600'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Chờ xác nhận','value' => $totalPending,'icon' => 'fa-hourglass-half','from' => 'amber-500','to' => 'orange-600','iconColor' => 'orange-600'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Đang giao','value' => $totalShipped,'icon' => 'fa-truck','from' => 'cyan-500','to' => 'cyan-600','iconColor' => 'blue-300'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Đã giao','value' => $totalDelivered,'icon' => 'fa-check-circle','from' => 'green-500','to' => 'emerald-600','iconColor' => 'green-600'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Đã hủy','value' => $totalCancelled,'icon' => 'fa-times-circle','from' => 'red-500','to' => 'rose-600','iconColor' => 'red-600'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Tổng doanh thu','value' => number_format($totalRevenue,0,',','.').' ₫','icon' => 'fa-sack-dollar','from' => 'purple-500','to' => 'violet-600','iconColor' => 'purple-600','fontSize' => 'text-md'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

    <div class="bg-white shadow-md rounded-xl border border-gray-200 overflow-hidden">
        <!-- Header -->
        <div class="px-6 py-5 border-b border-gray-300 flex flex-wrap items-center justify-between gap-3">
            <div>
                <h1 class="text-xl font-bold text-gray-800">DANH SÁCH ĐƠN HÀNG</h1>
                <p class="text-sm text-gray-500">Theo dõi, lọc và quản lý đơn hàng</p>
            </div>

            <div class="flex flex-wrap items-center gap-2">
                <form id="export-form" action="<?php echo e(route('admin.orders.export')); ?>" method="GET">
                    <input type="hidden" id="selected-ids" name="selected_ids" value="">
                </form>

                <button id="export-btn"
                    class="inline-flex items-center border border-red-600 hover:bg-red-50 text-red-700 px-4 py-2 rounded-lg text-sm font-medium shadow transition">
                    <i class="fas fa-file-export mr-1"></i> Xuất Excel
                </button>
            </div>
        </div>


        <div class="px-5 pt-5 border-gray-100 bg-white">
            <!-- Bộ lọc -->
            <form method="GET" class="col-span-3 grid grid-cols-1 sm:grid-cols-5 gap-4 items-end">
                <div class="sm:col-span-1 relative">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400 text-sm"></i>
                    <input type="text" name="search" value="<?php echo e(request('search')); ?>" placeholder="Tìm mã đơn hàng..."
                        class="block w-full pl-9 pr-10 py-[9px] border border-gray-300 rounded-md text-sm focus:ring-1 focus:ring-red-500">
                </div>

                <?php if (isset($component)) { $__componentOriginal36c368e88b7801a467b55faa78ace34f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36c368e88b7801a467b55faa78ace34f = $attributes; } ?>
<?php $component = App\View\Components\Form\Select::resolve(['name' => 'status','options' => $statuses,'placeholder' => 'Tất cả trạng thái'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Select::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal36c368e88b7801a467b55faa78ace34f)): ?>
<?php $attributes = $__attributesOriginal36c368e88b7801a467b55faa78ace34f; ?>
<?php unset($__attributesOriginal36c368e88b7801a467b55faa78ace34f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal36c368e88b7801a467b55faa78ace34f)): ?>
<?php $component = $__componentOriginal36c368e88b7801a467b55faa78ace34f; ?>
<?php unset($__componentOriginal36c368e88b7801a467b55faa78ace34f); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96 = $attributes; } ?>
<?php $component = App\View\Components\Form\Input::resolve(['type' => 'date','name' => 'from_date','label' => 'Từ ngày'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $attributes = $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $component = $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96 = $attributes; } ?>
<?php $component = App\View\Components\Form\Input::resolve(['type' => 'date','name' => 'to_date','label' => 'Đến ngày'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Form\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $attributes = $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96)): ?>
<?php $component = $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96; ?>
<?php unset($__componentOriginalc1d2405c7f8100d77292f2d0299ccd96); ?>
<?php endif; ?>

                <div class="flex justify-end items-center sm:col-span-1 gap-2">

                    <?php if (isset($component)) { $__componentOriginalf95f399a33c6240aef137a9e6b350e45 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf95f399a33c6240aef137a9e6b350e45 = $attributes; } ?>
<?php $component = App\View\Components\Ui\ActionButton::resolve(['type' => 'submit','label' => 'Lọc','class' => 'w-[157px]'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.action-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Ui\ActionButton::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf95f399a33c6240aef137a9e6b350e45)): ?>
<?php $attributes = $__attributesOriginalf95f399a33c6240aef137a9e6b350e45; ?>
<?php unset($__attributesOriginalf95f399a33c6240aef137a9e6b350e45); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf95f399a33c6240aef137a9e6b350e45)): ?>
<?php $component = $__componentOriginalf95f399a33c6240aef137a9e6b350e45; ?>
<?php unset($__componentOriginalf95f399a33c6240aef137a9e6b350e45); ?>
<?php endif; ?>
                    <?php if(request()->hasAny(['search','status','from_date','to_date'])): ?>
                    <a href="<?php echo e(route('admin.orders.index')); ?>" class="text-red-600 text-sm hover:text-red-700 font-medium">
                        <i class="fa-solid fa-rotate"></i>
                    </a>
                    <?php endif; ?>
                </div>
            </form>
        </div>

        <div class="px-5 pb-5 pt-2 border-gray-100 bg-white">
            <!-- 🔁 Form cập nhật trạng thái hàng loạt -->
            <form id="bulk-update-form" action="<?php echo e(route('admin.orders.bulkUpdateStatus')); ?>" method="POST"
                class="flex items-center mt-3">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="order_ids" id="bulk-update-ids">
                <input type="hidden" name="status_id" id="bulk-status">

                <button type="button" id="bulk-update-btn"
                    class="cursor-pointer text-center border border-red-600 hover:bg-red-50 text-red-700 px-4 py-2 rounded-lg text-sm font-medium shadow transition">
                    <i class="fas fa-sync-alt"></i> Cập nhật trạng thái
                </button>
            </form>
        </div>

        <!-- Bảng -->
        <div class="overflow-x-auto px-4">
            <div class="overflow-hidden rounded-lg border border-gray-300">
                <table class="min-w-full text-sm text-gray-700">
                    <thead class="border-b border-gray-300 bg-gray-50 uppercase text-xs">
                        <tr class="text-left">
                            <th class="px-6 py-3 text-center w-20">
                                <div class="flex items-center justify-center space-x-2">
                                    <input type="checkbox" id="select-all" class="form-checkbox text-red-600 focus:ring-red-500 rounded">
                                    <span>STT</span>
                                </div>
                            </th>
                            <th class="px-6 py-3">Mã đơn hàng</th>
                            <th class="px-6 py-3 text-center">
                                <a href="<?php echo e(route('admin.orders.index', array_merge(request()->query(), ['sort'=>'total_amount','direction'=>request('direction')==='asc'?'desc':'asc']))); ?>"
                                    class="flex items-center justify-center gap-1">
                                    Tổng tiền
                                    <?php if(request('sort')==='total_amount'): ?>
                                    <i class="fas fa-sort-<?php echo e(request('direction')==='asc'?'up':'down'); ?>"></i>
                                    <?php else: ?>
                                    <i class="fas fa-sort text-gray-400"></i>
                                    <?php endif; ?>
                                </a>
                            </th>
                            <th class="px-6 py-3 text-center">Khách hàng</th>
                            <th class="px-6 py-3 text-center">Trạng thái</th>
                            <th class="px-6 py-3 text-center">
                                <a href="<?php echo e(route('admin.orders.index', array_merge(request()->query(), ['sort'=>'created_at','direction'=>request('direction')==='asc'?'desc':'asc']))); ?>"
                                    class="flex items-center justify-center gap-1">
                                    Ngày đặt
                                    <?php if(request('sort')==='created_at'): ?>
                                    <i class="fas fa-sort-<?php echo e(request('direction')==='asc'?'up':'down'); ?>"></i>
                                    <?php else: ?>
                                    <i class="fas fa-sort text-gray-400"></i>
                                    <?php endif; ?>
                                </a>
                            </th>
                            <th class="px-6 py-3 text-center">Thao tác</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-100">
                        <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">
                                <input type="checkbox" class="form-checkbox text-red-600 item-checkbox" value="<?php echo e($order->id); ?>">

                                <span class="text-gray-700 font-medium ml-2">
                                    <?php echo e(($orders->currentPage() - 1) * $orders->perPage() + $loop->iteration); ?>

                                </span>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-800">
                                <a href="<?php echo e(route('admin.orders.show',$order->id)); ?>" class="text-red-600 hover:text-red-800"><?php echo e($order->order_no); ?></a>
                            </td>
                            <td class="px-6 py-4 text-center font-medium text-gray-800">
                                <?php echo e(number_format($order->total_amount,0,',','.')); ?> ₫
                            </td>
                            <td class="px-6 py-4 text-center text-gray-600">
                                <?php echo e($order->user->full_name ?? 'Khách vãng lai'); ?>

                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="px-3 py-1 rounded-full text-xs font-medium border 
                                        <?php switch($order->status_id):
                                            case (1): ?> bg-yellow-50 text-yellow-700 border-yellow-300 <?php break; ?>
                                            <?php case (2): ?> bg-blue-50 text-blue-700 border-blue-300 <?php break; ?>
                                            <?php case (3): ?> bg-cyan-50 text-cyan-700 border-cyan-300 <?php break; ?>
                                            <?php case (4): ?> bg-green-50 text-green-700 border-green-300 <?php break; ?>
                                            <?php case (5): ?> bg-red-50 text-red-700 border-red-300 <?php break; ?>
                                        <?php endswitch; ?>">
                                    <?php echo e(match($order->status->name) {
                                        'pending' => 'Chờ xác nhận',
                                        'confirmed' => 'Đang xử lý',
                                        'shipping' => 'Đang giao',
                                        'delivered' => 'Đã giao',
                                        'cancelled' => 'Đã hủy',
                                        default => ucfirst($order->status->name),
                                    }); ?>

                                </span>
                            </td>
                            <td class="px-6 py-4 text-center text-gray-600">
                                <?php echo e($order->created_at->format('d/m/Y H:i')); ?>

                            </td>
                            <td class="px-6 py-4 text-center space-x-6">
                                <a href="<?php echo e(route('admin.orders.show',$order->id)); ?>" class="text-indigo-600 hover:text-indigo-800"><i class="fas fa-eye"></i></a>
                                <form action="<?php echo e(route('admin.orders.updateStatus', $order->id)); ?>" method="POST" class="inline update-status-form">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PATCH'); ?>
                                    <button type="button" onclick="confirmUpdateStatus(event, '<?php echo e($order->order_no); ?>', '<?php echo e($order->status_id); ?>')"

                                        class="text-blue-600 hover:text-blue-800 cursor-pointer">
                                        <i class="fas fa-rotate"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="7" class="py-8 text-center text-gray-500 italic">Không có đơn hàng nào được tìm thấy.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

        </div>

        <div class="px-6 pb-5 mt-4 border-t border-gray-200 bg-gray-50 flex justify-center">
            <?php echo $orders->appends(request()->query())->links('vendor.pagination.custom'); ?>

        </div>
    </div>
</div>

<?php echo app('Illuminate\Foundation\Vite')(['resources/js/admin/orders.js']); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/admin/orders/index.blade.php ENDPATH**/ ?>