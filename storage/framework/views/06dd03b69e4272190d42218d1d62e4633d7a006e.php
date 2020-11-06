<nav class="navegacion">
    <?php $__env->startSection('navbar'); ?>
<ul class="menu">

    <li class="first-item">
        <a href="<?php echo e(action('PruebaController@login')); ?>">
            <img src="images/home.jpg" alt="" class="imagen">
            <span class="text-item">Inicio</span>
            <span class="down-item"></span>
        </a>
    </li>

    <li>
        <a href="<?php echo e(route('pintorone')); ?>" target="_blank">
            <img src="images/vincent.jpg" alt="" class="imagen">
            <span class="text-item">Vincent van Gogh</span>
            <span class="down-item"></span>
        </a>
    </li>



    <li>
        <a href="<?php echo e(route('pintortwo')); ?>" target="_blank">
            <img src="images/picasso.jpg" alt="" class="imagen">
            <span class="text-item">Pablo Picasso</span>
            <span class="down-item"></span>
        </a>
    </li>

    <li>
        <a href="<?php echo e(route('pintorthree')); ?>" target="_blank">
            <img src="images/leonardo.jpg" alt="" class="imagen">
            <span class="text-item">Leonardo da Vinci</span>
            <span class="down-item"></span>
        </a>
    </li>
    <li>
        <a href="<?php echo e(route('pintorfour')); ?>" target="_blank">
            <img src="images/salvador.jpg" alt="" class="imagen">
            <span class="text-item">Salvador Dalí</span>
            <span class="down-item"></span>
        </a>
    </li>
    <li>
        <a href="<?php echo e(route('pintorfive')); ?>" target="_blank">
            <img src="images/diego.jpg" alt="" class="imagen">
            <span class="text-item">Diego Velazquez</span>
            <span class="down-item"></span>
        </a>
    </li>


    <li>
        <a href="<?php echo e(route('acerca')); ?>" target="_blank">
            <img src="images/web.jpg" alt="" class="imagen">
            <span class="text-item">Acerca</span>
            <span class="down-item"></span>
        </a>
    </li>

    <li>
        <a href="mailto:sarasotochavarria9@gmail.com" target="_blank">
            <img src="images/contacto.jpg" alt="" class="imagen">
            <span class="text-item">Contacto</span>
            <span class="down-item"></span>
        </a>
    </li>


</ul>
        <?php echo $__env->yieldSection(); ?>
</nav>
<?php /**PATH C:\laragon\www\pintores\resources\views/includes/navegacion.blade.php ENDPATH**/ ?>