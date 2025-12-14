<?php $__env->startSection('content'); ?>
<div>
    <!-- THỐNG KÊ -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-5 pb-6">
        <?php if (isset($component)) { $__componentOriginal179d930850cbc0b57567dfb2ba44c92f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal179d930850cbc0b57567dfb2ba44c92f = $attributes; } ?>
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Tổng quản trị viên','value' => $totalAdmins,'icon' => 'fa-user-shield','from' => 'blue-500','to' => 'blue-600','iconColor' => 'blue-600','fontSize' => 'text-3xl'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Hoạt động','value' => $activeAdmins,'icon' => 'fa-user-check','from' => 'green-500','to' => 'emerald-600','iconColor' => 'green-600','fontSize' => 'text-3xl'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Ngưng hoạt động','value' => $inactiveAdmins,'icon' => 'fa-user-clock','from' => 'amber-500','to' => 'orange-600','iconColor' => 'orange-600','fontSize' => 'text-3xl'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Bị khóa','value' => $bannedAdmins,'icon' => 'fa-user-slash','from' => 'red-500','to' => 'rose-600','iconColor' => 'red-600','fontSize' => 'text-3xl'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Tổng quyền truy cập','value' => $totalRoles ?? 0,'icon' => 'fa-lock','from' => 'purple-500','to' => 'violet-600','iconColor' => 'purple-600','fontSize' => 'text-3xl'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

    <!-- DANH SÁCH QUẢN TRỊ VIÊN -->
    <div class="bg-white shadow-md rounded-xl border border-gray-200 overflow-hidden">
        <!-- Header -->
        <div
            class="px-6 py-5 border-b border-gray-300 flex flex-col sm:flex-row sm:items-center sm:justify-between flex-wrap gap-3">
            <div>
                <h1 class="text-xl font-bold text-gray-800">DANH SÁCH QUẢN TRỊ VIÊN</h1>
                <p class="text-sm text-gray-500">Theo dõi và quản lý các tài khoản quản trị hệ thống</p>
            </div>

            <div class="flex flex-wrap items-center justify-end gap-2">
                <?php if (isset($component)) { $__componentOriginalf95f399a33c6240aef137a9e6b350e45 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf95f399a33c6240aef137a9e6b350e45 = $attributes; } ?>
