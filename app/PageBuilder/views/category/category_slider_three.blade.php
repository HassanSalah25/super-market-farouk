
<div class="container page-builder-ltr">
    <div class="row row_xoa6 row-style">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 col_c7gu col-style">

            <div id="so_categories_14984588431735724573"
                 class="so-categories module theme3 custom-slidercates preset01-6 preset02-5 preset03-4 preset04-3 preset05-1">
                <div class="head-title">
                    <h3 class="modtitle"><span>{{ __('Shop by Collections') }}</span></h3>
                </div>

                <div class="modcontent">
                    <div class="cat-wrap theme3 font-title">
                        @foreach($categories as $category)
                                <?php
                                $category_route = route('frontend.products.category', [
                                    'id' => optional($category)->id,
                                    'slug' => \Str::slug(optional($category)->title ?? '')
                                ]);
                                ?>
                            <div class="content-box zoomIn item-{{ $loop->iteration }}">
                                <div class="image-cat">
                                    <a href="{{$category_route}}"
                                       title="{{ html_entity_decode(optional($category)->title) }}" target="_self">

                                        {!! render_image_markup_by_attachment_id($category->image) !!}
                                    </a>
                                </div>
                                <div class="cat-content">
                                    <div class="cat-title">
                                        <a href="{{$category_route}}"
                                           title="{{ html_entity_decode(optional($category)->title) }} " target="_self">
                                            {{ html_entity_decode(optional($category)->title) }}
                                        </a>
                                    </div>

                                    <a class="viewall hidden"
                                       href="{{$category_route}}"
                                       title="Show now" target="_self">
                                        {{ __('Show now') }}
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        <!-- <div class="clr1"></div> -->
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>