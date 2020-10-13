

<?php $__env->startSection('name', 'entrances'); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-sm-2">
            <a href="<?php echo e(route('entrances.create')); ?>">
                <button class="btn btn-primary">Agregar</button>
            </a>
        </div>
        <div class="col-sm-10">
            <h1>ENTRADAS</h1>
        </div>

    </div>


    <?php $__empty_1 = true; $__currentLoopData = $entrances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entrance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

        <!-- <div class="row">-->
        <div class="card col-sm bg-light" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($entrance->price); ?></h5>
                <h6 class="card-title"><?php echo e($entrance->hourEntrance); ?></h6>

                <form action="<?php echo e(route('entrances.destroy', $entrance->id)); ?>" method="post">
                    <a href="<?php echo e(route('entrances.show', $entrance->id)); ?>">Ver</a>
                    <a href="<?php echo e(route('entrances.edit', $entrance->id)); ?>">Editar</a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger"> Eliminar</button>
                </form>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h3>No hay entradas disponibles</h3>

    <?php endif; ?>

    <?php echo e($entrances->links()); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cine02\resources\views/entrances/index.blade.php ENDPATH**/ ?>