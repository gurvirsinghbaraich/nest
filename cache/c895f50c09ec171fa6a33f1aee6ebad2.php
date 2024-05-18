<?php $__env->startSection('status-code'); ?>
  404
<?php $__env->stopSection(); ?>

<?php $__env->startSection('status-message'); ?>
  Page Not Found
<?php $__env->stopSection(); ?>

<?php echo $__env->make('errors.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/templates/errors/404.blade.php ENDPATH**/ ?>