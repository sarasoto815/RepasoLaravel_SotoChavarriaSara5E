<?php $__env->startSection('title', 'login'); ?>

<?php $__env->startSection('header'); ?>
    ##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
    <form action="<?php echo e(action('PruebaController@validarLogin')); ?>" method="POST">
        <?php echo e(csrf_field()); ?>

        <label for="user">Usuario</label>
        <input type="text" name="user">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password">
        <br>
        <label for="key">Key</label>
        <input type="text" name="key">
        <br>
        <input type="submit" value="submit">
    </form>
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pintores\resources\views/admon/login.blade.php ENDPATH**/ ?>