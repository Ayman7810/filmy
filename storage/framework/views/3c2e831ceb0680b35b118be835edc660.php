

<?php $__env->startSection('contant'); ?>
    <?php echo $__env->make('theme.partials.breadcrumb', ['title' => 'Edit Movie'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section>
        <div class="gmap-with-map">
            <div class="gmap" data-lat="-33.878897" data-lng="151.103737"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ml-lg-auto">
                        <div class="gmap-form bg-white">
                            <h4 class="form-title text-uppercase">Edit
                                <span class="text-theme">Movie</span>
                            </h4>
                            <p class="form-text">We understand your requirement and provide quality works</p>
                            <?php if(session('status-edit-movie')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo e(session('status-edit-movie')); ?>

                                </div>
                            <?php endif; ?>
                            <?php
                                $slug = Str::slug($movie->name);
                            ?>
                            <form method="POST" action="<?php echo e(route('movie.update', ['movie' => $slug])); ?>"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <input class="form-control" name="status" type="hidden" value="0" />
                                <div class="row form-grid">
                                    <div class="col-sm-6">
                                        <div class="input-view-flat input-group">
                                            <input class="form-control" name="name" type="text"
                                                placeholder="Enter Your Name" value="<?php echo e($movie->name); ?>" />
                                        </div>
                                        <?php $__errorArgs = ['name'];
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
                                            <select class="form-control" name="category_id">
                                                <option>select category</option>
                                                <?php if(count($categories) > 0): ?>
                                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($category->id); ?>"
                                                            <?php if($category->id === $movie->category_id): ?> selected <?php endif; ?>>
                                                            <?php echo e($category->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                        <?php $__errorArgs = ['category_id'];
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

                                    <div class="col-sm-6">
                                        <div class="input-view-flat input-group">
                                            <select class="form-control" name='status' id="status">
                                                <option value="<?php echo e(null); ?>">Select status movie </option>
                                                <?php if($movie->status === 'Showtime'): ?>
                                                    <option value="Showtime" selected>Showtime</option>
                                                    <option value="Comming soon">Comming soon</option>
                                                    <option value="In archive" selected>In archive</option>
                                                <?php elseif($movie->status === 'Comming soon'): ?>
                                                    <option value="Showtime">Showtime</option>
                                                    <option value="Comming soon" selected>Comming soon</option>
                                                    <option value="In archive">In archive</option>
                                                <?php elseif($movie->status === 'In archive'): ?>
                                                    <option value="Showtime">Showtime</option>
                                                    <option value="Comming soon">Comming soon</option>
                                                    <option value="In archive" selected>In archive</option>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                        <?php $__errorArgs = ['status'];
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

                                            <input class="form-control" name="rating" type="number"
                                                placeholder="Enter rating moive" value="<?php echo e($movie->rating); ?>" />



                                        </div>
                                        <?php $__errorArgs = ['rating'];
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
                                            <input class="form-control" name="time" type="text"
                                                placeholder="Enter time moive" value="<?php echo e($movie->time); ?>" />

                                        </div>
                                        <?php $__errorArgs = ['time'];
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
                                        <textarea class="form-control" name="description" rows="3" placeholder="Enter description moive"><?php echo e($movie->description); ?></textarea>
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

<?php echo $__env->make('theme.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\filmy\resources\views/theme/movie/edit-movie.blade.php ENDPATH**/ ?>