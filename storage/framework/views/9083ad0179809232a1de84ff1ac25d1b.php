<?php
    use App\Models\Blog;
    $blogs = Blog::latest()->take(6)->get();
?>
<div class="sidebar section-long order-lg-last">
    <section class="section-sidebar">
        <div class="section-head">
            <h2 class="section-title text-uppercase">Latest articles</h2>
        </div>
        <?php if(count($blogs) > 0): ?>
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $slug = Str::slug($blog->title);
                ?>
                <div class="article-short-line-entity">
                    <a class="entity-preview" href="<?php echo e(route('blog.show', ['blog' => $slug])); ?>">
                        <span class="embed-responsive embed-responsive-16by9">
                            <img class="embed-responsive-item" src="<?php echo e(asset("storage/blogs/$blog->image")); ?>"
                                alt="<?php echo e($blog->title); ?>" />
                        </span>
                    </a>
                    <div class="entity-content">
                        <h4 class="entity-title">
                            <a class="content-link"
                                href="<?php echo e(route('blog.show', ['blog' => $slug])); ?>"><?php echo e($blog->title); ?></a>
                        </h4>
                        <p class="entity-subtext"><?php echo e($blog->created_at->format('d M Y')); ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

    </section>
    <section class="section-sidebar">
        <a class="d-block" href="#">
            <img class="w-100" src="http://via.placeholder.com/350x197" alt="" />
        </a>
    </section>
</div>
<?php /**PATH E:\laragon\www\filmy\resources\views/theme/partials/sidbar.blade.php ENDPATH**/ ?>