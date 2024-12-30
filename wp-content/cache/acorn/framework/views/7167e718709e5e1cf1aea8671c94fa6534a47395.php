<?php if(is_404() || is_page(2)): ?>
    <?php $header = 'header-two'; ?>
<?php else: ?>
    <?php $header = ''; ?>
<?php endif; ?>
<header class="header <?php echo e($header); ?>">
    <div class="announcement bg-green-200">
        <div class="lg:px-55 xl3:px-0 px-20 xl3:max-w-screen-2xl mx-auto relative">
            <div
                class="flex flex-wrap lg:flex-row items-center lg:gap-[26px] lg:justify-between justify-center py-10 w-full">
                <?php if(!empty($announcement_bar)): ?>
                    <div class="w-full lg:w-11/12 flex flex-wrap items-center justify-center gap-10">
                        <div class="swiper-button-prev 1023:hidden">
                            <svg width="20" height="16" viewBox="0 0 20 16" fill="white"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.6083 7.94178L2.90247 7.59523L9.04921 2.27246C9.37107 1.99374 9.39482 1.51939 9.10216 1.21285C8.80989 0.906703 8.31183 0.88371 7.98958 1.16242L0.969781 7.24163C0.665689 7.51849 0.492384 7.89126 0.482635 8.29202C0.472895 8.69241 0.627877 9.0728 0.931657 9.37546L7.63523 15.7447C7.7842 15.8864 7.97778 15.9593 8.17303 15.9636C8.38087 15.9682 8.59061 15.8948 8.74907 15.7434C9.05632 15.4501 9.05566 14.9756 8.74769 14.683L2.84119 9.09426L18.5718 9.44135C19.0064 9.45094 19.3673 9.12282 19.3773 8.70894C19.3874 8.29505 19.0429 7.95136 18.6083 7.94178Z" />
                            </svg>
                        </div>
                        <div class="announcement-bar swiper">
                            <div class="swiper-wrapper">
                                <?php $__currentLoopData = $announcement_bar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $announcement_msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(!empty($announcement_msg['message'])): ?>
                                        <div class="swiper-slide">
                                            <?php echo $announcement_msg['message']; ?>

                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="swiper-button-next 1023:hidden">
                            <svg width="20" height="15" viewBox="0 0 20 15" fill="white"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.58694 8.25087L17.297 8.25088L11.2813 13.7078C10.9663 13.9936 10.9541 14.4683 11.2542 14.7683C11.5538 15.0679 12.0523 15.0799 12.3677 14.7942L19.2378 8.56175C19.535 8.27825 19.6992 7.90176 19.6992 7.50089C19.6992 7.10039 19.535 6.72352 19.224 6.42765L12.3673 0.207973C12.2149 0.0695995 12.0196 0.000976877 11.8243 0.000976861C11.6164 0.000976843 11.4085 0.078975 11.2538 0.233848C10.9537 0.533844 10.966 1.00821 11.2809 1.29396L17.3218 6.75089L1.58694 6.75089C1.15225 6.75089 0.799453 7.08689 0.799453 7.50088C0.799452 7.91488 1.15225 8.25087 1.58694 8.25087Z" />
                            </svg>
                        </div>
                    </div>
                    <button type="button" role="button" aria-label="close" class="bg-transparent border-0 p-0">
                        <svg class="block" fill="white" width="17" height="15" viewBox="0 0 17 15"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.1178 7.51266L16.2505 1.67178C16.6496 1.29185 16.6496 0.677564 16.2505 0.297639C15.8516 -0.0822859 15.2066 -0.0822859 14.8077 0.297639L8.67473 6.13852L2.54198 0.297639C2.14287 -0.0822859 1.49806 -0.0822859 1.09914 0.297639C0.700028 0.677564 0.700028 1.29185 1.09914 1.67178L7.23188 7.51266L1.09914 13.3535C0.700028 13.7335 0.700028 14.3477 1.09914 14.7277C1.29794 14.9172 1.55934 15.0124 1.82056 15.0124C2.08177 15.0124 2.34299 14.9172 2.54198 14.7277L8.67473 8.88679L14.8077 14.7277C15.0067 14.9172 15.2679 15.0124 15.5291 15.0124C15.7903 15.0124 16.0515 14.9172 16.2505 14.7277C16.6496 14.3477 16.6496 13.7335 16.2505 13.3535L10.1178 7.51266Z" />
                        </svg>
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="py-[16px] xl2:py-[21px] px-20 md:px-55 lg:px-[100px] w-full mx-auto relative">
        <div class=" hidden 1023:flex flex-wrap justify-between items-center w-full lg:relative">
            <button role="button" tabindex="0" class="navbar-toggler lg:hidden bg-transparent border-0 p-0"
                type="button">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21.6774 1.16138H2.32258C1.04516 1.16138 0 2.20654 0 3.48396C0 4.76138 1.04516 5.80654 2.32258 5.80654H21.6774C22.9548 5.80654 24 4.76138 24 3.48396C24 2.20654 22.9548 1.16138 21.6774 1.16138Z"
                        fill="white" />
                    <path
                        d="M21.6774 9.67749H2.32258C1.04516 9.67749 0 10.7227 0 12.0001C0 13.2775 1.04516 14.3227 2.32258 14.3227H21.6774C22.9548 14.3227 24 13.2775 24 12.0001C24 10.7227 22.9548 9.67749 21.6774 9.67749Z"
                        fill="white" />
                    <path
                        d="M21.6774 18.1936H2.32258C1.04516 18.1936 0 19.2388 0 20.5162C0 21.7936 1.04516 22.8388 2.32258 22.8388H21.6774C22.9548 22.8388 24 21.7936 24 20.5162C24 19.2388 22.9548 18.1936 21.6774 18.1936Z"
                        fill="white" />
                </svg>

            </button>
            <div class="logo">
                <a href="<?php echo e(esc_url(home_url())); ?>" aria-label="homepage">
                    <?php if(is_404() || is_page(2)): ?>
                        <?php if(!empty($header_black_logo)): ?>
                            <img src="<?php echo $header_black_logo['url']; ?>" width="562.72" height="64" class="ozad"
                                alt="<?php echo $header_black_logo['alt']; ?>">
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if(!empty($header_white_logo)): ?>
                            <img src="<?php echo $header_white_logo['url']; ?>" width="562.72" height="64" class="l-no lozad"
                                alt="<?php echo $header_white_logo['alt']; ?>">
                        <?php endif; ?>
                        <?php if(!empty($header_black_logo)): ?>
                            <img src="<?php echo $header_black_logo['url']; ?>" width="562.72" height="64" class="l-st lozad"
                                alt="<?php echo $header_black_logo['alt']; ?>">
                        <?php endif; ?>
                    <?php endif; ?>
                </a>
            </div>

            <?php $__currentLoopData = $primary_buttons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $primary_button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($index == 1): ?>
                    <div class="user-icon">
                        <a href="<?php echo $primary_button['button']['url']; ?>" target="<?php echo $primary_button['button']['target']; ?>"
                            aria-label="<?php echo $primary_button['button']['title']; ?>">
                            <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.9089 0C7.59522 0 4.90894 2.68629 4.90894 6C4.90894 9.31371 7.59522 12 10.9089 12C14.2227 12 16.9089 9.31371 16.9089 6C16.9089 2.68629 14.2227 0 10.9089 0Z"
                                    fill="white" />
                                <path
                                    d="M5.4543 14.1819C2.44184 14.1819 -0.000244141 16.624 -0.000244141 19.6364V22.9092C-0.000244141 23.5117 0.488178 24.0001 1.09066 24.0001H20.727C21.3295 24.0001 21.8179 23.5117 21.8179 22.9092V19.6364C21.8179 16.624 19.3758 14.1819 16.3634 14.1819H5.4543Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="navbar flex items-center justify-between lg:order-1 order-2 lg:w-full">
            <div class="logo hidden lg:flex">
                <a href="<?php echo e(esc_url(home_url())); ?>" aria-label="homepage">
                    <?php if(is_404() || is_page(2)): ?>
                        <?php if(!empty($header_black_logo)): ?>
                            <img src="<?php echo $header_black_logo['url']; ?>" width="562.72" height="64" class="ozad"
                                alt="<?php echo $header_black_logo['alt']; ?>">
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if(!empty($header_white_logo)): ?>
                            <img src="<?php echo $header_white_logo['url']; ?>" width="562.72" height="64" class="l-no lozad"
                                alt="<?php echo $header_white_logo['alt']; ?>">
                        <?php endif; ?>
                        <?php if(!empty($header_black_logo)): ?>
                            <img src="<?php echo $header_black_logo['url']; ?>" width="562.72" height="64" class="l-st lozad"
                                alt="<?php echo $header_black_logo['alt']; ?>">
                        <?php endif; ?>
                    <?php endif; ?>
                </a>
            </div>
            <div id="mobile-menu-main" class="menu-main-menu">
                <?php if(!empty($primary_buttons)): ?>
                    <ul role="list"
                        class="upper-menu menu hidden lg:flex 1023:flex-col flex-wrap lg:items-center lg:justify-end items-start my-0 lg:gap-[40px] xxl:gap-[60px]">
                        <?php $__currentLoopData = $primary_buttons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $primary_button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo $primary_button['button']['url']; ?>" taget="<?php echo $primary_button['button']['target']; ?>"
                                    aria-label="<?php echo $primary_button['button']['title']; ?>"> <?php echo $primary_button['button']['title']; ?> </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php endif; ?>
                <?php if(has_nav_menu('primary_navigation')): ?>
                    <?php echo wp_nav_menu([
                        'theme_location' => 'primary_navigation',
                        'container' => false,
                        'menu_class' =>
                            'menu flex 1023:flex-col flex-wrap lg:items-center lg:justify-center items-start my-0 lg:gap-[40px] xxl:gap-[60px]',
                        'echo' => false,
                    ]); ?>

                <?php endif; ?>
            </div>
            <?php if(!empty($primary_buttons)): ?>
                <div class="btn-custom lg:hidden pt-20 flex flex-col items-center gap-[12px] !px-[24px]">
                    <?php $__currentLoopData = $primary_buttons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $primary_button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($index !== 1): ?>
                            <!-- Skip the second element -->
                            <a href="<?php echo $primary_button['button']['url']; ?>" target="<?php echo $primary_button['button']['target']; ?>"
                                class="btn btn-greenborder-100 w-full justify-center"
                                aria-label="<?php echo $primary_button['button']['title']; ?>">
                                <?php echo $primary_button['button']['title']; ?> </a>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</header>
