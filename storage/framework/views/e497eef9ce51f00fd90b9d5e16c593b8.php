<header class="header header-horizontal header-view-pannel">
    <div class="container">
        <nav class="navbar">
            <a class="navbar-brand" href="<?php echo e(route('theme.index')); ?>">
                <span class="logo-element">
                    <span class="logo-tape">
                        <span class="svg-content svg-fill-theme"
                            data-svg="<?php echo e(asset('assets')); ?>/images/svg/logo-part.svg"></span>
                    </span>
                    <span class="logo-text text-uppercase">
                        <span>F</span>ilmy</span>
                </span>
            </a>
            <button class="navbar-toggler" type="button">
                <span class="th-dots-active-close th-dots th-bars">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item nav-item-arrow-down nav-hover-show-sub">
                        <a class="nav-link" href="<?php echo e(route('theme.index')); ?>">Home</a>

                    </li>
                    <li class="nav-item nav-item-arrow-down nav-hover-show-sub">
                        <a class="nav-link" href="<?php echo e(route('theme.blogs')); ?>">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('theme.movies')); ?>">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('theme.contact')); ?>">Contact us</a>
                    </li>
                </ul>
                <div class="navbar-extra d-flex">
                    <?php if(Auth::check()): ?>
                    <a class="btn-theme btn" href="<?php echo e(route('blog.create')); ?>"><i class="fas fa-ticket-alt"></i>Add Post</a>
                    <ul class="navbar-nav ">
                        <li class="nav-item nav-item-arrow-down nav-hover-show-sub">
                            <a class="nav-link" href="#"><?php echo e(Auth::user()->name); ?></a>
                            <div class="nav-arrow"><i class="fas fa-chevron-down"></i></div>
                            <ul class="collapse nav">
                                <?php if(Auth::user()->status === '1'): ?>    
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('movie.create')); ?>">
                                        Add Movie</a>
                                    <a class="nav-link" href="<?php echo e(route('movie.index')); ?>">My Movies</a>
                                </li>
                                <?php endif; ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('blog.index')); ?>">My Blogs</a>
                                </li>
                                <li class="nav-item">
                                    <form action="logout" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <a class="nav-link ml-3" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                this.closest('form').submit();">Logoute</a>
                                                
                                    </form>
                                </li>
                            </ul>
                        </li>
                      
                    </ul>
                    <?php else: ?>
                    <a class="btn-theme btn mr-3" href="<?php echo e(route('register')); ?>">Regster</a>
                    <a class="btn-theme btn" href="<?php echo e(route('login')); ?>">Login</a>
                    <?php endif; ?>
                    
                </div>
             
            </div>
        </nav>
    </div>
</header>
<?php /**PATH E:\laragon\www\filmy\resources\views/theme/partials/nav.blade.php ENDPATH**/ ?>