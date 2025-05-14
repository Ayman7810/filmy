

<?php $__env->startSection('contant'); ?>
    <?php echo $__env->make('theme.partials.breadcrumb', ['title' => 'Create blog'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section>
        <div class="gmap-with-map">
            <div class="gmap" data-lat="-33.878897" data-lng="151.103737"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ml-lg-auto">
                        <div class="gmap-form bg-white">
                            <h4 class="form-title text-uppercase">Create
                                <span class="text-theme">blog</span>
                            </h4>
                            <p class="form-text">We understand your requirement and provide quality works</p>
                            <?php if(session('statusCreateBlog')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo e(session('statusCreateBlog')); ?>

                                </div>
                            <?php endif; ?>
                            <form method="POST" action="<?php echo e(route('blog.store')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input class="form-control" name="status" type="hidden" value="0" />
                                <div class="row form-grid">
                                    <div class="col-sm-6">
                                        <div class="input-view-flat input-group">
                                            <input class="form-control" name="title" type="text"
                                                placeholder="Enter the Title" value="<?php echo e(old('title')); ?>" />
                                        </div>
                                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-view-flat input-group">
                                            <input class="form-control" name="image" type="file"
                                                value="<?php echo e(old('image')); ?>">
                                        </div>
                                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                 
                                    <div class="col-12">
                                        <textarea class="form-control" name="description" rows="3" placeholder="Enter description moive"><?php echo e(old('description')); ?></textarea>
                                        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-12">
                                        <button class="px-5 btn btn-theme w-100" type="submit">Send</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\filmy\resources\views/theme/blogs/create-blog.blade.php ENDPATH**/ ?>