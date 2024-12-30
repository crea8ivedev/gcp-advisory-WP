<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class IndustrieContent extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = ['partials.content-single-industry'];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'IndustrieContentdata' => $this->IndustrieContentdata(),
        ];
    }

    /**
     * Get ACF repeater field.
     *
     * @return array
     */

    public function IndustrieContentdata()
    {
        $data = [];
        $flexible_content = get_field('industries_content');
        if ($flexible_content) {
            foreach ($flexible_content as $content) {
                if ($content['acf_fc_layout'] == 'simple_content') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'style' => $content['style'],
                        'title' => $content['title'],
                        'image' => $content['image'],
                        'description' => $content['description'],
                        'icon_grid' => $content['icon_grid'],
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
                } elseif ($content['acf_fc_layout'] == 'cta_section') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'description' => $content['description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'form_section') {
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
                }
            }
        }
        return $data;
    }
}
