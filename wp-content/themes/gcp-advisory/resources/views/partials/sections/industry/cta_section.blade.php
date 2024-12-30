@if (isset($content->hide_section) && $content->hide_section == 'no')
    <section
        class="green-general-content py-40 lg:py-70 bg-green-200 text-center @if ($content->extra_class) {!! $content->extra_class !!} @endif"
        @if ($content->id) id="{!! $content->id !!}" @endif>
        <div class="container-fluid-lg">
            @if (!empty($content->heading))
                <div class="title title-white">
                    <h2>{!! $content->heading !!}</h2>
                </div>
            @endif
            @if (!empty($content->description))
                <div class="content title-white pt-20 lg:max-w-[1400px] mx-auto">
                    {!! $content->description !!}
                </div>
            @endif
        </div>
    </section>
@endif
