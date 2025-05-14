<?php
    use App\Models\Category;
    $categories = Category::all();
?>
<a class="scroll-top disabled" href="#"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
<footer class="section-text-white footer footer-links bg-darken">
      <div class="footer-body container">
          <div class="row">
              <div class="col-sm-6 col-lg-3">
                  <a class="footer-logo" href="<?php echo e(asset('assets')); ?>/">
                      <span class="logo-element">
                          <span class="logo-tape">
                              <span class="svg-content svg-fill-theme" data-svg="<?php echo e(asset('assets')); ?>/images/svg/logo-part.svg"></span>
                          </span>
                          <span class="logo-text text-uppercase">
                              <span>F</span>ilmy</span>
                      </span>
                  </a>
                  <div class="footer-content">
                      <p class="footer-text">Sidestate NSW 4132,
                          <br/>Australia</p>
                      <p class="footer-text">Call us:&nbsp;&nbsp;+967 781 040 602</p>
                  </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                  <h5 class="footer-title text-uppercase">Movies</h5>
                  <ul class="list-unstyled list-wide footer-content">
                      <li>
                          <a class="content-link"  href="<?php echo e(route('theme.movies')); ?>">All Movies</a>
                      </li>
                      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          
                      <li>
                          <a class="content-link" href="<?php echo e(route('theme.moviesID',['id' => $category->id])); ?>"><?php echo e($category->name); ?></a>
                      </li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     
                  </ul>
              </div>
              <div class="col-sm-6 col-lg-3">
                  <h5 class="footer-title text-uppercase">Links</h5>
                  <ul class="list-unstyled list-wide footer-content">
                      
                      <li>
                          <a class="content-link" href="<?php echo e(route('theme.index')); ?>">Home</a>
                      </li>
                      <li>
                          <a class="content-link" href="<?php echo e(route('theme.blogs')); ?>">News</a>
                      </li>
                      <li>
                          <a class="content-link" href="<?php echo e(route('theme.contact')); ?>">Contact us</a>
                      </li>
                     
                     
                  </ul>
              </div>
              <div class="col-sm-6 col-lg-3">
                  <h5 class="footer-title text-uppercase">Follow</h5>
                  <ul class="list-wide footer-content list-inline">
                    
                      <li class="list-inline-item">
                          <a class="content-link" href="#"><i class="fab fa-twitter"></i></a>
                      </li>
                      <li class="list-inline-item">
                          <a class="content-link" href="#"><i class="fab fa-facebook-f"></i></a>
                   
                      <li class="list-inline-item">
                          <a class="content-link" href="#"><i class="fab fa-instagram"></i></a>
                      </li>
                  </ul>
                  <h5 class="footer-title text-uppercase">Subscribe</h5>
                  <div class="footer-content">
                      <p class="footer-text">Get latest movie news right away with our subscription</p>
                      <form class="footer-form" autocomplete="off">
                          <div class="input-group">
                              <input class="form-control" name="email" type="email" placeholder="Your email" />
                              <div class="input-group-append">
                                  <button class="btn btn-theme" type="submit"><i class="fas fa-angle-right"></i></button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-copy text-center">
          <div class="container">Copyright 2025 &copy; Ayman Alaozry. All rights reserved.</div>
      </div>
  </footer><?php /**PATH E:\laragon\www\filmy\resources\views/theme/partials/footer.blade.php ENDPATH**/ ?>