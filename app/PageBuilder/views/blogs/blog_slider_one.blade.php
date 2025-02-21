<!--================= Featured Product Section Start Here =================-->
<div class="rts-featured-product-section3">
    <div class="container">
        <div class="rts-featured-product-section-inner">
            <div class="section-header section-header3 text-center">
                <div class="wrapper">
                    <div class="sub-content">
                        <img class="line-1" src="{{ asset('assets/frontend/assets/images/banner/wvbo-icon.png') }}" alt="">
                        <span class="sub-text">{{__('Blogs')}}</span>
                        <img class="line-2" src="{{ asset('assets/frontend/assets/images/banner/wvbo-icon.png') }}" alt="">
                    </div>
                    <h2 class="title">{{ __('Latest Blogs') }}</h2>
                </div>
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="full-wrapper wrapper-1">
                            <div class="image-part">
                                <a href="{{ route('frontend.blog.single', $blog->slug) }}" class="image">
                                {!! render_image_markup_by_attachment_id($blog->image, '', 'full', true) !!}
                            </div>
                            <div class="blog-content">
                                <span class="date-full">
                                    <span class="day">{{ $blog->created_at->format('d') }}</span>
                                <br>
                                <span class="month">{{ $blog->created_at->format('M') }}</span>
                                </span>
                                <ul class="blog-meta">
                                    <li><a href="{{ route('frontend.blog.single', $blog->slug) }}">{!! Str::limit(purify_html_raw($blog->title), 55) !!}</a></li>
                                </ul>
                                <div class="title">
                                    <a href="{{ route('frontend.blog.single', $blog->slug) }}">{!! Str::limit(purify_html_raw($blog->blog_content), 104) !!}</a>
                                </div>
{{--                                <div class="author-info d-flex align-items-center">--}}
{{--                                    <div class="info">--}}
{{--                                        <p class="author-name">PARV INFOTECH</p>--}}
{{--                                        <p class="author-dsg">Author</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
<!--================= Featured Product Section End Here =================-->
