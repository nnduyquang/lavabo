<div id="footer" class="container-fluid p-0">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>THÔNG TIN CÔNG TY</h5>

                    <div class="float-left">
                        <img src="{{URL::asset('images/logo/americanstandar.jpg')}}" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at, cumque dolor ipsum,
                            itaque iure libero maxime necessitatibus nulla porro quos temporibus vero voluptatum!
                            Aliquid eaque labore maiores omnis sint.</p>

                        <div class="d-flex align-items-center mb-3">
                            <div><i class="fas fa-map-signs"></i></div>
                            <h6>25 HOÀNG DIỆU, PHƯƠNG 16, QUẬN 4, HCM</h6>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <div><i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h6>090-8686-868</h6>
                                <h6>090-8686-868</h6>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <div>
                                <i class="far fa-envelope"></i>
                            </div>
                            <div>
                                <h6>infor@gmail.com</h6>
                            </div>
                        </div>


                    </div>


                </div>
                <div class="col-md-4">
                    <h5>DANH MỤC SẢN PHẨM</h5>
                    <div>
                        <ul>
                            @for ($i = 0; $i < 8; $i++)
                            <li>
                                <a href="">
                                    Danh mục số {{$i}}
                                </a>
                            </li>
                            @endfor
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5>LINK LIÊN KẾT</h5>
                    <div>
                        <ul>
                            <li>
                                <a href="">
                                    TRANG CHỦ
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    LIÊN HỆ
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    GIỚI THIỆU
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    CHÍNH SÁCH ĐỔI TRẢ
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    GỞI HÀNG & NHẬN HÀNG
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    CHÍNH SÁCH AN TOÀN
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right text-center">
        <p>Copyright © 2018 Smartlinks.vn, All Rights Reserved</p>
    </div>
</div>