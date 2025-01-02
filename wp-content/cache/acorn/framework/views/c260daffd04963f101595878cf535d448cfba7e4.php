<?php if(isset($content->hide_section) && $content->hide_section == 'no'): ?>
    <section
        class="services-grid-wrapper py-40 xl2:py-55 relative bg-green-200 <?php if($content->extra_class): ?> <?php echo $content->extra_class; ?> <?php endif; ?>"
        <?php if($content->id): ?> id="<?php echo $content->id; ?>" <?php endif; ?>>
        <div class="container-fluid-lg">
            <div class="title-content text-center fadeText">
                <?php if(!empty($content->heading)): ?>
                    <div class="title title-capitalize title-white">
                        <h2><?php echo $content->heading; ?></h2>
                    </div>
                <?php endif; ?>
                <?php if(!empty($content->sub_heading)): ?>
                    <div class="sub title-white title-nunito">
                        <h3><?php echo $content->sub_heading; ?></h3>
                    </div>
                <?php endif; ?>
            </div>
            <?php if(!empty($content->grid)): ?>
                <div class="services-grid pt-20 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[28px] fadeText">
                    <?php $__currentLoopData = $content->grid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            // Calculate the class based on the iteration
                            $class_group = 'class_' . ceil($loop->iteration / 3);
                        ?>
                        <div class="grid-box py-20 px-10 bg-[#F6EFE5] rounded-[10px] text-center">
                            <div class="common-pattern <?php echo e($class_group); ?>"></div> <!-- Dynamic class applied here -->
                            <div class="content pt-10">
                                <p><?php echo $grid['content']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/partials/sections/service/content_grid.blade.php ENDPATH**/ ?>