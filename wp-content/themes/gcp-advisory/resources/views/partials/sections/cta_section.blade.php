@if (isset($content->hide_section) && $content->hide_section == 'no')
    <section class="green-general-content py-[28px] bg-green-200 text-center @if ($content->extra_class) {!! $content->extra_class !!} @endif"
        @if ($content->id) id="{!! $content->id !!}" @endif>
        <div class="container-fluid-lg">
            @if (!empty($content->heading))
            <div class="title title-white fadeText">
                <h2>{!! $content->heading !!}</h2>
            </div>
            @endif
            @if (!empty($content->button))
            <div class="btn-custom pt-[16px] fadeText">
                <a href="{!! $content->button['url'] !!}" role="link" aria-label="{!! $content->button['title'] !!}" class="btn btn-green-100">
                    {!! $content->button['title'] !!}
                </a>
            </div>
            @endif
        </div>
    </section>
@endif
