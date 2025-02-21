
<!--================= Deal Section Start Here =================-->
<div class="rts-deal-section1">
    <div class="container">
        <div class="section-inner">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12"></div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="single-inner">
                        <div class="content-box">
                            <div class="sub-content">
                                <img class="line-1" src="{{ asset('assets/frontend/assets/images/banner/wvbo-icon.png') }}" alt="">
                                <span class="sub-text">{{ $subtitle }}</span>
                            </div>
                            <h2 class="slider-title">{{ str_replace('[brk]', '<br/>', $title) }}</h2>

                            <div class="countdown" id="countdown">
                                <ul>
                                    @php
                                     $date = \Carbon\Carbon::parse($end_date)
                                    @endphp
                                    <li><span id="days"></span></li>
                                    <li><span id="hours"></span></li>
                                    <li><span id="minutes"></span></li>
                                    <li><span id="seconds"></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================= Deal Section End Here =================-->
