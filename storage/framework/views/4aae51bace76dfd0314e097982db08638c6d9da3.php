

<?php $__env->startSection('title', 'Editar Peliculas'); ?>

<?php $__env->startSection('content'); ?>
 
<div class="row">
    <div class="col-sm-10"><h1>Agregar película</h1></div>
    <div class="col-sm-2">
        <a href="<?php echo e(route('movies.index')); ?>">
            <button class="btn btn-secondary">Cancelar</button>
        </a>
    </div>
</div>

<div class="jumbotron">
    <form method="post" action="<?php echo e(route('movies.update', $movie->id)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

    <div> 
        <label for="">Película:</label>
        <input class="form-control" type="text" value="<?php echo e($movie->name); ?>" name="name" id="" required maxlength="100">
    </div>
    <div>
        <label for="">Sinopsis:</label>
        <textarea class="form-control" name="synopsis" id="" cols="30" rows="5"><?php echo e($movie->synopsis); ?></textarea>
        </div>
    <div>
        <label for="">Categoría</label>
        <!-- <input type="text" name="category" id="" maxlength="50" required> -->
        <select class="form-control" name="category" id="" required>
        <option value="<?php echo e($movie-> category); ?>"><?php echo e($movie->category); ?></option>
        <option value="">Elija una categoría</option>
        <option value="Estrenos">Estrenos</option>
        <option value="Triologias">Triologias</option>
        <option value="Las mas vistas">Las mas vistas</option>
    </select>
    </div>

    <div>
        <label for="">Director:</label>
            <input class="form-control" type="text" value="<?php echo e($movie->director); ?>" name="director" id="" required maxlength="100">
        </div>
    </div>
    <div>
        <label for="">Duración:</label>
        <input class="form-control" type="text" value="<?php echo e($movie->duration); ?>" name="duration" id="" required maxlength="30">
    </div>
    
    <div>
        <label for="">Género:</label>
        <select class="form-control" name="genre" id="" required>
        <option value="<?php echo e($movie->genre); ?>"><?php echo e($movie->genre); ?></option>
        <option value="">Selecciona un genero</option>
        <option value="Terror">Terror</option>
        <option value="Accion">Acción</option>
        <option value="Fantasia">Fantasia</option>
        <option value="Infantil">Infantil</option>
        <option value="Ciencia Ficción">Ciencia Ficción</option>
    </select>
    </div>
    <br>
    <br>
    <input class="btn btn-primary" type="submit" value="Guardar cambios">


</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cine02\resources\views/movies/edit.blade.php ENDPATH**/ ?>