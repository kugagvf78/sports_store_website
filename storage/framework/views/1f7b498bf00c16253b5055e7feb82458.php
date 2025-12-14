<?php $__env->startSection('content'); ?>
<div>


    <!-- Bảng danh sách quyền -->
    <div class="bg-white shadow-md rounded-xl border border-gray-200 overflow-hidden">
        <div class="flex px-6 py-5 items-center justify-between border-b border-gray-200">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">
                    Quyền trong nhóm: <span class="text-red-600"><?php echo e($permissionGroup->name); ?></span>
                </h1>
                <p class="text-sm text-gray-500">Quản lý các quyền thuộc nhóm này</p>
            </div>

            <?php if (isset($component)) { $__componentOriginalf95f399a33c6240aef137a9e6b350e45 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf95f399a33c6240aef137a9e6b350e45 = $attributes; } ?>
<?php $component = App\View\Components\Ui\ActionButton::resolve(['href' => route('admin.permission_groups.index'),'icon' => 'fa-arrow-left','label' => 'Quay lại','outline' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
        <div class="px-6 py-5  flex items-center justify-between">
            <h2 class="font-semibold text-gray-700">
                Danh sách quyền (<?php echo e($totalPermissions); ?>)
            </h2>

            <button id="add-permission-btn"
                class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg cusor-pointer text-sm font-medium shadow flex items-center gap-2">
                <i class="fas fa-plus"></i> Thêm quyền vào nhóm
            </button>
        </div>

        <div class="overflow-x-auto px-4">
            <div class="overflow-hidden rounded-lg border border-gray-300">
                <table class="min-w-full text-sm text-gray-700">
                    <thead class="border-b border-gray-300 bg-gray-50 uppercase text-xs">
                        <tr>
                            <th class="px-6 py-3 text-left w-20">STT</th>
                            <th class="px-6 py-3 text-left">Tên quyền</th>
                            <th class="px-6 py-3 text-center">Slug</th>
                            <th class="px-6 py-3 text-left">Mô tả</th>
                            <th class="px-6 py-3 text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <?php $__empty_1 = true; $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4"><?php echo e($loop->iteration); ?></td>
                            <td class="px-6 py-4 font-medium text-gray-800"><?php echo e($permission->name); ?></td>
                            <td class="px-6 py-4 text-center"><?php echo e($permission->slug); ?></td>
                            <td class="px-6 py-4 text-gray-600"><?php echo e($permission->description ?? '—'); ?></td>
                            <td class="px-6 py-4 text-center">
                                <form action="<?php echo e(route('admin.permission_groups.permissions.detach', [$permissionGroup->id, $permission->id])); ?>"
                                    method="POST" onsubmit="confirmDelete(event, '<?php echo e($permission->name); ?>')">
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
                            <td colspan="5" class="py-6 text-center text-gray-500 italic">
                                Chưa có quyền nào trong nhóm này.
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="px-6 pb-5 mt-4  bg-gray-50 flex justify-center">
            <?php echo $permissions->appends(request()->query())->links('vendor.pagination.custom'); ?>

        </div>
    </div>
</div>

<div
    id="pg-permissions-root"
    data-available='<?php echo json_encode($availablePermissions, 15, 512) ?>'
    data-attach-url="<?php echo e(route('admin.permission_groups.permissions.attach', $permissionGroup->id)); ?>">
</div>

<script>
    (function() {
        const root = document.getElementById('pg-permissions-root');
        window.availablePermissions = JSON.parse(root.dataset.available);
        window.attachPermissionUrl = root.dataset.attachUrl;
    })();
</script>

<?php echo app('Illuminate\Foundation\Vite')(['resources/js/admin/permission_groups.js']); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/admin/permission_groups/permissions.blade.php ENDPATH**/ ?>