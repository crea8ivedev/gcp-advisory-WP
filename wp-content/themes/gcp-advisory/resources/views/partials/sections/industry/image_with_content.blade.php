@if (isset($content->hide_section) && $content->hide_section == 'no')
    @if ($content->image_position == 'left' && $content->background == 'yes')
        @php
            $image_position = 'image_left zigzag-reverse-pattern';
            $main_div = 'flex gap-[30px] items-center lg:gap-[100px] 1023:flex-wrap';
            $alignment = "text-center";
        @endphp
    @elseif ($content->image_position == 'left')
        @php
            $image_position = 'image_left';
            $main_div = 'flex gap-[30px] items-center lg:gap-[100px] 1023:flex-wrap';
            $alignment = "text-center";
        @endphp
    @elseif($content->image_position == 'right' && $content->background == 'yes')
        @php
            $image_position = 'image_right zigzag-pattern';
            $main_div = 'flex items-center gap-[40px] xxxl:gap-[100px] flex-row-reverse 1023:flex-wrap';
            $alignment = "";
        @endphp
    @else
        @php
            $image_position = 'image_right';
            $main_div = 'flex items-center gap-[40px] xxxl:gap-[100px] flex-row-reverse 1023:flex-wrap';
            $alignment = "";
        @endphp
    @endif
    @if ($content->style == 'style_1')
        <section
            class="zigzag-wrapper py-70 relative {!! $image_position !!} @if ($content->extra_class) {!! $content->extra_class !!} @endif "
            @if ($content->id) id="{!! $content->id !!}" @endif>
            <div class="container-fluid-lg">
                <div class="{!! $main_div !!}">
                    @if (!empty($content->image))
                        <div class="w-full lg:w-[56%]">
                            <div class="zigzag-img relative pt-[65.84%] h-full fadeText">
                                <img class="img-ratio lozad" src="{!! $content->image['url'] !!}" alt="{!! $content->image['alt'] !!}"
                                    width="644" height="424">
                            </div>
                        </div>
                    @endif
                    <div class="w-full lg:w-[44%]">
                        <div class="zigzag-content">
                            <div class="title-content {!! $alignment !!}">
                                @if (!empty($content->heading))
                                    <div
                                        class="title title-capitalize title-green  items-center gap-[20px] fadeText">
                                        <h2>{!! $content->heading !!}</h2>
                                    </div>
                                @endif
                                @if (!empty($content->description))
                                    <div class="content pt-20 fadeText">
                                        {!! $content->description !!}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="zigzag-wrapper py-70 relative {!! $image_position !!}">
            <div class="container-fluid-lg">
                <div class="{!! $main_div !!}">
                    @if (!empty($content->image))
                        <div class="w-full lg:w-[55%]">
                            <div class="zigzag-img relative pt-[54%] h-full fadeText">
                                <img class="img-ratio lozad" src="{!! $content->image['url'] !!}"
                                    alt="{!! $content->image['alt'] !!}" width="644" height="424">
                            </div>
                        </div>
                    @endif
                    <div class="w-full lg:w-[45%]">
                        <div class="zigzag-content">
                            <div class="title-content">
                                @if (!empty($content->heading))
                                    <div
                                        class="title title-capitalize title-green flex items-center gap-[20px] fadeText">
                                        <h2>{!! $content->heading !!}</h2>
                                    </div>
                                @endif
                                @if (!empty($content->button))
                                    <div class="btn-custom pt-[28px] fadeText">
                                        <a href="{!! $content->button['url'] !!}" role="link" aria-label="Learn More"
                                            class="btn btn-green-300 flex items-center gap-[10px]">
                                            Learn More
                                            <svg width="62" height="16" viewBox="0 0 62 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM61.7129 8.70711C62.1034 8.31658 62.1034 7.68342 61.7129 7.29289L55.349 0.928932C54.9584 0.538408 54.3253 0.538408 53.9347 0.928932C53.5442 1.31946 53.5442 1.95262 53.9347 2.34315L59.5916 8L53.9347 13.6569C53.5442 14.0474 53.5442 14.6805 53.9347 15.0711C54.3253 15.4616 54.9584 15.4616 55.349 15.0711L61.7129 8.70711ZM1 9H61.0058V7H1V9Z"
                                                    fill="white" />
                                            </svg>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endif
