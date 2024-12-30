@php
    $banner_image = get_field('banner_image', get_the_id());
    $banner_title = get_field('banner_title', get_the_id());
    $designation = get_field('designation', get_the_id());
    $bottom_description = get_field('bottom_description', get_the_id());
    $image = get_field('image', get_the_id());
    $content = get_the_content(get_the_id());
    $social_media = get_field('social_media', get_the_id());
    $heading = get_the_title(get_the_id());

@endphp
<section class="banner-wrapper inner-banner relative w-full bg-white">
    @if (!empty($banner_image))
        <div class="img absolute top-0 left-0 w-full !h-full overflow-hidden">
            <img src="{!! $banner_image['url'] !!}" width="3024" height="1776" class="w-full h-full object-cover lozad"
                alt="{!! $banner_image['url'] !!}">
        </div>
    @endif
    @if (!empty($banner_title))
        <div class="banner-cta relative z-1 h-full">
            <div class="container-fluid-lg h-full">
                <div class="content text-center h-full">
                    <div class="slider-content h-full flex justify-center lg:justify-end items-center flex-col pt-[150px] pb-[100px] xl2:pt-120 xl2:pb-[130px]">
                        <div class="title title-white title-uppercase fadeText">
                            <h1>
                                {!! $banner_title !!}
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="cmn-pattern w-full absolute bottom-[-1px] xl4:bottom-[-4px] right-0 left-0 z-1">
        <svg width="1512" height="70" viewBox="0 0 1512 70" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M756 0L1512 70H0L756 0Z" fill="white" />
        </svg>
    </div>
</section>

<section class="team-zigzag-wrapper py-40 xl2:py-70 relative">
    <div class="container-fluid-lg">
        <div class="xl2:max-w-[1192px] mx-auto">
            <div class="flex gap-[30px] lg:gap-[55px] 1023:flex-wrap">
                @if (!empty($image))
                    <div class="w-full lg:w-[56%]">
                        <div class="team-img relative pt-[65.84%] h-full fadeText">
                            <img class="img-ratio lozad" src="{!! $image['url'] !!}" alt="{!! $banner_image['alt'] !!}"
                                width="644" height="424">
                        </div>
                    </div>
                @endif
                <div class="w-full lg:w-[44%]">
                    <div class="team-content">
                        <div class="title-content">
                            <div class="title title-capitalize title-green flex items-center gap-[10px] xl2:gap-[20px] fadeText flex-wrap 1023:items-center xl2:flex-nowrap">
                                @if (!empty($heading))
                                    <h2>{!! $heading !!}</h2>
                                @endif
                                @if (!empty($social_media))
                                    <div class="social-icons flex items-center gap-[10px]">
                                        @foreach ($social_media as $social_media)
                                            <div class="icon">
                                                <a class="flex w-[30px] h-[30px] lg:w-[40px] lg:h-[40px]" target="_blank" href="{!! $social_media['link'] !!}">
                                                    <img class="lozad img-fluid" src="{!! $social_media['icon']['url'] !!}"
                                                        alt="{!! $social_media['icon']['alt'] !!}">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            @if (!empty($designation))
                                <div class="sub-title title-green title-capitalize pt-10">
                                    <h3>{!! $designation !!}</h3>
                                </div>
                            @endif
                            @if (!empty($content))
                                <div class="content pt-20 fadeText">
                                    <p>{!! $content !!}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @if (!empty($bottom_description))
                <div class="content pt-[28px] extra-content">
                    {!! $bottom_description !!}
                </div>
            @endif
        </div>
    </div>
</section>
