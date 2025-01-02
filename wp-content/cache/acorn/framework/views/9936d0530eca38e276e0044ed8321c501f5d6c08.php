<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>
    <section class="testimonial-slider-wrapper testimonials-wrapper py-40 xl2:py-55 <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
        <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
        <div class="container-fluid-lg">
          <?php if(!empty($content->heading)): ?>
              <div class="title-content text-center fadeText">
                  <div class="title title-capitalize title-green">
                      <h2><?php echo $content->heading; ?></h2>
                  </div>
              </div>
          <?php endif; ?>
        </div>

        <?php if(!empty($content->testimonials)): ?>
            <div class="testimonial-slider fadeText">
                <div class="swiper testimonials !pt-40 !pb-60">
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $content->testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonials): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">
                                <div
                                    class="testimonial-card p-[28px] bg-[#ACC89133] rounded-[20px] shadow-image flex items-center gap-[28px] 767:flex-col">
                                    <?php if(!empty($testimonials['image'])): ?>
                                        <div
                                            class="testimonial-img-main flex-shrink-0 w-[120px] h-[120px] flex justify-center items-center rounded-full border-2 border-solid border-green-200">
                                            <div
                                                class="testi-img w-[100px] h-[100px] rounded-full border-1 border-solid border-green-200">
                                                <img class="img-fluid rounded-full lozad" src="<?php echo $testimonials['image']['url']; ?>"
                                                    alt="<?php echo $testimonials['image']['alt']; ?>" width="100" height="100">
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <div class="testimonial-content">
                                        <?php if(!empty($testimonials['name'])): ?>
                                            <div class="sub title-nunito title-green">
                                                <h4><?php echo $testimonials['name']; ?></h4>
                                            </div>
                                        <?php endif; ?>
                                        <div class="common-pattern bg-green-200 !mr-auto !ml-[unset] pt-10"></div>
                                        <?php if(!empty($testimonials['description'])): ?>
                                            <div class="content pt-20">
                                                <p> <?php echo $testimonials['description']; ?> </p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="swiper-pagination global-pagination !bottom-0"></div>
                </div>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>
<?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/partials/sections/service/testimonial_slider.blade.php ENDPATH**/ ?>