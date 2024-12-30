<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>
    <section
        class="contact-zigzag py-70 relative image-left <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
        <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
        <div class="container-fluid-lg">
            <div class="flex gap-[40px] xxxl:gap-[55px] 1023:flex-wrap items-center">
                <?php if(!empty($content->map)): ?>
                    <div class="w-full lg:w-[55%]">
                        <div class="zigzag-img relative h-full fadeText rounded-10">
                            <?php echo $content->map; ?>

                        </div>
                    </div>
                <?php endif; ?>
                <div class="w-full lg:w-[45%]">
                    <div class="zigzag-content">
                        <div class="title-content fadeText">
                            <?php if(!empty($content->title)): ?>
                                <div class="title title-capitalize title-green flex items-center gap-[20px]">
                                    <h2><?php echo $content->title; ?></h2>
                                </div>
                            <?php endif; ?>
                            <div class="common-pattern mt-20"></div>
                            <?php if(!empty($content->contact_information)): ?>
                                <div class="contact-list mt-30 fadeText">
                                    <ul>
                                        <?php $__currentLoopData = $content->contact_information; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <?php if(!empty($contact['icon'])): ?>
                                                    <img src="<?php echo $contact['icon']['url']; ?>" alt="<?php echo $contact['icon']['title']; ?>"
                                                        width="20" height="20">
                                                <?php endif; ?>
                                                <?php if(!empty($contact['description'])): ?>
                                                    <span><?php echo $contact['description']; ?></span>
                                                <?php endif; ?>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/partials/sections/contact_details.blade.php ENDPATH**/ ?>