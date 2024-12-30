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
            @if ($content->style == 'style_2')
                @if (!empty($content->icon_grid))
                    <div
                        class="benefits-grid grid pt-[28px] grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[20px] lg:gap-[40px] lg:max-w-[1312px] mx-auto fadeText">
                        @foreach ($content->icon_grid as $icon_grid)
                            <div class="grid-box text-center">
                                @if (!empty($icon_grid['icon']))
                                    <div class="benefits-icon w-[50px] h-[50px] xl2:w-[80px] xl2:h-[80px] mx-auto">
                                        <img class="img-fluid lozad" src="{!! $icon_grid['icon']['url'] !!}"
                                            alt="{!! $icon_grid['icon']['alt'] !!}" width="80" height="80">
                                    </div>
                                @endif
                                <div class="common-pattern mt-20 bg-green-200"></div>
                                @if (!empty($icon_grid['title']))
                                    <div class="benefits-title title-green title-nunito pt-20">
                                        <h4>{!! $icon_grid['title'] !!}</h4>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @endif
            @endif
        </div>
    </section>
@endif
