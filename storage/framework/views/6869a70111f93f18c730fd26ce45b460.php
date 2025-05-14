



<?php $__env->startSection('contant'); ?>
    <?php echo $__env->make('theme.partials.breadcrumb', ['title' => 'Movies List'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="section-long">
        <div class="container">
            <div class="section-pannel">
                <div class="grid row">
                    <div class="col-md-10">
                        <form autocomplete="off">
                            <div class="row form-grid">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="input-view-flat input-group">
                                        <?php if(count($categories) > 0): ?>
                                            <select class="form-control" name="genre">
                                                $<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option selected="true"><?php echo e($category->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        <?php endif; ?>

                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="input-view-flat date input-group" data-toggle="datetimepicker"
                                        data-target="#release-year-field">
                                        <input class="datetimepicker-input form-control" id="release-year-field"
                                            name="releaseYear" type="text" placeholder="release year"
                                            data-target="#release-year-field" data-date-format="Y" />
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="input-view-flat input-group">
                                        <select class="form-control" name="sortBy">
                                            <option selected="true">sort by</option>
                                            <option>name</option>
                                            <option>release year</option>
                                            <option>rating</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2 my-md-auto d-flex">
                        <span class="info-title d-md-none mr-3">Select view:</span>
                        <ul class="ml-md-auto h5 list-inline">
                            <li class="list-inline-item">
                                <a class="content-link transparent-link" href="movies-blocks.html"><i
                                        class="fas fa-th"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="content-link transparent-link active" href="movies-list.html"><i
                                        class="fas fa-th-list"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <?php if(count($movies) > 0): ?>
                <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $slug = Str::slug($movie->name);
                    ?>
                    <article class="movie-line-entity">
                        <div class="entity-poster" data-role="hover-wrap">
                            <div class="embed-responsive embed-responsive-poster">
                                <img class="embed-responsive-item" src="<?php echo e(asset("storage/movies/$movie->image")); ?>"
                                    alt="" />
                            </div>
                            <div class="d-over bg-theme-lighted collapse animated faster" data-show-class="fadeIn show"
                                data-hide-class="fadeOut show">
                                <div class="entity-play">
                                    <a class="action-icon-theme action-icon-bordered rounded-circle"
                                        href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                                        <span class="icon-content"><i class="fas fa-play"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="entity-content">
                            <h4 class="entity-title">
                                <a class="content-link"
                                    href="<?php echo e(route('movie.show', ['movie' => $slug])); ?>"><?php echo e($movie->name); ?></a>
                            </h4>
                            <div class="entity-category">
                                <a class="content-link" href="movies-blocks.html"><?php echo e($movie->category->name); ?></a>
                            </div>
                            <div class="entity-info">
                                <div class="info-lines">
                                    <div class="info info-short">
                                        <span class="text-theme info-icon"><i class="fas fa-star"></i></span>
                                        <span class="info-text"><?php echo e($movie->rating); ?></span>
                                        <span class="info-rest">/10</span>
                                    </div>
                                    <div class="info info-short">
                                        <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                                        <span class="info-text"><?php echo e($movie->time); ?> </span>
                                    </div>
                                    <div class="info info-short">
                                        <span class="text-theme info-icon"><i class="fas fa-comment"></i></span>
                                        <span class="info-text"><?php echo e(count($movie->comments)); ?></span>
                                    </div>
                                </div>
                            </div>
                            <p class="text-short entity-text"><?php echo e($movie->description); ?>

                            </p>
                        </div>
                        <div class="entity-extra">
                            <?php if($movie->status === 'Showtime'): ?>
                                <div class="text-uppercase entity-extra-title">Showtime</div>
                                <div class="entity-showtime">
                                    <div class="showtime-wrap">
                                        <div class="showtime-item">
                                            <span class="disabled btn-time btn" aria-disabled="true">11 : 30</span>
                                        </div>
                                        <div class="showtime-item">
                                            <a class="btn-time btn" aria-disabled="false" href="#">13 : 25</a>
                                        </div>
                                        <div class="showtime-item">
                                            <a class="btn-time btn" aria-disabled="false" href="#">16 : 07</a>
                                        </div>
                                        <div class="showtime-item">
                                            <a class="btn-time btn" aria-disabled="false" href="#">19 : 45</a>
                                        </div>
                                        <div class="showtime-item">
                                            <a class="btn-time btn" aria-disabled="false" href="#">21 : 30</a>
                                        </div>
                                        <div class="showtime-item">
                                            <a class="btn-time btn" aria-disabled="false" href="#">23 : 10</a>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="text-uppercase entity-extra-title"><?php echo e($movie->status); ?></div>
                            <?php endif; ?>
                        </div>
                    </article>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="section-bottom">
                    <div class="paginator">
                        <?php echo e($movies->render('pagination::bootstrap-4')); ?>

                    </div>
                </div>
            <?php endif; ?>


        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\filmy\resources\views/theme/pages/movies.blade.php ENDPATH**/ ?>