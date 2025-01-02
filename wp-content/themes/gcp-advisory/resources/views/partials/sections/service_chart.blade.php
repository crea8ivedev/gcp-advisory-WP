@if (isset($content->hide_section) && $content->hide_section == 'no')
    <section
        class="service-wrapper py-40 xl2:py-70 relative @if ($content->extra_class) {!! $content->extra_class !!} @endif"
        @if ($content->id) id="{!! $content->id !!}" @endif>
        <div class="container-fluid-lg">
            <div class="hidden lg:flex service-desktop">
                @if (!empty($content->image))
                    <div class="w-full lg:w-8/12 fadeText">
                        <div class="service-img relative">
                            <img class="img-fluid" src="{!! $content->image['url'] !!}" alt="{!! $content->image['alt'] !!}">
                            <div
                                class="title-green title-cairo absolute top-[50%] -translate-x-1/2 -translate-y-1/2 left-[30%] w-fit">
                                @if (!empty($content->heading))
                                    <h2>
                                        {!! $content->heading !!}
                                    </h2>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
                @if (!empty($content->services))
                    <div class="w-full lg:w-4/12">
                        <div class="services-inner h-full flex flex-col justify-between">
                            @foreach ($content->services as $services)
                                <div class="services title-nunito fadeText">
                                    <h3>{!! $services['service'] !!}</h3>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
            <div class="service-slider hidden 1023:block">
                @if (!empty($content->heading))
                    <div class="title title-cairo title-green pb-40 text-center fadeText">
                        <h2>{!! $content->heading !!}</h2>
                    </div>
                @endif
                @if (!empty($content->services))
                    <div class="swiper service-mobile-slider items-center !pb-70">
                        <div class="swiper-wrapper">
                            @foreach ($content->services as $services)
                                <div class="swiper-slide">
                                    <div class="services title-nunito fadeText">
                                        <h3>{!! $services['service'] !!}</h3>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination !bottom-0 global-pagination"></div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endif
