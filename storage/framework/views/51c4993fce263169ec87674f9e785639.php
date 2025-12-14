<?php $__env->startSection('content'); ?>

<div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-5 pb-6">

        <?php if (isset($component)) { $__componentOriginal179d930850cbc0b57567dfb2ba44c92f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal179d930850cbc0b57567dfb2ba44c92f = $attributes; } ?>
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Tổng sản phẩm','value' => $totalProducts,'icon' => 'fa-boxes','from' => 'blue-500','to' => 'blue-600','iconColor' => 'blue-600','fontSize' => 'text-3xl'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Đang bán','value' => $totalSelling,'icon' => 'fa-store-alt','from' => 'green-500','to' => 'emerald-600','iconColor' => 'green-600','fontSize' => 'text-3xl'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Hết hàng','value' => $totalOutOfStock,'icon' => 'fa-box-open','from' => 'red-500','to' => 'rose-600','iconColor' => 'red-600','fontSize' => 'text-3xl'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Ẩn','value' => $totalHidden,'icon' => 'fa-eye-slash','from' => 'slate-500','to' => 'slate-600','iconColor' => 'slate-600','fontSize' => 'text-3xl'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Ngừng bán','value' => $totalStopped,'icon' => 'fa-ban','from' => 'amber-500','to' => 'amber-600','iconColor' => 'amber-600','fontSize' => 'text-3xl'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Đã xóa mềm','value' => $totalSoftDeleted,'icon' => 'fa-trash','from' => 'purple-500','to' => 'purple-600','iconColor' => 'purple-600','fontSize' => 'text-3xl'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\StatCard::resolve(['title' => 'Đã bán','value' => number_format($totalSold),'icon' => 'fa-shopping-cart','from' => 'amber-500','to' => 'orange-600','iconColor' => 'orange-600','fontSize' => 'text-3xl'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
        <div class="px-6 py-5 border-b border-gray-300 flex flex-col sm:flex-row sm:items-center sm:justify-between flex-wrap gap-3">
            <!-- Tiêu đề -->
            <div class="flex flex-col">
                <h1 class="text-xl font-bold text-gray-800">DANH SÁCH SẢN PHẨM</h1>
                <p class="text-sm text-gray-500">Theo dõi, lọc và sắp xếp sản phẩm trong cửa hàng</p>
            </div>

            <!-- Các nút thao tác -->
            <div class="flex flex-wrap items-center justify-end gap-2">

                <?php if (isset($component)) { $__componentOriginalf95f399a33c6240aef137a9e6b350e45 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf95f399a33c6240aef137a9e6b350e45 = $attributes; } ?>
<?php $component = App\View\Components\Ui\ActionButton::resolve(['href' => route('admin.products.downloadTemplate'),'icon' => 'fa-file-excel','label' => 'Tải file mẫu','outline' => 'true'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

                <form action="<?php echo e(route('admin.products.import')); ?>" method="POST" enctype="multipart/form-data" class="inline-block">
                    <?php echo csrf_field(); ?>
                    <label
                        class="inline-flex items-center bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium cursor-pointer">
                        <i class="fas fa-file-upload mr-2"></i> Import Excel
                        <input type="file" name="file" class="hidden" onchange="this.form.submit()">
                    </label>
                </form>

                <form id="export-form" action="<?php echo e(route('admin.products.export', request()->query())); ?>" method="GET" class="inline-block">
                    <input type="hidden" name="selected_ids" id="selected-ids">
                </form>

                <a href="#" id="export-btn"
                    class="inline-flex items-center border border-red-600 hover:bg-red-50 text-red-700 px-4 py-2 rounded-lg text-sm font-medium shadow transition">
                    <i class="fas fa-download mr-2"></i> Xuất Excel
                </a>

                <?php if (isset($component)) { $__componentOriginalf95f399a33c6240aef137a9e6b350e45 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf95f399a33c6240aef137a9e6b350e45 = $attributes; } ?>
<?php $component = App\View\Components\Ui\ActionButton::resolve(['href' => route('admin.products.create'),'icon' => 'fa-plus','label' => 'Thêm sản phẩm'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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


        <!-- Bộ lọc & tìm kiếm -->
        <div class="px-5 pt-5 border-gray-100 bg-white">
            <form method="GET" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 items-end">
                <!-- Tìm kiếm -->
                <div class="sm:col-span-2 relative w-full ">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-search text-gray-400 text-sm"></i>
                    </div>
                    <input type="text" name="search" value="<?php echo e(request('search')); ?>"
                        placeholder="Tìm kiếm sản phẩm..."
                        class="block w-full pl-9 pr-10 py-[9px] border border-gray-300 rounded-md text-sm
               placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500
               transition duration-150 ease-in-out">
                </div>

                <!-- Trạng thái -->
                <?php if (isset($component)) { $__componentOriginal36c368e88b7801a467b55faa78ace34f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36c368e88b7801a467b55faa78ace34f = $attributes; } ?>
<?php $component = App\View\Components\Form\Select::resolve(['name' => 'status','selected' => request()->has('status') ? (string) request()->get('status') : '','options' => [
                        '1' => 'Đang bán',
                        '2' => 'Hết hàng',
                        '0' => 'Ẩn',
                        '3' => 'Ngừng bán',
                        '4' => 'Đã xóa mềm'
                    ],'placeholder' => 'Tất cả trạng thái'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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


                <!-- Loại sản phẩm -->
                <?php if (isset($component)) { $__componentOriginal36c368e88b7801a467b55faa78ace34f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36c368e88b7801a467b55faa78ace34f = $attributes; } ?>
<?php $component = App\View\Components\Form\Select::resolve(['name' => 'category','options' => $categories->pluck('name','id'),'placeholder' => 'Tất cả loại'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

                <!-- Thương hiệu -->
                <?php if (isset($component)) { $__componentOriginal36c368e88b7801a467b55faa78ace34f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36c368e88b7801a467b55faa78ace34f = $attributes; } ?>
<?php $component = App\View\Components\Form\Select::resolve(['name' => 'brand','options' => $brands->pluck('name','id'),'placeholder' => 'Tất cả thương hiệu'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

                <!-- Khoảng giá -->
                <?php if (isset($component)) { $__componentOriginalc1d2405c7f8100d77292f2d0299ccd96 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1d2405c7f8100d77292f2d0299ccd96 = $attributes; } ?>
<?php $component = App\View\Components\Form\Input::resolve(['type' => 'number','name' => 'min_price','label' => 'Từ giá'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\Form\Input::resolve(['type' => 'number','name' => 'max_price','label' => 'Đến giá'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

                <!-- Khoảng ngày -->
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

                <!-- Nút lọc -->
                <div class="flex items-center w-1/2 ">
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
                    <?php if(request()->hasAny(['search','status','category','brand','from_date','to_date'])): ?>
                    <a href="<?php echo e(route('admin.products.index')); ?>"
                        class="text-red-600 text-sm hover:text-red-700 font-medium ml-3">
                        <i class="fa-solid fa-rotate"></i>
                    </a>
                    <?php endif; ?>
                </div>
            </form>
        </div>

        <!-- Form cập nhật Bulk -->
        <div>
            <form action="<?php echo e(route('admin.products.bulkUpdate')); ?>" method="POST" id="bulk-form">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="product_ids[]" id="bulk-update-ids">
                <input type="hidden" name="status" id="bulk-status">
                <input type="hidden" name="price" id="bulk-price">

                <div class="mt-4 grid grid-cols-10 items-center px-6 py-4 gap-3">
                    <button type="button" id="bulk-update-btn"
                        class="cursor-pointer col-span-2 text-center border border-red-600 hover:bg-red-50 text-red-700 px-4 py-2 rounded-lg text-sm font-medium shadow transition w-full">
                        Cập nhật hàng loạt
                    </button>

                </div>
            </form>
        </div>


        <!-- Bảng sản phẩm -->
        <p id="selected-count" class="text-sm text-gray-500 mt-2"></p>

        <div class="overflow-x-auto px-4">

            <div class="overflow-hidden rounded-lg border border-gray-300">
                <table class="min-w-full text-sm text-gray-700">
                    <thead class="border-b border-gray-300 bg-gray-50 text-gray-700 uppercase text-xs">
                        <tr class="text-left">
                            <th class="px-6 py-3 text-center w-20">
                                <div class="flex items-center justify-center space-x-2">
                                    <input type="checkbox" id="select-all"
                                        class="form-checkbox text-red-600 focus:ring-red-500 rounded">

                                    <span>STT</span>
                                </div>
                            </th>
                            <th class="px-6 py-">Sản phẩm</th>
                            <!-- Cột giá có sort -->
                            <th class="px-6 py-3 text-center">
                                <a href="<?php echo e(route('admin.products.index', array_merge(request()->query(), ['sort' => 'price', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']))); ?>"
                                    class="flex items-center justify-center gap-1">
                                    Giá
                                    <?php if(request('sort') === 'price'): ?>
                                    <i class="fas fa-sort-<?php echo e(request('direction') === 'asc' ? 'up' : 'down'); ?>"></i>
                                    <?php else: ?>
                                    <i class="fas fa-sort text-gray-400"></i>
                                    <?php endif; ?>
                                </a>
                            </th>

                            <th class="px-6 py-3 text-center">Trạng thái</th>

                            <!-- Cột ngày tạo có sort -->
                            <th class="px-6 py-3 text-center">
                                <a href="<?php echo e(route('admin.products.index', array_merge(request()->query(), ['sort' => 'created_at', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']))); ?>"
                                    class="flex items-center justify-center gap-1">
                                    Ngày tạo
                                    <?php if(request('sort') === 'created_at'): ?>
                                    <i class="fas fa-sort-<?php echo e(request('direction') === 'asc' ? 'up' : 'down'); ?>"></i>
                                    <?php else: ?>
                                    <i class="fas fa-sort text-gray-400"></i>
                                    <?php endif; ?>
                                </a>
                            </th>

                            <!-- Cột tồn kho có sort -->
                            <th class="px-6 py-3 text-center">
                                <a href="<?php echo e(route('admin.products.index', array_merge(request()->query(), ['sort' => 'stock', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']))); ?>"
                                    class="flex items-center justify-center gap-1">
                                    Tồn kho
                                    <?php if(request('sort') === 'stock'): ?>
                                    <i class="fas fa-sort-<?php echo e(request('direction') === 'asc' ? 'up' : 'down'); ?>"></i>
                                    <?php else: ?>
                                    <i class="fas fa-sort text-gray-400"></i>
                                    <?php endif; ?>
                                </a>
                            </th>
                            <th class="px-6 py-3 text-center">
                                <a href="<?php echo e(route('admin.products.index', array_merge(request()->query(), ['sort' => 'sold', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']))); ?>"
                                    class="flex items-center justify-center gap-1">
                                    Đã bán
                                    <?php if(request('sort') === 'sold'): ?>
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
                        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-start space-x-2">
                                    <input type="checkbox" name="product_ids[]" value="<?php echo e($product->id); ?>"
                                        class="form-checkbox text-red-600 focus:ring-red-500 rounded item-checkbox">
                                    <span class="text-gray-700 font-medium ml-2">
                                        <?php echo e(($products->currentPage() - 1) * $products->perPage() + $loop->iteration); ?>

                                    </span>
                                </div>
                            </td>
                            <td class="px-6 py-4 flex items-center space-x-4">
                                <img src="<?php echo e(asset('images/products/' . ($product->mainImage->url ?? 'no-image.png'))); ?>" alt="<?php echo e($product->name); ?>" class="w-14 h-14 rounded-md border border-gray-200 object-cover">
                                <div>
                                    <p class="font-medium text-gray-900"><?php echo e($product->name); ?></p>
                                    <p class="text-xs text-gray-500 mt-1">
                                        <span class="inline-block bg-red-50 text-red-600 text-xs font-medium px-2.5 py-1 rounded-full border border-red-200 mt-1">
                                            <?php echo e($product->brand->name ?? ''); ?>

                                        </span>
                                        <?php if($product->categories->isNotEmpty()): ?>
                                        ⟡ <?php echo e($product->categories->pluck('name')->join(', ')); ?>

                                        <?php endif; ?>
                                    </p>
                                </div>
                            </td>

                            <td class="px-6 py-4 text-center font-medium text-gray-800">
                                <?php echo e(number_format($product->price, 0, ',', '.')); ?> ₫
                            </td>

                            <td class="px-6 py-4 text-center">

                                <?php if($product->status == 1): ?>
                                <span class="flex justify-center items-center w-full px-3 py-1 rounded-full 
            text-xs font-medium bg-green-100 text-green-700 border border-green-300">
                                    Đang bán
                                </span>

                                <?php elseif($product->status == 2): ?>
                                <span class="flex justify-center items-center w-full px-3 py-1 rounded-full 
            text-xs font-medium bg-red-100 text-red-700 border border-red-300">
                                    Hết hàng
                                </span>

                                <?php elseif($product->status == 0): ?>
                                <span class="flex justify-center items-center w-full px-3 py-1 rounded-full 
            text-xs font-medium bg-gray-100 text-gray-600 border border-gray-300">
                                    Ẩn
                                </span>

                                <?php elseif($product->status == 3): ?>
                                <span class="flex justify-center items-center w-full px-3 py-1 rounded-full 
            text-xs font-medium bg-yellow-100 text-yellow-700 border border-yellow-300">
                                    Ngừng bán
                                </span>

                                <?php elseif($product->status == 4): ?>
                                <span class="flex justify-center items-center w-full px-3 py-1 rounded-full 
            text-xs font-medium bg-purple-100 text-purple-700 border border-purple-300">
                                    Đã xóa mềm
                                </span>
                                <?php endif; ?>

                            </td>

                            <td class="px-6 py-4 text-center text-gray-600">
                                <?php echo e($product->created_at->format('d/m/Y')); ?>

                            </td>
                            <td class="px-6 py-4 text-center">
                                <?php echo e($product->total_stock ?? 0); ?>

                            </td>

                            <td class="px-6 py-4 text-center">
                                <?php echo e($product->sold_qty ?? 0); ?>

                            </td>

                            <td class="px-6 py-4 text-center space-x-3">
                                <?php if(!in_array($product->status, [0, 2, 3, 4])): ?>
                                <a href="<?php echo e(route('products.show', $product->slug)); ?>"
                                    target="_blank"
                                    class="text-green-600 hover:text-green-800 text-sm font-medium"
                                    title="Xem sản phẩm ngoài trang web">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <?php else: ?>
                                <span class="text-gray-400 cursor-not-allowed opacity-50" title="Sản phẩm đang ẩn, không thể xem">
                                    <i class="fas fa-eye-slash"></i>
                                </span>
                                <?php endif; ?>

                                <a href="<?php echo e(route('admin.products.edit', $product)); ?>" class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">
                                    <i class="fas fa-pen"></i>
                                </a>

                                <button onclick="openStatusUpdateModal(<?php echo e($product->id); ?>, <?php echo e($product->status); ?>, '<?php echo e($product->name); ?>')"
                                    class="text-blue-600 hover:text-blue-800 cursor-pointer">
                                    <i class="fas fa-rotate"></i>
                                </button>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="7" class="py-8 text-center text-gray-500 italic">
                                Không có sản phẩm nào được tìm thấy.
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>


        </div>

        <!-- Phân trang -->
        <div class="px-6 pb-5 mt-4 border-t border-gray-200 bg-gray-50 flex justify-center">
            <?php echo $products->appends(request()->query())->links('vendor.pagination.custom'); ?>

        </div>
    </div>
</div>

<?php echo app('Illuminate\Foundation\Vite')(['resources/js/admin/products.js']); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/admin/products/index.blade.php ENDPATH**/ ?>