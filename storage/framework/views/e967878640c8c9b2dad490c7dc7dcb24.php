<?php $__env->startSection('content'); ?>

<div>
    <!-- Thống kê -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5 pb-6">
        <?php if (isset($component)) { $__componentOriginal179d930850cbc0b57567dfb2ba44c92f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal179d930850cbc0b57567dfb2ba44c92f = $attributes; } ?>
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Tổng thương hiệu','value' => $totalBrands,'icon' => 'fa-industry','from' => 'blue-500','to' => 'blue-600','iconColor' => 'blue-600'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Có sản phẩm','value' => $brandsWithProducts,'icon' => 'fa-boxes','from' => 'green-500','to' => 'emerald-600','iconColor' => 'green-600'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Tổng sản phẩm','value' => $totalProducts,'icon' => 'fa-cubes','from' => 'amber-500','to' => 'orange-600','iconColor' => 'orange-600'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
        <?php if($mostProductsBrand): ?>
        <?php if (isset($component)) { $__componentOriginal179d930850cbc0b57567dfb2ba44c92f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal179d930850cbc0b57567dfb2ba44c92f = $attributes; } ?>
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Thương hiệu nổi bật','value' => $mostProductsBrand->name,'icon' => 'fa-star','from' => 'red-500','to' => 'red-600','iconColor' => 'rose-600'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                <h1 class="text-xl font-bold text-gray-800">DANH SÁCH THƯƠNG HIỆU</h1>
                <p class="text-sm text-gray-500">Theo dõi, lọc và quản lý các thương hiệu</p>
            </div>

            <div class="flex flex-wrap items-center gap-2">
                <!-- Tải file mẫu -->
                <?php if (isset($component)) { $__componentOriginalf95f399a33c6240aef137a9e6b350e45 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf95f399a33c6240aef137a9e6b350e45 = $attributes; } ?>
