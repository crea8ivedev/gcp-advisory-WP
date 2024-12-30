@if (isset($content->hide_section) && $content->hide_section == 'no')
    <section
        class="banner-wrapper inner-banner relative w-full bg-white @if ($content->extra_class) {!! $content->extra_class !!} @endif"
        @if ($content->id) id="{!! $content->id !!}" @endif>
        @if (!empty($content->background_image))
            <div class="img absolute top-0 left-0 w-full !h-full overflow-hidden">
                <img src="{!! $content->background_image['url'] !!}" width="3024" height="1776" class="w-full h-full object-cover lozad"
                    alt="{!! $content->background_image['url'] !!}">
            </div>
        @endif
        @if (!empty($content->heading))
            <div class="banner-cta relative z-1 h-full">
                <div class="container-fluid-lg h-full">
                    <div class="content text-center h-full">
                        <div class="slider-content h-full flex justify-center lg:justify-end items-center flex-col pt-[150px] pb-[100px] xl2:pt-120 xl2:pb-[130px]">
                            <div class="title title-white title-uppercase fadeText">
                                <h1>
                                    {!! $content->heading !!}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="cmn-pattern w-full absolute bottom-[-1px] xl4:bottom-[-4px] right-0 left-0 z-1">
            {{-- <img src="../assets/images/banner-pattern.png" alt="pattern" class="w-full block object-contain h-full"> --}}
            <svg width="1512" height="70" viewBox="0 0 1512 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M756 0L1512 70H0L756 0Z" fill="white" />
            </svg>
        </div>
    </section>
@endif
