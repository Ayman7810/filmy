

<?php $__env->startSection('contant'); ?>
    <?php echo $__env->make('theme.partials.breadcrumb', ['title' => 'News blocks'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <div class="sidebar-container">
            <div class="content">
                <section class="section-long">
                    <?php if(count($blogs) > 0): ?>
                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $slug = Str::slug($blog->title);
                        ?>
                            <article class="article-tape-entity">
                                <a class="entity-preview" href="<?php echo e(route('blog.show',['blog' => $slug])); ?>" data-role="hover-wrap">
                                    <span class="embed-responsive embed-responsive-16by9">
                                        <img class="embed-responsive-item" src="<?php echo e(asset("storage/blogs/$blog->image")); ?>"
                                            alt="" />
                                    </span>
                                    <span class="entity-date">
                                        <span class="tape-block tape-horizontal tape-single bg-theme text-white">
                                            <span class="tape-dots"></span>
                                            <span
                                                class="tape-content m-auto"><?php echo e($blog->created_at->format('d M Y')); ?></span>
                                            <span class="tape-dots"></span>
                                        </span>
                                    </span>
                                    <span class="d-over bg-black-80 collapse animated faster" data-show-class="fadeIn show"
                                        data-hide-class="fadeOut show">
                                        <span class="m-auto"><i class="fas fa-search"></i></span>
                                    </span>
                                </a>
                                <div class="entity-content">
                                    <h4 class="entity-title">
                                        <a class="content-link"
                                        href="<?php echo e(route('blog.show',['blog' => $slug])); ?>"><?php echo e($blog->title); ?></a>
                                    </h4>
                                    <p class="text-short entity-text"><?php echo e($blog->description); ?>

                                    </p>
                                    <div class="entity-actions d-flex     justify-content-between">
                                        <a class="text-uppercase"href="<?php echo e(route('blog.show',['blog' => $slug])); ?>">Read
                                            More</a>
                                        <div class="info info-short">
                                            <span class="text-theme info-icon"><i class="fas fa-comment"></i></span>
                                            <span class="info-text"><?php echo e(count($blog->comments)); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <div class="section-bottom">
                            <div class="paginator">
                                <?php echo e($blogs->render('pagination::bootstrap-4')); ?>

                            </div>
                        </div>
                    <?php endif; ?>

                </section>
            </div>
            <?php echo $__env->make('theme.partials.sidbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\filmy\resources\views/theme/pages/blogs.blade.php ENDPATH**/ ?>