<?php $component = App\View\Components\Ui\ActionButton::resolve(['href' => route('admin.brands.downloadTemplate'),'icon' => 'fa-file-excel','label' => 'Tải file mẫu','outline' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                <form action="<?php echo e(route('admin.brands.import')); ?>" method="POST" enctype="multipart/form-data" class="inline-block">
                    <?php echo csrf_field(); ?>
                    <label class="inline-flex items-center bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium cursor-pointer">
                        <i class="fas fa-file-upload mr-2"></i> Import Excel
                        <input type="file" name="file" class="hidden" onchange="this.form.submit()">
                    </label>
                </form>

                <!-- Export -->
                <form id="export-form" action="<?php echo e(route('admin.brands.export', request()->query())); ?>" method="GET" class="inline-block">
                    <input type="hidden" name="selected_ids" id="selected-ids">
                </form>

                <a href="#" id="export-btn"
                    class="inline-flex items-center border border-red-600 hover:bg-red-50 text-red-700 px-4 py-2 rounded-lg text-sm font-medium shadow transition">
                    <i class="fas fa-download mr-2"></i> Xuất Excel
                </a>

                <?php if (isset($component)) { $__componentOriginalf95f399a33c6240aef137a9e6b350e45 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf95f399a33c6240aef137a9e6b350e45 = $attributes; } ?>
<?php $component = App\View\Components\Ui\ActionButton::resolve(['href' => route('admin.brands.create'),'icon' => 'fa-plus','label' => 'Thêm thương hiệu'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                    <input type="text" name="search" value="<?php echo e(request('search')); ?>" placeholder="Tìm thương hiệu..."
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
                    <a href="<?php echo e(route('admin.brands.index')); ?>" class="text-red-600 text-sm hover:text-red-700 font-medium">
                        <i class="fa-solid fa-rotate"></i>
                    </a>
                    <?php endif; ?>
                </div>
            </form>

            <!-- 🔴 Form xóa hàng loạt -->
            <form id="bulk-delete-form" action="<?php echo e(route('admin.brands.bulkDelete')); ?>" method="POST" class="flex items-center justify-end">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="brand_ids" id="bulk-delete-ids">
                <button type="button" id="bulk-delete-btn"
                    class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-lg text-sm font-medium shadow transition cursor-pointer flex gap-2 items-center">
                    <i class="fas fa-trash"></i>
                    Xóa hàng loạt
                </button>
            </form>
        </div>

        <!-- Bảng thương hiệu -->
        <div class="overflow-x-auto px-4">
            <div class="overflow-hidden rounded-lg border border-gray-300">
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
                            <th class="px-6 py-3">Tên thương hiệu</th>
                            <th class="px-6 py-3 text-center">Logo</th>
                            <th class="px-6 py-3">Mô tả</th>
                            <th class="px-6 py-3 text-center">
                                <a href="<?php echo e(route('admin.brands.index', [
        'sort' => 'products_count',
        'direction' => request('direction') === 'asc' ? 'desc' : 'asc',
        'search' => request('search'),
    ])); ?>" class="flex items-center justify-center gap-1 hover:text-red-600 transition">
                                    Sản phẩm
                                    <?php if(request('sort') === 'products_count'): ?>
                                    <i class="fa-solid fa-sort-<?php echo e(request('direction') === 'asc' ? 'up' : 'down'); ?>"></i>
                                    <?php else: ?>
                                    <i class="fa-solid fa-sort text-gray-400"></i>
                                    <?php endif; ?>
                                </a>
                            </th>

                            <th class="px-6 py-3 text-center">
                                <a href="<?php echo e(route('admin.brands.index', [
        'sort' => 'created_at',
        'direction' => request('direction') === 'asc' ? 'desc' : 'asc',
        'search' => request('search'),
    ])); ?>" class="flex items-center justify-center gap-1 hover:text-red-600 transition">
                                    Ngày tạo
                                    <?php if(request('sort') === 'created_at'): ?>
                                    <i class="fa-solid fa-sort-<?php echo e(request('direction') === 'asc' ? 'up' : 'down'); ?>"></i>
                                    <?php else: ?>
                                    <i class="fa-solid fa-sort text-gray-400"></i>
                                    <?php endif; ?>
                                </a>
                            </th>
                            <th class="px-6 py-3 text-center">Thao tác</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-100">
                        <?php $__empty_1 = true; $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-start space-x-2">
                                    <input type="checkbox" name="brand_ids[]" value="<?php echo e($brand->id); ?>"
                                        class="form-checkbox text-red-600 focus:ring-red-500 rounded item-checkbox">
                                    <span class="text-gray-700 font-medium ml-2">
                                        <?php echo e(($brands->currentPage() - 1) * $brands->perPage() + $loop->iteration); ?>

                                    </span>
                                </div>
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900">
                                <?php echo e($brand->name); ?>

                            </td>

                            <td class="px-6 py-4 text-center">
                                <img src="<?php echo e(asset('images/brands/' . ($brand->logo_url ?? 'no-image.png'))); ?>" alt="<?php echo e($brand->name); ?>" class="w-14 h-14 rounded-md border border-gray-200 object-cover">
                            </td>

                            <td class="px-6 py-4 text-gray-500 ">
                                <?php echo e(Str::limit($brand->description, 60) ?? '—'); ?>

                            </td>


                            <td class="px-6 py-4 text-center">
                                <?php echo e($brand->products_count); ?>

                            </td>

                            <td class="px-6 py-4 text-center text-gray-600">
                                <?php echo e(optional($brand->created_at)->format('d/m/Y')); ?>

                            </td>

                            <td class="px-6 py-4 text-center space-x-6">
                                <a href="<?php echo e(route('admin.brands.edit', $brand)); ?>" class="text-indigo-600 hover:text-indigo-800">
                                    <i class="fas fa-pen"></i>
                                </a>

                                <form action="<?php echo e(route('admin.brands.destroy', $brand->id)); ?>" method="POST"
                                    class="inline"
                                    onsubmit="confirmDeleteBrand(event, '<?php echo e($brand->name); ?>')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="cursor-pointer text-red-600 hover:text-red-800">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="7" class="py-8 text-center text-gray-500 italic">
                                Không có thương hiệu nào được tìm thấy.
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Phân trang -->
        <div class="px-6 pb-5 mt-4 border-t border-gray-200 bg-gray-50 flex justify-center">
            <?php echo $brands->appends(request()->query())->links('vendor.pagination.custom'); ?>

        </div>
    </div>
</div>

<?php echo app('Illuminate\Foundation\Vite')(['resources/js/admin/brands.js']); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/admin/brands/index.blade.php ENDPATH**/ ?>