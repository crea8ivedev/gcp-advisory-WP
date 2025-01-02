@if (isset($content->hide_section) && $content->hide_section == 'no')
    <section
        class="banner-wrapper relative h-[798px] lg:h-[880px] xxxl:h-[954px] w-full bg-white @if ($content->extra_class) {!! $content->extra_class !!} @endif"
        @if ($content->id) id="{!! $content->id !!}" @endif>
        @if ($content->image_or_video == 'image')
            <div class="swiper banner-slider h-full">
                <div class="swiper-wrapper">
                    @foreach ($content->banner_slider as $banner_slider)
                        <div class="swiper-slide">
                            @if (!empty($banner_slider['image']))
                                <div class="img absolute top-0 left-0 w-full !h-full overflow-hidden">
                                    <img class="full h-full object-cover lozad" src="{!! $banner_slider['image']['url'] !!}"
                                        alt="{!! $banner_slider['image']['alt'] !!}" width="3024" height="1776" />
                                </div>
                            @endif
                            <div class="banner-cta relative z-1">
                                <div class="container-fluid-lg">
                                    <div class="content text-center h-full">
                                        <div class="slider-content h-full flex justify-center items-center flex-col 1023:pt-100 1023:pb-50">
                                            @if (!empty($banner_slider['heading']))
                                                <div class="title title-white title-uppercase fadeText">
                                                    <h1>{!! $banner_slider['heading'] !!}</h1>
                                                </div>
                                            @endif
                                            @if (!empty($banner_slider['sub_heading']))
                                                <div class="sub-title sub pt-10 fadeText">
                                                    <h2>{!! $banner_slider['sub_heading'] !!}
                                                    </h2>
                                                </div>
                                            @endif
                                            @if (!empty($banner_slider['button']))
                                                <div class="slider-content btn-custom pt-40 fadeText">
                                                    <a href="{!! $banner_slider['button']['url'] !!}"
                                                        @if ($banner_slider['button']['target']) target="{!! $banner_slider['button']['target'] !!}" @else target="_self" @endif
                                                        class="btn btn btn-green-300" role="link"
                                                        aria-label="book an appointment">{!! $banner_slider['button']['title'] !!}</a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination !bottom-[80px] lg:!bottom-[160px] global-pagination"></div>
            </div>
        @else
            <div class="video-wrapper relative h-screen anim">
                @if (!empty($content->video))
                    <div class="absolute w-full h-full">
                        <video id="video" autoplay muted preload="metadata" class="w-full h-full object-cover">
                            <source src="{!! $content->video['url'] !!}" type="video/mp4">
                        </video>
                    </div>
                @endif
                @if (!empty($content->heading))
                    <div
                        class="banner-details h-full w-full flex flex-wrap items-center justify-center relative z-1 anim-item">
                        <div class="container-fluid-lg">
                            <div class="content anim-up 1023:text-center">
                                <div class="title title-white font-700 uppercase big mb-10 lg:mb-40 last:mb-0 fadeText">
                                    <h1>
                                        {!! $content->heading !!}
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        @endif
        <div class="cmn-pattern w-full absolute bottom-[-1px] xl4:bottom-[-4px] right-0 left-0 z-1">
            <svg width="1512" height="70" viewBox="0 0 1512 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M756 0L1512 70H0L756 0Z" fill="white" />
            </svg>
        </div>
    </section>
@endif
