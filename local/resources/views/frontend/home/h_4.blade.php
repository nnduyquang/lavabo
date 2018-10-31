<div id="h_4" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h5>CHƯƠNG TRÌNH KHUYẾN MÃI</h5>
                <p>Một số chương trình ưu đãi giành cho khách hàng thân thiết từ chúng tôi.</p>
            </div>

            <div class="col-md-12 p-4 position-relative">

                <div id="owl-project" class="owl-carousel owl-theme">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="project-items border">
                            <div class="img-pro">
                                <a href="">
                                <div class="img"
                                     style="background-image:url(images/sanpham/wa-blog-2.jpg);">
                                </div>
                                </a>
                            </div>
                            <div class="info">
                                <h4><a href="">Mauris et pulvinar cidunt </a></h4>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At beatae doloribus
                                    nesciunt quis rem ullam ut. Incidunt molestiae officia quasi!
                                </p>

                                <div class="mt-1 mb-2">
                                    <a href="" style="color:#e3bc04;">XEM THÊM</a>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

                <button class="btn_pre"><i class="fas fa-angle-left"></i></button>
                <button class="btn_next"><i class="fas fa-angle-right"></i></button>

            </div>
        </div>
    </div>
</div>