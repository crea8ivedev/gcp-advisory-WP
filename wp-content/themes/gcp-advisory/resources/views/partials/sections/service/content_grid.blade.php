@if (isset($content->hide_section) && $content->hide_section == 'no')
    <section
        class="services-grid-wrapper py-40 xl2:py-55 relative bg-green-200 @if ($content->extra_class) {!! $content->extra_class !!} @endif"
        @if ($content->id) id="{!! $content->id !!}" @endif>
        <div class="container-fluid-lg">
            <div class="title-content text-center fadeText">
                @if (!empty($content->heading))
                    <div class="title title-capitalize title-white">
                        <h2>{!! $content->heading !!}</h2>
                    </div>
                @endif
                @if (!empty($content->sub_heading))
                    <div class="sub title-white title-nunito">
                        <h3>{!! $content->sub_heading !!}</h3>
                    </div>
                @endif
            </div>
            @if (!empty($content->grid))
                <div class="services-grid pt-20 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[28px] fadeText">
                    @foreach ($content->grid as $grid)
                        @php
                            // Calculate the class based on the iteration
                            $class_group = 'class_' . ceil($loop->iteration / 3);
                        @endphp
                        <div class="grid-box py-20 px-10 bg-[#F6EFE5] rounded-[10px] text-center">
                            <div class="common-pattern {{ $class_group }}"></div> <!-- Dynamic class applied here -->
                            <div class="content pt-10">
                                <p>{!! $grid['content'] !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endif
