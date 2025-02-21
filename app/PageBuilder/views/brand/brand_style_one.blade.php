<!--================= Brand Section Start Here =================-->
<div class="rts-brands-section1 brand-bg3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="slider-div">
                    <div class="swiper rts-brandSlide1">
                        <div class="swiper-wrapper">
                            @if(isset($settings['header_style_one']))

                                @foreach($settings['header_style_one']['logo_image_'] as $key => $logo_image)


                                <div class="swiper-slide">
                                    <a class="brand-front" href="#">
                                        {!! render_image_markup_by_attachment_id($logo_image) !!}
                                    </a>

                                    </div>

                                @endforeach

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================= Brand Section End Here =================-->