<a <?php echo e($attributes); ?>

    class="<?php echo e($active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'); ?> 
    rounded-md px-3 py-2 text-sm font-medium" 
    aria-current="<?php echo e($active ? 'page' : false); ?>"><?php echo e($slot); ?>

</a><?php /**PATH C:\laragon\www\blade\resources\views/components/nav-link.blade.php ENDPATH**/ ?>