<!-- <div class="navbar hidden items-center justify-between lg:order-1 order-2 lg:w-full">
    <div class="logo hidden lg:flex">
        <a href="<?php echo e(esc_url(home_url())); ?>" aria-label="homepage">
            <?php if(is_404() || is_page(2)): ?>
                <?php if(!empty($header_black_logo)): ?>
                    <img src="<?php echo $header_black_logo['url']; ?>" width="562.72" height="64" class="ozad"
                        alt="<?php echo $header_black_logo['alt']; ?>">
                <?php endif; ?>
            <?php else: ?>
                <?php if(!empty($header_white_logo)): ?>
                    <img src="<?php echo $header_white_logo['url']; ?>" width="562.72" height="64" class="l-no lozad"
                        alt="<?php echo $header_white_logo['alt']; ?>">
                <?php endif; ?>
                <?php if(!empty($header_black_logo)): ?>
                    <img src="<?php echo $header_black_logo['url']; ?>" width="562.72" height="64" class="l-st lozad"
                        alt="<?php echo $header_black_logo['alt']; ?>">
                <?php endif; ?>
            <?php endif; ?>
        </a>
    </div>
    <div id="mobile-menu-main" class="menu-main-menu">
        <?php if(!empty($primary_buttons)): ?>
            <ul role="list"
                class="upper-menu menu hidden lg:flex 1023:flex-col flex-wrap lg:items-center lg:justify-end items-start my-0 lg:gap-[40px] xxl:gap-[60px]">
                <?php $__currentLoopData = $primary_buttons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $primary_button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="<?php echo $primary_button['button']['url']; ?>" taget="<?php echo $primary_button['button']['target']; ?>"
                            aria-label="<?php echo $primary_button['button']['title']; ?>"> <?php echo $primary_button['button']['title']; ?> </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>
        <?php if(has_nav_menu('secondary_navigation')): ?>
            <?php echo wp_nav_menu([
                'theme_location' => 'secondary_navigation',
                'container' => false,
                'menu_class' =>
                    'menu flex 1023:flex-col flex-wrap lg:items-center lg:justify-center items-start my-0 lg:gap-[40px] xxl:gap-[60px]',
                'echo' => false,
            ]); ?>

        <?php endif; ?>
    </div>
    <?php if(!empty($primary_buttons)): ?>
        <div class="btn-custom lg:hidden pt-20 flex flex-col items-center gap-[12px] !px-[24px]">
            <?php $__currentLoopData = $primary_buttons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $primary_button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($index !== 1): ?>
                    <a href="<?php echo $primary_button['button']['url']; ?>" target="<?php echo $primary_button['button']['target']; ?>"
                        class="btn btn-greenborder-100 w-full justify-center" aria-label="<?php echo $primary_button['button']['title']; ?>">
                        <?php echo $primary_button['button']['title']; ?> </a>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
</div> -->
<?php /**PATH E:\xampp8\htdocs\ts\gcp-advisory-WP\wp-content\themes\gcp-advisory\resources\views/sections/header.blade.php ENDPATH**/ ?>