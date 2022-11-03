<?php $__env->startSection('title', 'Data'); ?>

<?php $__env->startSection('content'); ?>
        <?php if(count($data) == 1): ?>
            <h3>You Got 1 Data!</h3>
            <img src="https://cdn-icons-png.flaticon.com/512/3159/3159073.png" alt="">
        <?php endif; ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gslc\resources\views/data.blade.php ENDPATH**/ ?>