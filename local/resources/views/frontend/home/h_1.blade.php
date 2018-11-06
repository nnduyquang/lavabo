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
                            <a href=""><div class="img-pro"
                                 style="background-image:url({{URL::asset('images/sanpham/11.jpg')}})"></div>
                            </a>
                        </div>
                        <div class="pro-info">
                            <h5><a href="">{{$data->name}}</a></h5>
                             <p class="call-num"><i class="fas fa-phone text-warning"></i> 0908 868 868</p>
                            <p class="gia-sp">
                                <span> @if(!is_null($data->price)||$data->price!=0)
                                        {{$data->price}} VNĐ
                                    @else
                                        Giá liên hệ
                                    @endif
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>