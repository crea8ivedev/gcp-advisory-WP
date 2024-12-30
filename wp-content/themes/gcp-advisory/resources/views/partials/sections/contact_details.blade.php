@if (isset($content->hide_section) && $content->hide_section == 'no')
    <section
        class="contact-zigzag py-70 relative image-left @if ($content->extra_class) {!! $content->extra_class !!} @endif"
        @if ($content->id) id="{!! $content->id !!}" @endif>
        <div class="container-fluid-lg">
            <div class="flex gap-[40px] xxxl:gap-[55px] 1023:flex-wrap items-center">
                @if (!empty($content->map))
                    <div class="w-full lg:w-[55%]">
                        <div class="zigzag-img relative h-full fadeText rounded-10">
                            {!! $content->map !!}
                        </div>
                    </div>
                @endif
                <div class="w-full lg:w-[45%]">
                    <div class="zigzag-content">
                        <div class="title-content fadeText">
                            @if (!empty($content->title))
                                <div class="title title-capitalize title-green flex items-center gap-[20px]">
                                    <h2>{!! $content->title !!}</h2>
                                </div>
                            @endif
                            <div class="common-pattern mt-20"></div>
                            @if (!empty($content->contact_information))
                                <div class="contact-list mt-30 fadeText">
                                    <ul>
                                        @foreach ($content->contact_information as $contact)
                                            <li>
                                                @if (!empty($contact['icon']))
                                                    <img src="{!! $contact['icon']['url'] !!}" alt="{!! $contact['icon']['title'] !!}"
                                                        width="20" height="20">
                                                @endif
                                                @if (!empty($contact['description']))
                                                    <span>{!! $contact['description'] !!}</span>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
