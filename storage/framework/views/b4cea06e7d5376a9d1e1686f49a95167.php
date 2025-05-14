

<?php $__env->startSection('contant'); ?>
    <?php echo $__env->make('theme.partials.breadcrumb', ['title' => 'My Movies'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section>
        <div class="gmap-with-map">
            <div class="gmap" data-lat="-33.878897" data-lng="151.103737"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ml-lg-auto">
                        <div class="gmap-form bg-white">
                            <h4 class="form-title text-uppercase text-center mb-4">My
                                <span class="text-theme">Movis</span>
                            </h4>

                            <?php if(session('status-delete-movie')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo e(session('status-delete-movie')); ?>

                                </div>
                            <?php endif; ?>
                            <?php if(count($movies) > 0): ?>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">title</th>
                                            <th scope="col">category</th>
                                            <th scope="col">rating</th>
                                            <th scope="col">time</th>
                                            <th scope="col" class="text-right">actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                          $slug =  Str::slug($movie->name);
                                        ?>
                                            <tr>
                                                <th scope="row"><a href="<?php echo e(route('movie.show', ['movie' => $slug])); ?>"
                                                        target="_blank" rel="noopener noreferrer"><?php echo e($movie->name); ?></a>
                                                </th>
                                                <td><?php echo e($movie->category->name); ?></td>
                                                <td><?php echo e($movie->rating); ?></td>
                                                <td><?php echo e($movie->time); ?></td>
                                                <td>
                                                    <div class="d-flex justify-content-end">


                                                        <a href="<?php echo e(route('movie.edit', ['movie' => $slug])); ?>"
                                                            class="btn btn-warning btn-sm mr-3">Edite</a>

                                                            <form action="<?php echo e(route('movie.destroy', ['movie' => $slug])); ?>"
                                                            method="post" class="mt-0">
                                                            <?php echo csrf_field(); ?> <?php echo method_field('delete'); ?>
                                                            <a type="submit"
                                                                onclick="event.preventDefault();
                                                                    this.closest('form').submit();"
                                                                class="btn btn-danger btn-sm">Delete</a>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center mt-4 pt-3">
                                    <?php echo e($movies->render('pagination::bootstrap-4')); ?>

                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\filmy\resources\views/theme/movie/desplay-movies.blade.php ENDPATH**/ ?>