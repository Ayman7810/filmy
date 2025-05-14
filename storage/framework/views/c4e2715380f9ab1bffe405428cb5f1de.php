

<?php $__env->startSection('contant'); ?>
    <?php echo $__env->make('theme.partials.breadcrumb', ['title' => $movie->name], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <div class="sidebar-container">
            <div class="content">
                <section class="section-long">
                    <div class="section-line">
                        <div class="movie-info-entity">
                            <div class="entity-poster" data-role="hover-wrap">
                                <div class="embed-responsive embed-responsive-poster">
                                    <img class="embed-responsive-item" src="<?php echo e(asset("storage/movies/$movie->image ")); ?>"
                                        alt="<?php echo e($movie->name); ?>" />
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
                                <h2 class="entity-title"><?php echo e($movie->name); ?></h2>
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
                                            <span class="info-text"><?php echo e($movie->time); ?></span>
                                        </div>
                                        <div class="info info-short">
                                            <span class="text-theme info-icon"><i
                                                class="fas fa-comment"></i></span>
                                        <span class="info-text"><?php echo e(count($movie->comments)); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <ul class="entity-list">
                                    <li>
                                        <span class="entity-list-title">Release:</span>July 21, 2014 (Dolby Theatre), August
                                        1, 2014 (United States)
                                    </li>
                                    <li>
                                        <span class="entity-list-title">Directed:</span>
                                        <a class="content-link" href="#">Lindson Wardens</a>,
                                        <a class="content-link" href="#">Anabelle One</a>
                                    </li>
                                    <li>
                                        <span class="entity-list-title">Starring:</span>
                                        <a class="content-link" href="#">Octopus Wardens</a>,
                                        <a class="content-link" href="#">Quanta Wardens</a>,
                                        <a class="content-link" href="#">Anabelle Two</a>,
                                        <a class="content-link" href="#">Anabelle Three</a>
                                    </li>
                                    <li>
                                        <span class="entity-list-title">Production company:</span>
                                        <a class="content-link" href="#">Re-Production Bro.</a>,
                                        <a class="content-link" href="#">Pentakid</a>
                                    </li>
                                    <li>
                                        <span class="entity-list-title">Country:</span>
                                        <a class="content-link" href="#">USA</a>,
                                        <a class="content-link" href="#">India</a>
                                    </li>
                                    <li>
                                        <span class="entity-list-title">Language:</span>english
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="section-line">
                        <div class="section-head">
                            <h2 class="section-title text-uppercase">Synopsis</h2>
                        </div>
                        <div class="section-description">
                            <p class="lead"><?php echo e($movie->description); ?></p>
                        </div>
                        <div class="section-bottom">
                            <div class="row">
                                <div class="mr-auto col-auto">
                                    <div class="entity-links">
                                        <div class="entity-list-title">Share:</div>
                                        <a class="content-link entity-share-link" href="#"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="content-link entity-share-link" href="#"><i
                                                class="fab fa-twitter"></i></a>
                                        <a class="content-link entity-share-link" href="#"><i
                                                class="fab fa-google-plus-g"></i></a>
                                        <a class="content-link entity-share-link" href="#"><i
                                                class="fab fa-pinterest-p"></i></a>
                                        <a class="content-link entity-share-link" href="#"><i
                                                class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="entity-links">
                                        <div class="entity-list-title">Tags:</div>
                                        <a class="content-link" href="#">family</a>,&nbsp;
                                        <a class="content-link" href="#">gaming</a>,&nbsp;
                                        <a class="content-link" href="#">historical</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-line">

                        <?php if(count($movie->comments) > 0): ?>
                            <?php $__currentLoopData = $movie->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="comment-entity">
                                    <div class="entity-inner">
                                        <div class="entity-content">
                                            <h4 class="entity-title"><?php echo e($comment->name); ?></h4>
                                            <p class="entity-subtext"><?php echo e($comment->created_at->format('d M Y')); ?></p>
                                            <p class="entity-text"><?php echo e($comment->review); ?>

                                            </p>
                                        </div>
                                        <div class="entity-extra">
                                            <div class="grid-md row">
                                                <div class="col-12 col-sm-auto">
                                                    <div class="entity-rating">

                                                        <?php for($i = 0; $i < 10; $i++): ?>
                                                            <?php if($i < $comment->rating): ?>
                                                                <span class="entity-rating-icon text-theme"><i
                                                                        class="fas fa-star"></i></span>
                                                            <?php else: ?>
                                                                <span class="entity-rating-icon"><i
                                                                        class="fas fa-star"></i></span>
                                                            <?php endif; ?>
                                                        <?php endfor; ?>
                                                    </div>
                                                </div>
                                                <div class="ml-sm-auto col-auto">
                                                    <a class="content-link" href="#"><i
                                                            class="fas fa-reply"></i>&nbsp;&nbsp;reply</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a class="content-link" href="#"><i
                                                            class="fas fa-quote-left"></i>&nbsp;&nbsp;quote</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                    </div>
                    <div class="section-line">
                        <div class="section-head">
                            <h2 class="section-title text-uppercase">Add comment</h2>
                        </div>
                        <?php if(session('statusCreateComment')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('statusCreateComment')); ?>

                            </div>
                        <?php endif; ?>
                        <form action="<?php echo e(route('comment.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name='movie_id' value="<?php echo e($movie->id); ?>">
                            <div class="row form-grid">
                                <div class="col-12 col-sm-6">
                                    <div class="input-view-flat input-group">
                                        <input class="form-control" name="name" type="text" placeholder="Name" />
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
                                <div class="col-12 col-sm-6">
                                    <div class="input-view-flat input-group">
                                        <input class="form-control" name="email" type="email" placeholder="Email" />
                                    </div>
                                    <?php $__errorArgs = ['email'];
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
                                    <div class="input-view-flat input-group">
                                        <textarea class="form-control" name="review" placeholder="Add your review"></textarea>
                                    </div>
                                    <?php $__errorArgs = ['review'];
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
                                    <div class="rating-line">
                                        <label>Rating:</label>
                                        <div class="form-rating" name="rating">
                                            <input type="radio" id="rating-10" name="rating" value="10" />
                                            <label for="rating-10">
                                                <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                                <span class="rating-icon"><i class="far fa-star"></i></span>
                                            </label>
                                            <input type="radio" id="rating-9" name="rating" value="9" />
                                            <label for="rating-9">
                                                <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                                <span class="rating-icon"><i class="far fa-star"></i></span>
                                            </label>
                                            <input type="radio" id="rating-8" name="rating" value="8" />
                                            <label for="rating-8">
                                                <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                                <span class="rating-icon"><i class="far fa-star"></i></span>
                                            </label>
                                            <input type="radio" id="rating-7" name="rating" value="7" />
                                            <label for="rating-7">
                                                <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                                <span class="rating-icon"><i class="far fa-star"></i></span>
                                            </label>
                                            <input type="radio" id="rating-6" name="rating" value="6" />
                                            <label for="rating-6">
                                                <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                                <span class="rating-icon"><i class="far fa-star"></i></span>
                                            </label>
                                            <input type="radio" id="rating-5" name="rating" value="5" />
                                            <label for="rating-5">
                                                <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                                <span class="rating-icon"><i class="far fa-star"></i></span>
                                            </label>
                                            <input type="radio" id="rating-4" name="rating" value="4" />
                                            <label for="rating-4">
                                                <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                                <span class="rating-icon"><i class="far fa-star"></i></span>
                                            </label>
                                            <input type="radio" id="rating-3" name="rating" value="3" />
                                            <label for="rating-3">
                                                <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                                <span class="rating-icon"><i class="far fa-star"></i></span>
                                            </label>
                                            <input type="radio" id="rating-2" name="rating" value="2" />
                                            <label for="rating-2">
                                                <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                                <span class="rating-icon"><i class="far fa-star"></i></span>
                                            </label>
                                            <input type="radio" id="rating-1" name="rating" value="1" />
                                            <label for="rating-1">
                                                <span class="rating-active-icon"><i class="fas fa-star"></i></span>
                                                <span class="rating-icon"><i class="far fa-star"></i></span>
                                            </label>
                                        </div>
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
                                <div class="col-12">
                                    <button class="px-5 btn btn-theme" type="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <?php if(count($movies) > 0): ?>
                        <div class="section-line">
                            <div class="section-head">
                                <h2 class="section-title text-uppercase">Photos & videos</h2>
                            </div>
                            <div class="grid row">
                                <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-6 col-xl-4">
                                        <div class="gallery-card-entity">
                                            <div class="entity-preview" data-role="hover-wrap">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <img class="embed-responsive-item"
                                                        src="<?php echo e(asset("storage/movies/$movie->image ")); ?>"
                                                        alt="<?php echo e($movie->name); ?>" />
                                                </div>
                                                <div class="d-over bg-black-40 collapse animated faster"
                                                    data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                                    <div class="entity-view-popup">
                                                        <a class="content-link action-icon-bordered rounded-circle"
                                                            href="<?php echo e(route('movie.show', ['movie' => $movie])); ?>">
                                                            <span class="icon-content"><i
                                                                    class="fas fa-search"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="entity-content">
                                                <h4 class="entity-title"><?php echo e($movie->name); ?></h4>
                                                <p class="entity-subtext"><?php echo e($movie->created_at->format('d M Y')); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                            <div class="section-bottom">
                                <a class="btn btn-theme" href="<?php echo e(route('theme.movies')); ?>">View All</a>
                            </div>
                        </div>
                    <?php endif; ?>
                </section>
            </div>
            <?php echo $__env->make('theme.partials.sidbar-movie', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\filmy\resources\views/theme/pages/movie-info.blade.php ENDPATH**/ ?>