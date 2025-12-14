<?php $__env->startSection('content'); ?>

<div>
    <!-- Thống kê -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5 pb-6">
        <?php if (isset($component)) { $__componentOriginal179d930850cbc0b57567dfb2ba44c92f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal179d930850cbc0b57567dfb2ba44c92f = $attributes; } ?>
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Tổng nhóm quyền','value' => $totalPermissionGroups,'icon' => 'fa-users','from' => 'blue-500','to' => 'blue-600','iconColor' => 'blue-600'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Có vai trò','value' => $permissionGroupsWithRoles,'icon' => 'fa-user-tag','from' => 'green-500','to' => 'emerald-600','iconColor' => 'green-600'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Tổng vai trò','value' => $totalRoles,'icon' => 'fa-user','from' => 'amber-500','to' => 'orange-600','iconColor' => 'orange-600'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
        <?php if($mostRolesGroup): ?>
        <?php if (isset($component)) { $__componentOriginal179d930850cbc0b57567dfb2ba44c92f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal179d930850cbc0b57567dfb2ba44c92f = $attributes; } ?>
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Nhóm quyền nổi bật','value' => $mostRolesGroup->name,'icon' => 'fa-star','from' => 'red-500','to' => 'red-600','iconColor' => 'rose-600'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
        <?php endif; ?>
    </div>

    <div class="bg-white shadow-md rounded-xl border border-gray-200 overflow-hidden">
        <!-- Header -->
        <div class="px-6 py-5 border-b border-gray-300 flex flex-col sm:flex-row sm:justify-between flex-wrap gap-3">
            <div>
                <h1 class="text-xl font-bold text-gray-800">DANH SÁCH NHÓM QUYỀN</h1>
                <p class="text-sm text-gray-500">Theo dõi, lọc và quản lý các nhóm quyền</p>
            </div>

            <div class="flex flex-wrap items-center gap-2">
                <!-- Tải file mẫu -->
                <?php if (isset($component)) { $__componentOriginalf95f399a33c6240aef137a9e6b350e45 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf95f399a33c6240aef137a9e6b350e45 = $attributes; } ?>
