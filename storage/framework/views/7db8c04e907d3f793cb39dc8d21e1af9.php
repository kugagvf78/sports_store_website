<?php
$baseClass = "w-full border rounded-lg px-4 py-2.5 text-sm transition-all duration-200 focus:outline-none";

// Style khi disabled
$inputClass = $disabled
? "$baseClass bg-gray-100 border-gray-300 text-gray-500 cursor-not-allowed"
: "$baseClass border-gray-300
hover:border-gray-400
focus:ring-2 focus:ring-red-600/20
focus:border-red-600";
?>

<div class="<?php echo e($class); ?>">
    <?php if($label): ?>
    <span class="text-sm text-gray-700"><?php echo e($label); ?></span>
    <?php endif; ?>

    <input
        type="<?php echo e($type); ?>"
        name="<?php echo e($name); ?>"
        value="<?php echo e($value); ?>"
        placeholder="<?php echo e($placeholder); ?>"
        class="<?php echo e($inputClass); ?>"
        <?php if($disabled): ?> disabled <?php endif; ?>>
</div><?php /**PATH D:\HUIT\HK7\PHP\DoAn\website-sports-store-main\resources\views/components/form/input.blade.php ENDPATH**/ ?>