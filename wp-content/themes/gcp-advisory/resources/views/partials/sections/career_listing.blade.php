@if (isset($content->hide_section) && $content->hide_section == 'no')
    <section
        class="opportunities-grid-wrapper py-40 xl2:py-70 relative bg-green-200 @if ($content->extra_class) {!! $content->extra_class !!} @endif "
        @if ($content->id) id="{!! $content->id !!}" @endif>
        <div class="container-fluid-lg">
            <div class="title-content title-white text-center">
                @if (!empty($content->heading))
                    <div class="title title-capitalize fadeText">
                        <h2>{!! $content->heading !!}</h2>
                    </div>
                @endif
                @if (!empty($content->sub_heading))
                    <div class="sub-title title-capitalize pt-10 fadeText title-nunito">
                        <h3>{!! $content->sub_heading !!}</h3>
                    </div>
                @endif
                @if (!empty($content->description))
                    <div class="content pt-20 max-w-[1112px] mx-auto fadeText">
                        {!! $content->description !!}
                    </div>
                @endif
            </div>
            @if (!empty($content->careers_arr))
                <div
                    class="opportunities-grid pt-[40px] lg:pt-55 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[20px] lg:gap-x-[40px] lg:gap-y-[80px] fadeText">
                    @foreach ($content->careers_arr as $careers_arr)
                        <div class="grid-box px-20 767:text-center">
                            <div class="common-pattern"></div>
                            @if (!empty($careers_arr['title']))
                                <div class="title title-white title-nunito">
                                    <h3>{!! $careers_arr['title'] !!}</h3>
                                </div>
                            @endif
                            @if (!empty($careers_arr['designation']))
                                <div class="sub title-white pt-10">
                                    <h4>{!! $careers_arr['designation'] !!}</h4>
                                </div>
                            @endif
                            <div class="btn-custom pt-[28px]">
                                <a href="{!! $careers_arr['url'] !!}" role="link" aria-label="Learn More"
                                    class="btn btn-green-100 flex items-center gap-[10px]">
                                    Learn More
                                    <svg width="62" height="16" viewBox="0 0 62 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM61.7129 8.70711C62.1034 8.31658 62.1034 7.68342 61.7129 7.29289L55.349 0.928932C54.9584 0.538408 54.3253 0.538408 53.9347 0.928932C53.5442 1.31946 53.5442 1.95262 53.9347 2.34315L59.5916 8L53.9347 13.6569C53.5442 14.0474 53.5442 14.6805 53.9347 15.0711C54.3253 15.4616 54.9584 15.4616 55.349 15.0711L61.7129 8.70711ZM1 9H61.0058V7H1V9Z"
                                            fill="white" />
                                    </svg>

                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
            <div class="loadmore-btn text-center pt-40 lg:pt-[55px] fadeText">
                <a href="javascript:void(0)" id="load-more-career" role="link" aria-label="Learn More"
                    class="btn btn-green-300">
                    Load More
                </a>
                <a href="javascript:void(0)" id="view-less-career" role="link" aria-label="View Less"
                    class="btn btn-green-300">View Less</a>
            </div>
        </div>
    </section>
@endif
