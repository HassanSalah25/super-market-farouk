<?php


namespace App\PageBuilder\Addons\Blog;


use App\Blog;
use App\Helpers\SanitizeInput;
use App\PageBuilder\Fields\NiceSelect;
use App\PageBuilder\Fields\Slider;
use App\PageBuilder\Helpers\Traits\RepeaterHelper;
use App\PageBuilder\PageBuilderBase;
use Modules\Product\Entities\ProductCategory;

class BlogSliderOne extends PageBuilderBase
{
    use RepeaterHelper;

    /**
     * widget_title
     * this method must have to implement by all widget to register widget title
     * @since 1.0.0
     * */
    public function addon_title()
    {
        return __('Blog Slider: 01');
    }

    /**
     * preview_image
     * this method must have to implement by all widget to show a preview image at admin panel so that user know about the design which he want to use
     * @since 1.0.0
     * */
    public function preview_image()
    {
        return 'blog/slider/01.jpg';
    }

    /**
     * admin_render
     * this method must have to implement by all widget to render admin panel widget content
     * @since 1.0.0
     * */
    public function admin_render()
    {
        $output = $this->admin_form_before();
        $output .= $this->admin_form_start();
        $output .= $this->default_fields();
        $widget_saved_values = $this->get_settings();
//
//        $categories = ProductCategory::select('id', 'title')->get()->pluck('title', 'id')->toArray();
//        $output .= NiceSelect::get([
//            'name' => 'categories',
//            'multiple' => true,
//            'label' => __('Categories'),
//            'placeholder' =>  __('Select Categories'),
//            'options' => $categories,
//            'value' => $widget_saved_values['categories'] ?? null,
//            'info' => __('You can select categories that you want to display. If you want to show all category leave it empty')
//        ]);
//
//        // padding
//        $output .= Slider::get([
//            'name' => 'padding_top',
//            'label' => __('Padding Top'),
//            'value' => $widget_saved_values['padding_top'] ?? 90,
//            'max' => 500,
//        ]);
//        $output .= Slider::get([
//            'name' => 'padding_bottom',
//            'label' => __('Padding Bottom'),
//            'value' => $widget_saved_values['padding_bottom'] ?? 200,
//            'max' => 500,
//        ]);
        $output .= $this->admin_form_submit_button();
        $output .= $this->admin_form_end();
        $output .= $this->admin_form_after();

        return $output;
    }

    /**
     * frontend_render
     * this method must have to implement by all widget to render frontend widget content
     * @since 1.0.0
     * */
    public function frontend_render(): string
    {
        $selected_categories = $this->setting_item('blogs');
        if (empty($selected_categories)) {
            $blogs = Blog::orderBy('id', 'desc')->take(3)->get();
        } else {
            $blogs = Blog::whereIn('id', $selected_categories)->orderBy('id', 'desc')->take(3)->get();
        }

        $section_data = [
            'blogs' => $blogs,
            'padding_top' => SanitizeInput::esc_html($this->setting_item('padding_top')),
            'padding_bottom' => SanitizeInput::esc_html($this->setting_item('padding_bottom')),
        ];

        return $this->renderBlade('blogs.blog_slider_one', $section_data);
    }
}
