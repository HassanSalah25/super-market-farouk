<div class="rts-new-collection-section section-gap" data-padding-top="{{ @$settings['padding_top'] }}"
     data-padding-bottom="{{ @$settings['padding_bottom'] }}">
    <div class="container custom-container-1318">
        <div class="recent-products-header section-header">
        </div>
        <div class="swiper rts-cmmnSlider-over" data-swiper="pagination">
            <div class="swiper-wrapper">
                @foreach($categories as $category)
                    <div class="swiper-slide">
                        <div class="collection-item">
                            <a href="{{ route('frontend.products.category', [
                                'id' => optional($category)->id,
                                'slug' => \Str::slug(optional($category)->title ?? '')
                            ]) }}">
                                {!! render_image_markup_by_attachment_id($category->image) !!}
                            </a>
                            <p class="item-quantity" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="3000">
                                {{ $category->subcategory->count() }}
                                <span>{{ __('items') }}</span>
                            </p>
                            <a href="{{ route('frontend.products.category', [
                                'id' => optional($category)->id,
                                'slug' => \Str::slug(optional($category)->title ?? '')
                            ]) }}" class="item-catagory-box" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="3000">
                                <h3 class="title">{{ $category->title }}</h3>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>