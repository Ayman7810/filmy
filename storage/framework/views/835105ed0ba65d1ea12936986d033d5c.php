

<?php $__env->startSection('contant'); ?>
    <?php echo $__env->make('theme.partials.breadcrumb', ['title' => 'Create Movie'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section>
        <div class="gmap-with-map">
            <div class="gmap" data-lat="-33.878897" data-lng="151.103737"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ml-lg-auto">
                        <div class="gmap-form bg-white">
                            <h4 class="form-title text-uppercase">Create
                                <span class="text-theme">Movie</span>
                            </h4>
                            <p class="form-text">We understand your requirement and provide quality works</p>
                            <form  method="POST" action="<?php echo e(route('movie.store')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input class="form-control" name="status" type="hidden" value="0"/>
                                <div class="row form-grid">
                                    <div class="col-sm-6">
                                        <div class="input-view-flat input-group">
                                            <input class="form-control" name="name" type="text" placeholder="Enter Your Name" value="<?php echo e(old('name')); ?>"/>
                                        </div>
                                      
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-view-flat input-group">
                                            <select class="form-control" name="category_id">
                                                <option value="">select category</option>
                                                <?php if(count( $categories ) > 0): ?>
                                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </select>   
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-view-flat input-group">
                                            <input class="form-control" name="image" type="file" >
                                        </div>
                                       
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="input-view-flat input-group">
                                            <select  class="form-control" name='status'>
                                                <option selected>Select status movie </option>
                                                <option value="Showtime">Showtime</option>
                                                <option value="Comming soon">Comming soon</option>
                                                <option value="In archive">In archive</option>
                                              </select>
                                            
                                        </div>
                                      
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-view-flat input-group">
                                            <select  class="form-control" name='range'>
                                                <option selected>Select range movie </option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                <option value="4">Four</option>
                                                <option value="5">Five</option>
                                                <option value="6">Sex</option>
                                                <option value="7">Sevien</option>
                                                <option value="8">Eight</option>
                                                <option value="9">Nien</option>
                                                <option value="10">Ten</option>
                                              </select>
                                            
                                        </div>
                                       
                                    </div>
                                     <div class="col-sm-6">
                                        <div class="input-view-flat input-group">
                                            <input class="form-control" name="time" type="text" placeholder="Enter time moive" value="<?php echo e(old('time')); ?>"/>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" name="description" rows="3" placeholder="Enter description moive"></textarea>
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

<?php echo $__env->make('theme.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\filmy\resources\views/theme/movie/create.blade.php ENDPATH**/ ?>