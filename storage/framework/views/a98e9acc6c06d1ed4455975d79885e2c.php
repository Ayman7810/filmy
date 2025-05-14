<?php $__env->startSection('contant'); ?>

    <section class="section-text-white position-relative">
        <div class="d-background" data-image-src="http://via.placeholder.com/1920x1080" data-parallax="scroll"></div>
        <div class="d-background bg-theme-blacked"></div>
        <div class="mt-auto container position-relative">
            <div class="top-block-head text-uppercase">
                <h2 class="display-4">Now
                    <span class="text-theme">in cinema</span>
                </h2>
            </div>
            <div class="top-block-footer">
                <?php if(count($moviesSlider) > 0): ?>
                    <div class="slick-spaced slick-carousel" data-slick-view="navigation responsive-4">
                        <div class="slick-slides">
                            <?php $__currentLoopData = $moviesSlider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $slug = Str::slug($movie->name);
                                ?>
                                <div class="slick-slide">
                                    <article class="poster-entity" data-role="hover-wrap">
                                        <div class="embed-responsive embed-responsive-poster">
                                            <img class="embed-responsive-item"
                                                src="<?php echo e(asset("storage/movies/$movie->image")); ?>"
                                                alt="<?php echo e($movie->name); ?>" />
                                        </div>
                                        <div class="d-background bg-theme-lighted collapse animated faster"
                                            data-show-class="fadeIn show" data-hide-class="fadeOut show"></div>
                                        <div class="d-over bg-highlight-bottom">
                                            <div class="collapse animated faster entity-play" data-show-class="fadeIn show"
                                                data-hide-class="fadeOut show">
                                                <a class="action-icon-theme action-icon-bordered rounded-circle"
                                                    href="https://www.youtube.com/watch?v=d96cjJhvlMA"
                                                    data-magnific-popup="iframe">
                                                    <span class="icon-content"><i class="fas fa-play"></i></span>
                                                </a>
                                            </div>
                                            <h4 class="entity-title">
                                                <a class="content-link"
                                                    href="<?php echo e(route('movie.show', ['movie' => $slug])); ?>"><?php echo e($movie->name); ?></a>
                                            </h4>
                                            <div class="entity-category">
                                                <a class="content-link"
                                                    href="movies-blocks.html"><?php echo e($movie->categories); ?></a>
                                            </div>
                                            <div class="entity-info">
                                                <div class="info-lines">
                                                    <div class="info info-short">
                                                        <span class="text-theme info-icon"><i
                                                                class="fas fa-star"></i></span>
                                                        <span class="info-text"><?php echo e($movie->rating); ?></span>
                                                        <span class="info-rest">/10</span>
                                                    </div>
                                                    <div class="info info-short">
                                                        <span class="text-theme info-icon"><i
                                                                class="fas fa-clock"></i></span>
                                                        <span class="info-text"><?php echo e($movie->time); ?></span>
                                                    </div>
                                                    <div class="info info-short">
                                                        <span class="text-theme info-icon"><i
                                                                class="fas fa-comment"></i></span>
                                                        <span class="info-text"><?php echo e(count($movie->comments)); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="slick-arrows">
                            <div class="slick-arrow-prev">
                                <span class="th-dots th-arrow-left th-dots-animated">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </div>
                            <div class="slick-arrow-next">
                                <span class="th-dots th-arrow-right th-dots-animated">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="section-long">
        <div class="container">
            <div class="section-head">
                <h2 class="section-title text-uppercase">Now in play</h2>
                <p class="section-text">Dates: 13 - 15 february 2025</p>
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
            <?php endif; ?>


        </div>
    </section>
    <?php if(count($moviesCommingSoon) > 0): ?>
        <section class="section-solid-long section-text-white position-relative">
            <div class="d-background" data-image-src="http://via.placeholder.com/1920x1080" data-parallax="scroll"></div>
            <div class="d-background bg-gradient-black"></div>
            <div class="container position-relative">
                <div class="section-head">
                    <h2 class="section-title text-uppercase">Comming Soon</h2>
                </div>
                <div class="slick-spaced slick-carousel" data-slick-view="navigation single">
                    <div class="slick-slides">
                        <?php $__currentLoopData = $moviesCommingSoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movieSoon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $slug = Str::slug($movieSoon->name);
                            ?>
                            <div class="slick-slide">
                                <article class="movie-line-entity">
                                    <div class="entity-preview">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <img class="embed-responsive-item"
                                                src="<?php echo e(asset("storage/movies/$movieSoon->image")); ?>" alt="" />
                                        </div>
                                        <div class="d-over">
                                            <div class="entity-play">
                                                <a class="action-icon-theme action-icon-bordered rounded-circle"
                                                    href="https://www.youtube.com/watch?v=d96cjJhvlMA"
                                                    data-magnific-popup="iframe">
                                                    <span class="icon-content"><i class="fas fa-play"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entity-content">
                                        <h4 class="entity-title">
                                            <a class="content-link"
                                                href="<?php echo e(route('movie.show', ['movie' => $slug])); ?>"><?php echo e($movieSoon->name); ?></a>
                                        </h4>
                                        <div class="entity-category">
                                            <a class="content-link"
                                                href="movies-blocks.html"><?php echo e($movieSoon->category->name); ?></a>

                                        </div>
                                        <div class="entity-info">
                                            <div class="info-lines">
                                                <div class="info info-short">
                                                    <span class="text-theme info-icon"><i
                                                            class="fas fa-calendar-alt"></i></span>
                                                    <span
                                                        class="info-text"><?php echo e($movieSoon->created_at->format('d M Y')); ?></span>
                                                </div>
                                                <div class="info info-short">
                                                    <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                                                    <span class="info-text"><?php echo e($movieSoon->time); ?></span>

                                                </div>
                                                <div class="info info-short">
                                                    <span class="text-theme info-icon"><i
                                                            class="fas fa-comment"></i></span>
                                                    <span class="info-text"><?php echo e(count($movie->comments)); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-short entity-text"><?php echo e($movieSoon->description); ?>

                                        </p>
                                    </div>
                                </article>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                    <div class="slick-arrows">
                        <div class="slick-arrow-prev">
                            <span class="th-dots th-arrow-left th-dots-animated">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </div>
                        <div class="slick-arrow-next">
                            <span class="th-dots th-arrow-right th-dots-animated">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <section class="section-long">
        <div class="container">
            <div class="section-head">
                <h2 class="section-title text-uppercase">Latest news</h2>
            </div>
            <div class="grid row">
                <?php if(count($blogs) > 0): ?>
                    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $slug = Str::slug($blog->title);
                        ?>
                        <div class="col-md-6">
                            <article class="article-tape-entity">
                                <a class="entity-preview"
                                    href="<?php echo e(route('blog.show', ['blog' => $slug])); ?>"data-role="hover-wrap">
                                    <span class="embed-responsive embed-responsive-16by9">
                                        <img class="embed-responsive-item"
                                            src="<?php echo e(asset("storage/blogs/$blog->image")); ?>" alt="<?php echo e($blog->title); ?>" />
                                    </span>
                                    <span class="entity-date">
                                        <span class="tape-block tape-horizontal tape-single bg-theme text-white">
                                            <span class="tape-dots"></span>
                                            <span
                                                class="tape-content m-auto"><?php echo e($blog->created_at->format('d M Y')); ?></span>
                                            <span class="tape-dots"></span>
                                        </span>
                                    </span>
                                    <span class="d-over bg-black-80 collapse animated faster"
                                        data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                        <span class="m-auto"><i class="fas fa-search"></i></span>
                                    </span>
                                </a>
                                <div class="entity-content">
                                    <h4 class="entity-title">
                                        <a class="content-link"
                                            href="<?php echo e(route('blog.show', ['blog' => $slug])); ?>"><?php echo e($blog->title); ?></a>
                                    </h4>

                                    <p class="text-short entity-text"><?php echo e($blog->description); ?>

                                    </p>
                                    <div class="entity-actions d-flex     justify-content-between">
                                        <a class="text-uppercase" href="<?php echo e(route('blog.show', ['blog' => $slug])); ?>">Read
                                            More</a>
                                        <div class="info info-short">
                                            <span class="text-theme info-icon"><i class="fas fa-comment"></i></span>
                                            <span class="info-text"><?php echo e(count($blog->comments)); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </div>
            <div class="section-bottom">
                <a class="btn btn-theme" href="<?php echo e(route('theme.blogs')); ?>">View All News</a>
            </div>
        </div>
    </section>
    <section>
        <div class="gmap-with-map">
            <div class="gmap" data-lat="-33.878897" data-lng="151.103737"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ml-lg-auto">
                        <div class="gmap-form bg-white">
                            <h4 class="form-title text-uppercase">Contact
                                <span class="text-theme">us</span>
                            </h4>
                            <p class="form-text">We understand your requirement and provide quality works</p>
                            <form autocomplete="off">
                                <div class="row form-grid">
                                    <div class="col-sm-6">
                                        <div class="input-view-flat input-group">
                                            <input class="form-control" name="name" type="text"
                                                placeholder="Name" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-view-flat input-group">
                                            <input class="form-control" name="email" type="email"
                                                placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-view-flat input-group">
                                            <textarea class="form-control" name="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="px-5 btn btn-theme" type="submit">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a class="scroll-top disabled" href="#"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\filmy\resources\views/theme/pages/home.blade.php ENDPATH**/ ?>