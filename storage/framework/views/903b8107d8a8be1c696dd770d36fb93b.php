<div class="flex flex-col sm:flex-row items-center justify-between w-full mt-6 gap-4">
    
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center space-x-1">
        
        <?php if($paginator->onFirstPage()): ?>
        <span class="flex items-center justify-center w-9 h-9 rounded-lg bg-gray-50 border border-gray-200 text-gray-400 cursor-not-allowed">
            <i class="fas fa-angle-double-left"></i>
        </span>
        <?php else: ?>
        <a href="<?php echo e($paginator->url(1)); ?>"
            class="flex items-center justify-center w-9 h-9 rounded-lg bg-white border border-gray-200 text-gray-600 hover:bg-red-50 hover:text-red-600 transition">
            <i class="fas fa-angle-double-left"></i>
        </a>
        <?php endif; ?>

        
        <?php if($paginator->onFirstPage()): ?>
        <span class="flex items-center justify-center w-9 h-9 rounded-lg bg-gray-50 border border-gray-200 text-gray-400 cursor-not-allowed">
            <i class="fas fa-angle-left"></i>
        </span>
        <?php else: ?>
        <a href="<?php echo e($paginator->previousPageUrl()); ?>"
            class="flex items-center justify-center w-9 h-9 rounded-lg bg-white border border-gray-200 text-gray-600 hover:bg-red-50 hover:text-red-600 transition">
            <i class="fas fa-angle-left"></i>
        </a>
        <?php endif; ?>

        
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(is_string($element)): ?>
        <span class="flex items-center justify-center w-9 h-9 rounded-lg bg-white border border-gray-200 text-gray-400">…</span>
        <?php endif; ?>

        <?php if(is_array($element)): ?>
        <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($page == $paginator->currentPage()): ?>
        <span class="flex items-center justify-center w-9 h-9 rounded-lg bg-red-600 text-white font-semibold shadow-sm">
            <?php echo e($page); ?>

        </span>
        <?php else: ?>
        <a href="<?php echo e($url); ?>"
            class="flex items-center justify-center w-9 h-9 rounded-lg bg-white border border-gray-200 text-gray-700 hover:bg-red-50 hover:text-red-600 transition">
            <?php echo e($page); ?>

        </a>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <?php if($paginator->hasMorePages()): ?>
        <a href="<?php echo e($paginator->nextPageUrl()); ?>"
            class="flex items-center justify-center w-9 h-9 rounded-lg bg-white border border-gray-200 text-gray-600 hover:bg-red-50 hover:text-red-600 transition">
            <i class="fas fa-angle-right"></i>
        </a>
        <?php else: ?>
        <span class="flex items-center justify-center w-9 h-9 rounded-lg bg-gray-50 border border-gray-200 text-gray-400 cursor-not-allowed">
            <i class="fas fa-angle-right"></i>
        </span>
        <?php endif; ?>

        
        <?php if($paginator->hasMorePages()): ?>
        <a href="<?php echo e($paginator->url($paginator->lastPage())); ?>"
            class="flex items-center justify-center w-9 h-9 rounded-lg bg-white border border-gray-200 text-gray-600 hover:bg-red-50 hover:text-red-600 transition">
            <i class="fas fa-angle-double-right"></i>
        </a>
        <?php else: ?>
        <span class="flex items-center justify-center w-9 h-9 rounded-lg bg-gray-50 border border-gray-200 text-gray-400 cursor-not-allowed">
            <i class="fas fa-angle-double-right"></i>
        </span>
        <?php endif; ?>
    </nav>

    
    <div class="flex items-center space-x-3 text-sm text-gray-600">
        
        <form method="GET" id="perPageForm" class="flex items-center space-x-2">
            <select id="perPage" name="per_page"
                onchange="document.getElementById('perPageForm').submit()"
                class="border border-gray-300 rounded-md px-2 py-1 text-sm focus:ring-red-500 focus:border-red-500">
                <?php $__currentLoopData = [5, 10, 25, 50]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($size); ?>" <?php echo e(request('per_page', 10) == $size ? 'selected' : ''); ?>>
                    <?php echo e($size); ?>

                </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </form>

        
        <?php
        $from = ($paginator->currentPage() - 1) * $paginator->perPage() + 1;
        $to = min($paginator->currentPage() * $paginator->perPage(), $paginator->total());
        ?>

        <span class="text-gray-500">
            Hiển thị các dòng từ <?php echo e($from); ?> đến <?php echo e($to); ?> trong tổng <?php echo e($paginator->total()); ?>

        </span>
    </div>
</div><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/vendor/pagination/custom.blade.php ENDPATH**/ ?>