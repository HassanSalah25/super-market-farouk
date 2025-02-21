<!--================= Posters Section Start Here =================-->
<div class="rts-posters-section1">
    <div class="container">
        <div class="row">
            @php $images = $settings['banner_style_five']['background_image_'] @endphp
            <div class="col-xl-3 col-lg-6 col-sm-6 col-12">
                <a href="{{ \App\traits\URL_PARSE::url($settings['banner_style_five']['button_url_'][0]) }}"
                   class="product-box product-box-medium product-box-medium5">
                    <div class="contents">
                        <span class="pretitle">{{ $settings['banner_style_five']['subtitle_'][0] }}</span>
                        <h1 class="product-title">{{ $settings['banner_style_five']['title_'][0] }}</h1>
                        <div class="view-collections go-btn">{{ $settings['banner_style_five']['button_text_'][0] }}<i
                                    class="rt-arrow-right-long"></i>
                        </div>
                    </div>
                    <div class="product-thumb">
                        {!! render_image_markup_by_attachment_id($images[0], '', 'full', true, false) !!}
                    </div>
                </a>
            </div>
            <div class="col-xl-6 col-lg-12 col-sm-12 col-12 last-child">
                <a href="{{ \App\traits\URL_PARSE::url($settings['banner_style_five']['button_url_'][1]) }}" class="product-box product-box-medium mid">
                    <div class="contents">
                        <span class="pretitle">-{{ $settings['banner_style_five']['subtitle_'][1] }}</span>
                        <h1 class="product-title">{{ $settings['banner_style_five']['title_'][1] }}</h1>
                    </div>
                    <div class="product-thumb product-thumb1">
                        {!! render_image_markup_by_attachment_id($images[1], '', 'full', true, false) !!}
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 col-12">
                <a href="{{ \App\traits\URL_PARSE::url($settings['banner_style_five']['button_url_'][2]) }}"
                   class="product-box product-box-medium product-box-medium3">
                    <div class="contents">
                        <span class="pretitle">{{ $settings['banner_style_five']['subtitle_'][2] }}</span>
                        <h1 class="product-title">{{ $settings['banner_style_five']['title_'][2] }}</h1>
                        <div class="view-collections go-btn">{{ $settings['banner_style_five']['button_text_'][2] }}<i
                                    class="rt-arrow-right-long"></i>
                        </div>
                    </div>
                    <div class="product-thumb">
                        {!! render_image_markup_by_attachment_id($images[2], '', 'full', true, false) !!}
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!--================= Posters Section End Here =================-->