<div class="<?php echo e($class); ?>">
    <?php if($label): ?>
    <span class="text-sm text-gray-700"><?php echo e($label); ?></span>
    <?php endif; ?>
    <select
        name="<?php echo e($name); ?>"
        class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
        <option value=""><?php echo e($placeholder); ?></option>
        <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($key); ?>" <?php echo e($selected == $key ? 'selected' : ''); ?>><?php echo e($text); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/components/form/select.blade.php ENDPATH**/ ?>