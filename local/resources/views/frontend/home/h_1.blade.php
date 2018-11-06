<div id="h_1" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4>SẢN PHẨM BÁN CHẠY</h4>

                <p class="pb-4" style="width: 86%;margin: auto">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Accusamus alias aut beatae consequatur cum
                    dicta dolorum, eius enim esse eum excepturi ipsum nesciunt numquam possimus quam quidem, quo sit
                    totam?.</p>
            </div>
            @foreach($data['best_sell_product'] as $key=>$data)
                <div class="col-md-3 mb-5 wow fadeInDown">
                    <div class="border border-hover">
                        <div class="pro_cover">
                            @if(!is_null($data->sale)||$data->sale!=0)
                                <div class="pro-sale">
                                    <div class="flag">
                                        <p class="sale-percent">{{$data->sale}}%</p>
                                    </div>

                                </div>
                            @endif
                            <a href="">
                                <div class="img-pro"
                                     style="background-image:url({{URL::asset('images/sanpham/11.jpg')}})"></div>
                            </a>
                        </div>
                        <div class="pro-info">
                            <h5><a href="">{{$data->name}}</a></h5>
                            <p class="call-num"><i class="fas fa-phone text-warning"></i> 0908 868 868</p>
                            <p class="gia-sp">

                                    @if(!is_null($data->price)||$data->price!=0)
                                        @if(!is_null($data->final_price)||$data->final_price!=0)
                                            <span class="old-price">₫{{$data->price}}</span> <span>₫{{$data->final_price}}</span>
                                        @else
                                        <span> {{$data->price}} VNĐ </span>
                                        @endif
                                    @else
                                    <span>Giá liên hệ</span>
                                    @endif

                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>