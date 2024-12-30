@if (isset($content->hide_section) && $content->hide_section == 'no')
    <section class="relative py-40 bg-cream request-form @if ($content->extra_class) {!! $content->extra_class !!} @endif"
        @if ($content->id) id="{!! $content->id !!}" @endif>
        <div class="container-fluid-lg">
            @if (!empty($content->heading))
                <div class="title-green title-bold mb-20 1023:text-center fadeText">
                    <h3>{!! $content->heading !!}</h3>
                </div>
            @endif
            @if (!empty($content->shortcode))
                <div class="request-form-inner fadeText">
                    {!! do_shortcode($content->shortcode) !!}
            @endif
        </div>
    </section>
@endif
