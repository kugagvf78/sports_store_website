<div class="relative bg-gradient-to-br from-<?php echo e($from); ?> to-<?php echo e($to); ?> rounded-xl p-5 shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden">
    <div class="absolute top-0 right-0 w-20 h-20 bg-white opacity-20 rounded-full -mr-10 -mt-10"></div>
    <div class="relative z-10 flex items-center justify-between">
        <div>
            <p class="text-white text-opacity-90 text-xs font-medium uppercase mb-2"><?php echo e($title); ?></p>
                <h5 class="font-bold <?php echo e($fontSize); ?> text-white"><?php echo e($value); ?></h5>
        </div>
        <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
            <i class="fas <?php echo e($icon); ?> text-<?php echo e($iconColor); ?> text-xl"></i>
        </div>
    </div>
</div>
<?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/components/stat-card.blade.php ENDPATH**/ ?>