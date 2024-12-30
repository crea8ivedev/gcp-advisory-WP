@if ($IndustrieContentdata)
    @foreach ($IndustrieContentdata as $content)
        @if ($content->layout == 'simple_content')
            @include('partials.sections.industry.simple_content')
        @elseif ($content->layout == 'inner_banner')
            @include('partials.sections.industry.inner_banner')
        @elseif ($content->layout == 'cta_section')
            @include('partials.sections.industry.cta_section')
        @elseif ($content->layout == 'form_section')
            @include('partials.sections.industry.form_section')
        @elseif ($content->layout == 'image_with_content')
            @include('partials.sections.industry.image_with_content')
        @endif
    @endforeach
@endif
