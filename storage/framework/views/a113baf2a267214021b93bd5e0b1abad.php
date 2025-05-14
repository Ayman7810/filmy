<?php
    use App\Models\Movie;
    use App\Models\Category;
    $movies = Movie::take(3)->latest()->get();
    $categories = Category::all();
?>

<div class="sidebar section-long order-lg-last">
    <section class="section-sidebar">
        <div class="section-head">
            <h2 class="section-title text-uppercase">Latest movies</h2>
        </div>
        <?php if(count($movies) > 0): ?>
            <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $slug = Str::slug($movie->name);
                ?>
                <div class="movie-short-line-entity">
                    <a class="entity-preview" href="<?php echo e(route('movie.show', ['movie' => $slug])); ?>">
                        <span class="embed-responsive embed-responsive-16by9">
                            <img class="embed-responsive-item" src='<?php echo e(asset("storage/movies/$movie->image")); ?>'
                                alt="<?php echo e($movie->name); ?>" />
                        </span>
                    </a>
                    <div class="entity-content">
                        <h4 class="entity-title">
                            <a class="content-link"
                                href="<?php echo e(route('movie.show', ['movie' => $slug])); ?>"><?php echo e($movie->name); ?></a>
                        </h4>
                        <p class="entity-subtext"><?php echo e($movie->created_at->format('d M Y')); ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

    </section>

    <?php if(count($categories) > 0): ?>

        <section class="section-sidebar">
            <div class="section-head">
                <h2 class="section-title text-uppercase">Categories</h2>
            </div>
            <ul class="list-unstyled list-wider list-categories">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a class="content-link text-uppercase"
                            href="<?php echo e(route('theme.moviesID', ['id' => $category->id])); ?>"><?php echo e($category->name); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </section>
    <?php endif; ?>

    <section class="section-sidebar">
        <a class="d-block" href="#">
            <img class="w-100" src="http://via.placeholder.com/350x197" alt="" />
        </a>
    </section>
</div>
<?php /**PATH E:\laragon\www\filmy\resources\views/theme/partials/sidbar-movie.blade.php ENDPATH**/ ?>