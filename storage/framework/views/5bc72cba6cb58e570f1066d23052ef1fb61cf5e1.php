

<?php $__env->startSection('title', 'Ver detalles de la habitación'); ?>

<?php $__env->startSection('content'); ?>



    <!-- <div class="row">-->
        <div class="card col-sm bg-light" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($room->chairs); ?></h5>
                <h6 class="card-title"><?php echo e($room->location); ?></h6>
                <p class="card-text"><?php echo e($room->capacity); ?></p>
                
                <form action="<?php echo e(route('rooms.destroy', $room->id)); ?>" method="post">
                    <a href="<?php echo e(route('rooms.show', $room->id)); ?>">Ver</a>
                    <a href="<?php echo e(route('rooms.edit', $room->id)); ?>">Editar</a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger"> Eliminar</button>
                </form>
            </div>
        </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cine02\resources\views/rooms/show.blade.php ENDPATH**/ ?>