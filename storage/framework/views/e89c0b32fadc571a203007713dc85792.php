<?php $__env->startSection('content'); ?>
<div>
    <!-- 🧮 Thống kê -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-5 pb-6">
        <?php if (isset($component)) { $__componentOriginal179d930850cbc0b57567dfb2ba44c92f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal179d930850cbc0b57567dfb2ba44c92f = $attributes; } ?>
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Tổng quyền','value' => $totalPermissions,'icon' => 'fa-key','from' => 'blue-500','to' => 'blue-600','iconColor' => 'blue-600'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Nhóm quyền','value' => $totalGroups,'icon' => 'fa-users-cog','from' => 'amber-500','to' => 'orange-600','iconColor' => 'orange-600'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Quyền riêng lẻ','value' => $totalUngrouped,'icon' => 'fa-user-shield','from' => 'green-500','to' => 'emerald-600','iconColor' => 'green-600'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Chưa gán vai trò','value' => $unusedPermissions,'icon' => 'fa-ban','from' => 'red-500','to' => 'rose-600','iconColor' => 'rose-600'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                <h1 class="text-xl font-bold text-gray-800">DANH SÁCH QUYỀN</h1>
                <p class="text-sm text-gray-500">Quản lý quyền hệ thống và nhóm quyền</p>
            </div>

            <div class="flex flex-wrap items-center gap-2">
                <?php if (isset($component)) { $__componentOriginalf95f399a33c6240aef137a9e6b350e45 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf95f399a33c6240aef137a9e6b350e45 = $attributes; } ?>
<?php $component = App\View\Components\Ui\ActionButton::resolve(['href' => route('admin.permissions.downloadTemplate'),'icon' => 'fa-file-excel','label' => 'Tải file mẫu','outline' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

                <form action="<?php echo e(route('admin.permissions.import')); ?>" method="POST" enctype="multipart/form-data" class="inline-block">
                    <?php echo csrf_field(); ?>
                    <label class="inline-flex items-center bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium cursor-pointer">
                        <i class="fas fa-file-upload mr-2"></i> Import Excel
                        <input type="file" name="file" class="hidden" onchange="this.form.submit()">
                    </label>
                </form>

                <form id="export-form" action="<?php echo e(route('admin.permissions.export')); ?>" method="GET">
                    <input type="hidden" name="selected_ids" id="selected-ids">
                </form>

                <a href="#" id="export-btn"
                    class="inline-flex items-center border border-red-600 hover:bg-red-50 text-red-700 px-4 py-2 rounded-lg text-sm font-medium shadow transition">
                    <i class="fas fa-download mr-2"></i> Xuất Excel
                </a>

                <?php if (isset($component)) { $__componentOriginalf95f399a33c6240aef137a9e6b350e45 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf95f399a33c6240aef137a9e6b350e45 = $attributes; } ?>
<?php $component = App\View\Components\Ui\ActionButton::resolve(['href' => route('admin.permissions.create'),'icon' => 'fa-plus','label' => 'Thêm quyền'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
        <div class="p-5 border-gray-100 bg-white grid grid-cols-5 gap-4 items-end">
            <form method="GET" class="col-span-4 grid grid-cols-1 sm:grid-cols-5 gap-4 items-end">
                <div class="sm:col-span-2 relative">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400 text-sm"></i>
                    <input type="text" name="search" value="<?php echo e(request('search')); ?>" placeholder="Tìm quyền..."
                        class="block w-full pl-9 pr-10 py-[9px] border border-gray-300 rounded-md text-sm
                        placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 transition">
                </div>

                <?php if (isset($component)) { $__componentOriginal36c368e88b7801a467b55faa78ace34f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36c368e88b7801a467b55faa78ace34f = $attributes; } ?>
<?php $component = App\View\Components\Form\Select::resolve(['name' => 'group','options' => $groups->pluck('name','id'),'placeholder' => 'Tất cả nhóm quyền','class' => 'col-span-2 w-full'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                    <?php if(request()->hasAny(['search','group'])): ?>
                    <a href="<?php echo e(route('admin.permissions.index')); ?>" class="text-red-600 text-sm hover:text-red-700 font-medium">
                        <i class="fa-solid fa-rotate"></i>
                    </a>
                    <?php endif; ?>
                </div>
            </form>

            <!-- Form xóa hàng loạt -->
            <form id="bulk-delete-form" action="<?php echo e(route('admin.permissions.bulkDelete')); ?>" method="POST" class="flex items-center justify-end">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="permission_ids" id="bulk-delete-ids">
                <button type="button" id="bulk-delete-btn"
                    class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-lg text-sm font-medium shadow transition cursor-pointer flex gap-3 items-center">
                    <i class="fas fa-trash"></i> Xóa hàng loạt
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
                            <th class="px-6 py-3">Tên quyền</th>
                            <th class="px-6 py-3 text-center">Slug</th>
                            <th class="px-6 py-3 text-left">Mô tả</th>
                            <th class="px-6 py-3 text-center">Nhóm quyền</th>
                            <th class="px-6 py-3 text-center">Thao tác</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-100">
                        <?php $__empty_1 = true; $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">
                                <input type="checkbox" class="form-checkbox text-red-600 focus:ring-red-500 rounded item-checkbox" value="<?php echo e($permission->id); ?>">
                                <span class="text-gray-700 font-medium ml-2">
                                    <?php echo e(($permissions->currentPage() - 1) * $permissions->perPage() + $loop->iteration); ?>

                                </span>
                            </td>
                            <td class="px-6 py-4 font-medium"><?php echo e($permission->name); ?></td>
                            <td class="px-6 py-4 text-center text-gray-600"><?php echo e($permission->slug); ?></td>
                            <td class="px-6 py-4 text-left text-gray-600">
                                <?php echo e($permission->description ? $permission->description : '—'); ?>

                            </td>
                            <td class="px-6 py-4 text-center"><?php echo e($permission->group?->name ?? '—'); ?></td>
                            <td class="px-6 py-4 text-center space-x-6">
                                <a href="<?php echo e(route('admin.permissions.edit', $permission->id)); ?>" class="text-indigo-600 hover:text-indigo-800"><i class="fas fa-pen"></i></a>
                                <form action="<?php echo e(route('admin.permissions.destroy', $permission->id)); ?>" method="POST" class="inline"
                                    onsubmit="confirmDelete(event, '<?php echo e($permission->name); ?>')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="text-red-600 hover:text-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="py-6 text-center text-gray-500 italic">Không có quyền nào được tìm thấy.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="px-6 pb-5 mt-4 border-t border-gray-200 bg-gray-50 flex justify-center">
            <?php echo $permissions->appends(request()->query())->links('vendor.pagination.custom'); ?>

        </div>
    </div>
</div>

<?php echo app('Illuminate\Foundation\Vite')(['resources/js/admin/permissions.js']); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/admin/permissions/index.blade.php ENDPATH**/ ?>