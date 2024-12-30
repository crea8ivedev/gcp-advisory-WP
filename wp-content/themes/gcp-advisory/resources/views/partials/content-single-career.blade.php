@php
    $banner_image = get_field('banner_image', get_the_id());
    $banner_title = get_field('banner_title', get_the_id());
    $designation = get_field('designation', get_the_id());
    $form_title = get_field('form_title', get_the_id());
    $form_shortcode = get_field('form_shortcode', get_the_id());
    $content = get_the_content(get_the_id());
    $information_grid = get_field('information_grid', get_the_id());
    $heading = get_the_title(get_the_id());
    $featured_image_id = get_post_thumbnail_id(get_the_ID());
    $featured_image_url = wp_get_attachment_image_url($featured_image_id, 'full');
    $featured_image_alt = get_post_meta($featured_image_id, '_wp_attachment_image_alt', true);
    $form_title_option = get_field('form_title', 'option');
    $form_shortcode_option = get_field('form_shortcode', 'option');
@endphp
<section class="banner-wrapper inner-banner relative w-full bg-white">
    @if (!empty($banner_image))
        <div class="img absolute top-0 left-0 w-full !h-full overflow-hidden">
            <img src="{!! $banner_image['url'] !!}" width="3024" height="1776" class="w-full h-full object-cover lozad"
                alt="{!! $banner_image['url'] !!}">
        </div>
    @endif
    @if (!empty($banner_title))
        <div class="banner-cta relative z-1 h-full">
            <div class="container-fluid-lg h-full">
                <div class="content text-center h-full">
                    <div class="slider-content h-full flex justify-center lg:justify-end items-center flex-col pt-[150px] pb-[100px] xl2:pt-120 xl2:pb-[130px]">
                        <div class="title title-white title-uppercase fadeText">
                            <h1>
                                {!! $banner_title !!}
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="cmn-pattern w-full absolute bottom-[-1px] xl4:bottom-[-4px] right-0 left-0 z-1">
        <svg width="1512" height="70" viewBox="0 0 1512 70" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M756 0L1512 70H0L756 0Z" fill="white" />
        </svg>
    </div>
</section>

<section class="zigzag-wrapper py-70 relative">
    <div class="container-fluid-lg">
        <div class="flex items-center gap-[40px] xxxl:gap-[100px] 1023:flex-wrap">
            @if (!empty($featured_image_url))
                <div class="w-full lg:w-[55%]">
                    <div class="zigzag-img relative pt-[65.84%] h-full fadeText">
                        <img class="img-ratio lozad" src="{!! $featured_image_url !!}" alt="{!! $featured_image_alt !!}"
                            width="644" height="424">
                    </div>
                </div>
            @endif
            <div class="w-full lg:w-[45%]">
                <div class="zigzag-content">
                    <div class="title-content">
                        @if (!empty($heading))
                            <div class="title title-capitalize title-green flex items-center gap-[20px] fadeText">
                                <h2>{!! $heading !!}</h2>
                            </div>
                        @endif
                        @if (!empty($designation))
                            <div class="subtitle title-green title-nunito fadeText">
                                <h3>{!! $designation !!}</h3>
                            </div>
                        @endif
                        @if (!empty($content))
                            <div class="content pt-20 fadeText">
                                {!! $content !!}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@if (!empty($information_grid))
    <section class="roles-responsibility-wrapper py-40 lg:py-70 bg-green-200 relative">
        <div class="container-fluid-lg">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[30px] xxxl:gap-[55px] fadeText">
                @foreach ($information_grid as $information)
                    <div class="content title-white title-bold white-list text-center">
                        <h3>{!! $information['heading'] !!}</h3>
                        {!! $information['points'] !!}
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif

<section class="zigzag-form zigzag-wrapper zigzag-pattern relative py-[72px] text-center">
  <div class="title title-capitalize title-green flex items-center gap-[20px] fadeText justify-center pb-40">
    <h2>
      @if (!empty($form_title))
          {!! $form_title !!}
      @endif
    </h2>
  </div>
    @if (!empty($form_shortcode))
        {!! do_shortcode($form_shortcode) !!}
    @endif
</section>

<section class="relative py-40 bg-cream request-form">
    <div class="container-fluid-lg">
        @if (!empty($form_title_option))
            <div class="title-green title-bold mb-20 1023:text-center fadeText">
                <h3>{!! $form_title_option !!}</h3>
            </div>
        @endif
        @if (!empty($form_shortcode_option))
            <div class="request-form-inner fadeText">
                {!! do_shortcode($form_shortcode_option) !!}
        @endif
    </div>
</section>
