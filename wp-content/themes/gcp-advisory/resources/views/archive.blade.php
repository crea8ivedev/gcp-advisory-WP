<?php
/*
Template Name: Archives
*/
?>

@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    @php
      $search_banner_image = get_field('search_banner_image', 'option');
      $search_heading = get_field('search_heading', 'option');
      $form_title_option = get_field('form_title', 'option');
      $form_shortcode_option = get_field('form_shortcode', 'option');
    @endphp
    @php

    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $posts_per_page = 9;
    $blog_arr = [];
    $post_arg = [
        'post_type' => 'post',
        'posts_per_page' => $posts_per_page,
        'paged' => $paged,
        'post_status' => 'publish',
        'orderby' => 'ID',
        'order' => 'ASC',
    ];
    $blog_post_query = new \WP_Query($post_arg);
    $blog_count_data = $blog_post_query->found_posts;
    if ($blog_post_query->have_posts()) {
        while ($blog_post_query->have_posts()):
            $blog_post_query->the_post();
            $fea_img = '';
            if (get_the_post_thumbnail_url()) {
                $fea_img = get_the_post_thumbnail_url();
            }
            if (!empty(get_the_excerpt())) {
$b_desc = wpautop(wp_trim_words(get_the_excerpt(), 20)); // Limit excerpt to 20 words
$b_desc_del = str_replace('&nbsp;', ' ', $b_desc); // Remove unnecessary spaces
} else {
$b_desc_del = ''; // Fallback if no excerpt is available
}

            $all_category_details = get_the_category(get_the_ID());
            $blog_arr[] = [
                'id' => get_the_ID(),
                'title' => get_the_title(),
                'url' => get_the_permalink(),
                'fea_img' => $fea_img,
                'excerpt_desc' => $b_desc_del,
                'all_category_detail' => $all_category_details,
                'post_date' => get_the_date('M d, Y'),
                'post_author' => get_the_author(),
                'post_author_link' => get_author_posts_url(get_the_author_meta('ID')),
            ];
        endwhile;
        wp_reset_postdata();
        $total_pages = $blog_post_query->max_num_pages;
    }
@endphp
    <section class="banner-wrapper inner-banner relative w-full bg-white">
        @if (!empty($search_banner_image))
            <div class="img absolute top-0 left-0 w-full !h-full overflow-hidden">
                <img src="{!! $search_banner_image['url'] !!}" width="3024" height="1776" class="w-full h-full object-cover"
                    alt="{!! $search_banner_image['alt'] !!}">
            </div>
        @endif
        <div class="banner-cta relative z-1 h-full">
            <div class="container-fluid-lg h-full">
                <div class="content text-center h-full">
                    <div class="slider-content h-full flex justify-center lg:justify-end items-center flex-col pt-[150px] pb-[100px] xl2:pt-120 xl2:pb-[130px]">
                        <div class="title title-white title-uppercase">
                          @if (is_category())
                          @php $activecategory = get_queried_object(); @endphp
                          <h1>Category: @php echo $activecategory->name; @endphp </h1>
                          @elseif(is_author())
                          @php $author_name = get_user_by('slug', get_query_var('author_name')); @endphp
                          <h1>Author: @php echo $author_name->display_name @endphp</h1>
                          @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cmn-pattern w-full absolute bottom-[-4px] right-0 left-0 z-1">
            <img src="@asset('images/banner-pattern.png')" alt="pattern" class="w-full block object-contain h-full">
        </div>

    </section>
    @if ($blog_arr)
    <section class="blog-grid-wrapper pt-20 pb-70 ">
        <div class="container-fluid-lg">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 lg:gap-x-[55px] lg:gap-y-10 gap-5">
                @foreach ($blog_arr as $key => $blog_details)
                    <div class="blog-item">
                        <div class="blog-img mb-20">
                            @if ($blog_details['fea_img'])
                                <img class="img-fluid" src="{!! $blog_details['fea_img'] !!}" class="w-full h-full object-cover"
                                    alt="{!! $blog_details['title'] !!}" width="360.67" height="260">
                            @else
                                <img class="img-fluid" src="@asset('images/placeholder.jpg')" alt="{!! $blog_details['title'] !!}" width="360.67"
                                    height="260" class="rounded-100">
                            @endif
                        </div>
                        <div class="blog-content">
                            <span class="blog-pattern"></span>
                            <div class="blog-title title-green title-nunito">
                                <h3>
                                  {!! $blog_details['title'] !!}
                                </h3>
                            </div>
                            <ul class="blog-cate">
                                <li>
                                    <a href="{!! $blog_details['post_author_link'] !!}">
                                        <img src="@asset('images/profile-fill.svg')" height="24" width="24"
                                            alt="profile">
                                            {!! $blog_details['post_author'] !!}
                                    </a>
                                </li>
                                <li>
                                    <span>
                                        <img src="@asset('images/date-fill.svg')" height="24" width="24"
                                            alt="date">
                                            {!! $blog_details['post_date'] !!}
                                    </span>
                                </li>
                                @if ($blog_details['all_category_detail'])
                                      @php $all_category_detail_length = count($blog_details['all_category_detail']); @endphp
                                      <li>
                                      <span>
                                        <img src="@asset('images/category-fill.svg')" height="24" width="24" alt="Category">
                                          @php
                                              $blog_grid = '';
                                              foreach ($blog_details['all_category_detail'] as $key => $cate) {
                                                  $cat_link = get_category_link($cate->term_id);
                                                  $blog_grid .=
                                                      '<a href="' . $cat_link . '">' . $cate->name . '</a>';
                                                  if ($key !== $all_category_detail_length - 1) {
                                                      $blog_grid .= ', ';
                                                  }
                                          } @endphp
                                          {!! $blog_grid !!}
                                        </span>
                                      </li>
                                @endif
                            </ul>

                            @if ($blog_details['excerpt_desc'])
                            <div class="blog-desc sub">
                             {!! $blog_details['excerpt_desc'] !!}
                            </div>
                            @endif
                            <div class="blog-link">
                                <a href="{!! $blog_details['url'] !!}" class="btn btn-greenborder">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @if ($blog_count_data > 9)
            <div
                class="flex flex-wrap items-center justify-center m-0 lg:mt-[48px] mt-40 p-0 w-full gap-6 lg:gap-12">
                @php
                    $has_previous = $paged > 1;
                    $has_next = $paged < $total_pages;
                    $prev_button = $has_previous
                        ? '<div class="nav-previous btn btn-greenborder cursor-pointer"><a href="' .
                            get_pagenum_link($paged - 1) .
                            '" aria-label="Previous Page" class="btn btn-b-silver">Previous Page</a></div>'
                        : '';
                    $next_button = $has_next
                        ? '<div class="nav-next btn btn-green-300 cursor-pointer"><a href="' .
                            get_pagenum_link($paged + 1) .
                            '" aria-label="Next Page" class="btn btn-silver">Next Page</a></div>'
                        : '';
                @endphp
                {!! $prev_button !!}
                {!! $next_button !!}
          </div>
          @endif
    </section>
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
