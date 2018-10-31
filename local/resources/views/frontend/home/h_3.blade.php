<div id="h_3" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4>SẢN PHẨM GIÃM GIÁ</h4>

                <p class="pb-4" style="width: 86%;margin: auto">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Accusamus alias aut beatae consequatur cum
                    dicta dolorum, eius enim esse eum excepturi ipsum nesciunt numquam possimus quam quidem, quo sit
                    totam?.</p>
            </div>
            @for ($i = 0; $i < 4; $i++)
                <div class="col-md-3 mb-5 wow fadeInDown">
                    <div class="border border-hover">
                        <div class="pro_cover">
                            <a href=""><div class="img-pro"
                                            style="background-image:url({{URL::asset('images/sanpham/11.jpg')}})"></div>
                            </a>
                        </div>
                        <div class="pro-info">
                            <h5><a href="">SẢN PHẨM SP0{{$i+1}}</a></h5>
                            <p class="call-num"><i class="fas fa-phone text-warning"></i> 0908 868 868</p>
                            <p class="gia-sp">
                                <span>$500.000 VNĐ</span>
                            </p>
                        </div>
                    </div>
                </div>
            @endfor
            
            <div class="col-12 wow fadeInUp">
                <img src="{{URL::asset('images/banner/3.jpg')}}" alt="">
            </div>
        </div>
    </div>
</div>