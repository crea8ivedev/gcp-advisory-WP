@if (isset($content->hide_section) && $content->hide_section == 'no')

    <section
        class="service-info-wrapper py-55 relative bubble_pattern @if ($content->extra_class) {!! $content->extra_class !!} @endif"
        @if ($content->id) id="{!! $content->id !!}" @endif>
        <div class="container-fluid-lg">
            <div class="title-content text-center fadeText">
                @if (!empty($content->heading))
                    <div class="title title-capitalize title-green">
                        <h2>{!! $content->heading !!}</h2>
                    </div>
                @endif
                @if (!empty($content->description))
                    <div
                        class="content services-content pt-20 lg:max-w-[1000px] mx-auto shadow-card p-[28px] mt-20 bg-white rounded-10">
                        {!! $content->description !!}
                    </div>
                @endif
            </div>
        </div>
    </section>
@endif
