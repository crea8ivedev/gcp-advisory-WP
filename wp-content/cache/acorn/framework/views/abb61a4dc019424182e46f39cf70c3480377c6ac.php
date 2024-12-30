<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>
  <section
      class="zigzag-form zigzag-wrapper zigzag-pattern relative py-[72px] text-center <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?> "
      <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
      
          <div class="title title-capitalize title-green flex items-center gap-[20px] fadeText justify-center pb-40">
              <?php if(!empty($content->heading)): ?>
                  <div class="title title-capitalize fadeText">
                      <h2><?php echo $content->heading; ?></h2>
                  </div>
              <?php endif; ?>
          </div>
          <?php if(!empty($content->shortcode)): ?>
              <div class="fadeText">
                <?php echo do_shortcode($content->shortcode); ?>

              </div>
          <?php endif; ?>
      
  </section>
<?php endif; ?>
<?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/partials/sections/contact_form.blade.php ENDPATH**/ ?>