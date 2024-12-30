@if (isset($content->hide_section) && $content->hide_section == 'no')
    <section
        class="benefits-grid-wrapper py-70 relative @if ($content->extra_class) {!! $content->extra_class !!} @endif "
        @if ($content->id) id="{!! $content->id !!}" @endif>
        <div class="container-fluid-lg">
            <div class="title-content text-center">
                @if (!empty($content->title))
                    <div class="title title-capitalize title-green fadeText">
                        <h2>{!! $content->title !!}</h2>
                    </div>
                @endif
                @if (!empty($content->title))
                    <div class="content pt-20 fadeText">
                        <p>It brings our leadership team great joy to deliver on these aspirations</p>
                    </div>
                @endif
            </div>
            @if (!empty($content->icon_grid))
                <div
                    class="benefits-grid grid pt-40 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[20px] lg:gap-[55px] lg:gap-y-[40px] fadeText">
                    @foreach ($content->icon_grid as $icon_grid)
                        <div class="grid-box text-center">
                            @if (!empty($icon_grid['icon']))
                                <div class="benefits-icon w-[80px] h-[80px]">
                                    <img class="img-fluid lozad" src="{!! $icon_grid['icon']['url'] !!}"
                                        alt="{!! $icon_grid['icon']['alt'] !!}" width="80" height="80">
                                </div>
                            @endif
                            <div class="common-pattern mt-20"></div>
                            @if (!empty($icon_grid['heading']))
                                <div class="benefits-title title-green title-nunito pt-20">
                                    <h4>{!! $icon_grid['heading'] !!}</h4>
                                </div>
                            @endif
                            @if (!empty($icon_grid['description']))
                                <div class="content pt-10">
                                    {!! $icon_grid['description'] !!}
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endif
