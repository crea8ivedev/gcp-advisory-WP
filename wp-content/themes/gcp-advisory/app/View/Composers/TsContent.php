<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class TsContent extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = ['partials.content-ts'];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'tsContentData' => $this->tsContentData(),
        ];
    }

    public function tsContentData()
    {
        $data = [];
        $flexible_content = get_field('page_content');
        $placeholder_image = get_field('placeholder_card', 'option');
        $placeholder_banner = get_field('placeholder_banner', 'option');
        if ($flexible_content) {
            foreach ($flexible_content as $content) {
                if ($content['acf_fc_layout'] == 'banner') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'image_or_video' => $content['image_or_video'],
                        'video' => $content['video'],
                        'heading' => $content['heading'],
                        'banner_slider' => $content['banner_slider'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'simple_content') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'style' => $content['style'],
                        'title' => $content['title'],
                        'image' => $content['image'],
                        'description' => $content['description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'inner_banner') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'background_image' => $content['background_image'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'testimonial_slider') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'testimonials' => $content['testimonials'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'cta_section') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'button' => $content['button'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'service_chart') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'image' => $content['image'],
                        'services' => $content['services'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'industries_grid') {
                    $industries_arr = [];
                    $industries_arg = [
                        'post_type' => 'industry',
                        'posts_per_page' => '3',
                        'post_status' => 'publish',
                        'orderby' => 'ID',
                        'order' => 'ASC',
                    ];
                    $industries_query = new \WP_Query($industries_arg);
                    if ($industries_query->have_posts()) {
                        while ($industries_query->have_posts()):
                            $industries_query->the_post();
                            $featured_image_id = get_post_thumbnail_id();
                            $alt_text = get_post_meta($featured_image_id, '_wp_attachment_image_alt', true);
                            $fea_img = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : $placeholder_image;
                            $industries_arr[] = [
                                'id' => get_the_ID(),
                                'title' => get_the_title(),
                                'url' => get_the_permalink(),
                                'excerpt_desc' => get_the_excerpt(),
                                'fea_img' => $fea_img,
                                'alt_text' => $alt_text,
                            ];
                        endwhile;

                        wp_reset_postdata();
                    }
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'style' => $content['style'],
                        'image' => $content['image'],
                        'heading' => $content['heading'],
                        'industries_arr' => $industries_arr,
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }  elseif ($content['acf_fc_layout'] == 'people_grid') {
                    $peoples_arr = [];
                    $peoples_arg = [
                        'post_type' => 'peoples',
                        'posts_per_page' => '-1',
                        'post_status' => 'publish',
                        'orderby' => 'ID',
                        'order' => 'ASC',
                    ];
                    $peoples_query = new \WP_Query($peoples_arg);
                    if ($peoples_query->have_posts()) {
                        while ($peoples_query->have_posts()):
                            $peoples_query->the_post();
                            $featured_image_id = get_post_thumbnail_id();
                            $alt_text = get_post_meta($featured_image_id, '_wp_attachment_image_alt', true);
                            $fea_img = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : $placeholder_image;
                            $peoples_arr[] = [
                                'id' => get_the_ID(),
                                'title' => get_the_title(),
                                'url' => get_the_permalink(),
                                'excerpt_desc' => get_the_excerpt(),
                                'fea_img' => $fea_img,
                                'alt_text' => $alt_text,
                                'designation' => get_field('designation'),
                            ];
                        endwhile;
                        wp_reset_postdata();
                    }
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'peoples_arr' => $peoples_arr,
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }  elseif ($content['acf_fc_layout'] == 'form_section') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'shortcode' => $content['shortcode'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'image_with_content') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'background' => $content['background'],
                        'style' => $content['style'],
                        'image_position' => $content['image_position'],
                        'image' => $content['image'],
                        'heading' => $content['heading'],
                        'button' => $content['button'],
                        'description' => $content['description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }elseif ($content['acf_fc_layout'] == 'career_listing') {
                    $careers_arr = [];
                    $careers_arg = [
                        'post_type' => 'career',
                        'posts_per_page' => '-1',
                        'post_status' => 'publish',
                        'orderby' => 'ID',
                        'order' => 'ASC',
                    ];
                    $careers_query = new \WP_Query($careers_arg);
                    if ($careers_query->have_posts()) {
                        while ($careers_query->have_posts()):
                            $careers_query->the_post();
                            $careers_arr[] = [
                                'id' => get_the_ID(),
                                'title' => get_the_title(),
                                'url' => get_the_permalink(),
                                'excerpt_desc' => get_the_excerpt(),
                                'designation' => get_field('designation'),
                            ];
                        endwhile;
                        wp_reset_postdata();
                    }
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'sub_heading' => $content['sub_heading'],                        
                        'description' => $content['description'],
                        'careers_arr' => $careers_arr,
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'icon_with_content') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'sub_title' => $content['sub_title'],
                        'title' => $content['title'],
                        'icon_grid' => $content['icon_grid'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'common_content') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'description' => $content['description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'contact_details') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'title' => $content['title'],
                        'map' => $content['map'],
                        'contact_information' => $content['contact_information'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'contact_form') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'shortcode' => $content['shortcode'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'blog_listing') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'logo' => $content['logo'],
                        'heading' => $content['heading'],
                        'description' => $content['description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'general_content') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'description' => $content['description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }
            }
        }
        return $data;
    }
}
