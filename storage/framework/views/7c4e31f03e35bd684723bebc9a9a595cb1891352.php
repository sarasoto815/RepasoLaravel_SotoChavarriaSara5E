<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('frase', 'EL ARTE LIMPIA DEL ALMA EL POLVO DE LA VIDA COTIDIANA'); ?>

<?php $__env->startSection('header'); ?>
    ##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbar'); ?>
    ##parent-placeholder-c63e3c1cfa2ff651ad4cfadea3e21265ffcf8ca3##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>

    <div class="content-all">
        <div class="content-carrousel">
            <figure><img src="images/pintura21.jpg"></figure>
            <figure><img src="images/pintura22.jpg"></figure>
            <figure><img src="images/pintura23.jpg"></figure>
            <figure><img src="images/pintura24.jpg"></figure>
            <figure><img src="images/pintura25.jpg"></figure>

        </div>
    </div>
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    <a href="https://www.todocuadros.com.mx/pintores-famosos/velazquez/" ><img src="images/diegop.png" class="principal" alt="" title="Da click para mas informacion"></a>
    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">Dato Interesante</div>
        <div class="card-body">
            <h5 class="card-title"><?php echo e($title); ?></h5>
            <p class="card-text"><?php echo e($dato); ?></p>
        </div>
    </div>
    <br> <br> <br> <br> <br> <br>
    <a href="/dali"><img src="images/flechaizquierda.png" alt="" class="derecha" title="Da click para el anterior pintor"></a>
    <a href="/Acerca"><img src="images/flechaderecha.png" alt="" class="izquierda" title="Da click para ir a informacion del crador"></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pintores\resources\views/pintorfive.blade.php ENDPATH**/ ?>