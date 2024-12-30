@if (isset($content->hide_section) && $content->hide_section == 'no')
    <section class=" @if ($content->extra_class) {!! $content->extra_class !!} @endif"
        @if ($content->id) id="{!! $content->id !!}" @endif>
        @if (!empty($content->description))
            {!! $content->description !!}
        @endif

        {!! get_the_id() !!}
    </section>
@endif
