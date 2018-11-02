<div class="container-fluid" id="pd_1">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a class="fancybox" data-caption=""
                   data-fancybox="gallery-cus2"
                   href="{{URL::asset('images/sanpham/sp1/product-detail.jpg')}}">
                <img src="{{URL::asset('images/sanpham/sp1/product-detail.jpg')}}" alt="">
                </a>
                <div class="pd-slider position-relative mt-3">
                    <div id="owl-project" class="owl-carousel owl-theme">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="project-items border">
                                <a class="fancybox" data-caption=""
                                   data-fancybox="gallery-cus3"
                                   href="{{URL::asset('images/sanpham/sp1/product-detail-1.jpg')}}">
                                    <img src="{{URL::asset('images/sanpham/sp1/product-detail-1.jpg')}}" alt="">
                                </a>
                            </div>
                        @endfor
                    </div>

                    <button class="btn_pre"><i class="fas fa-angle-left"></i></button>
                    <button class="btn_next"><i class="fas fa-angle-right"></i></button>
                </div>
            </div>
            <div class="col-md-6">
                <h1>CHROME FINISH FAUCET.</h1>

                <p><span class="font-weight-bold">Availability:</span> In stock</p>

                <div class="mt-3" style="color: #ffd303">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                </div>
                <div class="mt-3 mb-3" style="font-size: 22px">
                    <p>$100 <span class="" style="text-decoration: line-through">$200</span></p>
                </div>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit
                    amet quam egestas semper. Aenean ultricies .
                    <br>
                    <br>

                    It has survived not only five centuries, but also the leap into ele ctronic typesetting, remaining
                    essentially un changed The industry's standard dummy text ever since.</p>

                <p class="mt-3 mb-3"><span class="font-weight-bold">Tags</span></p>
                <div class="tags-list">
                    {{--@for ($i = 0; $i < 3; $i++)--}}
                    <a href=""><i class="fas fa-tags"></i> Kitchen </a>
                    <a href=""><i class="fas fa-tags"></i> Copper </a>
                    <a href=""><i class="fas fa-tags"></i> Crome </a>
                    <a href=""><i class="fas fa-tags"></i> Outdoor </a>
                    <a href=""><i class="fas fa-tags"></i> Bathroom </a>
                    <a href=""><i class="fas fa-tags"></i> Tap </a>
                    {{--@endfor--}}
                </div>
                <div>
                <button class="order-now">ORDER NOW</button>
                </div>
            </div>
        </div>
    </div>
</div>