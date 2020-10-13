

<?php $__env->startSection('title', 'Ver detalles de película'); ?>

<?php $__env->startSection('content'); ?>
    


 <!-- <div class="row">-->
<div class="card col-sm bg-light" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo e($movie->name); ?></h5>
      <h6 class="card-title"><?php echo e($movie->director); ?></h6>
      <p class="card-text"><?php echo e($movie->synopsis); ?></p>
      <p class="card-text text-muted"> Duracion:<?php echo e($movie->duracion); ?></p>

      <form action="<?php echo e(route('movies.destroy', $movie->id)); ?>" method="post">
        <a class="btn btn-secondary" href="<?php echo e(route('movies.index', $movie->id)); ?>">Volver</a>
        <a class="btn btn-secondary" href="<?php echo e(route('movies.edit', $movie->id)); ?>">Editar</a>

        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>

      </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cine02\resources\views/movies/show.blade.php ENDPATH**/ ?>