@if (isset($content->hide_section) && $content->hide_section == 'no')
    @if ($content->style == 'style_1')
        @php
            $bg_color = 'bubble_pattern';
        @endphp
    @else
        @php
            $bg_color = '';
        @endphp
    @endif
    <section
        class="our-industries-wrapper pt-20 {!! $bg_color !!} relative @if ($content->extra_class) {!! $content->extra_class !!} @endif"
        @if ($content->id) id="{!! $content->id !!}" @endif>
        <div class="industries-content relative z-1">
            @if ($content->style == 'style_2')
                <div class="container-fluid-lg">
                    @if (!empty($content->image))
                        <div
                            class="general-conent-icon fadeText mx-auto w-[60px] h-[60px] lg:w-[80px] lg:h-[80px] xl2:w-[120px] xl2:h-[120px]">
                            <img class="mx-auto img-fluid" src="{!! $content->image['url'] !!}" alt="{!! $content->image['alt'] !!}"
                                width="120" height="120">
                        </div>
                    @endif
                    @if (!empty($content->heading))
                        <div class="title title-green text-center fadeText pt-20">
                            <h2>{!! $content->heading !!}</h2>
                        </div>
                    @endif
                </div>
            @else
                @if (!empty($content->heading))
                    <div class="title title-green text-center fadeText pt-20">
                        <h2>{!! $content->heading !!}</h2>
                    </div>
                @endif
            @endif
            @if (!empty($content->industries_arr))
                <div
                    class="industries-grid !mt-40 swiper industries-slider flex pt-40 !pb-40 xl2:!pb-70 !px-20 md:!px-55 lg:!px-[100px]">
                    <div class="swiper-wrapper">
                        @foreach ($content->industries_arr as $industries_arr)
                            <div class="swiper-slide">
                                <div class="grid-box bg-white rounded-[20px] shadow-card p-20 text-center">
                                    @if (!empty($industries_arr['fea_img']))
                                        <div class="grid-img relative pt-[50%] xl2:pt-[72.22%] fadeText">
                                            <a href="{!! $industries_arr['url'] !!}" role="link" aria-label="Learn More">
                                                <img class="img-ratio lozad" src="{!! $industries_arr['fea_img'] !!}"
                                                    alt="{!! $industries_arr['alt_text'] !!}" width="360" height="260">
                                            </a>
                                        </div>
                                    @endif
                                    <div class="common-pattern mt-20 mx-auto fadeText"></div>
                                    @if (!empty($industries_arr['title']))
                                        <div
                                            class="grid-title title-green title-nunito title-capitalize pt-20 fadeText">
                                            <a href="{!! $industries_arr['url'] !!}" role="link" aria-label="Learn More">
                                                <h3>{!! $industries_arr['title'] !!}</h3>
                                            </a>
                                        </div>
                                    @endif
                                    @if ($content->style == 'style_1')
                                        <div class="btn-custom pt-20 fadeText">
                                            <a href="{!! $industries_arr['url'] !!}" role="link" aria-label="Learn More"
                                                class="btn btn-greenborder">
                                                learn more
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination !bottom-0 global-pagination"></div>
                </div>
            @endif
        </div>
    </section>
@endif
