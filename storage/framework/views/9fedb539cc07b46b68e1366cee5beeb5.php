<?php
    $colorMap = [
        'red' => [
            'solid' => 'bg-red-600 hover:bg-red-700 text-white',
            'outline' => 'border border-red-600 text-red-700 hover:bg-red-50',
        ],
        'gray' => [
            'solid' => 'bg-gray-100 hover:bg-gray-200 text-gray-700',
            'outline' => 'border border-gray-600 text-gray-700 hover:bg-gray-50',
        ],
        'green' => [
            'solid' => 'bg-green-600 hover:bg-green-700 text-white',
            'outline' => 'border border-green-600 text-green-700 hover:bg-green-50',
        ],
        'blue' => [
            'solid' => 'bg-blue-600 hover:bg-blue-700 text-white',
            'outline' => 'border border-blue-600 text-blue-700 hover:bg-blue-50',
        ],
    ];

    $palette = $colorMap[$color] ?? $colorMap['red'];
    $style = $outline ? $palette['outline'] : $palette['solid'];

    $classes = "inline-flex items-center justify-center {$style} px-4 py-2 rounded-lg text-sm font-medium shadow transition {$class}";
?>

<?php if($href): ?>
    <a href="<?php echo e($href); ?>" class="<?php echo e($classes); ?>">
        <?php if(!empty($icon)): ?>
            <i class="fas <?php echo e($icon); ?> mr-2"></i>
        <?php endif; ?>
        <?php echo e($label); ?>

    </a>
<?php else: ?>
    <button type="<?php echo e($type); ?>" class="<?php echo e($classes); ?> cursor-pointer">
        <?php if(!empty($icon)): ?>
            <i class="fas <?php echo e($icon); ?> mr-2"></i>
        <?php endif; ?>
        <?php echo e($label); ?>

    </button>
<?php endif; ?>
<?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/components/ui/action-button.blade.php ENDPATH**/ ?>