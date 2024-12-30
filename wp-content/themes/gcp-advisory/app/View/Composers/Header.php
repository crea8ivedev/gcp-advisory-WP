<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Header extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = ['partials.header', 'partials.content-single', 'partials.footer', 'sections.header', 'sections.footer', 'index', '404'];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            //Header
            'header_black_logo' => get_field('header_black_logo', 'option'),
            'header_white_logo' => get_field('header_white_logo', 'option'),
            'announcement_bar' => get_field('announcement_bar', 'option'),
            'primary_buttons' => get_field('primary_buttons', 'option'),

            'blog_single_title' => get_field('blog_single_title', 'option'),
            'blog_single_banner' => get_field('blog_single_banner', 'option'),

            // Footer
            'copyright_text' => get_field('copyright_text', 'option'),
            'footer_first_menu_title' => get_field('footer_first_menu_title', 'option'),
            'footer_second_menu_title' => get_field('footer_second_menu_title', 'option'),
            'footer_third_menu_title' => get_field('footer_third_menu_title ', 'option'),
            'footer_social_media' => get_field('footer_social_media', 'option'),
            'phone' => get_field('phone', 'option'),

            // 404
            'error_image' => get_field('error_image', 'option'),
            'error_heading' => get_field('error_heading', 'option'),
            'error_description' => get_field('error_description', 'option'),

            // Post Detail
            'career_banner_image' => get_field('career_banner_image', 'option'),
            'career_banner_heading' => get_field('career_banner_heading', 'option'),

            // Search
            'search_heading' => get_field('search_heading', 'option'),
            'search_banner_image' => get_field('search_banner_image', 'option'),
        ];
    }
}
