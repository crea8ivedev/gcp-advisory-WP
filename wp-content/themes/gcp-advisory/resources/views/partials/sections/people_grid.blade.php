@if (isset($content->hide_section) && $content->hide_section == 'no')
    <section
        class="our-team-wrapper py-40 xl2:py-70 relative @if ($content->extra_class) {!! $content->extra_class !!} @endif"
        @if ($content->id) id="{!! $content->id !!}" @endif>
        <div class="container-fluid-lg">
            @if (!empty($content->heading))
                <div class="title title-cairo title-capitalize title-green text-center fadeText">
                    <h2>{!! $content->heading !!}</h2>
                </div>
            @endif
            @if (!empty($content->peoples_arr))
                <div
                    class="team-grid flex-wrap gap-[20px] grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 pt-20 fadeText">
                    @foreach ($content->peoples_arr as $peoples_arr)
                        <div class="grid-box rounded-[20px] md:p-20 w-full flex flex-col">
                            @if (!empty($peoples_arr['fea_img']))
                                <div class="grid-img relative pt-[70%] xl2:pt-[95.97%]">
                                    <a href="{!! $peoples_arr['url'] !!}" role="link" aria-label="Learn More"
                                        >
                                        <img class="img-ratio lozad" src="{!! $peoples_arr['fea_img'] !!}"
                                            alt="{!! $peoples_arr['alt_text'] !!}" width="360" height="260">
                                    </a>
                                </div>
                            @endif
                            <div class="grid-content flex flex-col justify-between h-full">
                                <div class="grid-inner">
                                    <div class="common-pattern mt-[28px]"></div>
                                    @if (!empty($peoples_arr['title']))
                                        <div class="grid-title title-font title-nunito title-capitalize pt-10">
                                            <a href="{!! $peoples_arr['url'] !!}" role="link" aria-label="Learn More">
                                                <h3>{!! $peoples_arr['title'] !!}</h3>
                                            </a>
                                        </div>
                                    @endif
                                    @if (!empty($peoples_arr['designation']))
                                        <div class="title sub title-green pt-10">
                                            <h4>{!! $peoples_arr['designation'] !!}</h4>
                                        </div>
                                    @endif
                                </div>
                                <div class="btn-custom pt-10">
                                    <a href="{!! $peoples_arr['url'] !!}" role="link" aria-label="Learn More"
                                        class="btn btn-greenborder">
                                        learn more
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endif
