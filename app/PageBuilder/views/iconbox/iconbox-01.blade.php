
<!--================= Footer Start Here =================-->
<div class="footer footer-1 ar-rtl">
    <div class="container">
        <div class="footer-feature1">
            <div class="row align-items-center">
                @foreach($settings['header_eleven']['title_'] as $key => $title)
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="wrapper">
                        <div class="icon">
                            <i style="font-size: 73px;" class="{{ $settings['header_eleven']['button_icon_'][$key] }} text-danger icon"></i>
                        </div>
                        <div class="title">
                            <h1 class="box-title">{{ $title }}</h1>
                            <p>{{ $settings['header_eleven']['description_'][$key] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!--================= Footer End Here =================-->