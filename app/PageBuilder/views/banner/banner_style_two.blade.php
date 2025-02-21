@php $subtitles = $settings['banner_style_two']['subtitle_'] @endphp
<div class="rts-posters-section1 section-9 section-10">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <a href="{{ \App\traits\URL_PARSE::url($settings['banner_style_two']['button_url_'][0]) }}"
                   class="product-box product-box-medium product-box-medium5">
                    <div class="product-image product-image1">
                        {!! render_image_markup_by_attachment_id($settings['banner_style_two']['background_image_'][0], '', 'full', false) !!}
                    </div>
                    <div class="contents">
                        <span class="pretitle">{{ $subtitles[0] }}</span>
                        <h1 class="product-title">{!! str_replace('[brk]', '<br/>', $settings['banner_style_two']['title_'][0]) !!}</h1>
                        <div class="view-collections go-btn">{{ $settings['banner_style_two']['button_text_'][0] }} <i class="far fa-arrow-right"></i></div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <a href="{{ \App\traits\URL_PARSE::url($settings['banner_style_two']['button_url_'][1]) }}"
                   class="product-box product-box-medium product-box-medium3">
                    <div class="contents">
                        <h1 class="product-title">{!! str_replace('[brk]', '<br/>', $settings['banner_style_two']['title_'][1]) !!}</h1>
                        <div class="view-collections go-btn">{{ $settings['banner_style_two']['button_text_'][1] }} <i class="far fa-arrow-right"></i></div>
                    </div>
                    <div class="product-image">
                        {!! render_image_markup_by_attachment_id($settings['banner_style_two']['background_image_'][1], '', 'full', false) !!}
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <a href="{{ \App\traits\URL_PARSE::url($settings['banner_style_two']['button_url_'][2]) }}"
                   class="product-box product-box-medium product-box-medium3">
                    <div class="contents">
                        <h1 class="product-title">{!! str_replace('[brk]', '<br/>', $settings['banner_style_two']['title_'][2]) !!}</h1>
                        <div class="view-collections go-btn">{{ $settings['banner_style_two']['button_text_'][2] }} <i class="far fa-arrow-right"></i></div>
                    </div>
                    <div class="product-image">
                        {!! render_image_markup_by_attachment_id($settings['banner_style_two']['background_image_'][2], '', 'full', false) !!}
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <a href="{{ \App\traits\URL_PARSE::url($settings['banner_style_two']['button_url_'][3]) }}"
                   class="product-box product-box-medium product-box-medium3">
                    <div class="contents">
                        <h1 class="product-title">{!! str_replace('[brk]', '<br/>', $settings['banner_style_two']['title_'][3]) !!}</h1>
                        <div class="view-collections go-btn">{{ $settings['banner_style_two']['button_text_'][3] }} <i class="far fa-arrow-right"></i></div>
                    </div>
                    <div class="product-image">
                        {!! render_image_markup_by_attachment_id($settings['banner_style_two']['background_image_'][3], '', 'full', false) !!}
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <a href="{{ \App\traits\URL_PARSE::url($settings['banner_style_two']['button_url_'][4]) }}"
                   class="product-box product-box-medium product-box-medium3">
                    <div class="contents">
                        <h1 class="product-title">{!! str_replace('[brk]', '<br/>', $settings['banner_style_two']['title_'][4]) !!}</h1>
                        <div class="view-collections go-btn">{{ $settings['banner_style_two']['button_text_'][4] }} <i class="far fa-arrow-right"></i></div>
                    </div>
                    <div class="product-image">
                        {!! render_image_markup_by_attachment_id($settings['banner_style_two']['background_image_'][4], '', 'full', false) !!}
                    </div>
                </a>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <a href="{{ \App\traits\URL_PARSE::url($settings['banner_style_two']['button_url_'][5]) }}"
                   class="product-box product-box-medium product-box-medium4">
                    <div class="product-image product-image2">
                        {!! render_image_markup_by_attachment_id($settings['banner_style_two']['background_image_'][5], '', 'full', false) !!}
                    </div>
                    <div class="contents">
                        <span class="pretitle">{{ $subtitles[0] }}</span>
                        <h1 class="product-title">{!! str_replace('[brk]', '<br/>', $settings['banner_style_two']['title_'][5]) !!}</h1>
                        <div class="view-collections go-btn">{{ $settings['banner_style_two']['button_text_'][5] }} <i class="far fa-arrow-right"></i></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!--=================  2025 end New section =================-->