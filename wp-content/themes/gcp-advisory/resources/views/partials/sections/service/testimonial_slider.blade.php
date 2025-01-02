@if (isset($content->hide_section) && $content->hide_section == 'no')
    <section class="testimonial-slider-wrapper testimonials-wrapper py-40 xl2:py-55 @if ($content->extra_class) {!! $content->extra_class !!} @endif"
        @if ($content->id) id="{!! $content->id !!}" @endif>
        <div class="container-fluid-lg">
          @if (!empty($content->heading))
              <div class="title-content text-center fadeText">
                  <div class="title title-capitalize title-green">
                      <h2>{!! $content->heading !!}</h2>
                  </div>
              </div>
          @endif
        </div>

        @if (!empty($content->testimonials))
            <div class="testimonial-slider fadeText">
                <div class="swiper testimonials !pt-40 !pb-60">
                    <div class="swiper-wrapper">
                        @foreach ($content->testimonials as $testimonials)
                            <div class="swiper-slide">
                                <div
                                    class="testimonial-card p-[28px] bg-[#ACC89133] rounded-[20px] shadow-image flex items-center gap-[28px] 767:flex-col">
                                    @if (!empty($testimonials['image']))
                                        <div
                                            class="testimonial-img-main flex-shrink-0 w-[120px] h-[120px] flex justify-center items-center rounded-full border-2 border-solid border-green-200">
                                            <div
                                                class="testi-img w-[100px] h-[100px] rounded-full border-1 border-solid border-green-200">
                                                <img class="img-fluid rounded-full lozad" src="{!! $testimonials['image']['url'] !!}"
                                                    alt="{!! $testimonials['image']['alt'] !!}" width="100" height="100">
                                            </div>
                                        </div>
                                    @endif
                                    <div class="testimonial-content">
                                        @if (!empty($testimonials['name']))
                                            <div class="sub title-nunito title-green">
                                                <h4>{!! $testimonials['name'] !!}</h4>
                                            </div>
                                        @endif
                                        <div class="common-pattern bg-green-200 !mr-auto !ml-[unset] pt-10"></div>
                                        @if (!empty($testimonials['description']))
                                            <div class="content pt-20">
                                                <p> {!! $testimonials['description'] !!} </p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination global-pagination !bottom-0"></div>
                </div>
            </div>
        @endif
    </section>
@endif
