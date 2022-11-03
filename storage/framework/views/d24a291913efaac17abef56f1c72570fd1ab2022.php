<?php $__env->startSection('title', 'About'); ?>

<?php $__env->startSection('content'); ?>
    <h1>About</h1>
    <p>
        ini content
        <?php if(count($data) == 1): ?>
            <h3>Kamu Punya 1 Data!</h3>
            <img src="https://cdn-icons-png.flaticon.com/512/3159/3159073.png" alt="">
        <?php endif; ?>
    </p>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gslc\resources\views/about.blade.php ENDPATH**/ ?>