<?php $component = App\View\Components\Ui\ActionButton::resolve(['href' => route('admin.permission_groups.downloadTemplate'),'icon' => 'fa-file-excel','label' => 'Tải file mẫu','outline' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

                <!-- Import -->
                <form action="<?php echo e(route('admin.permission_groups.import')); ?>" method="POST" enctype="multipart/form-data" class="inline-block">
                    <?php echo csrf_field(); ?>
                    <label class="inline-flex items-center bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium cursor-pointer">
                        <i class="fas fa-file-upload mr-2"></i> Import Excel
                        <input type="file" name="file" class="hidden" onchange="this.form.submit()">
                    </label>
                </form>

                <!-- Export -->
                <form id="export-form" action="<?php echo e(route('admin.permission_groups.export', request()->query())); ?>" method="GET" class="inline-block">
                    <input type="hidden" name="selected_ids" id="selected-ids">
                </form>

                <a href="#" id="export-btn"
                    class="inline-flex items-center border border-red-600 hover:bg-red-50 text-red-700 px-4 py-2 rounded-lg text-sm font-medium shadow transition">
                    <i class="fas fa-download mr-2"></i> Xuất Excel
                </a>

                <?php if (isset($component)) { $__componentOriginalf95f399a33c6240aef137a9e6b350e45 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf95f399a33c6240aef137a9e6b350e45 = $attributes; } ?>
<?php $component = App\View\Components\Ui\ActionButton::resolve(['href' => route('admin.permission_groups.create'),'icon' => 'fa-plus','label' => 'Thêm nhóm quyền'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

        <!-- Bộ lọc + Xóa hàng loạt -->
        <div class="p-5 border-gray-100 bg-white grid grid-cols-6 gap-4 items-end">
            <!-- 🟢 Form lọc -->
            <form method="GET" class="col-span-5 grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-5 gap-4 items-end">
                <div class="sm:col-span-2 relative">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400 text-sm"></i>
                    <input type="text" name="search" value="<?php echo e(request('search')); ?>" placeholder="Tìm nhóm quyền..."
                        class="block w-full pl-9 pr-10 py-[9px] border border-gray-300 rounded-md text-sm
               placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500
               transition duration-150 ease-in-out">
                </div>

                <div class="flex items-center gap-2 w-full">
                    <?php if (isset($component)) { $__componentOriginalf95f399a33c6240aef137a9e6b350e45 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf95f399a33c6240aef137a9e6b350e45 = $attributes; } ?>
<?php $component = App\View\Components\Ui\ActionButton::resolve(['type' => 'submit','label' => 'Lọc','class' => 'w-full text-center'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                    <?php if(request()->has('search')): ?>
                    <a href="<?php echo e(route('admin.permission_groups.index')); ?>" class="text-red-600 text-sm hover:text-red-700 font-medium">
                        <i class="fa-solid fa-rotate"></i>
                    </a>
                    <?php endif; ?>
                </div>
            </form>

            <!-- 🔴 Form xóa hàng loạt -->
            <form id="bulk-delete-form" action="<?php echo e(route('admin.permission_groups.bulkDelete')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="permission_group_ids" id="bulk-delete-ids"> 
                <button type="button" id="bulk-delete-btn"
                    class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-lg text-sm font-medium shadow transition cursor-pointer flex gap-2 items-center">
                    <i class="fas fa-trash"></i>
                    Xóa hàng loạt
                </button>
            </form>
        </div>

        <!-- Bảng nhóm quyền -->
        <div class="relative px-4 z-0">
            <div class="relative  rounded-lg border border-gray-300">
                <table class="min-w-full text-sm text-gray-700">
                    <thead class="border-b border-gray-300 bg-gray-50 text-gray-700 uppercase text-xs">
                        <tr>
                            <th class="px-6 py-3 text-center w-20">
                                <div class="flex items-center justify-center space-x-2">
                                    <input type="checkbox" id="select-all"
                                        class="form-checkbox text-red-600 focus:ring-red-500 rounded">
                                    <span>STT</span>
                                </div>
                            </th>
                            <th class="px-6 py-3 text-left">Tên nhóm quyền</th>
                            <th class="px-6 py-3 text-left">
                                Mô tả
                            </th>
                            <th class="px-6 py-3 text-center">
                                <a href="<?php echo e(route('admin.permission_groups.index', array_merge(request()->query(), [
                                            'sort' => 'permissions_count',
                                            'direction' => request('sort') === 'permissions_count' && request('direction') === 'asc' ? 'desc' : 'asc'
                                        ]))); ?>"
                                    class="flex items-center justify-center gap-1">
                                    Số quyền
                                    <?php if(request('sort') === 'permissions_count'): ?>
                                    <i class="fas fa-sort-<?php echo e(request('direction') === 'asc' ? 'up' : 'down'); ?>"></i>
                                    <?php else: ?>
                                    <i class="fas fa-sort text-gray-400"></i>
                                    <?php endif; ?>
                                </a>
                            </th>

                            <th class="px-6 py-3 text-center">
                                <a href="<?php echo e(route('admin.permission_groups.index', array_merge(request()->query(), [
                                    'sort' => 'roles_count',
                                    'direction' => request('sort') === 'roles_count' && request('direction') === 'asc' ? 'desc' : 'asc'
                                ]))); ?>"
                                    class="flex items-center justify-center gap-1">
                                    Số vai trò
                                    <?php if(request('sort') === 'roles_count'): ?>
                                    <i class="fas fa-sort-<?php echo e(request('direction') === 'asc' ? 'up' : 'down'); ?>"></i>
                                    <?php else: ?>
                                    <i class="fas fa-sort text-gray-400"></i>
                                    <?php endif; ?>
                                </a>
                            </th>
                            <th class="px-6 py-3 text-center">Thao tác</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-100">
                        <?php $__empty_1 = true; $__currentLoopData = $permissionGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permissionGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-start space-x-2">
                                    <input type="checkbox" value="<?php echo e($permissionGroup->id); ?>" class="form-checkbox text-red-600 focus:ring-red-500 rounded item-checkbox">
                                       
                                    <span class="text-gray-700 font-medium ml-2">
                                        <?php echo e(($permissionGroups->currentPage() - 1) * $permissionGroups->perPage() + $loop->iteration); ?>

                                    </span>
                                </div>
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900">
                                <?php echo e($permissionGroup->name); ?>

                            </td>

                            <td class="px-6 py-4 text-left text-gray-600">
                                <!-- <?php echo e(optional($permissionGroup->created_at)->format('d/m/Y')); ?> -->
                                <?php echo e($permissionGroup->description); ?>

                            </td>

                            <td class="px-6 py-4 text-center">
                                <?php echo e($permissionGroup->permissions_count); ?>

                            </td>

                            <td class="px-6 py-4 text-center">
                                <?php echo e($permissionGroup->roles_count); ?>

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
                                    <!-- ⚙️ Nút 3 chấm -->
                                    <button
                                        type="button"
                                        @click.stop="toggle()"
                                        x-ref="trigger"
                                        class="flex items-center justify-center w-[36px] h-[36px] rounded-full hover:bg-gray-100 focus:ring-2 focus:ring-red-100 transition-all duration-150 ease-in-out cursor-pointer">
                                        <i class="fas fa-cog text-gray-600 text-[13px]"></i>
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
                                            <!-- 📜 Danh sách quyền -->
                                            <a href="<?php echo e(route('admin.permission_groups.permissions', $permissionGroup->id)); ?>"
                                                class="flex items-center gap-2 px-4 py-2.5 text-sm text-gray-700 hover:bg-emerald-50 hover:text-emerald-600 transition">
                                                <div class="w-5 flex justify-center"><i class="fas fa-shield-alt text-emerald-500"></i></div>
                                                Danh sách quyền
                                            </a>

                                            <!-- 👥 Danh sách vai trò -->
                                            <a href="<?php echo e(route('admin.permission_groups.roles', $permissionGroup->id)); ?>"
                                                class="flex items-center gap-2 px-4 py-2.5 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">
                                                <div class="w-5 flex justify-center"><i class="fas fa-users text-indigo-500"></i></div>
                                                Danh sách vai trò
                                            </a>

                                            <!-- ✏️ Chỉnh sửa -->
                                            <a href="<?php echo e(route('admin.permission_groups.edit', $permissionGroup->id)); ?>"
                                                class="flex items-center gap-2 px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
                                                <div class="w-5 flex justify-center"><i class="fas fa-pen text-blue-500"></i></div>
                                                Chỉnh sửa
                                            </a>

                                            <!-- 🗑️ Xóa -->
                                            <form id="delete-group-<?php echo e($permissionGroup->id); ?>"
                                                action="<?php echo e(route('admin.permission_groups.destroy', $permissionGroup->id)); ?>"
                                                method="POST"
                                                onsubmit="confirmDeletePermissionGroup(event, '<?php echo e($permissionGroup->id); ?>', '<?php echo e($permissionGroup->name); ?>')"
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
                            <td colspan="6" class="py-8 text-center text-gray-500 italic">
                                Không có nhóm quyền nào được tìm thấy.
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Phân trang -->
        <div class="px-6 pb-5 mt-4 border-t border-gray-200 bg-gray-50 flex justify-center">
            <?php echo $permissionGroups->appends(request()->query())->links('vendor.pagination.custom'); ?>

        </div>
    </div>
</div>

<?php echo app('Illuminate\Foundation\Vite')(['resources/js/admin/permission_groups.js']); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/admin/permission_groups/index.blade.php ENDPATH**/ ?>