<div id="b_1">
    @for ($i = 0; $i < 8; $i++)
        @if($i%2!=0)
            <div class="row mb-4">
                <div class="col-md-6 order-md-1 order-0 p-0 border">
                    <div class="img-tt"
                         style="background-image:url({{URL::asset('images/sanpham/sp1/product-detail-3.jpg')}});"></div>
                </div>
                <div class="col-md-6 p-3 order-md-0 order-1 border">
                    <h5><a href="">MAURIS PULVINAR LOREM</a></h5>
                    <p><a href="" class="mr-3"><i class="fas fa-user"></i> john doe</a>
                        <a href=""><i class="far fa-calendar-alt"></i></i> May 30 2017</a></p>
                    <p class="des">Offal yuccie meggings everyday carry skateboard direct trade, tumblr literally migas
                        biodiesel
                        vinyl banjo. Offal yuccie meggings everyday carry skateboard direct trade, tumblr Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit. Assumenda debitis dicta dolorem, nihil repellendus
                        sint vel? Ab adipisci aspernatur autem et molestiae molestias natus rerum voluptates? Doloremque
                        esse eum fugiat.</p>

                    <a href="" class="x-them">Xem thêm</a>
                </div>
            </div>
        @else
            <div class="row mb-4">
                <div class="col-md-6 p-0 border">
                    <div class="img-tt"
                         style="background-image:url({{URL::asset('images/sanpham/sp1/product-detail-3.jpg')}});"></div>
                </div>
                <div class="col-md-6 p-3 border">
                    <h5><a href="">MAURIS PULVINAR LOREM</a></h5>
                    <p><a href="" class="mr-3"><i class="fas fa-user"></i> john doe</a>
                        <a href=""><i class="far fa-calendar-alt"></i></i> May 30 2017</a></p>
                    <p class="des">Offal yuccie meggings everyday carry skateboard direct trade, tumblr literally migas
                        biodiesel
                        vinyl banjo. Offal yuccie meggings everyday carry skateboard direct trade, tumblr</p>

                    <a href="" class="x-them">Xem thêm</a>
                </div>
            </div>
        @endif
    @endfor
</div>