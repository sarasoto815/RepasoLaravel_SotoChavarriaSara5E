<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('frase', 'EL ARTE TIENE UN ENEMIGO QUE SE LLAMA IGNORANCIA'); ?>

<?php $__env->startSection('header'); ?>
    ##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbar'); ?>
    ##parent-placeholder-c63e3c1cfa2ff651ad4cfadea3e21265ffcf8ca3##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>

    <div class="content-all">
        <div class="content-carrousel">
            <figure><img src="images/pintura16.jpg"></figure>
            <figure><img src="images/pintura17.jpg"></figure>
            <figure><img src="images/pintura18.jpg"></figure>
            <figure><img src="images/pintura19.jpg" ></figure>
            <figure><img src="images/pintura20.jpg" ></figure>

        </div>
    </div>
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    <a href="https://www.todocuadros.com.mx/pintores-famosos/dali/" ><img src="images/dalip.png" class="principal" alt="" title="Da click para mas informacion"></a>

    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">Dato Interesante</div>
        <div class="card-body">
            <h5 class="card-title"><?php echo e($title); ?></h5>
            <p class="card-text"><?php echo e($dato); ?></p>
        </div>
    </div>
    <br> <br> <br> <br> <br> <br>
    <a href="/Vinci"><img src="images/flechaizquierda.png" alt="" class="derecha" title="Da click para el anterior pintor"></a>
    <a href="/Velazquez"><img src="images/flechaderecha.png" alt="" class="izquierda" title="Da click para ir al otro pintor"></a>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pintores\resources\views/pintorfour.blade.php ENDPATH**/ ?>