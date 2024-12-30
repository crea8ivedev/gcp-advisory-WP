@if (isset($content->hide_section) && $content->hide_section == 'no')
    @if ($content->style == 'style_1')
        @php
            $main_div = 'content big lg:max-w-[1312px] mx-auto text-center pt-20 fadeText';
        @endphp
    @else($content->style == 'style_2')
        @php
            $main_div = 'content sub lg:max-w-[1312px] mx-auto text-center pt-20 fadeText';
        @endphp
    @endif
    <section
        class="general-content pt-20 pb-40 xl2:pb-80 bg-white @if ($content->extra_class) {!! $content->extra_class !!} @endif"
        @if ($content->id) id="{!! $content->id !!}" @endif>
        <div class="container-fluid-lg">
            @if (!empty($content->image))
                <div class="general-conent-icon fadeText mx-auto w-[60px] h-[60px] lg:w-[80px] lg:h-[80px] xl2:w-[120px] xl2:h-[120px]">
                    <img class="mx-auto img-fluid" src="{!! $content->image['url'] !!}" alt="{!! $content->image['alt'] !!}" width="120"
                        height="120">
                </div>
            @endif
            @if (!empty($content->title))
                <div class="title title-green text-center pt-20 fadeText">
                    <h2>{!! $content->title !!}</h2>
                </div>
            @endif
            @if (!empty($content->description))
                <div class="{!! $main_div !!}">
                    {!! $content->description !!}
                </div>
            @endif
        </div>
    </section>
@endif
