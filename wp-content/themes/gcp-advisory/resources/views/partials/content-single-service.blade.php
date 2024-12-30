@if ($ServiceContentdata)
    @foreach ($ServiceContentdata as $content)
        @if ($content->layout == 'simple_content')
            @include('partials.sections.service.simple_content')
        @elseif ($content->layout == 'inner_banner')
            @include('partials.sections.service.inner_banner')
        @elseif ($content->layout == 'testimonial_slider')
            @include('partials.sections.service.testimonial_slider')
        @elseif ($content->layout == 'cta_section')
            @include('partials.sections.service.cta_section')
        @elseif ($content->layout == 'content_grid')
            @include('partials.sections.service.content_grid')
        @elseif ($content->layout == 'form_section')
            @include('partials.sections.service.form_section')
        @endif
    @endforeach
@endif
