<div class="banner banner-1 bg-image ar-rtl" data-padding-top="{{ $settings['padding_top'] }}"
     data-padding-bottom="{{ $settings['padding_bottom'] }}">
    <div class="container custom-container-1318">
        <div class="banner-inner">
            <div class="row new-ar-4">
                <div class="col-xl-2 col-md-4 col-sm-12 gutter-1">
                    <div class="menu-vertical mt-2">
                        <div class="responsive megamenu-style-dev">
                            <div class="so-vertical-menu no-gutter">
                                <nav class="navbar-default">
                                    <div class="container-megamenu container vertical">
                                        <div class="vertical-wrapper">
                                            <div class="megamenu-pattern">
                                                <div class="container">
                                                    <ul class="megamenu" data-transition="slide" data-animationtime="300">
                                                        <li class="bg-info-1 p-3">
                                                            <h5 class="text-white" style="margin-bottom: 0px;">
                                                                <img src="{{ asset('assets/frontend/assets/images/icon-menu.png') }}"
                                                                     alt="">

                                                                {{ __('All Categories') }}</h5>
                                                        </li>
                                                        @php
                                                          $slider_categories = getAllCategory()->take(7);
                                                         @endphp
                                                        @foreach($slider_categories as $category)
                                                            <li class="item-vertical mega-style1 with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="{{route('frontend.products.category', $category->id)}}" class="">
                                                                <span>
                                                                 <strong>
                                                                    {!! render_image_markup_by_attachment_id($category->image, 'lazyautosizes lazyloaded cat-slider-img', 'grid', false) !!}
                                                                     {{ $category->title }}
                                                                 </strong>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        @endforeach

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10 col-md-8 col-sm-12 gutter-2">
                    <!-- header area start -->
                    <div class="swiper bannerSlide2">
                        <div class="swiper-wrapper">
                            @php $data = $settings['header_style_one']; @endphp
                            @foreach($data['subtitle_'] as $key => $subtitle)
                                <div class="swiper-slide">
                                    <div class="banner-single bg-image bg-image-3-1" {!! render_background_image_markup_by_attachment_id($data['background_image_'][$key], 'full', false) !!}>
                                        <div class="container">
                                            <div class="single-inner">
                                                <div class="content-box">
                                                    <p class="slider-subtitle"><img
                                                                src="https://weiboo.pixcelsthemes.com/weiboo/assets/images/banner/wvbo-icon.png"
                                                                alt=""> {{ $data['title_'][$key] }} </p>
                                                    <h2 class="slider-title">{{ $data['subtitle_'][$key] }}</h2>
                                                    <div class="slider-description">
                                                        <p>{{ $data['offer_text_'][$key] }}</p>
                                                    </div>
                                                    <a href="{{ \App\traits\URL_PARSE::url($data['button_url_'][$key]) }}"
                                                       class="slider-btn2">{{ $data['button_text_'][$key] }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- header area end -->
                </div>
            </div>
        </div>
    </div>
</div>
