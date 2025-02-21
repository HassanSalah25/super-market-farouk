
<!--================= Furniture end New section =================-->
<div class="rts-box-catagory-section">
    <div class="box-catagory-inner">
        <div class="row">

            @foreach($product_categories as $category)
                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="catagory-box box1">
                        <a href="{{ route('frontend.products.category', [
                                'id' => $category->id,
                                'slug' => \Str::slug($category->title ?? '')
                            ]) }}" class="picture">
                            {!! render_image_markup_by_attachment_id($category->image, '', 'grid', false) !!}
                        </a>
                        <a href="{{ route('frontend.products.category', [
                                'id' => $category->id,
                                'slug' => \Str::slug($category->title ?? '')
                            ]) }}" class="view-collection-btn">{{ __('View Collection') }}</a>
                        <div class="contents">
                            <div class="icon">
                                <img src="https://weiboo.pixcelsthemes.com/weibooassets/images/icons/bell.png"
                                                   alt="">
                            </div>
                            <h2 class="box-heading">{{ $category->title }}</h2>
                        </div>
                        <span class="item-update">100 {{ __('New Added') }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!--================= Furniture end New section =================-->