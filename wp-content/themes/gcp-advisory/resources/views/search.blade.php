@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    @php
        $search_banner_image = get_field('search_banner_image', 'option');
        $search_heading = get_field('search_heading', 'option');

        $args = [
            's' => get_query_var('s'),
            'post_type' => ['post', 'page'],
            'post_status' => 'publish',
            'orderby' => 'publish_date',
            'order' => 'DESC',
            'posts_per_page' => -1,
        ];
        $search_query = new WP_Query($args);
        $count_data = $search_query->found_posts;
        $form_title_option = get_field('form_title', 'option');
        $form_shortcode_option = get_field('form_shortcode', 'option');
    @endphp
    <section class="banner-wrapper inner-banner relative w-full bg-white">
        @if (!empty($search_banner_image))
            <div class="img absolute top-0 left-0 w-full !h-full overflow-hidden">
                <img src="{!! $search_banner_image['url'] !!}" width="3024" height="1776" class="w-full h-full object-cover"
                    alt="{!! $search_banner_image['alt'] !!}">
            </div>
        @endif
        @if (!empty($search_heading))
            <div class="banner-cta relative z-1 h-full">
                <div class="container-fluid-lg h-full">
                    <div class="content text-center h-full">
                        <div
                            class="slider-content h-full flex justify-end items-center flex-col pt-[150px] pb-[100px] lg:pt-120 lg:pb-[150px]">
                            <div class="title title-white title-uppercase">
                                <h1>
                                    {!! $search_heading !!}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="cmn-pattern w-full absolute bottom-[-4px] right-0 left-0 z-1">
            <img src="@asset('images/banner-pattern.png')" alt="pattern" class="w-full block object-contain h-full">
        </div>

    </section>
    @if ($search_query->have_posts())
        <section class="search-grid-wrapper py-70 relative">
            <div class="industries-content relative z-1">
                <div class="container-fluid-lg">
                    <div class="search-box flex items-center justify-end">
                        <form class="w-full md:w-4/12 block" action="<?php echo home_url(); ?>" role="search" method="get">
                            <div class="search-box-inner lg:py-40 py-20">
                                <label for="search" class="block w-0 h-0" style="visibility: hidden;">Name</label>
                                <input type="text" id="search" name="s" placeholder="Search..." class="">
                            </div>
                        </form>
                    </div>
                    <div
                        class="search-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[20px] lg:gap-y-[40px] lg:gap-x-[55px]">
                        @while (have_posts())
                            @php(the_post())
                            <div class="grid-box bg-white rounded-[20px] shadow-card p-20 text-center">
                                <div class="grid-img relative pt-[72.22%]">
                                    @if (!empty(get_the_post_thumbnail_url()))
                                        <a href="{!! get_the_permalink() !!}" role="link" aria-label="read more">
                                            <img src="{!! get_the_post_thumbnail_url() !!}" width="360" height="260"
                                                class="img-ratio lozad" alt="{!! get_the_title() !!}">
                                        </a>
                                    @else
                                        <a href="{!! get_the_permalink() !!}" role="link" aria-label="read more">
                                            <img src="@asset('images/placeholder.jpg')" width="360" height="260"
                                                class="img-ratio lozad" alt="{!! get_the_title() !!}">
                                        </a>
                                    @endif
                                </div>
                                <div class="common-pattern mt-20 mx-auto"></div>
                                @if (get_the_title())
                                    <div class="grid-title title-green title-nunito title-capitalize pt-20">
                                        <a href="{!! get_the_permalink() !!}" role="link" aria-label="read more">
                                            <h3>{!! get_the_title() !!}</h3>
                                        </a>
                                    </div>
                                @endif
                                <div class="content pt-20">
                                    @if (!empty(get_the_excerpt()))
                                        <?php
                                        $b_desc = wpautop(wp_trim_words(get_the_excerpt(), 20));
                                        $b_desc_del = str_replace('&nbsp;', ' ', $b_desc);
                                        ?>
                                        {!! $b_desc_del !!}
                                    @endif
                                </div>
                                @if (!empty(get_the_permalink()))
                                    <div class="btn-custom pt-20">
                                        <a href="{!! get_the_permalink() !!}" role="link" aria-label="read more"
                                            class="btn btn-greenborder">
                                            read more
                                        </a>
                                    </div>
                                @endif
                            </div>
                        @endwhile
                    </div>
                </div>
            </div>
        </section>
    @else
        <div class="search-page w-full py-70 1023:py-40">
            <div class="container-fluid-lg">
                <div class="search-box flex items-center justify-end">
                    <form class="w-full md:w-4/12 block" action="<?php echo home_url(); ?>" role="search" method="get">
                        <div class="search-box-inner lg:py-40 py-20">
                            <label for="search" class="block w-0 h-0" style="visibility: hidden;">Name</label>
                            <input type="text" id="search" name="s" placeholder="Search..." class="">
                        </div>
                    </form>
                </div>
                <div class="content global-list text-center mb-20">
                    <x-alert type="warning" class="">
                        <h3 class="text-font">{!! __('Sorry, no results were found.', 'sage') !!}</h3>
                    </x-alert>
                </div>
                <div class="btn-custom text-center">
                    <a href="{{ site_url() }}" class="btn btn-greenborder">
                        Go Home
                    </a>
                </div>
            </div>
        </div>
    @endif
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
@endsection
