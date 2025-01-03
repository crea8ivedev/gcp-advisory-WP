<footer class="footer bg-green-200 py-20 lg:py-40">
    <div class="container-fluid-lg">
        <div class="flex flex-wrap items-center lg:items-stretch justify-center w-full m-0 p-0">
            <div class="w-full lg:w-[70%] xl2:w-[62.5%]">
                <div class="flex justify-between items-start gap-[20px]">
                    <div class="menu-wrapper hidden lg:block">
                        @if (!empty($footer_first_menu_title))
                            <div class="menu-title title-white title-nunito">
                                <h4>{!! $footer_first_menu_title !!}</h4>
                            </div>
                        @endif
                        @if (has_nav_menu('Footer_menu_one'))
                            <div class="menu-list pt-10">
                                {!! wp_nav_menu([
                                    'theme_location' => 'Footer_menu_one',
                                    'menu_class' => '',
                                    'container' => false,
                                    'echo' => false,
                                ]) !!}
                            </div>
                        @endif
                    </div>
                    <div class="menu-wrapper hidden lg:block">
                        @if (!empty($footer_second_menu_title))
                            <div class="menu-title title-white title-nunito">
                                <h4>{!! $footer_second_menu_title !!}</h4>
                            </div>
                        @endif
                        @if (has_nav_menu('Footer_menu_two'))
                            <div class="menu-list pt-10">
                                {!! wp_nav_menu([
                                    'theme_location' => 'Footer_menu_two',
                                    'menu_class' => '',
                                    'container' => false,
                                    'echo' => false,
                                ]) !!}
                            </div>
                        @endif
                    </div>
                    <div class="menu-wrapper hidden lg:block">
                        @if (!empty($footer_third_menu_title))
                            <div class="menu-title title-white title-nunito">
                                <h4>{!! $footer_third_menu_title !!}</h4>
                            </div>
                        @endif
                        @if (has_nav_menu('Footer_menu_three'))
                            <div class="menu-list pt-10">
                                {!! wp_nav_menu([
                                    'theme_location' => 'Footer_menu_three',
                                    'menu_class' => '',
                                    'container' => false,
                                    'echo' => false,
                                ]) !!}
                            </div>
                        @endif
                    </div>
                    <div class="mobile-footer-menu lg:hidden block w-full">
                        <ul>
                            <li class="toggle-submenu">
                                @if (!empty($footer_first_menu_title))
                                    <a href="javascript:void(0)"
                                        class="relative z-1 block w-full">{!! $footer_first_menu_title !!}</a>
                                @endif
                                <img src="@asset('images/bottom-arrow.png')" alt="arrow" class="arrow right-0 top-10 absolute lozad">
                                @if (has_nav_menu('Footer_menu_one'))
                                    {!! wp_nav_menu([
                                        'theme_location' => 'Footer_menu_one',
                                        'menu_class' => 'sub-menu footer-menu',
                                        'container' => false,
                                        'echo' => false,
                                    ]) !!}
                                @endif
                            </li>
                            <li class="toggle-submenu">
                                @if (!empty($footer_second_menu_title))
                                    <a href="javascript:void(0)"
                                        class="relative z-1 block w-full">{!! $footer_second_menu_title !!}</a>
                                @endif
                                <img src="@asset('images/bottom-arrow.png')" alt="arrow" class="arrow right-0 top-10 absolute lozad">
                                @if (has_nav_menu('Footer_menu_two'))
                                    {!! wp_nav_menu([
                                        'theme_location' => 'Footer_menu_two',
                                        'menu_class' => 'sub-menu footer-menu',
                                        'container' => false,
                                        'echo' => false,
                                    ]) !!}
                                @endif
                            </li>
                            <li class="toggle-submenu border-0 border-b-2 border-solid pb-20">
                                @if (!empty($footer_third_menu_title))
                                    <a href="javascript:void(0)"
                                        class="relative z-1 block w-full">{!! $footer_third_menu_title !!}</a>
                                @endif
                                <img src="@asset('images/bottom-arrow.png')" alt="arrow" class="arrow right-0 top-10 absolute lozad">
                                @if (has_nav_menu('Footer_menu_three'))
                                    {!! wp_nav_menu([
                                        'theme_location' => 'Footer_menu_three',
                                        'menu_class' => 'sub-menu footer-menu',
                                        'container' => false,
                                        'echo' => false,
                                    ]) !!}
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-[30%] xl2:w-[37.5%]">
                <div
                    class="contact-inner flex flex-col flex-start lg:items-end h-full justify-between 1023:pt-[20px] 1023:gap-[16px]">
                    @if (!empty($phone))
                        <div class="contact-info flex items-center gap-[10px]">
                            <img src="@asset('images/call-icon.png')" alt="call-icon" width="16" height="16">
                            <a class="relative" href="{!! $phone['url'] !!}">
                                {!! $phone['title'] !!}
                            </a>
                        </div>
                    @endif
                    @if (!empty($copyright_text))
                        <div class="copyright-text">
                            <p>© {{ date('Y') }} {{ $copyright_text }}</p>
                        </div>
                    @endif
                    <div class="icon-logo flex gap-[20px] lg:flex-col items-end 1023:items-center justify-between">
                        <div class="techyscouts-logo">
                            <a href="https://www.techyscouts.com/" target="_blank"
                                class="techyscouts-credit-link lg:pl-[14px]">
                                <svg class="w-full" xmlns="http://www.w3.org/2000/svg" viewBox="-100 0 3700 552"
                                    id="techyscouts-logo" aria-labelledby="techyscouts-logo-title" role="img">
                                    <title id="techyscouts-logo-title">Made with love by TechyScouts</title>
                                    <path id="techyscouts-logo-heart" style="transform-origin:10% 50%"
                                        d="M436 257L255 427 73 257a81 81 0 0 1-25-62c0-23 4-42 22-59 17-15 38-23 62-23 23 0 45 14 61 29l62 54 62-54c16-15 38-29 61-29 24 0 45 8 61 23 19 17 23 36 23 59 0 24-7 46-26 62m32-154c-50-46-130-46-179 0l-34 30-34-30c-49-46-130-46-179 0-56 51-56 134 0 185l213 196 213-196c56-51 56-134 0-185">
                                    </path>
                                    <path id="techyscouts-logo-line-1" d="M803 372L1016 0l34 20-213 372-34-20z"></path>
                                    <path id="techyscouts-logo-line-2" d="M879 552l-33-20 213-372 33 20-213 372z">
                                    </path>
                                    <path id="techyscouts-logo-text"
                                        d="M3491.171 318.855c11.336 52.417-38.612 83.584-85.725 83.584-36.132 0-80.058-20.542-84.308-60.563l-.355-2.48 5.668-.708.354 2.48c3.897 37.188 45.343 55.959 78.995 55.959 43.217 0 89.976-27.98 79.704-77.21-15.941-73.667-155.865-6.375-162.241-98.814-1.417-14.875 2.48-29.396 11.69-41.438 36.132-46.75 138.152-40.73 150.196 23.376l.355 2.833-5.314 1.062-.354-2.833c-2.126-10.27-6.376-19.125-13.461-26.917-15.232-16.292-39.675-23.021-61.992-22.667-23.38.354-49.947 8.854-64.825 28.334-8.856 10.98-12.044 24.083-10.981 37.896 6.376 86.772 145.591 18.771 162.594 98.106zm-254.34 82.168h-5.314V157.707h-85.725v-5.667h176.764v5.667h-85.725v243.316zm-198.366 1.77c-41.092 0-86.788-24.083-86.788-70.125V152.394h5.667v180.628c0 42.855 43.217 64.105 81.12 64.105 37.904 0 81.121-21.25 81.121-64.46V152.395h5.668v180.628c0 45.688-46.05 69.772-86.788 69.772zm-239.105.709c-34.715 0-66.596-14.167-89.267-37.542-22.672-23.021-37.195-54.897-37.195-89.96 0-35.063 14.523-66.938 37.195-89.96 22.67-23.375 54.552-37.542 89.267-37.542 35.07 0 66.597 14.167 89.622 37.542 22.671 23.022 37.195 54.897 37.195 89.96 0 35.063-14.524 66.939-37.195 89.96-23.025 23.375-54.552 37.542-89.622 37.542zm85.726-213.212c-21.963-22.312-52.427-36.125-85.726-36.125-33.298 0-63.408 13.813-85.37 36.125-21.61 21.959-35.425 52.064-35.425 85.71 0 33.646 13.816 63.75 35.424 85.71 21.963 22.312 52.073 36.125 85.371 36.125 33.299 0 63.763-13.813 85.726-36.125 21.608-21.96 35.07-52.064 35.07-85.71 0-33.646-13.462-63.751-35.07-85.71zM2544.67 394.648c31.882 0 60.93-13.459 81.83-35.063 9.564-9.917 17.711-21.25 23.379-34.355h6.022c-6.022 14.52-14.878 27.625-25.505 38.605-21.963 22.667-52.073 36.48-85.726 36.48-33.652 0-63.762-13.813-85.725-36.48-21.608-22.313-35.424-53.126-35.424-87.48 0-34.001 13.816-64.814 35.424-87.127 21.963-22.667 52.073-36.48 85.725-36.48 33.653 0 63.763 13.813 85.726 36.48 10.627 10.98 19.483 24.084 25.505 38.605h-6.022c-5.668-13.105-13.815-24.792-23.38-34.71-20.9-21.604-49.947-34.708-81.829-34.708-31.88 0-60.928 13.104-81.828 34.709-20.9 21.604-34.007 51-34.007 83.23 0 32.584 13.107 61.98 34.007 83.23 20.9 21.605 49.947 35.064 81.828 35.064zm-228.124 7.791c-36.132 0-80.058-20.542-84.309-60.563l-.354-2.48 5.668-.708.354 2.48c3.897 37.188 45.343 55.959 78.995 55.959 43.217 0 89.977-27.98 79.704-77.21-15.941-73.667-155.865-6.375-162.24-98.814-1.418-14.875 2.479-29.396 11.689-41.438 36.132-46.75 138.152-40.73 150.196 23.376l.355 2.833-5.314 1.062-.354-2.833c-2.126-10.27-6.376-19.125-13.461-26.917-15.232-16.292-39.675-23.021-61.992-22.667-23.38.354-49.947 8.854-64.825 28.334-8.856 10.98-12.044 24.083-10.981 37.896 6.376 86.772 145.591 18.771 162.594 98.106 11.336 52.417-38.611 83.584-85.725 83.584zm-182.426-2.479h-5.668V297.605l-91.039-145.211h6.73l87.143 139.544 87.143-139.544h6.73l-91.039 145.21V399.96zm-120.08-122.897h-155.51V399.96h-5.313V152.394h5.314V271.75h155.51V152.394h5.668V399.96h-5.668V277.063zm-298.26 117.585c31.881 0 60.929-13.459 81.829-35.063 9.564-9.917 17.711-21.25 23.38-34.355h6.021c-6.022 14.52-14.878 27.625-25.505 38.605-21.962 22.667-52.073 36.48-85.725 36.48-33.653 0-63.763-13.813-85.726-36.48-21.608-22.313-35.423-53.126-35.423-87.48 0-34.001 13.815-64.814 35.423-87.127 21.963-22.667 52.073-36.48 85.726-36.48 33.652 0 63.763 13.813 85.725 36.48 10.627 10.98 19.483 24.084 25.505 38.605h-6.022c-5.668-13.105-13.815-24.792-23.38-34.71-20.9-21.604-49.947-34.708-81.828-34.708-31.882 0-60.929 13.104-81.829 34.709-20.9 21.604-34.007 51-34.007 83.23 0 32.584 13.107 61.98 34.007 83.23 20.9 21.605 49.947 35.064 81.829 35.064zm-277.365 5.312V152.394h136.736v5.313h-131.068v115.46h128.234v5.666h-128.234v115.815h131.776v5.312h-137.444zm-106.975 1.063h-5.314V157.707h-85.725v-5.667h176.764v5.667h-85.725v243.316z"
                                        style="fill:none;stroke-width:13"></path>
                                </svg>
                            </a>
                        </div>
                        @if (!empty($footer_social_media))
                            <div class="linkedin-icon">
                                <div class="social-icon flex items-center gap-[10px]">
                                    @foreach ($footer_social_media as $social_media)
                                    <a class="flex" href="{!! $social_media['social_media_link'] !!}" target="_blank">
                                        <img src="{!! $social_media['social_media_icon']['url'] !!}" alt="{!! $social_media['social_media_icon']['alt'] !!}" width="40"
                                            height="40" class="lozad">
                                    </a>
                                    @endforeach                                    
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
