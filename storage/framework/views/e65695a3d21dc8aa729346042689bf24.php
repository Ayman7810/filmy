

<?php $__env->startSection('contant'); ?>
    
    <section class="section-long">
        <div class="container">
            <div class="status-entity">
                <div class="entity-icon">4<span class="text-theme">0</span>4</div>
                <h4 class="entity-title">Sorry!</h4>
                <p class="entity-text">It looks like this page no longer exists</p>
                <div class="entity-actions">
                    <a class="btn btn-theme" href="<?php echo e(route('theme.index')); ?>">Back To Home</a>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\filmy\resources\views/theme/pages/404.blade.php ENDPATH**/ ?>