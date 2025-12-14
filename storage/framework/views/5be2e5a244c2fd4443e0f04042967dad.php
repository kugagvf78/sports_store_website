<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['items' => []]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['items' => []]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<nav class="bg-white rounded-lg shadow-sm px-6 py-4 mb-6">
    <ol class="flex items-center space-x-3 text-sm text-gray-600 overflow-x-auto whitespace-nowrap">
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if($index > 0): ?>
                <li class="text-gray-400">/</li>
            <?php endif; ?>

            
            <?php if(isset($item['url'])): ?>
                <li>
                    <a href="<?php echo e($item['url']); ?>"
                       class="flex items-center text-red-600 hover:text-red-700 transition-colors duration-150">
                        <?php if(isset($item['icon'])): ?>
                            <i class="<?php echo e($item['icon']); ?> mr-1"></i>
                        <?php endif; ?>
                        <span><?php echo e($item['label']); ?></span>
                    </a>
                </li>
            <?php else: ?>
                
                <li class="text-gray-700 font-semibold">
                    <?php echo e($item['label']); ?>

                </li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
</nav><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/components/breadcrumb.blade.php ENDPATH**/ ?>