<?php $component = App\View\Components\Ui\ActionButton::resolve(['href' => route('admin.admins.downloadTemplate'),'icon' => 'fa-file-excel','label' => 'Tải file mẫu','outline' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

                <form action="<?php echo e(route('admin.admins.import')); ?>" method="POST" enctype="multipart/form-data"
                    class="inline-block">
                    <?php echo csrf_field(); ?>
                    <label
                        class="inline-flex items-center bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium cursor-pointer">
                        <i class="fas fa-file-upload mr-2"></i> Import Excel
                        <input type="file" name="file" class="hidden" onchange="this.form.submit()">
                    </label>
                </form>

                <form id="export-form" action="<?php echo e(route('admin.admins.export', request()->query())); ?>" method="GET"
                    class="inline-block">
                    <input type="hidden" name="selected_ids" id="selected-ids">
                </form>

                <a href="#" id="export-btn"
                    class="inline-flex items-center border border-red-600 hover:bg-red-50 text-red-700 px-4 py-2 rounded-lg text-sm font-medium shadow transition">
                    <i class="fas fa-download mr-2"></i> Xuất Excel
                </a>

                <?php if (isset($component)) { $__componentOriginalf95f399a33c6240aef137a9e6b350e45 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf95f399a33c6240aef137a9e6b350e45 = $attributes; } ?>
<?php $component = App\View\Components\Ui\ActionButton::resolve(['href' => route('admin.admins.create'),'icon' => 'fa-plus','label' => 'Thêm quản trị viên'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
            </div>
        </div>

        <!-- Bộ lọc -->
        <div class="p-5 border-gray-100 bg-white">
            <form method="GET" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 items-end">
                <div class="sm:col-span-1 relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-search text-gray-400 text-sm"></i>
                    </div>
                    <input type="text" name="search" value="<?php echo e(request('search')); ?>"
                        placeholder="Tìm kiếm quản trị viên..."
                        class="block w-full pl-9 pr-10 py-[9px] border border-gray-300 rounded-md text-sm placeholder-gray-400 focus:ring-1 focus:ring-red-500 focus:border-red-500">
                </div>

                <?php if (isset($component)) { $__componentOriginal36c368e88b7801a467b55faa78ace34f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36c368e88b7801a467b55faa78ace34f = $attributes; } ?>
<?php $component = App\View\Components\Form\Select::resolve(['name' => 'role_id','options' => $roles->map(fn($name, $id) => match($name) {
                        'quan_tri' => 'Quản trị viên',
                        'quan_ly'  => 'Quản lý',
                        default    => ucfirst($name),
                    })->toArray(),'placeholder' => 'Tất cả vai trò'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

                <?php if (isset($component)) { $__componentOriginal36c368e88b7801a467b55faa78ace34f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36c368e88b7801a467b55faa78ace34f = $attributes; } ?>
<?php $component = App\View\Components\Form\Select::resolve(['name' => 'status','options' => ['1' => 'Hoạt động', '0' => 'Ngưng hoạt động', '2' => 'Bị khóa'],'selected' => request()->has('status') ? strval(request('status')) : '','placeholder' => 'Tất cả trạng thái'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

                <div class="flex items-center">
                    <?php if (isset($component)) { $__componentOriginalf95f399a33c6240aef137a9e6b350e45 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf95f399a33c6240aef137a9e6b350e45 = $attributes; } ?>
<?php $component = App\View\Components\Ui\ActionButton::resolve(['type' => 'submit','label' => 'Lọc','class' => 'w-2/3'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                    <?php if(request()->hasAny(['search', 'status'])): ?>
                    <a href="<?php echo e(route('admin.admins.index')); ?>"
                        class="text-red-600 text-sm hover:text-red-700 font-medium ml-3">
                        <i class="fa-solid fa-rotate"></i>
                    </a>
                    <?php endif; ?>
                </div>
            </form>
        </div>

        <!-- BẢNG -->
        <form id="bulk-form" method="POST">
            <?php echo csrf_field(); ?>
            <div class="px-6 pb-5 flex flex-wrap gap-2 justify-start">
                <button id="bulk-update-btn" type="button"
                    class="cursor-pointer border border-red-600 hover:bg-red-50 text-red-700 px-4 py-2 rounded-lg text-sm font-medium shadow transition">
                    <i class="fa-solid fa-arrows-rotate"></i> Cập nhật trạng thái
                </button>
                <button id="bulk-delete-btn" type="button"
                    class="cursor-pointer bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium shadow transition">
                    <i class="fa-solid fa-trash"></i> Xóa hàng loạt
                </button>
            </div>

            <div class="overflow-x-auto px-4">
                <div class="overflow-hidden rounded-lg border border-gray-300">
                    <table class="min-w-full text-sm text-gray-700">
                        <thead class="border-b border-gray-300 bg-gray-50 uppercase text-xs">
                            <tr>
                                <th class="px-6 py-3 text-center w-20">
                                    <div class="flex items-center justify-center space-x-2">
                                        <input type="checkbox" id="select-all"
                                            class="form-checkbox text-red-600 focus:ring-red-500 rounded">
                                        <span>STT</span>
                                    </div>
                                </th>
                                <th class="px-6 py-3 text-center">Ảnh</th>
                                <th class="px-6 py-3 text-left">Họ tên</th>
                                <th class="px-6 py-3 text-left">Email</th>
                                <th class="px-6 py-3 text-center">Vai trò</th>
                                <th class="px-6 py-3 text-center">Trạng thái</th>
                                <th class="px-6 py-3 text-center">
                                    <a href="<?php echo e(route('admin.admins.index', array_merge(request()->query(), ['sort' => 'created_at', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']))); ?>"
                                        class="flex items-center justify-center space-x-1 text-gray-700 hover:text-red-600">
                                        <span>Ngày tạo</span>
                                        <i class="fa-solid fa-sort<?php echo e(request('direction') === 'asc' ? '-up' : '-down'); ?>"></i>
                                    </a>
                                </th>
                                <th class="px-6 py-3 text-center">Thao tác</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-100">
                            <?php $__empty_1 = true; $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr class="hover:bg-gray-50 transition">

                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-start space-x-2">
                                        <input type="checkbox" name="admin_ids[]" value="<?php echo e($admin->id); ?>"
                                            class="form-checkbox text-red-600 focus:ring-red-500 rounded item-checkbox">
                                        <span class="text-gray-700 font-medium ml-2">
                                            <?php echo e(($admins->currentPage() - 1) * $admins->perPage() + $loop->iteration); ?>

                                        </span>
                                    </div>
                                </td>


                                <td class="px-6 py-4 text-center">
                                    <img src="<?php echo e($admin->avatar ? asset('images/users/'.$admin->avatar) : asset('images/users/default-avatar.png')); ?>"
                                        alt="<?php echo e($admin->full_name); ?>"
                                        class="w-10 h-10 rounded-full object-cover border border-gray-300 mx-auto shadow-sm">
                                </td>

                                <td class="px-6 py-4 font-medium text-gray-900"><?php echo e($admin->full_name ?? '—'); ?></td>
                                <td class="px-6 py-4 text-gray-700"><?php echo e($admin->email); ?></td>
                                <td class="px-6 py-4 text-center text-gray-700">
                                    <?php echo e(optional($admin->role)->name ?? '—'); ?>

                                </td>

                                <td class="px-6 py-4 text-center">
                                    <button type="button"
                                        onclick="confirmUpdateAdminStatus(event, '<?php echo e($admin->id); ?>', '<?php echo e($admin->status); ?>', '<?php echo e($admin->full_name); ?>')"
                                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium border transition
                                            <?php if($admin->status == 1): ?>
                                                bg-green-100 text-green-700 border-green-300 hover:bg-green-200
                                            <?php elseif($admin->status == 0): ?>
                                                bg-yellow-100 text-yellow-700 border-yellow-300 hover:bg-yellow-200
                                            <?php else: ?>
                                                bg-rose-100 text-rose-700 border-rose-300 hover:bg-rose-200
                                            <?php endif; ?>">
                                        <i class="fa-solid fa-power-off mr-1"></i>
                                        <?php echo e($admin->status == 1 ? 'Hoạt động' : ($admin->status == 0 ? 'Ngưng hoạt động' : 'Bị khóa')); ?>

                                    </button>
                                </td>

                                <td class="px-6 py-4 text-center text-gray-500">
                                    <?php echo e($admin->created_at->format('d/m/Y')); ?>

                                </td>

                                <td class="px-6 py-4 text-center">
                                    <div
                                        x-data="{
            open: false,
            toggle() {
                this.open = !this.open;
                this.$nextTick(() => {
                    if (this.open) this.positionMenu();
                });
            },
            close() { this.open = false },
            positionMenu() {
                const rect = this.$refs.trigger.getBoundingClientRect();
                const menu = this.$refs.menu;
                if (menu) {
                    const menuHeight = menu.offsetHeight;
                    const showAbove = rect.bottom + menuHeight + 10 > window.innerHeight;
                    const top = showAbove
                        ? rect.top + window.scrollY - menuHeight - 6
                        : rect.bottom + window.scrollY + 4;
                    menu.style.top = top + 'px';
                    menu.style.left = (rect.right + window.scrollX - 192) + 'px'; // 192px = w-48
                }
            }
        }"
                                        class="relative inline-block text-left">
                                        <!-- 🔘 Nút 3 chấm -->
                                        <button
                                            type="button"
                                            @click.stop="toggle()"
                                            x-ref="trigger"
                                            class="flex items-center justify-center w-[36px] h-[36px] rounded-full hover:bg-gray-100 focus:ring-2 focus:ring-red-100 transition-all duration-150 ease-in-out cursor-pointer">
                                            <i class="fas fa-ellipsis-v text-gray-600 text-[13px]"></i>
                                        </button>

                                        <!-- 🌸 Dropdown menu -->
                                        <template x-teleport="body">
                                            <div
                                                x-show="open"
                                                @click.away="close()"
                                                x-transition:enter="transition ease-out duration-150"
                                                x-transition:enter-start="opacity-0 translate-y-1 scale-95"
                                                x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                                                x-transition:leave="transition ease-in duration-100"
                                                x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                                                x-transition:leave-end="opacity-0 translate-y-1 scale-95"
                                                x-cloak
                                                x-ref="menu"
                                                class="absolute z-[99999] bg-white border border-gray-200 rounded-lg shadow-lg w-48 overflow-hidden ring-1 ring-black/5 backdrop-blur-sm"
                                                style="position: absolute !important;">
                                                <!-- Các hành động -->
                                                <a href="<?php echo e(route('admin.admins.show', $admin)); ?>"
                                                    class="flex items-center gap-2 px-4 py-2.5 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">
                                                    <div class="w-5 flex justify-center"><i class="fas fa-eye text-indigo-500"></i></div>
                                                    Xem chi tiết
                                                </a>

                                                <a href="<?php echo e(route('admin.admins.edit', $admin)); ?>"
                                                    class="flex items-center gap-2 px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
                                                    <div class="w-5 flex justify-center"><i class="fas fa-pen text-blue-500"></i></div>
                                                    Chỉnh sửa
                                                </a>

                                                <a href="#"
                                                    class="flex items-center gap-2 px-4 py-2.5 text-sm text-gray-700 hover:bg-amber-50 hover:text-amber-600 transition">
                                                    <div class="w-5 flex justify-center"><i class="fas fa-key text-amber-500"></i></div>
                                                    Đặt lại mật khẩu
                                                </a>

                                                <form id="delete-admin-<?php echo e($admin->id); ?>"
                                                    action="<?php echo e(route('admin.admins.destroy', ['admin' => $admin->id])); ?>"
                                                    method="POST"
                                                    onsubmit="confirmDeleteAdmin(event, '<?php echo e($admin->id); ?>', '<?php echo e($admin->full_name); ?>')"
                                                    class="block">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit"
                                                        class="cursor-pointer w-full text-left flex items-center gap-2 px-4 py-2.5 text-sm text-red-600 hover:bg-red-50 hover:text-red-700 transition">
                                                        <div class="w-5 flex justify-center"><i class="fas fa-trash"></i></div>
                                                        Xóa
                                                    </button>
                                                </form>
                                            </div>
                                        </template>
                                    </div>
                                </td>


                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="8" class="py-8 text-center text-gray-500 italic">
                                    Không có quản trị viên nào được tìm thấy.
                                </td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>

        <div class="px-6 pb-5 mt-4 border-t border-gray-200 bg-gray-50 flex justify-between items-center">
            <?php echo $admins->appends(request()->query())->links('vendor.pagination.custom'); ?>

        </div>
    </div>
</div>

<?php echo app('Illuminate\Foundation\Vite')(['resources/js/admin/admins.js']); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/admin/admins/index.blade.php ENDPATH**/ ?>